
<?php

header('Access-Control-Allow-Origin: http://project.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlPreciarios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('preciario_model');
    }

    public function index() {

        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            $this->load->view('vEncabezado');
            $this->load->view('vNavegacion');
            $this->load->view('vPreciarios');
        } else {
            $this->load->view('vEncabezado');
            $this->load->view('vSesion');
        }
    }

    public function getClientes() {
        try {
            $data = $this->preciario_model->getClientes();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregar() {
        try {
            $this->usuario_model->onAgregar($this->input->post());
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar() {
        try {
            extract($this->input->post());
            $DATA = array(
                'Nombre' => ($Nombre !== NULL && $Nombre !=='') ? $Nombre : NULL,
                'Tipo' => ($Tipo !== NULL && $Tipo !=='') ? $Tipo : NULL,
                'FechaCreacion' => ($FechaCreacion !== NULL && $FechaCreacion !=='') ? $FechaCreacion : NULL, 
                'Cliente_ID' => ($Cliente_ID !== NULL && $Cliente_ID !=='') ? $Cliente_ID : NULL
            );
            $this->usuario_model->onModificar($ID, $DATA);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar() {
        try {
            extract($this->input->post());
            $this->usuario_model->onEliminar($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
}
