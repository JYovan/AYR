<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author.
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class trabajo_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
    }

    public function getRecords() {
        try {
            $this->db->select("T.ID, T.Movimiento,"
                    . "(CASE WHEN  T.FolioCliente IS NULL OR T.FolioCliente =' ' THEN ' -- ' ELSE T.FolioCliente  END) AS 'Folio', "
                    . "(CASE WHEN  T.Estatus ='Concluido' THEN CONCAT('<span class=\'label label-success\'>','CONCLUIDO','</span>') "
                    . "WHEN  T.Estatus ='Borrador' THEN CONCAT('<span class=\'label label-default\'>','BORRADOR','</span>')"
                    . "ELSE CONCAT('<span class=\'label label-danger\'>','Cancelado','</span>') END) AS Estatus ,"
                    . "T.FechaCreacion as 'Fecha' ,"
                    . "(CASE WHEN  T.Atendido ='Si' THEN CONCAT('<span class=\'label label-success\'>','SI','</span>') ELSE CONCAT('<span class=\'label label-danger\'>','NO','</span>') END) AS Atendido ,"
                    . "(CASE WHEN  T.Adjunto IS NULL THEN CONCAT('<span class=\'label label-danger\'>','NO','</span>') ELSE CONCAT('<span class=\'label label-success\'>','SI','</span>') END) AS Adjunto ,"
                    . "Ct.Nombre as 'Cliente', "
                    . "concat(S.CR,' ',S.Nombre) as 'Sucursal' ,"
                    . "CONCAT('<strong>$',FORMAT(T.Importe,2),'</strong>') AS Importe,"
//                    . "(CASE WHEN  T.Clasificacion IS NULL THEN ' -- ' ELSE T.Clasificacion  END) AS 'Clasificación', "
//                    . "S.Region ,"
//                    . "(CASE WHEN  Cd.Nombre IS NULL THEN ' -- ' ELSE Cd.Nombre  END) AS 'Cuadrilla', "
                    . "concat(u.nombre,' ',u.apellidos)as 'Usuario' "
                    . "FROM TRABAJOS T  "
                    . "INNER JOIN CLIENTES CT on CT.ID = T.Cliente_ID  "
                    . "INNER JOIN SUCURSALES S on S.ID = T.Sucursal_ID "
                    . "LEFT JOIN CUADRILLAS Cd on Cd.ID = T.Cuadrilla_ID  "
                    . "INNER JOIN USUARIOs U ON U.ID = T.Usuario_ID WHERE T.ESTATUS in ('Borrador','Concluido') ", false);

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

    public function getTrabajoDetalleByID($IDX) {
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
            $this->db->order_by('TD.ID', 'DESC');
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

    public function getGeneradoresDetalleXConceptoID($IDX) {
        try {
            $this->db->select('(SELECT TD.Trabajo_ID FROM trabajosdetalle AS TD WHERE TD.ID =GD.IdTrabajoDetalle ) AS TRABAJOID, GD.*, (SELECT TD.Precio FROM trabajosdetalle AS TD WHERE TD.ID =GD.IdTrabajoDetalle ) AS Precio,(SELECT TD.Cantidad FROM trabajosdetalle AS TD WHERE TD.ID =GD.IdTrabajoDetalle ) AS CantidadTotal', false);
            $this->db->from("generadortrabajosdetalle AS GD");
            $this->db->where("GD.IdTrabajoDetalle", $IDX);
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

    public function getTrabajoFotosDetalleByID($IDX) {
        try {
            $this->db->select('TDF.*', false);
            $this->db->from("trabajodetallefotos AS TDF");
            $this->db->where("TDF.IdTrabajoDetalle", $IDX);
            $this->db->order_by('TDF.ID', 'DESC');
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

    public function getTrabajoCroquisDetalleByID($IDX) {
        try {
            $this->db->select('TDC.*', false);
            $this->db->from("trabajodetallecroquis AS TDC");
            $this->db->where("TDC.IdTrabajoDetalle", $IDX);
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

    public function getFotosXTrabajoDetalleID($IDX) {
        try {
            $this->db->select('TDF.*', false);
            $this->db->from("trabajodetallefotos AS TDF");
            $this->db->where("TDF.IdTrabajoDetalle", $IDX);
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

    public function getFotoXConceptoID($IDX) {
        try {
            $this->db->select('TDF.*', false);
            $this->db->from("trabajodetallefotos AS TDF");
            $this->db->where("TDF.ID", $IDX);
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

    public function getAnexosXTrabajoDetalleID($IDX) {
        try {
            $this->db->select('TDA.*', false);
            $this->db->from("trabajodetalleanexos AS TDA");
            $this->db->where("TDA.IdTrabajoDetalle", $IDX);
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

    public function getAnexoXConceptoID($IDX) {
        try {
            $this->db->select('TDA.*', false);
            $this->db->from("trabajodetalleanexos AS TDA");
            $this->db->where("TDA.ID", $IDX);
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

    public function getCroquisXConceptoID($IDX) {
        try {
            $this->db->select('TDC.*', false);
            $this->db->from("trabajodetallecroquis AS TDC");
            $this->db->where("TDC.ID", $IDX);
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

    public function getCroquisXTrabajoDetalleID($IDX) {
        try {
            $this->db->select('TDC.*', false);
            $this->db->from("trabajodetallecroquis AS TDC");
            $this->db->where("TDC.IdTrabajoDetalle", $IDX);
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

    public function getTrabajoAnexosDetalleByID($IDX) {
        try {
            $this->db->select('TDA.*', false);
            $this->db->from("trabajodetalleanexos AS TDA");
            $this->db->where("TDA.IdTrabajoDetalle", $IDX);
            $this->db->order_by('TDA.ID', 'DESC');
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

    public function onAgregar($array) {
        try {
            $this->db->insert("trabajos", $array);
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
            $this->db->insert("trabajosdetalle", $array);
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

    public function onAgregarDetalleGenerador($array) {
        try {
            $this->db->insert("generadortrabajosdetalle", $array);
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

    public function onAgregarDetalleFotos($array) {
        try {
            $this->db->insert("trabajodetallefotos", $array);
            //     print $str = $this->db->last_query();
            $query = $this->db->query('SELECT LAST_INSERT_ID()');
            $row = $query->row_array();
            $LastIdInserted = $row['LAST_INSERT_ID()'];
            return $LastIdInserted;
//           print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onChangeIntExtByDetalleID($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("trabajosdetalle", $DATA);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarDetalleFoto($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("trabajodetallefotos", $DATA);
            //    print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarDetalleAnexos($array) {
        try {
            $this->db->insert("trabajodetalleanexos", $array);
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

    public function onModificarDetalleAnexo($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("trabajodetalleanexos", $DATA);
            //      print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarDetalleCroquis($array) {
        try {
            $this->db->insert("trabajodetallecroquis", $array);
            //        print $str = $this->db->last_query();
            $query = $this->db->query('SELECT LAST_INSERT_ID()');
            $row = $query->row_array();
            $LastIdInserted = $row['LAST_INSERT_ID()'];
            return $LastIdInserted;
//           print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarDetalleCroquis($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("trabajodetallecroquis", $DATA);
            //      print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("trabajos", $DATA);
            //    print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarGenerador($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("generadortrabajosdetalle", $DATA);
            //    print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar($ID) {
        try {
            $this->db->set('Estatus', 'Cancelado');
            $this->db->where('ID', $ID);
            $this->db->update("trabajos");
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEntregado($ID) {
        try {
//            $query = $this->db->query("CALL SP_ENTREGADO ('{$ID}')");
             $this->db->set('T.Estatus', 'Entregado');
            $this->db->where('T.ID = ED.TID');
            $this->db->update("trabajos T, (   SELECT  Trabajo_ID TID     FROM EntregasDetalle     JOIN entregas on entregas.ID = entregasdetalle.Entrega_ID  where entregas.ID = ".$ID.") ED");
    
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onCancelarEntregado($ID) {
        try {
            // $query = $this->db->query("CALL SP_CANCELA_ENTREGADO ('{$ID}')");
            $this->db->set('T.Estatus', 'Concluido');
            $this->db->where('T.ID = ED.TID');
            $this->db->update("trabajos T, (   SELECT  Trabajo_ID TID     FROM EntregasDetalle     JOIN entregas on entregas.ID = entregasdetalle.Entrega_ID  where entregas.ID = ".$ID.") ED");
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarGeneradorEditar($ID) {
        try {
            $this->db->where('ID', $ID);
            $this->db->delete("generadortrabajosdetalle");
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarFotoXConcepto($ID) {
        try {
            $this->db->where('ID', $ID);
            $this->db->delete('trabajodetallefotos');
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarAnexoXConcepto($ID) {
        try {
            $this->db->where('ID', $ID);
            $this->db->delete('trabajodetalleanexos');
            // print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarCroquisXID($ID) {
        try {
            $this->db->where('ID', $ID);
            $this->db->delete('trabajodetallecroquis');
            //    print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoByID($ID) {
        try {
            $this->db->select('T.*', false);
            $this->db->from('trabajos AS T');
            $this->db->where('T.ID', $ID);
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

    public function getConceptosXPreciarioID($ID) {
        try {

            $this->db->select('PC.ID,CONCAT("<span class=\"label label-danger\">",PC.Clave,"</span>") AS Clave, PC.Descripcion AS "Descripción", PC.Unidad AS Unidad, CONCAT("<span class=\"label label-success\">$",FORMAT(PC.Costo,2),"</span>") AS Costo, PC.Moneda AS Moneda', false);
            $this->db->from('preciarioconceptos AS PC');
            $this->db->where('PC.Preciarios_ID', $ID);
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

    public function getConceptoByID($ID) {
        try {
            $this->db->select('PC.ID, PC.Clave, PC.Descripcion, PC.Unidad, PC.Costo, FORMAT(PC.Costo,2) AS Precio, PC.Moneda, PC.PreciarioSubSubCategoria_ID, PC.PreciarioSubCategorias_ID, PC.PreciarioCategorias_ID, PC.Preciarios_ID', false);
            $this->db->from('preciarioconceptos AS PC');
            $this->db->where('PC.ID', $ID);
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

    public function getConceptoByIDSinFormato($ID) {
        try {
            $this->db->select('PC.*', false);
            $this->db->from('preciarioconceptos AS PC');
            $this->db->where('PC.ID', $ID);
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

    public function getPrecioPorConceptoID($ID, $IDCO) {
        try {
            $this->db->select('TD.Precio', false);
            $this->db->from('trabajosdetalle AS TD');
            $this->db->where('TD.ID', $ID);
            $this->db->where('TD.PreciarioConcepto_ID', $IDCO);
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

    public function onEliminarConcepto($ID) {
        try {
            $this->db->where('ID', $ID);
            $this->db->delete('trabajosdetalle');
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarGeneradoresXConcepto($ID) {
        try {
            $this->db->where('IdTrabajoDetalle', $ID);
            $this->db->delete('generadortrabajosdetalle');
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarFotosXConcepto($ID) {
        try {
            $this->db->where('IdTrabajoDetalle', $ID);
            $this->db->delete('trabajodetallefotos');
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarCroquisXConcepto($ID) {
        try {
            $this->db->where('IdTrabajoDetalle', $ID);
            $this->db->delete('trabajodetallecroquis');
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarAnexosXConcepto($ID) {
        try {
            $this->db->where('IdTrabajoDetalle', $ID);
            $this->db->delete('trabajodetalleanexos');
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarConceptoCantidadEImporte($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("trabajosdetalle", $DATA);
            //    print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarImportePorTrabajo($ID) {
        try {
            $this->db->set('Importe', '(SELECT SUM(TD.Importe) AS "IMPORTE_TOTAL_TRABAJO" FROM trabajosdetalle AS TD WHERE TD.Trabajo_ID = ' . $ID . ')', FALSE);
            $this->db->where('ID', $ID);
            $this->db->update('trabajos');
            $this->db->select('CONCAT("$",FORMAT(SUM(TD.Importe),2)) AS "IMPORTE_TOTAL_TRABAJO"', false);
            $this->db->from('trabajosdetalle AS TD');
            $this->db->where('TD.Trabajo_ID', $ID);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            //  print $str;
            $data = $query->result();
            return $data;
            //    print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getImporteTotalDelTrabajoByID($ID) {
        try {
            $this->db->select('CONCAT("$",FORMAT(SUM(TD.Importe),2)) AS "IMPORTE_TOTAL_TRABAJO"', false);
            $this->db->from('trabajosdetalle AS TD');
            $this->db->where('TD.Trabajo_ID', $ID);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            //  print $str;
            $data = $query->result();
            return $data;
            //    print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajosControlByClienteXClasificacion($ID, $Clasificacion) {
        try {

            $this->db->select('T.ID, T.Movimiento,T.FolioCliente AS Folio ,S.Nombre AS Sucursal,S.Region,'
                    . 'CONCAT("<span class=\'label label-success\'>$",FORMAT(T.Importe,2),"</span>") AS Importe '
                    . 'FROM Trabajos T '
                    . 'INNER join SUCURSALES S ON S.ID = T.Sucursal_ID ', false);
            $this->db->where_in('T.Estatus', array('Concluido'));
            $this->db->where('T.Cliente_ID', $ID);
            $this->db->like('T.Clasificacion', $Clasificacion);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            // print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /*     * ************************* Reportes------------------------------ */

    public function getCategoriasPresupuesto($ID) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select("T.FechaCreacion,T.FolioCliente,T.Importe,T.TrabajoSolicitado,T.TrabajoRequerido,
                                CTE.Nombre AS Cliente,S.CR,S.Nombre AS Sucursal, E.Nombre AS Empresa,E.RutaLogo AS LogoEmpresa,CTE.RutaLogo AS LogoCliente,
                                PC.Clave,TD.Unidad,TD.Cantidad,TD.Precio,TD.IntExt,SUM(TD.Importe) AS ImporteRenglon,
                                PCAT.Descripcion AS Categoria,PCAT.Clave AS ClaveCategoria, PC.Descripcion AS Concepto,S.Region,S.Ciudad,S.Estado,S.Calle,S.NoExterior,S.NoInterior,S.Colonia
                                FROM TRABAJOS T
                                INNER JOIN clientes CTE ON CTE.ID =  T.Cliente_ID
                                INNER JOIN sucursales S ON S.ID  = T.Sucursal_ID
                                INNER JOIN trabajosdetalle TD ON TD.Trabajo_ID = T.ID
                                INNER JOIN preciarios PRE ON PRE.ID = T.Preciario_ID
                                INNER JOIN preciarioconceptos PC ON PC.ID = TD.PreciarioConcepto_ID
                                INNER JOIN preciariocategorias PCAT ON PCAT.ID = PC.PreciarioCategorias_ID
                                INNER JOIN empresas E ON E.id = S.Empresa_ID", false);
            $this->db->where_in('T.Estatus', array('Borrador', 'Concluido'));
            $this->db->where('T.ID', $ID);
            $this->db->order_by(' T.ID', 'desc');
            $this->db->group_by(array('PCAT.Descripcion'));
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            //  print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPresupuesto($ID) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select('T.FechaCreacion,T.FolioCliente,T.Importe,T.TrabajoSolicitado,T.TrabajoRequerido,
                                CTE.Nombre AS Cliente,S.CR,S.Nombre AS Sucursal, E.Nombre AS Empresa,E.RutaLogo AS LogoEmpresa,CTE.RutaLogo AS LogoCliente,
                                PC.Clave,TD.Unidad,TD.Cantidad,TD.Precio,TD.IntExt,TD.Importe AS ImporteRenglon,
                                PCAT.Descripcion AS Categoria,PCAT.Clave AS ClaveCategoria, PC.Descripcion AS Concepto,S.Region,S.Ciudad,S.Estado,S.Calle,S.NoExterior,S.NoInterior,S.Colonia
                                FROM TRABAJOS T
                                INNER JOIN clientes CTE ON CTE.ID =  T.Cliente_ID
                                INNER JOIN sucursales S ON S.ID  = T.Sucursal_ID
                                INNER JOIN trabajosdetalle TD ON TD.Trabajo_ID = T.ID
                                INNER JOIN preciarios PRE ON PRE.ID = T.Preciario_ID
                                INNER JOIN preciarioconceptos PC ON PC.ID = TD.PreciarioConcepto_ID
                                INNER JOIN preciariocategorias PCAT ON PCAT.ID = PC.PreciarioCategorias_ID
                                INNER JOIN empresas E ON E.id = S.Empresa_ID', false);
            $this->db->where_in('T.Estatus', array('Borrador', 'Concluido'));
            $this->db->where('T.ID', $ID);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            //  print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getFin49ByID($ID) {
        try {
            $this->db->select('T.Movimiento,T.FechaCreacion,T.FolioCliente,T.ImpactoEnPlazo,T.DiasImpacto,T.CausaTrabajo,T.ClaveOrigenTrabajo,
                                T.EspecificaOrigenTrabajo,T.DescripcionOrigenTrabajo,T.DescripcionRiesgoTrabajo,T.DescripcionAlcanceTrabajo,T.Importe,
                                CTE.Nombre AS NombreCliente,CTE.NombreCorto,S.CR,S.Nombre AS NombreSucursal,S.TipoConcepto,S.TipoObra,S.Contrato,
                                S.FechaInicio,S.FechaFin, E.Nombre AS Empresa, ES.Nombre AS EmpresaSupervisora,CTE.RutaLogo
                                FROM TRABAJOS T
                                INNER JOIN clientes CTE ON CTE.ID =  T.Cliente_ID
                                INNER JOIN sucursales S ON S.ID  = T.Sucursal_ID
                                LEFT JOIN empresassupervisoras ES ON ES.ID = S.EmpresaSupervisora_ID
                                LEFT JOIN empresas E ON E.id = S.Empresa_ID', false);
            $this->db->where_in('T.Estatus', array('Borrador', 'Concluido'));
            $this->db->where('T.ID', $ID);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            //   print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getResumenPartidas($ID) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select(' T.FechaCreacion,T.FolioCliente,T.Importe,T.TrabajoSolicitado,
                                CTE.Nombre AS Cliente,S.CR,S.Nombre AS Sucursal,
                                E.Nombre AS Empresa,E.RutaLogo AS LogoEmpresa,CONCAT(E.ContactoNombre," ",E.ContactoApellidos) AS ContactoEmpresa,
                                CONCAT(S.FirmaManttoNombres1," ",S.FirmaManttoApellidos1) AS FirmaBanco,
                                CTE.RutaLogo AS LogoCliente,
                                TD.IntExt,SUM(TD.Importe) AS ImporteRenglon, PCAT.Descripcion AS Categoria
                                FROM TRABAJOS T
                                INNER JOIN clientes CTE ON CTE.ID =  T.Cliente_ID
                                INNER JOIN sucursales S ON S.ID  = T.Sucursal_ID
                                INNER JOIN trabajosdetalle TD ON TD.Trabajo_ID = T.ID
                                INNER JOIN preciarios PRE ON PRE.ID = T.Preciario_ID
                                INNER JOIN preciarioconceptos PC ON PC.ID = TD.PreciarioConcepto_ID
                                INNER JOIN preciariocategorias PCAT ON PCAT.ID = PC.PreciarioCategorias_ID
                                INNER JOIN empresas E ON E.id = S.Empresa_ID', false);
            $this->db->where_in('T.Estatus', array('Borrador', 'Concluido'));
            $this->db->where('T.ID', $ID);
            $this->db->group_by(array('TD.IntExt', 'PCAT.Descripcion'));
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            //  print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPresupuestoBBVA($ID) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select('T.FechaCreacion,T.FolioCliente,T.Importe,
                                CTE.Nombre AS Cliente,S.CR,S.Nombre AS Sucursal, E.Nombre AS Empresa,E.RutaLogo AS LogoEmpresa,CTE.RutaLogo AS LogoCliente,
                                PC.Clave,TD.Unidad,TD.Cantidad,TD.Precio,TD.IntExt,TD.Importe AS ImporteRenglon,
                                PCAT.Descripcion AS Categoria, PC.Descripcion AS Concepto,ES.Nombre AS Supervisora
                                FROM TRABAJOS T
                                INNER JOIN clientes CTE ON CTE.ID =  T.Cliente_ID
                                INNER JOIN sucursales S ON S.ID  = T.Sucursal_ID
                                INNER JOIN trabajosdetalle TD ON TD.Trabajo_ID = T.ID
                                LEFT JOIN preciarios PRE ON PRE.ID = T.Preciario_ID
                                LEFT JOIN preciarioconceptos PC ON PC.ID = TD.PreciarioConcepto_ID
                                LEFT JOIN preciariocategorias PCAT ON PCAT.ID = PC.PreciarioCategorias_ID
                                LEFT JOIN empresassupervisoras ES ON ES.ID = S.empresasupervisora_id
                                LEFT JOIN empresas E ON E.id = S.Empresa_ID', false);
            $this->db->where_in('T.Estatus', array('Borrador', 'Concluido'));
            $this->db->where('T.ID', $ID);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            // print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getConceptosReportesGenericos($ID) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select('T.FechaCreacion, T.FolioCliente, T.Importe, CTE.Nombre AS Cliente, S.CR, S.Nombre
AS Sucursal, E.Nombre AS Empresa, CTE.RutaLogo AS LogoCliente, PC.Clave,
TD.Unidad, TD.Cantidad, TD.Precio,PCAT.Descripcion AS Categoria, PC.Descripcion AS Concepto,TD.PreciarioConcepto_ID AS ConceptoId,
CONCAT(S.Calle," ",ifnull(S.NoExterior,"")," ",ifnull(S.NoInterior,"")," ",
ifnull(S.Colonia,"")," ",ifnull(S.Ciudad,"")," ",ifnull(S.Estado,"")) AS Direccion
FROM TRABAJOS T
INNER JOIN clientes CTE ON CTE.ID = T.Cliente_ID
INNER JOIN sucursales S ON S.ID = T.Sucursal_ID
INNER JOIN trabajosdetalle TD ON TD.Trabajo_ID = T.ID
left JOIN preciarios PRE ON PRE.ID = T.Preciario_ID
left JOIN preciarioconceptos PC ON PC.ID = TD.PreciarioConcepto_ID
left JOIN preciariocategorias PCAT ON PCAT.ID = PC.PreciarioCategorias_ID
left JOIN empresas E ON E.id = S.Empresa_ID', false);
            $this->db->where_in('T.Estatus', array('Borrador', 'Concluido'));
            $this->db->where('T.ID', $ID);
            $this->db->order_by('TD.Renglon', 'DESC');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            // print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDetalleGenerador($ID) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select('GTD.Concepto_ID,
GTD.Area,GTD.Eje,GTD.EntreEje1,GTD.EntreEje2,GTD.Largo,GTD.Ancho,GTD.Alto,GTD.Cantidad,GTD.Total
FROM TRABAJOS T
INNER JOIN trabajosdetalle TD ON TD.Trabajo_ID = T.ID
left join generadortrabajosdetalle GTD ON GTD.IdTrabajoDetalle = TD.ID  ', false);
            $this->db->where_in('T.Estatus', array('Borrador', 'Concluido'));
            $this->db->where('T.ID', $ID);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            // print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDetalleCroquis($ID) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select('TDC.IdTrabajoDetalle,TDC.Url,TDC.Observaciones,pc.ID as PreciarioConcepto_ID,
CTE.Nombre AS Cliente, S.CR, S.Nombre
AS Sucursal, E.Nombre AS Empresa, CTE.RutaLogo AS LogoCliente, PC.Clave,
TD.Unidad, TD.Cantidad, PCAT.Descripcion AS Categoria, PC.Descripcion AS Concepto,TD.PreciarioConcepto_ID AS ConceptoId,
CONCAT(S.Calle," ",ifnull(S.NoExterior,"")," ",ifnull(S.NoInterior,"")," ",
ifnull(S.Colonia,"")," ",ifnull(S.Ciudad,"")," ",ifnull(S.Estado,"")) AS Direccion
FROM TRABAJOS T
INNER JOIN trabajosdetalle TD ON TD.Trabajo_ID = T.ID
left join trabajodetallecroquis TDC ON TDC.IdTrabajoDetalle = TD.ID
left join preciarioconceptos pc on pc.id = td.preciarioconcepto_id
INNER JOIN clientes CTE ON CTE.ID = T.Cliente_ID
INNER JOIN sucursales S ON S.ID = T.Sucursal_ID
left JOIN preciariocategorias PCAT ON PCAT.ID = PC.PreciarioCategorias_ID
left JOIN empresas E ON E.id = S.Empresa_ID', false);
            $this->db->where_in('T.Estatus', array('Borrador', 'Concluido'));
            $this->db->where('T.ID', $ID);
            $this->db->where('TDC.Url is NOT NULL', NULL, FALSE);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            // print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDetalleFotos($ID) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select('TD.ID AS ID,pc.ID as PreciarioConcepto_ID,
                               CTE.Nombre AS Cliente, S.CR, S.Nombre AS Sucursal, E.Nombre AS Empresa, CTE.RutaLogo AS LogoCliente, PC.Clave,
                               TD.Unidad, TD.Cantidad, PCAT.Descripcion AS Categoria, PC.Descripcion AS Concepto,TD.PreciarioConcepto_ID AS ConceptoId,
                               CONCAT(S.Calle," ",ifnull(S.NoExterior,"")," ",ifnull(S.NoInterior,"")," ",
                               ifnull(S.Colonia,"")," ",ifnull(S.Ciudad,"")," ",ifnull(S.Estado,"")) AS Direccion', false);
            $this->db->from('Trabajos AS T');
            $this->db->join('trabajosdetalle AS TD', 'TD.Trabajo_ID = T.ID');
            $this->db->join('preciarioconceptos AS pc ', ' pc.id = td.preciarioconcepto_id', 'left');
            $this->db->join('Clientes AS CTE ', 'CTE.ID = T.Cliente_ID');
            $this->db->join('sucursales AS S ', 'S.ID = T.Sucursal_ID');
            $this->db->join('preciariocategorias AS PCAT', 'PCAT.ID = PC.PreciarioCategorias_ID', 'left');
            $this->db->join('empresas AS E', 'E.id = S.Empresa_ID', 'left');
            $this->db->join('trabajodetallefotos AS TDF', 'TDF.IdTrabajoDetalle = TD.ID', 'left');
            $this->db->where_in('T.Estatus', array('Borrador', 'Concluido'));
            $this->db->where('T.ID', $ID);
            $this->db->where('TDF.Url IS NOT NULL', NULL, FALSE);
            $this->db->order_by('TD.ID', 'DESC');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
           // print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDetalleFotosXID($ID) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select('TDF.*', false);
            $this->db->from('trabajodetallefotos AS TDF');
            $this->db->where('TDF.IdTrabajoDetalle', $ID);
            $this->db->where('TDF.Url IS NOT NULL', NULL, FALSE);
            $this->db->order_by('TDF.ID', 'DESC');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//            print $str . ";\n";
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    
    /*Excel conceptos por entrega (TARIFARIO)*/
    
    
    public function getTarifarioXEntrega($ID) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select('pc.Clave,pc.Descripcion,td.Cantidad AS Cantidad,
pc.Unidad, pc.Costo AS "Precio" , sum(td.Importe) AS Importe , E.Importe AS ImporteTotal
FROM entregas E
inner join entregasdetalle ed on ed.Entrega_ID = E.ID
inner join trabajos t on t.id = ed.Trabajo_ID
inner join trabajosdetalle td on td.Trabajo_ID = t.ID 
inner join preciarioconceptos pc on pc.ID = td.PreciarioConcepto_ID', false);
           // $this->db->where_in('T.Estatus', array('Borrador', 'Concluido'));
            $this->db->where('E.ID', $ID);
            $this->db->group_by(array('td.PreciarioConcepto_ID'));
            $this->db->order_by('pc.ID', 'ASC');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            // print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
}
