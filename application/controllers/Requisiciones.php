
<?php

header('Access-Control-Allow-Origin: http://app.ayr.mx/');
defined('BASEPATH') or exit('No direct script access allowed');

class Requisiciones extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session');
        $this->load->model('requisiciones_model')->model('registroUsuarios_model');
    }

    public function index() {
        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            $this->load->view('vEncabezado');

            switch ($this->session->userdata["TipoAcceso"]) {
                case 'SUPER ADMINISTRADOR':
                    $this->load->view('vNavegacion');

                    break;
                case 'COORDINADOR DE PROCESOS':
                    $this->load->view('vMenuCoordinador');

                    break;
                case 'TECNICO':
                    $this->load->view('vMenuTecnico');
                    break;
            }
            $this->load->view('vFondo');
            $this->load->view('vRequisiciones');
            $this->load->view('vFooter');

            $dataRegistrarAccion = array(
                'Accion' => 'ACCESO A REQUISICIONES',
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
            print json_encode($this->requisiciones_model->getRecords());
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRequisicionByID() {
        try {
            print json_encode($this->requisiciones_model->getRequisicionByID($this->input->post('ID')));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregar() {
        try {
            extract($this->input->post());
            $data = array(
                'Fecha' => $Fecha,
                'Sitio' => (isset($Sitio) && $Sitio !== '') ? $Sitio : null,
                'Observaciones' => (isset($Observaciones) && $Observaciones !== '') ? $Observaciones : null,
                'Usuario_ID' => $this->session->userdata('ID'),
                'Estatus' => 'Pendiente',
            );
            $ID = $this->requisiciones_model->onAgregar($data);

            echo $ID;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar() {
        try {
            extract($this->input->post());
            $data = array(
                'Sitio' => (isset($Sitio) && $Sitio !== '') ? $Sitio : null,
                'Estatus' => (isset($Estatus) && $Estatus !== '') ? $Estatus : null,
                'Observaciones' => (isset($Observaciones) && $Observaciones !== '') ? $Observaciones : null
            );
            $this->requisiciones_model->onModificar($ID, $data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar() {
        try {
            extract($this->input->post());
            $this->requisiciones_model->onEliminar($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDetalleByID() {
        try {
            print json_encode($this->requisiciones_model->getDetalleByID($this->input->post('ID')));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDatosDetalleByID() {
        try {
            print json_encode($this->requisiciones_model->getDatosDetalleByID($this->input->post('ID')));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarDetalle() {
        try {
            extract($this->input->post());
            $data = array(
                'Requisicion' => $Requisicion,
                'Material' => $Material,
                'Cantidad' => $Cantidad
            );
            $ID = $this->requisiciones_model->onAgregarDetalle($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarDetalle() {
        try {
            extract($this->input->post());
            $data = array(
                'Material' => (isset($Material) && $Material !== '') ? $Material : null,
                'Cantidad' => (isset($Cantidad) && $Cantidad !== '') ? $Cantidad : 0
            );
            $this->requisiciones_model->onModificarDetalle($ID, $data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarDetalle() {
        try {
            extract($this->input->post());
            $this->requisiciones_model->onEliminarDetalle($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
