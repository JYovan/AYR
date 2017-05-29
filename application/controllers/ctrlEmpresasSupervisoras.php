<?php

header('Access-Control-Allow-Origin: http://project.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlEmpresasSupervisoras extends CI_Controller {

   
   
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('empresaSupervisora_model');
    }

    public function index() {
      
        
        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            $this->load->view('vEncabezado');
            $this->load->view('vNavegacion');
            $this->load->view('vEmpresasSupervisoras');
             $this->load->view('vFooter');
        } else {
            $this->load->view('vEncabezado');
            $this->load->view('vSesion');
             $this->load->view('vFooter');
        }
    }
    
   public function getRecords() {
        try {
            $data = $this->empresaSupervisora_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEmpresaSupervisoraByID() {
        try {
            extract($this->input->post());
            $data = $this->empresaSupervisora_model->getEmpresaSupervisoraByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function onAgregar() {
        try {
          $this->empresaSupervisora_model->onAgregar($this->input->post());
           
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar() {
        try {
            extract($this->input->post());
            $DATA = array(
                'Nombre' => ($Nombre !== NULL) ? $Nombre : NULL,
                'Descripcion' => ($Descripcion !== NULL) ? $Descripcion : NULL,
                'Contacto' => ($Contacto !== NULL) ? $Contacto : NULL,
                'Contacto2' => ($Contacto2 !== NULL) ? $Contacto2 : NULL
            );
            $this->empresaSupervisora_model->onModificar($ID, $DATA);
  
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
     public function onEliminar() {
        try {
            extract($this->input->post()); 
            
            $this->empresaSupervisora_model->onEliminar($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}




