<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class cajerosbbva_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
    }

    public function getRecords() {
        try {
            $this->db->select("E.ID,  "
                    . "(CASE WHEN  E.Estatus ='Concluido' THEN CONCAT('<span class=\'label label-success\'>','CONCLUIDO','</span>') "
                    . "WHEN  E.Estatus ='Borrador' THEN CONCAT('<span class=\'label label-default\'>','BORRADOR','</span>')"
                    . "ELSE CONCAT('<span class=\'label label-danger\'>','Cancelado','</span>') END) AS Estatus ,"
                    . "Ct.Nombre as 'Cliente',CONCAT('<strong>',ifnull(E.FolioCliente,'--'),'</strong>')  AS Folio,"
                    . "CC.Nombre as 'Centro de Costos', "
                    . "concat(u.nombre,' ',u.apellidos)as 'Usuario' "
                    . "FROM cajerosbbva E  "
                    . "INNER JOIN CLIENTES CT on CT.ID = E.Cliente_ID  "
                    . "LEFT JOIN CENTROCOSTOS CC on CC.ID = E.CentroCostos_ID "
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

    public function getCajeroBBVAByID($ID) {
        try {
            $this->db->select('E.*', false);
            $this->db->from('cajerosbbva AS E');
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

    public function getTrabajoDetalleAbiertoByID($IDX) {
        try {
            $this->db->select('tda.ID AS ID,'
                    . 'CONCAT("<span class=\'label label-danger\'>",tda.Clave,"</span>") AS Clave, '
                    . 'CONCAT("<p class=\" CustomDetalleDescripcion \">",tda.Descripcion,"</p>") AS Descripcion, '
                    . '(CASE '
                    . 'WHEN (SELECT COUNT(*) FROM cajerosbbvadetallefotos AS TDFA WHERE TDFA.IdCajeroBBVADetalle = tda.ID AND TDFA.IdCajeroBBVA = tda.CajeroBBVA_ID)>0 THEN '
                    . 'CONCAT("<span class=\"fa fa-camera customButtonDetalleGenerador has-items\" onclick=\"getFotosAntesXConceptoID(",tda.ID,",",tda.CajeroBBVA_ID,")\"></span> (",(SELECT COUNT(*) FROM cajerosbbvadetallefotos AS TDFA WHERE TDFA.IdCajeroBBVADetalle = tda.ID AND TDFA.IdCajeroBBVA = tda.CajeroBBVA_ID),")")'
                    . 'ELSE CONCAT("<span class=\"fa fa-camera customButtonDetalleGenerador\" onclick=\"getFotosAntesXConceptoID(",tda.ID,",",tda.CajeroBBVA_ID,")\"></span>") '
                    . 'END) AS "Fotos ", '
                    . 'CONCAT("<span class=\"fa fa-gear customButtonDetalleEdicion\" '
                    . 'onclick=\"onEditarConceptoXDetalleAbierto(",tda.ID,")\"></span>") AS Editar,'
                    . 'CONCAT("<span class=\"fa fa-times customButtonDetalleEliminar\" '
                    . 'onclick=\"onEliminarConceptoXDetalleAbierto(this,",tda.ID,")\"></span>") AS Eliminar', false);
            $this->db->from("cajerosbbvadetalle AS tda");
            $this->db->join("cajerosbbva AS t", "t.ID =tda.CajeroBBVA_ID");
            $this->db->where("tda.CajeroBBVA_ID", $IDX);
            //$this->db->order_by('tda.ID', 'DESC');
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

    public function getDetalleAbiertoByID($ID) {
        try {
            $this->db->select('tda.*', false);
            $this->db->from('cajerosbbvadetalle tda');
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

    public function getTrabajoFotosAntesDetalleByID($IDX) {
        try {
            $this->db->select('TDFA.*', false);
            $this->db->from("cajerosbbvadetallefotos AS TDFA");
            $this->db->where("TDFA.IdCajeroBBVADetalle", $IDX);
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

    public function getFotosAntesXTrabajoDetalleID($IDX) {
        try {
            $this->db->select('TDFA.*', false);
            $this->db->from("cajerosbbvadetallefotos AS TDFA");
            $this->db->where("TDFA.IdCajeroBBVADetalle", $IDX);
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
            $this->db->from("cajerosbbvadetallefotos AS TDFA");
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

    public function onAgregar($array) {
        try {
            $this->db->insert("cajerosbbva", $array);
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

    public function onAgregarDetalleAbierto($array) {
        try {
            $this->db->insert("cajerosbbvadetalle", $array);
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

    public function onAgregarDetalleFotosAntes($array) {
        try {
            $this->db->insert("cajerosbbvadetallefotos", $array);
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

    public function onModificar($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("cajerosbbva", $DATA);
            //    print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarConceptoAbierto($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("cajerosbbvadetalle", $DATA);
            //    print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarDetalleFotoAntes($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("cajerosbbvadetallefotos", $DATA);
            //    print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar($ID) {
        try {
            $this->db->set('Estatus', 'Cancelado');
            $this->db->where('ID', $ID);
            $this->db->update("cajerosbbva");
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarConceptoAbierto($ID) {
        try {
            $this->db->where('ID', $ID);
            $this->db->delete('cajerosbbvadetalle');
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarFotoAntesXConcepto($ID) {
        try {
            $this->db->where('ID', $ID);
            $this->db->delete('cajerosbbvadetallefotos');
            // print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarFotosAntesXConcepto($ID) {
        try {
            $this->db->where('IdCajeroBBVADetalle', $ID);
            $this->db->delete('cajerosbbvadetallefotos');
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    /*Reportes*/
    
    public function getDetalleFotosAntes($ID) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select('CC.Descripcion AS "CentroCosto", T.FolioCliente,T.FechaCreacion,T.Observaciones,
                
            TDA.ID AS ID, CTE.Nombre AS Cliente, S.CR, S.Nombre AS Sucursal, E.Nombre AS Empresa,
            CTE.RutaLogo AS LogoCliente,
            TDA.Descripcion AS Concepto,
            CONCAT(S.Calle, " ", ifnull(S.NoExterior, ""), " ", ifnull(S.NoInterior, ""), " ", ifnull(S.Colonia, ""), " ", ifnull(S.Ciudad, ""), " ", ifnull(S.Estado, "")) AS Direccion', false);
            $this->db->from('cajerosbbva AS T');
            $this->db->join('cajerosbbvadetalle AS TDA', 'TDA.CajeroBBVA_ID = T.ID');
            $this->db->join('Clientes AS CTE ', 'CTE.ID = T.Cliente_ID');
            $this->db->join('sucursales AS S ', 'S.ID = T.Sucursal_ID');
            $this->db->join('empresas AS E', 'E.id = S.Empresa_ID', 'left');
            $this->db->join('cajerosbbvadetallefotos AS TDFA', 'TDFA.IdCajeroBBVADetalle = TDA.ID', 'left');
            $this->db->join('centrocostos AS CC', 'CC.ID = T.CentroCostos_ID', 'left');
            $this->db->where_in('T.Estatus', array('Borrador', 'Concluido'));
            $this->db->where('T.ID', $ID);
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
    
    public function getDetalleFotosAntesXID($ID, $IDT) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select('TDFA.*, TDFA.Observaciones AS ObservacionFoto,TDFA.ID', false);
            $this->db->from('cajerosbbvadetallefotos AS TDFA');
            $this->db->where('TDFA.IdCajeroBBVADetalle', $ID);
            $this->db->where('TDFA.IdCajeroBBVA', $IDT);
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
    
     public function getObservacionFotosCajerosXID($ID, $IDT,$IDFOTO) {
        try {
            $this->db->query("set sql_mode=''");
            $this->db->select('TDFA.Observaciones AS ObservacionFoto', false);
            $this->db->from('cajerosbbvadetallefotos AS TDFA');
            $this->db->where('TDFA.IdCajeroBBVADetalle', $ID);
            $this->db->where('TDFA.IdCajeroBBVA', $IDT);
            $this->db->where('TDFA.ID', $IDFOTO);
            $this->db->where('TDFA.Url IS NOT NULL', NULL, FALSE);
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

}
