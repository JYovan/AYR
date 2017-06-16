<?php

header('Access-Control-Allow-Origin: http://project.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlEntregas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session');
        $this->load->model('entregas_model');
        $this->load->model('cliente_model');
        $this->load->model('trabajo_model');
    }

    public function index() {

        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            $this->load->view('vEncabezado');
            $this->load->view('vNavegacion');
            $this->load->view('vEntregas');
            $this->load->view('vFooter');
        } else {
            $this->load->view('vEncabezado');
            $this->load->view('vSesion');
            $this->load->view('vFooter');
        }
    }
     public function getRecords() {
        try {
            $data = $this->entregas_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
      public function getEntregaByID() {
        try {
            extract($this->input->post());
            $data = $this->entregas_model->getEntregaByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
      public function getTrabajoByID() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getTrabajoByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function getTrabajosControlByClienteXClasificacion() {
        try {
            extract($this->input->post());
           
            
            $data = $this->trabajo_model->getTrabajosControlByClienteXClasificacion($Cliente_ID,$Clasificacion);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregar() {
        try {
            /* TRABAJO */
            extract($this->input->post());
            $data = array(
                'Movimiento' => $Movimiento,
                'FechaCreacion' => $FechaCreacion,
                'Cliente_ID' => $Cliente_ID,
                'NoEntrega' => (isset($NoEntrega) && $NoEntrega !== '') ? $NoEntrega : NULL,
                'Clasificacion' => (isset($Clasificacion) && $Clasificacion !== '') ? $Clasificacion : NULL,
                'Usuario_ID' => (isset($Usuario_ID) && $Usuario_ID !== '') ? $Usuario_ID : NULL,
                'Estatus' => (isset($Estatus) && $Estatus !== '') ? $Estatus : NULL,
                'Importe' => (isset($Importe) && $Importe !== 0) ? $Importe : 0
            );
            $ID = $this->entregas_model->onAgregar($data);

            echo $ID;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function onAgregarDetalleEditar() {
        try {
            extract($this->input->post());
            $data = array(
                'Entrega_ID' => $Entrega_ID,
                'Trabajo_ID' => $Trabajo_ID,
                'Renglon' => $Renglon
            );
            $ID = $this->entregas_model->onAgregarDetalle($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
       public function getEntregaDetalleByID() {
        try {
            extract($this->input->post());
            $data = $this->entregas_model->getDetalleByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function onModificar() {
        try {
            extract($this->input->post());
            $this->entregas_model->onModificar($ID, $this->input->post());

            
            }
        catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar() {
        try {
            extract($this->input->post());
            $this->entregas_model->onEliminar($ID);
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
    
   

}
