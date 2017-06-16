<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author.
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class entregas_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
    }
    
    
    public function getRecords() {
        try {
            $this->db->select("E.ID, E.Movimiento,"
                    . "(CASE WHEN  E.NoEntrega IS NULL OR E.NoEntrega =' ' THEN ' -- ' ELSE E.NoEntrega  END) AS 'Entrega', "
                    . "(CASE WHEN  E.Estatus ='Concluido' THEN CONCAT('<span class=\'label label-success\'>','CONCLUIDO','</span>') "
                    . "WHEN  E.Estatus ='Borrador' THEN CONCAT('<span class=\'label label-default\'>','BORRADOR','</span>')"
                    . "ELSE CONCAT('<span class=\'label label-danger\'>','Cancelado','</span>') END) AS Estatus ,"
                    . "E.FechaCreacion as 'Fecha' ,"
                    . "Ct.Nombre as 'Cliente', "
                     . "E.Clasificacion as 'Clasificación', "
                    . "concat(u.nombre,' ',u.apellidos)as 'Usuario' "
                    . "FROM ENTREGAS E  "
                    . "INNER JOIN CLIENTES CT on CT.ID = E.Cliente_ID  "
                    . "INNER JOIN USUARIOS U ON U.ID = E.Usuario_ID WHERE E.ESTATUS in ('Borrador','Concluido') ", false);

            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
     public function getEntregaByID($ID) {
        try {
            $this->db->select('E.*', false);
            $this->db->from('entregas AS E');
            $this->db->where('E.ID', $ID);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    
     public function onAgregar($array) {
        try {
            $this->db->insert("entregas", $array);
            //   print $str = $this->db->last_query();
            $query = $this->db->query('SELECT LAST_INSERT_ID()');
            $row = $query->row_array();
            $LastIdInserted = $row['LAST_INSERT_ID()'];
            return $LastIdInserted;
//           print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function onModificar($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("entregas", $DATA);
            //    print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
     public function onEliminar($ID) {
        try {
            $this->db->set('Estatus', 'Cancelado');
            $this->db->where('ID', $ID);
            $this->db->update("entregas");
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    
     public function getEntregaDetalleByID($IDX) {
        try {
            $this->db->select('TD.ID AS ID,'
                    . 'CONCAT("<span class=\'label label-danger\'>",PC.Clave,"</span>") AS Clave, '
                    . '(CASE '
                    . 'WHEN TD.IntExt = "" THEN '
                    . 'CONCAT("<select id=\"#IntExtM\" class=\"form-control\" onchange=\"onChangeIntExtByID(this.value,",TD.ID,")\"><option value=\"\"></option><option value=\"Interior\">Interior</option><option value=\"Exterior\">Exterior</option></select>") '
                    . 'WHEN TD.IntExt = "Interior" THEN '
                    . 'CONCAT("<select id=\"#IntExtM\" class=\"form-control\"  onchange=\"onChangeIntExtByID(this.value,",TD.ID,")\"><option value=\"Interior\">Interior</option><option value=\"Exterior\">Exterior</option></select>") '
                    . 'WHEN TD.IntExt = "Exterior" THEN '
                    . 'CONCAT("<select id=\"#IntExtM\" class=\"form-control\" value=\"Exterior\" onchange=\"onChangeIntExtByID(this.value,",TD.ID,")\"><option value=\"Exterior\">Exterior</option><option value=\"Interior\">Interior</option></select>") '
                    . ' END) AS "Int/Ext",'
                    . 'CONCAT("<textarea class=\"form-control CustomDetalleDescripcion\" rows=\"5\" readonly=\"\">",PC.Descripcion,"</textarea>") AS Descripcion, '
                    . 'TD.Cantidad, TD.Unidad, '
                    . 'CONCAT("$",FORMAT(TD.Precio,2)) AS Precio, CONCAT("<span class=\'label label-success\'>$",FORMAT(TD.Importe,2),"</span>") AS Importe, '
                    . 'CONCAT("<span class=\"hide\">",TD.Moneda,"</span>") AS ".",'
                    . '(CASE '
                    . 'WHEN (SELECT COUNT(*) FROM generadortrabajosdetalle AS GTDC WHERE GTDC.IdTrabajoDetalle = TD.ID)> 0 THEN '
                    . 'CONCAT("<span class=\"fa fa-calculator customButtonDetalleGenerador has-items\" onclick=\"getGeneradoresDetalleXConceptoID(",TD.ID,",",TD.Trabajo_ID,",",TD.PreciarioConcepto_ID,",this)\"></span> ") '
                    . 'ELSE CONCAT("<span class=\"fa fa-calculator customButtonDetalleGenerador\" onclick=\"getGeneradoresDetalleXConceptoID(",TD.ID,",",TD.Trabajo_ID,",",TD.PreciarioConcepto_ID,",this)\"></span>") '
                    . 'END) AS Generador, '
                    . '(CASE '
                    . 'WHEN (SELECT COUNT(*) FROM trabajodetallefotos AS TDF WHERE TDF.IdTrabajoDetalle = TD.ID)>0 THEN '
                    . 'CONCAT("<span class=\"fa fa-camera customButtonDetalleGenerador has-items\" onclick=\"getFotosXConceptoID(",TD.ID,",",TD.Trabajo_ID,")\"></span> (",(SELECT COUNT(*) FROM trabajodetallefotos AS TDF WHERE TDF.IdTrabajoDetalle = TD.ID),")")'
                    . 'ELSE CONCAT("<span class=\"fa fa-camera customButtonDetalleGenerador\" onclick=\"getFotosXConceptoID(",TD.ID,",",TD.Trabajo_ID,")\"></span>") '
                    . 'END) AS Fotos, '
                    . '(CASE '
                    . 'WHEN (SELECT COUNT(*) FROM trabajodetallecroquis AS TDCRO WHERE TDCRO.IdTrabajoDetalle = TD.ID)> 0 THEN '
                    . 'CONCAT("<span class=\"fa fa-map customButtonDetalleGenerador has-items\" onclick=\"getCroquisXConceptoID(",TD.ID,",",TD.Trabajo_ID,")\"></span> (",(SELECT COUNT(*) FROM trabajodetallecroquis AS TDCRO WHERE TDCRO.IdTrabajoDetalle = TD.ID),")") '
                    . 'ELSE CONCAT("<span class=\"fa fa-map customButtonDetalleGenerador\" onclick=\"getCroquisXConceptoID(",TD.ID,",",TD.Trabajo_ID,")\"></span>") '
                    . 'END) AS Croquis, '
                    . '(CASE '
                    . 'WHEN (SELECT COUNT(*) FROM trabajodetalleanexos AS TDANE WHERE TDANE.IdTrabajoDetalle = TD.ID)>0 THEN '
                    . 'CONCAT("<span class=\"fa fa-paperclip customButtonDetalleGenerador has-items\" onclick=\"getAnexosXConceptoID(",TD.ID,",",TD.Trabajo_ID,")\"></span> (",(SELECT COUNT(*) FROM trabajodetalleanexos AS TDANE WHERE TDANE.IdTrabajoDetalle = TD.ID),")") '
                    . 'ELSE CONCAT("<span class=\"fa fa-paperclip customButtonDetalleGenerador\" onclick=\"getAnexosXConceptoID(",TD.ID,",",TD.Trabajo_ID,")\"></span>") '
                    . 'END) AS Anexos, '
                    . 'CONCAT("<span class=\"fa fa-times customButtonDetalleEliminar\" onclick=\"onEliminarConceptoXDetalle(this,",TD.ID,")\"></span>") AS Eliminar,'
                    . 'TD.PreciarioConcepto_ID AS "PCID"', false);
            $this->db->from("trabajosdetalle AS TD");
            $this->db->join("preciarioconceptos AS PC", "PC.ID = TD.PreciarioConcepto_ID");
            $this->db->where("TD.Trabajo_ID", $IDX);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//            print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }


}
