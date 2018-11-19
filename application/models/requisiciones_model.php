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
                    . "''  AS Editar, "
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
