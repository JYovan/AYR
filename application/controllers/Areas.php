<?php

header('Access-Control-Allow-Origin: http://app.ayr.mx/');
defined('BASEPATH') or exit('No direct script access allowed');

class Areas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session')->model('cliente_model')->model('areas_model')->model('registroUsuarios_model');
    }

    public function index() {
        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            $this->load->view('vEncabezado');

            switch ($this->session->userdata["TipoAcceso"]) {
                case 'SUPER ADMINISTRADOR':
                    $this->load->view('vNavegacion');

                    break;
                case 'ADMINISTRADOR':
                    $this->load->view('vMenuAdministrador');

                    break;
                case 'COORDINADOR DE PROCESOS':
                    $this->load->view('vMenuCoordinador');

                    break;
                case 'RESIDENTE':
                    $this->load->view('vMenuResidente');

                    break;
                case 'CLIENTE':
                    $this->load->view('vMenuCliente');
                    break;
            }
            $this->load->view('vFondo');
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
            print json_encode($this->areas_model->getRecords($this->input->post('Cliente')));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getClientes() {
        try {
            print json_encode($this->cliente_model->getClientes());
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getAreas() {
        try {
            print json_encode($this->areas_model->getAreas());
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getAreaByID() {
        try {
            print json_encode($this->areas_model->getAreaByID($this->input->post('ID')));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregar() {
        try {
            /* TRABAJO */
            $x = $this->input;
            $ID = $this->areas_model->onAgregar(array(
                'Descripcion' => ($x->post('Descripcion') !== '') ? $x->post('Descripcion') : null,
                'Estatus' => 'ACTIVO',
                'Cliente_ID' => $x->post('Cliente_ID'),
            ));
            echo $ID;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar() {
        try {
            $this->areas_model->onModificar($this->input->post('ID'), array(
                'Descripcion' => ($this->input->post('Descripcion') !== null) ? $this->input->post('Descripcion') : null,
            ));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar() {
        try {
            $this->areas_model->onEliminar($this->input->post('ID'));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
