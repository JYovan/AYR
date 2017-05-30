<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class trabajo_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getRecords() {
        try {
            $this->db->select("T.ID, T.Movimiento,"
                    . "(CASE WHEN  T.FolioCliente IS NULL OR T.FolioCliente =' ' THEN ' -- ' ELSE T.FolioCliente  END) AS 'Folio', "
                    . "(CASE WHEN  T.Situacion ='AUTORIZADO' THEN CONCAT('<span class=\'label label-success\'>','AUTORIZADO','</span>') "
                    . "WHEN  T.Situacion ='SIN AUTORIZAR' THEN CONCAT('<span class=\'label label-danger\'>','SIN AUTORIZAR','</span>')"
                    . "ELSE CONCAT('<span class=\'label label-warning\'>','PENDIENTE','</span>') END) AS Estatus ,"
                    . "T.FechaCreacion as 'Fecha Creación' ,"
                    . "(CASE WHEN  T.Atendido ='Si' THEN CONCAT('<span class=\'label label-success\'>','SI','</span>') ELSE CONCAT('<span class=\'label label-danger\'>','NO','</span>') END) AS Atendido ,"
                    . "(CASE WHEN  T.Adjunto IS NULL THEN CONCAT('<span class=\'label label-danger\'>','NO','</span>') ELSE CONCAT('<span class=\'label label-success\'>','SI','</span>') END) AS Adjunto ,"
                    . "Ct.Nombre as 'Cliente', "
                    . "concat(S.CR,' ',S.Nombre) as 'Sucursal' ,"
                    . "(CASE WHEN  T.Clasificacion IS NULL THEN ' -- ' ELSE T.Clasificacion  END) AS 'Clasificación', "
                    . "S.Region ,"
                    . "(CASE WHEN  Cd.Nombre IS NULL THEN ' -- ' ELSE Cd.Nombre  END) AS 'Cuadrilla', "
                    . "concat(u.nombre,' ',u.apellidos)as 'Usuario' "
                    . "FROM TRABAJOS T  "
                    . "INNER JOIN CLIENTES CT on CT.ID = T.Cliente_ID  "
                    . "INNER JOIN SUCURSALES S on S.ID = T.Sucursal_ID "
                    . "LEFT JOIN CUADRILLAS Cd on Cd.ID = T.Cuadrilla_ID  "
                    . "INNER JOIN USUARIOs U ON U.ID = T.Usuario_ID WHERE T.ESTATUS='ACTIVO' ", false);

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
            $this->db->insert("trabajos", $array);
            print $str = $this->db->last_query();
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
            $this->db->update("trabajos", $DATA);
            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar($ID) {
        try {
            $this->db->set('Estatus', 'Inactivo');
            $this->db->where('ID', $ID);
            $this->db->update("trabajos");
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoByID($ID) {
        try {
            $this->db->select('T.*', false);
            $this->db->from('trabajos AS T');
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

}
