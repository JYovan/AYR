<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class cliente_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getRecords() {
        try {

            $this->db->select('C.ID, C.Nombre AS Cliente', false);
            $this->db->from('Clientes AS C');
            $query = $this->db->get();
            $str = $this->db->last_query();

            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getClientes() {
        try {
            $this->db->select('C.ID, C.Nombre AS Cliente', false);
            $this->db->from('Clientes AS C');
            $this->db->where_in('C.Estatus', 'ACTIVO');
            $this->db->order_by('C.Nombre', 'ASC');
            $query = $this->db->get();
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getContratistas() {
        try {
            $this->db->select('E.ID, E.Nombre AS Contratista', false);
            $this->db->from('empresas AS E');
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

    public function getClienteByID($ID) {
        try {
            $this->db->select('C.*', false);
            $this->db->from('clientes AS C');
            $this->db->where('C.ID', $ID);
            $this->db->where_in('C.Estatus', 'Activo');
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

    public function getLogoClienteByID($ID) {
        try {
            $this->db->select('C.RutaLogo', false);
            $this->db->from('clientes AS C');
            $this->db->where('C.ID', $this->session->userdata('Cliente'));
            $this->db->where_in('C.Estatus', 'Activo');
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
            $array['Registro'] = Date('d/m/Y h:i:s a');
            $this->db->insert("clientes", $array);
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
            $this->db->update("clientes", $DATA);
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar($ID) {
        try {
            $this->db->where('ID', $ID);
            $this->db->delete("clientes");
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
