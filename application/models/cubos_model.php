<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class cubos_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getCuboInformacionGeneral() {
        try {

            $sql = "CALL SP_TrabajosCuboGenerales";
            $query = $this->db->query($sql);
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCuboInformacionClientes() {
        try {

            $sql = "CALL SP_TrabajosPorCliente(" . $this->session->userdata('Cliente') . ")";
            $query = $this->db->query($sql);
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
