<?php

header('Access-Control-Allow-Origin: http://app.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');

class Prefacturas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session');
        $this->load->model('entregas_model');
        $this->load->model('trabajo_model');
        $this->load->model('prefactura_model');
        $this->load->model('intelisis_model');
        $this->load->model('registroUsuarios_model');
    }

    public function index() {

        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            if (in_array($this->session->userdata["TipoAcceso"], array("ADMINISTRADOR", "SUPER ADMINISTRADOR"))) {
                $this->load->view('vEncabezado');
                $this->load->view('vNavegacion');
                $this->load->view('vPrefacturas');
                $this->load->view('vFooter');
                $dataRegistrarAccion = array(
                    'Accion' => 'ACCESO A PREFACTURAS',
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

    public function getClientesIntelisis() {
        try {
            $data = $this->intelisis_model->getClientesIntelisis();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getProyectosIntelisis() {
        try {
            $data = $this->intelisis_model->getProyectosIntelisis();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getAllProyectosIntelisis() {
        try {
            $data = $this->intelisis_model->getAllProyectosIntelisis();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getClienteNombrebyCliente() {
        try {
            extract($this->input->post());
            $data = $this->intelisis_model->getClienteNombrebyCliente($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecords() {
        try {
            $data = $this->prefactura_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPrefacturaByID() {
        try {
            extract($this->input->post());
            $data = $this->prefactura_model->getPrefacturaByID($ID);
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

    public function getTrabajosEntregadosParaPrefactura() {
        try {
            extract($this->input->post());
            $data = $this->prefactura_model->getTrabajosEntregadosParaPrefactura($ID_Prefactura);
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
                'Movimiento' => 'Prefactura',
                'FechaCreacion' => $FechaCreacion,
                'ClienteIntelisis' => $ClienteIntelisis,
                'ClienteNombre' => $ClienteNombre,
                'Referencia' => (isset($Referencia) && $Referencia !== '') ? $Referencia : NULL,
                'ProyectoIntelisis' => (isset($ProyectoIntelisis) && $ProyectoIntelisis !== '') ? $ProyectoIntelisis : NULL,
                'Usuario_ID' => $this->session->userdata('ID'),
                'Estatus' => 'Borrador',
                'Importe' => 0,
                'Comentarios' => (isset($Comentarios) && $Comentarios !== '') ? $Comentarios : NULL,
                'OrdenCompra' => (isset($OrdenCompra) && $OrdenCompra !== '') ? $OrdenCompra : NULL
            );
            $ID = $this->prefactura_model->onAgregar($data);
            echo $ID;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarIntelisis() {
        try {
            /* TRABAJO */
            extract($this->input->post());
            $data = array(
                'Empresa' => 1,
                'Mov' => 'PREFACTURA',
                'FechaEmision' => $FechaCreacion,
                'Proyecto' => $ProyectoIntelisis,
                'Moneda' => 'Pesos',
                'Usuario' => 'APP',
                'Referencia' => (isset($Referencia) && $Referencia !== '') ? $Referencia : NULL,
                'Estatus' => 'SINAFECTAR',
                'Cliente' => $ClienteIntelisis,
                'Almacen' => '01',
                'Importe' => 0,
                'Impuestos' => 0,
                'Comentarios' => (isset($Comentarios) && $Comentarios !== '') ? $Comentarios : NULL
            );
            $ID = $this->intelisis_model->onAgregarIntelisis($data);

            $dataDetalle = array(
                'ID' => $ID,
                'Renglon' => 2048,
                'Articulo' => 'SER-001',
                'Cantidad' => 1,
                'Almacen' => '01',
                'PrecioTipoCambio' => 1,
                'PrecioMoneda' => 'Pesos',
                'Precio' => $Importe,
                'Impuesto1' => 16,
                'Unidad' => 'Servicio',
                'Almacen' => '01'
            );
            $this->intelisis_model->onAgregarIntelisisDetalle($dataDetalle);

            // $MovID =$this->intelisis_model->getMovIDIntelisis($ID);

            echo $ID;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarDetalle() {
        try {
            extract($this->input->post());
            $data = array(
                'Prefactura_ID' => $Prefactura_ID,
                'Trabajo_ID' => $Trabajo_ID
            );
            $ID = $this->prefactura_model->onAgregarDetalle($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDetalleByID() {
        try {
            extract($this->input->post());
            $data = $this->prefactura_model->getDetalleByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar() {
        try {
            extract($this->input->post());
            $data = array(
                'ClienteIntelisis' => $ClienteIntelisis,
                'ClienteNombre' => $ClienteNombre,
                'Referencia' => (isset($Referencia) && $Referencia !== '') ? $Referencia : NULL,
                'ProyectoIntelisis' => (isset($ProyectoIntelisis) && $ProyectoIntelisis !== '') ? $ProyectoIntelisis : NULL,
                'Comentarios' => (isset($Comentarios) && $Comentarios !== '') ? $Comentarios : NULL,
                'OrdenCompra' => (isset($OrdenCompra) && $OrdenCompra !== '') ? $OrdenCompra : NULL
            );
            $this->prefactura_model->onModificar($ID, $this->input->post());
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarEstatus() {
        try {
            extract($this->input->post());
            $data = array(
                'Estatus' => $Estatus
            );
            $this->prefactura_model->onModificar($ID, $data);
            //AQUI SE INSERTA EL ID DE LA PREFACTURA PARA PODER HACER EL JOIN QUE NOS TRAIGA LA REF Y LA OC
            if ($Estatus == 'Concluido') {

                $this->prefactura_model->onCambiarEstatusTrabajosPrefacturados($ID);
            } else {
                $this->prefactura_model->onCancelarCambiarEstatusTrabajosPrefacturados($ID);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarPago() {
        try {
            extract($this->input->post());
            $this->prefactura_model->onModificar($ID, $this->input->post());
            $this->prefactura_model->onModificarEstatusPagado($ID, $EstatusPago);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar() {
        try {
            extract($this->input->post());
            $this->prefactura_model->onEliminar($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarPrefacturaDetalle() {
        try {
            extract($this->input->post());
            $this->prefactura_model->onEliminarPrefacturaDetalle($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarImportePorPrefactura() {
        try {
            extract($this->input->post());
            print json_encode($this->prefactura_model->onModificarImportePorPrefactura($ID, $DATA));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
