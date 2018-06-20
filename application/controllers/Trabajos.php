<?php

header('Access-Control-Allow-Origin: http://app.ayr.mx/');
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "/third_party/fpdf17/fpdf.php";
require_once APPPATH . "/third_party/PHPExcel.php";

class Trabajos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session');
        $this->load->model('sucursal_model')->model('cliente_model')->model('preciario_model')->model('codigoppta_model')->model('cuadrilla_model')
                ->model('trabajo_model')->model('centrocostos_model')->helper('reportes_helper')->helper('file')->model('especialidades_model')
                ->model('areas_model')->model('registroUsuarios_model');
    }

    public function index() {
        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            if (in_array($this->session->userdata["TipoAcceso"], array("COORDINADOR DE PROCESOS", "SUPER ADMINISTRADOR", "ADMINISTRADOR", "RESIDENTE"))) {
                $this->load->view('vEncabezado')->view('vNavegacion')->view('vTrabajos')->view('vFooter');
                $dataRegistrarAccion = array(
                    'Accion' => 'ACCESO A TRABAJOS',
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
            print json_encode($this->trabajo_model->getRecords());
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoByID() {
        try {
            print json_encode($this->trabajo_model->getTrabajoByID($this->input->post('ID')));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCC() {
        try {
            print json_encode($this->centrocostos_model->getCC());
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getConceptosXPreciarioID() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getConceptosXPreciarioID($ID, $TrabajoID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoFotosDetalleByID() {
        try {
            print json_encode($this->trabajo_model->getTrabajoFotosDetalleByID($this->input->post('ID'), $this->input->post('IDT')));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoFotosAntesDetalleByID() {
        try {
            print json_encode($this->trabajo_model->getTrabajoFotosAntesDetalleByID($this->input->post('ID')));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoFotosDespuesDetalleByID() {
        try {
            print json_encode($this->trabajo_model->getTrabajoFotosDespuesDetalleByID($this->input->post('ID')));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTiempoFotosProcesoXTrabajoDetalleID() {
        try {
            print json_encode($this->trabajo_model->getTiempoFotosProcesoXTrabajoDetalleID($this->input->get('ID')));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoCroquisDetalleByID() {
        try {
            print json_encode($this->trabajo_model->getTrabajoCroquisDetalleByID($this->input->post('ID')));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoAnexosDetalleByID() {
        try {
            print json_encode($this->trabajo_model->getTrabajoAnexosDetalleByID($this->input->post('ID'), $this->input->post('IDT')));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoAnexosDosDetalleByID() {
        try {
            print json_encode($this->trabajo_model->getTrabajoAnexosDosDetalleByID($this->input->post('ID'), $this->input->post('IDT')));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoFotosCajeroDetalleByID() {
        try {
            print json_encode($this->trabajo_model->getTrabajoFotosCajeroDetalleByID($this->input->post('ID')));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregar() {
        try {
            /* TRABAJO */
            extract($this->input->post());
            $data = array(
                'FechaCreacion' => $FechaCreacion,
                'Cliente_ID' => $Cliente_ID,
                'Sucursal_ID' => $Sucursal_ID,
                'Preciario_ID' => (isset($Preciario_ID) && $Preciario_ID !== '') ? $Preciario_ID : null,
                'Especialidad_ID' => (isset($Especialidad_ID) && $Especialidad_ID !== '') ? $Especialidad_ID : null,
                'Area_ID' => (isset($Area_ID) && $Area_ID !== '') ? $Area_ID : null,
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
                'Usuario_ID' => $this->session->userdata('ID'),
                'Estatus' => 'Borrador',
                'Importe' => 0,
                'Observaciones' => (isset($Observaciones) && $Observaciones !== '') ? $Observaciones : null,
                'CentroCostos_ID' => (isset($CentroCostos_ID) && $CentroCostos_ID !== 0) ? $CentroCostos_ID : null,
                'ControlProceso' => (isset($ControlProceso) && $ControlProceso !== 0) ? $ControlProceso : null,
                'CausaActuacionSintoma' => (isset($CausaActuacionSintoma) && $CausaActuacionSintoma !== '') ? $CausaActuacionSintoma : null,
                'TextoCausa' => (isset($TextoCausa) && $TextoCausa !== '') ? $TextoCausa : null,
                'Cal1' => (isset($Cal1) && $Cal1 !== '') ? $Cal1 : null,
                'Cal2' => (isset($Cal2) && $Cal2 !== '') ? $Cal2 : null,
                'Cal3' => (isset($Cal3) && $Cal3 !== '') ? $Cal3 : null,
                'Cal4' => (isset($Cal4) && $Cal4 !== '') ? $Cal4 : null,
                'Cal5' => (isset($Cal5) && $Cal5 !== '') ? $Cal5 : null,
                'EstatusTrabajo' => (isset($EstatusTrabajo) && $EstatusTrabajo !== '') ? $EstatusTrabajo : null,
                'FechaVisita' => (isset($FechaVisita) && $FechaVisita !== '') ? $FechaVisita : null,
                'EncargadoSitio' => (isset($EncargadoSitio) && $EncargadoSitio !== '') ? $EncargadoSitio : null,
                'HorarioAtencion' => (isset($HorarioAtencion) && $HorarioAtencion !== '') ? $HorarioAtencion : null,
                'RestriccionAcceso' => (isset($RestriccionAcceso) && $RestriccionAcceso !== '') ? $RestriccionAcceso : null,
                'AireAcondicionado' => (isset($AireAcondicionado) && $AireAcondicionado !== '') ? $AireAcondicionado : null,
                'Carcasa' => (isset($Carcasa) && $Carcasa !== '') ? $Carcasa : null,
                'UPS' => (isset($UPS) && $UPS !== '') ? $UPS : null,
                'SenalizacionInterior' => (isset($SenalizacionInterior) && $SenalizacionInterior !== '') ? $SenalizacionInterior : null,
                'SenalizacionExterior' => (isset($SenalizacionExterior) && $SenalizacionExterior !== '') ? $SenalizacionExterior : null,
                'CanalizacionDatos' => (isset($CanalizacionDatos) && $CanalizacionDatos !== '') ? $CanalizacionDatos : null,
                'CanalizacionSeguridad' => (isset($CanalizacionSeguridad) && $CanalizacionSeguridad !== '') ? $CanalizacionSeguridad : null,
                'PruebaCalaFirme' => (isset($PruebaCalaFirme) && $PruebaCalaFirme !== '') ? $PruebaCalaFirme : null,
                'TipoPiso' => (isset($TipoPiso) && $TipoPiso !== '') ? $TipoPiso : null
            );
            $ID = $this->trabajo_model->onAgregar($data);
            /* AJUNTO */
            $AdjuntoP = $this->input->post('Adjunto');
            if (empty($AdjuntoP)) {
                if ($_FILES["Adjunto"]["tmp_name"] !== "") {
                    $URL_DOC = 'uploads/Trabajos/AdjuntoEncabezado';
                    $master_url = $URL_DOC . '/';
                    if (isset($_FILES["Adjunto"]["name"])) {
                        if (!file_exists($URL_DOC)) {
                            mkdir($URL_DOC, 0777, true);
                        }
                        if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                            mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                        }
                        if (move_uploaded_file($_FILES["Adjunto"]["tmp_name"], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["Adjunto"]["name"]))) {
                            $img = $master_url . $ID . '/' . $_FILES["Adjunto"]["name"];
                            $DATA = array(
                                'Adjunto' => ($img),
                            );
                            $this->trabajo_model->onModificar($ID, $DATA);
                        } else {
                            $DATA = array(
                                'Adjunto' => (null),
                            );
                            $this->trabajo_model->onModificar($ID, $DATA);
                        }
                    }
                }
            } else {
                $DATA = array(
                    'Adjunto' => (null),
                );
                $this->trabajo_model->onModificar($ID, $DATA);
            }
            echo $ID;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoDetalleByID() {
        try {
            print json_encode($this->trabajo_model->getTrabajoDetalleByID($this->input->post('ID')));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoDetalleAbiertoByID() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getTrabajoDetalleAbiertoByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoDetalleCajeroByID() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getTrabajoDetalleCajeroByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDetalleByID() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getDetalleByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDetalleAbiertoByID() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getDetalleAbiertoByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDetalleCajeroByID() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getDetalleCajeroByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getGeneradoresDetalleXConceptoID() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getGeneradoresDetalleXConceptoID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getGeneradoresXDetalleID() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getGeneradoresXDetalleID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar() {
        try {
            extract($this->input->post());
            $data = array(
                'FechaCreacion' => $FechaCreacion,
                'Cliente_ID' => $Cliente_ID,
                'Sucursal_ID' => $Sucursal_ID,
                'Preciario_ID' => (isset($Preciario_ID) && $Preciario_ID !== '') ? $Preciario_ID : null,
                'Especialidad_ID' => (isset($Especialidad_ID) && $Especialidad_ID !== '') ? $Especialidad_ID : null,
                'Area_ID' => (isset($Area_ID) && $Area_ID !== '') ? $Area_ID : null,
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
                'Importe' => (isset($Importe) && $Importe !== 0) ? $Importe : null,
                'Observaciones' => (isset($Observaciones) && $Observaciones !== '') ? $Observaciones : null,
                'CentroCostos_ID' => (isset($CentroCostos_ID) && $CentroCostos_ID !== 0) ? $CentroCostos_ID : null,
                'ControlProceso' => (isset($ControlProceso) && $ControlProceso !== 0) ? $ControlProceso : null,
                'CausaActuacionSintoma' => (isset($CausaActuacionSintoma) && $CausaActuacionSintoma !== '') ? $CausaActuacionSintoma : null,
                'TextoCausa' => (isset($TextoCausa) && $TextoCausa !== '') ? $TextoCausa : null,
                'Cal1' => (isset($Cal1) && $Cal1 !== '') ? $Cal1 : null,
                'Cal2' => (isset($Cal2) && $Cal2 !== '') ? $Cal2 : null,
                'Cal3' => (isset($Cal3) && $Cal3 !== '') ? $Cal3 : null,
                'Cal4' => (isset($Cal4) && $Cal4 !== '') ? $Cal4 : null,
                'Cal5' => (isset($Cal5) && $Cal5 !== '') ? $Cal5 : null,
                'EstatusTrabajo' => (isset($EstatusTrabajo) && $EstatusTrabajo !== '') ? $EstatusTrabajo : null,
                'FechaVisita' => (isset($FechaVisita) && $FechaVisita !== '') ? $FechaVisita : null,
                'EncargadoSitio' => (isset($EncargadoSitio) && $EncargadoSitio !== '') ? $EncargadoSitio : null,
                'HorarioAtencion' => (isset($HorarioAtencion) && $HorarioAtencion !== '') ? $HorarioAtencion : null,
                'RestriccionAcceso' => (isset($RestriccionAcceso) && $RestriccionAcceso !== '') ? $RestriccionAcceso : null,
                'AireAcondicionado' => (isset($AireAcondicionado) && $AireAcondicionado !== '') ? $AireAcondicionado : null,
                'Carcasa' => (isset($Carcasa) && $Carcasa !== '') ? $Carcasa : null,
                'UPS' => (isset($UPS) && $UPS !== '') ? $UPS : null,
                'SenalizacionInterior' => (isset($SenalizacionInterior) && $SenalizacionInterior !== '') ? $SenalizacionInterior : null,
                'SenalizacionExterior' => (isset($SenalizacionExterior) && $SenalizacionExterior !== '') ? $SenalizacionExterior : null,
                'CanalizacionDatos' => (isset($CanalizacionDatos) && $CanalizacionDatos !== '') ? $CanalizacionDatos : null,
                'CanalizacionSeguridad' => (isset($CanalizacionSeguridad) && $CanalizacionSeguridad !== '') ? $CanalizacionSeguridad : null,
                'PruebaCalaFirme' => (isset($PruebaCalaFirme) && $PruebaCalaFirme !== '') ? $PruebaCalaFirme : null,
                'TipoPiso' => (isset($TipoPiso) && $TipoPiso !== '') ? $TipoPiso : null
            );
            $this->trabajo_model->onModificar($ID, $data);

            /* AJUNTO */
            $AdjuntoP = $this->input->post('Adjunto');
            if (empty($AdjuntoP)) {
                if ($_FILES["Adjunto"]["tmp_name"] !== "") {
                    $URL_DOC = 'uploads/Trabajos/AdjuntoEncabezado';
                    $master_url = $URL_DOC . '/';
                    if (isset($_FILES["Adjunto"]["name"])) {
                        if (!file_exists($URL_DOC)) {
                            mkdir($URL_DOC, 0777, true);
                        }
                        if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                            mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                        }
                        if (move_uploaded_file($_FILES["Adjunto"]["tmp_name"], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["Adjunto"]["name"]))) {
                            $img = $master_url . $ID . '/' . $_FILES["Adjunto"]["name"];
                            $DATA = array(
                                'Adjunto' => ($img),
                            );
                            $this->trabajo_model->onModificar($ID, $DATA);
                        } else {
                            $DATA = array(
                                'Adjunto' => (null),
                            );
                            $this->trabajo_model->onModificar($ID, $DATA);
                        }
                    }
                }
            } else {
                $DATA = array(
                    'Adjunto' => (null),
                );
                $this->trabajo_model->onModificar($ID, $DATA);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarTrabajoDetalle() {
        try {
            extract($this->input->post());

            $data = array(
                'Clave' => (isset($Clave) && $Clave !== '') ? $Clave : null,
                'Concepto' => (isset($Concepto) && $Concepto !== '') ? $Concepto : null,
                'Unidad' => (isset($Unidad) && $Unidad !== '') ? $Unidad : null,
                'Precio' => (isset($Precio) && $Precio !== '') ? $Precio : 0,
                'Moneda' => (isset($Moneda) && $Moneda !== '') ? $Moneda : null,
                'Importe' => (isset($Importe) && $Importe !== '') ? $Importe : 0,
            );
            $this->trabajo_model->onModificarTrabajoDetalle($ID, $data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onReemplazarTrabajoDetalle() {
        try {
            extract($this->input->post());

            $data = array(
                'PreciarioConcepto_ID' => (isset($PreciarioConcepto_ID) && $PreciarioConcepto_ID !== '') ? $PreciarioConcepto_ID : null,
                'Clave' => (isset($Clave) && $Clave !== '') ? $Clave : null,
                'Concepto' => (isset($Concepto) && $Concepto !== '') ? $Concepto : null,
                'Unidad' => (isset($Unidad) && $Unidad !== '') ? $Unidad : null,
                'Moneda' => (isset($Moneda) && $Moneda !== '') ? $Moneda : null,
                'Precio' => (isset($Precio) && $Precio !== '') ? $Precio : 0,
                'Importe' => (isset($Importe) && $Importe !== '') ? $Importe : 0,
            );
            $this->trabajo_model->onModificarTrabajoDetalle($ID, $data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarConceptoAbierto() {
        try {
            extract($this->input->post());
            $this->trabajo_model->onModificarConceptoAbierto($ID, $this->input->post());
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarConceptoCajero() {
        try {
            extract($this->input->post());
            $this->trabajo_model->onModificarConceptoCajero($ID, $this->input->post());
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarGenerador() {
        try {
            extract($this->input->post());
            $data = array(
                'Concepto_ID' => (isset($Concepto_ID) && $Concepto_ID !== '') ? $Concepto_ID : null,
                'IdTrabajoDetalle' => (isset($IdTrabajoDetalle) && $IdTrabajoDetalle !== '') ? $IdTrabajoDetalle : null,
                'Area' => (isset($Area) && $Area !== '') ? $Area : "",
                'Eje' => (isset($Eje) && $Eje !== '') ? $Eje : "",
                'EntreEje1' => (isset($EntreEje1) && $EntreEje1 !== '') ? $EntreEje1 : "",
                'EntreEje2' => (isset($EntreEje2) && $EntreEje2 !== '') ? $EntreEje2 : "",
                'Largo' => (isset($Largo) && $Largo !== '') ? $Largo : "",
                'Ancho' => (isset($Ancho) && $Ancho !== '') ? $Ancho : "",
                'Alto' => (isset($Alto) && $Alto !== '') ? $Alto : "",
                'Cantidad' => (isset($Cantidad) && $Cantidad !== '') ? $Cantidad : "",
                'Total' => (isset($Total) && $Total !== '') ? $Total : "",
                'EstimacionNo' => (isset($EstimacionNo) && $EstimacionNo !== '') ? $EstimacionNo : ""
            );
            $this->trabajo_model->onAgregarDetalleGenerador($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onCopiarGenerador() {
        try {
            extract($this->input->post());
            $data = array(
                'Concepto_ID' => (isset($Concepto_ID) && $Concepto_ID !== '') ? $Concepto_ID : null,
                'IdTrabajoDetalle' => (isset($IdTrabajoDetalle) && $IdTrabajoDetalle !== '') ? $IdTrabajoDetalle : null,
                'Area' => (isset($Area) && $Area !== '') ? $Area : "",
                'Eje' => (isset($Eje) && $Eje !== '') ? $Eje : "",
                'EntreEje1' => (isset($EntreEje1) && $EntreEje1 !== '') ? $EntreEje1 : "",
                'EntreEje2' => (isset($EntreEje2) && $EntreEje2 !== '') ? $EntreEje2 : "",
                'Largo' => (isset($Largo) && $Largo !== '') ? $Largo : "",
                'Ancho' => (isset($Ancho) && $Ancho !== '') ? $Ancho : "",
                'Alto' => (isset($Alto) && $Alto !== '') ? $Alto : "",
                'Cantidad' => (isset($Cantidad) && $Cantidad !== '') ? $Cantidad : "",
                'Total' => (isset($Total) && $Total !== '') ? $Total : "",
                'EstimacionNo' => (isset($EstimacionNo) && $EstimacionNo !== '') ? $EstimacionNo : ""
            );
            $this->trabajo_model->onAgregarDetalleGenerador($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarGenerador() {
        try {
            extract($this->input->post());
            $data = array(
                'Area' => (isset($Area) && $Area !== '') ? $Area : '',
                'Eje' => (isset($Eje) && $Eje !== '') ? $Eje : '',
                'EntreEje1' => (isset($EntreEje1) && $EntreEje1 !== '') ? $EntreEje1 : '',
                'EntreEje2' => (isset($EntreEje2) && $EntreEje2 !== '') ? $EntreEje2 : '',
                'Largo' => (isset($Largo) && $Largo !== '') ? $Largo : null,
                'Ancho' => (isset($Ancho) && $Ancho !== '') ? $Ancho : null,
                'Alto' => (isset($Alto) && $Alto !== '') ? $Alto : null,
                'Cantidad' => (isset($Cantidad) && $Cantidad !== '') ? $Cantidad : null,
                'Total' => (isset($Total) && $Total !== '') ? $Total : null,
                'EstimacionNo' => (isset($EstimacionNo) && $EstimacionNo !== '') ? $EstimacionNo : ""
            );
            $this->trabajo_model->onModificarGenerador($ID, $data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarImporteConcepto() {
        try {
            extract($this->input->post());
            $data = array(
                'Importe' => (isset($Importe) && $Importe !== '') ? $Importe : null,
                'TipoCambio' => (isset($TipoCambio) && $TipoCambio !== '' && $TipoCambio !== 0) ? $TipoCambio : 1,
            );
            $this->trabajo_model->onModificarImporteConcepto($ID, $data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarConceptoCantidadEImporte() {
        try {
            extract($this->input->post());
            $data = array(
                'Cantidad' => (isset($Cantidad) && $Cantidad !== '') ? $Cantidad : null,
                'Importe' => (isset($Importe) && $Importe !== '') ? $Importe : null,
            );
            $this->trabajo_model->onModificarConceptoCantidadEImporte($ID, $data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onChangeIntExtByDetalleID() {
        try {
            extract($this->input->post());
            $data = array(
                'IntExt' => (isset($IntExt) && $IntExt !== '') ? $IntExt : null,
            );
            $this->trabajo_model->onChangeIntExtByDetalleID($ID, $data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarImportePorTrabajo() {
        try {
            extract($this->input->post());
            print json_encode($this->trabajo_model->onModificarImportePorTrabajo($ID));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar() {
        try {
            extract($this->input->post());
            $this->trabajo_model->onEliminar($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarGeneradorEditar() {
        try {
            extract($this->input->post());
            $this->trabajo_model->onEliminarGeneradorEditar($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarFotoXConcepto() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getFotoXConceptoID($ID, $IDT);
            $foto = $data[0];
            if (isset($foto->Url)) {
                unlink($foto->Url);
                rmdir("uploads/Trabajos/FotosDespues/T" . $foto->IdTrabajo . "/TD" . $foto->IdTrabajoDetalle . "/" . $foto->ID . "/");
            }
            $this->trabajo_model->onEliminarFotoXConcepto($ID, $IDT);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarFotoAntesXConcepto() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getFotoAntesXConceptoID($ID);
            $foto = $data[0];
            if (isset($foto->Url)) {
                unlink($foto->Url);
                rmdir("uploads/Trabajos/FotosAntes/T" . $foto->IdTrabajo . "/TD" . $foto->IdTrabajoDetalle . "/" . $foto->ID . "/");
            }
            $this->trabajo_model->onEliminarFotoAntesXConcepto($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarFotoDespuesXConcepto() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getFotoDespuesXConceptoID($ID);
            $foto = $data[0];
            if (isset($foto->Url)) {
                unlink($foto->Url);
                rmdir("uploads/Trabajos/FotosDespues/T" . $foto->IdTrabajo . "/TD" . $foto->IdTrabajoDetalle . "/" . $foto->ID . "/");
            }
            $this->trabajo_model->onEliminarFotoDespuesXConcepto($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarFotoProcesoXConcepto() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getFotoProcesoXConceptoID($ID);
            $foto = $data[0];
            if (isset($foto->Url)) {
                unlink($foto->Url);
                rmdir("uploads/Trabajos/FotosProceso/T" . $foto->IdTrabajo . "/TD" . $foto->IdTrabajoDetalle . "/" . $foto->ID . "/");
            }
            $this->trabajo_model->onEliminarFotoProcesoXConcepto($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarAnexoXConcepto() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getAnexoXConceptoID($ID, $IDT);
            $anexo = $data[0];
            if (isset($anexo->Url)) {
                unlink($anexo->Url);
                rmdir("uploads/Trabajos/Anexos/T" . $anexo->IdTrabajo . "/TD" . $anexo->IdTrabajoDetalle . "/" . $anexo->ID . "/");
            }
            $this->trabajo_model->onEliminarAnexoXConcepto($ID, $IDT);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarAnexoDosXConcepto() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getAnexoDosXConceptoID($ID, $IDT);
            $anexo = $data[0];
            if (isset($anexo->Url)) {
                unlink($anexo->Url);
                rmdir("uploads/Trabajos/AnexosDos/T" . $anexo->IdTrabajo . "/TD" . $anexo->IdTrabajoDetalle . "/" . $anexo->ID . "/");
            }
            $this->trabajo_model->onEliminarAnexoDosXConcepto($ID, $IDT);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarCroquisXID() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getCroquisXConceptoID($ID);
            $croquis = $data[0];
            if (isset($croquis->Url)) {
                unlink($croquis->Url);
                rmdir("uploads/Trabajos/Anexos/T" . $croquis->IdTrabajo . "/TD" . $croquis->IdTrabajoDetalle . "/" . $croquis->ID . "/");
            }
            $this->trabajo_model->onEliminarCroquisXID($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarFotoCajeroXID() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getFotoCajeroXID($ID);
            $foto = $data[0];
            if (isset($foto->Url)) {
                unlink($foto->Url);
                rmdir("uploads/Trabajos/CajerosBBVA/C" . $foto->IdTrabajo . "/CD" . $foto->IdCajeroBBVADetalle . "/" . $foto->ID . "/");
            }
            $this->trabajo_model->onEliminarFotosCajeroXID($ID);
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

    public function getSucursalesByCliente() {
        try {
            extract($this->input->post());
            $data = $this->sucursal_model->getSucursalesByCliente($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPreciariosByCliente() {
        try {
            extract($this->input->post());
            $data = $this->preciario_model->getPreciariosByCliente($Cliente_ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPreciariosActivosByCliente() {
        try {
            extract($this->input->post());
            $data = $this->preciario_model->getPreciariosActivosByCliente($Cliente_ID);
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

    public function getCCByCliente() {
        try {
            extract($this->input->post());
            $data = $this->centrocostos_model->getCentrosCostosByCliente($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCodigosPPTA() {
        try {
            extract($this->input->post());
            $data = $this->codigoppta_model->getCodigosPPTA();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCuadrillas() {
        try {
            extract($this->input->post());
            $data = $this->cuadrilla_model->getCuadrillas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCodigoPPTAbyID() {
        try {
            extract($this->input->post());
            $data = $this->codigoppta_model->getCodigoPPTAByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /* FUNCIONES DE EDICION */

    public function onEliminarConceptoXDetalle() {
        try {
            extract($this->input->post());
            $this->trabajo_model->onEliminarConcepto($ID);
            $this->trabajo_model->onEliminarGeneradoresXConcepto($ID);
            $data = $this->trabajo_model->getFotosXTrabajoDetalleID($ID, $IDT);
            foreach ($data as $key => $foto) {
                if (isset($foto->Url)) {
                    unlink($foto->Url);
                    rmdir("uploads/Trabajos/Fotos/T" . $foto->IdTrabajo . "/TD" . $foto->IdTrabajoDetalle . "/");
                }
            }
            $this->trabajo_model->onEliminarFotosXConcepto($ID, $IDT);
            $data = $this->trabajo_model->getCroquisXTrabajoDetalleID($ID);
            foreach ($data as $key => $croquis) {
                if (isset($croquis->Url)) {
                    unlink($croquis->Url);
                    rmdir("uploads/Trabajos/Croquis/T" . $croquis->IdTrabajo . "/TD" . $croquis->IdTrabajoDetalle . "/");
                }
            }
            $this->trabajo_model->onEliminarCroquisXConcepto($ID);
            $data = $this->trabajo_model->getAnexosXTrabajoDetalleID($ID, $IDT);
            foreach ($data as $key => $anexo) {
                if (isset($anexo->Url)) {
                    unlink($anexo->Url);
                    rmdir("uploads/Trabajos/Anexos/T" . $anexo->IdTrabajo . "/TD" . $anexo->IdTrabajoDetalle . "/");
                }
            }
            $this->trabajo_model->onEliminarAnexosXConcepto($ID, $IDT);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarConceptoXDetalleAbierto() {
        try {
            extract($this->input->post());
            $this->trabajo_model->onEliminarConceptoAbierto($ID);

            $data = $this->trabajo_model->getFotosAntesXTrabajoDetalleID($ID);
            foreach ($data as $key => $foto) {
                if (isset($foto->Url)) {
                    unlink($foto->Url);
                    rmdir("uploads/Trabajos/FotosAntes/T" . $foto->IdTrabajo . "/TD" . $foto->IdTrabajoDetalle . "/");
                }
            }
            $this->trabajo_model->onEliminarFotosAntesXConcepto($ID);

            $data = $this->trabajo_model->getFotosDespuesXTrabajoDetalleID($ID);
            foreach ($data as $key => $foto) {
                if (isset($foto->Url)) {
                    unlink($foto->Url);
                    rmdir("uploads/Trabajos/FotosDespues/T" . $foto->IdTrabajo . "/TD" . $foto->IdTrabajoDetalle . "/");
                }
            }
            $this->trabajo_model->onEliminarFotosDespuesXConcepto($ID);

            $data = $this->trabajo_model->getFotosProcesoXTrabajoDetalleID($ID);
            foreach ($data as $key => $foto) {
                if (isset($foto->Url)) {
                    unlink($foto->Url);
                    rmdir("uploads/Trabajos/FotosProceso/T" . $foto->IdTrabajo . "/TD" . $foto->IdTrabajoDetalle . "/");
                }
            }
            $this->trabajo_model->onEliminarFotosProcesoXConcepto($ID);

            $data = $this->trabajo_model->getAnexosDosXTrabajoDetalleID($ID, $IDT);
            print_r($data);
            foreach ($data as $key => $anexo) {
                if (isset($anexo->Url)) {
                    unlink($anexo->Url);
                    rmdir("uploads/Trabajos/AnexosDos/T" . $anexo->IdTrabajo . "/TD" . $anexo->IdTrabajoDetalle . "/");
                }
            }
            $this->trabajo_model->onEliminarAnexosDosXConcepto($ID, $IDT);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarConceptoXDetalleCajero() {
        try {
            extract($this->input->post());
            $this->trabajo_model->onEliminarConceptoCajero($ID);

            $data = $this->trabajo_model->getFotosCajeroXTrabajoDetalleID($ID);
            foreach ($data as $key => $foto) {
                if (isset($foto->Url)) {
                    unlink($foto->Url);
                    rmdir("uploads/Trabajos/CajerosBBVA/C" . $foto->IdTrabajo . "/CD" . $foto->IdCajeroBBVADetalle . "/");
                }
            }
            $this->trabajo_model->onEliminarFotosCajeroXConcepto($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPrecioPorConceptoID() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getPrecioPorConceptoID($ID, $IDCO);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getConceptoByID() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getConceptoByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getImporteTotalDelTrabajoByID() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getImporteTotalDelTrabajoByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarDetalleEditar() {
        try {
            extract($this->input->post());
            $data = array(
                'Trabajo_ID' => $Trabajo_ID,
                'PreciarioConcepto_ID' => $PreciarioConcepto_ID,
                'Renglon' => $Renglon,
                'Cantidad' => 0,
                'Unidad' => (isset($Unidad)) ? $Unidad : "",
                'Precio' => (isset($Precio)) ? $Precio : 0,
                'Importe' => (isset($Importe)) ? $Importe : 0,
                'IntExt' => (isset($IntExt)) ? $IntExt : "",
                'Moneda' => (isset($Moneda)) ? $Moneda : "",
                'Concepto' => (isset($Concepto)) ? $Concepto : "",
                'Clave' => (isset($Clave)) ? $Clave : "",
                'TipoCambio' => 1,
            );
            $ID = $this->trabajo_model->onAgregarDetalle($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onCopiarDetalleEditar() {
        try {
            extract($this->input->post());
            $data = array(
                'Trabajo_ID' => $Trabajo_ID,
                'PreciarioConcepto_ID' => $PreciarioConcepto_ID,
                'Renglon' => $Renglon,
                'Cantidad' => $Cantidad,
                'Unidad' => (isset($Unidad)) ? $Unidad : "",
                'Precio' => (isset($Precio)) ? $Precio : "",
                'Importe' => (isset($Importe)) ? $Importe : "",
                'IntExt' => (isset($IntExt)) ? $IntExt : "",
                'Moneda' => (isset($Moneda)) ? $Moneda : "",
                'Concepto' => (isset($Concepto)) ? $Concepto : "",
                'Clave' => (isset($Clave)) ? $Clave : "",
                'TipoCambio' => 1,
            );
            $ID = $this->trabajo_model->onAgregarDetalle($data);
            echo $ID;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarDetalleAbiertoEditar() {
        try {
            extract($this->input->post());
            $data = array(
                'Trabajo_ID' => $Trabajo_ID,
                'Clave' => (isset($Clave)) ? $Clave : "",
                'Descripcion' => (isset($Descripcion)) ? $Descripcion : "",
                'Descripcion2' => (isset($Descripcion2)) ? $Descripcion2 : "",
                'Descripcion3' => (isset($Descripcion3)) ? $Descripcion3 : "",
                'SemanaDia' => (isset($SemanaDia)) ? $SemanaDia : NULL,
                'InicioFin' => (isset($InicioFin)) ? $InicioFin : NULL,
                'InicioFinProximaSemana' => (isset($InicioFinProximaSemana)) ? $InicioFinProximaSemana : NULL
            );
            $ID = $this->trabajo_model->onAgregarDetalleAbierto($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarDetalleCajeroEditar() {
        try {
            extract($this->input->post());
            $data = array(
                'Trabajo_ID' => $Trabajo_ID,
                'Clave' => (isset($Clave)) ? $Clave : "",
                'Descripcion' => (isset($Descripcion)) ? $Descripcion : ""
            );
            $ID = $this->trabajo_model->onAgregarDetalleCajero($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarFotosEditar() {
        try {
            extract($this->input->post());
            $nombre_foto = 'IMGT-' . $IdTrabajo . '-TD' . $IdTrabajoDetalle;
            $data = array(
                'IdTrabajo' => $IdTrabajo,
                'IdTrabajoDetalle' => $IdTrabajoDetalle,
                'Observaciones' => $nombre_foto,
                'Estatus' => "ACTIVO",
                'Registro' => Date('d/m/y h:i:s a'),
            );
            $ID = $this->trabajo_model->onAgregarDetalleFotos($data);
            /* CREAR DIRECTORIO DE FOTOS */
            $URL_DOC = "uploads/Trabajos/Fotos/T$IdTrabajo/TD$IdTrabajoDetalle";
            $master_url = $URL_DOC . '/';
            if (isset($_FILES["FOTO"]["name"])) {
                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/'))) {
                    mkdir(utf8_decode($URL_DOC . '/'), 0777, true);
                }
                if (move_uploaded_file($_FILES["FOTO"]["tmp_name"], $URL_DOC . '/' . utf8_decode($_FILES["FOTO"]["name"]))) {
                    $img = $master_url . $_FILES["FOTO"]["name"];
                    $this->load->library('image_lib');
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $img;
                    $config['maintain_ratio'] = true;
                    $config['width'] = 900;
                    $config['height'] = 700;
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();
                    $DATA = array(
                        'Url' => ($img),
                        'Observaciones' => $nombre_foto . '-' . $ID,
                    );
                    $this->trabajo_model->onModificarDetalleFoto($ID, $DATA);
                } else {
                    $DATA = array(
                        'Url' => (null),
                    );
                    $this->trabajo_model->onModificarDetalleFoto($ID, $DATA);
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarFotosAntesEditar() {
        try {
            extract($this->input->post());
            $nombre_foto = 'IMGT-' . $IdTrabajo . '-TD' . $IdTrabajoDetalle;
            $data = array(
                'IdTrabajo' => $IdTrabajo,
                'IdTrabajoDetalle' => $IdTrabajoDetalle,
                'Observaciones' => $nombre_foto,
                'Estatus' => "ACTIVO",
                'Registro' => Date('d/m/y h:i:s a'),
            );
            $ID = $this->trabajo_model->onAgregarDetalleFotosAntes($data);
            /* CREAR DIRECTORIO DE FOTOS */
            $URL_DOC = "uploads/Trabajos/FotosAntes/T$IdTrabajo/TD$IdTrabajoDetalle";
            $master_url = $URL_DOC . '/';
            if (isset($_FILES["FOTO"]["name"])) {
                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/'))) {
                    mkdir(utf8_decode($URL_DOC . '/'), 0777, true);
                }
                if (move_uploaded_file($_FILES["FOTO"]["tmp_name"], $URL_DOC . '/' . utf8_decode($_FILES["FOTO"]["name"]))) {
                    $img = $master_url . $_FILES["FOTO"]["name"];
                    $this->load->library('image_lib');
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $img;
                    $config['maintain_ratio'] = true;
                    $config['width'] = 900;
                    $config['height'] = 700;
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();
                    $DATA = array(
                        'Url' => ($img),
                        'Observaciones' => $nombre_foto . '-' . $ID,
                    );
                    $this->trabajo_model->onModificarDetalleFotoAntes($ID, $DATA);
                } else {
                    $DATA = array(
                        'Url' => (null),
                    );
                    $this->trabajo_model->onModificarDetalleFotoAntes($ID, $DATA);
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarFotosDespuesEditar() {
        try {

            extract($this->input->post());
            $nombre_foto = 'IMGT-' . $IdTrabajo . '-TD' . $IdTrabajoDetalle;
            $data = array(
                'IdTrabajo' => $IdTrabajo,
                'IdTrabajoDetalle' => $IdTrabajoDetalle,
                'Observaciones' => $nombre_foto,
                'Estatus' => "ACTIVO",
                'Registro' => Date('d/m/y h:i:s a'),
            );
            $ID = $this->trabajo_model->onAgregarDetalleFotosDespues($data);
            /* CREAR DIRECTORIO DE FOTOS */
            $URL_DOC = "uploads/Trabajos/FotosDespues/T$IdTrabajo/TD$IdTrabajoDetalle";
            $master_url = $URL_DOC . '/';
            if (isset($_FILES["FOTO"]["name"])) {
                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/'))) {
                    mkdir(utf8_decode($URL_DOC . '/'), 0777, true);
                }
                if (move_uploaded_file($_FILES["FOTO"]["tmp_name"], $URL_DOC . '/' . utf8_decode($_FILES["FOTO"]["name"]))) {
                    $img = $master_url . $_FILES["FOTO"]["name"];
                    $this->load->library('image_lib');
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $img;
                    $config['maintain_ratio'] = true;
                    $config['width'] = 900;
                    $config['height'] = 700;
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();
                    $DATA = array(
                        'Url' => ($img),
                    );
                    $this->trabajo_model->onModificarDetalleFotoDespues($ID, $DATA);
                } else {
                    $DATA = array(
                        'Url' => (null),
                        'Observaciones' => $nombre_foto . '-' . $ID,
                    );
                    $this->trabajo_model->onModificarDetalleFotoDespues($ID, $DATA);
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarFotosProcesoEditar() {
        try {
            extract($this->input->post());

            $nombre_foto = 'IMGT-' . $IdTrabajo . '-TD' . $IdTrabajoDetalle;
            $data = array(
                'IdTrabajo' => $IdTrabajo,
                'IdTrabajoDetalle' => $IdTrabajoDetalle,
                'Observaciones' => $nombre_foto,
                'Estatus' => "ACTIVO",
                'Registro' => Date('d/m/y h:i:s a'),
                'Tiempo' => $Tiempo,
                'Porcentaje' => $Porcentaje,
            );
            $ID = $this->trabajo_model->onAgregarDetalleFotosProceso($data);
            /* CREAR DIRECTORIO DE FOTOS */
            $URL_DOC = "uploads/Trabajos/FotosProceso/T$IdTrabajo/TD$IdTrabajoDetalle";
            $master_url = $URL_DOC . '/';
            if (isset($_FILES["FOTO"]["name"])) {
                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/'))) {
                    mkdir(utf8_decode($URL_DOC . '/'), 0777, true);
                }
                if (move_uploaded_file($_FILES["FOTO"]["tmp_name"], $URL_DOC . '/' . utf8_decode($_FILES["FOTO"]["name"]))) {
                    $img = $master_url . $_FILES["FOTO"]["name"];
                    $this->load->library('image_lib');
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $img;
                    $config['maintain_ratio'] = true;
                    $config['width'] = 900;
                    $config['height'] = 700;
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();
                    $DATA = array(
                        'Url' => ($img),
                        'Observaciones' => $nombre_foto . '-' . $ID,
                    );
                    $this->trabajo_model->onModificarDetalleFotoProceso($ID, $DATA);
                } else {
                    $DATA = array(
                        'Url' => (null),
                    );
                    $this->trabajo_model->onModificarDetalleFotoProceso($ID, $DATA);
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarCroquisEditar() {
        try {
            extract($this->input->post());
            $nombre_foto = 'IMGT-' . $IdTrabajo . '-TD' . $IdTrabajoDetalle;
            $data = array(
                'IdTrabajo' => $IdTrabajo,
                'IdTrabajoDetalle' => $IdTrabajoDetalle,
                'Observaciones' => $nombre_foto,
                'Estatus' => "ACTIVO",
                'Registro' => Date('d/m/y h:i:s a'),
            );
            $ID = $this->trabajo_model->onAgregarDetalleCroquis($data);
            /* CREAR DIRECTORIO DE CROQUIS */
            $URL_DOC = "uploads/Trabajos/Croquis/T$IdTrabajo/TD$IdTrabajoDetalle";
            $master_url = $URL_DOC . '/';
            if (isset($_FILES["CROQUIS"]["name"])) {
                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/'))) {
                    mkdir(utf8_decode($URL_DOC . '/'), 0777, true);
                }
                if (move_uploaded_file($_FILES["CROQUIS"]["tmp_name"], $URL_DOC . '/' . utf8_decode($_FILES["CROQUIS"]["name"]))) {
                    $img = $master_url . $_FILES["CROQUIS"]["name"];
                    $this->load->library('image_lib');
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $img;
                    $config['maintain_ratio'] = true;
                    $config['width'] = 800;
                    $config['height'] = 600;
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();
                    $DATA = array(
                        'Url' => ($img),
                        'Observaciones' => $nombre_foto . '-' . $ID,
                    );
                    $this->trabajo_model->onModificarDetalleCroquis($ID, $DATA);
                } else {
                    $DATA = array(
                        'Url' => (null),
                    );
                    $this->trabajo_model->onModificarDetalleCroquis($ID, $DATA);
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarAnexosEditar() {
        try {
            extract($this->input->post());
            $data = array(
                'IdTrabajo' => $IdTrabajo,
                'IdTrabajoDetalle' => $IdTrabajoDetalle,
                'Observaciones' => $Observaciones,
                'Estatus' => "ACTIVO",
                'Registro' => Date('d/m/y h:i:s a'),
            );
            $ID = $this->trabajo_model->onAgregarDetalleAnexos($data);
            /* CREAR DIRECTORIO DE ANEXO */
            $URL_DOC = "uploads/Trabajos/Anexos/T$IdTrabajo/TD$IdTrabajoDetalle";
            $master_url = $URL_DOC . '/';
            if (isset($_FILES["ANEXOS"]["name"])) {
                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/'))) {
                    mkdir(utf8_decode($URL_DOC . '/'), 0777, true);
                }
                if (move_uploaded_file($_FILES["ANEXOS"]["tmp_name"], $URL_DOC . '/' . utf8_decode($_FILES["ANEXOS"]["name"]))) {
                    $img = $master_url . $_FILES["ANEXOS"]["name"];
                    $DATA = array(
                        'Url' => ($img),
                    );
                    $this->trabajo_model->onModificarDetalleAnexo($ID, $DATA);
                } else {
                    $DATA = array(
                        'Url' => (null),
                    );
                    $this->trabajo_model->onModificarDetalleAnexo($ID, $DATA);
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarAnexosDosEditar() {
        try {
            extract($this->input->post());
            $data = array(
                'IdTrabajo' => $IdTrabajo,
                'IdTrabajoDetalle' => $IdTrabajoDetalle,
                'Observaciones' => $Observaciones,
                'Estatus' => "ACTIVO",
                'Registro' => Date('d/m/y h:i:s a'),
            );
            $ID = $this->trabajo_model->onAgregarDetalleAnexosDos($data);
            /* CREAR DIRECTORIO DE ANEXO */
            $URL_DOC = "uploads/Trabajos/AnexosDos/T$IdTrabajo/TD$IdTrabajoDetalle";
            $master_url = $URL_DOC . '/';
            if (isset($_FILES["ANEXOS"]["name"])) {
                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/'))) {
                    mkdir(utf8_decode($URL_DOC . '/'), 0777, true);
                }
                if (move_uploaded_file($_FILES["ANEXOS"]["tmp_name"], $URL_DOC . '/' . utf8_decode($_FILES["ANEXOS"]["name"]))) {
                    $img = $master_url . $_FILES["ANEXOS"]["name"];
                    $DATA = array(
                        'Url' => ($img),
                    );
                    $this->trabajo_model->onModificarDetalleAnexoDos($ID, $DATA);
                } else {
                    $DATA = array(
                        'Url' => (null),
                    );
                    $this->trabajo_model->onModificarDetalleAnexoDos($ID, $DATA);
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarFotosCajeroEditar() {
        try {
            extract($this->input->post());
            $nombre_foto = 'IMGT-' . $IdTrabajo . '-TD' . $IdCajeroBBVADetalle;
            $data = array(
                'IdTrabajo' => $IdTrabajo,
                'IdCajeroBBVADetalle' => $IdCajeroBBVADetalle,
                'Observaciones' => $nombre_foto,
                'Estatus' => "ACTIVO",
                'Registro' => Date('d/m/y h:i:s a')
            );
            $ID = $this->trabajo_model->onAgregarDetalleFotosCajero($data);
            /* CREAR DIRECTORIO DE FOTOS */
            $URL_DOC = "uploads/Trabajos/CajerosBBVA/C$IdTrabajo/CD$IdCajeroBBVADetalle";
            $master_url = $URL_DOC . '/';
            if (isset($_FILES["FOTO"]["name"])) {
                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/'))) {
                    mkdir(utf8_decode($URL_DOC . '/'), 0777, true);
                }
                if (move_uploaded_file($_FILES["FOTO"]["tmp_name"], $URL_DOC . '/' . utf8_decode($_FILES["FOTO"]["name"]))) {
                    $img = $master_url . $_FILES["FOTO"]["name"];
                    $this->load->library('image_lib');
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $img;
                    $config['maintain_ratio'] = TRUE;
                    $config['width'] = 900;
                    $config['height'] = 700;
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();
                    $DATA = array(
                        'Url' => ($img),
                        'Observaciones' => $nombre_foto . '-' . $ID
                    );
                    $this->trabajo_model->onModificarDetalleFotoCajero($ID, $DATA);
                } else {
                    $DATA = array(
                        'Url' => (NULL)
                    );
                    $this->trabajo_model->onModificarDetalleFotoCajero($ID, $DATA);
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function ononModificarObservacionesFotoXConcepto() {
        try {
            extract($this->input->post());
            $DATA = array(
                'Observaciones' => $ObservacionesxFoto
            );
            $this->trabajo_model->onModificarDetalleFotoCajero($ID, $DATA);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function ononModificarObservacionesFotoProcesoXConcepto() {
        try {
            extract($this->input->post());
            $DATA = array(
                'Observaciones' => $ObservacionesxFoto
            );
            $this->trabajo_model->onModificarDetalleFotoProceso($ID, $DATA);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onReporteExcelFicheroXMov() {
        try {
            $ID = $_POST["ID"];
            $fields = $this->trabajo_model->onReporteExcelFicheroXMov($ID);

            if (!empty($fields)) {
                $datosGenerales = $fields[0];
                $objPHPExcel = new Excel();
                $objPHPExcel->setActiveSheetIndex(0);
                // Field names in the first row
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, 1, 'CIF');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, 1, 'Número de la Orden');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 1, 'Fecha Atención');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 1, 'Hora Atención');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 1, 'Fecha Realización');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 1, 'Hora Realización');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 1, 'Causa de la Actuación');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 1, 'PRRLL');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 1, 'Contrato');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 1, 'Posicion');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10, 1, 'Sub Pos.');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 1, 'Material');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, 1, 'Servicio');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13, 1, 'Cantidad');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(14, 1, 'Ind.Impuesto');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(15, 1, 'Familia');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(16, 1, 'Unidad');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(17, 1, 'Importe unitario');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(18, 1, 'Texto Material');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(19, 1, 'Moneda');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(20, 1, 'Cal.1');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(21, 1, 'Cal.2');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(21, 1, 'Cal.3');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(23, 1, 'Cal.4');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(24, 1, 'Cal.5');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(25, 1, 'Texto Causa');
                $row = 2;
                foreach ($fields as $key => $value) {
                    //Set number format
                    $objPHPExcel->getActiveSheet()->getStyle('B' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER);
                    //$objPHPExcel->getActiveSheet()->getStyle('C' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_YYYYMMDD3);
                    //$objPHPExcel->getActiveSheet()->getStyle('E' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_YYYYMMDD3);
                    $objPHPExcel->getActiveSheet()->getStyle('D' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_TIME4);
                    $objPHPExcel->getActiveSheet()->getStyle('R' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_00);

                    $objPHPExcel->getActiveSheet()->getStyle('L' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER);
                    $objPHPExcel->getActiveSheet()->getStyle('P' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER);

                    // Add data
                    $objPHPExcel->getActiveSheet()->setCellValue('A' . $row, $value->CIf);
                    $objPHPExcel->getActiveSheet()->setCellValue('B' . $row, $value->FolioCliente, PHPExcel_Cell_DataType::TYPE_STRING);
                    //  $objPHPExcel->getActiveSheet()->setCellValue('C' . $row, PHPExcel_Shared_Date::PHPToExcel($value->FechaOrigen));
                    $objPHPExcel->getActiveSheet()->setCellValue('C' . $row, $value->FechaOrigen);
                    $objPHPExcel->getActiveSheet()->setCellValue('D' . $row, $value->HoraOrigen);
                    $objPHPExcel->getActiveSheet()->setCellValue('E' . $row, $value->FechaLlegada);
                    $objPHPExcel->getActiveSheet()->setCellValue('F' . $row, $value->HoraLlegada);
                    $objPHPExcel->getActiveSheet()->setCellValue('G' . $row, $value->Sintoma);
                    $objPHPExcel->getActiveSheet()->setCellValue('H' . $row, $value->PRRLL);
                    $objPHPExcel->getActiveSheet()->setCellValue('I' . $row, $value->Contrato);
                    $objPHPExcel->getActiveSheet()->setCellValue('J' . $row, $value->Posicion);
                    $objPHPExcel->getActiveSheet()->setCellValue('K' . $row, $value->SubPosicion);
                    $objPHPExcel->getActiveSheet()->setCellValue('L' . $row, $value->Material);
                    $objPHPExcel->getActiveSheet()->setCellValue('M' . $row, $value->Servicio);
                    $objPHPExcel->getActiveSheet()->setCellValue('N' . $row, $value->Cantidad);
                    $objPHPExcel->getActiveSheet()->setCellValue('O' . $row, $value->IndImpuesto);
                    $objPHPExcel->getActiveSheet()->setCellValue('P' . $row, $value->Familia);
                    $objPHPExcel->getActiveSheet()->setCellValue('Q' . $row, $value->Unidad);
                    $objPHPExcel->getActiveSheet()->setCellValue('R' . $row, $value->ImporteUnitario);
                    $objPHPExcel->getActiveSheet()->setCellValue('S' . $row, $value->TextoMaterial);
                    $objPHPExcel->getActiveSheet()->setCellValue('T' . $row, $value->Moneda);
                    $objPHPExcel->getActiveSheet()->setCellValue('U' . $row, $value->CAL1);
                    $objPHPExcel->getActiveSheet()->setCellValue('V' . $row, $value->CAL2);
                    $objPHPExcel->getActiveSheet()->setCellValue('W' . $row, $value->CAL3);
                    $objPHPExcel->getActiveSheet()->setCellValue('X' . $row, $value->CAL4);
                    $objPHPExcel->getActiveSheet()->setCellValue('Y' . $row, $value->CAL5);
                    $objPHPExcel->getActiveSheet()->setCellValue('Z' . $row, $value->TextoCausa);
                    $row++;
                }

                $objPHPExcel->setActiveSheetIndex(0);
// Rename sheet
                $objPHPExcel->getActiveSheet()->setTitle('Hoja1');
// Save Excel 2007 file
                $path = 'uploads/Tarifarios/Fichero.xlsx';
                $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
                $objWriter->save(str_replace(__FILE__, $path, __FILE__));
                print base_url() . $path;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTarifarioXMovimiento() {
        try {
            $ID = $_POST["ID"];
            $fields = $this->trabajo_model->getTarifarioXMovimiento($ID);

            if (!empty($fields)) {
                $datosGenerales = $fields[0];
                $objPHPExcel = new Excel();
                $objPHPExcel->setActiveSheetIndex(0);
                // Field names in the first row
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, 1, 'No.');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, 1, 'CODIGO');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 1, 'DESCRIPCIÓN');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 1, 'TIPO PRECIO');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 1, 'CATALOGO');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 1, 'TIPO');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 1, 'UNIDAD');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 1, 'CANTIDAD');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 1, 'PU');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 1, 'TOTAL');
                $row = 2;
                foreach ($fields as $key => $value) {
                    //Set number format
                    $objPHPExcel->getActiveSheet()->getStyle('H' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_00);
                    $objPHPExcel->getActiveSheet()->getStyle('I' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATEDMXN);
                    $objPHPExcel->getActiveSheet()->getStyle('J' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATEDMXN);
                    // Add some data
                    $objPHPExcel->getActiveSheet()->setCellValue('A' . $row, str_pad($row - 1, 3, "0", STR_PAD_LEFT));
                    $objPHPExcel->getActiveSheet()->setCellValue('B' . $row, $value->Clave);
                    $objPHPExcel->getActiveSheet()->setCellValue('C' . $row, $value->Concepto);
                    $objPHPExcel->getActiveSheet()->setCellValue('D' . $row, $value->TipoPrecio);
                    $objPHPExcel->getActiveSheet()->setCellValue('E' . $row, $value->Catalogo);
                    $objPHPExcel->getActiveSheet()->setCellValue('F' . $row, $value->TipoConcepto);
                    $objPHPExcel->getActiveSheet()->setCellValue('G' . $row, $value->Unidad);
                    $objPHPExcel->getActiveSheet()->setCellValue('H' . $row, $value->Cantidad);
                    $objPHPExcel->getActiveSheet()->setCellValue('I' . $row, $value->Precio);
                    $objPHPExcel->getActiveSheet()->setCellValue('J' . $row, $value->Importe);
                    $row++;
                }
                //Totales
                $objPHPExcel->getActiveSheet()->setCellValue('I' . $row, 'Total');
                $objPHPExcel->getActiveSheet()->getStyle('J' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATEDMXN);
                $objPHPExcel->getActiveSheet()->setCellValue('J' . $row, $datosGenerales->ImporteTotal);
                $objPHPExcel->setActiveSheetIndex(0);
// Rename sheet
                $objPHPExcel->getActiveSheet()->setTitle('Hoja1');
// Save Excel 2007 file
                $path = 'uploads/Tarifarios/Tarifario de Conceptos.xlsx';
                $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
                $objWriter->save(str_replace(__FILE__, $path, __FILE__));
                print base_url() . $path;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /* ____________________________________REPORTES__________________________________________ */

    public function onReporteFin49Conceptos() {
        //conexion a bd
        try {
            $ID = $_POST['ID'];
            $trabajo = $this->trabajo_model->getFin49ConceptosByID($ID);
            if (!empty($trabajo)) {
                // Creación del objeto de la clase heredada
                $pdf = new PDFFin49('P', 'mm', array(279/* ANCHO */, 216/* ALTURA */));
                $pdf->AliasNbPages();
                $pdf->AddPage();
                $pdf->SetAutoPageBreak(false, 80);
                $pdf->SetLineWidth(0.4);

                $pdf->SetY(3);
                $pdf->SetX(3);

                $pdf->SetFont('Arial', '', 7.5);
                $pdf->Cell(11, 5, $ID, 0, 0, 'L');

                /* ENCABEZADO */
                /* Primer Recuerdo contenedor */
                /* INICIA  EN LA ESQUINA */
                $pdf->Rect(5, 10, 205, 17);
                /* SEGUNDO RECUADRO */
                $pdf->Rect(6, 11, 63, 15);
                /* TERCER RECUADRO */
                $pdf->Rect(70, 11, 139, 15);
                // Logo
                $pdf->Image(base_url() . $trabajo[0]->RutaLogo, 10, 12, 48);
                // Arial bold 15
                $pdf->SetFont('Arial', '', 7);
                // Título
                $pdf->SetY(5);
                // Movernos a la derecha
                $pdf->SetX(5);
                $pdf->SetTextColor(167, 167, 167);
                $pdf->Cell(205, 5, utf8_decode("FIN­049 Autorización De Items Adicionales Y/O Fuera De Catálogo De Precios Unitarios"), 0, 0, 'R');
                $pdf->SetTextColor(0, 0, 0);
                //Texto del segundo recuadro
                $pdf->SetFont('Arial', '', 8);
                $pdf->SetY(10);
                $pdf->SetX(158);
                $pdf->Cell(50, 13, utf8_decode("Gestión De Calidad Ulises"), 0, 0, 'R');
                $pdf->Ln(5);
                $pdf->SetY(14);
                $pdf->SetX(158);
                $pdf->Cell(50, 13, utf8_decode("Dirección De Construcción"), 0, 0, 'R');
                $pdf->Ln(5);
                /* CUERPO */
                $pdf->SetFillColor(208, 225, 248);
                $pdf->SetY(30);
                $pdf->SetX(5);
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->Cell(205, 5, utf8_decode("Notificación De Items Adicionales Y/O Fuera De Catálogo De Precios Unitarios"), 1, 1, 'C', true);
                /* PRIMER PARTE ENCABEZADO */
                $pdf->SetFont('Arial', '', 7);
                $pdf->SetY(37);
                $pdf->SetX(125);
                $pdf->Cell(30, 5, utf8_decode("FECHA:"), 0, 1, 'R');
                $pdf->SetY(37);
                $pdf->SetX(155);
                $pdf->Cell(55, 5, utf8_decode($trabajo[0]->FechaCreacion), 'B', 1, 'C');
                $pdf->SetFillColor(169, 244, 251);
                $pdf->SetY(43);
                $pdf->SetX(125);
                $pdf->Cell(30, 5, utf8_decode("TIPO DE CONCEPTO:"), 0, 1, 'R', true);
                $pdf->SetY(43);
                $pdf->SetX(155);
                $pdf->Cell(55, 5, utf8_decode($trabajo[0]->TipoConcepto), 'B', 1, 'C', true);
                /* SEGUNDA PARTE ENCABEZADO */
                $pdf->SetFont('Arial', '', 6);
                $pdf->SetY(50);
                $pdf->SetX(5);
                $pdf->Cell(20, 5, utf8_decode("CR & SUCURSAL:"), 0, 1, 'R');
                $pdf->SetY(50);
                $pdf->SetX(25);
                $pdf->Cell(55, 5, utf8_decode($trabajo[0]->CR . ' - ' . $trabajo[0]->NombreSucursal), 'B', 1, 'C');
                $pdf->SetY(50);
                $pdf->SetX(80);
                $pdf->Cell(30, 5, utf8_decode("EMPRESA CONTRATISTA:"), 0, 1, 'R');
                $pdf->SetY(50);
                $pdf->SetX(110);
                $pdf->Cell(45, 5, utf8_decode($trabajo[0]->Empresa), 'B', 1, 'C');
                $pdf->SetY(50);
                $pdf->SetX(155);
                $pdf->Cell(20, 5, utf8_decode("INICIO DE OBRA:"), 0, 1, 'R');
                $pdf->SetY(50);
                $pdf->SetX(175);
                $pdf->Cell(35, 5, utf8_decode($trabajo[0]->FechaInicio), 'B', 1, 'C');
                $pdf->SetY(55);
                $pdf->SetX(5);
                $pdf->Cell(20, 5, utf8_decode("TIPO DE OBRA:"), 0, 1, 'R');
                $pdf->SetY(55);
                $pdf->SetX(25);
                $pdf->Cell(55, 5, utf8_decode($trabajo[0]->TipoObra), 'B', 1, 'C');
                $pdf->SetY(55);
                $pdf->SetX(80);
                $pdf->Cell(30, 5, utf8_decode("GERENCIA DE PROY:"), 0, 1, 'R');
                $pdf->SetY(55);
                $pdf->SetX(110);
                $pdf->Cell(45, 5, utf8_decode($trabajo[0]->EmpresaSupervisora), 'B', 1, 'C');
                $pdf->SetY(55);
                $pdf->SetX(155);
                $pdf->Cell(20, 5, utf8_decode("FIN DE OBRA:"), 0, 1, 'R');
                $pdf->SetY(55);
                $pdf->SetX(175);
                $pdf->Cell(35, 5, utf8_decode($trabajo[0]->FechaFin), 'B', 1, 'C');
                /* TERCERA PARTE */
                $pdf->SetFont('Arial', 'B', 6.5);
                $pdf->SetY(65);
                $pdf->SetX(5);
                $pdf->Cell(20, 5, utf8_decode("A.­ PARTIDA A LA CUAL CORRESPONDE EL CONCEPTO(S):"), 0, 1, 'L');
                $pdf->Image(base_url() . 'img/PARTIDAS_FIN49.png', 40, 70, 120);
                $pdf->SetFont('Arial', '', 6.5);
                $pdf->SetY(125);
                $pdf->SetX(5);
                $pdf->Cell(205, 3, utf8_decode("NOTA: UNA VEZ IDENTIFICADO EL CONCEPTO LA SUPERVISION EXTERNA DEBERA PRESENTAR PROPUESTA TECNICA CON CROQUIS Y TRES COTIZACIONES LO
                                            ANTERIOR "), 0, 1, 'L');
                $pdf->SetY(128);
                $pdf->SetX(5);
                $pdf->Cell(205, 3, utf8_decode("GESTIONADO CON EL CONTRATISTA DE OBRA PARA SU AUTORIZACION"), 0, 1, 'L');
                $pdf->SetFont('Arial', 'B', 6.5);
                $pdf->SetY(132);
                $pdf->SetX(5);
                $pdf->Cell(205, 5, utf8_decode("B.­ INDICAR EL/LOS CONCEPTO(S)::"), 0, 1, 'L');
                /* ENCABEZADO DETALLE TITULOS */
                $pdf->SetFont('Arial', 'B', 7);
                $pdf->SetFillColor(10, 54, 112);
                $pdf->SetTextColor(255, 255, 255);
                $pdf->SetY(138);
                $pdf->SetX(5);
                $pdf->Cell(25, 5, utf8_decode("PARTIDA"), 1, 1, 'C', true);
                $pdf->SetY(138);
                $pdf->SetX(30);
                $pdf->Cell(15, 5, utf8_decode("CLAVE"), 1, 1, 'C', true);
                $pdf->SetY(138);
                $pdf->SetX(45);
                $pdf->Cell(110, 5, utf8_decode("CONCEPTO"), 1, 1, 'C', true);
                $pdf->SetY(138);
                $pdf->SetX(155);
                $pdf->Cell(15, 5, utf8_decode("UNIDAD"), 1, 1, 'C', true);
                $pdf->SetY(138);
                $pdf->SetX(170);
                $pdf->Cell(20, 5, utf8_decode("CANTIDAD"), 1, 1, 'C', true);
                $pdf->SetY(138);
                $pdf->SetX(190);
                $pdf->Cell(20, 5, utf8_decode("PRECIO"), 1, 1, 'C', true);
                /* DETALLE */
                foreach ($trabajo as $key => $value) {
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetFont('Arial', '', 6.5);
                    $pdf->SetWidths(array(25, 15, 110, 15, 20, 20));
                    $pdf->SetAligns(array('C', 'C', 'L', 'C', 'C', 'C'));
                    $pdf->Row(array(utf8_decode($value->Categoria), utf8_decode($value->Clave), utf8_decode($value->Descripcion), utf8_decode($value->Unidad), utf8_decode($value->Cantidad), "$ " . number_format($value->Precio, 2)));
                }
                /* FIRMAS PRIMER BLOQUE */
                /* FIRMA 1 */
                $Y = $pdf->GetY() + 20;
                $pdf->SetTextColor(0, 0, 0);
                $pdf->SetFont('Arial', 'B', 7.5);
                $pdf->Rect(5, $Y, 63, 25);
                $pdf->SetY($Y);
                $pdf->SetX(5);
                $pdf->Cell(63, 5, utf8_decode(""), 0, 1, 'C');
                $pdf->SetY($Y + 20);
                $pdf->SetX(5);
                $pdf->Cell(63, 5, utf8_decode("Empresa Constructora"), 'T', 1, 'C');
                /* FIRMA 2 */
                $pdf->Rect(76, $Y, 63, 25);
                $pdf->SetY($Y);
                $pdf->SetX(76);
                $pdf->Cell(63, 5, utf8_decode("SOLICITA:"), 0, 1, 'C');
                $pdf->SetY($Y + 20);
                $pdf->SetX(76);
                $pdf->Cell(63, 5, utf8_decode("Gerencia De Proyectos (Supervisor O PM)"), 'T', 1, 'C');
                /* FIRMA 3 */
                $pdf->Rect(146, $Y, 64, 25);
                $pdf->SetY($Y);
                $pdf->SetX(146);
                $pdf->Cell(63, 5, utf8_decode("REVISA:"), 0, 1, 'C');
                $pdf->SetY($Y + 20);
                $pdf->SetX(146);
                $pdf->Cell(64, 5, utf8_decode("Area De Costos"), 'T', 1, 'C');
                /* FIRMAS SEGUNDO BLOQUE */
                $Y = $pdf->GetY() + 5;
                /* FIRMA 1 */
                $pdf->Rect(5, $Y, 63, 25);
                $pdf->SetY($Y);
                $pdf->SetX(5);
                $pdf->Cell(63, 5, utf8_decode(""), 0, 1, 'C');
                $pdf->SetY($Y + 20);
                $pdf->SetX(5);
                $pdf->Cell(63, 5, utf8_decode("Area De Costos"), 'T', 1, 'C');
                /* FIRMA 2 */
                $pdf->Rect(76, $Y, 63, 25);
                $pdf->SetY($Y + 20);
                $pdf->SetX(76);
                $pdf->Cell(63, 5, utf8_decode(""), 'T', 1, 'C');
                $pdf->SetY($Y + 20);
                $pdf->SetX(76);
                $pdf->Cell(63, 5, utf8_decode("Subdirector De Construccion BBVA BANCOMER"), 'T', 1, 'C');
                /* FIRMA 3 */
                $pdf->Rect(146, $Y, 64, 25);
                $pdf->SetY($Y);
                $pdf->SetX(146);
                $pdf->Cell(63, 5, utf8_decode("AUTORIZA:"), 0, 1, 'C');
                $pdf->SetY($Y + 20);
                $pdf->SetX(146);
                $pdf->Cell(64, 5, utf8_decode("Subdiretor De Gestion Y Admon. Ulises"), 'T', 1, 'C');
                /* FIN CUERPO */
                $path = 'uploads/Reportes/' . $ID;
                // print $path;
                if (!file_exists($path)) {
                    mkdir($path, 0777, true);
                }
                $file_name = "REPORTE_FIN49_CONCEPTOS " . $trabajo[0]->NombreCliente . " " . date("Y-m-d His");
                $url = $path . '/' . $file_name . '.pdf';
                if (delete_files('uploads/Reportes/' . $ID)) {
                    
                }
                $pdf->Output($url);
                print base_url() . $url;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onReportePresupuesto() {
        $ID = $_POST['ID'];
        $trabajo = $this->trabajo_model->getPresupuesto($ID);
        if (!empty($trabajo)) {
            $categorias = $this->trabajo_model->getCategoriasPresupuesto($ID);
            $encabezado = $trabajo[0];
            // Creación del objeto de la clase heredada
            $pdf = new PDFC('P', 'mm', array(279/* ANCHO */, 216/* ALTURA */));

            /* ENCABEZADO */
            $pdf->ID = $ID;
            $pdf->FolioCliente = $encabezado->FolioCliente;
            $pdf->Cliente = $encabezado->Cliente;
            $pdf->Sucursal = $encabezado->Sucursal;
            $pdf->CR = $encabezado->CR;
            $pdf->TrabajoSolicitado = $encabezado->TrabajoSolicitado;
            $pdf->Region = $encabezado->Region;
            $pdf->TrabajoRequerido = $encabezado->TrabajoRequerido;
            $pdf->Calle = $encabezado->Calle;
            $pdf->NoExterior = $encabezado->NoExterior;
            $pdf->Colonia = $encabezado->Colonia;
            $pdf->Ciudad = $encabezado->Ciudad;
            $pdf->Estado = $encabezado->Estado;
            $pdf->FechaOrigen = $encabezado->FechaOrigen;

            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->SetAutoPageBreak(true, 50);
            $pdf->SetLineWidth(0.4);





            /* CATEGORIAS */
            foreach ($categorias as $key => $value) {

                $pdf->SetWidths(array(15, 110, 15, 15, 20, 20));
                $pdf->SetAligns(array('C', 'L', 'C', 'C', 'C', 'C'));
                $pdf->Row(array(utf8_decode($value->ClaveCategoria), utf8_decode($value->Categoria), '', '', '', ''));

                foreach ($trabajo as $keyConceptos => $valueConceptos) {
                    $pdf->SetFont('Arial', '', 6.5);

                    if ($valueConceptos->Categoria == $value->Categoria) {
                        $pdf->SetWidths(array(15, 110, 15, 15, 20, 20));
                        $pdf->Row(array(utf8_decode($valueConceptos->Clave), utf8_decode($valueConceptos->Concepto), utf8_decode($valueConceptos->Unidad), number_format($valueConceptos->Cantidad, 4), $valueConceptos->Moneda . ' $' . number_format($valueConceptos->Precio, 2), '$' . number_format($valueConceptos->ImporteRenglon, 2)));
                    }
                }
                /* SUBTOTALES */
                $pdf->SetWidths(array(15, 110, 15, 15, 20, 20));
                $pdf->RowSubtotal(array('', 'SUB', '', '', '', '$' . number_format($value->ImporteRenglon, 2)));
            }
            //TOTALES
            $pdf->SetWidths(array(15, 110, 15, 15, 20, 20));
            $pdf->RowSubtotal(array('', 'TOTAL:', '', '', '', '$' . number_format($value->Importe, 2)));

            /* FIN CUERPO */
            $path = 'uploads/Reportes/' . $ID;
            // print $path;
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file_name = "PRESUPUESTO " . $encabezado->Cliente . " " . date("Y-m-d His");
            $url = $path . '/' . $file_name . '.pdf';
            if (delete_files('uploads/Reportes/' . $ID)) {
                
            }
            $pdf->Output($url);
            print base_url() . $url;
        }
    }

    public function onReportePresupuestoIng() {
        $ID = $_POST['ID'];
        $trabajo = $this->trabajo_model->getPresupuesto($ID);
        if (!empty($trabajo)) {
            $categorias = $this->trabajo_model->getCategoriasPresupuesto($ID);
            $encabezado = $trabajo[0];
            // Creación del objeto de la clase heredada
            $pdf = new PDFCI('P', 'mm', array(279/* ANCHO */, 216/* ALTURA */));

            /* ENCABEZADO */
            $pdf->ID = $ID;
            $pdf->FolioCliente = $encabezado->FolioCliente;
            $pdf->Cliente = $encabezado->Cliente;
            $pdf->Sucursal = $encabezado->Sucursal;
            $pdf->CR = $encabezado->CR;
            $pdf->TrabajoSolicitado = $encabezado->TrabajoSolicitado;
            $pdf->Region = $encabezado->Region;
            $pdf->TrabajoRequerido = $encabezado->TrabajoRequerido;
            $pdf->Calle = $encabezado->Calle;
            $pdf->NoExterior = $encabezado->NoExterior;
            $pdf->Colonia = $encabezado->Colonia;
            $pdf->Ciudad = $encabezado->Ciudad;
            $pdf->Estado = $encabezado->Estado;

            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->SetAutoPageBreak(true, 50);
            $pdf->SetLineWidth(0.4);

            /* CATEGORIAS */
            foreach ($categorias as $key => $value) {

                $pdf->SetWidths(array(15, 110, 15, 15, 20, 20));
                $pdf->SetAligns(array('C', 'L', 'C', 'C', 'C', 'C'));
                $pdf->Row(array(utf8_decode($value->ClaveCategoria), utf8_decode($value->Categoria), '', '', '', ''));

                foreach ($trabajo as $keyConceptos => $valueConceptos) {
                    $pdf->SetFont('Arial', '', 6.5);

                    if ($valueConceptos->Categoria == $value->Categoria) {
                        $pdf->SetWidths(array(15, 110, 15, 15, 20, 20));
                        $pdf->Row(array(utf8_decode($valueConceptos->Clave), utf8_decode($valueConceptos->Concepto), utf8_decode($valueConceptos->Unidad), number_format($valueConceptos->Cantidad, 4), $valueConceptos->Moneda . ' $' . number_format($valueConceptos->Precio, 2), '$' . number_format($valueConceptos->ImporteRenglon, 2)));
                    }
                }
                /* SUBTOTALES */
                $pdf->SetWidths(array(15, 110, 15, 15, 20, 20));
                $pdf->RowSubtotal(array('', 'SUB', '', '', '', '$' . number_format($value->ImporteRenglon, 2)));
            }
            //TOTALES
            $pdf->SetWidths(array(15, 110, 15, 15, 20, 20));
            $pdf->RowSubtotal(array('', 'TOTAL:', '', '', '', '$' . number_format($value->Importe, 2)));

            /* FIN CUERPO */
            $path = 'uploads/Reportes/' . $ID;
            // print $path;
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file_name = "REPORTE_PRESUPUESTO A&R " . $pdf->Cliente = $encabezado->Cliente . " " . date("Y-m-d His");
            $url = $path . '/' . $file_name . '.pdf';
            if (delete_files('uploads/Reportes/' . $ID)) {
                
            }
            $pdf->Output($url);
            print base_url() . $url;
        }
    }

    public function onReporteFin49() {
        //conexion a bd
        try {
            $ID = $_POST['ID'];
            $trabajo = $this->trabajo_model->getFin49ByID($ID);
            // $trabajo[0]->Movimiento;
            // Creación del objeto de la clase heredada
            $pdf = new PDF('P', 'mm', array(279/* ANCHO */, 216/* ALTURA */));
            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->SetAutoPageBreak(false, 300);
            $pdf->SetLineWidth(0.4);

            $pdf->SetY(3);
            $pdf->SetX(3);

            $pdf->SetFont('Arial', '', 7.5);
            $pdf->Cell(11, 5, $ID, 0, 0, 'L');

            /* ENCABEZADO */
            /* Primer Recuerdo contenedor */
            /* INICIA  EN LA ESQUINA */
            $pdf->Rect(5, 10, 205, 17);
            /* SEGUNDO RECUADRO */
            $pdf->Rect(6, 11, 63, 15);
            /* TERCER RECUADRO */
            $pdf->Rect(70, 11, 139, 15);
            // Logo
            $pdf->Image(base_url() . $trabajo[0]->RutaLogo, 10, 12, 48);
            // Arial bold 15
            $pdf->SetFont('Arial', '', 7);
            // Título
            $pdf->SetY(5);
            // Movernos a la derecha
            $pdf->SetX(5);
            $pdf->SetTextColor(167, 167, 167);
            $pdf->Cell(205, 5, utf8_decode("FIN­049A Notificación De Items Adicionales Y/O Fuera De Catálogo De Precios Unitarios (Posible Orden De Cambio)"), 0, 0, 'R');
            $pdf->SetTextColor(0, 0, 0);
            //Texto del segundo recuadro
            $pdf->SetFont('Arial', '', 8);
            $pdf->SetY(10);
            $pdf->SetX(158);
            $pdf->Cell(50, 13, utf8_decode("Gestión De Calidad Ulises"), 0, 0, 'R');
            $pdf->Ln(5);
            $pdf->SetY(14);
            $pdf->SetX(158);
            $pdf->Cell(50, 13, utf8_decode("Dirección De Construcción"), 0, 0, 'R');
            $pdf->Ln(5);
            /* CUERPO */
            $pdf->SetFillColor(208, 225, 248);
            $pdf->SetY(30);
            $pdf->SetX(5);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(205, 5, utf8_decode("Notificación De Items Adicionales (Posible Orden De Cambio)"), 1, 1, 'C', true);
            /* PRIMER PARTE ENCABEZADO */
            $pdf->SetFont('Arial', '', 7);
            $pdf->SetY(37);
            $pdf->SetX(125);
            $pdf->Cell(30, 5, utf8_decode("FECHA:"), 0, 1, 'R');
            $pdf->SetY(37);
            $pdf->SetX(155);
            $pdf->Cell(55, 5, utf8_decode($trabajo[0]->FechaCreacion), 'B', 1, 'C');
            $pdf->SetFillColor(169, 244, 251);
            $pdf->SetY(43);
            $pdf->SetX(125);
            $pdf->Cell(30, 5, utf8_decode("TIPO DE CONCEPTO:"), 0, 1, 'R', true);
            $pdf->SetY(43);
            $pdf->SetX(155);
            $pdf->Cell(55, 5, utf8_decode($trabajo[0]->TipoConcepto), 'B', 1, 'C', true);
            /* SEGUNDA PARTE ENCABEZADO */
            $pdf->SetFont('Arial', '', 6);
            $pdf->SetY(50);
            $pdf->SetX(5);
            $pdf->Cell(20, 5, utf8_decode("CR & SUCURSAL:"), 0, 1, 'R');
            $pdf->SetY(50);
            $pdf->SetX(25);
            $pdf->Cell(55, 5, utf8_decode($trabajo[0]->CR . ' - ' . $trabajo[0]->NombreSucursal), 'B', 1, 'C');
            $pdf->SetY(50);
            $pdf->SetX(80);
            $pdf->Cell(30, 5, utf8_decode("EMPRESA CONTRATISTA:"), 0, 1, 'R');
            $pdf->SetY(50);
            $pdf->SetX(110);
            $pdf->Cell(45, 5, utf8_decode($trabajo[0]->Empresa), 'B', 1, 'C');
            $pdf->SetY(50);
            $pdf->SetX(155);
            $pdf->Cell(20, 5, utf8_decode("INICIO DE OBRA:"), 0, 1, 'R');
            $pdf->SetY(50);
            $pdf->SetX(175);
            $pdf->Cell(35, 5, utf8_decode($trabajo[0]->FechaInicio), 'B', 1, 'C');
            $pdf->SetY(55);
            $pdf->SetX(5);
            $pdf->Cell(20, 5, utf8_decode("TIPO DE OBRA:"), 0, 1, 'R');
            $pdf->SetY(55);
            $pdf->SetX(25);
            $pdf->Cell(55, 5, utf8_decode($trabajo[0]->TipoObra), 'B', 1, 'C');
            $pdf->SetY(55);
            $pdf->SetX(80);
            $pdf->Cell(30, 5, utf8_decode("GERENCIA DE PROY:"), 0, 1, 'R');
            $pdf->SetY(55);
            $pdf->SetX(110);
            $pdf->Cell(45, 5, utf8_decode($trabajo[0]->EmpresaSupervisora), 'B', 1, 'C');
            $pdf->SetY(55);
            $pdf->SetX(155);
            $pdf->Cell(20, 5, utf8_decode("FIN DE OBRA:"), 0, 1, 'R');
            $pdf->SetY(55);
            $pdf->SetX(175);
            $pdf->Cell(35, 5, utf8_decode($trabajo[0]->FechaFin), 'B', 1, 'C');
            //Para tachar la casilla de origen PCO
            if ($trabajo[0]->ClaveOrigenTrabajo == 'CONTR') {
                $pdf->Line(35, 62, 25, 67);
            }
            if ($trabajo[0]->ClaveOrigenTrabajo == 'GDP') {
                $pdf->Line(41, 62, 35, 67);
            }
            if ($trabajo[0]->ClaveOrigenTrabajo == 'OTRO') {
                $pdf->Line(57, 62, 49, 67);
            }
            //Si es nombre corto del cliente
            else {
                $pdf->Line(49, 62, 41, 67);
            }
            $pdf->SetY(62);
            $pdf->SetX(5);
            $pdf->Cell(20, 5, utf8_decode("ORIGEN PCO:"), 0, 1, 'R');
            $pdf->SetY(62);
            $pdf->SetX(25);
            $pdf->Cell(10, 5, utf8_decode("CONTR"), 1, 1, 'C');
            $pdf->SetY(62);
            $pdf->SetX(35);
            $pdf->Cell(6, 5, utf8_decode("GdP"), 1, 1, 'C');
            $pdf->SetY(62);
            $pdf->SetX(41);
            $pdf->Cell(8, 5, utf8_decode($trabajo[0]->NombreCorto), 1, 1, 'C');
            $pdf->SetY(62);
            $pdf->SetX(49);
            $pdf->Cell(8, 5, utf8_decode("OTRO"), 1, 1, 'C');
            $pdf->SetY(62);
            $pdf->SetX(57);
            $pdf->Cell(23, 5, utf8_decode($trabajo[0]->EspecificaOrigenTrabajo), 'B', 1, 'C');
            $pdf->SetY(60);
            $pdf->SetX(80);
            $pdf->Cell(30, 5, utf8_decode("CONTRATO:"), 0, 1, 'R');
            $pdf->SetY(60);
            $pdf->SetX(110);
            $pdf->Cell(45, 5, utf8_decode($trabajo[0]->Contrato), 'B', 1, 'C');
            $pdf->SetY(60);
            $pdf->SetX(155);
            $pdf->Cell(20, 5, utf8_decode("FOLIO:"), 0, 1, 'R');
            $pdf->SetY(60);
            $pdf->SetX(175);
            $pdf->Cell(35, 5, utf8_decode($trabajo[0]->CR) . '-' . utf8_decode($trabajo[0]->FolioCliente), 'B', 1, 'C');
            /* TERCERA PARTE */
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->SetY(70);
            $pdf->SetX(4);
            $pdf->Cell(20, 5, utf8_decode("ORIGEN:"), 0, 1, 'L');
            $pdf->SetFont('Arial', '', 5.5);
            $pdf->SetY(75);
            $pdf->SetX(5);
            $pdf->Cell(205, 25, '', 1, 1, 'L');
            $pdf->SetY(76);
            $pdf->SetX(5);
            $pdf->MultiCell(205, 2.2, utf8_decode($trabajo[0]->DescripcionOrigenTrabajo), 0, 'L');
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->SetY(105);
            $pdf->SetX(4);
            $pdf->Cell(20, 5, utf8_decode("RIESGO:"), 0, 1, 'L');
            $pdf->SetFont('Arial', '', 5.5);
            $pdf->SetY(110);
            $pdf->SetX(5);
            $pdf->Cell(205, 25, '', 1, 1, 'L');
            $pdf->SetY(111);
            $pdf->SetX(5);
            $pdf->MultiCell(205, 2.2, utf8_decode($trabajo[0]->DescripcionRiesgoTrabajo), 0, 'L');
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->SetY(140);
            $pdf->SetX(4);
            $pdf->Cell(20, 5, utf8_decode("DESCRIPCIÓN DE ALCANCE:"), 0, 1, 'L');
            $pdf->SetFont('Arial', '', 5.5);
            $pdf->SetY(145);
            $pdf->SetX(5);
            $pdf->Cell(205, 25, '', 1, 1, 'L');
            $pdf->SetY(146);
            $pdf->SetX(5);
            $pdf->MultiCell(205, 2.2, utf8_decode($trabajo[0]->DescripcionAlcanceTrabajo), 0, 'J');
            /* SECCION PRE FOOTER */
            if ($trabajo[0]->ImpactoEnPlazo == 'Si') {
                $pdf->Line(55, 175, 35, 180);
            } else {
                $pdf->Line(75, 175, 55, 180);
            }
            $pdf->SetFont('Arial', 'B', 7);
            $pdf->SetY(175);
            $pdf->SetX(5);
            $pdf->Cell(30, 5, utf8_decode("IMPACTO EN PLAZO"), 0, 1, 'l');
            $pdf->SetFont('Arial', '', 7);
            $pdf->SetY(175);
            $pdf->SetX(35);
            $pdf->Cell(20, 5, utf8_decode("SI"), 1, 1, 'C');
            $pdf->SetY(175);
            $pdf->SetX(55);
            $pdf->Cell(20, 5, utf8_decode("NO"), 1, 1, 'C');
            $pdf->SetY(175);
            $pdf->SetX(75);
            $pdf->Cell(15, 5, utf8_decode($trabajo[0]->DiasImpacto), 'B', 1, 'C');
            $pdf->SetY(175);
            $pdf->SetX(90);
            $pdf->Cell(10, 5, utf8_decode("DIAS"), 0, 1, 'C');
            if ($trabajo[0]->Importe >= 5000) {
                $pdf->Line(165, 175, 145, 180);
            } else {
                $pdf->Line(185, 175, 165, 180);
            }
            $pdf->SetFont('Arial', 'B', 7);
            $pdf->SetY(175);
            $pdf->SetX(115);
            $pdf->Cell(30, 5, utf8_decode("IMPACTO EN COSTO"), 0, 1, 'l');
            $pdf->SetFont('Arial', '', 7);
            $pdf->SetY(175);
            $pdf->SetX(145);
            $pdf->Cell(20, 5, utf8_decode("SI"), 1, 1, 'C');
            $pdf->SetY(175);
            $pdf->SetX(165);
            $pdf->Cell(20, 5, utf8_decode("NO"), 1, 1, 'C');
            $pdf->SetY(175);
            $pdf->SetX(185);
            $pdf->Cell(25, 5, '$' . number_format($trabajo[0]->Importe, 2), 'B', 1, 'C');
            $pdf->SetY(175);
            $pdf->SetX(195);
            $pdf->SetFont('Arial', 'B', 7);
            $pdf->SetY(185);
            $pdf->SetX(5);
            $pdf->Cell(200, 5, utf8_decode("Notas Importantes"), 0, 1, 'l');
            $pdf->SetFont('Arial', '', 7);
            $pdf->SetY(190);
            $pdf->SetX(5);
            $pdf->Cell(200, 3, utf8_decode("1. El Contratista Esta Obligado A Integrar Su PCO Y/O Orden De Cambio Acorde A Lo Establecido En Su Contrato"), 0, 1, 'L');
            $pdf->SetY(193);
            $pdf->SetX(5);
            $pdf->Cell(200, 3, utf8_decode("2. En Caso De Aprobación Se Requiere Firma Del Representante Del Cliente, Caso Contrario, Cruzar Con Una Linea El Nombre"), 0, 1, 'L');
            $pdf->SetY(196);
            $pdf->SetX(5);
            $pdf->Cell(200, 3, utf8_decode("3. Entiéndase De Que La No Aprobación Indicara La No Ejecución De Los Trabajos"), 0, 1, 'L');
            $pdf->SetY(199);
            $pdf->SetX(5);
            $pdf->Cell(200, 3, utf8_decode("4. Este Costo Es Un Estimado Inicial Que Sera Sujeto Al Proceso Contractual De Revision, Asimismo Se Validara La Procedencia Como ODC Según Alcances "), 0, 1, 'L');
            $pdf->SetY(202);
            $pdf->SetX(8);
            $pdf->Cell(200, 3, utf8_decode("Previamente Contratados"), 0, 1, 'L');
            /* FIRMAS PRIMER BLOQUE */
            /* FIRMA 1 */
            $pdf->SetFont('Arial', 'B', 7.5);
            $pdf->Rect(5, 210, 63, 25);
            $pdf->SetY(210);
            $pdf->SetX(5);
            $pdf->Cell(63, 5, utf8_decode("VALIDA:"), 0, 1, 'C');
            $pdf->SetY(230);
            $pdf->SetX(5);
            $pdf->Cell(63, 5, utf8_decode("Supervisión Gerencia De Proyectos"), 'T', 1, 'C');
            /* FIRMA 2 */
            $pdf->Rect(76, 210, 63, 25);
            $pdf->SetY(210);
            $pdf->SetX(76);
            $pdf->Cell(63, 5, utf8_decode("VALIDA:"), 0, 1, 'C');
            $pdf->SetY(230);
            $pdf->SetX(76);
            $pdf->Cell(63, 5, utf8_decode("Costos De Gerencia De Proyectos"), 'T', 1, 'C');
            /* FIRMA 3 */
            $pdf->Rect(146, 210, 64, 25);
            $pdf->SetY(210);
            $pdf->SetX(146);
            $pdf->Cell(63, 5, utf8_decode("AUTORIZA:"), 0, 1, 'C');
            $pdf->SetY(230);
            $pdf->SetX(146);
            $pdf->Cell(64, 5, utf8_decode("Subdirector De Construcción BBVA Bancomer"), 'T', 1, 'C');
            /* FIRMAS SEGUNDO BLOQUE */
            /* FIRMA 1 */
            $pdf->Rect(5, 240, 63, 25);
            $pdf->SetY(240);
            $pdf->SetX(5);
            $pdf->Cell(63, 5, utf8_decode("AUTORIZA:"), 0, 1, 'C');
            $pdf->SetY(260);
            $pdf->SetX(5);
            $pdf->Cell(63, 5, utf8_decode("Director De Construcción BBVA Bancomer"), 'T', 1, 'C');
            /* FIRMA 2 */
            $pdf->Rect(76, 240, 63, 25);
            $pdf->SetY(260);
            $pdf->SetX(76);
            $pdf->Cell(63, 5, utf8_decode(""), 'T', 1, 'C');
            /* FIRMA 3 */
            $pdf->Rect(146, 240, 64, 25);
            $pdf->SetY(240);
            $pdf->SetX(146);
            $pdf->Cell(63, 5, utf8_decode("AUTORIZA:"), 0, 1, 'C');
            $pdf->SetY(260);
            $pdf->SetX(146);
            $pdf->Cell(64, 5, utf8_decode("Director De PMO Ulises"), 'T', 1, 'C');
            /* PIE DE PAGINA */
            $pdf->SetFont('Arial', 'B', 7);
            $pdf->SetY(270);
            $pdf->SetX(5);
            $pdf->Cell(92, 4, utf8_decode("INMUEBLES: Actitud, Eficiecia Y Calidad A Tu Servicio"), 1, 1, 'L');
            $pdf->SetY(270);
            $pdf->SetX(97);
            $pdf->SetFillColor(169, 244, 251);
            $pdf->Cell(23, 4, utf8_decode("Versión 1"), 1, 1, 'C', true);
            $pdf->SetY(270);
            $pdf->SetX(120);
            $pdf->Cell(90, 4, utf8_decode("Pag. 1    "), 1, 1, 'R');
            /* FIN CUERPO */
            $path = 'uploads/Reportes/' . $ID;
            // print $path;
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file_name = "REPORTE_FIN49 " . $trabajo[0]->NombreCliente . " " . date("Y-m-d His");
            $url = $path . '/' . $file_name . '.pdf';
            if (delete_files('uploads/Reportes/' . $ID)) {
                
            }

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onReporteResumenPartidas() {
        $ID = $_POST['ID'];
        $trabajo = $this->trabajo_model->getResumenPartidas($ID);
        if (!empty($trabajo)) {
            $datos = $trabajo[0];
            // Creación del objeto de la clase heredada
            $pdf = new PDF('P', 'mm', array(279/* ANCHO */, 216/* ALTURA */));
            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->SetAutoPageBreak(false, 300);
            $pdf->SetLineWidth(0.4);


            $pdf->SetY(3);
            $pdf->SetX(3);

            $pdf->SetFont('Arial', '', 7.5);
            $pdf->Cell(11, 5, $ID, 0, 0, 'L');

            /* ENCABEZADO */
            $pdf->Image(base_url() . utf8_decode($datos->LogoEmpresa), 5, 5, 35);
            // LogoCliente
            $pdf->Image(base_url() . utf8_decode($datos->LogoCliente), 155, 5, 55);
            /* Titulo */
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->SetY(5);
            $pdf->SetX(5);
            $pdf->Cell(200, 5, utf8_decode($datos->Cliente), 0, 1, 'C');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY);
            $pdf->SetX(5);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(200, 5, utf8_decode("ADMNISTRACIÓN DE INMUEBLES"), 0, 1, 'C');
            /* PRIMEROS TITULOS */
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY);
            $pdf->SetX(50);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(20, 5, utf8_decode("OBRA:"), 0, 1, 'L');
            $pdf->SetY($CurrenY);
            $pdf->SetX(70);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(75, 5, utf8_decode($datos->TrabajoSolicitado), 'B', 1, 'L');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY);
            $pdf->SetX(50);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(20, 5, utf8_decode("EMPRESA:"), 0, 1, 'L');
            $pdf->SetY($CurrenY);
            $pdf->SetX(70);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(75, 5, utf8_decode($datos->Empresa), 'B', 1, 'L');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY);
            $pdf->SetX(50);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(20, 5, utf8_decode("FECHA:"), 0, 1, 'L');
            $pdf->SetY($CurrenY);
            $pdf->SetX(70);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(75, 5, utf8_decode($datos->FechaCreacion), 'B', 1, 'L');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 4);
            $pdf->SetX(5);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(200, 5, utf8_decode("RESUMEN DE PARTIDAS"), 0, 1, 'C');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY);
            $pdf->SetX(5);
            $pdf->Cell(200, 5, utf8_decode('CR: ' . $datos->CR . ' - ' . $datos->Sucursal), 0, 1, 'C');
            /* SEGUNDA PARTE ENCABEZADO */
            //Traemos los valores totalizados
            $PreliminaresInt = '';
            $AlbañileriaInt = '';
            $AcabadosInt = '';
            $CanceleriaInt = '';
            $HerrerriaInt = '';
            $SuministrosInt = '';
            $LimpiezaInt = '';
            $InstHidroSanitariaInt = '';
            $InsElectricaInt = '';
            $AireAconInt = '';
            $InfraesctructuraInt = '';
            $VariosInt = '';
            $totalInteriores = 0;
            $PreliminaresExt = '';
            $AlbañileriaExt = '';
            $AcabadosExt = '';
            $HerrerriaExt = '';

            $InfraesctructuraExt = '';
            $VariosExt = '';
            $totalExteriores = 0;
            $GranTotal = 0;
            foreach ($trabajo as $i => $datoNuevo) {
                if ($datoNuevo->IntExt == "Interior") {
                    if ($datoNuevo->Categoria == "PRELIMINARES") {
                        $PreliminaresInt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                    } else if ($datoNuevo->Categoria == "ALBAÑILERÍA") {
                        $AlbañileriaInt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                    } else if ($datoNuevo->Categoria == "ACABADOS") {
                        $AcabadosInt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                    } else if ($datoNuevo->Categoria == "CANCELERÍA ALUMINIO Y CRISTAL") {
                        $CanceleriaInt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                    } else if ($datoNuevo->Categoria == "HERRERÍA Y ESTRUCTURA METÁLICA") {
                        $HerrerriaInt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                    } else if ($datoNuevo->Categoria == "SUMINISTROS DEL CLIENTE Y COLOCACIONES") {
                        $SuministrosInt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                    } else if ($datoNuevo->Categoria == "LIMPIEZA") {
                        $LimpiezaInt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                    } else if ($datoNuevo->Categoria == "INSTALACIÓN HIDROSANITARIA") {
                        $InstHidroSanitariaInt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                    } else if ($datoNuevo->Categoria == "INSTALACIÓN ELÉCTRICA") {
                        $InsElectricaInt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                    } else if ($datoNuevo->Categoria == "AIRE ACONDICIONADO") {
                        $AireAconInt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                    } else if ($datoNuevo->Categoria == "INFRAESTRUCTURA") {
                        $InfraesctructuraInt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                    } else {
                        $VariosInt += $datoNuevo->ImporteRenglon;
                    }
                    //Calcula el total de interiores
                    $totalInteriores += $datoNuevo->ImporteRenglon;
                }
                if ($datoNuevo->IntExt == "Exterior") {
                    if ($datoNuevo->Categoria == "PRELIMINARES") {
                        $PreliminaresExt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                    } else if ($datoNuevo->Categoria == "ALBAÑILERÍA") {
                        $AlbañileriaExt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                    } else if ($datoNuevo->Categoria == "ACABADOS") {
                        $AcabadosExt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                    } else if ($datoNuevo->Categoria == "HERRERÍA Y ESTRUCTURA METÁLICA") {
                        $HerrerriaExt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                    } else if ($datoNuevo->Categoria == "INFRAESTRUCTURA") {
                        $InfraesctructuraExt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                    } else {
                        $VariosExt += $datoNuevo->ImporteRenglon;
                    }
                    //Calcula el total de exteriores
                    $totalExteriores += $datoNuevo->ImporteRenglon;
                }
                //Calculamos el gran total
                $GranTotal = $totalInteriores + $totalExteriores;
            }
            //Despues de todo el for verificaos que no vengan vacios los campos de varios para formatearlos
            if (!$VariosInt == '') {
                $VariosInt = '$' . number_format((float) $VariosInt, 2);
            }
            if (!$VariosExt == '') {
                $VariosExt = '$' . number_format((float) $VariosExt, 2);
            }
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY);
            $pdf->SetX(15);
            $pdf->Cell(55, 5, utf8_decode("SUCURSAL BANCARIA (INTERIORES) "), 0, 1, 'L');
            $pdf->SetFont('Arial', '', 8);
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(15);
            $pdf->Cell(55, 5, utf8_decode("PRELIMINARES  "), 0, 1, 'L');
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(110);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(95, 5, $PreliminaresInt, 'B', 1, 'C');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(15);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(55, 5, utf8_decode("ALBAÑILERIA"), 0, 1, 'L');
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(110);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(95, 5, $AlbañileriaInt, 'B', 1, 'C');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(15);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(55, 5, utf8_decode("ACABADOS"), 0, 1, 'L');
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(110);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(95, 5, $AcabadosInt, 'B', 1, 'C');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(15);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(55, 5, utf8_decode("CANCELERIA ALUMINIO Y CRISTAL"), 0, 1, 'L');
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(110);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(95, 5, $CanceleriaInt, 'B', 1, 'C');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(15);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(55, 5, utf8_decode("HERRERIA Y ESTRUCTURA METALICA"), 0, 1, 'L');
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(110);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(95, 5, $HerrerriaInt, 'B', 1, 'C');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(15);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(55, 5, utf8_decode("SUMINISTROS DEL CLIENTE Y COLOCACIONES"), 0, 1, 'L');
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(110);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(95, 5, $SuministrosInt, 'B', 1, 'C');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(15);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(55, 5, utf8_decode("LIMPIEZA"), 0, 1, 'L');
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(110);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(95, 5, $LimpiezaInt, 'B', 1, 'C');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(15);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(55, 5, utf8_decode("INSTALACIÓN HIDROSANITARIA"), 0, 1, 'L');
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(110);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(95, 5, $InstHidroSanitariaInt, 'B', 1, 'C');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(15);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(55, 5, utf8_decode("INSTALACIÓN ELECTRICA"), 0, 1, 'L');
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(110);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(95, 5, $InsElectricaInt, 'B', 1, 'C');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(15);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(55, 5, utf8_decode("AIRE ACONDICIONADO"), 0, 1, 'L');
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(110);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(95, 5, $AireAconInt, 'B', 1, 'C');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(15);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(55, 5, 'INFRAESTRUCTURA', 0, 1, 'L');
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(110);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(95, 5, $InfraesctructuraInt, 'B', 1, 'C');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(15);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(55, 5, utf8_decode("SIN CLAVE"), 0, 1, 'L');
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(110);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(95, 5, $VariosInt, 'B', 1, 'C');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 5);
            $pdf->SetX(15);
            $pdf->Cell(55, 5, utf8_decode("TOTAL SUCURSAL BANCARIA"), 0, 1, 'L');
            $pdf->SetY($CurrenY + 5);
            $pdf->SetX(110);
            $pdf->Cell(95, 5, '$' . number_format($totalInteriores, 2), 'B', 1, 'C');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 8);
            $pdf->SetX(15);
            $pdf->Cell(55, 5, utf8_decode("OBRAS EXTERIORES"), 0, 1, 'L');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(15);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(55, 5, utf8_decode("PRELIMINARES"), 0, 1, 'L');
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(110);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(95, 5, $PreliminaresExt, 'B', 1, 'C');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(15);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(55, 5, utf8_decode("ALBAÑILERIA"), 0, 1, 'L');
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(110);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(95, 5, $AlbañileriaExt, 'B', 1, 'C');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(15);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(55, 5, utf8_decode("ACABADOS"), 0, 1, 'L');
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(110);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(95, 5, $AcabadosExt, 'B', 1, 'C');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(15);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(55, 5, utf8_decode("HERRERIA Y ESTRUCTURA METALICA"), 0, 1, 'L');
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(110);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(95, 5, $HerrerriaExt, 'B', 1, 'C');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(15);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(55, 5, utf8_decode("INFRAESTRUCUTRA"), 0, 1, 'L');
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(110);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(95, 5, $InfraesctructuraExt, 'B', 1, 'C');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(15);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(55, 5, utf8_decode("VARIOS"), 0, 1, 'L');
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(110);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(95, 5, $VariosExt, 'B', 1, 'C');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 5);
            $pdf->SetX(15);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(55, 5, utf8_decode("TOTAL DE OBRAS EXTERIORES"), 0, 1, 'L');
            $pdf->SetY($CurrenY + 5);
            $pdf->SetX(110);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(95, 5, '$' . number_format($totalExteriores, 2), 'B', 1, 'C');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 10);
            $pdf->SetX(15);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(55, 5, utf8_decode("GRAN TOTAL"), 0, 1, 'L');
            $pdf->SetY($CurrenY + 10);
            $pdf->SetX(110);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(95, 5, '$' . number_format($GranTotal, 2), 'B', 1, 'C');
            /* PIE DE PAGINA FIRMAS */
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 10);
            $pdf->SetX(10);
            $pdf->Cell(55, 5, utf8_decode("FIRMAS DE CONFORMIDAD"), 0, 1, 'L');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(10);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(55, 5, utf8_decode("EMPRESA"), 0, 1, 'L');
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(120);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(55, 5, utf8_decode("BANCO"), 0, 1, 'L');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(15);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(80, 5, utf8_decode($datos->Empresa), 0, 1, 'C');
            $pdf->SetY($CurrenY + 2);
            $pdf->SetX(120);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(80, 5, utf8_decode($datos->Cliente), 0, 1, 'C');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY + 10);
            $pdf->SetX(15);
            $pdf->Cell(80, 5, utf8_decode(""), 'B', 1, 'C');
            $pdf->SetY($CurrenY + 10);
            $pdf->SetX(120);
            $pdf->Cell(80, 5, utf8_decode(""), 'B', 1, 'C');
            $CurrenY = $pdf->GetY();
            $pdf->SetY($CurrenY);
            $pdf->SetX(15);
            $pdf->SetFont('Arial', '', 7);
            $pdf->Cell(80, 5, utf8_decode($datos->ContactoEmpresa), 0, 1, 'C');
            $pdf->SetY($CurrenY);
            $pdf->SetX(120);
            $pdf->SetFont('Arial', '', 7);
            $pdf->Cell(80, 5, utf8_decode($datos->FirmaBanco), 0, 1, 'C');
            /* FIN CUERPO */
            $path = 'uploads/Reportes/' . $ID;
            // print $path;
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file_name = "RESUMEN DE PARTIDAS " . $datos->Cliente . " " . date("Y-m-d His");
            $url = $path . '/' . $file_name . '.pdf';
            /* Borramos el archivo anterior */
            if (delete_files('uploads/Reportes/' . $ID)) {
                
            }
            $pdf->Output($url);
            print base_url() . $url;
        }
    }

    public function onReportePresupuestoBBVA() {
        $ID = $_POST['ID'];
        $trabajo = $this->trabajo_model->getPresupuestoBBVA($ID);
        if (!empty($trabajo)) {
            $datosEncabezado = $trabajo[0];

            // Creación del objeto de la clase heredada
            $pdf = new PFGPB('P', 'mm', array(279/* ANCHO */, 216/* ALTURA */));

            $pdf->FolioCliente = $datosEncabezado->FolioCliente;
            $pdf->Empresa = $datosEncabezado->Empresa;
            $pdf->Sucursal = $datosEncabezado->Sucursal;
            $pdf->CR = $datosEncabezado->CR;

            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->SetAutoPageBreak(false, 20);
            /* DETALLE  */
            $ImporteTotal = 0;
            foreach ($trabajo as $key => $value) {
                $pdf->SetFont('Arial', '', 6.5);
                $pdf->SetWidths(array(15, 110, 15, 20, 20, 25));
                $pdf->SetAligns(array('C', 'L', 'C', 'C', 'C', 'C'));
                $pdf->Row(array(utf8_decode($value->Clave), utf8_decode($value->Concepto), utf8_decode($value->Unidad), utf8_decode($value->Cantidad), "$ " . number_format($value->Precio, 2), "$ " . number_format($value->ImporteRenglon, 2)));
                $ImporteTotal += $value->ImporteRenglon;
            }
            /* FINAL DEL DETALLE */
            $pdf->SetWidths(array(15, 110, 15, 20, 20, 25));
            $pdf->SetAligns(array('C', 'L', 'C', 'C', 'C', 'C'));
            $pdf->RowTotal(array('', 'TOTAL DE PRESUPUESTO ADICIONALES', '', '', '', "$ " . number_format($ImporteTotal, 2)));

            /* TOTALES TITULOS */
            $Y = $pdf->GetY() + 5;
            $pdf->SetY($Y);
            $pdf->SetX(85);
            $pdf->Cell(85, 5, "Importe Contratado=", 0, 1, 'R');
            $pdf->SetY($Y);
            $pdf->SetX(185);
            $pdf->Cell(25, 5, utf8_decode("$0.00"), 1, 1, 'R');
            $pdf->SetY($Y + 10);
            $pdf->SetX(85);
            $pdf->SetTextColor(255, 38, 38);
            $pdf->Cell(85, 5, "Deductivas=", 0, 1, 'R');
            $pdf->SetY($Y + 10);
            $pdf->SetX(185);
            $pdf->Cell(25, 5, utf8_decode("$0.00"), 1, 1, 'R');
            $pdf->SetY($Y + 20);
            $pdf->SetX(85);
            $pdf->SetTextColor(0, 0, 0);
            $pdf->Cell(85, 5, utf8_decode('Items fuera de catálogo='), 0, 1, 'R');
            $pdf->SetY($Y + 20);
            $pdf->SetX(185);
            $pdf->Cell(25, 5, "$ " . number_format($ImporteTotal, 2), 1, 1, 'R');
            $pdf->SetY($Y + 30);
            $pdf->SetX(85);
            $pdf->SetTextColor(255, 38, 38);
            $pdf->Cell(85, 5, utf8_decode("Penalización por incumplimiento de fechas contractuales="), 0, 1, 'R');
            $pdf->SetY($Y + 30);
            $pdf->SetX(185);
            $pdf->Cell(25, 5, utf8_decode("$0.00"), 1, 1, 'R');
            $pdf->SetY($Y + 40);
            $pdf->SetX(85);
            $pdf->SetTextColor(0, 0, 0);
            $pdf->Cell(85, 5, "Subtotal=", 0, 1, 'R');
            $pdf->SetY($Y + 40);
            $pdf->SetX(185);
            $pdf->Cell(25, 5, "$ " . number_format($ImporteTotal, 2), 1, 1, 'R');
            /* FIRMAS */
            /* ELABORÓ */
            $pdf->SetFont('Arial', '', 8);
            $pdf->SetY(267);
            $pdf->SetX(10);
            $pdf->Cell(90, 5, utf8_decode($datosEncabezado->Empresa), 'T', 1, 'C');
            /* REVISÓ */
            $pdf->SetY(267);
            $pdf->SetX(120);
            $pdf->Cell(90, 5, utf8_decode($datosEncabezado->Supervisora), 'T', 1, 'C');
            /* FIN CUERPO */
            $path = 'uploads/Reportes/' . $ID;
            // print $path;
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file_name = "REPORTE_PRESUPUESTOBBVA " . $datosEncabezado->Cliente . " " . date("Y-m-d His");
            $url = $path . '/' . $file_name . '.pdf';
            /* Borramos el archivo anterior */
            if (delete_files('uploads/Reportes/' . $ID)) {
                
            }
            $pdf->Output($url);
            print base_url() . $url;
        }
    }

    public function onReporteGenerador() {
        // Creación del objeto de la clase heredada
        $pdf = new PDFGEN('L', 'mm', array(279/* ANCHO */, 216/* ALTURA */));
        $ID = $_POST['ID'];

        $Concepto = $this->trabajo_model->getConceptosReporteGenerador($ID);
        if (!empty($Concepto)) {
            $Detalle = $this->trabajo_model->getDetalleGenerador($ID);
            $pdf->AliasNbPages();
            //ENCABEZADOS CONCEPTOS
            foreach ($Concepto as $i => $datoConcepto) {
                $pdf->Firma1 = $datoConcepto->Firma1;
                $pdf->Firma2 = $datoConcepto->Firma2;
                $pdf->Firma3 = $datoConcepto->Firma3;
                $pdf->LeyendaReporte = $datoConcepto->LeyendaReporte;
                $pdf->AddPage();
                $pdf->SetAutoPageBreak(false, 300);

                $pdf->SetY(1);
                $pdf->SetX(3);
                $pdf->SetFont('Arial', '', 7.5);
                $pdf->Cell(11, 5, $datoConcepto->TrabajoID, 0, 0, 'L');

                /* ENCABEZADO */
                // Logo

                $pdf->Image(base_url() . utf8_decode($datoConcepto->LogoCliente), 5, 5, 40);

                // Arial bold 15
                $pdf->SetFont('Arial', 'B', 9);
                // Título
                $pdf->SetY(5);
                // Movernos a la derecha
                $pdf->Cell(75);
                $pdf->Cell(125, 25, utf8_decode("NUMEROS GENERADORES"), 0, 0, 'C');
                $pdf->SetFont('Arial', 'B', 8);

                $pdf->SetY(5);
                $pdf->SetX(180);
                $pdf->MultiCell(93, 3.5, utf8_decode($datoConcepto->LeyendaReporte), 0, 'R');
                /* CUERPO */
                $CURRENT_Y = $pdf->GetY();
                $pdf->SetY(25);
                $borders = 0;
                $bottom = 0;
                $pdf->SetLineWidth(0.4);
                $page = 1;
                /* INICIA  EN LA ESQUINA DE EMPRESA */
                $pdf->Rect(164, 25, 110, 22);
                /* INICIA EN LA ESQUINA DE OBRA */
                $pdf->Rect(5, 32, 269, 15);
                /* INICIA EN LA ESQUINA DE CLAVE */
                $pdf->Rect(5, 49.5, 269, 19);
                /* INICIA EN LA ESQUINA CONTENEDOR PRINCIPAL */
                $pdf->Rect(5, 71, 269, 105);
                /* LINEA VERTICAL DELANTE DE EMPRESA Y UBICACIÓN */
                $pdf->Line(45, 32, 45, 47);
                /* LINEA VERTICAL ENTRE EMPRESA, UNIDAD, PZA */
                $pdf->Line(214, 25, 214, 47);
                /* LINEA HORIZONTAL DEBAJO DE OBRA, UNIDAD Y ARRIBA DE UBICACIÓN Y PZA */
                $pdf->Line(5, 38, 274, 38);
                /* LINEA VERTICAL DELANTE DE CLAVE */
                $pdf->Line(45, 49.5, 45, 68);
                /* LINEA VERTICAL  DE PARTIDA */
                $pdf->Line(90, 49.5, 90, 68);
                /* LINEA HORIZONTAL DEBAJO DE CLAVE, PARTIDA Y CONCEPTO */
                $pdf->Line(5, 56, 274, 56);
                /* TITULOS */
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->SetY(33);
                $pdf->SetX(20);
                $pdf->Cell(55, 5, "OBRA: ", 0, 1);
                $pdf->SetY(39);
                $pdf->SetX(15);
                $pdf->Cell(55, 5, utf8_decode("UBICACIÓN: "), 0, 1);
                $pdf->SetY(26);
                $pdf->SetX(163);
                $pdf->Cell(55, 5, utf8_decode("EMPRESA: "), 0, 1, 'C');
                $pdf->SetY(33);
                $pdf->SetX(163);
                $pdf->Cell(55, 5, utf8_decode("UNIDAD "), 0, 1, 'C');
                $pdf->SetY(33);
                $pdf->SetX(216);
                $pdf->Cell(55, 5, utf8_decode("HOJA "), 0, 1, 'C');
                $pdf->SetY(51);
                $pdf->SetX(15);
                $pdf->Cell(20, 5, utf8_decode("CLAVE "), 0, 1, 'C');
                $pdf->SetY(51);
                $pdf->SetX(60);
                $pdf->Cell(15, 5, utf8_decode("PARTIDA "), 0, 1, 'C');
                $pdf->SetY(51);
                $pdf->SetX(164);
                $pdf->Cell(15, 5, utf8_decode("CONCEPTO"), 0, 1, 'C');
                /* DATOS */
                $pdf->SetY(33);
                $pdf->SetX(46);
                $pdf->SetFont('Arial', '', 7);
                $pdf->Cell(115, 5, utf8_decode($datoConcepto->CR . ' - ' . $datoConcepto->Sucursal), 0, 1);
                $pdf->SetY(26);
                $pdf->SetX(214);
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->Cell(60, 5, utf8_decode($datoConcepto->Empresa), 0, 1, 'C');
                $pdf->SetY(38.5);
                $pdf->SetX(46);
                $pdf->SetFont('Arial', '', 7);
                $pdf->MultiCell(115, 4, utf8_decode($datoConcepto->Direccion), 0, 1);
                $pdf->SetY(40);
                $pdf->SetX(164);
                $pdf->SetFont('Arial', '', 8);
                $pdf->Cell(50, 5, utf8_decode($datoConcepto->Unidad), 0, 1, 'C');
                $pdf->SetY(40);
                $pdf->SetX(219);
                $pdf->Cell(0, 5, $pdf->PageNo() . ' DE {nb}', 0, 0, 'C');
                $pdf->SetY(58);
                $pdf->SetX(5);
                $pdf->Cell(40, 5, utf8_decode($datoConcepto->Clave), 0, 1, 'C');
                $pdf->SetY(58);
                $pdf->SetX(45);
                $pdf->MultiCell(45, 5, utf8_decode($datoConcepto->Categoria), 0, 'C');
                $pdf->SetY(56.5);
                $pdf->SetX(90);
                $pdf->SetFont('Arial', '', 5.5);
                $pdf->MultiCell(184, 1.9, utf8_decode($datoConcepto->Concepto), 0, 'J');
                /* ENCABEZADO DETALLE GENERADOR */
                $pdf->SetFont('Arial', 'B', 8);
                /* LINEA VERTICAL DESPUES DE LOCALIZACION */
                $pdf->Line(45, 176, 45, 71);
                /* LINEA VERTICAL EJE Y ENTRE EJE ABAJO DE LOCALIZACION */
                $pdf->Line(18, 81, 18, 76);
                /* LINEA VERTICAL DESPUES DE AREA */
                $pdf->Line(90, 176, 90, 71);
                /* LINEA VERTICAL DESPUES DE LARGO */
                $pdf->Line(105, 176, 105, 71);
                /* LINEA VERTICAL DESPUES DE ANCHO */
                $pdf->Line(120, 176, 120, 71);
                /* LINEA VERTICAL DESPUES DE ALTO */
                $pdf->Line(135, 176, 135, 71);
                /* LINEA VERTICAL DESPUES DE CANTIDAD */
                $pdf->Line(155, 176, 155, 71);
                /* LINEA VERTICAL DESPUES DE TOTAL */
                $pdf->Line(175, 176, 175, 71);
                /* LINEA VERTICAL DESPUES DE CORRECCION SUPERVISION */
                $pdf->Line(200, 176, 200, 71);
                /* LINEA VERTICAL DESPUES DE VOBO BANCOMER */
                $pdf->Line(230, 176, 230, 71);
                /* LINEA HORIZONTAL DE ENCABEZADO LOCALIZACION  */
                $pdf->Line(5, 76, 45, 76);
                /* LINEA HORIZONTAL DE ENCABEZADO COMPLETA */
                $pdf->Line(5, 81, 274, 81);
                /* TITULOS ENCABEZADO */
                $pdf->SetY(71);
                $pdf->SetX(5);
                $pdf->SetFont('Arial', 'B', 7);
                $pdf->Cell(40, 5, utf8_decode("LOCALIZACIÓN"), 1, 1, 'C');
                $pdf->SetY(76);
                $pdf->SetX(5);
                $pdf->Cell(13, 5, utf8_decode("EJE"), 0, 1, 'C');
                $pdf->SetY(76);
                $pdf->SetX(18);
                $pdf->Cell(27, 5, utf8_decode("ENTRE EJE"), 0, 1, 'C');
                $pdf->SetY(73);
                $pdf->SetX(45);
                $pdf->Cell(45, 5, utf8_decode("AREA"), 0, 1, 'C');
                $pdf->SetY(73);
                $pdf->SetX(90);
                $pdf->Cell(15, 5, utf8_decode("LARGO"), 0, 1, 'C');
                $pdf->SetY(73);
                $pdf->SetX(105);
                $pdf->Cell(15, 5, utf8_decode("ANCHO"), 0, 1, 'C');
                $pdf->SetY(73);
                $pdf->SetX(120);
                $pdf->Cell(15, 5, utf8_decode("ALTO"), 0, 1, 'C');
                $pdf->SetY(73);
                $pdf->SetX(137);
                $pdf->Cell(15, 5, utf8_decode("CANTIDAD"), 0, 1, 'C');
                $pdf->SetY(73);
                $pdf->SetX(157);
                $pdf->Cell(15, 5, utf8_decode("TOTAL"), 0, 1, 'C');
                $pdf->SetY(71.5);
                $pdf->SetX(175);
                $pdf->MultiCell(25, 3, utf8_decode("CORRECCION SUPERVISIóN BBVA BANCOMER"), 0, 'C');
                $pdf->SetY(73);
                $pdf->SetX(202);
                $pdf->MultiCell(25, 3, utf8_decode("VoBo BBVA BANCOMER"), 0, 'C');
                $pdf->SetY(73);
                $pdf->SetX(230);
                $pdf->MultiCell(44, 5, utf8_decode("CONFORMIDAD EMPRESA "), 0, 'C');
                $Y = 81;
                $registros = 0;
                /* DETALLE GENERADOR */
                foreach ($Detalle as $k => $datoDetalle) {
                    if ($datoDetalle->Concepto_ID == $datoConcepto->ConceptoId) {
                        /* DATOS DETALLE */
                        $pdf->SetFont('Arial', '', 7);
                        $pdf->SetY($Y);
                        $pdf->SetX(5);
                        $pdf->Cell(13, 5, utf8_decode($datoDetalle->Eje), 0, 1, 'C');
                        $pdf->SetY($Y);
                        $pdf->SetX(18);
                        $pdf->Cell(13, 5, utf8_decode($datoDetalle->EntreEje1), 0, 1, 'C');
                        $pdf->SetY($Y);
                        $pdf->SetX(31);
                        $pdf->Cell(14, 5, utf8_decode($datoDetalle->EntreEje2), 0, 1, 'C');
                        $pdf->SetY($Y);
                        $pdf->SetX(45);
                        if ($datoDetalle->Area < 0) {
                            $pdf->SetTextColor(230, 0, 0);
                        } else {
                            $pdf->SetTextColor(0, 0, 0);
                        }
                        $pdf->Cell(45, 5, utf8_decode($datoDetalle->Area), 0, 1, 'C');
                        $pdf->SetY($Y);
                        $pdf->SetX(90);
                        if ($datoDetalle->Largo < 0) {
                            $pdf->SetTextColor(230, 0, 0);
                        } else {
                            $pdf->SetTextColor(0, 0, 0);
                        }
                        $pdf->Cell(15, 5, number_format($datoDetalle->Largo, 3), 0, 1, 'C');
                        $pdf->SetY($Y);
                        $pdf->SetX(105);
                        if ($datoDetalle->Ancho < 0) {
                            $pdf->SetTextColor(230, 0, 0);
                        } else {
                            $pdf->SetTextColor(0, 0, 0);
                        }
                        $pdf->Cell(15, 5, number_format($datoDetalle->Ancho, 3), 0, 1, 'C');
                        $pdf->SetY($Y);
                        $pdf->SetX(120);
                        if ($datoDetalle->Alto < 0) {
                            $pdf->SetTextColor(230, 0, 0);
                        } else {
                            $pdf->SetTextColor(0, 0, 0);
                        }
                        $pdf->Cell(15, 5, number_format($datoDetalle->Alto, 3), 0, 1, 'C');
                        $pdf->SetY($Y);
                        $pdf->SetX(135);
                        if ($datoDetalle->Cantidad < 0) {
                            $pdf->SetTextColor(230, 0, 0);
                        } else {
                            $pdf->SetTextColor(0, 0, 0);
                        }
                        $pdf->Cell(20, 5, number_format($datoDetalle->Cantidad, 3), 0, 1, 'C');
                        $pdf->SetY($Y);
                        $pdf->SetX(155);
                        if ($datoDetalle->Total < 0) {
                            $pdf->SetTextColor(230, 0, 0);
                        } else {
                            $pdf->SetTextColor(0, 0, 0);
                        }
                        $pdf->Cell(20, 5, number_format($datoDetalle->Total, 3), 0, 1, 'C');


                        $pdf->SetTextColor(0, 0, 0);
                        /* LINEA SEPARADOR DETALLE RENGLON */
                        $pdf->Line(5, $Y + 5, 274, $Y + 5);
                        /* LINEA VERTICAL EJE ABAJO DE LOCALIZACION DETALLE */
                        $pdf->Line(18, $Y + 5, 18, $Y);
                        /* LINEA VERTICAL ENTRE EJE ABAJO DE LOCALIZACION DETALLE */
                        $pdf->Line(31, $Y + 5, 31, $Y);
                        $Y += 5;
                        $registros++;
                        if ($registros >= 19) {
                            $pdf->AddPage();
                            /* ENCABEZADO */
                            // Logo
                            $pdf->Image(base_url() . utf8_decode($datoConcepto->LogoCliente), 5, 5, 40);
                            // Arial bold 15
                            $pdf->SetFont('Arial', 'B', 9);
                            // Título
                            $pdf->SetY(5);
                            // Movernos a la derecha
                            $pdf->Cell(75);
                            $pdf->Cell(125, 25, utf8_decode("NUMEROS GENERADORES"), 0, 0, 'C');
                            $pdf->SetFont('Arial', 'B', 8);
                            $pdf->SetY(1);
                            $pdf->SetX(225);
                            $pdf->Cell(50, 15, utf8_decode("Dirección de Administración de"), 0, 0, 'R');
                            $pdf->Ln(5);
                            $pdf->SetY(4);
                            $pdf->SetX(225.5);
                            $pdf->Cell(50, 15, utf8_decode("InmueblesGestión de Calidad"), 0, 0, 'R');
                            $pdf->Ln(5);
                            $pdf->SetY(7);
                            $pdf->SetX(225);
                            $pdf->Cell(50, 15, utf8_decode("InmueblesSubdirección de Inmovilizado"), 0, 0, 'R');
                            /* CUERPO */
                            $CURRENT_Y = $pdf->GetY();
                            $pdf->SetY(25);
                            $borders = 0;
                            $bottom = 0;
                            $pdf->SetLineWidth(0.4);
                            $page = 1;
                            /* INICIA  EN LA ESQUINA DE EMPRESA */
                            $pdf->Rect(164, 25, 110, 22);
                            /* INICIA EN LA ESQUINA DE OBRA */
                            $pdf->Rect(5, 32, 269, 15);
                            /* INICIA EN LA ESQUINA DE CLAVE */
                            $pdf->Rect(5, 49.5, 269, 19);
                            /* INICIA EN LA ESQUINA CONTENEDOR PRINCIPAL */
                            $pdf->Rect(5, 71, 269, 105);
                            /* LINEA VERTICAL DELANTE DE EMPRESA Y UBICACIÓN */
                            $pdf->Line(45, 32, 45, 47);
                            /* LINEA VERTICAL ENTRE EMPRESA, UNIDAD, PZA */
                            $pdf->Line(214, 25, 214, 47);
                            /* LINEA HORIZONTAL DEBAJO DE OBRA, UNIDAD Y ARRIBA DE UBICACIÓN Y PZA */
                            $pdf->Line(5, 38, 274, 38);
                            /* LINEA VERTICAL DELANTE DE CLAVE */
                            $pdf->Line(45, 49.5, 45, 68);
                            /* LINEA VERTICAL  DE PARTIDA */
                            $pdf->Line(90, 49.5, 90, 68);
                            /* LINEA HORIZONTAL DEBAJO DE CLAVE, PARTIDA Y CONCEPTO */
                            $pdf->Line(5, 56, 274, 56);
                            /* TITULOS */
                            $pdf->SetFont('Arial', 'B', 8);
                            $pdf->SetY(33);
                            $pdf->SetX(20);
                            $pdf->Cell(55, 5, "OBRA: ", 0, 1);
                            $pdf->SetY(39);
                            $pdf->SetX(15);
                            $pdf->Cell(55, 5, utf8_decode("UBICACIÓN: "), 0, 1);
                            $pdf->SetY(26);
                            $pdf->SetX(163);
                            $pdf->Cell(55, 5, utf8_decode("EMPRESA: "), 0, 1, 'C');
                            $pdf->SetY(33);
                            $pdf->SetX(163);
                            $pdf->Cell(55, 5, utf8_decode("UNIDAD "), 0, 1, 'C');
                            $pdf->SetY(33);
                            $pdf->SetX(216);
                            $pdf->Cell(55, 5, utf8_decode("HOJA "), 0, 1, 'C');
                            $pdf->SetY(51);
                            $pdf->SetX(15);
                            $pdf->Cell(20, 5, utf8_decode("CLAVE "), 0, 1, 'C');
                            $pdf->SetY(51);
                            $pdf->SetX(60);
                            $pdf->Cell(15, 5, utf8_decode("PARTIDA "), 0, 1, 'C');
                            $pdf->SetY(51);
                            $pdf->SetX(164);
                            $pdf->Cell(15, 5, utf8_decode("CONCEPTO"), 0, 1, 'C');
                            /* DATOS */
                            $pdf->SetY(33);
                            $pdf->SetX(46);
                            $pdf->SetFont('Arial', '', 7);
                            $pdf->Cell(115, 5, utf8_decode($datoConcepto->CR . ' - ' . $datoConcepto->Sucursal), 0, 1);
                            $pdf->SetY(26);
                            $pdf->SetX(214);
                            $pdf->SetFont('Arial', 'B', 8);
                            $pdf->Cell(60, 5, utf8_decode($datoConcepto->Empresa), 0, 1, 'C');
                            $pdf->SetY(38.5);
                            $pdf->SetX(46);
                            $pdf->SetFont('Arial', '', 7);
                            $pdf->MultiCell(115, 4, utf8_decode($datoConcepto->Direccion), 0, 1);
                            $pdf->SetY(40);
                            $pdf->SetX(164);
                            $pdf->SetFont('Arial', '', 8);
                            $pdf->Cell(50, 5, utf8_decode($datoConcepto->Unidad), 0, 1, 'C');
                            $pdf->SetY(40);
                            $pdf->SetX(219);
                            $pdf->Cell(0, 5, $pdf->PageNo() . ' DE {nb}', 0, 0, 'C');
                            $pdf->SetY(58);
                            $pdf->SetX(5);
                            $pdf->Cell(40, 5, utf8_decode($datoConcepto->Clave), 0, 1, 'C');
                            $pdf->SetY(58);
                            $pdf->SetX(45);
                            $pdf->MultiCell(45, 5, utf8_decode($datoConcepto->Categoria), 0, 'C');
                            $pdf->SetY(56.5);
                            $pdf->SetX(90);
                            $pdf->SetFont('Arial', '', 5.5);
                            $pdf->MultiCell(184, 1.9, utf8_decode($datoConcepto->Concepto), 0, 'J');
                            /* ENCABEZADO DETALLE GENERADOR */
                            $pdf->SetFont('Arial', 'B', 8);
                            /* LINEA VERTICAL DESPUES DE LOCALIZACION */
                            $pdf->Line(45, 176, 45, 71);
                            /* LINEA VERTICAL EJE Y ENTRE EJE ABAJO DE LOCALIZACION */
                            $pdf->Line(18, 81, 18, 76);
                            /* LINEA VERTICAL DESPUES DE AREA */
                            $pdf->Line(90, 176, 90, 71);
                            /* LINEA VERTICAL DESPUES DE LARGO */
                            $pdf->Line(105, 176, 105, 71);
                            /* LINEA VERTICAL DESPUES DE ANCHO */
                            $pdf->Line(120, 176, 120, 71);
                            /* LINEA VERTICAL DESPUES DE ALTO */
                            $pdf->Line(135, 176, 135, 71);
                            /* LINEA VERTICAL DESPUES DE CANTIDAD */
                            $pdf->Line(155, 176, 155, 71);
                            /* LINEA VERTICAL DESPUES DE TOTAL */
                            $pdf->Line(175, 176, 175, 71);
                            /* LINEA VERTICAL DESPUES DE CORRECCION SUPERVISION */
                            $pdf->Line(200, 176, 200, 71);
                            /* LINEA VERTICAL DESPUES DE VOBO BANCOMER */
                            $pdf->Line(230, 176, 230, 71);
                            /* LINEA HORIZONTAL DE ENCABEZADO LOCALIZACION  */
                            $pdf->Line(5, 76, 45, 76);
                            /* LINEA HORIZONTAL DE ENCABEZADO COMPLETA */
                            $pdf->Line(5, 81, 274, 81);
                            /* TITULOS ENCABEZADO */
                            $pdf->SetY(71);
                            $pdf->SetX(5);
                            $pdf->SetFont('Arial', 'B', 7);
                            $pdf->Cell(40, 5, utf8_decode("LOCALIZACIÓN"), 1, 1, 'C');
                            $pdf->SetY(76);
                            $pdf->SetX(5);
                            $pdf->Cell(13, 5, utf8_decode("EJE"), 0, 1, 'C');
                            $pdf->SetY(76);
                            $pdf->SetX(18);
                            $pdf->Cell(27, 5, utf8_decode("ENTRE EJE"), 0, 1, 'C');
                            $pdf->SetY(73);
                            $pdf->SetX(45);
                            $pdf->Cell(45, 5, utf8_decode("AREA"), 0, 1, 'C');
                            $pdf->SetY(73);
                            $pdf->SetX(90);
                            $pdf->Cell(15, 5, utf8_decode("LARGO"), 0, 1, 'C');
                            $pdf->SetY(73);
                            $pdf->SetX(105);
                            $pdf->Cell(15, 5, utf8_decode("ANCHO"), 0, 1, 'C');
                            $pdf->SetY(73);
                            $pdf->SetX(120);
                            $pdf->Cell(15, 5, utf8_decode("ALTO"), 0, 1, 'C');
                            $pdf->SetY(73);
                            $pdf->SetX(137);
                            $pdf->Cell(15, 5, utf8_decode("CANTIDAD"), 0, 1, 'C');
                            $pdf->SetY(73);
                            $pdf->SetX(157);
                            $pdf->Cell(15, 5, utf8_decode("TOTAL"), 0, 1, 'C');
                            $pdf->SetY(71.5);
                            $pdf->SetX(175);
                            $pdf->MultiCell(25, 3, utf8_decode("CORRECCION SUPERVISIóN BBVA BANCOMER"), 0, 'C');
                            $pdf->SetY(73);
                            $pdf->SetX(202);
                            $pdf->MultiCell(25, 3, utf8_decode("VoBo BBVA BANCOMER"), 0, 'C');
                            $pdf->SetY(73);
                            $pdf->SetX(230);
                            $pdf->MultiCell(44, 5, utf8_decode("CONFORMIDAD EMPRESA "), 0, 'C');
                            $Y = 81;
                            $pdf->SetY($Y);
                            $registros = 0;
                        }
                    }
                }
                /* FIN DETALLE  */
                $pdf->SetTextColor(0, 0, 0);
                /* TOTALES */
                /* Etiqueta Total */
                $pdf->Rect(135, 176, 20, 5);
                /* Importe Total */
                $pdf->Rect(155, 176, 20, 5);
                /* Total Unidad */
                $pdf->Rect(175, 176, 25, 5);
                $pdf->SetFont('Arial', 'B', 7);
                $pdf->SetY(176);
                $pdf->SetX(135);
                $pdf->Cell(20, 5, utf8_decode("TOTAL:"), 0, 1, 'C');
                $pdf->SetY(176);
                $pdf->SetX(155);
                if ($datoConcepto->Cantidad < 0) {
                    $pdf->SetTextColor(230, 0, 0);
                } else {
                    $pdf->SetTextColor(0, 0, 0);
                }
                $pdf->Cell(20, 5, number_format($datoConcepto->Cantidad, 3), 0, 1, 'C');
                $pdf->SetTextColor(0, 0, 0);
                $pdf->SetY(176);
                $pdf->SetX(175);
                $pdf->Cell(25, 5, utf8_decode($datoConcepto->Unidad), 0, 1, 'C');
                /* FIN DETALLE  */
            }
            /* FIN CUERPO */
            $path = 'uploads/Reportes/' . $ID;
            // print $path;
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file_name = "NUMEROS GENERADORES " . $datoConcepto->Cliente . " " . date("Y-m-d His");
            $url = $path . '/' . $file_name . '.pdf';
            /* Borramos el archivo anterior */
            if (delete_files('uploads/Reportes/' . $ID)) {
                
            }

            $pdf->Output($url);
            print base_url() . $url;
        }
    }

    public function onReporteCroquis() {
        // Creación del objeto de la clase heredada
        $pdf = new PDF('L', 'mm', array(279/* ANCHO */, 216/* ALTURA */));
        $pdf->AliasNbPages();
        $ID = $_POST['ID'];
        $Concepto = $this->trabajo_model->getDetalleCroquis($ID);

        if (!empty($Concepto)) {
            foreach ($Concepto as $i => $datoConcepto) {
                $pdf->AddPage();
                $pdf->SetAutoPageBreak(false, 300);


                $pdf->SetY(1);
                $pdf->SetX(3);
                $pdf->SetFont('Arial', '', 7.5);
                $pdf->Cell(11, 5, $datoConcepto->TrabajoID, 0, 0, 'L');

                /* ENCABEZADO */
                // Logo
                $pdf->Image(base_url() . utf8_decode($datoConcepto->LogoCliente), 5, 5, 40);
                // Arial bold 15
                $pdf->SetFont('Arial', 'B', 9);
                // Título
                $pdf->SetY(5);
                // Movernos a la derecha
                $pdf->Cell(75);
                $pdf->Cell(125, 25, utf8_decode("REPORTE CROQUIS"), 0, 0, 'C');
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->SetY(5);
                $pdf->SetX(180);
                $pdf->MultiCell(93, 3.5, utf8_decode($datoConcepto->LeyendaReporte), 0, 'R');
                /* CUERPO */
                $pdf->SetY(25);
                $pdf->SetLineWidth(0.4);
                /* INICIA  EN LA ESQUINA DE EMPRESA */
                $pdf->Rect(164, 25, 110, 22);
                /* INICIA EN LA ESQUINA DE OBRA */
                $pdf->Rect(5, 32, 269, 15);
                /* INICIA EN LA ESQUINA DE CLAVE */
                $pdf->Rect(5, 49.5, 269, 19);
                /* INICIA EN LA ESQUINA CONTENEDOR PRINCIPAL */
                $pdf->Rect(5, 71, 269, 105);
                /* LINEA VERTICAL DELANTE DE EMPRESA Y UBICACIÓN */
                $pdf->Line(45, 32, 45, 47);
                /* LINEA VERTICAL ENTRE EMPRESA, UNIDAD, PZA */
                $pdf->Line(214, 25, 214, 47);
                /* LINEA HORIZONTAL DEBAJO DE OBRA, UNIDAD Y ARRIBA DE UBICACIÓN Y PZA */
                $pdf->Line(5, 38, 274, 38);
                /* LINEA VERTICAL DELANTE DE CLAVE */
                $pdf->Line(45, 49.5, 45, 68);
                /* LINEA VERTICAL  DE PARTIDA */
                $pdf->Line(90, 49.5, 90, 68);
                /* LINEA HORIZONTAL DEBAJO DE CLAVE, PARTIDA Y CONCEPTO */
                $pdf->Line(5, 56, 274, 56);
                /* TITULOS */
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->SetY(33);
                $pdf->SetX(20);
                $pdf->Cell(55, 5, "OBRA: ", 0, 1);
                $pdf->SetY(39);
                $pdf->SetX(15);
                $pdf->Cell(55, 5, utf8_decode("UBICACIÓN: "), 0, 1);
                $pdf->SetY(26);
                $pdf->SetX(163);
                $pdf->Cell(55, 5, utf8_decode("EMPRESA: "), 0, 1, 'C');
                $pdf->SetY(33);
                $pdf->SetX(163);
                $pdf->Cell(55, 5, utf8_decode("UNIDAD "), 0, 1, 'C');
                $pdf->SetY(33);
                $pdf->SetX(216);
                $pdf->Cell(55, 5, utf8_decode("HOJA "), 0, 1, 'C');
                $pdf->SetY(51);
                $pdf->SetX(15);
                $pdf->Cell(20, 5, utf8_decode("CLAVE "), 0, 1, 'C');
                $pdf->SetY(51);
                $pdf->SetX(60);
                $pdf->Cell(15, 5, utf8_decode("PARTIDA "), 0, 1, 'C');
                $pdf->SetY(51);
                $pdf->SetX(164);
                $pdf->Cell(15, 5, utf8_decode("CONCEPTO"), 0, 1, 'C');
                /* DATOS */
                $pdf->SetY(33);
                $pdf->SetX(46);
                $pdf->SetFont('Arial', '', 7);
                $pdf->Cell(115, 5, utf8_decode($datoConcepto->CR . ' - ' . $datoConcepto->Sucursal), 0, 1);
                $pdf->SetY(26);
                $pdf->SetX(214);
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->Cell(60, 5, utf8_decode($datoConcepto->Empresa), 0, 1, 'C');
                $pdf->SetY(38.5);
                $pdf->SetX(46);
                $pdf->SetFont('Arial', '', 7);
                $pdf->MultiCell(115, 4, utf8_decode($datoConcepto->Direccion), 0, 1);
                $pdf->SetY(40);
                $pdf->SetX(164);
                $pdf->SetFont('Arial', '', 8);
                $pdf->Cell(50, 5, utf8_decode($datoConcepto->Unidad), 0, 1, 'C');
                $pdf->SetY(40);
                $pdf->SetX(219);
                $pdf->Cell(0, 5, $pdf->PageNo() . ' DE {nb}', 0, 0, 'C');
                $pdf->SetY(58);
                $pdf->SetX(5);
                $pdf->Cell(40, 5, utf8_decode($datoConcepto->Clave), 0, 1, 'C');
                $pdf->SetY(58);
                $pdf->SetX(45);
                $pdf->MultiCell(45, 5, utf8_decode($datoConcepto->Categoria), 0, 'C');
                $pdf->SetY(56.5);
                $pdf->SetX(90);
                $pdf->SetFont('Arial', '', 5.5);
                $pdf->MultiCell(184, 1.9, utf8_decode($datoConcepto->Concepto), 0, 'J');
                /* DETALLE GENERADOR */
                /* ENCIERRA LA PALABRA croquis o anexo */
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->Rect(5, 71, 40, 6);
                $pdf->SetY(71);
                $pdf->SetX(5);
                $pdf->Cell(35, 6, utf8_decode("CROQUIS O ANEXO "), 0, 1, 'L');
                /* DETALLE IMAGENES */
                $pdf->Image(utf8_decode($datoConcepto->Url), 30, 79, 0, 94);
                /* FIN DETALLE IMAGENES */
                /* FIRMAS */
                /* ELABORÓ */
                $pdf->SetFont('Arial', '', 8);
                $pdf->SetY(183);
                $pdf->SetX(5);
                $pdf->Cell(80, 5, utf8_decode("ELABORÓ"), 0, 1, 'C');
                $pdf->SetY(203);
                $pdf->SetX(5);
                $pdf->Cell(80, 5, utf8_decode($datoConcepto->Firma1), 'T', 1, 'C');
                /* REVISÓ */
                $pdf->SetY(183);
                $pdf->SetX(100);
                $pdf->Cell(80, 5, utf8_decode("REVISÓ"), 0, 1, 'C');
                /* LINEA HORIZONTAL REVISÓ */
                $pdf->SetY(203);
                $pdf->SetX(100);
                $pdf->Cell(80, 5, utf8_decode($datoConcepto->Firma2), 'T', 1, 'C');
                /* AUTORIZO */
                $pdf->SetY(183);
                $pdf->SetX(195);
                $pdf->Cell(80, 5, utf8_decode("AUTORIZÓ"), 0, 1, 'C');
                /* LINEA HORIZONTAL AUTORIZÓ */
                $pdf->SetY(203);
                $pdf->SetX(195);
                $pdf->Cell(80, 5, utf8_decode($datoConcepto->Firma3), 'T', 1, 'C');
                /* FIRMAS */
                /* ELABORÓ */
            }
            /* FIN CUERPO */
            /* FIN CUERPO */
            $path = 'uploads/Reportes/' . $ID;
            // print $path;
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file_name = "REPORTE CROQUIS " . $datoConcepto->Cliente . " " . date("Y-m-d His");
            $url = $path . '/' . $file_name . '.pdf';
            /* Borramos el archivo anterior */
            if (delete_files('uploads/Reportes/' . $ID)) {
                
            }

            $pdf->Output($url);
            print base_url() . $url;
        }
    }

    public function onReporteFotografico() {
        try {
            if (isset($_POST["ID"])) {
                $ID = $this->input->post("ID");
                $Concepto = $this->trabajo_model->getDetalleFotos($ID);

                if (!empty($Concepto)) {
                    $pages_added = false;
                    $pdf = new FotosFPDF('L', 'mm', array(279/* ANCHO */, 216/* ALTURA */));
                    $nfotosxconcepto = 0;
                    foreach ($Concepto as $i => $row) {
                        /* ENCABEZADO */
                        $pdf->Logo = base_url() . utf8_decode($row->LogoCliente);
                        $pdf->Cr = $row->CR;
                        $pdf->Sucursal = $row->Sucursal;
                        $pdf->Empresa = $row->Empresa;
                        $pdf->Direccion = $row->Direccion;
                        $pdf->Unidad = $row->Unidad;
                        $pdf->Clave = $row->Clave;
                        $pdf->Categoria = $row->Categoria;
                        $pdf->Concepto = $row->Concepto;
                        $pdf->Firma1 = $row->Firma1;
                        $pdf->Firma2 = $row->Firma2;
                        $pdf->Firma3 = $row->Firma3;
                        $pdf->LeyendaReporte = $row->LeyendaReporte;




                        /* DETALLE IMAGENES */
                        $fotos = $this->trabajo_model->getDetalleFotosXID($row->ID, $ID);

                        $nfotos = count($fotos);
                        $fnfotos = count($fotos);
                        $nimg = 0;
                        $pdf->AliasNbPages();
                        if (!$pages_added) {
                            $pdf->AddPage();
                            $pdf->SetY(1);
                            $pdf->SetX(3);
                            $pdf->SetFont('Arial', '', 7.5);
                            $pdf->Cell(11, 5, $row->TrabajoID, 0, 0, 'L');
                        }
                        foreach ($fotos as $key => $foto) {
                            $nimg += 1;
                            /* ANTES */
                            /* Valida el tamaño de la imagen para saber si la pone más pequeña */
                            $dimensiones = getimagesize(utf8_decode($foto->Url));
                            /* Ancho $dimensiones[0] */
                            /* Alto $dimensiones[1] */
                            $YCuandoSonTres = 85;
                            $withCuandoSonTres = 84;
                            $withCuandoSonDos = 115;
                            $withCuandoEsUna = 115;
                            if ($dimensiones[1] > $dimensiones[0]) {
                                $YCuandoSonTres = 80;
                                $withCuandoSonTres = 50;
                                $withCuandoSonDos = 50;
                                $withCuandoEsUna = 50;
                            }
                            /* CUANDO SOLO SON DOS FOTOS Y ES LA PRIMERA */
                            if ($nimg == 1 && $nfotos > 1 && $nfotos == 2) {
                                $pdf->Image($foto->Url, 20/* X */, 80/* Y */, $withCuandoSonDos/* W *//* En blanco mantiene aspecto H */);
                            } else if ($nimg == 1 && $nfotos > 1) {
                                $pdf->Image($foto->Url, 10/* X */, $YCuandoSonTres/* Y */, $withCuandoSonTres/* W *//* En blanco mantiene aspecto H */);
                            } else if ($nimg == 1 && $nfotos == 1) {
                                /* CUANDO SOLO TIENE UNA IMAGEN EL CONCEPTO O UN CONCEPTO ANTERIOR YA SOLO LE FALTABA UNA IMAGEN */
                                $pdf->Image($foto->Url, 85/* X */, 80/* Y */, $withCuandoEsUna/* W *//* En blanco mantiene aspecto H */);
                            }
                            /* CUANDO SOLO SON DOS FOTOS Y ES LA SEGUNDA */
                            if ($nimg == 2 && $fnfotos == 2) {
                                $pdf->Image($foto->Url, 145/* X */, 80/* Y */, $withCuandoSonDos/* W *//* En blanco mantiene aspecto H */);
                            }
                            /* Cuando es la segunda imagen pero hay más por imprimir */ else if ($nimg == 2 && $nfotos >= 2) {
                                $pdf->Image($foto->Url, 97/* X */, $YCuandoSonTres/* Y */, $withCuandoSonTres/* W *//* En blanco mantiene aspecto H */);
                            }
                            /* Cuando al concepto le faltaba una imagen y solo quedan dos por imprimir */ else if ($nimg == 2 && $nfotos == 1) {
                                $pdf->Image($foto->Url, 145/* X */, 80/* Y */, $withCuandoSonDos/* W *//* En blanco mantiene aspecto H */);
                            }
                            /* Cuando es la tercera imagen */
                            if ($nimg == 3) {
                                $pdf->Image($foto->Url, 185/* X */, $YCuandoSonTres/* Y */, $withCuandoSonTres/* W *//* En blanco mantiene aspecto H */);
                            }
                            $nfotos--;
                            if ($nimg == 3 && $nfotos > 0) {
                                $pages_added = true;
                                $pdf->AddPage();
                                $nimg = 0;
                            } else {
                                $pages_added = false;
                            }
                        }
                        /* FIN DETALLE IMAGENES */
                    }
                    /* FIN CUERPO */
                    $path = 'uploads/Reportes/' . $ID;
                    // print $path;
                    if (!file_exists($path)) {
                        mkdir($path, 0777, true);
                    }
                    $file_name = "REPORTE FOTOGRAFICO " . $row->Cliente . " " . date("Y-m-d His");
                    $url = $path . '/' . $file_name . '.pdf';
                    /* Borramos el archivo anterior */
                    if (delete_files('uploads/Reportes/' . $ID)) {
                        
                    }

                    $pdf->Output($url);
                    print base_url() . $url;
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onReporteLevantamientoAntes() {
        try {
            if (isset($_POST["ID"])) {
                $ID = $this->input->post("ID");
                $Concepto = $this->trabajo_model->getDetalleFotosAntes($ID);
                if (!empty($Concepto)) {
                    $pages_added = false;
                    $pdf = new FotosFPDLA('L', 'mm', array(279/* ANCHO */, 216/* ALTURA */));
                    $nfotosxconcepto = 0;
                    foreach ($Concepto as $i => $row) {
                        /* ENCABEZADO */
                        $pdf->CrL = $row->CR;
                        $pdf->SucursalL = $row->Sucursal;
                        $pdf->EmpresaL = $row->Empresa;
                        $pdf->ConceptoL = $row->Concepto;
                        $pdf->ClienteL = $row->Cliente;
                        $pdf->DireccionL = $row->Direccion;
                        /* DETALLE IMAGENES */
                        $pdf->SetFont('Arial', 'I', 16);
                        $pdf->AddPage();
                        $pdf->SetX(5);
                        $pdf->SetY(100);
                        $pdf->MultiCell(260, 6, strtoupper(utf8_decode($row->Concepto)), 0, 'C');
                        $fotos = $this->trabajo_model->getDetalleFotosAntesXID($row->ID, $ID);
                        $nfotos = count($fotos);
                        $fnfotos = count($fotos);
                        $nimg = 0;
                        $pdf->AliasNbPages();
                        if (!$pages_added) {
                            $pdf->AddPage();
                        }
                        foreach ($fotos as $key => $foto) {
                            /* Valida el tamaño de la imagen para saber si la pone más pequeña */
                            $dimensiones = getimagesize(utf8_decode($foto->Url));
                            /* Ancho $dimensiones[0] */
                            /* Alto $dimensiones[1] */
                            $YCuandoSonTres = 85;
                            $YCuandoSonDos = 80;
                            $widthSonDos = 115;
                            $YCuandoEsUno = 80;
                            $widthEsUno = 115;
                            if ($dimensiones[1] > $dimensiones[0]) {
                                $YCuandoSonTres = 52;
                                $YCuandoSonDos = 52;
                                $widthSonDos = 82;
                                $YCuandoEsUno = 52;
                                $widthEsUno = 82;
                            }

                            $nimg += 1;
                            /* CUANDO SOLO SON DOS FOTOS Y ES LA PRIMERA */
                            if ($nimg == 1 && $nfotos > 1 && $nfotos == 2) {
                                $pdf->Image($foto->Url, 20/* X */, $YCuandoSonDos/* Y */, $widthSonDos/* W *//* H */);
                            } else if ($nimg == 1 && $nfotos > 1) {
                                $pdf->Image($foto->Url, 10/* X */, $YCuandoSonTres/* Y */, 84/* W *//* H */);
                            } else if ($nimg == 1 && $nfotos == 1) {
                                /* CUANDO SOLO TIENE UNA IMAGEN EL CONCEPTO O UN CONCEPTO ANTERIOR YA SOLO LE FALTABA UNA IMAGEN */
                                $pdf->Image($foto->Url, 85/* X */, $YCuandoEsUno/* Y */, $widthEsUno/* W *//* H */);
                            }
                            /* CUANDO SOLO SON DOS FOTOS Y ES LA SEGUNDA */
                            if ($nimg == 2 && $fnfotos == 2) {
                                $pdf->Image($foto->Url, 145/* X */, $YCuandoSonDos/* Y */, $widthSonDos/* W *//* H */);
                            }
                            /* Cuando es la segunda imagen pero hay más por imprimir */ else if ($nimg == 2 && $nfotos >= 2) {
                                $pdf->Image($foto->Url, 97/* X */, $YCuandoSonTres/* Y */, 84/* W *//* H */);
                            }
                            /* Cuando al concepto le faltaba una imagen y solo quedan dos por imprimir */ else if ($nimg == 2 && $nfotos == 1) {
                                $pdf->Image($foto->Url, 145/* X */, $YCuandoSonDos/* Y */, $widthSonDos/* W *//* H */);
                            }
                            /* Cuando es la tercera imagen */
                            if ($nimg == 3) {
                                $pdf->Image($foto->Url, 185/* X */, $YCuandoSonTres/* Y */, 84/* W *//* H */);
                            }
                            $nfotos--;

                            //Se pone para que valide antes de agregar
                            if ($nimg == 3 && $nfotos > 0) {
                                $pages_added = true;
                                $pdf->AddPage();
                                $nimg = 0;
                            } else {
                                $pages_added = false;
                            }
                        }
                        /* FIN DETALLE IMAGENES */
                    }
                    /* FIN CUERPO */
                    $path = 'uploads/Reportes/' . $ID;
                    // print $path;
                    if (!file_exists($path)) {
                        mkdir($path, 0777, true);
                    }
                    $file_name = "REPORTE FOTOS ANTES " . $row->Cliente . " " . date("Y-m-d His");
                    $url = $path . '/' . $file_name . '.pdf';
                    /* Borramos el archivo anterior */
                    if (delete_files('uploads/Reportes/' . $ID)) {
                        
                    }

                    $pdf->Output($url);
                    print base_url() . $url;
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onReporteLevantamientoDespues() {
        try {
            if (isset($_POST["ID"])) {
                $ID = $this->input->post("ID");
                $Concepto = $this->trabajo_model->getDetalleFotosDespues($ID);
                if (!empty($Concepto)) {
                    $pages_added = false;
                    $pdf = new FotosFPDLD('L', 'mm', array(279/* ANCHO */, 216/* ALTURA */));
                    $nfotosxconcepto = 0;
                    foreach ($Concepto as $i => $row) {
                        /* ENCABEZADO */
                        $pdf->CrL = $row->CR;
                        $pdf->SucursalL = $row->Sucursal;
                        $pdf->EmpresaL = $row->Empresa;
                        $pdf->ConceptoL = $row->Concepto;
                        $pdf->ClienteL = $row->Cliente;
                        $pdf->DireccionL = $row->Direccion;
                        $pdf->SetFont('Arial', 'I', 16);
                        $pdf->AddPage();
                        $pdf->SetX(5);
                        $pdf->SetY(100);
                        $pdf->MultiCell(260, 6, strtoupper(utf8_decode($row->Concepto)), 0, 'C');
                        /* DETALLE IMAGENES */
                        $fotos = $this->trabajo_model->getDetalleFotosDespuesXID($row->ID);
                        $nfotos = count($fotos);
                        $fnfotos = count($fotos);
                        $nimg = 0;
                        $pdf->AliasNbPages();
                        if (!$pages_added) {
                            $pdf->AddPage();
                        }
                        foreach ($fotos as $key => $foto) {

                            $nimg += 1;
                            /* ANTES */
                            /* Valida el tamaño de la imagen para saber si la pone más pequeña */
                            $dimensiones = getimagesize(utf8_decode($foto->Url));
                            /* Ancho $dimensiones[0] */
                            /* Alto $dimensiones[1] */
                            $YCuandoSonTres = 85;
                            $YCuandoSonDos = 80;
                            $widthSonDos = 115;
                            $YCuandoEsUno = 80;
                            $widthEsUno = 115;
                            if ($dimensiones[1] > $dimensiones[0]) {
                                $YCuandoSonTres = 52;
                                $YCuandoSonDos = 52;
                                $widthSonDos = 82;
                                $YCuandoEsUno = 52;
                                $widthEsUno = 82;
                            }
                            /* CUANDO SOLO SON DOS FOTOS Y ES LA PRIMERA */
                            if ($nimg == 1 && $nfotos > 1 && $nfotos == 2) {
                                $pdf->Image($foto->Url, 20/* X */, $YCuandoSonDos/* Y */, $widthSonDos/* W *//* H */);
                            } else if ($nimg == 1 && $nfotos > 1) {
                                $pdf->Image($foto->Url, 10/* X */, $YCuandoSonTres/* Y */, 84/* W *//* H */);
                            } else if ($nimg == 1 && $nfotos == 1) {
                                /* CUANDO SOLO TIENE UNA IMAGEN EL CONCEPTO O UN CONCEPTO ANTERIOR YA SOLO LE FALTABA UNA IMAGEN */
                                $pdf->Image($foto->Url, 85/* X */, $YCuandoEsUno/* Y */, $widthEsUno/* W *//* H */);
                            }
                            /* CUANDO SOLO SON DOS FOTOS Y ES LA SEGUNDA */
                            if ($nimg == 2 && $fnfotos == 2) {
                                $pdf->Image($foto->Url, 145/* X */, $YCuandoSonDos/* Y */, $widthSonDos/* W *//* H */);
                            }
                            /* Cuando es la segunda imagen pero hay más por imprimir */ else if ($nimg == 2 && $nfotos >= 2) {
                                $pdf->Image($foto->Url, 97/* X */, $YCuandoSonTres/* Y */, 84/* W *//* H */);
                            }
                            /* Cuando al concepto le faltaba una imagen y solo quedan dos por imprimir */ else if ($nimg == 2 && $nfotos == 1) {
                                $pdf->Image($foto->Url, 145/* X */, $YCuandoSonDos/* Y */, $widthSonDos/* W *//* H */);
                            }
                            /* Cuando es la tercera imagen */
                            if ($nimg == 3) {
                                $pdf->Image($foto->Url, 185/* X */, $YCuandoSonTres/* Y */, 84/* W *//* H */);
                            }
                            $nfotos--;
                            //Se pone para que valide antes de agregar
                            if ($nimg == 3 && $nfotos > 0) {
                                $pages_added = true;
                                $pdf->AddPage();
                                $nimg = 0;
                            } else {
                                $pages_added = false;
                            }
                        }
                        /* FIN DETALLE IMAGENES */
                    }
                    /* FIN CUERPO */
                    $path = 'uploads/Reportes/' . $ID;
                    // print $path;
                    if (!file_exists($path)) {
                        mkdir($path, 0777, true);
                    }
                    $file_name = "REPORTE FOTOS DESPUES " . $row->Cliente . " " . date("Y-m-d His");
                    $url = $path . '/' . $file_name . '.pdf';
                    /* Borramos el archivo anterior */
                    if (delete_files('uploads/Reportes/' . $ID)) {
                        
                    }
                    $pdf->Output($url);
                    print base_url() . $url;
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onReporteLevantamientoProceso() {
        try {
            if (isset($_POST["ID"])) {
                $ID = $this->input->post("ID");
                $Concepto = $this->trabajo_model->getDetalleFotosProceso($ID);
                //
                if (!empty($Concepto)) {
                    $pages_added = false;
                    $pdf = new FotosFPDLP('L', 'mm', array(279/* ANCHO */, 216/* ALTURA */));
                    $nfotosxconcepto = 0;
                    foreach ($Concepto as $i => $row) {
                        /* ENCABEZADO */
                        $pdf->CrL = $row->CR;
                        $pdf->SucursalL = $row->Sucursal;
                        $pdf->EmpresaL = $row->Empresa;
                        $pdf->ConceptoL = $row->Concepto;
                        $pdf->ClienteL = $row->Cliente;
                        $pdf->DireccionL = $row->Direccion;
                        $pdf->SetFont('Arial', 'I', 16);
                        $pdf->AddPage();
                        $pdf->SetX(5);
                        $pdf->SetY(100);
                        $pdf->MultiCell(260, 6, strtoupper(utf8_decode($row->Concepto)), 0, 'C');
                        /* DETALLE IMAGENES */
                        $Contador_Tiempo = 0;
                        $Tiempos = $this->trabajo_model->getTiempoFotosProcesoDetalleByIDConcepto($row->ID);
                        foreach ($Tiempos as $key => $dTiempo) {
                            $fotos = $this->trabajo_model->getDetalleFotosProcesoXID($row->ID, $dTiempo->Tiempo);
                            $nfotos = count($fotos);
                            $fnfotos = count($fotos);
                            $nimg = 0;
                            $pdf->AliasNbPages();
                            if (!$pages_added) {
                                $pdf->AddPage();
                            }
                            $Contador_Tiempo = 1;
                            foreach ($fotos as $key => $foto) {
                                $nimg += 1;
                                /* ANTES */
                                /* Valida el tamaño de la imagen para saber si la pone más pequeña */
                                $dimensiones = getimagesize(utf8_decode($foto->Url));
                                /* Ancho $dimensiones[0] */
                                /* Alto $dimensiones[1] */
                                $YCuandoSonTres = 85;
                                $YCuandoSonDos = 80;
                                $widthSonDos = 115;
                                $YCuandoEsUno = 80;
                                $widthEsUno = 115;

                                if ($Contador_Tiempo === 1) {
                                    $pdf->SetFont('Arial', '', 14);
                                    $pdf->SetY(40);
                                    $pdf->SetX(0);
                                    $TiempoDef = ($row->ControlProceso === 'Semanas') ? "Semana No. " : "Día No. ";
                                    $pdf->Cell(279, 5, $TiempoDef . $dTiempo->Tiempo . '  Porcentaje: ' . $dTiempo->Porcentaje, 0, 0, 'C');
                                    $Contador_Tiempo = 0;
                                }

                                if ($dimensiones[1] > $dimensiones[0]) {
                                    $YCuandoSonTres = 52;
                                    $YCuandoSonDos = 52;
                                    $widthSonDos = 82;
                                    $YCuandoEsUno = 52;
                                    $widthEsUno = 82;
                                }
                                /* CUANDO SOLO SON DOS FOTOS Y ES LA PRIMERA */
                                if ($nimg == 1 && $nfotos > 1 && $nfotos == 2) {
                                    $pdf->Image($foto->Url, 20/* X */, $YCuandoSonDos/* Y */, $widthSonDos/* W *//* H */);
                                } else if ($nimg == 1 && $nfotos > 1) {
                                    $pdf->Image($foto->Url, 10/* X */, $YCuandoSonTres/* Y */, 84/* W *//* H */);
                                } else if ($nimg == 1 && $nfotos == 1) {
                                    /* CUANDO SOLO TIENE UNA IMAGEN EL CONCEPTO O UN CONCEPTO ANTERIOR YA SOLO LE FALTABA UNA IMAGEN */
                                    $pdf->Image($foto->Url, 85/* X */, $YCuandoEsUno/* Y */, $widthEsUno/* W *//* H */);
                                }
                                /* CUANDO SOLO SON DOS FOTOS Y ES LA SEGUNDA */
                                if ($nimg == 2 && $fnfotos == 2) {
                                    $pdf->Image($foto->Url, 145/* X */, $YCuandoSonDos/* Y */, $widthSonDos/* W *//* H */);
                                }
                                /* Cuando es la segunda imagen pero hay más por imprimir */ else if ($nimg == 2 && $nfotos >= 2) {
                                    $pdf->Image($foto->Url, 97/* X */, $YCuandoSonTres/* Y */, 84/* W *//* H */);
                                }
                                /* Cuando al concepto le faltaba una imagen y solo quedan dos por imprimir */ else if ($nimg == 2 && $nfotos == 1) {
                                    $pdf->Image($foto->Url, 145/* X */, $YCuandoSonDos/* Y */, $widthSonDos/* W *//* H */);
                                }
                                /* Cuando es la tercera imagen */
                                if ($nimg == 3) {
                                    $pdf->Image($foto->Url, 185/* X */, $YCuandoSonTres/* Y */, 84/* W *//* H */);
                                }
                                $nfotos--;
                                //Se pone para que valide antes de agregar
                                if ($nimg == 3 && $nfotos > 0) {
                                    $pages_added = true;
                                    $pdf->AddPage();
                                    $nimg = 0;
                                    $Contador_Tiempo = 1;
                                } else {
                                    $pages_added = false;
                                }
                            }
                            /* FIN DETALLE IMAGENES */
                        }
                    }
                    /* FIN CUERPO */
                    $path = 'uploads/Reportes/' . $ID;
                    // print $path;
                    if (!file_exists($path)) {
                        mkdir($path, 0777, true);
                    }
                    $file_name = "REPORTE FOTOS PROCESO " . $row->Cliente . " " . date("Y-m-d His");
                    $url = $path . '/' . $file_name . '.pdf';
                    /* Borramos el archivo anterior */
                    if (delete_files('uploads/Reportes/' . $ID)) {
                        
                    }
                    $pdf->Output($url);
                    print base_url() . $url;
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onReporteLevantamientoCompleto() {
        try {
            if (isset($_POST["ID"])) {
                $ID = $this->input->post("ID");
                $Concepto = $this->trabajo_model->getDetalleFotosAntes($ID);
                if (!empty($Concepto)) {
                    $pages_added = false;
                    $pdf = new FotosFPDLC('L', 'mm', array(279/* ANCHO */, 216/* ALTURA */));
                    foreach ($Concepto as $i => $row) {
                        $pdf->SetTextColor(0, 0, 0);
                        /* ENCABEZADO */
                        $pdf->CrL = $row->CR;
                        $pdf->SucursalL = $row->Sucursal;
                        $pdf->EmpresaL = $row->Empresa;
                        $pdf->ConceptoL = $row->Concepto;
                        $pdf->ClienteL = $row->Cliente;
                        /* DETALLE IMAGENES */
                        $fotosAntes = $this->trabajo_model->getDetalleFotosAntesXID($row->ID, $ID);
                        $fotosDespues = $this->trabajo_model->getDetalleFotosDespuesXID($row->ID);
                        /* ANTES Y DESPUES */

                        $nfotos = count($fotosAntes);
                        $nantes = 0;
                        $ndespues = 0;
                        $nimg = 0;
                        $pdf->AliasNbPages();
                        $xfotos = array_merge($fotosAntes, $fotosDespues);
                        $nfotos = count($xfotos);

                        /* CONVERSION A INDICES DE FOTOS ANTES */
                        $array_fotos_antes = array_values($fotosAntes);

                        /* CONVERSION A INDICES DE FOTOS DESPUES */
                        $array_fotos_despues = array_values($fotosDespues);

                        /* CONTAR CUANTAS FOTOS SON (ANTES + DESPUES) */
                        $xfotos_count = (count($array_fotos_antes) + count($array_fotos_despues));

                        /* CONTADOR DE FOTOS DESPUES */
                        $nfotos_antes = count($array_fotos_antes);
                        $nfotos_antes_count = $nfotos_antes;

                        /* CONTADOR DE FOTOS DESPUES */
                        $nfotos_despues = count($array_fotos_despues);
                        $nfotos_despues_count = $nfotos_despues;

                        $nfotos = $xfotos_count;
//                    var_dump($fotos_antes_despues);
                        if (!$pages_added) {
                            $pdf->AddPage();
                        }
                        $pdf->SetFont('Arial', 'B', 7);
                        $fotos_antes_add = 0;
                        $fotos_despues_add = 0;
                        $pdf->SetTextColor(255, 0, 0);
                        for ($index = 0; $index < $xfotos_count; $index++) {

                            if (isset($array_fotos_antes[$index])) {
                                $nantes += 1;
                                /* AQUI VAN LAS VALIDACIONES DE TAMAÑO */
                                /* Valida el tamaño de la imagen para saber si la pone más pequeña */
                                $ancho_alto = getimagesize(utf8_decode($array_fotos_antes[$index]->Url));
                                $ancho = $ancho_alto[0];
                                $alto = $ancho_alto[1];

                                $x_antes_columna_uno = 10;
                                $y_antes_columna_uno = 45;

                                $x_antes_columna_dos = 75;
                                $y_antes_columna_dos = 125;

                                $x_antes_columna_solas = 20;

                                /* VALIDACION DE 1 FOTO */
                                if ($nantes == 1 && $nfotos_antes == 1 && $nfotos_antes_count <= 4) {
                                    $ancho = ($alto > $ancho) ? 85 : 120;
                                    $pdf->Image($array_fotos_antes[$index]->Url, $x_antes_columna_uno/* X */, $y_antes_columna_uno/* Y */, $ancho/* W *//* H */);
                                }
                                /* VALIDACION DE 2 FOTOS */
                                /* Primera imagen */
                                if ($nantes == 1 && $nfotos_antes == 2 && $nfotos_antes_count == 2) {
                                    $ancho = ($alto > $ancho) ? 40 : 100;
                                    $pdf->Image($array_fotos_antes[$index]->Url, $x_antes_columna_solas/* X */, $y_antes_columna_uno/* Y */, $ancho/* W *//* H */);
                                }
                                /* Segunda Imagen */ else
                                if ($nantes == 2 && $nfotos_antes == 1 && $nfotos_antes_count == 2) {
                                    $ancho = ($alto > $ancho) ? 40 : 100;
                                    $pdf->Image($array_fotos_antes[$index]->Url, $x_antes_columna_solas/* X */, $y_antes_columna_dos/* Y */, $ancho/* W *//* H */);
                                }
                                /* Cuando son mas de dos */ else
                                if ($nantes == 2 && $nfotos_antes > 1) {
                                    $ancho = ($alto > $ancho) ? 40 : 60;
                                    $pdf->Image($array_fotos_antes[$index]->Url, $x_antes_columna_dos/* X */, $y_antes_columna_uno/* Y */, $ancho/* W *//* H */);
                                }
                                /* VALIDACION 2 IMAGENES EN OTRAS PAGINAS */
                                /* Cuando ya solo quedan dos y es la primera */ else
                                if ($nantes == 1 && $nfotos_antes == 2) {
                                    $ancho = ($alto > $ancho) ? 40 : 100;
                                    $pdf->Image($array_fotos_antes[$index]->Url, $x_antes_columna_solas/* X */, $y_antes_columna_uno/* Y */, $ancho/* W *//* H */);
                                }
                                /* Cuando ya solo quedan dos y es la segunda */ else
                                if ($nantes == 2 && $nfotos_antes == 1) {
                                    $ancho = ($alto > $ancho) ? 40 : 100;
                                    $pdf->Image($array_fotos_antes[$index]->Url, $x_antes_columna_solas/* X */, $y_antes_columna_dos/* Y */, $ancho/* W *//* H */);
                                }
                                /* VALIDA 3 IMAGENES */
                                /* Primer imagen */
                                if ($nantes == 1 && $nfotos_antes == 3 && $nfotos_antes_count == 3) {
                                    $ancho = ($alto > $ancho) ? 40 : 60;
                                    $pdf->Image($array_fotos_antes[$index]->Url, $x_antes_columna_uno/* X */, $y_antes_columna_uno/* Y */, $ancho/* W *//* H */);
                                } else
                                if ($nantes == 3 && $nfotos_antes == 1 && $nfotos_antes_count == 3) {
                                    $ancho = ($alto > $ancho) ? 40 : 100;
                                    $pdf->Image($array_fotos_antes[$index]->Url, $x_antes_columna_solas/* X */, $y_antes_columna_dos/* Y */, $ancho/* W *//* H */);
                                }
                                /* VALIDACION CUANDO SUPERA LAS 4 FOTOS DURANTE VARIAS PAGINAS */
                                if ($nantes == 1 && $nfotos_antes == 1 && $nfotos_antes_count >= 4) {
                                    $ancho = ($alto > $ancho) ? 85 : 100;
                                    $pdf->Image($array_fotos_antes[$index]->Url, $x_antes_columna_solas/* X */, $y_antes_columna_uno/* Y */, $ancho/* W *//* H */);
                                }
                                /* Cundo es la primera y hay mas por imprimir */ else
                                if ($nantes == 1 && $nfotos_antes_count >= 4 && $nfotos_antes > 2) {
                                    $ancho = ($alto > $ancho) ? 40 : 60;
                                    $pdf->Image($array_fotos_antes[$index]->Url, $x_antes_columna_uno/* X */, $y_antes_columna_uno/* Y */, $ancho/* W *//* H */);
                                }

                                /* Cuando es la tercera y ya no hay mas */ else
                                if ($nantes == 3 && $nfotos_antes_count >= 4 && $nfotos_antes == 1) {
                                    $ancho = ($alto > $ancho) ? 40 : 100;
                                    $pdf->Image($array_fotos_antes[$index]->Url, $x_antes_columna_solas/* X */, $y_antes_columna_dos/* Y */, $ancho/* W *//* H */);
                                }
                                /* Cuando es la tercera pero hay mas */ else
                                if ($nantes == 3 && $nfotos_antes_count >= 4 && $nfotos_antes > 1) {
                                    $ancho = ($alto > $ancho) ? 40 : 60;
                                    $pdf->Image($array_fotos_antes[$index]->Url, $x_antes_columna_uno/* X */, $y_antes_columna_dos/* Y */, $ancho/* W *//* H */);
                                }
                                /* Cuando son cuatro */ else
                                if ($nantes == 4 && $nfotos_antes_count >= 4) {
                                    $ancho = ($alto > $ancho) ? 40 : 60;
                                    $pdf->Image($array_fotos_antes[$index]->Url, $x_antes_columna_dos/* X */, $y_antes_columna_dos/* Y */, $ancho/* W *//* H */);
                                }
                                /* FIN DE LAS VALIDACIONES DE TAMAÑO */
                                /* DESCOMENTAR SI SE OCUPA RECTIFICAR LAS VALIDACIONES */
                                //   $pdf->SetX(5);
                                //   $pdf->Cell(205, 5, "$nfotos_antes_count, nantes:  $nantes  " . $array_fotos_antes[$index]->Url . ", nfotos_antes:  " . $nfotos_antes . ",  nfotos: " . $nfotos. ",  nfotos_antes_count: " . $nfotos_antes_count, 0, 1);
                                if ($fotos_antes_add == 0) {
                                    $fotos_antes_add = 1;
                                    $fotos_despues_add = 0;
                                }
                                $nfotos--;
                                $nfotos_antes--;
                            }

                            if (isset($array_fotos_despues[$index])) {
                                $ndespues += 1;
                                if ($ndespues == 0) {
                                    $pdf->SetY(40);
                                }
                                /* AQUI VAN LAS VALIDACIONES DE TAMAÑO */
                                /* Valida el tamaño de la imagen para saber si la pone más pequeña */
                                $ancho_alto = getimagesize(utf8_decode($array_fotos_despues[$index]->Url));
                                $ancho = $ancho_alto[0];
                                $alto = $ancho_alto[1];
                                $x_despues_columna_uno = 145;
                                $x_despues_columna_dos = 212;

                                $y_despues_columna_uno = 45;
                                $y_despues_columna_dos = 125;

                                $x_despues_columna_solas = 155;

                                /* VALIDACION DE 1 FOTO */
                                if ($ndespues == 1 && $nfotos_despues == 1 && $nfotos_despues_count <= 4) {
                                    $ancho = ($alto > $ancho) ? 85 : 120;
                                    $pdf->Image($array_fotos_despues[$index]->Url, $x_despues_columna_uno/* X */, $y_despues_columna_uno/* Y */, $ancho/* W *//* H */);
                                }
                                /* VALIDACION DE 2 FOTOS */
                                /* Primera imagen */
                                if ($ndespues == 1 && $nfotos_despues == 2 && $nfotos_despues_count == 2) {
                                    $ancho = ($alto > $ancho) ? 40 : 100;
                                    $pdf->Image($array_fotos_despues[$index]->Url, $x_despues_columna_solas/* X */, $y_despues_columna_uno/* Y */, $ancho/* W *//* H */);
                                }
                                /* Segunda Imagen */ else
                                if ($ndespues == 2 && $nfotos_despues == 1 && $nfotos_despues_count == 2) {
                                    $ancho = ($alto > $ancho) ? 40 : 100;
                                    $pdf->Image($array_fotos_despues[$index]->Url, $x_despues_columna_solas/* X */, $y_despues_columna_dos/* Y */, $ancho/* W *//* H */);
                                }
                                /* Cuando son mas de dos */ else
                                if ($ndespues == 2 && $nfotos_despues > 1) {
                                    $ancho = ($alto > $ancho) ? 40 : 60;
                                    $pdf->Image($array_fotos_despues[$index]->Url, $x_despues_columna_dos/* X */, $y_despues_columna_uno/* Y */, $ancho/* W *//* H */);
                                }
                                /* VALIDACION 2 IMAGENES EN OTRAS PAGINAS */
                                /* Cuando ya solo quedan dos y es la primera */ else
                                if ($ndespues == 1 && $nfotos_despues == 2) {
                                    $ancho = ($alto > $ancho) ? 40 : 100;
                                    $pdf->Image($array_fotos_despues[$index]->Url, $x_despues_columna_solas/* X */, $y_despues_columna_uno/* Y */, $ancho/* W *//* H */);
                                }
                                /* Cuando ya solo quedan dos y es la segunda */ else
                                if ($ndespues == 2 && $nfotos_despues == 1) {
                                    $ancho = ($alto > $ancho) ? 40 : 100;
                                    $pdf->Image($array_fotos_despues[$index]->Url, $x_despues_columna_solas/* X */, $y_despues_columna_dos/* Y */, $ancho/* W *//* H */);
                                }

                                /* VALIDA 3 IMAGENES */
                                /* Primer imagen */
                                if ($ndespues == 1 && $nfotos_despues == 3 && $nfotos_despues_count == 3) {
                                    $ancho = ($alto > $ancho) ? 40 : 60;
                                    $pdf->Image($array_fotos_despues[$index]->Url, $x_despues_columna_uno/* X */, $y_despues_columna_uno/* Y */, $ancho/* W *//* H */);
                                } else
                                if ($ndespues == 3 && $nfotos_despues == 1 && $nfotos_despues_count == 3) {
                                    $ancho = ($alto > $ancho) ? 40 : 100;
                                    $pdf->Image($array_fotos_despues[$index]->Url, $x_despues_columna_solas/* X */, $y_despues_columna_dos/* Y */, $ancho/* W *//* H */);
                                }

                                /* VALIDACION CUANDO SUPERA LAS 4 FOTOS DURANTE VARIAS PAGINAS */
                                if ($ndespues == 1 && $nfotos_despues == 1 && $nfotos_despues_count >= 4) {
                                    $ancho = ($alto > $ancho) ? 85 : 100;
                                    $pdf->Image($array_fotos_despues[$index]->Url, $x_despues_columna_solas/* X */, $y_despues_columna_uno/* Y */, $ancho/* W *//* H */);
                                }
                                /* Cundo es la primera y hay mas por imprimir */ else
                                if ($ndespues == 1 && $nfotos_despues_count >= 4 && $nfotos_despues > 2) {
                                    $ancho = ($alto > $ancho) ? 40 : 60;
                                    $pdf->Image($array_fotos_despues[$index]->Url, $x_despues_columna_uno/* X */, $y_despues_columna_uno/* Y */, $ancho/* W *//* H */);
                                }

                                /* Cuando es la tercera y ya no hay mas */ else
                                if ($ndespues == 3 && $nfotos_despues_count >= 4 && $nfotos_despues == 1) {
                                    $ancho = ($alto > $ancho) ? 40 : 100;
                                    $pdf->Image($array_fotos_despues[$index]->Url, $x_despues_columna_solas/* X */, $y_despues_columna_dos/* Y */, $ancho/* W *//* H */);
                                }
                                /* Cuando es la tercera pero hay mas */ else
                                if ($ndespues == 3 && $nfotos_despues_count >= 4 && $nfotos_despues > 1) {
                                    $ancho = ($alto > $ancho) ? 40 : 60;
                                    $pdf->Image($array_fotos_despues[$index]->Url, $x_despues_columna_uno/* X */, $y_despues_columna_dos/* Y */, $ancho/* W *//* H */);
                                }
                                /* Cuando son cuatro */ else
                                if ($ndespues == 4 && $nfotos_despues_count >= 4) {
                                    $ancho = ($alto > $ancho) ? 40 : 60;
                                    $pdf->Image($array_fotos_despues[$index]->Url, $x_despues_columna_dos/* X */, $y_despues_columna_dos/* Y */, $ancho/* W *//* H */);
                                }

                                /* FIN DE LAS VALIDACIONES DE TAMAÑO */
                                /* DESCOMENTAR SI SE OCUPA RECTIFICAR LAS VALIDACIONES */
//                            $pdf->SetX(140);
                                //                            $pdf->Cell(205, 5, $array_fotos_despues[$index]->ID . " - " . $array_fotos_despues[$index]->Url . " - " . $array_fotos_despues[$index]->ID . "  + " . $nfotos, 0, 1);
                                if ($fotos_antes_add == 1 && $fotos_despues_add == 0) {
                                    $fotos_despues_add = 1;
                                    $fotos_antes_add = 0;
                                } else if ($fotos_antes_add == 0 && $fotos_despues_add == 0) {
                                    $fotos_despues_add = 1;
                                    $fotos_antes_add = 0;
                                }
                                $nfotos--;
                                $nfotos_despues--;
                            }

                            /* COMPROBAR SI ANTES O DESPUES LLEGARON A 4 */
                            if (($nantes == 4 || $ndespues == 4) && $nfotos > 0) {
                                $pages_added = true;
                                $pdf->AddPage();
                                /* DESCOMENTAR SI SE OCUPA RECTIFICAR LAS VALIDACIONES */
//                            $pdf->SetX(120);
                                //                            $pdf->Cell(205, 5, "ANTES #$nantes N$fotos_antes_add, DESPUES #$ndespues N$fotos_despues_add - " . $nfotos, 0, 1);
                                $nimg = 0;
                                $nantes = 0;
                                $ndespues = 0;
                                $fotos_antes_add = 0;
                                $fotos_despues_add = 0;
                            } else {
                                $pages_added = false;
                            }
                        }

                        $nimg += 1;
                        /* FIN ANTES */
                    } /* FIN CONCEPTO */
                    $path = 'uploads/Reportes/' . $ID;
                    // print $path;
                    if (!file_exists($path)) {
                        mkdir($path, 0777, true);
                    }
                    $file_name = "REPORTE LEVANTAMIENTO GENERAL " . $row->Cliente . " " . date("Y-m-d His");
                    $url = $path . '/' . $file_name . '.pdf';
                    /* Borramos el archivo anterior */
                    if (delete_files('uploads/Reportes/' . $ID)) {
                        
                    }
                    $pdf->Output($url);
                    print base_url() . $url;
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onReporteLevantamientoCompletoPrinciple() {
        try {
            if (isset($_POST["ID"])) {
                $ID = $this->input->post("ID");
                $Mov = $this->input->post("Movimiento");
                $Concepto = $this->trabajo_model->getDetalleFotosAntes($ID);
                if (!empty($Concepto)) {
                    $pages_added = false;
                    $pdf = new FotosFPDLCP('L', 'mm', array(279/* ANCHO */, 216/* ALTURA */));
                    foreach ($Concepto as $i => $row) {
                        $pdf->SetTextColor(0, 0, 0);
                        /* ENCABEZADO */
                        $pdf->CrL = $row->CR;
                        $pdf->SucursalL = $row->Sucursal;
                        $pdf->EmpresaL = $row->Empresa;
                        $pdf->ConceptoL = $row->Concepto;
                        $pdf->ClienteL = $row->Cliente;
                        $pdf->CentroCostoL = $row->CentroCosto;

                        $pdf->SetFont('Arial', 'I', 16);
                        $pdf->AddPage();
                        $pdf->SetX(5);
                        $pdf->SetY(100);
                        $pdf->MultiCell(260, 6, strtoupper(utf8_decode($row->Concepto)), 0, 'C');

                        /* DETALLE IMAGENES */
                        $fotosAntes = $this->trabajo_model->getDetalleFotosAntesXID($row->ID, $ID);
                        $fotosDespues = $this->trabajo_model->getDetalleFotosDespuesXID($row->ID);
                        /* ANTES Y DESPUES */

                        $nfotos = count($fotosAntes);
                        $nantes = 0;
                        $ndespues = 0;
                        $nimg = 0;
                        $pdf->AliasNbPages();
                        $xfotos = array_merge($fotosAntes, $fotosDespues);
                        $nfotos = count($xfotos);

                        /* CONVERSION A INDICES DE FOTOS ANTES */
                        $array_fotos_antes = array_values($fotosAntes);

                        /* CONVERSION A INDICES DE FOTOS DESPUES */
                        $array_fotos_despues = array_values($fotosDespues);

                        /* CONTAR CUANTAS FOTOS SON (ANTES + DESPUES) */
                        $xfotos_count = (count($array_fotos_antes) + count($array_fotos_despues));

                        /* CONTADOR DE FOTOS DESPUES */
                        $nfotos_antes = count($array_fotos_antes);
                        $nfotos_antes_count = $nfotos_antes;

                        /* CONTADOR DE FOTOS DESPUES */
                        $nfotos_despues = count($array_fotos_despues);
                        $nfotos_despues_count = $nfotos_despues;

                        $nfotos = $xfotos_count;
                        if (!$pages_added) {
                            $pdf->AddPage();
                        }
                        $pdf->SetFont('Arial', 'B', 7);
                        $fotos_antes_add = 0;
                        $fotos_despues_add = 0;
                        $pdf->SetTextColor(255, 0, 0);

                        $pdf->Line(140, 40, 140, 200);
                        /* CUERPO */
                        $pdf->SetFont('Arial', 'I', 14);
                        $pdf->SetTextColor(122, 122, 122);
                        $pdf->SetY(33);
                        $pdf->SetX(5);
                        $pdf->Cell(35, 5, utf8_decode("Estado Inicial "), 0, 1, 'L');
                        $pdf->SetY(33);
                        $pdf->SetX(145);
                        $pdf->Cell(35, 5, utf8_decode("Estado Final "), 0, 1, 'L');
                        for ($index = 0; $index < $xfotos_count; $index++) {

                            if (isset($array_fotos_antes[$index])) {
                                $nantes += 1;
                                /* AQUI VAN LAS VALIDACIONES DE TAMAÑO */
                                /* Valida el tamaño de la imagen para saber si la pone más pequeña */
                                $ancho_alto = getimagesize(utf8_decode($array_fotos_antes[$index]->Url));
                                $ancho = $ancho_alto[0];
                                $alto = $ancho_alto[1];

                                $x_antes_columna_uno = 10;
                                $y_antes_columna_uno = 45;

                                $x_antes_columna_dos = 75;
                                $y_antes_columna_dos = 125;

                                $x_antes_columna_solas = 20;

                                /* VALIDACION DE 1 FOTO */
                                if ($nantes == 1 && $nfotos_antes == 1 && $nfotos_antes_count <= 4) {
                                    $ancho = ($alto > $ancho) ? 85 : 120;
                                    $pdf->Image($array_fotos_antes[$index]->Url, $x_antes_columna_uno/* X */, $y_antes_columna_uno/* Y */, $ancho/* W *//* H */);
                                }
                                /* VALIDACION DE 2 FOTOS */
                                /* Primera imagen */
                                if ($nantes == 1 && $nfotos_antes == 2 && $nfotos_antes_count == 2) {
                                    $ancho = ($alto > $ancho) ? 40 : 100;
                                    $pdf->Image($array_fotos_antes[$index]->Url, $x_antes_columna_solas/* X */, $y_antes_columna_uno/* Y */, $ancho/* W *//* H */);
                                }
                                /* Segunda Imagen */ else
                                if ($nantes == 2 && $nfotos_antes == 1 && $nfotos_antes_count == 2) {
                                    $ancho = ($alto > $ancho) ? 40 : 100;
                                    $pdf->Image($array_fotos_antes[$index]->Url, $x_antes_columna_solas/* X */, $y_antes_columna_dos/* Y */, $ancho/* W *//* H */);
                                }
                                /* Cuando son mas de dos */ else
                                if ($nantes == 2 && $nfotos_antes > 1) {
                                    $ancho = ($alto > $ancho) ? 40 : 60;
                                    $pdf->Image($array_fotos_antes[$index]->Url, $x_antes_columna_dos/* X */, $y_antes_columna_uno/* Y */, $ancho/* W *//* H */);
                                }
                                /* VALIDACION 2 IMAGENES EN OTRAS PAGINAS */
                                /* Cuando ya solo quedan dos y es la primera */ else
                                if ($nantes == 1 && $nfotos_antes == 2) {
                                    $ancho = ($alto > $ancho) ? 40 : 100;
                                    $pdf->Image($array_fotos_antes[$index]->Url, $x_antes_columna_solas/* X */, $y_antes_columna_uno/* Y */, $ancho/* W *//* H */);
                                }
                                /* Cuando ya solo quedan dos y es la segunda */ else
                                if ($nantes == 2 && $nfotos_antes == 1) {
                                    $ancho = ($alto > $ancho) ? 40 : 100;
                                    $pdf->Image($array_fotos_antes[$index]->Url, $x_antes_columna_solas/* X */, $y_antes_columna_dos/* Y */, $ancho/* W *//* H */);
                                }
                                /* VALIDA 3 IMAGENES */
                                /* Primer imagen */
                                if ($nantes == 1 && $nfotos_antes == 3 && $nfotos_antes_count == 3) {
                                    $ancho = ($alto > $ancho) ? 40 : 60;
                                    $pdf->Image($array_fotos_antes[$index]->Url, $x_antes_columna_uno/* X */, $y_antes_columna_uno/* Y */, $ancho/* W *//* H */);
                                } else
                                if ($nantes == 3 && $nfotos_antes == 1 && $nfotos_antes_count == 3) {
                                    $ancho = ($alto > $ancho) ? 40 : 100;
                                    $pdf->Image($array_fotos_antes[$index]->Url, $x_antes_columna_solas/* X */, $y_antes_columna_dos/* Y */, $ancho/* W *//* H */);
                                }
                                /* VALIDACION CUANDO SUPERA LAS 4 FOTOS DURANTE VARIAS PAGINAS */
                                if ($nantes == 1 && $nfotos_antes == 1 && $nfotos_antes_count >= 4) {
                                    $ancho = ($alto > $ancho) ? 85 : 100;
                                    $pdf->Image($array_fotos_antes[$index]->Url, $x_antes_columna_solas/* X */, $y_antes_columna_uno/* Y */, $ancho/* W *//* H */);
                                }
                                /* Cundo es la primera y hay mas por imprimir */ else
                                if ($nantes == 1 && $nfotos_antes_count >= 4 && $nfotos_antes > 2) {
                                    $ancho = ($alto > $ancho) ? 40 : 60;
                                    $pdf->Image($array_fotos_antes[$index]->Url, $x_antes_columna_uno/* X */, $y_antes_columna_uno/* Y */, $ancho/* W *//* H */);
                                }

                                /* Cuando es la tercera y ya no hay mas */ else
                                if ($nantes == 3 && $nfotos_antes_count >= 4 && $nfotos_antes == 1) {
                                    $ancho = ($alto > $ancho) ? 40 : 100;
                                    $pdf->Image($array_fotos_antes[$index]->Url, $x_antes_columna_solas/* X */, $y_antes_columna_dos/* Y */, $ancho/* W *//* H */);
                                }
                                /* Cuando es la tercera pero hay mas */ else
                                if ($nantes == 3 && $nfotos_antes_count >= 4 && $nfotos_antes > 1) {
                                    $ancho = ($alto > $ancho) ? 40 : 60;
                                    $pdf->Image($array_fotos_antes[$index]->Url, $x_antes_columna_uno/* X */, $y_antes_columna_dos/* Y */, $ancho/* W *//* H */);
                                }
                                /* Cuando son cuatro */ else
                                if ($nantes == 4 && $nfotos_antes_count >= 4) {
                                    $ancho = ($alto > $ancho) ? 40 : 60;
                                    $pdf->Image($array_fotos_antes[$index]->Url, $x_antes_columna_dos/* X */, $y_antes_columna_dos/* Y */, $ancho/* W *//* H */);
                                }
                                /* FIN DE LAS VALIDACIONES DE TAMAÑO */
                                /* DESCOMENTAR SI SE OCUPA RECTIFICAR LAS VALIDACIONES */
                                //   $pdf->SetX(5);
                                //   $pdf->Cell(205, 5, "$nfotos_antes_count, nantes:  $nantes  " . $array_fotos_antes[$index]->Url . ", nfotos_antes:  " . $nfotos_antes . ",  nfotos: " . $nfotos. ",  nfotos_antes_count: " . $nfotos_antes_count, 0, 1);
                                if ($fotos_antes_add == 0) {
                                    $fotos_antes_add = 1;
                                    $fotos_despues_add = 0;
                                }
                                $nfotos--;
                                $nfotos_antes--;
                            }

                            if (isset($array_fotos_despues[$index])) {
                                $ndespues += 1;
                                if ($ndespues == 0) {
                                    $pdf->SetY(40);
                                }
                                /* AQUI VAN LAS VALIDACIONES DE TAMAÑO */
                                /* Valida el tamaño de la imagen para saber si la pone más pequeña */
                                $ancho_alto = getimagesize(utf8_decode($array_fotos_despues[$index]->Url));
                                $ancho = $ancho_alto[0];
                                $alto = $ancho_alto[1];
                                $x_despues_columna_uno = 145;
                                $x_despues_columna_dos = 212;

                                $y_despues_columna_uno = 45;
                                $y_despues_columna_dos = 125;

                                $x_despues_columna_solas = 155;

                                /* VALIDACION DE 1 FOTO */
                                if ($ndespues == 1 && $nfotos_despues == 1 && $nfotos_despues_count <= 4) {
                                    $ancho = ($alto > $ancho) ? 85 : 120;
                                    $pdf->Image($array_fotos_despues[$index]->Url, $x_despues_columna_uno/* X */, $y_despues_columna_uno/* Y */, $ancho/* W *//* H */);
                                }
                                /* VALIDACION DE 2 FOTOS */
                                /* Primera imagen */
                                if ($ndespues == 1 && $nfotos_despues == 2 && $nfotos_despues_count == 2) {
                                    $ancho = ($alto > $ancho) ? 40 : 100;
                                    $pdf->Image($array_fotos_despues[$index]->Url, $x_despues_columna_solas/* X */, $y_despues_columna_uno/* Y */, $ancho/* W *//* H */);
                                }
                                /* Segunda Imagen */ else
                                if ($ndespues == 2 && $nfotos_despues == 1 && $nfotos_despues_count == 2) {
                                    $ancho = ($alto > $ancho) ? 40 : 100;
                                    $pdf->Image($array_fotos_despues[$index]->Url, $x_despues_columna_solas/* X */, $y_despues_columna_dos/* Y */, $ancho/* W *//* H */);
                                }
                                /* Cuando son mas de dos */ else
                                if ($ndespues == 2 && $nfotos_despues > 1) {
                                    $ancho = ($alto > $ancho) ? 40 : 60;
                                    $pdf->Image($array_fotos_despues[$index]->Url, $x_despues_columna_dos/* X */, $y_despues_columna_uno/* Y */, $ancho/* W *//* H */);
                                }
                                /* VALIDACION 2 IMAGENES EN OTRAS PAGINAS */
                                /* Cuando ya solo quedan dos y es la primera */ else
                                if ($ndespues == 1 && $nfotos_despues == 2) {
                                    $ancho = ($alto > $ancho) ? 40 : 100;
                                    $pdf->Image($array_fotos_despues[$index]->Url, $x_despues_columna_solas/* X */, $y_despues_columna_uno/* Y */, $ancho/* W *//* H */);
                                }
                                /* Cuando ya solo quedan dos y es la segunda */ else
                                if ($ndespues == 2 && $nfotos_despues == 1) {
                                    $ancho = ($alto > $ancho) ? 40 : 100;
                                    $pdf->Image($array_fotos_despues[$index]->Url, $x_despues_columna_solas/* X */, $y_despues_columna_dos/* Y */, $ancho/* W *//* H */);
                                }

                                /* VALIDA 3 IMAGENES */
                                /* Primer imagen */
                                if ($ndespues == 1 && $nfotos_despues == 3 && $nfotos_despues_count == 3) {
                                    $ancho = ($alto > $ancho) ? 40 : 60;
                                    $pdf->Image($array_fotos_despues[$index]->Url, $x_despues_columna_uno/* X */, $y_despues_columna_uno/* Y */, $ancho/* W *//* H */);
                                } else
                                if ($ndespues == 3 && $nfotos_despues == 1 && $nfotos_despues_count == 3) {
                                    $ancho = ($alto > $ancho) ? 40 : 100;
                                    $pdf->Image($array_fotos_despues[$index]->Url, $x_despues_columna_solas/* X */, $y_despues_columna_dos/* Y */, $ancho/* W *//* H */);
                                }

                                /* VALIDACION CUANDO SUPERA LAS 4 FOTOS DURANTE VARIAS PAGINAS */
                                if ($ndespues == 1 && $nfotos_despues == 1 && $nfotos_despues_count >= 4) {
                                    $ancho = ($alto > $ancho) ? 85 : 100;
                                    $pdf->Image($array_fotos_despues[$index]->Url, $x_despues_columna_solas/* X */, $y_despues_columna_uno/* Y */, $ancho/* W *//* H */);
                                }
                                /* Cundo es la primera y hay mas por imprimir */ else
                                if ($ndespues == 1 && $nfotos_despues_count >= 4 && $nfotos_despues > 2) {
                                    $ancho = ($alto > $ancho) ? 40 : 60;
                                    $pdf->Image($array_fotos_despues[$index]->Url, $x_despues_columna_uno/* X */, $y_despues_columna_uno/* Y */, $ancho/* W *//* H */);
                                }

                                /* Cuando es la tercera y ya no hay mas */ else
                                if ($ndespues == 3 && $nfotos_despues_count >= 4 && $nfotos_despues == 1) {
                                    $ancho = ($alto > $ancho) ? 40 : 100;
                                    $pdf->Image($array_fotos_despues[$index]->Url, $x_despues_columna_solas/* X */, $y_despues_columna_dos/* Y */, $ancho/* W *//* H */);
                                }
                                /* Cuando es la tercera pero hay mas */ else
                                if ($ndespues == 3 && $nfotos_despues_count >= 4 && $nfotos_despues > 1) {
                                    $ancho = ($alto > $ancho) ? 40 : 60;
                                    $pdf->Image($array_fotos_despues[$index]->Url, $x_despues_columna_uno/* X */, $y_despues_columna_dos/* Y */, $ancho/* W *//* H */);
                                }
                                /* Cuando son cuatro */ else
                                if ($ndespues == 4 && $nfotos_despues_count >= 4) {
                                    $ancho = ($alto > $ancho) ? 40 : 60;
                                    $pdf->Image($array_fotos_despues[$index]->Url, $x_despues_columna_dos/* X */, $y_despues_columna_dos/* Y */, $ancho/* W *//* H */);
                                }

                                /* FIN DE LAS VALIDACIONES DE TAMAÑO */
                                /* DESCOMENTAR SI SE OCUPA RECTIFICAR LAS VALIDACIONES */
                                /*
                                  $pdf->SetFont('Arial', '', 8);
                                  $pdf->SetTextColor(0,0 ,0);
                                  $pdf->SetX(100);
                                  $pdf->Cell(205, 5, "$nfotos_despues_count, ndespues:  $ndespues  " . $array_fotos_despues[$index]->Url . ", nfotos_despues:  " . $nfotos_despues . ",  nfotos: " . $nfotos, 0, 1);
                                 */

                                if ($fotos_antes_add == 1 && $fotos_despues_add == 0) {
                                    $fotos_despues_add = 1;
                                    $fotos_antes_add = 0;
                                } else if ($fotos_antes_add == 0 && $fotos_despues_add == 0) {
                                    $fotos_despues_add = 1;
                                    $fotos_antes_add = 0;
                                }
                                $nfotos--;
                                $nfotos_despues--;
                            }

                            /* COMPROBAR SI ANTES O DESPUES LLEGARON A 4 */
                            if (($nantes == 4 || $ndespues == 4) && $nfotos > 0) {
                                $pages_added = true;
                                $pdf->AddPage();
                                /* DESCOMENTAR SI SE OCUPA RECTIFICAR LAS VALIDACIONES */
//                            $pdf->SetX(120);
                                //                            $pdf->Cell(205, 5, "ANTES #$nantes N$fotos_antes_add, DESPUES #$ndespues N$fotos_despues_add - " . $nfotos, 0, 1);
                                $nimg = 0;
                                $nantes = 0;
                                $ndespues = 0;
                                $fotos_antes_add = 0;
                                $fotos_despues_add = 0;
                                $pdf->Line(140, 40, 140, 200);
                                $pdf->SetFont('Arial', 'I', 14);
                                $pdf->SetTextColor(122, 122, 122);
                                $pdf->SetY(33);
                                $pdf->SetX(5);
                                $pdf->Cell(35, 5, utf8_decode("Estado Inicial "), 0, 1, 'L');
                                $pdf->SetY(33);
                                $pdf->SetX(145);
                                $pdf->Cell(35, 5, utf8_decode("Estado Final "), 0, 1, 'L');
                            } else {
                                $pages_added = false;
                            }
                        }

                        $nimg += 1;
                        /* FIN ANTES */
                    } /* FIN CONCEPTO */
                    $path = 'uploads/Reportes/' . $ID;
                    // print $path;
                    if (!file_exists($path)) {
                        mkdir($path, 0777, true);
                    }
                    $file_name = "REPORTE LEVANTAMIENTO GENERAL " . $row->Cliente . " " . date("Y-m-d His");
                    $url = $path . '/' . $file_name . '.pdf';
                    /* Borramos el archivo anterior */
                    if (delete_files('uploads/Reportes/' . $ID)) {
                        
                    }
                    $pdf->Output($url);
                    print base_url() . $url;
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onReporteLevantamientoAntesPrinciple() {
        try {
            if (isset($_POST["ID"])) {
                $ID = $this->input->post("ID");
                $Mov = $this->input->post("Movimiento");
                $Concepto = $this->trabajo_model->getDetalleFotosAntes($ID);
                if (!empty($Concepto)) {
                    $pages_added = false;
                    $pdf = new FotosFPDLAP('L', 'mm', array(279/* ANCHO */, 216/* ALTURA */));
                    $nfotosxconcepto = 0;
                    foreach ($Concepto as $i => $row) {
                        /* ENCABEZADO */
                        $pdf->CrL = $row->CR;
                        $pdf->SucursalL = $row->Sucursal;
                        $pdf->EmpresaL = $row->Empresa;
                        $pdf->ConceptoL = $row->Concepto;
                        $pdf->ClienteL = $row->Cliente;
                        $pdf->DireccionL = $row->Direccion;
                        $pdf->CentroCostoL = $row->CentroCosto;
                        /* DETALLE IMAGENES */
                        $pdf->SetFont('Arial', 'I', 16);
                        $pdf->AddPage();
                        $pdf->SetX(5);
                        $pdf->SetY(100);
                        $pdf->MultiCell(260, 6, strtoupper(utf8_decode($row->Concepto)), 0, 'C');
                        $fotos = $this->trabajo_model->getDetalleFotosAntesXID($row->ID, $ID);
                        $nfotos = count($fotos);
                        $fnfotos = count($fotos);
                        $nimg = 0;
                        $pdf->AliasNbPages();
                        if (!$pages_added) {
                            $pdf->AddPage();
                        }
                        foreach ($fotos as $key => $foto) {
                            /* Valida el tamaño de la imagen para saber si la pone más pequeña */
                            $dimensiones = getimagesize(utf8_decode($foto->Url));
                            /* Ancho $dimensiones[0] */
                            /* Alto $dimensiones[1] */
                            $YCuandoSonTres = 85;
                            $YCuandoSonDos = 80;
                            $widthSonDos = 115;
                            $YCuandoEsUno = 80;
                            $widthEsUno = 115;
                            if ($dimensiones[1] > $dimensiones[0]) {
                                $YCuandoSonTres = 52;
                                $YCuandoSonDos = 52;
                                $widthSonDos = 82;
                                $YCuandoEsUno = 52;
                                $widthEsUno = 82;
                            }

                            $nimg += 1;
                            /* CUANDO SOLO SON DOS FOTOS Y ES LA PRIMERA */
                            if ($nimg == 1 && $nfotos > 1 && $nfotos == 2) {
                                $pdf->Image($foto->Url, 20/* X */, $YCuandoSonDos/* Y */, $widthSonDos/* W *//* H */);
                            } else if ($nimg == 1 && $nfotos > 1) {
                                $pdf->Image($foto->Url, 10/* X */, $YCuandoSonTres/* Y */, 84/* W *//* H */);
                            } else if ($nimg == 1 && $nfotos == 1) {
                                /* CUANDO SOLO TIENE UNA IMAGEN EL CONCEPTO O UN CONCEPTO ANTERIOR YA SOLO LE FALTABA UNA IMAGEN */
                                $pdf->Image($foto->Url, 85/* X */, $YCuandoEsUno/* Y */, $widthEsUno/* W *//* H */);
                            }
                            /* CUANDO SOLO SON DOS FOTOS Y ES LA SEGUNDA */
                            if ($nimg == 2 && $fnfotos == 2) {
                                $pdf->Image($foto->Url, 145/* X */, $YCuandoSonDos/* Y */, $widthSonDos/* W *//* H */);
                            }
                            /* Cuando es la segunda imagen pero hay más por imprimir */ else if ($nimg == 2 && $nfotos >= 2) {
                                $pdf->Image($foto->Url, 97/* X */, $YCuandoSonTres/* Y */, 84/* W *//* H */);
                            }
                            /* Cuando al concepto le faltaba una imagen y solo quedan dos por imprimir */ else if ($nimg == 2 && $nfotos == 1) {
                                $pdf->Image($foto->Url, 145/* X */, $YCuandoSonDos/* Y */, $widthSonDos/* W *//* H */);
                            }
                            /* Cuando es la tercera imagen */
                            if ($nimg == 3) {
                                $pdf->Image($foto->Url, 185/* X */, $YCuandoSonTres/* Y */, 84/* W *//* H */);
                            }
                            $nfotos--;
                            //Se pone para que valide antes de agregar
                            if ($nimg == 3 && $nfotos > 0) {
                                $pages_added = true;
                                $pdf->AddPage();
                                $nimg = 0;
                            } else {
                                $pages_added = false;
                            }
                        }
                        /* FIN DETALLE IMAGENES */
                    }
                    /* FIN CUERPO */
                    $path = 'uploads/Reportes/' . $ID;
                    // print $path;
                    if (!file_exists($path)) {
                        mkdir($path, 0777, true);
                    }
                    $file_name = "REPORTE FOTOS ANTES " . $row->Cliente . " " . date("Y-m-d His");
                    $url = $path . '/' . $file_name . '.pdf';
                    /* Borramos el archivo anterior */
                    if (delete_files('uploads/Reportes/' . $ID)) {
                        
                    }
                    $pdf->Output($url);
                    print base_url() . $url;
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onReporteLevantamientoDespuesPrinciple() {
        try {
            if (isset($_POST["ID"])) {
                $ID = $this->input->post("ID");
                $Concepto = $this->trabajo_model->getDetalleFotosDespues($ID);
                if (!empty($Concepto)) {
                    $pages_added = false;
                    $pdf = new FotosFPDLDP('L', 'mm', array(279/* ANCHO */, 216/* ALTURA */));
                    $nfotosxconcepto = 0;
                    foreach ($Concepto as $i => $row) {
                        /* ENCABEZADO */
                        $pdf->CrL = $row->CR;
                        $pdf->SucursalL = $row->Sucursal;
                        $pdf->EmpresaL = $row->Empresa;
                        $pdf->ConceptoL = $row->Concepto;
                        $pdf->ClienteL = $row->Cliente;
                        $pdf->DireccionL = $row->Direccion;
                        $pdf->CentroCostoL = $row->CentroCosto;
                        /* DETALLE IMAGENES */
                        $pdf->SetFont('Arial', 'I', 16);
                        $pdf->AddPage();
                        $pdf->SetX(5);
                        $pdf->SetY(100);
                        $pdf->MultiCell(260, 6, strtoupper(utf8_decode($row->Concepto)), 0, 'C');
                        $fotos = $this->trabajo_model->getDetalleFotosDespuesXID($row->ID);
                        $nfotos = count($fotos);
                        $fnfotos = count($fotos);
                        $nimg = 0;
                        $pdf->AliasNbPages();
                        if (!$pages_added) {
                            $pdf->AddPage();
                        }
                        foreach ($fotos as $key => $foto) {
                            /* Valida el tamaño de la imagen para saber si la pone más pequeña */
                            $dimensiones = getimagesize(utf8_decode($foto->Url));
                            /* Ancho $dimensiones[0] */
                            /* Alto $dimensiones[1] */
                            $YCuandoSonTres = 85;
                            $YCuandoSonDos = 80;
                            $widthSonDos = 115;
                            $YCuandoEsUno = 80;
                            $widthEsUno = 115;
                            if ($dimensiones[1] > $dimensiones[0]) {
                                $YCuandoSonTres = 52;
                                $YCuandoSonDos = 52;
                                $widthSonDos = 82;
                                $YCuandoEsUno = 52;
                                $widthEsUno = 82;
                            }

                            $nimg += 1;
                            /* CUANDO SOLO SON DOS FOTOS Y ES LA PRIMERA */
                            if ($nimg == 1 && $nfotos > 1 && $nfotos == 2) {
                                $pdf->Image($foto->Url, 20/* X */, $YCuandoSonDos/* Y */, $widthSonDos/* W *//* H */);
                            } else if ($nimg == 1 && $nfotos > 1) {
                                $pdf->Image($foto->Url, 10/* X */, $YCuandoSonTres/* Y */, 84/* W *//* H */);
                            } else if ($nimg == 1 && $nfotos == 1) {
                                /* CUANDO SOLO TIENE UNA IMAGEN EL CONCEPTO O UN CONCEPTO ANTERIOR YA SOLO LE FALTABA UNA IMAGEN */
                                $pdf->Image($foto->Url, 85/* X */, $YCuandoEsUno/* Y */, $widthEsUno/* W *//* H */);
                            }
                            /* CUANDO SOLO SON DOS FOTOS Y ES LA SEGUNDA */
                            if ($nimg == 2 && $fnfotos == 2) {
                                $pdf->Image($foto->Url, 145/* X */, $YCuandoSonDos/* Y */, $widthSonDos/* W *//* H */);
                            }
                            /* Cuando es la segunda imagen pero hay más por imprimir */ else if ($nimg == 2 && $nfotos >= 2) {
                                $pdf->Image($foto->Url, 97/* X */, $YCuandoSonTres/* Y */, 84/* W *//* H */);
                            }
                            /* Cuando al concepto le faltaba una imagen y solo quedan dos por imprimir */ else if ($nimg == 2 && $nfotos == 1) {
                                $pdf->Image($foto->Url, 145/* X */, $YCuandoSonDos/* Y */, $widthSonDos/* W *//* H */);
                            }
                            /* Cuando es la tercera imagen */
                            if ($nimg == 3) {
                                $pdf->Image($foto->Url, 185/* X */, $YCuandoSonTres/* Y */, 84/* W *//* H */);
                            }
                            $nfotos--;
                            //Se pone para que valide antes de agregar
                            if ($nimg == 3 && $nfotos > 0) {
                                $pages_added = true;
                                $pdf->AddPage();
                                $nimg = 0;
                            } else {
                                $pages_added = false;
                            }
                        }
                        /* FIN DETALLE IMAGENES */
                    }
                    /* FIN CUERPO */
                    $path = 'uploads/Reportes/' . $ID;
                    // print $path;
                    if (!file_exists($path)) {
                        mkdir($path, 0777, true);
                    }
                    $file_name = "REPORTE FOTOS DESPUES " . $row->Cliente . " " . date("Y-m-d His");
                    $url = $path . '/' . $file_name . '.pdf';
                    /* Borramos el archivo anterior */
                    if (delete_files('uploads/Reportes/' . $ID)) {
                        
                    }

                    $pdf->Output($url);
                    print base_url() . $url;
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onReporteLevantamientoProcesoPrinciple() {
        try {
            if (isset($_POST["ID"])) {
                $ID = $this->input->post("ID");
                $Concepto = $this->trabajo_model->getDetalleFotosProceso($ID);
                if (!empty($Concepto)) {
                    $pages_added = false;
                    $pdf = new FotosFPDLPP('L', 'mm', array(279/* ANCHO */, 216/* ALTURA */));
                    $nfotosxconcepto = 0;
                    foreach ($Concepto as $i => $row) {
                        /* ENCABEZADO */
                        $pdf->CrL = $row->CR;
                        $pdf->SucursalL = $row->Sucursal;
                        $pdf->EmpresaL = $row->Empresa;
                        $pdf->ConceptoL = $row->Concepto;
                        $pdf->ClienteL = $row->Cliente;
                        $pdf->DireccionL = $row->Direccion;
                        $pdf->CentroCostoL = $row->CentroCosto;
                        /* DETALLE IMAGENES */
                        $pdf->SetFont('Arial', 'I', 16);
                        $pdf->AddPage();
                        $pdf->SetX(5);
                        $pdf->SetY(100);
                        $pdf->MultiCell(260, 6, strtoupper(utf8_decode($row->Concepto)), 0, 'C');

                        $Tiempos = $this->trabajo_model->getTiempoFotosProcesoDetalleByIDConcepto($row->ID);
                        foreach ($Tiempos as $key => $dTiempo) {
                            $fotos = $this->trabajo_model->getDetalleFotosProcesoXID($row->ID, $dTiempo->Tiempo);
                            $nfotos = count($fotos);
                            $fnfotos = count($fotos);
                            $nimg = 0;
                            $pdf->AliasNbPages();
                            if (!$pages_added) {
                                $pdf->AddPage();
                            }
                            $Contador_Tiempo = 1;
                            foreach ($fotos as $key => $foto) {
                                $nimg += 1;
                                /* ANTES */
                                /* Valida el tamaño de la imagen para saber si la pone más pequeña */
                                $dimensiones = getimagesize(utf8_decode($foto->Url));
                                /* Ancho $dimensiones[0] */
                                /* Alto $dimensiones[1] */
                                $YCuandoSonTres = 85;
                                $YCuandoSonDos = 80;
                                $widthSonDos = 115;
                                $YCuandoEsUno = 80;
                                $widthEsUno = 115;

                                if ($Contador_Tiempo === 1) {
                                    $pdf->SetFont('Arial', '', 14);
                                    $pdf->SetY(40);
                                    $pdf->SetX(0);
                                    $TiempoDef = ($row->ControlProceso === 'Semanas') ? "Semana No. " : "Día No. ";
                                    $pdf->Cell(279, 5, $TiempoDef . $dTiempo->Tiempo . '  Porcentaje: ' . $dTiempo->Porcentaje, 0, 0, 'C');
                                    $Contador_Tiempo = 0;
                                }

                                if ($dimensiones[1] > $dimensiones[0]) {
                                    $YCuandoSonTres = 52;
                                    $YCuandoSonDos = 52;
                                    $widthSonDos = 82;
                                    $YCuandoEsUno = 52;
                                    $widthEsUno = 82;
                                }
                                /* CUANDO SOLO SON DOS FOTOS Y ES LA PRIMERA */
                                if ($nimg == 1 && $nfotos > 1 && $nfotos == 2) {
                                    $pdf->Image($foto->Url, 20/* X */, $YCuandoSonDos/* Y */, $widthSonDos/* W *//* H */);
                                } else if ($nimg == 1 && $nfotos > 1) {
                                    $pdf->Image($foto->Url, 10/* X */, $YCuandoSonTres/* Y */, 84/* W *//* H */);
                                } else if ($nimg == 1 && $nfotos == 1) {
                                    /* CUANDO SOLO TIENE UNA IMAGEN EL CONCEPTO O UN CONCEPTO ANTERIOR YA SOLO LE FALTABA UNA IMAGEN */
                                    $pdf->Image($foto->Url, 85/* X */, $YCuandoEsUno/* Y */, $widthEsUno/* W *//* H */);
                                }
                                /* CUANDO SOLO SON DOS FOTOS Y ES LA SEGUNDA */
                                if ($nimg == 2 && $fnfotos == 2) {
                                    $pdf->Image($foto->Url, 145/* X */, $YCuandoSonDos/* Y */, $widthSonDos/* W *//* H */);
                                }
                                /* Cuando es la segunda imagen pero hay más por imprimir */ else if ($nimg == 2 && $nfotos >= 2) {
                                    $pdf->Image($foto->Url, 97/* X */, $YCuandoSonTres/* Y */, 84/* W *//* H */);
                                }
                                /* Cuando al concepto le faltaba una imagen y solo quedan dos por imprimir */ else if ($nimg == 2 && $nfotos == 1) {
                                    $pdf->Image($foto->Url, 145/* X */, $YCuandoSonDos/* Y */, $widthSonDos/* W *//* H */);
                                }
                                /* Cuando es la tercera imagen */
                                if ($nimg == 3) {
                                    $pdf->Image($foto->Url, 185/* X */, $YCuandoSonTres/* Y */, 84/* W *//* H */);
                                }
                                $nfotos--;
                                //Se pone para que valide antes de agregar
                                if ($nimg == 3 && $nfotos > 0) {
                                    $pages_added = true;
                                    $pdf->AddPage();
                                    $nimg = 0;
                                    $Contador_Tiempo = 1;
                                } else {
                                    $pages_added = false;
                                }
                            }
                            /* FIN DETALLE IMAGENES */
                        }
                        /* FIN DETALLE IMAGENES */
                    }
                    /* FIN CUERPO */
                    $path = 'uploads/Reportes/' . $ID;
                    // print $path;
                    if (!file_exists($path)) {
                        mkdir($path, 0777, true);
                    }
                    $file_name = "REPORTE FOTOS PROCESO " . $row->Cliente . " " . date("Y-m-d His");
                    $url = $path . '/' . $file_name . '.pdf';
                    /* Borramos el archivo anterior */
                    if (delete_files('uploads/Reportes/' . $ID)) {
                        
                    }

                    $pdf->Output($url);
                    print base_url() . $url;
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /* Reporte Cajero */

    public function onReporteCajero() {
        try {
            if (isset($_POST["ID"])) {
                $ID = $this->input->post("ID");
                $Concepto = $this->trabajo_model->getDetalleFotosCajero($ID);
                $Encabezado = $Concepto[0];
                if (!empty($Concepto)) {
                    $pages_added = false;
                    $pdf = new FotosFPB('L', 'mm', array(279/* ANCHO */, 216/* ALTURA */));
                    $pdf->AddPage();
                    $pdf->AliasNbPages();
                    $pdf->SetAutoPageBreak(false, 1);
                    $pdf->SetTextColor(255, 255, 255);
                    $pdf->SetFont('Arial', 'B', 28);
                    $pdf->SetY(40);
                    $pdf->SetX(10);
                    $pdf->Cell(279, 5, utf8_decode('CR ó Folio:'), 0, 0, 'L');
                    $pdf->SetX(115);
                    $pdf->SetFont('Arial', 'B', 24);
                    $pdf->Cell(120, 5, strtoupper(utf8_decode($Encabezado->FolioCliente)), 0, 0, 'L');

                    $pdf->SetY(63);
                    $pdf->SetX(10);
                    $pdf->SetFont('Arial', 'B', 20);
                    $pdf->Cell(279, 5, utf8_decode('Sitio:'), 0, 0, 'L');
                    $pdf->SetX(115);
                    $pdf->SetFont('Arial', 'B', 24);
                    $pdf->Cell(120, 5, strtoupper(utf8_decode($Encabezado->Sucursal)), 0, 0, 'L');

                    $pdf->SetY(100);
                    $pdf->SetX(10);
                    $pdf->SetFont('Arial', 'B', 20);
                    $pdf->Cell(279, 5, utf8_decode('Proyecto:'), 0, 0, 'L');
                    $pdf->SetX(115);
                    $pdf->SetFont('Arial', 'B', 24);
                    $pdf->Cell(120, 5, strtoupper(utf8_decode($Encabezado->CentroCosto)), 0, 0, 'L');

                    $pdf->SetY(136);
                    $pdf->SetX(10);
                    $pdf->SetFont('Arial', 'B', 20);
                    $pdf->Cell(279, 5, utf8_decode('Empresa Contratista:'), 0, 0, 'L');
                    $pdf->SetX(115);
                    $pdf->SetFont('Arial', 'B', 22);
                    $pdf->Cell(120, 5, strtoupper(utf8_decode($Encabezado->Empresa)), 0, 0, 'L');

                    $pdf->SetY(190);
                    $pdf->SetX(10);
                    $pdf->SetFont('Arial', 'B', 14);
                    $pdf->Cell(279, 5, utf8_decode('FECHA: ' . $Encabezado->FechaCreacion), 0, 0, 'L');

                    $pdf->SetY(180);
                    $pdf->SetX(170);
                    $pdf->SetFont('Arial', 'B', 9);
                    $pdf->SetTextColor(0, 112, 192);
                    $pdf->Cell(279, 5, utf8_decode('DIRECCIÓN:'), 0, 0, 'L');
                    $pdf->SetY(185);
                    $pdf->SetX(170);
                    $pdf->SetFont('Arial', 'B', 8);
                    $pdf->MultiCell(100, 3.5, strtoupper(utf8_decode($Encabezado->Direccion)), 0, 'L');

                    /* ENCABEZADO */
                    $pdf->CrL = $Encabezado->CR;
                    $pdf->SucursalL = $Encabezado->Sucursal;
                    $pdf->EmpresaL = $Encabezado->Empresa;
                    $pdf->ConceptoL = $Encabezado->Concepto;
                    $pdf->ClienteL = $Encabezado->Cliente;
                    $pdf->DireccionL = $Encabezado->Direccion;

                    $nfotos = count($Concepto);
                    $nimg = 0;
                    if (!$pages_added) {
                        $pdf->AddPage();
                    }

                    foreach ($Concepto as $i => $row) {

                        /* DETALLE IMAGENES */
                        $nimg += 1;
                        /* Valida el tamaño de la imagen para saber si la pone más pequeña */
                        $dimensiones = getimagesize(utf8_decode($row->Url));
                        $ancho = ($dimensiones[1] > $dimensiones[0]) ? 45 : 80;
                        $X1 = ($dimensiones[1] > $dimensiones[0]) ? 52 : 15;
                        $X2 = ($dimensiones[1] > $dimensiones[0]) ? 183 : 146;
                        $pdf->SetTextColor(14, 114, 236);
                        $pdf->SetFont('Arial', 'B', 9);
                        $pdf->SetY(104);
                        if ($nimg == 1) {
                            $pdf->Image($row->Url, $X1/* X */, 20/* Y */, $ancho/* W *//* H */);
                            $pdf->SetX(13);
                            $pdf->Cell(123, 8, strtoupper(utf8_decode($row->ObservacionFoto)), 0, 1, 'C');
                        }
                        /* Cuando es la segunda imagen */
                        if ($nimg == 2) {
                            $pdf->Image($row->Url, $X2/* X */, 20/* Y */, $ancho/* W *//* H */);
                            $pdf->SetX(144);
                            $pdf->Cell(123, 8, strtoupper(utf8_decode($row->ObservacionFoto)), 0, 1, 'C');
                        }
                        $pdf->SetY(201);
                        /* Cuando es la tercera imagen */
                        if ($nimg == 3) {
                            $pdf->Image($row->Url, $X1/* X */, 117/* Y */, $ancho/* W *//* H */);
                            $pdf->SetX(13);
                            $pdf->Cell(123, 8, strtoupper(utf8_decode($row->ObservacionFoto)), 0, 1, 'C');
                        }
                        if ($nimg == 4) {
                            $pdf->Image($row->Url, $X2/* X */, 117/* Y */, $ancho/* W *//* H */);
                            $pdf->SetX(144);
                            $pdf->Cell(123, 8, strtoupper(utf8_decode($row->ObservacionFoto)), 0, 1, 'C');
                        }
                        $nfotos --;
                        //Se pone para que valide antes de agregar
                        if ($nimg == 4 && $nfotos > 0) {
                            $pages_added = true;
                            $pdf->AddPage();
                            $nimg = 0;
                        } else {
                            $pages_added = false;
                        }
                        /* FIN DETALLE IMAGENES */
                    }
                    /* Ultima hoja */
                    $pdf->Last = 'Si';
                    $pdf->AddPage();
                    $pdf->SetFont('Arial', 'BU', 12);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetY(20);
                    $pdf->SetX(20);
                    $pdf->MultiCell(115, 5, strtoupper(utf8_decode($Encabezado->FolioCliente . ', ' . $Encabezado->Sucursal . ' - ' . $Encabezado->CentroCosto)), 0, 'L');

                    $pdf->SetFont('Arial', 'U', 9);
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetY(40);
                    $pdf->SetX(20);
                    $pdf->Cell(34, 5, utf8_decode('1.- FECHA DE VISITA: '), 0, 0, 'L');
                    $pdf->SetFont('Arial', '', 9);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->Cell(55, 5, strtoupper(utf8_decode($Encabezado->FechaVisita)), 0, 0, 'L');

                    $pdf->SetFont('Arial', 'U', 9);
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetY(45);
                    $pdf->SetX(20);
                    $pdf->Cell(44, 5, utf8_decode('2.- ENCARGADO DEL SIITIO: '), 0, 0, 'L');
                    $pdf->SetFont('Arial', '', 9);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->Cell(55, 5, strtoupper(utf8_decode($Encabezado->EncargadoSitio)), 0, 0, 'L');

                    $pdf->SetFont('Arial', 'U', 9);
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetY(50);
                    $pdf->SetX(20);
                    $pdf->Cell(44, 5, utf8_decode('3.- HORARIO DE ATENCION: '), 0, 0, 'L');
                    $pdf->SetFont('Arial', '', 9);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->Cell(55, 5, strtoupper(utf8_decode($Encabezado->HorarioAtencion)), 0, 0, 'L');

                    $pdf->SetFont('Arial', 'U', 9);
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetY(55);
                    $pdf->SetX(20);
                    $pdf->Cell(49, 5, utf8_decode('4.- RESTRICCION DE ACCESO: '), 0, 0, 'L');
                    $pdf->SetFont('Arial', '', 9);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->Cell(55, 5, strtoupper(utf8_decode($Encabezado->RestriccionAcceso)), 0, 0, 'L');

                    $pdf->SetFont('Arial', 'U', 9);
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetY(60);
                    $pdf->SetX(20);
                    $pdf->Cell(44, 5, utf8_decode('5.- AIRE ACONDICIONADO: '), 0, 0, 'L');
                    $pdf->SetFont('Arial', '', 9);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->Cell(55, 5, strtoupper(utf8_decode($Encabezado->AireAcondicionado)), 0, 0, 'L');

                    $pdf->SetFont('Arial', 'U', 9);
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetY(65);
                    $pdf->SetX(20);
                    $pdf->Cell(23, 5, utf8_decode('6.- CARCASA: '), 0, 0, 'L');
                    $pdf->SetFont('Arial', '', 9);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->Cell(55, 5, strtoupper(utf8_decode($Encabezado->Carcasa)), 0, 0, 'L');

                    $pdf->SetFont('Arial', 'U', 9);
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetY(70);
                    $pdf->SetX(20);
                    $pdf->Cell(49, 5, utf8_decode('7.- UPS/SUPRESOR DE PICOS: '), 0, 0, 'L');
                    $pdf->SetFont('Arial', '', 9);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->Cell(55, 5, strtoupper(utf8_decode($Encabezado->UPS)), 0, 0, 'L');

                    $pdf->SetFont('Arial', 'U', 9);
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetY(75);
                    $pdf->SetX(20);
                    $pdf->Cell(47, 5, utf8_decode('8.- SEÑALIZACIÓN INTERIOR: '), 0, 0, 'L');
                    $pdf->SetFont('Arial', '', 9);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->Cell(55, 5, strtoupper(utf8_decode($Encabezado->SenalizacionInterior)), 0, 0, 'L');

                    $pdf->SetFont('Arial', 'U', 9);
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetY(80);
                    $pdf->SetX(20);
                    $pdf->Cell(48, 5, utf8_decode('9.- SEÑALIZACIÓN EXTERIOR: '), 0, 0, 'L');
                    $pdf->SetFont('Arial', '', 9);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->Cell(55, 5, strtoupper(utf8_decode($Encabezado->SenalizacionExterior)), 0, 0, 'L');

                    $pdf->SetFont('Arial', 'U', 9);
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetY(85);
                    $pdf->SetX(20);
                    $pdf->Cell(50, 5, utf8_decode('10.- CANALIZACION DE DATOS:  '), 0, 0, 'L');
                    $pdf->SetFont('Arial', '', 9);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->Cell(55, 5, strtoupper(utf8_decode($Encabezado->CanalizacionDatos)), 0, 0, 'L');

                    $pdf->SetFont('Arial', 'U', 9);
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetY(90);
                    $pdf->SetX(20);
                    $pdf->Cell(58, 5, utf8_decode('11.- CANALIZACION DE SEGURIDAD: '), 0, 0, 'L');
                    $pdf->SetFont('Arial', '', 9);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->Cell(55, 5, strtoupper(utf8_decode($Encabezado->CanalizacionSeguridad)), 0, 0, 'L');

                    $pdf->SetFont('Arial', 'U', 9);
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetY(95);
                    $pdf->SetX(20);
                    $pdf->Cell(54, 5, utf8_decode('12.- PRUEBA DE CALA DE FIRME: '), 0, 0, 'L');
                    $pdf->SetFont('Arial', '', 9);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->Cell(55, 5, strtoupper(utf8_decode($Encabezado->PruebaCalaFirme)), 0, 0, 'L');

                    $pdf->SetFont('Arial', 'U', 9);
                    $pdf->SetTextColor(255, 0, 0);
                    $pdf->SetY(100);
                    $pdf->SetX(20);
                    $pdf->Cell(30, 5, utf8_decode('13.- TIPO DE PISO: '), 0, 0, 'L');
                    $pdf->SetFont('Arial', '', 9);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->Cell(55, 5, strtoupper(utf8_decode($Encabezado->TipoPiso)), 0, 0, 'L');


                    $pdf->SetFont('Arial', 'B', 9);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetY(115);
                    $pdf->SetX(20);
                    $pdf->Cell(55, 5, utf8_decode('OBSERVACIONES: '), 0, 0, 'L');
                    $pdf->SetY(122);
                    $pdf->SetX(20);
                    $pdf->SetFont('Arial', '', 9);
                    $pdf->MultiCell(110, 4, iconv("UTF-8", "CP1250//TRANSLIT", $Encabezado->Observaciones), 0, 'J');
                    $ExtensionesPermitidas = array('jpeg', 'png', 'jpg');
                    /* Imagen de reporte visita previa */
                    if (!empty($Encabezado->Adjunto)) {

                        $ext = pathinfo($Encabezado->Adjunto, PATHINFO_EXTENSION);


                        if (in_array($ext, $ExtensionesPermitidas)) {
                            $pdf->Image($Encabezado->Adjunto, 146/* X */, 25/* Y */, 120/* W *//* H */);
                        } else {
                            $pdf->SetFont('Arial', 'B', 10);
                            $pdf->SetY(25);
                            $pdf->SetX(150);
                            $pdf->MultiCell(105, 5, utf8_decode('¡ARCHIVO ADJUNTO NO VÁLIDO, VERIFICA QUE SEA UN ARCHIVO DE IMAGEN (JPG, PNG, GIF)!'), 0, 'C');
                        }
                    }
                    /* FIN CUERPO */
                    $path = 'uploads/Reportes/' . $ID;
                    // print $path;
                    if (!file_exists($path)) {
                        mkdir($path, 0777, true);
                    }
                    $file_name = "PRESENTACION CAJEROS BBVA " . $row->Cliente . " " . date("Y-m-d His");
                    $url = $path . '/' . $file_name . '.pdf';
                    /* Borramos el archivo anterior */
                    if (delete_files('uploads/Reportes/' . $ID)) {
                        
                    }

                    $pdf->Output($url);
                    print base_url() . $url;
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /* Reportes Nordes */

    public function onReporteNordesActaRecepcion() {
        //conexion a bd
        try {
            $ID = $_POST['ID'];
            $trabajo = $this->trabajo_model->getActaRecepcionNordes($ID);
            // $trabajo[0]->Movimiento;
            // Creación del objeto de la clase heredada
            $pdf = new PDF('P', 'mm', array(279/* ANCHO */, 216/* ALTURA */));
            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->SetAutoPageBreak(false, 300);
            $pdf->SetLineWidth(0.1);

            /* ENCABEZADO */
            // Logo
            $pdf->Image(base_url() . 'uploads/Clientes/16/logo_nordes.png', 10, 15, 65);
            // Arial bold 15
            $pdf->SetFont('Arial', '', 8.5);
            // Título
            $pdf->SetY(35);
            // Movernos a la derecha
            $pdf->SetX(5);
            $pdf->SetTextColor(37, 51, 109);
            $pdf->SetDrawColor(37, 51, 109);
            /* CUERPO */
            $pdf->SetY(35);
            $pdf->SetX(85);
            $pdf->Cell(30, 5, utf8_decode("FECHA:"), 0, 1, 'R');
            $pdf->SetY(35);
            $pdf->SetX(115);
            $pdf->SetTextColor(0, 0, 0);
            $pdf->Cell(80, 5, utf8_decode($trabajo[0]->FechaCreacion), 'B', 1, 'C');

            /* SEGUNDA PARTE ENCABEZADO */
            $pdf->SetFont('Arial', 'B', 9.5);
            $pdf->SetTextColor(37, 51, 109);
            $pdf->SetY(55);
            $pdf->SetX(90);
            $pdf->Cell(40, 5, utf8_decode("ACTA DE RECEPCIÓN:"), 0, 1, 'C');

            $tiendas = preg_split("/-/", $trabajo[0]->NombreSucursal);

            $pdf->SetFont('Arial', '', 9);
            $pdf->SetY(75);
            $pdf->SetX(15);
            $pdf->Cell(20, 5, utf8_decode("TIENDA:"), 0, 1, 'L');
            $pdf->SetY(75);
            $pdf->SetX(30);
            $pdf->SetTextColor(0, 0, 0);
            if (count($tiendas) > 1) {
                $pdf->Cell(125, 5, utf8_decode(trim($tiendas[0])), 'B', 1, 'L');
            } else {
                $pdf->Cell(125, 5, utf8_decode($trabajo[0]->NombreSucursal), 'B', 1, 'L');
            }
            $pdf->SetTextColor(37, 51, 109);
            $pdf->SetY(82);
            $pdf->SetX(15);
            $pdf->Cell(20, 5, utf8_decode("CENTRO COMERCIAL:"), 0, 1, 'L');
            $pdf->SetY(82);
            $pdf->SetX(50);
            $pdf->SetTextColor(0, 0, 0);
            if (count($tiendas) > 1) {
                $pdf->Cell(105, 5, utf8_decode(trim($tiendas[1])), 'B', 1, 'L');
            } else {
                $pdf->Cell(105, 5, utf8_decode($trabajo[0]->NombreSucursal), 'B', 1, 'L');
            }


            $pdf->SetY(105);
            $pdf->SetX(15);
            $pdf->SetTextColor(37, 51, 109);
            $pdf->Cell(20, 5, utf8_decode("DESCRIPCIÓN DE LOS TRABAJOS:"), 0, 1, 'L');
            $pdf->SetY(105);
            $pdf->SetX(16);
            $pdf->SetTextColor(0, 0, 0);
            $pdf->MultiCell(180, 7, '                                                               ' . strtoupper(utf8_decode($trabajo[0]->TrabajoRequerido)), 0, 'J');
            $pdf->Line(70, 110, 195, 110);
            $pdf->Line(16, 117, 195, 117);
            $pdf->Line(16, 124, 195, 124);
            $pdf->Line(16, 131, 195, 131);
            $pdf->Line(16, 138, 195, 138);
            /* FIRMAS PRIMER BLOQUE */
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->SetTextColor(37, 51, 109);
            $pdf->SetY(190);
            $pdf->SetX(76);
            $pdf->Cell(63, 5, utf8_decode("NOMBRE Y FIRMA DE ENCARGADA/O:"), 'T', 1, 'C');

            $pdf->SetY(240);
            $pdf->SetX(76);
            $pdf->Cell(63, 5, utf8_decode("SELLO TIENDA"), 'T', 1, 'C');

            /* PIE DE PAGINA */
            $pdf->SetFont('Arial', '', 6.5);
            $pdf->SetY(255);
            $pdf->SetX(110);
            $pdf->Cell(90, 4, utf8_decode("NORDÉS INTEGRACIONES/GRG."), 0, 1, 'R');
            /* FIN CUERPO */
            $path = 'uploads/Reportes/' . $ID;
            // print $path;
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file_name = "ACTA RECEPCION " . $trabajo[0]->NombreCliente . " " . date("Y-m-d His");
            $url = $path . '/' . $file_name . '.pdf';
            if (delete_files('uploads/Reportes/' . $ID)) {
                
            }

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onReporteNordesReporteTableros() {
        //conexion a bd
        try {
            $ID = $_POST['ID'];
            $trabajo = $this->trabajo_model->getActaRecepcionNordes($ID);
            // $trabajo[0]->Movimiento;
            // Creación del objeto de la clase heredada
            $pdf = new PDF('L', 'mm', array(216/* ANCHO */, 279/* ALTURA */));
            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->SetAutoPageBreak(false, 300);
            $pdf->SetLineWidth(0.1);

            /* ENCABEZADO */
            // Logo
            $pdf->Image(base_url() . 'uploads/Clientes/16/T1.png', 5, 3, 270);
            $pdf->Image(base_url() . 'uploads/Clientes/16/T2.png', 5, 170, 270);
            // Arial bold 15
            $pdf->SetFont('Arial', '', 8.5);
            // Título
            // Movernos a la derecha
            $pdf->SetX(5);
            $pdf->SetTextColor(37, 51, 109);
            $pdf->SetFont('Arial', 'B', 9.5);
            /* CUERPO */
            $pdf->SetY(34.5);
            $pdf->SetX(185);
            $pdf->SetTextColor(0, 0, 0);
            $pdf->Cell(80, 5, utf8_decode($trabajo[0]->FechaCreacion), 0, 1, 'C');
            $pdf->SetY(25.5);
            $pdf->SetX(185);
            $pdf->Cell(80, 5, utf8_decode($trabajo[0]->CR), 0, 1, 'C');
            /* SEGUNDA PARTE ENCABEZADO */
            $pdf->SetY(55);
            $pdf->SetX(90);
            $tiendas = preg_split("/-/", $trabajo[0]->NombreSucursal);

            $pdf->SetY(25.5);
            $pdf->SetX(50);
            $pdf->SetTextColor(0, 0, 0);
            if (count($tiendas) > 1) {
                $pdf->Cell(125, 5, utf8_decode(trim($tiendas[0])), 0, 1, 'L');
            } else {
                $pdf->Cell(125, 5, utf8_decode($trabajo[0]->NombreSucursal), 0, 1, 'L');
            }

            $pdf->SetY(34.5);
            $pdf->SetX(50);
            if (count($tiendas) > 1) {
                $pdf->Cell(105, 5, utf8_decode(trim($tiendas[1])), 0, 1, 'L');
            } else {
                $pdf->Cell(105, 5, utf8_decode($trabajo[0]->NombreSucursal), 0, 1, 'L');
            }


            /* FIN CUERPO */
            $path = 'uploads/Reportes/' . $ID;
            // print $path;
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file_name = "REPORTE TABLEROS NORDES " . $trabajo[0]->NombreCliente . " " . date("Y-m-d His");
            $url = $path . '/' . $file_name . '.pdf';
            if (delete_files('uploads/Reportes/' . $ID)) {
                
            }

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onReporteCaratulaBBVA() {
        $ID = $_POST['ID'];
        $trabajo = $this->trabajo_model->getCaratulaBBVA($ID);
        if (!empty($trabajo)) {
            $datosEncabezado = $trabajo[0];

            // Creación del objeto de la clase heredada
            $pdf = new PCB('L', 'mm', array(279/* ANCHO */, 216/* ALTURA */));
            $pdf->FolioCliente = $datosEncabezado->FolioCliente;
            $pdf->Empresa = $datosEncabezado->Empresa;
            $pdf->CentroCostos = $datosEncabezado->CentroCostos;
            $pdf->Especialidad = $datosEncabezado->Especialidad;

            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->SetAutoPageBreak(true, 10);


            /* DETALLE  */
            $ImporteTotal = 0;
            $row = 0;
            foreach ($trabajo as $key => $value) {
                $row ++;
                $pdf->SetFont('Arial', '', 5.81);
                $pdf->SetWidths(array(10, 15, 100, 15, 15, 15, 25, 25, 25, 25));
                $pdf->SetAligns(array('C', 'C', 'L', 'C', 'C', 'C', 'C', 'C', 'C', 'C'));
                $pdf->Row(array(
                    str_pad($row, 3, "0", STR_PAD_LEFT),
                    utf8_decode($value->Clave),
                    utf8_decode($value->Concepto),
                    utf8_decode($value->TipoPrecio),
                    utf8_decode($value->Catalogo),
                    utf8_decode($value->TipoConcepto),
                    utf8_decode($value->Unidad),
                    utf8_decode($value->Cantidad),
                    "$ " . number_format($value->Precio, 2),
                    "$ " . number_format($value->ImporteRenglon, 2)
                ));
                $ImporteTotal += $value->ImporteRenglon;
            }
            /* FINAL DEL DETALLE */

            $pdf->SetWidths(array(20, 20));
            $pdf->SetAligns(array('C', 'C'));
            $pdf->RowTotal(array('SUB TOTAL:', "$ " . number_format($ImporteTotal, 2)));
            $Y = $pdf->GetY();
            $pdf->SetY($Y);
            $pdf->SetX(255);
            $pdf->SetFillColor(184, 204, 228);
            $pdf->SetTextColor(0, 0, 0);
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(20, 5, utf8_decode("100%"), 1, 1, 'C', true);
            $Y = $pdf->GetY();
            $pdf->SetY($Y);
            $pdf->SetX(235);
            $pdf->SetFillColor(0, 32, 96);
            $pdf->SetTextColor(255, 255, 255);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(20, 5, utf8_decode("TOTAL:"), 1, 1, 'C', true);
            $pdf->SetY($Y);
            $pdf->SetX(255);
            $pdf->Cell(20, 5, "$ " . number_format($ImporteTotal, 2), 1, 1, 'C', true);


            /* FIN CUERPO */
            $path = 'uploads/Reportes/' . $ID;
            // print $path;
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file_name = "REPORTE_CARATULA " . $datosEncabezado->Cliente . " " . date("Y-m-d His");
            $url = $path . '/' . $file_name . '.pdf';
            /* Borramos el archivo anterior */
            if (delete_files('uploads/Reportes/' . $ID)) {
                
            }
            $pdf->Output($url);
            print base_url() . $url;
        }
    }

    public function onReporteLevantamientoSemanal() {
        try {
            if (isset($_POST["ID"])) {
                $ID = $this->input->post("ID");
                $DetalleID = $this->input->post("DetalleID");
                $Concepto = $this->trabajo_model->getDetalleFotosSemana($ID, $DetalleID);
                $row = $Concepto[0];
                //
                if (!empty($Concepto)) {
                    $pages_added = false;
                    $pdf = new FotosFPSMeor('L', 'mm', array(279/* ANCHO */, 175/* ALTURA */));
                    $nfotosxconcepto = 0;

                    /* ENCABEZADO */
                    $pdf->SetFont('Arial', '', 34);
                    $pdf->AddPage();

                    $pdf->SetY(35);
                    $pdf->SetX(60);
                    $pdf->MultiCell(160, 16, 'Reporte de Avance Semanal de Obra', 0, 'C');
                    $pdf->SetFont('Arial', '', 15);

                    $pdf->SetY(90);
                    $pdf->SetX(5);
                    $pdf->MultiCell(260, 8, utf8_decode('* Proyecto: ' . strtoupper($row->Sucursal)), 0, 'C');
                    $pdf->SetY(100);
                    $pdf->SetX(5);
                    $pdf->MultiCell(260, 8, utf8_decode('* Dirección: ' . strtoupper($row->Direccion)), 0, 'C');
                    $pdf->SetY(110);
                    $pdf->SetX(5);
                    $pdf->MultiCell(260, 8, utf8_decode('* Periodo: SEMANA ' . strtoupper($row->SemanaDia)), 0, 'C');
                    $pdf->SetY(120);
                    $pdf->SetX(5);
                    $pdf->MultiCell(260, 8, utf8_decode('* Contratista: ' . strtoupper($row->Empresa)), 0, 'C');


                    $pdf->AddPage();
                    $pdf->SetTextColor(127, 127, 127);
                    $pdf->SetFont('Arial', 'B', 15);
                    $pdf->SetY(22);
                    $pdf->SetX(55);
                    $pdf->MultiCell(180, 6, utf8_decode('Avance Real VS Avance Programado (%)'), 0, 'L');


                    $ExtensionesPermitidas = array('jpeg', 'png', 'jpg');
                    /* Imagen de reporte visita previa */
                    if (!empty($row->Anexo)) {

                        $ext = pathinfo($row->Anexo, PATHINFO_EXTENSION);


                        if (in_array($ext, $ExtensionesPermitidas)) {
                            $pdf->Image(base_url() . utf8_decode($row->Anexo), 50, 40, 180);
                        } else {
                            $pdf->SetFont('Arial', 'B', 10);
                            $pdf->SetY(25);
                            $pdf->SetX(150);
                            $pdf->MultiCell(105, 5, utf8_decode('¡ARCHIVO ADJUNTO NO VÁLIDO, VERIFICA QUE SEA UN ARCHIVO DE IMAGEN (JPG, PNG, GIF)!'), 0, 'C');
                        }
                    }

                    $pdf->AddPage();
                    $pdf->SetTextColor(127, 127, 127);
                    $pdf->SetFont('Arial', 'B', 15);
                    $pdf->SetY(22);
                    $pdf->SetX(55);
                    $pdf->MultiCell(180, 10, utf8_decode('Actividades ejecutadas esta semana (' . $row->InicioFin . ')'), 0, 'C');


                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetFont('Arial', '', 17);
                    $pdf->SetY(35);
                    $pdf->SetX(5);
                    $pdf->MultiCell(260, 10, utf8_decode(strtoupper($row->Concepto)), 0, 'L');

                    $pdf->AddPage();
                    $pdf->SetTextColor(127, 127, 127);
                    $pdf->SetFont('Arial', 'B', 15);
                    $pdf->SetY(22);
                    $pdf->SetX(55);
                    $pdf->MultiCell(180, 8, utf8_decode('Actividades a realizar la próxima semana (' . $row->InicioFinProximaSemana . ')'), 0, 'C');

                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetFont('Arial', '', 17);
                    $pdf->SetY(35);
                    $pdf->SetX(5);
                    $pdf->MultiCell(260, 10, utf8_decode(strtoupper($row->Concepto2)), 0, 'L');


                    $pdf->AddPage();
                    $pdf->SetTextColor(127, 127, 127);
                    $pdf->SetFont('Arial', 'B', 15);
                    $pdf->SetY(22);
                    $pdf->SetX(55);
                    $pdf->MultiCell(180, 8, utf8_decode('Restricciones / Preocupaciones (poner con puntos)'), 0, 'L');

                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetFont('Arial', '', 17);
                    $pdf->SetY(35);
                    $pdf->SetX(5);
                    $pdf->MultiCell(260, 10, utf8_decode(strtoupper($row->Concepto3)), 0, 'L');


                    /* DETALLE IMAGENES */
                    $Contador_Tiempo = 0;
                    $Tiempos = $this->trabajo_model->getTiempoFotosProcesoDetalleByIDConcepto($row->ID);
                    foreach ($Tiempos as $key => $dTiempo) {
                        $fotos = $this->trabajo_model->getDetalleFotosProcesoXID($row->ID, $dTiempo->Tiempo);
                        $nfotos = count($fotos);
                        $fnfotos = count($fotos);
                        $nimg = 0;
                        $pdf->AliasNbPages();
                        if (!$pages_added) {
                            $pdf->AddPage();
                        }
                        $Contador_Tiempo = 1;
                        foreach ($fotos as $key => $foto) {
                            $nimg += 1;
                            /* ANTES */
                            /* Valida el tamaño de la imagen para saber si la pone más pequeña */
                            $dimensiones = getimagesize(utf8_decode($foto->Url));
                            /* Ancho $dimensiones[0] */
                            /* Alto $dimensiones[1] */
                            $YCuandoSonTres = 65;
                            $YCuandoSonDos = 65;
                            $widthSonDos = 115;
                            $YCuandoEsUno = 80;
                            $widthEsUno = 115;

                            if ($Contador_Tiempo === 1) {

                                $pdf->SetTextColor(127, 127, 127);
                                $pdf->SetFont('Arial', 'B', 15);
                                $pdf->SetY(22);
                                $pdf->SetX(55);
                                $pdf->MultiCell(180, 6, utf8_decode('Evidencia Fotográfica (fotos de proceso)'), 0, 'L');

                                $Contador_Tiempo = 0;
                            }

                            if ($dimensiones[1] > $dimensiones[0]) {
                                $YCuandoSonTres = 42;
                                $YCuandoSonDos = 42;
                                $widthSonDos = 82;
                                $YCuandoEsUno = 42;
                                $widthEsUno = 82;
                            }
                            $pdf->SetTextColor(0, 0, 0);
                            $pdf->SetFont('Arial', 'I', 12);
                            /* CUANDO SOLO SON DOS FOTOS Y ES LA PRIMERA */
                            if ($nimg == 1 && $nfotos > 1 && $nfotos == 2) {
                                $pdf->Image($foto->Url, 20/* X */, $YCuandoSonDos/* Y */, $widthSonDos/* W *//* H */);
                                $pdf->SetY($YCuandoSonDos - 10);
                                $pdf->SetX(20);
                                $pdf->Cell($widthSonDos, 5, strtoupper(utf8_decode($foto->Observaciones)), 0, 1, 'C');
                            } else if ($nimg == 1 && $nfotos > 1) {
                                $pdf->Image($foto->Url, 10/* X */, $YCuandoSonTres/* Y */, 84/* W *//* H */);

                                $pdf->SetY($YCuandoSonTres - 10);
                                $pdf->SetX(10);
                                $pdf->Cell(84, 5, strtoupper(utf8_decode($foto->Observaciones)), 0, 1, 'C');
                            } else if ($nimg == 1 && $nfotos == 1) {
                                /* CUANDO SOLO TIENE UNA IMAGEN EL CONCEPTO O UN CONCEPTO ANTERIOR YA SOLO LE FALTABA UNA IMAGEN */
                                $pdf->Image($foto->Url, 85/* X */, $YCuandoEsUno/* Y */, $widthEsUno/* W *//* H */);
                                $pdf->SetY($YCuandoEsUno - 10);
                                $pdf->SetX(85);
                                $pdf->Cell($widthEsUno, 5, strtoupper(utf8_decode($foto->Observaciones)), 0, 1, 'C');
                            }
                            /* CUANDO SOLO SON DOS FOTOS Y ES LA SEGUNDA */
                            if ($nimg == 2 && $fnfotos == 2) {
                                $pdf->Image($foto->Url, 145/* X */, $YCuandoSonDos/* Y */, $widthSonDos/* W *//* H */);
                                $pdf->SetY($YCuandoSonDos - 10);
                                $pdf->SetX(145);
                                $pdf->Cell($widthSonDos, 5, strtoupper(utf8_decode($foto->Observaciones)), 0, 1, 'C');
                            }
                            /* Cuando es la segunda imagen pero hay más por imprimir */ else if ($nimg == 2 && $nfotos >= 2) {
                                $pdf->Image($foto->Url, 97/* X */, $YCuandoSonTres/* Y */, 84/* W *//* H */);
                                $pdf->SetY($YCuandoSonTres - 10);
                                $pdf->SetX(97);
                                $pdf->Cell(84, 5, strtoupper(utf8_decode($foto->Observaciones)), 0, 1, 'C');
                            }
                            /* Cuando al concepto le faltaba una imagen y solo quedan dos por imprimir */ else if ($nimg == 2 && $nfotos == 1) {
                                $pdf->Image($foto->Url, 145/* X */, $YCuandoSonDos/* Y */, $widthSonDos/* W *//* H */);
                                $pdf->SetY($YCuandoSonDos - 10);
                                $pdf->SetX(145);
                                $pdf->Cell($widthSonDos, 5, strtoupper(utf8_decode($foto->Observaciones)), 0, 1, 'C');
                            }
                            /* Cuando es la tercera imagen */
                            if ($nimg == 3) {
                                $pdf->Image($foto->Url, 185/* X */, $YCuandoSonTres/* Y */, 84/* W *//* H */);
                                $pdf->SetY($YCuandoSonTres - 10);
                                $pdf->SetX(185);
                                $pdf->Cell(84, 5, strtoupper(utf8_decode($foto->Observaciones)), 0, 1, 'C');
                            }
                            $nfotos--;
                            //Se pone para que valide antes de agregar
                            if ($nimg == 3 && $nfotos > 0) {
                                $pages_added = true;
                                $pdf->AddPage();
                                $nimg = 0;
                                $Contador_Tiempo = 1;
                            } else {
                                $pages_added = false;
                            }
                        }
                        /* FIN DETALLE IMAGENES */
                    }

                    /* FIN CUERPO */
                    $path = 'uploads/Reportes/' . $ID;
                    // print $path;
                    if (!file_exists($path)) {
                        mkdir($path, 0777, true);
                    }
                    $file_name = "REPORTE AVANCE SEMANAL " . $row->Cliente . " " . date("Y-m-d His");
                    $url = $path . '/' . $file_name . '.pdf';
                    /* Borramos el archivo anterior */
                    if (delete_files('uploads/Reportes/' . $ID)) {
                        
                    }
                    $pdf->Output($url);
                    print base_url() . $url;
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onReporteLevantamientoSemanalGenerico() {
        try {
            if (isset($_POST["ID"])) {
                $ID = $this->input->post("ID");
                $DetalleID = $this->input->post("DetalleID");
                $Concepto = $this->trabajo_model->getDetalleFotosSemana($ID, $DetalleID);
                $row = $Concepto[0];
                //
                if (!empty($Concepto)) {
                    $pages_added = false;
                    $pdf = new FotosFPSGenerico('L', 'mm', array(279/* ANCHO */, 175/* ALTURA */));
                    $nfotosxconcepto = 0;

                    /* ENCABEZADO */
                    $pdf->SetFont('Arial', '', 34);
                    $pdf->AddPage();


                    $pdf->SetY(35);
                    $pdf->SetX(60);
                    $pdf->MultiCell(160, 16, 'Reporte de Proceso', 0, 'C');
                    $pdf->SetFont('Arial', '', 15);

                    $pdf->SetY(90);
                    $pdf->SetX(5);
                    $pdf->MultiCell(260, 12, utf8_decode('* Proyecto: ' . strtoupper($row->Sucursal)), 0, 'C');
                    $pdf->SetY(100);
                    $pdf->SetX(5);
                    $pdf->MultiCell(260, 12, utf8_decode('* Dirección: ' . strtoupper($row->Direccion)), 0, 'C');
                    $pdf->SetY(110);
                    $pdf->SetX(5);
                    $pdf->MultiCell(260, 12, utf8_decode('* Periodo: SEMANA ' . strtoupper($row->SemanaDia)), 0, 'C');
                    $pdf->SetY(120);
                    $pdf->SetX(5);
                    $pdf->MultiCell(260, 12, utf8_decode('* Contratista: ' . strtoupper($row->Empresa)), 0, 'C');

                    $pdf->AddPage();
                    $pdf->SetTextColor(127, 127, 127);
                    $pdf->SetFont('Arial', 'B', 15);
                    $pdf->SetY(30);
                    $pdf->SetX(50);
                    $pdf->MultiCell(180, 6, utf8_decode('Actividades ejecutadas esta semana (' . $row->InicioFin . ')'), 0, 'C');


                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->SetFont('Arial', '', 20);
                    $pdf->SetY(75);
                    $pdf->SetX(5);
                    $pdf->MultiCell(260, 6, utf8_decode(strtoupper($row->Concepto)), 0, 'C');


                    /* DETALLE IMAGENES */
                    $Contador_Tiempo = 0;
                    $Tiempos = $this->trabajo_model->getTiempoFotosProcesoDetalleByIDConcepto($row->ID);
                    foreach ($Tiempos as $key => $dTiempo) {
                        $fotos = $this->trabajo_model->getDetalleFotosProcesoXID($row->ID, $dTiempo->Tiempo);
                        $nfotos = count($fotos);
                        $fnfotos = count($fotos);
                        $nimg = 0;
                        $pdf->AliasNbPages();
                        if (!$pages_added) {
                            $pdf->AddPage();
                        }
                        $Contador_Tiempo = 1;
                        foreach ($fotos as $key => $foto) {
                            $nimg += 1;
                            /* ANTES */
                            /* Valida el tamaño de la imagen para saber si la pone más pequeña */
                            $dimensiones = getimagesize(utf8_decode($foto->Url));
                            /* Ancho $dimensiones[0] */
                            /* Alto $dimensiones[1] */
                            $YCuandoSonTres = 65;
                            $YCuandoSonDos = 65;
                            $widthSonDos = 115;
                            $YCuandoEsUno = 80;
                            $widthEsUno = 115;

                            if ($Contador_Tiempo === 1) {

                                $pdf->SetTextColor(127, 127, 127);
                                $pdf->SetFont('Arial', 'B', 15);
                                $pdf->SetY(22);
                                $pdf->SetX(105);
                                $pdf->MultiCell(180, 6, utf8_decode('Evidencia Fotográfica'), 0, 'L');

                                $Contador_Tiempo = 0;
                            }

                            if ($dimensiones[1] > $dimensiones[0]) {
                                $YCuandoSonTres = 42;
                                $YCuandoSonDos = 42;
                                $widthSonDos = 82;
                                $YCuandoEsUno = 42;
                                $widthEsUno = 82;
                            }
                            $pdf->SetTextColor(0, 0, 0);
                            $pdf->SetFont('Arial', 'I', 12);
                            /* CUANDO SOLO SON DOS FOTOS Y ES LA PRIMERA */
                            if ($nimg == 1 && $nfotos > 1 && $nfotos == 2) {
                                $pdf->Image($foto->Url, 20/* X */, $YCuandoSonDos/* Y */, $widthSonDos/* W *//* H */);
                                $pdf->SetY($YCuandoSonDos - 10);
                                $pdf->SetX(20);
                                $pdf->Cell($widthSonDos, 5, strtoupper(utf8_decode($foto->Observaciones)), 0, 1, 'C');
                            } else if ($nimg == 1 && $nfotos > 1) {
                                $pdf->Image($foto->Url, 10/* X */, $YCuandoSonTres/* Y */, 84/* W *//* H */);

                                $pdf->SetY($YCuandoSonTres - 10);
                                $pdf->SetX(10);
                                $pdf->Cell(84, 5, strtoupper(utf8_decode($foto->Observaciones)), 0, 1, 'C');
                            } else if ($nimg == 1 && $nfotos == 1) {
                                /* CUANDO SOLO TIENE UNA IMAGEN EL CONCEPTO O UN CONCEPTO ANTERIOR YA SOLO LE FALTABA UNA IMAGEN */
                                $pdf->Image($foto->Url, 85/* X */, $YCuandoEsUno/* Y */, $widthEsUno/* W *//* H */);
                                $pdf->SetY($YCuandoEsUno - 10);
                                $pdf->SetX(10);
                                $pdf->Cell($widthEsUno, 5, strtoupper(utf8_decode($foto->Observaciones)), 0, 1, 'C');
                            }
                            /* CUANDO SOLO SON DOS FOTOS Y ES LA SEGUNDA */
                            if ($nimg == 2 && $fnfotos == 2) {
                                $pdf->Image($foto->Url, 145/* X */, $YCuandoSonDos/* Y */, $widthSonDos/* W *//* H */);
                                $pdf->SetY($YCuandoSonDos - 10);
                                $pdf->SetX(145);
                                $pdf->Cell($widthSonDos, 5, strtoupper(utf8_decode($foto->Observaciones)), 0, 1, 'C');
                            }
                            /* Cuando es la segunda imagen pero hay más por imprimir */ else if ($nimg == 2 && $nfotos >= 2) {
                                $pdf->Image($foto->Url, 97/* X */, $YCuandoSonTres/* Y */, 84/* W *//* H */);
                                $pdf->SetY($YCuandoSonTres - 10);
                                $pdf->SetX(97);
                                $pdf->Cell(84, 5, strtoupper(utf8_decode($foto->Observaciones)), 0, 1, 'C');
                            }
                            /* Cuando al concepto le faltaba una imagen y solo quedan dos por imprimir */ else if ($nimg == 2 && $nfotos == 1) {
                                $pdf->Image($foto->Url, 145/* X */, $YCuandoSonDos/* Y */, $widthSonDos/* W *//* H */);
                                $pdf->SetY($YCuandoSonDos - 10);
                                $pdf->SetX(145);
                                $pdf->Cell($widthSonDos, 5, strtoupper(utf8_decode($foto->Observaciones)), 0, 1, 'C');
                            }
                            /* Cuando es la tercera imagen */
                            if ($nimg == 3) {
                                $pdf->Image($foto->Url, 185/* X */, $YCuandoSonTres/* Y */, 84/* W *//* H */);
                                $pdf->SetY($YCuandoSonTres - 10);
                                $pdf->SetX(185);
                                $pdf->Cell(84, 5, strtoupper(utf8_decode($foto->Observaciones)), 0, 1, 'C');
                            }
                            $nfotos--;
                            //Se pone para que valide antes de agregar
                            if ($nimg == 3 && $nfotos > 0) {
                                $pages_added = true;
                                $pdf->AddPage();
                                $nimg = 0;
                                $Contador_Tiempo = 1;
                            } else {
                                $pages_added = false;
                            }
                        }
                        /* FIN DETALLE IMAGENES */
                    }

                    /* FIN CUERPO */
                    $path = 'uploads/Reportes/' . $ID;
                    // print $path;
                    if (!file_exists($path)) {
                        mkdir($path, 0777, true);
                    }
                    $file_name = "REPORTE AVANCE SEMANAL " . $row->Cliente . " " . date("Y-m-d His");
                    $url = $path . '/' . $file_name . '.pdf';
                    /* Borramos el archivo anterior */
                    if (delete_files('uploads/Reportes/' . $ID)) {
                        
                    }
                    $pdf->Output($url);
                    print base_url() . $url;
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEditarTrabajoDetalle() {
        try {
            $row = $this->input;
            switch ($row->post('CELDA')) {
                case 'CLAVE':
                    $this->db->set('Clave', $row->post('VALOR'))->where('ID', $row->post('ID'))->update('trabajosdetalle');
                    break;
                case 'DESCRIPCION':
                    $this->db->set('Concepto', $row->post('VALOR'))->where('ID', $row->post('ID'))->update('trabajosdetalle');
                    break;
                case 'PRECIO':
                    $this->db->set('Precio', $row->post('VALOR'))->set('Importe', $row->post('IMPORTE'))->where('ID', $row->post('ID'))->update('trabajosdetalle');
                    break;
                case 'UNIDAD':
                    $this->db->set('Unidad', strtoupper($row->post('VALOR')))->where('ID', $row->post('ID'))->update('trabajosdetalle');
                    break;
                case 'MONEDA':
                    $this->db->set('Moneda', strtoupper($row->post('VALOR')))->where('ID', $row->post('ID'))->update('trabajosdetalle');
                    break;
                case 'INTEXT':
                    $this->db->set('IntExt', strtoupper($row->post('VALOR')))->where('ID', $row->post('ID'))->update('trabajosdetalle');
                    break;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTotalFotosCroquisAnexos() {
        try {
            print json_encode($this->trabajo_model->getTotalFotosCroquisAnexos($this->input->get('ID'), $this->input->get('IDD')));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
