<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class requisiciones_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
    }

    public function getRecords() {
        try {
            $this->db->select("T.ID, "
                    . "upper(T.Sitio) AS Sitio, "
                    . "T.Fecha as 'Fecha' , "
                    . "concat(u.nombre,' ',u.apellidos)as 'Usuario' , "
                    . "UPPER(T.Estatus) as 'Estatus'  "
                    . "FROM requisiciones T "
                    . "INNER JOIN USUARIOS U ON U.ID = T.Usuario_ID "
                    . "WHERE T.ESTATUS in ('Pendiente','Surtida') ", false);
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
            $this->db->insert("requisiciones", $array);
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
            $this->db->update("requisiciones", $DATA);
            //    print  $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar($ID) {
        try {
            $this->db->set('Estatus', 'Inactivo');
            $this->db->where('ID', $ID);
            $this->db->update("requisiciones");
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRequisicionByID($ID) {
        try {
            $this->db->select('T.*', false);
            $this->db->from('requisiciones AS T');
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

    public function getDetalleByID($ID) {
        try {
            $this->db->select("TD.ID, "
                    . "UPPER(TD.Material) AS Material, "
                    . "TD.Cantidad, "
                    . "upper(TD.Unidad) AS Unidad, "
                    . 'CONCAT("<span class=\"fa fa-paperclip fa-lg \" onclick=\"getAdjuntosByID(",TD.ID,",",TD.Requisicion,")\"></span>")  AS Fotos, '
                    . 'CONCAT("<span class=\"fa fa-cog fa-lg customButtonDetalleEliminar\" '
                    . 'onclick=\"onModificarDetalle(this,",TD.ID,")\"></span>") AS Editar, '
                    . 'CONCAT("<span class=\"fa fa-times fa-lg customButtonDetalleEliminar\" '
                    . 'onclick=\"onEliminarDetalle(this,",TD.ID,")\"></span>") AS Eliminar ', false);
            $this->db->from('requisicionesdetalle TD');
            $this->db->where('TD.Requisicion', $ID);
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

    public function getTotalFotos($ID, $IDD) {
        try {
            return $this->db->select("(SELECT COUNT(TDF.ID) FROM requisiciondetallefotos AS TDF WHERE TDF.IdRequisicion = $ID AND TDF.IdRequisicionDetalle = $IDD) AS FOTOS", false)
                            ->get()->result();
        } catch (Exception $ex) {
            echo $exc->getTraceAsString();
        }
    }

    public function getFotosDetalleByID($IDX, $IDT) {
        try {
            $this->db->select('TDF.*', false);
            $this->db->from("requisiciondetallefotos AS TDF");
            $this->db->where("TDF.IdRequisicionDetalle", $IDX);
            $this->db->where("TDF.IdRequisicion", $IDT);
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

    public function onAgregarDetalleFotos($array) {
        try {
            $this->db->insert("requisiciondetallefotos", $array);
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

    public function onModificarDetalleFoto($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("requisiciondetallefotos", $DATA);
            //    print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getFotoXConceptoID($IDX, $IDT) {
        try {
            $this->db->select('TDF.*', false);
            $this->db->from("requisiciondetallefotos AS TDF");
            $this->db->join("requisiciones AS t", "t.ID =TDF.IdRequisicion");
            $this->db->where("TDF.ID", $IDX);
            $this->db->where("TDF.IdRequisicion", $IDT);
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

    public function onEliminarFotoXConcepto($ID, $IDT) {
        try {
            $this->db->where('IdRequisicion', $IDT);
            $this->db->where('ID', $ID);
            $this->db->delete('requisiciondetallefotos');
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getFotosXDetalleID($IDX, $IDT) {
        try {
            $this->db->select('TDF.*', false);
            $this->db->from("requisiciondetallefotos AS TDF");
            $this->db->where("TDF.IdRequisicionDetalle", $IDX);
            $this->db->where("TDF.IdRequisicion", $IDT);
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

    public function onEliminarFotosXRenglon($ID, $IDT) {
        try {
            $this->db->where('IdRequisicion', $IDT);
            $this->db->where('IdRequisicionDetalle', $ID);
            $this->db->delete('requisiciondetallefotos');
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDatosDetalleByID($ID) {
        try {
            $this->db->select('T.*', false);
            $this->db->from('requisicionesdetalle AS T');
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

    public function onAgregarDetalle($array) {
        try {
            $this->db->insert("requisicionesdetalle", $array);
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

    public function onModificarDetalle($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("requisicionesdetalle", $DATA);
            //    print  $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarDetalle($ID) {
        try {
            $this->db->where('ID', $ID);
            $this->db->delete('requisicionesdetalle');
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
