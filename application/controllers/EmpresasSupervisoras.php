<?php

header('Access-Control-Allow-Origin: http://app.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');

class EmpresasSupervisoras extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session');
        $this->load->model('empresaSupervisora_model');
        $this->load->model('registroUsuarios_model');
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
            $this->load->view('vEmpresasSupervisoras');
            $this->load->view('vFooter');

            $dataRegistrarAccion = array(
                'Accion' => 'ACCESO A EMPRESAS SUPERVISORAS',
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
            extract($this->input->post());
            $DATA = array(
                'Nombre' => ($Nombre !== NULL) ? $Nombre : NULL,
                'Descripcion' => ($Descripcion !== NULL) ? $Descripcion : NULL,
                'Contacto' => ($Contacto !== NULL) ? $Contacto : NULL,
                'Contacto2' => ($Contacto2 !== NULL) ? $Contacto2 : NULL,
                'Estatus' => 'Activo'
            );
            $this->empresaSupervisora_model->onAgregar($DATA);
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
