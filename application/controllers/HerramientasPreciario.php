<?php

header('Access-Control-Allow-Origin: http://app.ayr.mx/');
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "/third_party/fpdf17/fpdf.php";
require_once APPPATH . "/third_party/PHPExcel.php";

class HerramientasPreciario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session');
        $this->load->model('preciario_model');
        $this->load->model('trabajo_model');
        $this->load->model('registroUsuarios_model');
    }

    public function index() {
        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            if (in_array($this->session->userdata["TipoAcceso"], array("SUPER ADMINISTRADOR"))) {
                $this->load->view('vEncabezado');
                $this->load->view('vNavegacion');
                $this->load->view('vHerramientasPreciario');
                $this->load->view('vFooter');
                $dataRegistrarAccion = array(
                    'Accion' => 'ACCESO A HERRAMIENTAS PRECIARIOS',
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

    public function getConceptosXPreciarioIDSinFormato() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getConceptosXPreciarioIDSinFormato($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarDetalleEditar() {
        try {
            extract($this->input->post());
            $data = array(
                'Trabajo_ID' => $Trabajo_ID,
                'PreciarioConcepto_ID' => $PreciarioConcepto_ID,
                'Renglon' => $Renglon,
                'Cantidad' => 0,
                'Unidad' => (isset($Unidad)) ? $Unidad : "",
                'Precio' => (isset($Precio)) ? $Precio : 0,
                'Importe' => (isset($Importe)) ? $Importe : 0,
                'IntExt' => (isset($IntExt)) ? $IntExt : "",
                'Moneda' => (isset($Moneda)) ? $Moneda : "",
                'Concepto' => (isset($Concepto)) ? $Concepto : "",
                'Clave' => (isset($Clave)) ? $Clave : "",
                'TipoCambio' => 1,
            );
            $ID = $this->trabajo_model->onAgregarDetalle($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
