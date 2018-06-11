<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class especialidades_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getRecords($Cliente) {
        try {
            $this->db->select('E.ID, E.Descripcion', false);
            $this->db->from('especialidades AS E');
            $this->db->where_in('E.Estatus', 'ACTIVO');
            $this->db->where('E.Cliente_ID', $Cliente);
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

    public function getClientes() {
        try {
            return $this->db->select('C.ID, C.Nombre AS Cliente', false)->from('Clientes AS C')->where('C.ID IN (SELECT A.Cliente_ID FROM especialidades AS A GROUP BY A.Cliente_ID)', null, false)->get()->result();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEspecialidadByID($ID) {
        try {
            $this->db->select('E.*', false);
            $this->db->from('especialidades AS E');
            $this->db->where('E.ID', $ID);
            $this->db->where_in('E.Estatus', 'Activo');
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

    public function getEspecialidadesByCliente($ID) {
        try {
            $this->db->select('E.ID, E.Descripcion', false);
            $this->db->from('especialidades AS E');
            $this->db->where('E.Cliente_ID', $ID);
            $this->db->where_in('E.Estatus', 'ACTIVO');
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
            $this->db->insert("especialidades", $array);
            print $str = $this->db->last_query();
            $query = $this->db->query('SELECT LAST_INSERT_ID()');
            $row = $query->row_array();
            $LastIdInserted = $row['LAST_INSERT_ID()'];
            return $LastIdInserted;
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("especialidades", $DATA);

            //print $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar($ID) {
        try {
            $this->db->set('Estatus', 'INACTIVO');
            $this->db->where('ID', $ID);
            $this->db->update("especialidades");
            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
