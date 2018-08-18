<?php

header('Access-Control-Allow-Origin: http://app.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session');
        $this->load->model('empresa_model');
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
            $this->load->view('vEmpresas');
            $this->load->view('vFooter');

            $dataRegistrarAccion = array(
                'Accion' => 'ACCESO A EMPRESAS',
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
            $data = $this->empresa_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEmpresaByID() {
        try {
            extract($this->input->post());
            $data = $this->empresa_model->getEmpresaByID($ID);
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
                'Rfc' => ($Rfc !== NULL) ? $Rfc : NULL,
                'ContactoNombre' => ($ContactoNombre !== NULL) ? $ContactoNombre : NULL,
                'ContactoApellidos' => ($ContactoApellidos !== NULL) ? $ContactoApellidos : NULL,
                'Direccion' => ($Direccion !== NULL) ? $Direccion : NULL,
                'NoExterior' => ($NoExterior !== NULL) ? $NoExterior : NULL,
                'NoInterior' => ($NoInterior !== NULL) ? $NoInterior : NULL,
                'CodigoPostal' => ($CodigoPostal !== NULL) ? $CodigoPostal : NULL,
                'Colonia' => ($Colonia !== NULL) ? $Colonia : NULL,
                'Ciudad' => ($Ciudad !== NULL) ? $Ciudad : NULL,
                'Estado' => ($Estado !== NULL) ? $Estado : NULL,
                'Estatus' => 'Activo',
                'Registro' => Date('d/m/Y h:i:s a')
            );

            $ID = $this->empresa_model->onAgregar($this->input->post());
            /* SUBIR FOTO */
            $URL_DOC = 'uploads/Empresas/';
            $master_url = $URL_DOC . '/';
            if (isset($_FILES["RutaLogo"]["name"])) {
                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                }
                if (move_uploaded_file($_FILES["RutaLogo"]["tmp_name"], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["RutaLogo"]["name"]))) {
                    $img = $master_url . $ID . '/' . $_FILES["RutaLogo"]["name"];

                    $this->load->library('image_lib');
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $img;
                    $config['maintain_ratio'] = true;
                    $config['width'] = 250;
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();

                    $DATA = array(
                        'RutaLogo' => ($img),
                    );
                    $this->empresa_model->onModificar($ID, $DATA);
                } else {
                    $DATA = array(
                        'RutaLogo' => (null),
                    );
                    $this->empresa_model->onModificar($ID, $DATA);
                }
            }
            /* FIN SUBIR FOTO */
            print $ID;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar() {
        try {
            extract($this->input->post());
            $DATA = array(
                'Nombre' => ($Nombre !== NULL) ? $Nombre : NULL,
                'Rfc' => ($Rfc !== NULL) ? $Rfc : NULL,
                'ContactoNombre' => ($ContactoNombre !== NULL) ? $ContactoNombre : NULL,
                'ContactoApellidos' => ($ContactoApellidos !== NULL) ? $ContactoApellidos : NULL,
                'Direccion' => ($Direccion !== NULL) ? $Direccion : NULL,
                'NoExterior' => ($NoExterior !== NULL) ? $NoExterior : NULL,
                'NoInterior' => ($NoInterior !== NULL) ? $NoInterior : NULL,
                'CodigoPostal' => ($CodigoPostal !== NULL) ? $CodigoPostal : NULL,
                'Colonia' => ($Colonia !== NULL) ? $Colonia : NULL,
                'Ciudad' => ($Ciudad !== NULL) ? $Ciudad : NULL,
                'Estado' => ($Estado !== NULL) ? $Estado : NULL,
            );
            $this->empresa_model->onModificar($ID, $DATA);
            print "ID: " . $ID;
            /* SUBIR FOTO */
            $URL_DOC = 'uploads/Empresas/';
            $master_url = $URL_DOC . '/';
            if (isset($_FILES["RutaLogo"]["name"])) {
                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                }
                if (move_uploaded_file($_FILES["RutaLogo"]["tmp_name"], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["RutaLogo"]["name"]))) {
                    $img = $master_url . $ID . '/' . $_FILES["RutaLogo"]["name"];

                    $this->load->library('image_lib');
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $img;
                    $config['maintain_ratio'] = true;
                    $config['width'] = 250;
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();

                    $DATA = array(
                        'RutaLogo' => ($img),
                    );
                    $this->empresa_model->onModificar($ID, $DATA);
                } else {
                    $DATA = array(
                        'RutaLogo' => (null),
                    );
                    $this->empresa_model->onModificar($ID, $DATA);
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar() {
        try {
            extract($this->input->post());
            $this->empresa_model->onEliminar($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
