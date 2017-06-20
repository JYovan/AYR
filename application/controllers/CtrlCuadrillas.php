<?php
header('Access-Control-Allow-Origin: http://control.ayr.mx');
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlCuadrillas extends CI_Controller {

   
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
         $this->load->model('cuadrilla_model');
    }

    public function index() {
        
        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            $this->load->view('vEncabezado');
            $this->load->view('vNavegacion');
            $this->load->view('vCuadrillas');
             $this->load->view('vFooter');
        } else {
            $this->load->view('vEncabezado');
            $this->load->view('vSesion');
             $this->load->view('vFooter');
        }
        
    }
    
    
     public function getRecords() {
        try {
            $data = $this->cuadrilla_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCuadrillaByID() {
        try {
            extract($this->input->post());
            $data = $this->cuadrilla_model->getCuadrillaByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function onAgregar() {
        try {
          $this->cuadrilla_model->onAgregar($this->input->post());
           
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar() {
        try {
            extract($this->input->post());
            $DATA = array(
                'Nombre' => ($Nombre !== NULL) ? $Nombre : NULL,
                'Miembros' => ($Miembros !== NULL) ? $Miembros : NULL,
                'Estatus' => ($Estatus !== NULL) ? $Estatus : NULL

            );
            $this->cuadrilla_model->onModificar($ID, $DATA);
  
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
     public function onEliminar() {
        try {
            extract($this->input->post()); 
            $this->cuadrilla_model->onEliminar($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    

}
