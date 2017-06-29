<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class centrocostos_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function getRecords() {
        try {
            $this->db->select('C.ID, C.Nombre AS "Centro de Costos", C.Descripcion', false);
            $this->db->from('centrocostos AS C');
            $this->db->where_in('C.Estatus', 'ACTIVO');
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

    public function getCC() {
        try {
              $this->db->select('C.ID, C.Nombre, C.Descripcion', false);
            $this->db->from('centrocostos AS C');
            $this->db->where_in('C.Estatus', 'ACTIVO');
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

    public function getCCByID($ID) {
        try {
            $this->db->select('C.*', false);
            $this->db->from('centrocostos AS C');
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

    public function onAgregar($array) {
        try {
            $this->db->insert("centrocostos", $array);
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
            $this->db->update("centrocostos", $DATA);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function onEliminar($ID) {
        try {
            $this->db->set('Estatus', 'INACTIVO'); 
            $this->db->where('ID', $ID);
            $this->db->update("centrocostos");
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    

}