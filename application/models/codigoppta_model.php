<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class codigoppta_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getRecords() {
        try {
            $query = $this->db->query("CALL SP_CODIGOSPPTA()");
         
            $str = $this->db->last_query();
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCodigosPPTA() {
        try {
            $this->db->select('CP.ID, CP.Codigo AS Código, CP.Dias AS Dias', false);
            $this->db->from('codigosppta AS CP');
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

    public function getCodigoPPTAByID($ID) {
        try {
            $this->db->select('CP.ID,CP.Codigo, CP.Dias', false);
            $this->db->from('codigosppta AS CP');
            $this->db->where('CP.ID', $ID);
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
            $this->db->insert("codigosppta", $array);
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
            $this->db->update("codigosppta", $DATA);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function onEliminar($ID) {
        try {
            
            $this->db->where('ID', $ID);
            $this->db->delete("codigosppta");

            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
}


