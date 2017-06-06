<?php

header('Access-Control-Allow-Origin: http://project.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlClientes extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session');
        $this->load->model('cliente_model');
        $this->load->model('empresa_model');
        $this->load->model('empresaSupervisora_model');
    }

    public function index() {

        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            $this->load->view('vEncabezado');
            $this->load->view('vNavegacion');
            $this->load->view('vClientes');
             $this->load->view('vFooter');
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
    public function getContratistas() {
        try {
            $data = $this->cliente_model->getContratistas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function getEmpresas() {
        try {
            $data = $this->empresa_model->getEmpresas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEmpresasSupervisoras() {
        try {
            $data = $this->empresaSupervisora_model->getEmpresasSupervisoras();
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
            $ID = $this->cliente_model->onAgregar($this->input->post());
            print "ID: " . $ID;
            $URL_DOC = 'uploads/Clientes';
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
                    $DATA = array(
                        'RutaLogo' => ($img)
                    );
                    $this->cliente_model->onModificar($ID, $DATA);
                } else {
                     $DATA = array(
                        'RutaLogo' => (NULL)
                    );
                     $this->cliente_model->onModificar($ID, $DATA);
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }
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
                'Colonia'=> ($Colonia !== NULL) ? $Colonia : NULL, 
                'Ciudad'=> ($Ciudad !== NULL) ? $Ciudad : NULL, 
                'Estado'=> ($Estado !== NULL) ? $Estado : NULL, 
                'Contacto1'=> ($Contacto1 !== NULL) ? $Contacto1 : NULL, 
                'Contacto2'=> ($Contacto2 !== NULL) ? $Contacto2 : NULL,  
                'Contacto3'=> ($Contacto3 !== NULL) ? $Contacto3 : NULL
            );
            $this->cliente_model->onModificar($ID, $DATA);
            print "ID: " . $ID;
            $URL_DOC = 'uploads/Clientes';
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
                    $DATA = array(
                        'RutaLogo' => ($img)
                    );
                    $this->cliente_model->onModificar($ID, $DATA);
                } else {
                    $DATA = array(
                        'RutaLogo' => (NULL)
                    );
                     $this->cliente_model->onModificar($ID, $DATA);
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
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
