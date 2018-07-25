<?php

header('Access-Control-Allow-Origin: http://app.ayr.mx');
defined('BASEPATH') OR exit('No direct script access allowed');

class VisorCliente extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session');
        $this->load->model('visorCliente_model');
        $this->load->model('registroUsuarios_model');
    }

    public function index() {

        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            if (in_array($this->session->userdata["TipoAcceso"], array("SUPER ADMINISTRADOR", "CLIENTE"))) {
                $this->load->view('vEncabezado');
                $this->load->view('vNavegacion');
                $this->load->view('vVisorCliente');
                $this->load->view('vFooter');
                $dataRegistrarAccion = array(
                    'Accion' => 'ACCESO A ANALISIS DEL CLIENTE',
                    'Registro' => date("d-m-Y H:i:s"),
                    'Usuario_ID' => $this->session->userdata('ID')
                );
                $this->registroUsuarios_model->onAgregar($dataRegistrarAccion);
            } else {
                $this->load->view('vEncabezado');
                $this->load->view('vNavegacion');
                $this->load->view('vFooter');
            }
        } else {
            $this->load->view('vEncabezado');
            $this->load->view('vSesion');
            $this->load->view('vFooter');
        }
    }

    public function getRecords() {
        try {
            $data = $this->visorCliente_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
