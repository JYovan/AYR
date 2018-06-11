<?php

header('Access-Control-Allow-Origin: http://app.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session')->model('usuario_model')->model('empresa_model')->model('cliente_model');
    }

    public function index() {
        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            if (in_array($this->session->userdata["TipoAcceso"], array("SUPER ADMINISTRADOR"))) {
                $this->load->view('vEncabezado')->view('vNavegacion')->view('vUsuarios')->view('vFooter');
                $dataRegistrarAccion = array(
                    'Accion' => 'ACCESO A USUARIOS',
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
            $this->load->view('vEncabezado')->view('vSesion')->view('vFooter');
        }
    }

    public function getRecords() {
        try {
            print json_encode($this->usuario_model->getRecords());
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEmpresas() {
        try {
            print json_encode($this->empresa_model->getEmpresas());
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

    public function getUsuarioByID() {
        try {
            print json_encode($this->usuario_model->getUsuarioByID($this->input->post('ID')));
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
                'Usuario' => ($Usuario !== NULL) ? $Usuario : NULL,
                'Contrasena' => ($Contrasena !== NULL) ? $Contrasena : NULL,
                'Nombre' => ($Nombre !== NULL) ? $Nombre : NULL,
                'Apellidos' => ($Apellidos !== NULL) ? $Apellidos : NULL,
                'TipoAcceso' => ($TipoAcceso !== NULL) ? $TipoAcceso : NULL,
                'Empresa_ID' => ($Empresa_ID !== NULL) ? $Empresa_ID : NULL,
                'Estatus' => ($Estatus !== NULL) ? $Estatus : NULL,
                'Cliente_ID' => ($Cliente_ID !== NULL && $Cliente_ID !== 0) ? $Cliente_ID : NULL
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
