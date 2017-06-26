<?php

header('Access-Control-Allow-Origin: http://control.ayr.mx');
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlCentroCostos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('centrocostos_model');
    }
    public function index() {

        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            $this->load->view('vEncabezado');
            $this->load->view('vNavegacion');
            $this->load->view('vCentroCostos');
            $this->load->view('vFooter');
        } else {
            $this->load->view('vEncabezado');
            $this->load->view('vSesion');
            $this->load->view('vFooter');
        }
    }
    
     public function getRecords() {
        try {
            $data = $this->centrocostos_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCCByID() {
        try {
            extract($this->input->post());
            $data = $this->centrocostos_model->getCCByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function onAgregar() {
        try {
          $this->centrocostos_model->onAgregar($this->input->post());
           
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
                'Estatus' => ($Estatus !== NULL) ? $Estatus : NULL

            );
            $this->centrocostos_model->onModificar($ID, $DATA);
  
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
     public function onEliminar() {
        try {
            extract($this->input->post()); 
            $this->centrocostos_model->onEliminar($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    

}
