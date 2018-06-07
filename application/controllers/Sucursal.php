<?php

header('Access-Control-Allow-Origin: http://app.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');

class Sucursal extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session');
        $this->load->model('sucursal_model');
        $this->load->model('empresa_model');
        $this->load->model('empresaSupervisora_model');
        $this->load->model('registroUsuarios_model');
    }

    public function index() {

        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            $this->load->view('vEncabezado');
            $this->load->view('vNavegacion');
            $this->load->view('vSucursales');
            $this->load->view('vFooter');
            $dataRegistrarAccion = array(
                'Accion' => 'ACCESO A SUCURSALES',
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

    public function getSucursales() {
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

    public function getSucursalByID() {
        try {
            extract($this->input->post());
            $data = $this->sucursal_model->getSucursalByID($ID);
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
            extract($this->input->post());
            $data = array(
                'Nombre' => ($Nombre !== NULL ) ? strtoupper($Nombre) : NULL,
                'CR' => ($CR !== NULL && $CR !== '') ? strtoupper($CR) : NULL,
                'Calle' => ($Calle !== NULL && $Calle !== '') ? $Calle : NULL,
                'NoExterior' => ($NoExterior !== NULL && $NoExterior !== '') ? $NoExterior : NULL,
                'NoInterior' => ($NoInterior !== NULL && $NoInterior !== '') ? $NoInterior : NULL,
                'EntreCalles' => ($EntreCalles !== NULL && $EntreCalles !== '') ? $EntreCalles : NULL,
                'CodigoPostal' => ($CodigoPostal !== NULL && $CodigoPostal !== '') ? $CodigoPostal : NULL,
                'Colonia' => ($Colonia !== NULL && $Colonia !== '') ? $Colonia : NULL,
                'Ciudad' => ($Ciudad !== NULL && $Ciudad !== '') ? $Ciudad : NULL,
                'Estado' => ($Estado !== NULL && $Estado !== '') ? $Estado : NULL,
                'Region' => ($Region !== NULL && $Region !== '') ? $Region : NULL,
                'FirmaManttoNombres1' => ($FirmaManttoNombres1 !== NULL && $FirmaManttoNombres1 !== '') ? $FirmaManttoNombres1 : NULL,
                'FirmaManttoApellidos1' => ($FirmaManttoApellidos1 !== NULL && $FirmaManttoApellidos1 !== '') ? $FirmaManttoApellidos1 : NULL,
                'FirmaManttoPuesto1' => ($FirmaManttoPuesto1 !== NULL && $FirmaManttoPuesto1 !== '') ? $FirmaManttoPuesto1 : NULL,
                'FirmaManttoNombres2' => ($FirmaManttoNombres2 !== NULL && $FirmaManttoNombres2 !== '') ? $FirmaManttoNombres2 : NULL,
                'FirmaManttoApellidos2' => ($FirmaManttoApellidos2 !== NULL && $FirmaManttoApellidos2 !== '') ? $FirmaManttoApellidos2 : NULL,
                'FirmaManttoPuesto2' => ($FirmaManttoPuesto2 !== NULL && $FirmaManttoPuesto2 !== '') ? $FirmaManttoPuesto2 : NULL,
                'FirmaManttoNombres3' => ($FirmaManttoNombres3 !== NULL && $FirmaManttoNombres3 !== '') ? $FirmaManttoNombres3 : NULL,
                'FirmaManttoApellidos3' => ($FirmaManttoApellidos3 !== NULL && $FirmaManttoApellidos3 !== '') ? $FirmaManttoApellidos3 : NULL,
                'FirmaManttoPuesto3' => ($FirmaManttoPuesto3 !== NULL && $FirmaManttoPuesto3 !== '') ? $FirmaManttoPuesto3 : NULL,
                'Contrato' => ($Contrato !== NULL && $Contrato !== '') ? $Contrato : NULL,
                'Contacto1' => ($Contacto1 !== NULL && $Contacto1 !== '') ? $Contacto1 : NULL,
                'Contacto2' => ($Contacto2 !== NULL && $Contacto2 !== '') ? $Contacto2 : NULL,
                'Cliente_ID' => ($Cliente_ID !== NULL && $Cliente_ID !== '') ? $Cliente_ID : NULL,
                'Empresa_ID' => ($Empresa_ID !== NULL && $Empresa_ID !== '') ? $Empresa_ID : NULL,
                'TipoObra' => ($TipoObra !== NULL && $TipoObra !== '') ? $TipoObra : NULL,
                'Superficie' => ($Superficie !== NULL && $Superficie !== '') ? $Superficie : NULL,
                'FechaInicio' => ($FechaInicio !== NULL && $FechaInicio !== '') ? $FechaInicio : NULL,
                'FechaFin' => ($FechaFin !== NULL && $FechaFin !== '') ? $FechaFin : NULL,
                'Dias' => ($Dias !== NULL && $Dias !== '') ? $Dias : NULL,
                'NumeroSemanas' => ($NumeroSemanas !== NULL && $NumeroSemanas !== '') ? $NumeroSemanas : NULL,
                'TipoConcepto' => ($TipoConcepto !== NULL && $TipoConcepto !== '') ? $TipoConcepto : NULL,
                'Cordinador' => ($Cordinador !== NULL && $Cordinador !== '') ? $Cordinador : NULL,
                'Supervisor' => ($Supervisor !== NULL && $Supervisor !== '') ? $Supervisor : NULL,
                'EmpresaSupervisora_ID' => ($EmpresaSupervisora_ID !== NULL && $EmpresaSupervisora_ID !== '') ? $EmpresaSupervisora_ID : NULL,
                'FirmaObraNombres1' => ($FirmaObraNombres1 !== NULL && $FirmaObraNombres1 !== '') ? $FirmaObraNombres1 : NULL,
                'FirmaObraApellidos1' => ($FirmaObraApellidos1 !== NULL && $FirmaObraApellidos1 !== '') ? $FirmaObraApellidos1 : NULL,
                'FirmaNombrePuesto1' => ($FirmaNombrePuesto1 !== NULL && $FirmaNombrePuesto1 !== '') ? $FirmaNombrePuesto1 : NULL,
                'FirmaObraNombres2' => ($FirmaObraNombres2 !== NULL && $FirmaObraNombres2 !== '') ? $FirmaObraNombres2 : NULL,
                'FirmaObraApellidos2' => ($FirmaObraApellidos2 !== NULL && $FirmaObraApellidos2 !== '') ? $FirmaObraApellidos2 : NULL,
                'FirmaNombrePuesto2' => ($FirmaNombrePuesto2 !== NULL && $FirmaNombrePuesto2 !== '') ? $FirmaNombrePuesto2 : NULL,
                'FirmaObraNombres3' => ($FirmaObraNombres3 !== NULL && $FirmaObraNombres3 !== '') ? $FirmaObraNombres3 : NULL,
                'FirmaObraApellidos3' => ($FirmaObraApellidos3 !== NULL && $FirmaObraApellidos3 !== '') ? $FirmaObraApellidos3 : NULL,
                'FirmaNombrePuesto3' => ($FirmaNombrePuesto3 !== NULL && $FirmaNombrePuesto3 !== '') ? $FirmaNombrePuesto3 : NULL
            );
            $this->sucursal_model->onAgregar($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar() {
        try {

            extract($this->input->post());
            $data = array(
                'Nombre' => ($Nombre !== NULL ) ? strtoupper($Nombre) : NULL,
                'CR' => ($CR !== NULL && $CR !== '') ? strtoupper($CR) : NULL,
                'Calle' => ($Calle !== NULL && $Calle !== '') ? $Calle : NULL,
                'NoExterior' => ($NoExterior !== NULL && $NoExterior !== '') ? $NoExterior : NULL,
                'NoInterior' => ($NoInterior !== NULL && $NoInterior !== '') ? $NoInterior : NULL,
                'EntreCalles' => ($EntreCalles !== NULL && $EntreCalles !== '') ? $EntreCalles : NULL,
                'CodigoPostal' => ($CodigoPostal !== NULL && $CodigoPostal !== '') ? $CodigoPostal : NULL,
                'Colonia' => ($Colonia !== NULL && $Colonia !== '') ? $Colonia : NULL,
                'Ciudad' => ($Ciudad !== NULL && $Ciudad !== '') ? $Ciudad : NULL,
                'Estado' => ($Estado !== NULL && $Estado !== '') ? $Estado : NULL,
                'Region' => ($Region !== NULL && $Region !== '') ? $Region : NULL,
                'FirmaManttoNombres1' => ($FirmaManttoNombres1 !== NULL && $FirmaManttoNombres1 !== '') ? $FirmaManttoNombres1 : NULL,
                'FirmaManttoApellidos1' => ($FirmaManttoApellidos1 !== NULL && $FirmaManttoApellidos1 !== '') ? $FirmaManttoApellidos1 : NULL,
                'FirmaManttoPuesto1' => ($FirmaManttoPuesto1 !== NULL && $FirmaManttoPuesto1 !== '') ? $FirmaManttoPuesto1 : NULL,
                'FirmaManttoNombres2' => ($FirmaManttoNombres2 !== NULL && $FirmaManttoNombres2 !== '') ? $FirmaManttoNombres2 : NULL,
                'FirmaManttoApellidos2' => ($FirmaManttoApellidos2 !== NULL && $FirmaManttoApellidos2 !== '') ? $FirmaManttoApellidos2 : NULL,
                'FirmaManttoPuesto2' => ($FirmaManttoPuesto2 !== NULL && $FirmaManttoPuesto2 !== '') ? $FirmaManttoPuesto2 : NULL,
                'FirmaManttoNombres3' => ($FirmaManttoNombres3 !== NULL && $FirmaManttoNombres3 !== '') ? $FirmaManttoNombres3 : NULL,
                'FirmaManttoApellidos3' => ($FirmaManttoApellidos3 !== NULL && $FirmaManttoApellidos3 !== '') ? $FirmaManttoApellidos3 : NULL,
                'FirmaManttoPuesto3' => ($FirmaManttoPuesto3 !== NULL && $FirmaManttoPuesto3 !== '') ? $FirmaManttoPuesto3 : NULL,
                'Contrato' => ($Contrato !== NULL && $Contrato !== '') ? $Contrato : NULL,
                'Contacto1' => ($Contacto1 !== NULL && $Contacto1 !== '') ? $Contacto1 : NULL,
                'Contacto2' => ($Contacto2 !== NULL && $Contacto2 !== '') ? $Contacto2 : NULL,
                'Cliente_ID' => ($Cliente_ID !== NULL && $Cliente_ID !== '') ? $Cliente_ID : NULL,
                'Empresa_ID' => ($Empresa_ID !== NULL && $Empresa_ID !== '') ? $Empresa_ID : NULL,
                'TipoObra' => ($TipoObra !== NULL && $TipoObra !== '') ? $TipoObra : NULL,
                'Superficie' => ($Superficie !== NULL && $Superficie !== '') ? $Superficie : NULL,
                'FechaInicio' => ($FechaInicio !== NULL && $FechaInicio !== '') ? $FechaInicio : NULL,
                'FechaFin' => ($FechaFin !== NULL && $FechaFin !== '') ? $FechaFin : NULL,
                'Dias' => ($Dias !== NULL && $Dias !== '') ? $Dias : NULL,
                'NumeroSemanas' => ($NumeroSemanas !== NULL && $NumeroSemanas !== '') ? $NumeroSemanas : NULL,
                'TipoConcepto' => ($TipoConcepto !== NULL && $TipoConcepto !== '') ? $TipoConcepto : NULL,
                'Cordinador' => ($Cordinador !== NULL && $Cordinador !== '' ) ? ($CordinadorApellidos !== NULL && $CordinadorApellidos !== '') ? $Cordinador . " " . $CordinadorApellidos : $Cordinador : NULL,
                'Supervisor' => ($Supervisor !== NULL && $Supervisor !== '') ? $Supervisor : NULL,
                'EmpresaSupervisora_ID' => ($EmpresaSupervisora_ID !== NULL && $EmpresaSupervisora_ID !== '') ? $EmpresaSupervisora_ID : NULL,
                'FirmaObraNombres1' => ($FirmaObraNombres1 !== NULL && $FirmaObraNombres1 !== '') ? $FirmaObraNombres1 : NULL,
                'FirmaObraApellidos1' => ($FirmaObraApellidos1 !== NULL && $FirmaObraApellidos1 !== '') ? $FirmaObraApellidos1 : NULL,
                'FirmaNombrePuesto1' => ($FirmaNombrePuesto1 !== NULL && $FirmaNombrePuesto1 !== '') ? $FirmaNombrePuesto1 : NULL,
                'FirmaObraNombres2' => ($FirmaObraNombres2 !== NULL && $FirmaObraNombres2 !== '') ? $FirmaObraNombres2 : NULL,
                'FirmaObraApellidos2' => ($FirmaObraApellidos2 !== NULL && $FirmaObraApellidos2 !== '') ? $FirmaObraApellidos2 : NULL,
                'FirmaNombrePuesto2' => ($FirmaNombrePuesto2 !== NULL && $FirmaNombrePuesto2 !== '') ? $FirmaNombrePuesto2 : NULL,
                'FirmaObraNombres3' => ($FirmaObraNombres3 !== NULL && $FirmaObraNombres3 !== '') ? $FirmaObraNombres3 : NULL,
                'FirmaObraApellidos3' => ($FirmaObraApellidos3 !== NULL && $FirmaObraApellidos3 !== '') ? $FirmaObraApellidos3 : NULL,
                'FirmaNombrePuesto3' => ($FirmaNombrePuesto3 !== NULL && $FirmaNombrePuesto3 !== '') ? $FirmaNombrePuesto3 : NULL
            );
            $this->sucursal_model->onModificar($ID, $data);
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
