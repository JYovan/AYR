<?php

header('Access-Control-Allow-Origin: http://control.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "/third_party/fpdf17/fpdf.php";

class CtrlSesion extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('usuario_model');
        $this->load->model('trabajo_model');
    }



    public function index() {
        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            $this->load->view('vEncabezado');
            $this->load->view('vNavegacion');
            //  $this->load->view('vPrincipal');
            $this->load->view('vFooter');
        } else {
            $this->load->view('vEncabezado');
            $this->load->view('vSesion');
            $this->load->view('vFooter');
        }
    }

    public function onIngreso() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->usuario_model->getAcceso($USUARIO, $CONTRASENA);
            if (count($data) > 0) {
                $newdata = array(
                    'USERNAME' => $data[0]->Usuario,
                    'PASSWORD' => $data[0]->Contrasena,
                    'Nombre' => $data[0]->Nombre,
                    'Apellidos' => $data[0]->Apellidos,
                    'Cliente' => $data[0]->Cliente_ID,
                    'Empresa' => $data[0]->Empresa_ID,
                    'ID' => $data[0]->ID,
                    'LOGGED' => TRUE,
                    'TipoAcceso' => $data[0]->TipoAcceso,
                );
                $this->session->mark_as_temp('LOGGED', 28800);
                $this->session->set_userdata($newdata);
                print 1;
            } else {
                print 'ACCESO DENEGADO';
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    
  public function onCambiarContrasena() {
        try {
            extract($this->input->post());
            $DATA = array(
                'Contrasena' => ($Contrasena !== NULL) ? $Contrasena : NULL
            );
            $this->usuario_model->onModificar($ID, $DATA);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    
    
    public function onSalir() {
        try {
            $array_items = array('USERNAME', 'PASSWORD', 'LOGGED');
            $this->session->unset_userdata($array_items);
            header('Location: ' . base_url());
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onReporteLevantamientoCompleto() {
        try {
            if (isset($_POST["ID"])) {
                $ID = $this->input->post("ID");
                $Concepto = $this->trabajo_model->getDetalleFotosAntes($ID);
                $pages_added = false;
                $pdf = new FotosFPDLC('L', 'mm', array(279/* ANCHO */, 216/* ALTURA */));
                $nfotosxconcepto = 0;
                foreach ($Concepto as $i => $row) {
                    /* ENCABEZADO */

                    $pdf->CrL = $row->CR;
                    $pdf->SucursalL = $row->Sucursal;
                    $pdf->EmpresaL = $row->Empresa;
                    $pdf->ConceptoL = $row->Concepto;
                    $pdf->ClienteL = $row->Cliente;
                    /* DETALLE IMAGENES */
                    $fotos = $this->trabajo_model->getDetalleFotosXID($row->ID);

                    $nfotos = count($fotos);
                    $fnfotos = count($fotos);
                    $nimg = 0;
                    $pdf->AliasNbPages();
                    if (!$pages_added) {
                        $pdf->AddPage();
                    }
                    foreach ($fotos as $key => $foto) {
                        //Se pone al principio para que valide antes de agregar

                        $dimensiones = getimagesize(base_url() . $foto->Url);
                       /* Ancho $dimensiones[0]*/
                       /* Alto $dimensiones[1]*/
                        $width = 62;
                        $widthCuandoSonDos = 100;
                        $TerceraSola = 120;
                        if ($dimensiones[1] >= $dimensiones[0]) {
                            $widthCuandoSonDos = 53;
                            $width = 45;
                            $TerceraSola=70;
                        }

                        $nimg += 1;
                        /* CUANDO SOLO SON DOS FOTOS Y ES LA PRIMERA */
                        if ($nimg == 1 && $nfotos > 1 && $nfotos == 2) {
                            $pdf->Image($foto->Url, 25/* X */, 45/* Y */, $widthCuandoSonDos/* W *//* H */);
                        }
                        /* Cuando es la primera pero hay mas de dos imagenes */ 
                        else if ($nimg == 1 && $nfotos > 1) {
                            $pdf->Image($foto->Url, 5/* X */, 50/* Y */, $width/* W *//* H */);
                        }
                        /* CUANDO SOLO TIENE UNA IMAGEN EL CONCEPTO O UN CONCEPTO ANTERIOR YA SOLO LE FALTABA UNA IMAGEN */ else if ($nimg == 1 && $nfotos == 1) {
                            $pdf->Image($foto->Url, 15/* X */, 50/* Y */, 110/* W *//* H */);
                        }
                        /* CUANDO SOLO SON DOS FOTOS Y ES LA SEGUNDA */
                        if ($nimg == 2 && $fnfotos == 2) {
                            $pdf->Image($foto->Url, 25/* X */, 120/* Y */, $widthCuandoSonDos/* W *//* H */);
                        }
                        /* Cuando es la segunda imagen pero hay más por imprimir */ 
                        else if ($nimg == 2 && $nfotos >= 2) {
                            $pdf->Image($foto->Url, 75/* X */, 50/* Y */, $width/* W *//* H */);
                        }
                        /* Cuando al concepto le faltaba una imagen y solo quedan dos por imprimir */ 
                        else if ($nimg == 2 && $nfotos == 1) {
                            $pdf->Image($foto->Url, 75/* X */, 45/* Y */, $width/* W *//* H */);
                        }
                        /* Cuando es la tercera imagen */
                        if ($nimg == 3 && $nfotos == 1) {
                            $pdf->Image($foto->Url, 5/* X */, 110/* Y */, $TerceraSola/* W *//* H */);
                        } else if ($nimg == 3) {
                            $pdf->Image($foto->Url, 5/* X */, 120/* Y */, $width/* W *//* H */);
                        }

                        /* Cuando es la cuarta imagen */
                        if ($nimg == 4) {
                            $pdf->Image($foto->Url, 75/* X */, 120/* Y */, $width/* W *//* H */);
                        }

                        $nfotos --;
                        if ($nimg == 4 && $nfotos > 0) {
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
                $file_name = "REPORTE LEVANTAMIENTO GENERAL";
                $url = $path . '/' . $file_name . '.pdf';
                $pdf->Output($url);
                print base_url() . $url;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}

class FotosFPDLC extends FPDF {

// Page header
    function Header() {
        $this->SetY(0);
        $this->SetX(0);
        $this->SetFillColor(39, 79, 117);
        $this->Cell(279, 30, '', 1, 0, 'C', true);
        // Logo
        $this->Image(base_url() . 'img/AYR_reportes.png', 5, 3, 35);
        // Título
        $this->SetFont('Arial', 'B', 15);
        $this->SetTextColor(255, 255, 255);
        $this->SetY(5);
        $this->SetX(185);
        $this->Cell(90, 5, utf8_decode("PRESENTACIÓN FOTOGRÁFICA"), 0, 0, 'R');
        $this->SetY(10);
        $this->SetX(185);
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(90, 5, 'PARA: ' . utf8_decode($this->getClienteL()), 0, 1, 'R');
        /* DESCRIPCION LEVANTAMIENTO */
        $this->SetY(15);
        $this->SetX(90);
        $this->SetFont('Arial', 'B', 8);
        $this->MultiCell(185, 3, utf8_decode($this->getConceptoL()), 0, 'J');
        /* CUERPO */
        $this->SetFont('Arial', 'I', 14);
        $this->SetTextColor(122, 122, 122);
        $this->SetY(33);
        $this->SetX(5);
        $this->Cell(35, 5, utf8_decode("Antes "), 0, 1, 'L');
        $this->SetY(33);
        $this->SetX(145);
        $this->Cell(35, 5, utf8_decode("Después "), 0, 1, 'L');
        $this->Line(140, 40, 140, 200);
    }

// Page footer
    function Footer() {
        $this->SetTextColor(122, 122, 122);
        $this->SetFont('Arial', 'B', 17);
        $this->SetY(208);
        $this->SetX(5);
        $this->Cell(180, 5, utf8_decode($this->getCRL() . ' ' . $this->getSucursalL()), 0, 1, 'L');

        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        $this->SetTextColor(0, 0, 0);
        $this->SetY(208);
        // Page number
        $this->Cell(0, 5, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'R');
        $this->SetY(-15);
    }

    /*  STTER AND GETTER */

    public $EmpresaL = '';
    public $CrL = '';
    public $SucursalL = '';
    public $ConceptoL = '';
    public $ClienteL = '';

    public function setClienteL($ClienteL) {
        $this->ClienteL = $ClienteL;
    }

    public function getClienteL() {
        return $this->ClienteL;
    }

    public function setEmpresaL($EmpresaL) {
        $this->EmpresaL = $EmpresaL;
    }

    public function getEmpresaL() {
        return $this->EmpresaL;
    }

    public function setCrL($CrL) {
        $this->CrL = $CrL;
    }

    public function getCrL() {
        return $this->CrL;
    }

    public function setSucursalL($SucursalL) {
        $this->SucursalL = $SucursalL;
    }

    public function getSucursalL() {
        return $this->SucursalL;
    }

    public function setConceptoL($ConceptoL) {
        $this->ConceptoL = $ConceptoL;
    }

    public function getConceptoL() {
        return $this->ConceptoL;
    }

}
