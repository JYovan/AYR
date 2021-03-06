<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author.
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class empresaSupervisora_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getRecords() {
        try {
            $this->db->select('ES.ID, ES.Nombre AS Empresa ', false);
            $this->db->from('empresassupervisoras AS ES');
            $this->db->where_in('ES.Estatus', 'Activo');
            $query = $this->db->get();

            $str = $this->db->last_query();
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEmpresasSupervisoras() {
        try {
            $this->db->select('ES.ID, ES.Nombre AS Empresa, ES.Contacto AS Contacto1, ES.Contacto2 AS Contacto2', false);
            $this->db->from('empresassupervisoras AS ES');
            $this->db->where_in('ES.Estatus', 'Activo');
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

    public function getEmpresaSupervisoraByID($ID) {
        try {
            $this->db->select('ES.*', false);
            $this->db->from('empresassupervisoras AS ES');
            $this->db->where('ES.ID', $ID);
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
            $this->db->insert("empresassupervisoras", $array);
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
            $this->db->update("empresassupervisoras", $DATA);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar($ID) {
        try {
            $this->db->set('Estatus', 'Inactivo');
            $this->db->where('ID', $ID);
            $this->db->update("empresassupervisoras");
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
