
<?php

header('Access-Control-Allow-Origin: http://app.ayr.mx/');
defined('BASEPATH') or exit('No direct script access allowed');

class Plantillas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session');
        $this->load->model('plantillas_model')->model('preciario_model')->model('registroUsuarios_model');
    }

    public function index() {
        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            if (in_array($this->session->userdata["TipoAcceso"], array("COORDINADOR DE PROCESOS", "SUPER ADMINISTRADOR", "ADMINISTRADOR", "RESIDENTE"))) {
                $this->load->view('vEncabezado')->view('vNavegacion')->view('vPlantillas')->view('vFooter');
                $dataRegistrarAccion = array(
                    'Accion' => 'ACCESO A PLANTILLAS',
                    'Registro' => date("d-m-Y H:i:s"),
                    'Usuario_ID' => $this->session->userdata('ID')
                );
                $this->registroUsuarios_model->onAgregar($dataRegistrarAccion);
            } else {
                $this->load->view('vEncabezado')->view('vNavegacion')->view('vFooter');
            }
        } else {
            $this->load->view('vEncabezado')->view('vSesion')->view('vFooter');
        }
    }

    public function getRecords() {
        try {
            print json_encode($this->plantillas_model->getRecords());
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPlantillaDetalleByID() {
        try {
            print json_encode($this->plantillas_model->getPlantillaDetalleByID($this->input->post('ID')));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPlantillaByID() {
        try {
            print json_encode($this->plantillas_model->getPlantillaByID($this->input->post('ID')));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getConceptosXPreciarioID() {
        try {
            extract($this->input->post());
            $data = $this->plantillas_model->getConceptosXPreciarioID($ID, $Plantilla_ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregar() {
        try {
            extract($this->input->post());
            $data = array(
                'Fecha' => $Fecha,
                'Nombre' => (isset($Nombre) && $Nombre !== '') ? $Nombre : null,
                'Preciario' => (isset($Preciario) && $Preciario !== '') ? $Preciario : null,
                'Usuario_ID' => $this->session->userdata('ID'),
                'Estatus' => 'Activo',
            );
            $ID = $this->plantillas_model->onAgregar($data);

            echo $ID;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar() {
        try {
            extract($this->input->post());
            $data = array(
                'Fecha' => $Fecha,
                'Nombre' => (isset($Nombre) && $Nombre !== '') ? $Nombre : null,
                'Preciario' => (isset($Preciario) && $Preciario !== '') ? $Preciario : null,
                'Usuario_ID' => $this->session->userdata('ID'),
                'Estatus' => 'Activo',
            );
            $this->plantillas_model->onModificar($ID, $data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar() {
        try {
            extract($this->input->post());
            $this->plantillas_model->onEliminar($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPreciarios() {
        try {
            extract($this->input->post());
            $data = $this->preciario_model->getPreciarios();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarConceptoXDetalle() {
        try {
            extract($this->input->post());
            $this->plantillas_model->onEliminarConcepto($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getConceptoByID() {
        try {
            extract($this->input->post());
            $data = $this->plantillas_model->getConceptoByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarDetalleEditar() {
        try {
            extract($this->input->post());
            $data = array(
                'Plantilla_ID' => $Plantilla_ID,
                'PreciarioConcepto_ID' => $PreciarioConcepto_ID,
                'Clave' => (isset($Clave)) ? $Clave : "",
                'Concepto' => (isset($Concepto)) ? $Concepto : "",
                'Unidad' => (isset($Unidad)) ? $Unidad : "",
                'Precio' => (isset($Precio)) ? $Precio : 0,
                'IntExt' => (isset($IntExt)) ? $IntExt : "",
                'Moneda' => (isset($Moneda)) ? $Moneda : ""
            );
            $ID = $this->plantillas_model->onAgregarDetalle($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEditarPlantillaDetalle() {
        try {
            $row = $this->input;
            switch ($row->post('CELDA')) {
                case 'CLAVE':
                    $this->db->set('Clave', strtoupper($row->post('VALOR')))->where('ID', $row->post('ID'))->update('plantillasdetalle');
                    break;
                case 'DESCRIPCION':
                    $this->db->set('Concepto', strtoupper($row->post('VALOR')))->where('ID', $row->post('ID'))->update('plantillasdetalle');
                    break;
                case 'PRECIO':
                    $this->db->set('Precio', $row->post('VALOR'))->where('ID', $row->post('ID'))->update('plantillasdetalle');
                    break;
                case 'UNIDAD':
                    $this->db->set('Unidad', strtoupper($row->post('VALOR')))->where('ID', $row->post('ID'))->update('plantillasdetalle');
                    break;
                case 'MONEDA':
                    $this->db->set('Moneda', strtoupper($row->post('VALOR')))->where('ID', $row->post('ID'))->update('plantillasdetalle');
                    break;
                case 'INTEXT':
                    $this->db->set('IntExt', strtoupper($row->post('VALOR')))->where('ID', $row->post('ID'))->update('plantillasdetalle');
                    break;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
