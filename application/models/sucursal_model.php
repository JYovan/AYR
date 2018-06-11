<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author.
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class sucursal_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getRecords($Cliente) {
        try {
            $this->db->select("S.ID, S.CR AS CR,S.Nombre as Sucursal , S.Region AS Region, C.Nombre AS Cliente ", false);
            $this->db->from('Sucursales AS S');
            $this->db->join('Clientes AS C', 'C.ID = S.Cliente_ID', 'left');
            $this->db->where('S.Cliente_ID', $Cliente);
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

    public function getClientes() {
        try {
            $this->db->select('C.ID, C.Nombre AS Cliente', false);
            $this->db->from('Clientes AS C');
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

    public function getSucursalesByCliente($ID) {
        try {
            $this->db->select('S.ID, S.CR AS CR,S.Nombre as "Sucursal" , S.Region AS "Región"', false);
            $this->db->from('sucursales AS S');
            $this->db->where('S.Cliente_ID', $ID);
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

    public function getSucursalByID($ID) {
        try {
            $this->db->select('S.*', false);
            $this->db->from('sucursales AS S');
            $this->db->where('S.ID', $ID);
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
            $this->db->insert("sucursales", $array);
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
            $this->db->update("sucursales", $DATA);
            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar($ID) {
        try {
            $this->db->where('ID', $ID);
            $this->db->delete("sucursales");
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
