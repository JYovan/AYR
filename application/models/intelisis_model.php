<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class intelisis_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->sqlsrv = $this->load->database('dbsqlsrv',TRUE);
    }

    public function getClientesIntelisis() {
        try {
            $this->sqlsrv->select(" C.Cliente,C.Nombre+' '+'('+ISNULL( C.NombreCorto,'')+')' AS Nombre ", false);
            $this->sqlsrv->from('Cte AS C');
            $this->sqlsrv->where('C.Tipo', 'Cliente');
            $query = $this->sqlsrv->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->sqlsrv->last_query();
//        print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProyectosIntelisis() {
        try {
            $this->sqlsrv->select('Proyecto,Categoria,Descripcion ', false);
            $this->sqlsrv->from('PROY');
            $this->sqlsrv->where('Estatus', 'ALTA');
            $query = $this->sqlsrv->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->sqlsrv->last_query();
//        print $str;
            $data =$query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
