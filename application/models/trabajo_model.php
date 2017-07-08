<?php

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
                    . "INNER JOIN USUARIOS U ON U.ID = T.Usuario_ID WHERE T.ESTATUS in ('Borrador','Concluido') ", false);
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
                    . 'WHEN (SELECT COUNT(*) FROM trabajodetallefotos AS TDF WHERE TDF.IdTrabajoDetalle = TD.ID AND TDF.IdTrabajo = TD.Trabajo_ID  )>0 THEN '
                    . 'CONCAT("<span class=\"fa fa-camera customButtonDetalleGenerador has-items\" onclick=\"getFotosXConceptoID(",TD.ID,",",TD.Trabajo_ID,")\"></span> (",(SELECT COUNT(*) FROM trabajodetallefotos AS TDF WHERE TDF.IdTrabajoDetalle = TD.ID AND TDF.IdTrabajo = TD.Trabajo_ID),")")'
                    . 'ELSE CONCAT("<span class=\"fa fa-camera customButtonDetalleGenerador\" onclick=\"getFotosXConceptoID(",TD.ID,",",TD.Trabajo_ID,")\"></span>") '
                    . 'END) AS Fotos, '
                    . '(CASE '
                    . 'WHEN (SELECT COUNT(*) FROM trabajodetallecroquis AS TDCRO WHERE TDCRO.IdTrabajoDetalle = TD.ID)> 0 THEN '
                    . 'CONCAT("<span class=\"fa fa-map customButtonDetalleGenerador has-items\" onclick=\"getCroquisXConceptoID(",TD.ID,",",TD.Trabajo_ID,")\"></span> (",(SELECT COUNT(*) FROM trabajodetallecroquis AS TDCRO WHERE TDCRO.IdTrabajoDetalle = TD.ID),")") '
                    . 'ELSE CONCAT("<span class=\"fa fa-map customButtonDetalleGenerador\" onclick=\"getCroquisXConceptoID(",TD.ID,",",TD.Trabajo_ID,")\"></span>") '
                    . 'END) AS Croquis, '
                    . '(CASE '
                    . 'WHEN (SELECT COUNT(*) FROM trabajodetalleanexos AS TDANE WHERE TDANE.IdTrabajoDetalle = TD.ID AND TDANE.IdTrabajo = TD.Trabajo_ID )>0 THEN '
                    . 'CONCAT("<span class=\"fa fa-paperclip customButtonDetalleGenerador has-items\" onclick=\"getAnexosXConceptoID(",TD.ID,",",TD.Trabajo_ID,")\"></span> (",(SELECT COUNT(*) FROM trabajodetalleanexos AS TDANE WHERE TDANE.IdTrabajoDetalle = TD.ID AND TDANE.IdTrabajo = TD.Trabajo_ID ),")") '
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

    public function getTrabajoDetalleAbiertoByID($IDX) {
        try {
            $this->db->select('tda.ID AS ID,'
                    . 'CONCAT("<span class=\'label label-danger\'>",tda.Clave,"</span>") AS Clave, '
                    . 'CONCAT("<textarea class=\"form-control CustomNuevoDetalleAbiertoDescripcion CustomUppercase \" rows=\"5\" readonly=\"\">",tda.Descripcion,"</textarea>") AS Descripcion, '
                    . '(CASE '
                    . 'WHEN (SELECT COUNT(*) FROM trabajodetallefotosantes AS TDFA WHERE TDFA.IdTrabajoDetalle = tda.ID AND TDFA.IdTrabajo = tda.Trabajo_ID)>0 THEN '
                    . 'CONCAT("<span class=\"fa fa-camera customButtonDetalleGenerador has-items\" onclick=\"getFotosAntesXConceptoID(",tda.ID,",",tda.Trabajo_ID,")\"></span> (",(SELECT COUNT(*) FROM trabajodetallefotosantes AS TDFA WHERE TDFA.IdTrabajoDetalle = tda.ID AND TDFA.IdTrabajo = tda.Trabajo_ID),")")'
                    . 'ELSE CONCAT("<span class=\"fa fa-camera customButtonDetalleGenerador\" onclick=\"getFotosAntesXConceptoID(",tda.ID,",",tda.Trabajo_ID,")\"></span>") '
                    . 'END) AS "Fotos Antes", '
                    . '(CASE '
                    . 'WHEN (SELECT COUNT(*) FROM trabajodetallefotosproceso AS TDFP WHERE TDFP.IdTrabajoDetalle = tda.ID)>0 THEN '
                    . 'CONCAT("<span class=\"fa fa-camera customButtonDetalleGenerador has-items\" onclick=\"getFotosProcesoXConceptoID(",tda.ID,",",tda.Trabajo_ID,")\"></span> (",(SELECT COUNT(*) FROM trabajodetallefotosproceso AS TDFP WHERE TDFP.IdTrabajoDetalle = tda.ID),")")'
                    . 'ELSE CONCAT("<span class=\"fa fa-camera customButtonDetalleGenerador\" onclick=\"getFotosProcesoXConceptoID(",tda.ID,",",tda.Trabajo_ID,")\"></span>") '
                    . 'END) AS "Fotos Proceso", '
                    . '(CASE '
                    . 'WHEN (SELECT COUNT(*) FROM trabajodetallefotosdespues AS TDFD WHERE TDFD.IdTrabajoDetalle = tda.ID)>0 THEN '
                    . 'CONCAT("<span class=\"fa fa-camera customButtonDetalleGenerador has-items\" onclick=\"getFotosDespuesXConceptoID(",tda.ID,",",tda.Trabajo_ID,")\"></span> (",(SELECT COUNT(*) FROM trabajodetallefotosdespues AS TDFD WHERE TDFD.IdTrabajoDetalle = tda.ID),")")'
                    . 'ELSE CONCAT("<span class=\"fa fa-camera customButtonDetalleGenerador\" onclick=\"getFotosDespuesXConceptoID(",tda.ID,",",tda.Trabajo_ID,")\"></span>") '
                    . 'END) AS "Fotos Después", '
                    . '(CASE '
                    . 'WHEN (SELECT COUNT(*) FROM trabajodetalleanexosDos AS TDANED WHERE TDANED.IdTrabajoDetalle = tda.ID AND TDANED.IdTrabajo = tda.Trabajo_ID)>0 THEN '
                    . 'CONCAT("<span class=\"fa fa-paperclip customButtonDetalleGenerador has-items\" onclick=\"getAnexosDosXConceptoID(",tda.ID,",",tda.Trabajo_ID,")\"></span> (",(SELECT COUNT(*) FROM trabajodetalleanexosDos AS TDANED WHERE TDANED.IdTrabajoDetalle = tda.ID AND TDANED.IdTrabajo = tda.Trabajo_ID),")") '
                    . 'ELSE CONCAT("<span class=\"fa fa-paperclip customButtonDetalleGenerador\" onclick=\"getAnexosDosXConceptoID(",tda.ID,",",tda.Trabajo_ID,")\"></span>") '
                    . 'END) AS Anexos, '
                    . 'CONCAT("<span class=\"fa fa-gear customButtonDetalleGenerador\" '
                    . 'onclick=\"onEditarConceptoXDetalleAbierto(",tda.ID,")\"></span>") AS Editar,'
                    . 'CONCAT("<span class=\"fa fa-times customButtonDetalleEliminar\" '
                    . 'onclick=\"onEliminarConceptoXDetalleAbierto(this,",tda.ID,")\"></span>") AS Eliminar', false);
            $this->db->from("trabajosdetalleabierto AS tda");
            $this->db->join("trabajos AS t", "t.ID =tda.Trabajo_ID");
            $this->db->where("tda.Trabajo_ID", $IDX);
            $this->db->order_by('tda.ID', 'DESC');
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

    public function onModificarConceptoAbierto($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("trabajosdetalleabierto", $DATA);
            //    print $str = $this->db->last_query();
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

    public function getTrabajoFotosDetalleByID($IDX, $IDT) {
        try {
            $this->db->select('TDF.*', false);
            $this->db->from("trabajodetallefotos AS TDF");
            $this->db->where("TDF.IdTrabajoDetalle", $IDX);
            $this->db->where("TDF.IdTrabajo", $IDT);
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

    public function getTrabajoFotosAntesDetalleByID($IDX) {
        try {
            $this->db->select('TDFA.*', false);
            $this->db->from("trabajodetallefotosantes AS TDFA");
            $this->db->where("TDFA.IdTrabajoDetalle", $IDX);
            $this->db->order_by('TDFA.ID', 'DESC');
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

    public function getTrabajoFotosDespuesDetalleByID($IDX) {
        try {
            $this->db->select('TDFDE.*', false);
            $this->db->from("trabajodetallefotosdespues AS TDFDE");
            $this->db->where("TDFDE.IdTrabajoDetalle", $IDX);
            $this->db->order_by('TDFDE.ID', 'DESC');
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

    public function getTrabajoFotosProcesoDetalleByIDXTiempo($IDX,$Tiempo) {
        try {
            $this->db->select('TDFP.*', false);
            $this->db->from("trabajodetallefotosproceso AS TDFP");
            $this->db->where("TDFP.IdTrabajoDetalle", $IDX);
            $this->db->where("TDFP.Tiempo", $Tiempo);
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
    public function getTiempoFotosProcesoXTrabajoDetalleID($IDX) {
        try {
            $this->db->select('TDFP.*',false);
            $this->db->from("trabajodetallefotosproceso AS TDFP");
            $this->db->where("TDFP.IdTrabajoDetalle", $IDX);
            $this->db->order_by('TDFP.Tiempo', 'DESC');
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

    public function getFotosXTrabajoDetalleID($IDX, $IDT) {
        try {
            $this->db->select('TDF.*', false);
            $this->db->from("trabajodetallefotos AS TDF");
            $this->db->where("TDF.IdTrabajoDetalle", $IDX);
            $this->db->where("TDF.IdTrabajo", $IDT);
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

    public function getFotosAntesXTrabajoDetalleID($IDX) {
        try {
            $this->db->select('TDFA.*', false);
            $this->db->from("trabajodetallefotosantes AS TDFA");
            $this->db->where("TDFA.IdTrabajoDetalle", $IDX);
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

    public function getFotosDespuesXTrabajoDetalleID($IDX) {
        try {
            $this->db->select('TDFD.*', false);
            $this->db->from("trabajodetallefotosdespues AS TDFD");
            $this->db->where("TDFD.IdTrabajoDetalle", $IDX);
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
    
    

    public function getFotosProcesoXTrabajoDetalleID($IDX) {
        try {
            $this->db->select('TDFP.*', false);
            $this->db->from("trabajodetallefotosproceso AS TDFP");
            $this->db->where("TDFP.IdTrabajoDetalle", $IDX);
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

    public function getFotoXConceptoID($IDX, $IDT) {
        try {
            $this->db->select('TDF.*', false);
            $this->db->from("trabajodetallefotos AS TDF");
            $this->db->join("trabajos AS t", "t.ID =TDF.IdTrabajo");
            $this->db->where("TDF.ID", $IDX);
            $this->db->where("TDF.IdTrabajo", $IDT);
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

    public function getFotoAntesXConceptoID($IDX) {
        try {
            $this->db->select('TDFA.*', false);
            $this->db->from("trabajodetallefotosantes AS TDFA");
            $this->db->where("TDFA.ID", $IDX);
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

    public function getFotoDespuesXConceptoID($IDX) {
        try {
            $this->db->select('TDFD.*', false);
            $this->db->from("trabajodetallefotosdespues AS TDFD");
            $this->db->where("TDFD.ID", $IDX);
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

    public function getFotoProcesoXConceptoID($IDX) {
        try {
            $this->db->select('TDFP.*', false);
            $this->db->from("trabajodetallefotosproceso AS TDFP");
            $this->db->where("TDFP.ID", $IDX);
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

    public function getAnexosXTrabajoDetalleID($IDX, $IDT) {
        try {
            $this->db->select('TDA.*', false);
            $this->db->from("trabajodetalleanexos AS TDA");
            $this->db->where("TDA.IdTrabajoDetalle", $IDX);
            $this->db->where("TDA.IdTrabajo", $IDT);
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

    public function getAnexosDosXTrabajoDetalleID($IDX, $IDT) {
        try {
            $this->db->select('TDAD.*', false);
            $this->db->from("trabajodetalleanexosDos AS TDAD");
            $this->db->where("TDAD.IdTrabajoDetalle", $IDX);
            $this->db->where("TDAD.IdTrabajo", $IDT);
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getAnexoXConceptoID($IDX, $IDT) {
        try {
            $this->db->select('TDA.*', false);
            $this->db->from("trabajodetalleanexos AS TDA");
            $this->db->where("TDA.ID", $IDX);
            $this->db->where("TDA.IdTrabajo", $IDT);
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

    public function getAnexoDosXConceptoID($IDX, $IDT) {
        try {
            $this->db->select('TDAD.*', false);
            $this->db->from("trabajodetalleanexosDos AS TDAD");
            $this->db->where("TDAD.ID", $IDX);
            $this->db->where("TDAD.IdTrabajo", $IDT);
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

    public function getTrabajoAnexosDetalleByID($IDX, $IDT) {
        try {
            $this->db->select('TDEA.*', false);
            $this->db->from("trabajodetalleanexos AS TDEA");
            $this->db->where("TDEA.IdTrabajoDetalle", $IDX);
            $this->db->where("TDEA.IdTrabajo", $IDT);
            $this->db->order_by('TDEA.ID', 'DESC');
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
    
    public function getTrabajoAnexosDosDetalleByID($IDX, $IDT) {
        try {
            $this->db->select('TDEAD.*', false);
            $this->db->from("trabajodetalleanexosdos AS TDEAD");
            $this->db->where("TDEAD.IdTrabajoDetalle", $IDX);
            $this->db->where("TDEAD.IdTrabajo", $IDT);
            $this->db->order_by('TDEAD.ID', 'DESC');
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

    public function onAgregarDetalleAbierto($array) {
        try {
            $this->db->insert("trabajosdetalleabierto", $array);
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

    public function onAgregarDetalleFotosAntes($array) {
        try {
            $this->db->insert("trabajodetallefotosantes", $array);
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

    public function onAgregarDetalleFotosDespues($array) {
        try {
            $this->db->insert("trabajodetallefotosdespues", $array);
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

    public function onAgregarDetalleFotosProceso($array) {
        try {
            $this->db->insert("trabajodetallefotosproceso", $array);
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

    public function onAgregarDetalleAnexosDos($array) {
        try {
            $this->db->insert("trabajodetalleanexosDos", $array);
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

    public function onModificarDetalleFotoAntes($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("trabajodetallefotosantes", $DATA);
            //    print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarDetalleFotoDespues($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("trabajodetallefotosdespues", $DATA);
            //    print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarDetalleFotoProceso($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("trabajodetallefotosproceso", $DATA);
            //    print $str = $this->db->last_query();
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

    public function onModificarDetalleAnexoDos($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("trabajodetalleanexosDos", $DATA);
            //      print $str = $this->db->last_query();
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
            //    print  $this->db->last_query();
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

    public function onEliminarGeneradorEditar($ID) {
        try {
            $this->db->where('ID', $ID);
            $this->db->delete("generadortrabajosdetalle");
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarFotoXConcepto($ID, $IDT) {
        try {
            $this->db->where('IdTrabajo', $IDT);
            $this->db->where('ID', $ID);
            $this->db->delete('trabajodetallefotos');
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarFotoAntesXConcepto($ID) {
        try {
            $this->db->where('ID', $ID);
            $this->db->delete('trabajodetallefotosantes');
            // print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarFotoDespuesXConcepto($ID) {
        try {
            $this->db->where('ID', $ID);
            $this->db->delete('trabajodetallefotosdespues');
            // print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarFotoProcesoXConcepto($ID) {
        try {
            $this->db->where('ID', $ID);
            $this->db->delete('trabajodetallefotosproceso');
            // print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarAnexoXConcepto($ID, $IDT) {
        try {
            $this->db->where('IdTrabajo', $IDT);
            $this->db->where('ID', $ID);
            $this->db->delete('trabajodetalleanexos');
            // print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarAnexoDosXConcepto($ID, $IDT) {
        try {
            $this->db->where('IdTrabajo', $IDT);
            $this->db->where('ID', $ID);
            $this->db->delete('trabajodetalleanexosDos');
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

    public function getDetalleAbiertoByID($ID) {
        try {
            $this->db->select('tda.*', false);
            $this->db->from('trabajosdetalleabierto tda');
            $this->db->where('tda.ID', $ID);
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

    public function onEliminarConceptoAbierto($ID) {
        try {
            $this->db->where('ID', $ID);
            $this->db->delete('trabajosdetalleabierto');
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

    public function onEliminarFotosXConcepto($ID, $IDT) {
        try {
            $this->db->where('IdTrabajo', $IDT);
            $this->db->where('IdTrabajoDetalle', $ID);
            $this->db->delete('trabajodetallefotos');
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarFotosAntesXConcepto($ID) {
        try {
            $this->db->where('IdTrabajoDetalle', $ID);
            $this->db->delete('trabajodetallefotosantes');
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarFotosDespuesXConcepto($ID) {
        try {
            $this->db->where('IdTrabajoDetalle', $ID);
            $this->db->delete('trabajodetallefotosdespues');
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarFotosProcesoXConcepto($ID) {
        try {
            $this->db->where('IdTrabajoDetalle', $ID);
            $this->db->delete('trabajodetallefotosproceso');
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

    public function onEliminarAnexosXConcepto($ID, $IDT) {
        try {
            $this->db->where('IdTrabajo', $IDT);
            $this->db->where('IdTrabajoDetalle', $ID);
            $this->db->delete('trabajodetalleanexos');
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarAnexosDosXConcepto($ID, $IDT) {
        try {
            $this->db->where('IdTrabajo', $IDT);
            $this->db->where('IdTrabajoDetalle', $ID);
            $this->db->delete('trabajodetalleanexosDos');
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

    public function getTrabajosControlByClienteXClasificacion($ID) {
        try {
            $this->db->select('T.ID, T.Movimiento,T.FolioCliente AS Folio ,S.Nombre AS Sucursal,S.Region,'
                    . 'CONCAT("<span class=\'label label-success\'>$",FORMAT(T.Importe,2),"</span>") AS Importe,T.Clasificacion '
                    . 'FROM Trabajos T '
                    . 'INNER join SUCURSALES S ON S.ID = T.Sucursal_ID ', false);
            $this->db->where_in('T.Estatus', array('Concluido'));
            $this->db->where_in('T.Situacion', array('AUTORIZADO'));
            $this->db->where_in('T.Movimiento', array('PRESUPUESTO'));
            $this->db->where('T.Cliente_ID', $ID);
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

    public function onEntregado($ID) {
        try {
//            $query = $this->db->query("CALL SP_ENTREGADO ('{$ID}')");
            $this->db->set('T.Estatus', 'Entregado');
            $this->db->where('T.ID = ED.TID');
            $this->db->update("trabajos T, (   SELECT  Trabajo_ID TID     FROM EntregasDetalle     JOIN entregas on entregas.ID = entregasdetalle.Entrega_ID  where entregas.ID = " . $ID . ") ED");
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onCancelarEntregado($ID) {
        try {
            // $query = $this->db->query("CALL SP_CANCELA_ENTREGADO ('{$ID}')");
            $this->db->set('T.Estatus', 'Concluido');
            $this->db->where('T.ID = ED.TID');
            $this->db->update("trabajos T, (   SELECT  Trabajo_ID TID     FROM EntregasDetalle     JOIN entregas on entregas.ID = entregasdetalle.Entrega_ID  where entregas.ID = " . $ID . ") ED");
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

    public function getFin49ConceptosByID($ID) {
        try {
            $this->db->select('T.Movimiento,T.FechaCreacion,T.FolioCliente,T.ImpactoEnPlazo,T.DiasImpacto,T.CausaTrabajo,T.ClaveOrigenTrabajo,
                                T.EspecificaOrigenTrabajo,T.DescripcionOrigenTrabajo,T.DescripcionRiesgoTrabajo,T.DescripcionAlcanceTrabajo,T.Importe,
                                CTE.Nombre AS NombreCliente,CTE.NombreCorto,S.CR,S.Nombre AS NombreSucursal,S.TipoConcepto,S.TipoObra,S.Contrato,
                                S.FechaInicio,S.FechaFin, E.Nombre AS Empresa, ES.Nombre AS EmpresaSupervisora,CTE.RutaLogo,PCAT.Clave AS ClaveCategoria,
                                pc.Clave,pc.Descripcion,td.Unidad, td.Cantidad,td.Precio
                                FROM TRABAJOS T
                                inner join trabajosdetalle td on td.Trabajo_ID = t.ID
                                INNER JOIN clientes CTE ON CTE.ID =  T.Cliente_ID
                                INNER JOIN sucursales S ON S.ID  = T.Sucursal_ID
                                INNER JOIN preciarioconceptos pc on pc.id = td.PreciarioConcepto_ID
                                INNER JOIN preciariocategorias PCAT ON PCAT.ID = PC.PreciarioCategorias_ID
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
                                CONCAT(S.FirmaManttoNombres3," ",S.FirmaManttoApellidos3) AS FirmaBanco,
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
ifnull(S.Colonia,"")," ",ifnull(S.Ciudad,"")," ",ifnull(S.Estado,"")) AS Direccion,
CONCAT(S.FirmaManttoNombres1," ",S.FirmaManttoApellidos1) AS Firma1,
CONCAT(S.FirmaManttoNombres2," ",S.FirmaManttoApellidos2) AS Firma2,
CONCAT(S.FirmaManttoNombres3," ",S.FirmaManttoApellidos3) AS Firma3
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
    
     public function getConceptosReporteGenerador($ID) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select('T.FechaCreacion, T.FolioCliente, T.Importe, CTE.Nombre AS Cliente, S.CR, S.Nombre
AS Sucursal, E.Nombre AS Empresa, CTE.RutaLogo AS LogoCliente, PC.Clave,
TD.Unidad, TD.Cantidad, TD.Precio,PCAT.Descripcion AS Categoria, PC.Descripcion AS Concepto,TD.PreciarioConcepto_ID AS ConceptoId,
CONCAT(S.Calle," ",ifnull(S.NoExterior,"")," ",ifnull(S.NoInterior,"")," ",
ifnull(S.Colonia,"")," ",ifnull(S.Ciudad,"")," ",ifnull(S.Estado,"")) AS Direccion,
CONCAT(S.FirmaManttoNombres1," ",S.FirmaManttoApellidos1) AS Firma1,
CONCAT(S.FirmaManttoNombres2," ",S.FirmaManttoApellidos2) AS Firma2,
CONCAT(S.FirmaManttoNombres3," ",S.FirmaManttoApellidos3) AS Firma3
FROM TRABAJOS T
INNER JOIN clientes CTE ON CTE.ID = T.Cliente_ID
INNER JOIN sucursales S ON S.ID = T.Sucursal_ID
INNER JOIN trabajosdetalle TD ON TD.Trabajo_ID = T.ID
left JOIN preciarios PRE ON PRE.ID = T.Preciario_ID
left JOIN preciarioconceptos PC ON PC.ID = TD.PreciarioConcepto_ID
left JOIN preciariocategorias PCAT ON PCAT.ID = PC.PreciarioCategorias_ID
left join generadortrabajosdetalle GTD ON GTD.IdTrabajoDetalle = TD.ID
left JOIN empresas E ON E.id = S.Empresa_ID', false);
            $this->db->where_in('T.Estatus', array('Borrador', 'Concluido'));
            $this->db->where('T.ID', $ID);
            $this->db->where('GTD.Total IS NOT NULL', NULL, FALSE);
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
ifnull(S.Colonia,"")," ",ifnull(S.Ciudad,"")," ",ifnull(S.Estado,"")) AS Direccion,
CONCAT(S.FirmaManttoNombres1," ",S.FirmaManttoApellidos1) AS Firma1,
CONCAT(S.FirmaManttoNombres2," ",S.FirmaManttoApellidos2) AS Firma2,
CONCAT(S.FirmaManttoNombres3," ",S.FirmaManttoApellidos3) AS Firma3
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
            $this->db->order_by('TDC.ID', 'DESC');
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

    public function getDetalleFotos($ID, $Mov) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select('TD.ID AS ID,pc.ID as PreciarioConcepto_ID,
                               CTE.Nombre AS Cliente, S.CR, S.Nombre AS Sucursal, E.Nombre AS Empresa, CTE.RutaLogo AS LogoCliente, PC.Clave,
                               TD.Unidad, TD.Cantidad, PCAT.Descripcion AS Categoria, PC.Descripcion AS Concepto,TD.PreciarioConcepto_ID AS ConceptoId,
                               CONCAT(S.Calle," ",ifnull(S.NoExterior,"")," ",ifnull(S.NoInterior,"")," ",
                               ifnull(S.Colonia,"")," ",ifnull(S.Ciudad,"")," ",ifnull(S.Estado,"")) AS Direccion,
                               CONCAT(S.FirmaManttoNombres1," ",S.FirmaManttoApellidos1) AS Firma1,
                                CONCAT(S.FirmaManttoNombres2," ",S.FirmaManttoApellidos2) AS Firma2,
                                CONCAT(S.FirmaManttoNombres3," ",S.FirmaManttoApellidos3) AS Firma3', false);
            $this->db->from('Trabajos AS T');
            $this->db->join('trabajosdetalle AS TD', 'TD.Trabajo_ID = T.ID');
            $this->db->join('preciarioconceptos AS pc ', ' pc.id = td.preciarioconcepto_id', 'left');
            $this->db->join('Clientes AS CTE ', 'CTE.ID = T.Cliente_ID');
            $this->db->join('sucursales AS S ', 'S.ID = T.Sucursal_ID');
            $this->db->join('preciariocategorias AS PCAT', 'PCAT.ID = PC.PreciarioCategorias_ID', 'left');
            $this->db->join('empresas AS E', 'E.id = S.Empresa_ID', 'left');
            $this->db->join('trabajodetallefotos AS TDF', 'TDF.IdTrabajoDetalle = TD.ID AND TDF.IdTrabajo = TD.Trabajo_ID', 'left');
            $this->db->where_in('T.Estatus', array('Borrador', 'Concluido'));
            $this->db->where('T.ID', $ID);
            $this->db->where('T.Movimiento', $Mov);
            $this->db->where('TDF.Url IS NOT NULL', NULL, FALSE);
            $this->db->group_by(array('TD.ID'));
            $this->db->order_by('TD.ID', 'ASC');
            $query = $this->db->get();
            /* AND  `TDF`.`IdTrabajo` = `TD`.`Trabajo_ID`
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

    public function getDetalleFotosXID($ID, $IDT) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select('TDF.*, "ANTES" AS ANTES', false);
            $this->db->from('trabajodetallefotos AS TDF');
            $this->db->where('TDF.IdTrabajoDetalle', $ID);
            $this->db->where('TDF.IdTrabajo', $IDT);
            $this->db->where('TDF.Url IS NOT NULL', NULL, FALSE);
            $this->db->order_by('TDF.ID', 'DESC');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            // print $str . ";\n";
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDetalleFotosAntesXID($ID, $IDT) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select('TDFA.*, "ANTES" AS ANTES', false);
            $this->db->from('trabajodetallefotosantes AS TDFA');
            $this->db->where('TDFA.IdTrabajoDetalle', $ID);
            $this->db->where('TDFA.IdTrabajo', $IDT);
            $this->db->where('TDFA.Url IS NOT NULL', NULL, FALSE);
            $this->db->order_by('TDFA.ID', 'DESC');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            // print $str . ";\n";
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDetalleFotosDespuesXID($ID) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select('TDFD.*,"DESPUES" AS DESPUES', false);
            $this->db->from('trabajodetallefotosdespues AS TDFD');
            $this->db->where('TDFD.IdTrabajoDetalle', $ID);
            $this->db->where('TDFD.Url IS NOT NULL', NULL, FALSE);
            $this->db->order_by('TDFD.ID', 'DESC');
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

    public function getDetalleFotosProcesoXID($ID) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select('TDFP.*,"PROCESO" AS PROCESO', false);
            $this->db->from('trabajodetallefotosproceso AS TDFP');
            $this->db->where('TDFP.IdTrabajoDetalle', $ID);
            $this->db->where('TDFP.Url IS NOT NULL', NULL, FALSE);
            $this->db->order_by('TDFP.ID', 'DESC');
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

    public function getDetalleFotosAntes($ID, $Mov) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select('CC.Descripcion AS "CentroCosto",TDA.ID AS ID, CTE.Nombre AS Cliente, S.CR, S.Nombre AS Sucursal, E.Nombre AS Empresa,
CTE.RutaLogo AS LogoCliente,
TDA.Descripcion AS Concepto,
CONCAT(S.Calle, " ", ifnull(S.NoExterior, ""), " ", ifnull(S.NoInterior, ""), " ", ifnull(S.Colonia, ""), " ", ifnull(S.Ciudad, ""), " ", ifnull(S.Estado, "")) AS Direccion', false);
            $this->db->from('Trabajos AS T');
            $this->db->join('trabajosdetalleabierto AS TDA', 'TDA.Trabajo_ID = T.ID');
            $this->db->join('Clientes AS CTE ', 'CTE.ID = T.Cliente_ID');
            $this->db->join('sucursales AS S ', 'S.ID = T.Sucursal_ID');
            $this->db->join('empresas AS E', 'E.id = S.Empresa_ID', 'left');
            $this->db->join('trabajodetallefotosantes AS TDFA', 'TDFA.IdTrabajoDetalle = TDA.ID', 'left');
            $this->db->join('centrocostos AS CC', 'CC.ID = T.CentroCostos_ID', 'left');
            $this->db->where_in('T.Estatus', array('Borrador', 'Concluido'));
            $this->db->where('T.ID', $ID);
            $this->db->where('T.Movimiento', $Mov);
            $this->db->where('TDFA.Url IS NOT NULL', NULL, FALSE);
            $this->db->group_by(array('TDA.ID'));
            $this->db->order_by('TDA.ID', 'ASC');
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

    public function getDetalleFotosDespues($ID) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select('CC.Descripcion AS "CentroCosto",TDA.ID AS ID, CTE.Nombre AS Cliente, S.CR, S.Nombre AS Sucursal, E.Nombre AS Empresa,
CTE.RutaLogo AS LogoCliente,
TDA.Descripcion AS Concepto,
CONCAT(S.Calle, " ", ifnull(S.NoExterior, ""), " ", ifnull(S.NoInterior, ""), " ", ifnull(S.Colonia, ""), " ", ifnull(S.Ciudad, ""), " ", ifnull(S.Estado, "")) AS Direccion', false);
            $this->db->from('Trabajos AS T');
            $this->db->join('trabajosdetalleabierto AS TDA', 'TDA.Trabajo_ID = T.ID');
            $this->db->join('Clientes AS CTE ', 'CTE.ID = T.Cliente_ID');
            $this->db->join('sucursales AS S ', 'S.ID = T.Sucursal_ID');
            $this->db->join('empresas AS E', 'E.id = S.Empresa_ID', 'left');
            $this->db->join('trabajodetallefotosdespues AS TDF', 'TDF.IdTrabajoDetalle = TDA.ID', 'left');
            $this->db->join('centrocostos AS CC', 'CC.ID = T.CentroCostos_ID', 'left');
            $this->db->where_in('T.Estatus', array('Borrador', 'Concluido'));
            $this->db->where('T.ID', $ID);
            $this->db->where('TDF.Url IS NOT NULL', NULL, FALSE);
            $this->db->group_by(array('TDA.ID'));
            $this->db->order_by('TDA.ID', 'ASC');
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

    public function getDetalleFotosProceso($ID) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select('CC.Descripcion AS "CentroCosto",TDA.ID AS ID, CTE.Nombre AS Cliente, S.CR, S.Nombre AS Sucursal, E.Nombre AS Empresa,
CTE.RutaLogo AS LogoCliente,
TDA.Descripcion AS Concepto,
CONCAT(S.Calle, " ", ifnull(S.NoExterior, ""), " ", ifnull(S.NoInterior, ""), " ", ifnull(S.Colonia, ""), " ", ifnull(S.Ciudad, ""), " ", ifnull(S.Estado, "")) AS Direccion', false);
            $this->db->from('Trabajos AS T');
            $this->db->join('trabajosdetalleabierto AS TDA', 'TDA.Trabajo_ID = T.ID');
            $this->db->join('Clientes AS CTE ', 'CTE.ID = T.Cliente_ID');
            $this->db->join('sucursales AS S ', 'S.ID = T.Sucursal_ID');
            $this->db->join('empresas AS E', 'E.id = S.Empresa_ID', 'left');
            $this->db->join('trabajodetallefotosproceso AS TDFP', 'TDFP.IdTrabajoDetalle = TDA.ID', 'left');
            $this->db->join('centrocostos AS CC', 'CC.ID = T.CentroCostos_ID', 'left');
            $this->db->where_in('T.Estatus', array('Borrador', 'Concluido'));
            $this->db->where('T.ID', $ID);
            $this->db->where('TDFP.Url IS NOT NULL', NULL, FALSE);
            $this->db->group_by(array('TDA.ID'));
            $this->db->order_by('TDA.ID', 'ASC');
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

    /* Excel conceptos por entrega (TARIFARIO) */

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

    public function getDesgloseXEntrega($ID) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select('t.FolioCliente,s.Nombre As Sucursal, s.CR,s.Region,t.FechaOrigen,t.Clasificacion,
t.TrabajoSolicitado,t.TrabajoRequerido,t.FechaLlegada,t.FechaSalida,t.Importe, E.Importe AS ImporteTotal
FROM entregas E
inner join entregasdetalle ed on ed.Entrega_ID = E.ID
inner join trabajos t on t.id = ed.Trabajo_ID
left join sucursales s on s.ID = t.Sucursal_ID', false);
            $this->db->where('E.ID', $ID);
            $this->db->order_by('T.ID', 'ASC');
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

    /* Excel tarifario por movimiento */

    public function getTarifarioXMovimiento($ID) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select('pc.Clave,pc.Descripcion,td.Cantidad AS Cantidad,
pc.Unidad, pc.Costo AS "Precio" , sum(td.Importe) AS Importe , T.Importe AS ImporteTotal
FROM trabajos t
inner join trabajosdetalle td on td.Trabajo_ID = t.ID
inner join preciarioconceptos pc on pc.ID = td.PreciarioConcepto_ID', false);
            // $this->db->where_in('T.Estatus', array('Borrador', 'Concluido'));
            $this->db->where('T.ID', $ID);
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

    public function getPOCXEntrega($ID) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select('T.ID,CONCAT(S.CR,"-", t.FolioCliente," ",S.Nombre) AS OC
FROM entregas E
inner join entregasdetalle ed on ed.Entrega_ID = E.ID
inner join trabajos t on t.id = ed.Trabajo_ID
inner join sucursales s on s.ID = t.Sucursal_ID', false);
            // $this->db->where_in('T.Estatus', array('Borrador', 'Concluido'));
            $this->db->where('E.ID', $ID);
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

    public function getConceptosXPOC($ID) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select('t.Observaciones,PCAT.Descripcion AS Categoria,pc.Clave, pc.Descripcion, td.Cantidad AS Cantidad, pc.Unidad, pc.Costo AS "Precio", td.Importe
from trabajos t
left join trabajosdetalle td on td.Trabajo_ID = t.ID
left join preciarioconceptos pc on pc.ID = td.PreciarioConcepto_ID
left join preciariocategorias AS PCAT on PCAT.ID = PC.PreciarioCategorias_ID', false);
            // $this->db->where_in('T.Estatus', array('Borrador', 'Concluido'));
            $this->db->where('T.ID', $ID);
            $this->db->order_by('pc.ID', 'ASC');
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

    public function getDetalleFotosXIDAntesYDespues($ID) {
        try {
            $this->db->query("(SELECT TDF.ID, TDF.Url, \"A\" AS AD FROM trabajodetallefotos AS TDF
                                WHERE TDF.IdTrabajo = $ID )
                                UNION
                                (SELECT TDFD.ID, TDFD.Url,  \"D\" AS AD FROM trabajodetallefotosdespues AS TDFD
                                WHERE TDFD.IdTrabajo = $ID ) ORDER BY ID");
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

}
