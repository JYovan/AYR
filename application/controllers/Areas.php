<?php

header('Access-Control-Allow-Origin: http://app.ayr.mx/');
defined('BASEPATH') or exit('No direct script access allowed');

class Areas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session');
        $this->load->model('cliente_model');
        $this->load->model('areas_model');
        $this->load->model('registroUsuarios_model');
    }

    public function index() {

        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            $this->load->view('vEncabezado');
            $this->load->view('vNavegacion');
            $this->load->view('vAreas');
            $this->load->view('vFooter');
            $dataRegistrarAccion = array(
                'Accion' => 'ACCESO A ÁREAS',
                'Registro' => date("d-m-Y H:i:s"),
                'Usuario_ID' => $this->session->userdata('ID')
            );
            $this->registroUsuarios_model->onAgregar($dataRegistrarAccion);
        } else {
            $this->load->view('vEncabezado');
            $this->load->view('vSesion');
            $this->load->view('vFooter');
        }
    }

    public function getRecords() {
        try {
            $data = $this->areas_model->getRecords($this->input->post('Cliente'));
            print json_encode($data);
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

    public function getAreas() {
        try {
            $data = $this->areas_model->getAreas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getAreaByID() {
        try {
            extract($this->input->post());
            $data = $this->areas_model->getAreaByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregar() {
        try {
            /* TRABAJO */
            extract($this->input->post());
            $data = array(
                'Descripcion' => (isset($Descripcion) && $Descripcion !== '') ? $Descripcion : null,
                'Estatus' => 'ACTIVO',
                'Cliente_ID' => $Cliente_ID,
            );
            $ID = $this->areas_model->onAgregar($data);

            echo $ID;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar() {
        try {
            extract($this->input->post());
            $DATA = array(
                'Descripcion' => ($Descripcion !== null) ? $Descripcion : null,
            );
            $this->areas_model->onModificar($ID, $DATA);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar() {
        try {
            extract($this->input->post());
            $this->areas_model->onEliminar($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
