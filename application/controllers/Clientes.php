<?php

header('Access-Control-Allow-Origin: http://app.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session');
        $this->load->model('cliente_model');
        $this->load->model('registroUsuarios_model');
    }

    public function index() {

        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {

            if (in_array($this->session->userdata["TipoAcceso"], array("COORDINADOR DE PROCESOS", "ADMINISTRADOR", "SUPER ADMINISTRADOR"))) {
                $this->load->view('vEncabezado');
                $this->load->view('vNavegacion');
                $this->load->view('vClientes');
                $this->load->view('vFooter');
                $dataRegistrarAccion = array(
                    'Accion' => 'ACCESO A CLIENTES',
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
            $data = $this->cliente_model->getRecords();
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

    public function getClienteByID() {
        try {
            extract($this->input->post());
            $data = $this->cliente_model->getClienteByID($ID);
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
                'NombreCorto' => ($NombreCorto !== NULL) ? $NombreCorto : NULL,
                'Calle' => ($Calle !== NULL) ? $Calle : NULL,
                'NoExterior' => ($NoExterior !== NULL) ? $NoExterior : NULL,
                'NoInterior' => ($NoInterior !== NULL) ? $NoInterior : NULL,
                'CodigoPostal' => ($CodigoPostal !== NULL) ? $CodigoPostal : NULL,
                'Colonia' => ($Colonia !== NULL) ? $Colonia : NULL,
                'Ciudad' => ($Ciudad !== NULL) ? $Ciudad : NULL,
                'Estado' => ($Estado !== NULL) ? $Estado : NULL,
                'Contacto1' => ($Contacto1 !== NULL) ? $Contacto1 : NULL,
                'Contacto2' => ($Contacto2 !== NULL) ? $Contacto2 : NULL,
                'Contacto3' => ($Contacto3 !== NULL) ? $Contacto3 : NULL,
                'LeyendaReporte' => ($LeyendaReporte !== NULL) ? $LeyendaReporte : NULL
            );
            $ID = $this->cliente_model->onAgregar($DATA);
            /* SUBIR FOTO */
            $URL_DOC = 'uploads/Clientes/';
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
                    $this->cliente_model->onModificar($ID, $DATA);
                } else {
                    $DATA = array(
                        'RutaLogo' => (null),
                    );
                    $this->cliente_model->onModificar($ID, $DATA);
                }
            }
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
                'NombreCorto' => ($NombreCorto !== NULL) ? $NombreCorto : NULL,
                'Calle' => ($Calle !== NULL) ? $Calle : NULL,
                'NoExterior' => ($NoExterior !== NULL) ? $NoExterior : NULL,
                'NoInterior' => ($NoInterior !== NULL) ? $NoInterior : NULL,
                'CodigoPostal' => ($CodigoPostal !== NULL) ? $CodigoPostal : NULL,
                'Colonia' => ($Colonia !== NULL) ? $Colonia : NULL,
                'Ciudad' => ($Ciudad !== NULL) ? $Ciudad : NULL,
                'Estado' => ($Estado !== NULL) ? $Estado : NULL,
                'Contacto1' => ($Contacto1 !== NULL) ? $Contacto1 : NULL,
                'Contacto2' => ($Contacto2 !== NULL) ? $Contacto2 : NULL,
                'Contacto3' => ($Contacto3 !== NULL) ? $Contacto3 : NULL,
                'LeyendaReporte' => ($LeyendaReporte !== NULL) ? $LeyendaReporte : NULL
            );
            $this->cliente_model->onModificar($ID, $DATA);
            $URL_DOC = 'uploads/Clientes/';
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
                    $this->cliente_model->onModificar($ID, $DATA);
                } else {
                    $DATA = array(
                        'RutaLogo' => (null),
                    );
                    $this->cliente_model->onModificar($ID, $DATA);
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar() {
        try {
            extract($this->input->post());
            $this->cliente_model->onEliminar($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
