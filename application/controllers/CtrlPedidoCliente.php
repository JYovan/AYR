<?php

header('Access-Control-Allow-Origin: http://control.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlPedidoCliente extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session');
        $this->load->model('sucursal_model');
        $this->load->model('cliente_model');
        $this->load->model('preciario_model');
        $this->load->model('codigoppta_model');
        $this->load->model('cuadrilla_model');
        $this->load->model('trabajo_model');
        $this->load->model('pedidocliente_model');
        
    }

    public function index() {
        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            $this->load->view('vEncabezado');
            $this->load->view('vNavegacion');
            $this->load->view('vPedidosCliente');
            $this->load->view('vFooter');
        } else {
            $this->load->view('vEncabezado');
            $this->load->view('vSesion');
            $this->load->view('vFooter');
        }
    }
    
     public function getRecords() {
        try {
            $data = $this->pedidocliente_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
      public function getTrabajoByID() {
        try {
            extract($this->input->post());
            $data = $this->pedidocliente_model->getTrabajoByID($ID);
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
                'Sucursal_ID' => $Sucursal_ID,
                'Preciario_ID' => (isset($Preciario_ID) && $Preciario_ID !== '') ? $Preciario_ID : NULL,
                'Clasificacion' => (isset($Clasificacion) && $Clasificacion !== '') ? $Clasificacion : NULL,
                'Atendido' => (isset($Atendido) && $Atendido !== '') ? $Atendido : "No",
                'Cuadrilla_ID' => (isset($Cuadrilla_ID) && $Cuadrilla_ID !== '') ? $Cuadrilla_ID : NULL,
                'FolioCliente' => (isset($FolioCliente) && $FolioCliente !== '') ? $FolioCliente : NULL,
                'FechaAtencion' => (isset($FechaAtencion) && $FechaAtencion !== '') ? $FechaAtencion : NULL,
                'Codigoppta_ID' => (isset($Codigoppta_ID) && $Codigoppta_ID !== '') ? $Codigoppta_ID : NULL,
                'Solicitante' => (isset($Solicitante) && $Solicitante !== '') ? $Solicitante : NULL,
                'TrabajoSolicitado' => (isset($TrabajoSolicitado) && $TrabajoSolicitado !== '') ? $TrabajoSolicitado : NULL,
                'TrabajoRequerido' => (isset($TrabajoRequerido) && $TrabajoRequerido !== '') ? $TrabajoRequerido : NULL,
                'FechaOrigen' => (isset($FechaOrigen) && $FechaOrigen !== '') ? $FechaOrigen : NULL,
                'HoraOrigen' => (isset($HoraOrigen) && $HoraOrigen !== '') ? $HoraOrigen : NULL,
                'FechaLlegada' => (isset($FechaLlegada) && $FechaLlegada !== '') ? $FechaLlegada : NULL,
                'HoraLlegada' => (isset($HoraLlegada) && $HoraLlegada !== '') ? $HoraLlegada : NULL,
                'FechaSalida' => (isset($FechaSalida) && $FechaSalida !== '') ? $FechaSalida : NULL,
                'HoraSalida' => (isset($HoraSalida) && $HoraSalida !== '') ? $HoraSalida : NULL,
                'ImpactoEnPlazo' => (isset($ImpactoEnPlazo) && $ImpactoEnPlazo !== '') ? $ImpactoEnPlazo : 'No',
                'DiasImpacto' => (isset($DiasImpacto) && $DiasImpacto !== '') ? $DiasImpacto : NULL,
                'CausaTrabajo' => (isset($ClaveOrigenTrabajo) && $ClaveOrigenTrabajo !== '') ? $ClaveOrigenTrabajo : NULL,
                'ClaveOrigenTrabajo' => (isset($ClaveOrigenTrabajo) && $ClaveOrigenTrabajo !== '') ? $ClaveOrigenTrabajo : NULL,
                'EspecificaOrigenTrabajo' => (isset($EspecificaOrigenTrabajo) && $EspecificaOrigenTrabajo !== '') ? $EspecificaOrigenTrabajo : NULL,
                'DescripcionOrigenTrabajo' => (isset($DescripcionOrigenTrabajo) && $DescripcionOrigenTrabajo !== '') ? $DescripcionOrigenTrabajo : NULL,
                'DescripcionRiesgoTrabajo' => (isset($DescripcionRiesgoTrabajo) && $DescripcionRiesgoTrabajo !== '') ? $DescripcionRiesgoTrabajo : NULL,
                'DescripcionAlcanceTrabajo' => (isset($DescripcionAlcanceTrabajo) && $DescripcionAlcanceTrabajo !== '') ? $DescripcionAlcanceTrabajo : NULL,
                'Usuario_ID' => (isset($Usuario_ID) && $Usuario_ID !== '') ? $Usuario_ID : NULL,
                'Estatus' => (isset($Estatus) && $Estatus !== '') ? $Estatus : NULL,
                'Situacion' => (isset($Situacion) && $Situacion !== '') ? $Situacion : NULL,
                'Importe' => (isset($Importe) && $Importe !== 0) ? $Importe : NULL,
                'Observaciones' => (isset($Observaciones) && $Observaciones !== 0) ? $Observaciones : NULL,
                'CentroCostos_ID' => (isset($CentroCostos_ID) && $CentroCostos_ID !== 0) ? $CentroCostos_ID : NULL
            );
            $ID = $this->pedidocliente_model->onAgregar($data);

            echo $ID;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    
     public function onModificar() {
        try {
            extract($this->input->post());
            $this->pedidocliente_model->onModificar($ID, $this->input->post());
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

     public function onEliminar() {
        try {
            extract($this->input->post());
            $this->pedidocliente_model->onEliminar($ID);
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

    public function getSucursalesByCliente() {
        try {
            extract($this->input->post());
            $data = $this->sucursal_model->getSucursalesByCliente($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
       public function getSucursalByID() {
        try {
            extract($this->input->post());
            $data = $this->sucursal_model->getSucursalByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
}
