<?php

header('Access-Control-Allow-Origin: http://app.ayr.mx/');
defined('BASEPATH') or exit('No direct script access allowed');

class PedidoCliente extends CI_Controller {

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
        $this->load->model('especialidades_model');
        $this->load->model('areas_model');
        $this->load->model('registroUsuarios_model');
    }

    public function index() {
        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            if (in_array($this->session->userdata["TipoAcceso"], array("SUPER ADMINISTRADOR", "CLIENTE"))) {
                $this->load->view('vEncabezado');
                $this->load->view('vNavegacion');
                $this->load->view('vPedidosCliente');
                $this->load->view('vFooter');
                $dataRegistrarAccion = array(
                    'Accion' => 'ACCESO A PEDIDOS DEL CLIENTE',
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
                'FechaCreacion' => Date('d/m/Y'),
                'Cliente_ID' => $Cliente_ID,
                'Sucursal_ID' => $Sucursal_ID,
                'Preciario_ID' => (isset($Preciario_ID) && $Preciario_ID !== '') ? $Preciario_ID : null,
                'Especialidad_ID' => (isset($Especialidad_ID) && $Especialidad_ID !== 0) ? $Especialidad_ID : null,
                'Cuadrilla_ID' => (isset($Cuadrilla_ID) && $Cuadrilla_ID !== '') ? $Cuadrilla_ID : null,
                'FolioCliente' => (isset($FolioCliente) && $FolioCliente !== '') ? $FolioCliente : null,
                'FechaAtencion' => (isset($FechaAtencion) && $FechaAtencion !== '') ? $FechaAtencion : null,
                'Codigoppta_ID' => (isset($Codigoppta_ID) && $Codigoppta_ID !== '') ? $Codigoppta_ID : null,
                'Solicitante' => (isset($Solicitante) && $Solicitante !== '') ? $Solicitante : null,
                'TrabajoSolicitado' => (isset($TrabajoSolicitado) && $TrabajoSolicitado !== '') ? $TrabajoSolicitado : null,
                'TrabajoRequerido' => (isset($TrabajoRequerido) && $TrabajoRequerido !== '') ? $TrabajoRequerido : null,
                'FechaOrigen' => (isset($FechaOrigen) && $FechaOrigen !== '') ? $FechaOrigen : null,
                'HoraOrigen' => (isset($HoraOrigen) && $HoraOrigen !== '') ? $HoraOrigen : null,
                'FechaLlegada' => (isset($FechaLlegada) && $FechaLlegada !== '') ? $FechaLlegada : null,
                'HoraLlegada' => (isset($HoraLlegada) && $HoraLlegada !== '') ? $HoraLlegada : null,
                'FechaSalida' => (isset($FechaSalida) && $FechaSalida !== '') ? $FechaSalida : null,
                'HoraSalida' => (isset($HoraSalida) && $HoraSalida !== '') ? $HoraSalida : null,
                'ImpactoEnPlazo' => (isset($ImpactoEnPlazo) && $ImpactoEnPlazo !== '') ? $ImpactoEnPlazo : 'No',
                'DiasImpacto' => (isset($DiasImpacto) && $DiasImpacto !== '') ? $DiasImpacto : null,
                'CausaTrabajo' => (isset($ClaveOrigenTrabajo) && $ClaveOrigenTrabajo !== '') ? $ClaveOrigenTrabajo : null,
                'ClaveOrigenTrabajo' => (isset($ClaveOrigenTrabajo) && $ClaveOrigenTrabajo !== '') ? $ClaveOrigenTrabajo : null,
                'EspecificaOrigenTrabajo' => (isset($EspecificaOrigenTrabajo) && $EspecificaOrigenTrabajo !== '') ? $EspecificaOrigenTrabajo : null,
                'DescripcionOrigenTrabajo' => (isset($DescripcionOrigenTrabajo) && $DescripcionOrigenTrabajo !== '') ? $DescripcionOrigenTrabajo : null,
                'DescripcionRiesgoTrabajo' => (isset($DescripcionRiesgoTrabajo) && $DescripcionRiesgoTrabajo !== '') ? $DescripcionRiesgoTrabajo : null,
                'DescripcionAlcanceTrabajo' => (isset($DescripcionAlcanceTrabajo) && $DescripcionAlcanceTrabajo !== '') ? $DescripcionAlcanceTrabajo : null,
                'Usuario_ID' => (isset($Usuario_ID) && $Usuario_ID !== '') ? $Usuario_ID : null,
                'Estatus' => (isset($Estatus) && $Estatus !== '') ? $Estatus : null,
                'EstatusTrabajo' => (isset($EstatusTrabajo) && $EstatusTrabajo !== '') ? $EstatusTrabajo : null,
                'Importe' => (isset($Importe) && $Importe !== 0) ? $Importe : null,
                'Observaciones' => (isset($Observaciones) && $Observaciones !== 0) ? $Observaciones : null,
                'CentroCostos_ID' => (isset($CentroCostos_ID) && $CentroCostos_ID !== 0) ? $CentroCostos_ID : null,
                'Area_ID' => (isset($Area_ID) && $Area_ID !== 0) ? $Area_ID : null,
            );
            $ID = $this->pedidocliente_model->onAgregar($data);

            echo $ID;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar() {
        try {
            /* TRABAJO */
            extract($this->input->post());
            $data = array(
                'FechaCreacion' => Date('d/m/Y'),
                'Sucursal_ID' => $Sucursal_ID,
                'Preciario_ID' => (isset($Preciario_ID) && $Preciario_ID !== '') ? $Preciario_ID : null,
                'Especialidad_ID' => (isset($Especialidad_ID) && $Especialidad_ID !== 0) ? $Especialidad_ID : null,
                'Cuadrilla_ID' => (isset($Cuadrilla_ID) && $Cuadrilla_ID !== '') ? $Cuadrilla_ID : null,
                'FolioCliente' => (isset($FolioCliente) && $FolioCliente !== '') ? $FolioCliente : null,
                'FechaAtencion' => (isset($FechaAtencion) && $FechaAtencion !== '') ? $FechaAtencion : null,
                'Codigoppta_ID' => (isset($Codigoppta_ID) && $Codigoppta_ID !== '') ? $Codigoppta_ID : null,
                'Solicitante' => (isset($Solicitante) && $Solicitante !== '') ? $Solicitante : null,
                'TrabajoSolicitado' => (isset($TrabajoSolicitado) && $TrabajoSolicitado !== '') ? $TrabajoSolicitado : null,
                'TrabajoRequerido' => (isset($TrabajoRequerido) && $TrabajoRequerido !== '') ? $TrabajoRequerido : null,
                'FechaOrigen' => (isset($FechaOrigen) && $FechaOrigen !== '') ? $FechaOrigen : null,
                'HoraOrigen' => (isset($HoraOrigen) && $HoraOrigen !== '') ? $HoraOrigen : null,
                'FechaLlegada' => (isset($FechaLlegada) && $FechaLlegada !== '') ? $FechaLlegada : null,
                'HoraLlegada' => (isset($HoraLlegada) && $HoraLlegada !== '') ? $HoraLlegada : null,
                'FechaSalida' => (isset($FechaSalida) && $FechaSalida !== '') ? $FechaSalida : null,
                'HoraSalida' => (isset($HoraSalida) && $HoraSalida !== '') ? $HoraSalida : null,
                'ImpactoEnPlazo' => (isset($ImpactoEnPlazo) && $ImpactoEnPlazo !== '') ? $ImpactoEnPlazo : 'No',
                'DiasImpacto' => (isset($DiasImpacto) && $DiasImpacto !== '') ? $DiasImpacto : null,
                'CausaTrabajo' => (isset($ClaveOrigenTrabajo) && $ClaveOrigenTrabajo !== '') ? $ClaveOrigenTrabajo : null,
                'ClaveOrigenTrabajo' => (isset($ClaveOrigenTrabajo) && $ClaveOrigenTrabajo !== '') ? $ClaveOrigenTrabajo : null,
                'EspecificaOrigenTrabajo' => (isset($EspecificaOrigenTrabajo) && $EspecificaOrigenTrabajo !== '') ? $EspecificaOrigenTrabajo : null,
                'DescripcionOrigenTrabajo' => (isset($DescripcionOrigenTrabajo) && $DescripcionOrigenTrabajo !== '') ? $DescripcionOrigenTrabajo : null,
                'DescripcionRiesgoTrabajo' => (isset($DescripcionRiesgoTrabajo) && $DescripcionRiesgoTrabajo !== '') ? $DescripcionRiesgoTrabajo : null,
                'DescripcionAlcanceTrabajo' => (isset($DescripcionAlcanceTrabajo) && $DescripcionAlcanceTrabajo !== '') ? $DescripcionAlcanceTrabajo : null,
                'Estatus' => (isset($Estatus) && $Estatus !== '') ? $Estatus : null,
                'EstatusTrabajo' => (isset($EstatusTrabajo) && $EstatusTrabajo !== '') ? $EstatusTrabajo : null,
                'Importe' => (isset($Importe) && $Importe !== 0) ? $Importe : null,
                'Observaciones' => (isset($Observaciones) && $Observaciones !== 0) ? $Observaciones : null,
                'CentroCostos_ID' => (isset($CentroCostos_ID) && $CentroCostos_ID !== 0) ? $CentroCostos_ID : null,
                'Area_ID' => (isset($Area_ID) && $Area_ID !== 0) ? $Area_ID : null,
            );
            $this->pedidocliente_model->onModificar($ID, $data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAutorizarPedido() {
        try {
            extract($this->input->post());
            $data = array(
                'EstatusTrabajo' => (isset($EstatusTrabajo) && $EstatusTrabajo !== '') ? $EstatusTrabajo : null,
            );
            $this->pedidocliente_model->onModificar($ID, $data);
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

    public function getEspecialidadesByCliente() {
        try {
            extract($this->input->post());
            $data = $this->especialidades_model->getEspecialidadesByCliente($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getAreasByCliente() {
        try {
            extract($this->input->post());
            $data = $this->areas_model->getAreasByCliente($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
