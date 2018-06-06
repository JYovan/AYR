<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
class usuario_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
   
    public function getRecords() {
        try {
            $this->db->select("ID, CONCAT(U.Nombre, ' ', U.Apellidos) AS Nombre,
                CONCAT('<span class=\'label label-info\'>',ifnull(U.UltimoAcceso,'--'),'</span>') AS 'Último Acceso',
                  (CASE WHEN  U.Estatus ='Activo' THEN CONCAT('<span class=\'label label-success\'>','ACTIVO','</span>')
                    ELSE CONCAT('<span class=\'label label-danger\'>','INACTIVO','</span>') END) AS Estatus ,
                    U.TipoAcceso AS Acceso,
                    (CASE
                    WHEN U.Empresa_ID IS NULL THEN 'NO ESPECIFICA'
                    ELSE (SELECT E.Nombre FROM empresas AS E WHERE E.ID = U.Empresa_ID)
                    END) AS Empresa
                    FROM Usuarios AS U; ", false);
            $query = $this->db->get();

            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function getAcceso($USUARIO, $CONTRASENA) {
        try {
            $this->db->select('U.*', false);
            $this->db->from('usuarios AS U');
            $this->db->where('U.Usuario', $USUARIO);
            $this->db->where('U.Contrasena', $CONTRASENA);
            $this->db->where_in('U.Estatus', 'Activo');
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

    public function getContrasena($USUARIO) {
        try {
            $this->db->select('U.Contrasena', false);
            $this->db->from('usuarios AS U');
            $this->db->where('U.Usuario', $USUARIO);
            $this->db->where_in('U.Estatus', 'Activo');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//       print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregar($array) {
        try {
            $this->db->insert("usuarios", $array);
            print $str = $this->db->last_query();
            $query = $this->db->query('SELECT LAST_INSERT_ID()');
            $row = $query->row_array();
            $LastIdInserted = $row['LAST_INSERT_ID()'];
            return $LastIdInserted;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function onModificar($ID, $DATA) {
        try {
            $this->db->where('ID', $ID);
            $this->db->update("usuarios", $DATA);
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarUltimoAcceso($ID, $ULTIMOACCESO) {
        try {
            $this->db->set('UltimoAcceso', $ULTIMOACCESO);
            $this->db->where('ID', $ID);
            $this->db->update("usuarios");
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar($ID) {
        try {
            $this->db->set('Estatus', 'Inactivo');
            $this->db->where('ID', $ID);
            $this->db->update("usuarios");
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function getUsuarioByID($ID) {
        try {
            $this->db->select('U.*', false);
            $this->db->from('usuarios AS U');
            $this->db->where('U.ID', $ID);
            //$this->db->where_in('U.Estatus', 'Activo');
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
}
