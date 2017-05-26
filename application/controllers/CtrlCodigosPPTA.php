<?php

header('Access-Control-Allow-Origin: http://project.ayr.mx');


defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlCodigosPPTA extends CI_Controller {

   
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
         $this->load->model('codigoppta_model');
    }

    public function index() {
        
        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            $this->load->view('vEncabezado');
            $this->load->view('vNavegacion');
            $this->load->view('vCodigosPPTA');
        } else {
            $this->load->view('vEncabezado');
            $this->load->view('vSesion');
        }
    }
    
    
    
    public function getRecords() {
        try {
            $data = $this->codigoppta_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    
   
    
    public function getCodigoPPTAByID() {
        try {
            extract($this->input->post());
            $data = $this->codigoppta_model->getCodigoPPTAByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function onAgregar() {
        try {
          $this->codigoppta_model->onAgregar($this->input->post());
           
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar() {
        try {
            extract($this->input->post());
            $DATA = array(
                'Codigo' => ($Codigo !== NULL) ? $Codigo : NULL,
                'Dias' => ($Dias !== NULL) ? $Dias : NULL
            );
            $this->codigoppta_model->onModificar($ID, $DATA);
  
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
     public function onEliminar() {
        try {
            extract($this->input->post()); 
            
            $this->codigoppta_model->onEliminar($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
