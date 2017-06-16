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
    
     public function onAgregarDetalle($array) {
        try {
            $this->db->insert("entregasdetalle", $array);
            //    print $str = $this->db->last_query();
            $query = $this->db->query('SELECT LAST_INSERT_ID()');
            $row = $query->row_array();
            $LastIdInserted = $row['LAST_INSERT_ID()'];
            return $LastIdInserted;
//           print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
      public function getDetalleByID($IDX) {
        try {
            $this->db->select('ED.ID, T.Movimiento,T.FolioCliente AS Folio ,S.Nombre AS Sucursal,
S.Region,CONCAT("<span class=\'label label-success\'>$",FORMAT(T.Importe,2),"</span>") AS Importe
from entregasdetalle ED
left join entregas E on  Ed.Entrega_ID = E.ID
left join trabajos T on t.id = ED.Trabajo_ID
left join SUCURSALES S ON S.ID = T.Sucursal_ID ', false);
            $this->db->where("E.ID", $IDX);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            //print $str;
            $data = $query->result();
            return $data;
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



}
