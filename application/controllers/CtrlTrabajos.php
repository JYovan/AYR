<?php

header('Access-Control-Allow-Origin: http://project.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlTrabajos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('sucursal_model');
        $this->load->model('cliente_model');
        $this->load->model('preciario_model');
        $this->load->model('codigoppta_model');
        $this->load->model('cuadrilla_model');
        $this->load->model('trabajo_model');
    }

    public function index() {

        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            $this->load->view('vEncabezado');
            $this->load->view('vNavegacion');
            $this->load->view('vTrabajos');
            $this->load->view('vFooter');
        } else {
            $this->load->view('vEncabezado');
            $this->load->view('vSesion');
            $this->load->view('vFooter');
        }
    }
    
    
    
    public function getRecords() {
        try {
            $data = $this->trabajo_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
      public function getTrabajoByID() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getTrabajoByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
      public function onAgregar() {
        try {
           $ID = $this->trabajo_model->onAgregar($this->input->post());
            print "ID: " . $ID;
            $URL_DOC = 'uploads/Trabajos/AdjuntoEncabezado';
            $master_url = $URL_DOC . '/';
            if (isset($_FILES["Adjunto"]["name"])) {
                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                }
                if (move_uploaded_file($_FILES["Adjunto"]["tmp_name"], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["Adjunto"]["name"]))) {
                    $img = $master_url . $ID . '/' . $_FILES["Adjunto"]["name"];
                    $DATA = array(
                        'Adjunto' => ($img)
                    );
                    $this->trabajo_model->onModificar($ID, $DATA);
                } else {
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }
            
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
     public function onModificar() {
        try {
            extract($this->input->post());
            
            $this->trabajo_model->onModificar($ID, $this->input->post());
  
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
     public function onEliminar() {
        try {
            extract($this->input->post());
            $this->trabajo_model->onEliminar($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function getClientes() {
        try {
            $data = $this->cliente_model->getClientes();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function getSucursalesByCliente() {
        try {
            extract($this->input->post());
            $data = $this->sucursal_model->getSucursalesByCliente($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
     public function getPreciariosByCliente() {
        try {
            extract($this->input->post());
            $data = $this->preciario_model->getPreciariosByCliente($Cliente_ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    
    public function getSucursalByID() {
        try {
            extract($this->input->post());
            $data = $this->sucursal_model->getSucursalByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
     public function getPreciarioByID() {
        try {
            extract($this->input->post());
            $data = $this->preciario_model->getPreciarioByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
     public function getCodigosPPTA() {
        try {
            extract($this->input->post());
            $data = $this->codigoppta_model->getCodigosPPTA();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
     public function getCuadrillas() {
        try {
            extract($this->input->post());
            $data = $this->cuadrilla_model->getCuadrillas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
     public function getCodigoPPTAbyID() {
        try {
            extract($this->input->post());
            $data = $this->codigoppta_model->getCodigoPPTAByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    
    
    

}