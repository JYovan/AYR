<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class intelisis_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getClientesIntelisis() {
        try {
            $sqlsrv = $this->load->database('dbsqlsvr', TRUE);

            $sqlsrv->select(" C.Cliente,C.Nombre+' '+'('+ISNULL( C.NombreCorto,'')+')' AS Nombre ", false);
            $sqlsrv->from('Cte AS C');
            $sqlsrv->where('C.Tipo', 'Cliente');
            $query = $sqlsrv->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $sqlsrv->last_query();
//        print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProyectosIntelisis() {
        try {
            $sqlsrv = $this->load->database('dbsqlsvr', TRUE);
            $sqlsrv->select('Proyecto,Categoria,Descripcion ', false);
            $sqlsrv->from('PROY');
            $sqlsrv->where('Estatus', 'ALTA');
            $query = $sqlsrv->get();
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

}
