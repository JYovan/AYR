<?php

header('Access-Control-Allow-Origin: http://project.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlSucursal extends CI_Controller {

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
        $this->load->model('sucursal_model');
        $this->load->model('empresa_model');
        $this->load->model('empresaSupervisora_model');
    }
 

    public function getRecords() {
        try {
            $data = $this->sucursal_model->getRecords();
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
            $data = $this->sucursal_model->getClienteByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function getSucursalesByCliente() {
        try {
            extract($this->input->post());
            $data = $this->sucursal_model->getSucursalesByCliente($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregar() {
        try {
            $ID = $this->sucursal_model->onAgregar($this->input->post());
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar() {
        try {
            extract($this->input->post());
            $DATA = array(
                'Nombre' => ($Nombre !== NULL) ? $Nombre : NULL, 
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
            $this->sucursal_model->onModificar($ID, $DATA); 
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar() {
        try {
            extract($this->input->post());
            $this->sucursal_model->onEliminar($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
