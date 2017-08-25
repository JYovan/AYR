<?php

header('Access-Control-Allow-Origin: http://control.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "/third_party/fpdf17/fpdf.php";
require_once APPPATH . "/third_party/PHPExcel.php";

class CtrlCajerosBBVA extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session');
        $this->load->model('sucursal_model');
        $this->load->model('cliente_model');
        $this->load->model('centrocostos_model');
        $this->load->model('cajerosbbva_model');
        $this->load->helper('cajeros_helper');
    }

    public function index() {
        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            $this->load->view('vEncabezado');
            $this->load->view('vNavegacion');
            $this->load->view('vCajerosBBVA');
            $this->load->view('vFooter');
        } else {
            $this->load->view('vEncabezado');
            $this->load->view('vSesion');
            $this->load->view('vFooter');
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
                'CentroCostos_ID' => (isset($CentroCostos_ID) && $CentroCostos_ID !== 0) ? $CentroCostos_ID : NULL,
                'FolioCliente' => (isset($FolioCliente) && $FolioCliente !== '') ? $FolioCliente : NULL,
                'Observaciones' => (isset($Observaciones) && $Observaciones !== '') ? $Observaciones : NULL,
                'FechaVisita' => (isset($FechaVisita) && $FechaVisita !== '') ? $FechaVisita : NULL,
                'EncargadoSitio' => (isset($EncargadoSitio) && $EncargadoSitio !== '') ? $EncargadoSitio : NULL,
                'HorarioAtencion' => (isset($HorarioAtencion) && $HorarioAtencion !== '') ? $HorarioAtencion : NULL,
                'RestriccionAcceso' => (isset($RestriccionAcceso) && $RestriccionAcceso !== '') ? $RestriccionAcceso : NULL,
                'AireAcondicionado' => (isset($AireAcondicionado) && $AireAcondicionado !== '') ? $AireAcondicionado : NULL,
                'Carcasa' => (isset($Carcasa) && $Carcasa !== '') ? $Carcasa : NULL,
                'UPS' => (isset($UPS) && $UPS !== '') ? $UPS : NULL,
                'SenalizacionInterior' => (isset($SenalizacionInterior) && $SenalizacionInterior !== '') ? $SenalizacionInterior : NULL,
                'SenalizacionExterior' => (isset($SenalizacionExterior) && $SenalizacionExterior !== '') ? $SenalizacionExterior : NULL,
                'CanalizacionDatos' => (isset($CanalizacionDatos) && $CanalizacionDatos !== '') ? $CanalizacionDatos : NULL,
                'CanalizacionSeguridad' => (isset($CanalizacionSeguridad) && $CanalizacionSeguridad !== '') ? $CanalizacionSeguridad : NULL,
                'PruebaCalaFirme' => (isset($PruebaCalaFirme) && $PruebaCalaFirme !== '') ? $PruebaCalaFirme : NULL,
                'TipoPiso' => (isset($TipoPiso) && $TipoPiso !== '') ? $TipoPiso : NULL,
                'Usuario_ID' => (isset($Usuario_ID) && $Usuario_ID !== '') ? $Usuario_ID : NULL,
                'Estatus' => 'Borrador'
            );
            $ID = $this->cajerosbbva_model->onAgregar($data);
            $URL_DOC = 'uploads/CajerosBBVA/AdjuntoEncabezado';
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
                        'Adjunto' => ($img)
                    );
                    $this->cajerosbbva_model->onModificar($ID, $DATA);
                } else {
                    $DATA = array(
                        'Adjunto' => (NULL)
                    );
                    $this->cajerosbbva_model->onModificar($ID, $DATA);
                }
            }
            echo $ID;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarDetalleAbiertoEditar() {
        try {
            extract($this->input->post());
            $data = array(
                'CajeroBBVA_ID' => $CajeroBBVA_ID,
                'Clave' => (isset($Clave)) ? $Clave : "",
                'Descripcion' => (isset($Descripcion)) ? $Descripcion : ""
            );
            $ID = $this->cajerosbbva_model->onAgregarDetalleAbierto($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarFotosAntesEditar() {
        try {
            extract($this->input->post());
            $nombre_foto = 'IMGT-' . $IdCajeroBBVA . '-TD' . $IdCajeroBBVADetalle;
            $data = array(
                'IdCajeroBBVA' => $IdCajeroBBVA,
                'IdCajeroBBVADetalle' => $IdCajeroBBVADetalle,
                'Observaciones' => $nombre_foto,
                'Estatus' => "ACTIVO",
                'Registro' => Date('d/m/y h:i:s a')
            );
            $ID = $this->cajerosbbva_model->onAgregarDetalleFotosAntes($data);
            /* CREAR DIRECTORIO DE FOTOS */
            $URL_DOC = "uploads/CajerosBBVA/Fotos/C$IdCajeroBBVA/CD$IdCajeroBBVADetalle";
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
                    $this->cajerosbbva_model->onModificarDetalleFotoAntes($ID, $DATA);
                } else {
                    $DATA = array(
                        'Url' => (NULL)
                    );
                    $this->cajerosbbva_model->onModificarDetalleFotoAntes($ID, $DATA);
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarAdjunto() {
        try {
            extract($this->input->post());
            $URL_DOC = 'uploads/CajerosBBVA/AdjuntoEncabezado';
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
                        'Adjunto' => ($img)
                    );
                    $this->cajerosbbva_model->onModificar($ID, $DATA);
                } else {
                    $DATA = array(
                        'Adjunto' => (NULL)
                    );
                    $this->cajerosbbva_model->onModificar($ID, $DATA);
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
            $this->cajerosbbva_model->onModificar($ID, $this->input->post());
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarConceptoAbierto() {
        try {
            extract($this->input->post());
            $this->cajerosbbva_model->onModificarConceptoAbierto($ID, $this->input->post());
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
            $this->cajerosbbva_model->onModificarDetalleFotoAntes($ID, $DATA);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRecords() {
        try {
            $data = $this->cajerosbbva_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCajeroBBVAByID() {
        try {
            extract($this->input->post());
            $data = $this->cajerosbbva_model->getCajeroBBVAByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoDetalleAbiertoByID() {
        try {
            extract($this->input->post());
            $data = $this->cajerosbbva_model->getTrabajoDetalleAbiertoByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDetalleAbiertoByID() {
        try {
            extract($this->input->post());
            $data = $this->cajerosbbva_model->getDetalleAbiertoByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoFotosAntesDetalleByID() {
        try {
            extract($this->input->post());
            $data = $this->cajerosbbva_model->getTrabajoFotosAntesDetalleByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCC() {
        try {
            $data = $this->centrocostos_model->getCC();
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

    public function onEliminar() {
        try {
            extract($this->input->post());
            $this->cajerosbbva_model->onEliminar($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarFotoAntesXConcepto() {
        try {
            extract($this->input->post());
            $data = $this->cajerosbbva_model->getFotoAntesXConceptoID($ID);
            $foto = $data[0];
            if (isset($foto->Url)) {
                unlink($foto->Url);
                rmdir("uploads/CajerosBBVA/Fotos/C" . $foto->IdCajeroBBVA . "/CD" . $foto->IdCajeroBBVADetalle . "/" . $foto->ID . "/");
            }
            $this->cajerosbbva_model->onEliminarFotoAntesXConcepto($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarConceptoXDetalleAbierto() {
        try {
            extract($this->input->post());
            $this->cajerosbbva_model->onEliminarConceptoAbierto($ID);

            $data = $this->cajerosbbva_model->getFotosAntesXTrabajoDetalleID($ID);
            foreach ($data as $key => $foto) {
                if (isset($foto->Url)) {
                    unlink($foto->Url);
                    rmdir("uploads/CajerosBBVA/Fotos/C" . $foto->IdCajeroBBVA . "/CD" . $foto->IdCajeroBBVADetalle . "/");
                }
            }
            $this->cajerosbbva_model->onEliminarFotosAntesXConcepto($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /* Reportes */

    public function onReporteLevantamientoAntes() {
        try {
            if (isset($_POST["ID"])) {
                $ID = $this->input->post("ID");
                $Concepto = $this->cajerosbbva_model->getDetalleFotosAntes($ID);
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
                        $ancho = ($dimensiones[1] > $dimensiones[0]) ? 45 : 100;
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
                    /* Imagen de reporte visita previa */
                    if (!empty($Encabezado->Adjunto)) {

                        $pdf->Image($Encabezado->Adjunto, 146/* X */, 25/* Y */, 120/* W *//* H */);
                    }
                    /* FIN CUERPO */
                    $path = 'uploads/CajerosBBVA/Reportes/' . $ID;
                    // print $path;
                    if (!file_exists($path)) {
                        mkdir($path, 0777, true);
                    }
                    $file_name = "PRESENTACION_FOTOGRAFICA_" . Date('h_i_s');
                    $url = $path . '/' . $file_name . '.pdf';
                    /* Borramos el archivo anterior */
                    if (file_exists($url)) {
                        unlink($url);
                    }
                    $pdf->Output($url);
                    print base_url() . $url;
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
