<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlUsuario extends CI_Controller {

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
        $this->load->library('session');
        $this->load->model('usuario_model');
        $this->load->model('empresa_model');
    }

    public function index() {
        $this->load->view('vEncabezado');
        $this->load->view('vNavegacion');
        $this->load->view('vUsuarios');
    }

    public function getRecords() {
        try {
            $data = $this->usuario_model->getRecords();
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

    public function getUsuarioByID() {
        try {
            extract($this->input->post());
            $data = $this->usuario_model->getUsuarioByID($ID);
            print json_encode($data);
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
                'Empresa_ID' => ($Empresa_ID !== NULL) ? $Empresa_ID : NULL
            );
            $this->usuario_model->onModificar($ID,$DATA);
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
