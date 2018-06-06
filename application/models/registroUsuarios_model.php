<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class registroUsuarios_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getRecords() {
        try {
            $this->db->select("UL.ID,
UPPER(CONCAT(U.Nombre, ' ', U.Apellidos)) AS Usuario,
CONCAT('<span class=\'label label-info\'>',ifnull(UL.Registro,'--'),'</span>') AS 'Registro',
UL.Accion AS 'Acción',
ifnull(CT.Nombre,'USUARIO INTERNO') AS Cliente,
E.Nombre AS Empresa
FROM usuarios_log AS UL
INNER JOIN usuarios U ON UL.Usuario_ID =  U.ID
LEFT JOIN clientes CT on CT.ID =  U.Cliente_ID
LEFT JOIN empresas E ON E.ID = U.Empresa_ID ; ", false);
            $query = $this->db->get();

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
            $this->db->insert("usuarios_log", $array);
            //print $str = $this->db->last_query();
            $query = $this->db->query('SELECT LAST_INSERT_ID()');
            $row = $query->row_array();
            $LastIdInserted = $row['LAST_INSERT_ID()'];
            return $LastIdInserted;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
