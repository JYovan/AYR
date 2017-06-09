<?php

header('Access-Control-Allow-Origin: http://project.ayr.mx/');
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
                    'ID' => $data[0]->ID,
                    'LOGGED' => TRUE
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

    public function onSalir() {
        try {
            $array_items = array('USERNAME', 'PASSWORD', 'LOGGED');
            $this->session->unset_userdata($array_items);
            header('Location: ' . base_url() . 'index.php/');
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /* ____________________________________REPORTES__________________________________________ */
    /* ______________________________________________________________________________________ */

    public function onReportePresupuesto() {
        // Creación del objeto de la clase heredada 
        $pdf = new PDF('P', 'mm', array(279 /* ANCHO */, 216 /* ALTURA */));


        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetAutoPageBreak(false, 300);
        $pdf->SetLineWidth(0.4);

        $pdf->Image(base_url() . 'img/watermark.png', 10, 95);

        /* ENCABEZADO */
        // Logo
        $pdf->Image(base_url() . 'img/ms-icon-144x144AYR.png', 175, 3, 30);
        $pdf->Image(base_url() . 'img/barra_Presupuesto.png', 5, 21, 210, 6);

        $pdf->SetX(10);
        $pdf->SetY(5);
        // Movernos a la iquierda
        $pdf->SetFont('Arial', 'B', 11);
        $pdf->Cell(50, 5, utf8_decode("A&R Construcciones Sa de Cv"), 0, 0, 'L');
        $CurrentY = $pdf->GetY();
        $pdf->SetY($CurrentY + 4);
        $pdf->SetX(18);
        $pdf->SetFont('Arial', 'B', 7);
        $pdf->Cell(50, 5, utf8_decode("·CONSTRUCCIÓN"), 0, 0, 'L');
        $CurrentY = $pdf->GetY();
        $pdf->SetY($CurrentY + 3);
        $pdf->SetX(18);
        $pdf->Cell(50, 5, utf8_decode("·MANTENIMIENTO"), 0, 0, 'L');
        $CurrentY = $pdf->GetY();
        $pdf->SetY($CurrentY + 3);
        $pdf->SetX(18);
        $pdf->Cell(50, 5, utf8_decode("·PROYECTOS EJECUTIVOS"), 0, 0, 'L');
        $CurrentY = $pdf->GetY();
        $pdf->SetY($CurrentY + 3);
        $pdf->SetX(18);
        $pdf->Cell(50, 5, utf8_decode("·PROYECTOS DE AHORRO DE ENERGÍA"), 0, 0, 'L');

        /* INICIO CUERPO */
        $CurrentY = $pdf->GetY();
        $pdf->SetY($CurrentY + 10);
        $pdf->SetX(100);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(20, 5, utf8_decode("PRESUPUESTO"), 0, 0, 'L');
        $pdf->SetY($CurrentY + 7);
        $pdf->SetX(185);
        $pdf->SetFont('Arial', 'B', 7.5);
        $pdf->Cell(20, 5, utf8_decode("#FOLIO"), 0, 0, 'C');

        /* DATS GENERALES */
        $CurrentY = $pdf->GetY();
        $pdf->SetY($CurrentY + 8);
        $pdf->SetX(10);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(80, 4, utf8_decode("#CLIENTE"), 0, 0, 'L');
        $pdf->SetY($CurrentY + 8);
        $pdf->SetX(140);
        $pdf->Cell(60, 4, utf8_decode("#MUNICIPIO, #ESTADO"), 0, 0, 'R');

        $CurrentY = $pdf->GetY();
        $pdf->SetY($CurrentY + 4);
        $pdf->SetX(10);
        $pdf->Cell(20, 4, utf8_decode("SUCURSAL: "), 0, 0, 'L');
        $pdf->SetX(30);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(100, 4, utf8_decode("#SUCURSAL "), 0, 0, 'L');
        $CurrentY = $pdf->GetY();
        $pdf->SetY($CurrentY + 4);
        $pdf->SetX(10);
        $pdf->Cell(20, 4, utf8_decode("OBRA: "), 0, 0, 'L');
        $pdf->SetX(30);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(100, 4, utf8_decode("#OBRA "), 0, 0, 'L');
        $CurrentY = $pdf->GetY();
        $pdf->SetY($CurrentY + 4);
        $pdf->SetX(10);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(80, 4, utf8_decode("INMUEBLES DIVISIÓN DE: #"), 0, 0, 'L');

        $CurrentY = $pdf->GetY();
        $pdf->SetY($CurrentY + 10);
        $pdf->SetX(10);
        $pdf->SetFont('Arial', '', 7.5);
        $pdf->MultiCell(190, 3.5, utf8_decode("                 POR ESTE CONDUCTO TENEMOS EL AGRADO DE PONER A SU AMABLE CONSIDERACIÓN DEL PRESUPUESTO POR TRABAJOS DE MANTENIMEINTO Y CONSERVACIÓN REFERENTES A : SOLICITA REVISION Y REPARACION DE LA PUERTA DE   ACCESO AL AREA DE AUTOSERVICIO ESTA COLGADA A CAUSA DE LAS VISAGRAS EN LA SUCURSAL MERCADO INDEPENDENCIA CR 1221 UBICADA EN LAZARO CARDENAS NO. 526 NO. ­­, VENTURA PUENTE, MICHOACAN"), 0, 'J');

        /* ENCABEZADO DETALLE */


        $borders = 0;
        $bottom = 0;
        $pdf->SetLineWidth(0.4);
        $page = 1;
        for ($i = 1; $i <= 1; $i++) {
            if ($bottom == 290) {
                $pdf->AddPage();
                $borders = 0;
                $bottom = 0;
                $page += 1;
            }
            if ($borders == 0) {

                /* DETALLE  */
                if ($page == 1) {



                    /* ENCABEZADO TITULOS */
                    $pdf->SetFont('Arial', 'B', 6.5);
                    $CurrentY = $pdf->GetY() + 10;
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(10);
                    $pdf->Cell(15, 5, utf8_decode("CLAVE"), 1, 1, 'C');
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(25);
                    $pdf->Cell(105, 5, utf8_decode("CONCEPTO"), 1, 1, 'C');
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(130);
                    $pdf->Cell(15, 5, utf8_decode("UNIDAD"), 1, 1, 'C');
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(145);
                    $pdf->Cell(20, 5, utf8_decode("VOLUMEN"), 1, 1, 'C');
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(165);
                    $pdf->Cell(20, 5, utf8_decode("P.U."), 1, 1, 'C');
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(185);
                    $pdf->Cell(20, 5, utf8_decode("IMPORTE"), 1, 1, 'C');


                    /* CATEGORIAS */
                    $CurrentY = $pdf->GetY();
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(10);
                    $pdf->Cell(15, 5, utf8_decode("#CLAVE"), 1, 1, 'C');
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(25);
                    $pdf->Cell(105, 5, utf8_decode("CATEGORIA"), 1, 1, 'L');
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(130);
                    $pdf->Cell(15, 5, utf8_decode(""), 1, 1, 'C');
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(145);
                    $pdf->Cell(20, 5, utf8_decode(""), 1, 1, 'C');
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(165);
                    $pdf->Cell(20, 5, utf8_decode(""), 1, 1, 'C');
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(185);
                    $pdf->Cell(20, 5, utf8_decode(""), 1, 1, 'C');

                    /* CONCEPTOS */
                    $pdf->SetFont('Arial', '', 6.5);
                    $CurrentY = $pdf->GetY();
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(10);
                    $pdf->Cell(15, 5, utf8_decode("#CLAVE"), 1, 1, 'C');
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(25);
                    $pdf->MultiCell(105, 5, utf8_decode("#CONCEPTOCONCEPTOCONCEPTO"), 1, 'J');
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(130);
                    $pdf->Cell(15, 5, utf8_decode("#UNIDAD"), 1, 1, 'C');
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(145);
                    $pdf->Cell(20, 5, utf8_decode("#VOLUMEN"), 1, 1, 'C');
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(165);
                    $pdf->Cell(20, 5, utf8_decode("#P.U."), 1, 1, 'C');
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(185);
                    $pdf->Cell(20, 5, utf8_decode("#IMPORTE"), 1, 1, 'C');


                    /* SUBTOTALES */
                    $pdf->SetFont('Arial', 'B', 6.5);
                    $pdf->SetFillColor(160, 160, 160);
                    $CurrentY = $pdf->GetY();
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(10);
                    $pdf->Cell(15, 5, utf8_decode(""), 1, 1, 'C', true);
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(25);
                    $pdf->MultiCell(105, 5, utf8_decode("SUBTOTAL:"), 1, 'J', true);
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(130);
                    $pdf->Cell(15, 5, utf8_decode(""), 1, 1, 'C', true);
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(145);
                    $pdf->Cell(20, 5, utf8_decode(""), 1, 1, 'C', true);
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(165);
                    $pdf->Cell(20, 5, utf8_decode(""), 1, 1, 'C', true);
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(185);
                    $pdf->Cell(20, 5, utf8_decode("#SUBTOTAL"), 1, 1, 'C', true);


                    //TOTALES
                    $pdf->SetFont('Arial', 'B', 6.5);
                    $pdf->SetFillColor(160, 160, 160);
                    $CurrentY = $pdf->GetY();
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(10);
                    $pdf->Cell(15, 5, utf8_decode(""), 1, 1, 'C', true);
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(25);
                    $pdf->MultiCell(105, 5, utf8_decode("TOTAL GENERAL:"), 1, 'J', true);
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(130);
                    $pdf->Cell(15, 5, utf8_decode(""), 1, 1, 'C', true);
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(145);
                    $pdf->Cell(20, 5, utf8_decode(""), 1, 1, 'C', true);
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(165);
                    $pdf->Cell(20, 5, utf8_decode(""), 1, 1, 'C', true);
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(185);
                    $pdf->Cell(20, 5, utf8_decode("#TOTAL GENERAL"), 1, 1, 'C', true);
                }


                $borders = 1;
            }
            /* AUMENTAR EL TAMAÑO */
            $bottom += 10;
        }

        /* Leyenda */
        $pdf->SetY(232);
        $pdf->SetX(10);
        $pdf->SetFont('Arial', '', 6.5);
        $pdf->MultiCell(190, 3, utf8_decode("EL IMPORTE DE ESTE PRESUPUESTO NO INCLUYE 16% IVA. VIGENCIA VÁLIDA POR 30 DÍAS A PARTIR DE LA FECHA DE GENERACIÓN DEL PRESUPUESTO SIN OTRO PARTICULAR DE MOMENTO Y EN ESPERA DE VERNOS FAVORECIDOS CON SU PREFERENCIA, QUEDO A SUS APRECIABLES ORDENES."), 0, 'C');

        /* Firma */
        $CurrentY = $pdf->GetY();
        $pdf->SetY($CurrentY + 15);
        $pdf->SetX(73);
        $pdf->SetFont('Arial', 'B', 7.5);
        $pdf->cell(70, 5, utf8_decode("Ing. Victor Ayala Ruiz"), 'T', 0, 'C');
        $CurrentY = $pdf->GetY();
        $pdf->SetY($CurrentY + 3);
        $pdf->SetX(73);
        $pdf->SetFont('Arial', '', 7.5);
        $pdf->cell(70, 5, utf8_decode("A & R Construcciones Sa de Cv"), 0, 0, 'C');

        /* Barra Footer */
        $CurrentY = $pdf->GetY();
        $pdf->Image(base_url() . 'img/barra_Presupuesto.png', 5, $CurrentY + 2, 210, 6);

        $CurrentY = $pdf->GetY();
        $pdf->SetY($CurrentY + 4);
        $pdf->SetX(10);
        $pdf->SetFont('Arial', 'B', 7);
        $pdf->MultiCell(60, 3, utf8_decode("
Justo Sierra No. 2150
Col. Americana
CP. 44600
Guadalajara, Jalisco, MÉXICO"), 0, 'L');


        $pdf->SetY($CurrentY + 6);
        $pdf->SetX(175);
        $pdf->cell(30, 4, utf8_decode("victor.ayala@ayr.mx"), 0, 0, 'L');


        /* FIN CUERPO */
        if (!file_exists('uploads/Reportes')) {
            mkdir('uploads/Reportes', 0777, true);
        }
        $file_name = "PRESUPUESTO";
        $url = 'uploads/Reportes/' . $file_name . '.pdf';

        $pdf->Output($url);
        print base_url() . $url;
    }

    public function onReporteResumenPartidas() {
        
        $ID = $_POST['ID'];
        $trabajo = $this->trabajo_model->getResumenPartidas($ID);
        $datos= $trabajo[0];
        
        // Creación del objeto de la clase heredada 
        $pdf = new PDF('P', 'mm', array(279 /* ANCHO */, 216 /* ALTURA */));

        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetAutoPageBreak(false, 300);
        $pdf->SetLineWidth(0.4);

   
        /* ENCABEZADO */

        $pdf->Image(base_url() . $datos->LogoEmpresa, 5, 5, 35);
        // LogoCliente
        $pdf->Image(base_url() . $datos->LogoCliente, 155, 5, 55);

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
        $pdf->Cell(200, 5, utf8_decode('CR: '.$datos->CR .' - '.$datos->Sucursal), 0, 1, 'C');

        /* SEGUNDA PARTE ENCABEZADO */
        
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
        foreach ($trabajo as $i => $datoNuevo) {
           
        
        if($datoNuevo->IntExt === "Interior" && $datoNuevo->Categoria === "PRELIMINARES"){
            $pdf->Cell(95, 5, utf8_decode($datoNuevo->ImporteRenglon), 'B', 1, 'C');
        }
        
        
        }

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("ALBAÑILERIA"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, utf8_decode(""), 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("ACABADOS"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, utf8_decode(""), 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("CANCELERIA ALUMINIO Y CRISTAL"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, utf8_decode(""), 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("HERRERIA Y ESTRUCTURA METALICA"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, utf8_decode(""), 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("SUMINISTROS DEL CLIENTE Y COLOCACIONES"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, utf8_decode(""), 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("LIMPIEZA"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, utf8_decode(""), 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("INSTALACIÓN HIDROSANITARIA"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, utf8_decode(""), 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("INSTALACIÓN ELECTRICA"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, utf8_decode(""), 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("AIRE ACONDICIONADO"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, utf8_decode(""), 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("INFRAESTRUCTURA"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, utf8_decode(""), 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("SIN CLAVE"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, utf8_decode(""), 'B', 1, 'C');


        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 5);
        $pdf->SetX(15);
        $pdf->Cell(55, 5, utf8_decode("TOTAL SUCURSAL BANCARIA"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 5);
        $pdf->SetX(110);
        $pdf->Cell(95, 5, utf8_decode(""), 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 8);
        $pdf->SetX(15);
        $pdf->Cell(55, 5, utf8_decode("OBRAS EXTERIOES"), 0, 1, 'L');


        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("PRELIMINARES"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, utf8_decode(""), 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("ALBAÑILERIA"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, utf8_decode(""), 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("ACABADOS"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, utf8_decode(""), 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("HERRERIA Y ESTRUCTURA METALICA"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, utf8_decode(""), 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("INFRAESTRUCUTRA"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, utf8_decode(""), 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("VARIOS"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, utf8_decode(""), 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 5);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(55, 5, utf8_decode("TOTAL DE OBRAS EXTERIORES"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 5);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, utf8_decode(""), 'B', 1, 'C');


        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 10);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(55, 5, utf8_decode("GRAN TOTAL"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 10);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, utf8_decode(""), 'B', 1, 'C');






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
            $file_name = "RESUMEN DE PARTIDAS";
            $url = $path . '/' . $file_name . '.pdf';
        
    

        $pdf->Output($url);
        print base_url() . $url;
    }

    public function onReporteFin49() {
        //conexion a bd
        try {

            $ID = $_POST['ID'];

            $trabajo = $this->trabajo_model->getFin49ByID($ID);


            // $trabajo[0]->Movimiento;
            // Creación del objeto de la clase heredada 
            $pdf = new PDF('P', 'mm', array(279 /* ANCHO */, 216 /* ALTURA */));

            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->SetAutoPageBreak(false, 300);
            $pdf->SetLineWidth(0.4);

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
            $pdf->Cell(35, 5, utf8_decode($trabajo[0]->FolioCliente), 'B', 1, 'C');

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
                 
            }
            else{
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
            }
            else  {
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

            $pdf->Cell(25, 5,'$' . number_format($trabajo[0]->Importe, 2), 'B', 1, 'C');
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
            if (!file_exists('uploads/Reportes')) {
                mkdir('uploads/Reportes', 0777, true);
            }
            $file_name = "REPORTE_FIN49";
            $url = 'uploads/Reportes/' . $file_name . '.pdf';

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onReportePresupuestoBBVA() {
        // Creación del objeto de la clase heredada 
        $pdf = new PDF('P', 'mm', array(279 /* ANCHO */, 216 /* ALTURA */));

        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetAutoPageBreak(false, 300);

        /* ENCABEZADO */

        // Arial bold 15
        $pdf->SetFont('Arial', 'B', 9);
        // Título
        $pdf->SetY(5);
        // Movernos a la derecha
        $pdf->SetX(25);
        $pdf->Cell(165, 5, utf8_decode("PRESUPUESTO DE CONCILIACÓN DE PRECIOS UNITARIOS DE CONCEPTOS FUERA DE PROYECTO"), 0, 0, 'C');
        $pdf->SetFont('Arial', 'B', 8);
        /* CUERPO */

        $CURRENT_Y = $pdf->GetY();
        $pdf->SetY(15);
        $borders = 0;
        $bottom = 0;
        $pdf->SetLineWidth(0.4);
        $page = 1;
        for ($i = 1; $i <= 1; $i++) {
            if ($bottom == 290) {
                $pdf->AddPage();
                $borders = 0;
                $bottom = 0;
                $page += 1;
            }
            if ($borders == 0) {

                /* INICIA  EN LA ESQUINA DE EMPRESA */
                $pdf->Rect(145, 15, 65, 20);

                /* SEGUNDO RECUADRO */
                $pdf->Rect(5, 22, 205, 13);
                /**/
                $pdf->SetY(40);
                $pdf->SetX(5);
                $pdf->SetFillColor(169, 208, 255);
                $pdf->Cell(205, 5, '', 1, 1, 'C', true);

                $pdf->SetY(35);
                $pdf->SetX(5);
                $pdf->SetFillColor(255, 252, 76);
                $pdf->Cell(205, 5, utf8_decode("IMPORTE CONTRATADO"), 1, 1, 'C', true);

                /* TITULOS */
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->SetY(16);
                $pdf->SetX(145);
                $pdf->Cell(65, 5, utf8_decode("EMPRESA: "), 0, 1, 'C');

                /* ENCABEZADO TITULOS */
                $pdf->SetY(40);
                $pdf->SetX(5);
                $pdf->Cell(15, 5, utf8_decode("CÓDIGO"), 1, 1, 'C');
                $pdf->SetY(40);
                $pdf->SetX(20);
                $pdf->Cell(110, 5, utf8_decode("CONCEPTO"), 1, 1, 'C');
                $pdf->SetY(40);
                $pdf->SetX(130);
                $pdf->Cell(15, 5, utf8_decode("UNIDAD"), 1, 1, 'C');
                $pdf->SetY(40);
                $pdf->SetX(145);
                $pdf->Cell(20, 5, utf8_decode("CANTIDAD"), 1, 1, 'C');
                $pdf->SetY(40);
                $pdf->SetX(165);
                $pdf->Cell(20, 5, utf8_decode("P.U."), 1, 1, 'C');
                $pdf->SetY(40);
                $pdf->SetX(185);
                $pdf->Cell(25, 5, utf8_decode("IMPORTE"), 1, 1, 'C');

                /* DATOS */
                $pdf->SetY(23);
                $pdf->SetX(5);
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->Cell(140, 10, "CR + #CR + #SUCURSAL + #FOLIO", 0, 1, 'C');


                $pdf->SetY(23);
                $pdf->SetX(145);
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->Cell(65, 10, "#EMPRESA ", 0, 1, 'C');

                /* DETALLE  */
                if ($page == 1) {
                    $pdf->SetFont('Arial', 'B', 8);

                    /* Encierra el detalle */
                    $pdf->Rect(5, 45, 205, 5);
                    /* Lineas verticales que delimitan el detalle */

                    /* Linea vertical codigo */
                    $pdf->Line(20, 45, 20, 50);
                    /* Linea vertical concepto */
                    $pdf->Line(130, 45, 130, 50);
                    /* Linea vertical unidad */
                    $pdf->Line(145, 45, 145, 50);
                    /* Linea vertical cantidad */
                    $pdf->Line(165, 45, 165, 50);
                    /* Linea vertical pu */
                    $pdf->Line(185, 45, 185, 50);

                    /* DETALLE DATOS */
                    $pdf->SetFont('Arial', '', 8);
                    $pdf->SetY(45);
                    $pdf->SetX(5);
                    $pdf->Cell(15, 5, "#CODIGO ", 0, 1, 'C');
                    $pdf->SetY(45);
                    $pdf->SetX(20);
                    $pdf->MultiCell(110, 5, "#CONCEPTO ", 0, 'L', false);
                    $pdf->SetY(45);
                    $pdf->SetX(130);
                    $pdf->Cell(15, 5, "#UNIDAD ", 0, 1, 'C');
                    $pdf->SetY(45);
                    $pdf->SetX(145);
                    $pdf->Cell(20, 5, "#CANTIDAD ", 0, 1, 'C');
                    $pdf->SetY(45);
                    $pdf->SetX(165);
                    $pdf->Cell(20, 5, "#PU ", 0, 1, 'C');
                    $pdf->SetY(45);
                    $pdf->SetX(185);
                    $pdf->Cell(25, 5, "#IMPORTE ", 0, 1, 'C');

                    /* FINAL DEL DETALLE */
                    $pdf->SetFillColor(255, 252, 76);
                    $pdf->SetY(50);
                    $pdf->SetX(5);
                    $pdf->Cell(15, 5, "", 1, 1, 'C', true);
                    $pdf->SetY(50);
                    $pdf->SetX(20);
                    $pdf->Cell(110, 5, "TOTAL DE PRESUPUESTO ADICIONALES", 1, 1, 'L', true);
                    $pdf->SetY(50);
                    $pdf->SetX(130);
                    $pdf->Cell(15, 5, "", 1, 1, 'C', true);
                    $pdf->SetY(50);
                    $pdf->SetX(145);
                    $pdf->Cell(20, 5, "", 1, 1, 'C', true);
                    $pdf->SetY(50);
                    $pdf->SetX(165);
                    $pdf->Cell(20, 5, " ", 1, 1, 'C', true);
                    $pdf->SetY(50);
                    $pdf->SetX(185);
                    $pdf->Cell(25, 5, "#TOTAL ", 1, 1, 'C', true);
                }
                /* FIN DETALLE  */

                /* TOTALES TITULOS */
                $pdf->SetY(65);
                $pdf->SetX(85);
                $pdf->Cell(85, 5, "Importe Contratado=", 0, 1, 'R');
                $pdf->SetY(75);
                $pdf->SetX(85);
                $pdf->SetTextColor(255, 38, 38);
                $pdf->Cell(85, 5, "Deductivas=", 0, 1, 'R');
                $pdf->SetY(85);
                $pdf->SetX(85);
                $pdf->SetTextColor(0, 0, 0);
                $pdf->Cell(85, 5, utf8_decode("Items fuera de catálogo="), 0, 1, 'R');
                $pdf->SetY(95);
                $pdf->SetX(85);
                $pdf->SetTextColor(255, 38, 38);
                $pdf->Cell(85, 5, utf8_decode("Penalización por incumplimiento de fechas contractuales="), 0, 1, 'R');
                $pdf->SetY(105);
                $pdf->SetX(85);
                $pdf->SetTextColor(0, 0, 0);
                $pdf->Cell(85, 5, "Subtotal=", 0, 1, 'R');

                /* TOTALES DATOS */
                $pdf->SetY(65);
                $pdf->SetX(185);
                $pdf->Cell(25, 5, utf8_decode("$0.00"), 1, 1, 'R');
                $pdf->SetY(75);
                $pdf->SetX(185);
                $pdf->Cell(25, 5, utf8_decode("$0.00"), 1, 1, 'R');
                $pdf->SetY(85);
                $pdf->SetX(185);
                $pdf->Cell(25, 5, utf8_decode("#TOTAL"), 1, 1, 'R');
                $pdf->SetY(95);
                $pdf->SetX(185);
                $pdf->Cell(25, 5, utf8_decode("$0.00"), 1, 1, 'R');
                $pdf->SetY(105);
                $pdf->SetX(185);
                $pdf->Cell(25, 5, utf8_decode("#TOTAL"), 1, 1, 'R');


                /* FIRMAS */

                /* ELABORÓ */
                $pdf->SetFont('Arial', '', 8);
                /* LINEA HORIZONTAL ELABORÓ */
                $pdf->Line(10, 140, 100, 140);
                $pdf->SetY(140);
                $pdf->SetX(10);
                $pdf->Cell(90, 5, utf8_decode("#EMPRESA"), 0, 1, 'C');


                /* REVISÓ */
                /* LINEA HORIZONTAL REVISÓ */
                $pdf->Line(120, 140, 205, 140);
                $pdf->SetY(140);
                $pdf->SetX(120);
                $pdf->Cell(90, 5, utf8_decode("#EMPRESA SUPERVISORA"), 0, 1, 'C');


                $borders = 1;
            }
            /* AUMENTAR EL TAMAÑO */
            $bottom += 10;
        }
        /* FIN CUERPO */
        if (!file_exists('uploads/Reportes')) {
            mkdir('uploads/Reportes', 0777, true);
        }
        $file_name = "REPORTE_PRESUPUESTOBBVA";
        $url = 'uploads/Reportes/' . $file_name . '.pdf';

        $pdf->Output($url);
        print base_url() . $url;
    }

    public function onReporteFotografico() {

        // Creación del objeto de la clase heredada 
        $pdf = new PDF('L', 'mm', array(279/* ANCHO */, 216/* ALTURA */));

        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetAutoPageBreak(false, 300);

        /* ENCABEZADO */
        // Logo
        $pdf->Image(base_url() . 'img/bbva.png', 5, 5, 64);
        // Arial bold 15
        $pdf->SetFont('Arial', 'B', 9);
        // Título
        $pdf->SetY(5);
        // Movernos a la derecha
        $pdf->Cell(75);
        $pdf->Cell(125, 25, utf8_decode("REPORTE FOTOGRÁFICO"), 0, 0, 'C');
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
        for ($i = 1; $i <= 1; $i++) {
            if ($bottom == 290) {
                $pdf->AddPage();
                $borders = 0;
                $bottom = 0;
                $page += 1;
            }
            if ($borders == 0) {

                /* INICIA  EN LA ESQUINA DE EMPRESA */
                $pdf->Rect(164, 25, 110, 20);

                /* INICIA EN LA ESQUINA DE OBRA */
                $pdf->Rect(5, 32, 269, 13);

                /* INICIA EN LA ESQUINA DE CLAVE */
                $pdf->Rect(5, 49.5, 269, 17);

                /* INICIA EN LA ESQUINA DE FOTOS */
                $pdf->Rect(5, 71, 269, 105);

                /* ENCIERRA LA PALABRA FOTOS */
                $pdf->Rect(5, 71, 40, 6);

                /* LINEA VERTICAL DELANTE DE EMPRESA Y UBICACIÓN */
                $pdf->Line(45, 32, 45, 45);

                /* LINEA VERTICAL ENTRE EMPRESA, UNIDAD, PZA */
                $pdf->Line(214, 25, 214, 45);

                /* LINEA HORIZONTAL DEBAJO DE OBRA, UNIDAD Y ARRIBA DE UBICACIÓN Y PZA */
                $pdf->Line(5, 38, 274, 38);

                /* LINEA VERTICAL DELANTE DE CLAVE */
                $pdf->Line(45, 49.5, 45, 66);
                /* LINEA VERTICAL PARTIDA DE PARTIDA */
                $pdf->Line(90, 49.5, 90, 66);

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
                $pdf->SetY(71);
                $pdf->SetX(5);
                $pdf->Cell(35, 6, utf8_decode("FOTOS "), 0, 1, 'C');

                /* DATOS */
                $pdf->SetY(33);
                $pdf->SetX(46);
                $pdf->SetFont('Arial', '', 8);
                $pdf->Cell(115, 5, "#OBRA: ", 0, 1);
                $pdf->SetY(26);
                $pdf->SetX(214);
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->Cell(60, 5, "#EMPRESA: ", 0, 1, 'C');
                $pdf->SetY(39);
                $pdf->SetX(46);
                $pdf->Cell(115, 5, "#UBICACION: ", 0, 1);
                $pdf->SetY(39);
                $pdf->SetX(164);
                $pdf->SetFont('Arial', '', 8);
                $pdf->Cell(50, 5, utf8_decode("#UNIDAD"), 0, 1, 'C');
                $pdf->SetY(39);
                $pdf->SetX(219);
                $pdf->Cell(0, 5, $pdf->PageNo() . ' DE {nb}', 0, 0, 'C');
                $pdf->SetY(58);
                $pdf->SetX(15);
                $pdf->Cell(75, 5, "#CLAVE: ", 0, 1);
                $pdf->SetY(58);
                $pdf->SetX(57);
                $pdf->Cell(75, 5, "#PARTIDA: ", 0, 1);
                $pdf->SetY(56.5);
                $pdf->SetX(90);
                $pdf->SetFont('Arial', '', 6);
                $pdf->MultiCell(184, 2.5, "#FLETE DE MOBILIARIO EN CAMION DE HASTA 3.5TON, ESTACIONES DE TRABAJO, "
                        . "MAMPARAS, SEÑALAMIENTOS, ETC. CONSIDERANDO CARGA Y DESCARGA A PIE DE CAMION; INCLUYE, "
                        . "CASETAS, GASOLINA, MANO DE OBRA, EQUIPO DE SEGURIDAD, PROTECCION DE LAS AREAS ADYASENTES, "
                        . "LIMPIEZA FINA DURANTE Y AL FINAL DE LOS TRABAJOS Y TODO LO NECESARIO PARA SU CORRECTA "
                        . "EJECUCION FLETE DE MOBILIARIO EN CAMION DE HASTA 3.5TON, ESTACIONES DE TRABAJO, MAMPARAS, "
                        . "PARA SU CORRECTA EJECUCION", 0, 'J');


                /* DETALLE IMAGENES */
                if ($page == 1) {
                    $dimensiones = getimagesize(base_url() . 'img/PRUEBAS_REPORTE/1.jpg');
                    // $pdf->Cell(25, 5, utf8_decode("FOTO W:".$dimensiones[0]." H:".$dimensiones[1]), 0, 1, 'C');
                    $pdf->Image(base_url() . 'img/PRUEBAS_REPORTE/1.jpg', 10, 85, 80, 80);
                    $pdf->Image(base_url() . 'img/PRUEBAS_REPORTE/2.jpg', 100, 85, 80, 80);
                    $pdf->Image(base_url() . 'img/PRUEBAS_REPORTE/3.jpg', 190, 85, 80, 80);
                }
                /* FIN DETALLE IMAGENES */
                /* FIRMAS */
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->SetY(177);
                $pdf->SetX(5);
                $pdf->Cell(15, 5, utf8_decode("FIRMAS DE CONFORMIDAD"), 0, 1, 'L');
                $pdf->SetFont('Arial', '', 8);

                /* ELABORÓ */
                $pdf->SetFont('Arial', '', 8);
                $pdf->SetY(183);
                $pdf->SetX(5);
                $pdf->Cell(80, 5, utf8_decode("ELABORÓ"), 0, 1, 'C');

                $pdf->SetFont('Arial', 'B', 8);
                $pdf->SetY(203);
                $pdf->SetX(5);
                $pdf->Cell(80, 5, utf8_decode("#FIRMA1"), 'T', 1, 'C');

                /* REVISÓ */
                $pdf->SetY(183);
                $pdf->SetX(100);
                $pdf->Cell(80, 5, utf8_decode("REVISÓ"), 0, 1, 'C');
                /* LINEA HORIZONTAL REVISÓ */
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->SetY(203);
                $pdf->SetX(100);
                $pdf->Cell(80, 5, utf8_decode("#FIRMA2"), 'T', 1, 'C');

                /* AUTORIZO */
                $pdf->SetY(183);
                $pdf->SetX(195);
                $pdf->Cell(80, 5, utf8_decode("AUTORIZÓ"), 0, 1, 'C');
                /* LINEA HORIZONTAL AUTORIZÓ */
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->SetY(203);
                $pdf->SetX(195);
                $pdf->Cell(80, 5, utf8_decode("#FIRMA3"), 'T', 1, 'C');
//                $pdf->Image('http://chart.googleapis.com/chart?cht=p3&chd=t:60,40&chs=250x100&chl=Hello|World',60,30,90,0,'PNG');
                $borders = 1;
            }
//            $pdf->Cell(0, 5, 'Imprimiendo linea numero ' . $i, 0, 1);
            /* AUMENTAR EL TAMAÑO */
            $bottom += 10;
        }
        /* FIN CUERPO */
        if (!file_exists('uploads/Reportes')) {
            mkdir('uploads/Reportes', 0777, true);
        }
        $file_name = "REPORTE_FOTOGRAFICO";
        $url = 'uploads/Reportes/' . $file_name . '.pdf';

        $pdf->Output($url);
        print base_url() . $url;
    }

    public function onReporteGenerador() {

        // Creación del objeto de la clase heredada 
        $pdf = new PDF('L', 'mm', array(279/* ANCHO */, 216/* ALTURA */));

        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetAutoPageBreak(false, 300);

        /* ENCABEZADO */
        // Logo
        $pdf->Image(base_url() . 'img/bbva.png', 5, 5, 64);
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
        for ($i = 1; $i <= 1; $i++) {
            if ($bottom == 290) {
                $pdf->AddPage();
                $borders = 0;
                $bottom = 0;
                $page += 1;
            }
            if ($borders == 0) {

                /* INICIA  EN LA ESQUINA DE EMPRESA */
                $pdf->Rect(164, 25, 110, 20);

                /* INICIA EN LA ESQUINA DE OBRA */
                $pdf->Rect(5, 32, 269, 13);

                /* INICIA EN LA ESQUINA DE CLAVE */
                $pdf->Rect(5, 49.5, 269, 17);

                /* INICIA EN LA ESQUINA CONTENEDOR PRINCIPAL */
                $pdf->Rect(5, 71, 269, 105);



                /* LINEA VERTICAL DELANTE DE EMPRESA Y UBICACIÓN */
                $pdf->Line(45, 32, 45, 45);

                /* LINEA VERTICAL ENTRE EMPRESA, UNIDAD, PZA */
                $pdf->Line(214, 25, 214, 45);

                /* LINEA HORIZONTAL DEBAJO DE OBRA, UNIDAD Y ARRIBA DE UBICACIÓN Y PZA */
                $pdf->Line(5, 38, 274, 38);

                /* LINEA VERTICAL DELANTE DE CLAVE */
                $pdf->Line(45, 49.5, 45, 66);
                /* LINEA VERTICAL PARTIDA DE PARTIDA */
                $pdf->Line(90, 49.5, 90, 66);

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
                $pdf->SetFont('Arial', '', 8);
                $pdf->Cell(115, 5, "#OBRA: ", 0, 1);
                $pdf->SetY(26);
                $pdf->SetX(214);
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->Cell(60, 5, "#EMPRESA: ", 0, 1, 'C');
                $pdf->SetY(39);
                $pdf->SetX(46);
                $pdf->Cell(115, 5, "#UBICACION: ", 0, 1);
                $pdf->SetY(39);
                $pdf->SetX(164);
                $pdf->SetFont('Arial', '', 8);
                $pdf->Cell(50, 5, utf8_decode("#UNIDAD"), 0, 1, 'C');
                $pdf->SetY(39);
                $pdf->SetX(219);
                $pdf->Cell(0, 5, $pdf->PageNo() . ' DE {nb}', 0, 0, 'C');
                $pdf->SetY(58);
                $pdf->SetX(15);
                $pdf->Cell(75, 5, "#CLAVE: ", 0, 1);
                $pdf->SetY(58);
                $pdf->SetX(57);
                $pdf->Cell(75, 5, "#PARTIDA: ", 0, 1);
                $pdf->SetY(56.5);
                $pdf->SetX(90);
                $pdf->SetFont('Arial', '', 6);
                $pdf->MultiCell(184, 2.5, "#FLETE DE MOBILIARIO EN CAMION DE HASTA 3.5TON, ESTACIONES DE TRABAJO, "
                        . "MAMPARAS, SEÑALAMIENTOS, ETC. CONSIDERANDO CARGA Y DESCARGA A PIE DE CAMION; INCLUYE, "
                        . "CASETAS, GASOLINA, MANO DE OBRA, EQUIPO DE SEGURIDAD, PROTECCION DE LAS AREAS ADYASENTES, "
                        . "LIMPIEZA FINA DURANTE Y AL FINAL DE LOS TRABAJOS Y TODO LO NECESARIO PARA SU CORRECTA "
                        . "EJECUCION FLETE DE MOBILIARIO EN CAMION DE HASTA 3.5TON, ESTACIONES DE TRABAJO, MAMPARAS, "
                        . "PARA SU CORRECTA EJECUCION", 0, 'J');

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




                /* DETALLE GENERADOR */
                if ($page == 1) {
                    /* LINEA VERTICAL EJE ABAJO DE LOCALIZACION DETALLE */
                    $pdf->Line(18, 86, 18, 81);
                    /* LINEA VERTICAL ENTRE EJE ABAJO DE LOCALIZACION DETALLE */
                    $pdf->Line(31, 86, 31, 81);
                    /* LINEA SEPARADOR DETALLE RENGLON */
                    $pdf->Line(5, 86, 274, 86);


                    /* DATOS DETALLE */

                    $pdf->SetFont('Arial', '', 7);
                    $pdf->SetY(81);
                    $pdf->SetX(5);
                    $pdf->Cell(13, 5, utf8_decode("#EJE"), 0, 1, 'C');
                    $pdf->SetY(81);
                    $pdf->SetX(18);
                    $pdf->Cell(13, 5, utf8_decode("#EJE 1"), 0, 1, 'C');
                    $pdf->SetY(81);
                    $pdf->SetX(31);
                    $pdf->Cell(14, 5, utf8_decode("#EJE 2"), 0, 1, 'C');
                    $pdf->SetY(81);
                    $pdf->SetX(45);
                    $pdf->Cell(45, 5, utf8_decode("#AREA"), 0, 1, 'C');
                    $pdf->SetY(81);
                    $pdf->SetX(90);
                    $pdf->Cell(15, 5, utf8_decode("#LARGO"), 0, 1, 'C');
                    $pdf->SetY(81);
                    $pdf->SetX(105);
                    $pdf->Cell(15, 5, utf8_decode("#ANCHO"), 0, 1, 'C');
                    $pdf->SetY(81);
                    $pdf->SetX(120);
                    $pdf->Cell(15, 5, utf8_decode("#ALTO"), 0, 1, 'C');
                    $pdf->SetY(81);
                    $pdf->SetX(135);
                    $pdf->Cell(20, 5, utf8_decode("#CANTIDAD"), 0, 1, 'C');
                    $pdf->SetY(81);
                    $pdf->SetX(155);
                    $pdf->Cell(20, 5, utf8_decode("#TOTAL"), 0, 1, 'C');
                }
                /* FIN DETALLE  */

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
                $pdf->Cell(20, 5, utf8_decode("#TOTAL"), 0, 1, 'C');


                $pdf->SetY(176);
                $pdf->SetX(175);
                $pdf->Cell(25, 5, utf8_decode("#UNIDAD"), 0, 1, 'C');


                /* FIN DETALLE IMAGENES */
                /* FIRMAS */
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->SetY(177);
                $pdf->SetX(5);
                $pdf->Cell(15, 5, utf8_decode("FIRMAS DE CONFORMIDAD"), 0, 1, 'L');
                $pdf->SetFont('Arial', '', 8);

                /* ELABORÓ */
                $pdf->SetFont('Arial', '', 8);
                $pdf->SetY(183);
                $pdf->SetX(5);
                $pdf->Cell(80, 5, utf8_decode("ELABORÓ"), 0, 1, 'C');

                $pdf->SetFont('Arial', 'B', 8);
                $pdf->SetY(203);
                $pdf->SetX(5);
                $pdf->Cell(80, 5, utf8_decode("#FIRMA1"), 'T', 1, 'C');

                /* REVISÓ */
                $pdf->SetY(183);
                $pdf->SetX(100);
                $pdf->Cell(80, 5, utf8_decode("REVISÓ"), 0, 1, 'C');
                /* LINEA HORIZONTAL REVISÓ */
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->SetY(203);
                $pdf->SetX(100);
                $pdf->Cell(80, 5, utf8_decode("#FIRMA2"), 'T', 1, 'C');

                /* AUTORIZO */
                $pdf->SetY(183);
                $pdf->SetX(195);
                $pdf->Cell(80, 5, utf8_decode("AUTORIZÓ"), 0, 1, 'C');
                /* LINEA HORIZONTAL AUTORIZÓ */
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->SetY(203);
                $pdf->SetX(195);
                $pdf->Cell(80, 5, utf8_decode("#FIRMA3"), 'T', 1, 'C');



                $borders = 1;
            }
//            $pdf->Cell(0, 5, 'Imprimiendo linea numero ' . $i, 0, 1);
            /* AUMENTAR EL TAMAÑO */
            $bottom += 10;
        }
        /* FIN CUERPO */
        if (!file_exists('uploads/Reportes')) {
            mkdir('uploads/Reportes', 0777, true);
        }
        $file_name = "REPORTE_GENERADOR";
        $url = 'uploads/Reportes/' . $file_name . '.pdf';

        $pdf->Output($url);
        print base_url() . $url;
    }

    public function onReporteCroquis() {
        // Creación del objeto de la clase heredada 
        $pdf = new PDF('L', 'mm', array(279/* ANCHO */, 216/* ALTURA */));

        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetAutoPageBreak(false, 300);

        /* ENCABEZADO */
        // Logo
        $pdf->Image(base_url() . 'img/bbva.png', 5, 5, 64);
        // Arial bold 15
        $pdf->SetFont('Arial', 'B', 9);
        // Título
        $pdf->SetY(5);
        // Movernos a la derecha
        $pdf->Cell(75);
        $pdf->Cell(125, 25, utf8_decode("REPORTE CROQUIS"), 0, 0, 'C');
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
        for ($i = 1; $i <= 1; $i++) {
            if ($bottom == 290) {
                $pdf->AddPage();
                $borders = 0;
                $bottom = 0;
                $page += 1;
            }
            if ($borders == 0) {

                /* INICIA  EN LA ESQUINA DE EMPRESA */
                $pdf->Rect(164, 25, 110, 20);

                /* INICIA EN LA ESQUINA DE OBRA */
                $pdf->Rect(5, 32, 269, 13);

                /* INICIA EN LA ESQUINA DE CLAVE */
                $pdf->Rect(5, 49.5, 269, 17);

                /* INICIA EN LA ESQUINA DE FOTOS */
                $pdf->Rect(5, 71, 269, 105);

                /* ENCIERRA LA PALABRA FOTOS */
                $pdf->Rect(5, 71, 40, 6);

                /* LINEA VERTICAL DELANTE DE EMPRESA Y UBICACIÓN */
                $pdf->Line(45, 32, 45, 45);

                /* LINEA VERTICAL ENTRE EMPRESA, UNIDAD, PZA */
                $pdf->Line(214, 25, 214, 45);

                /* LINEA HORIZONTAL DEBAJO DE OBRA, UNIDAD Y ARRIBA DE UBICACIÓN Y PZA */
                $pdf->Line(5, 38, 274, 38);

                /* LINEA VERTICAL DELANTE DE CLAVE */
                $pdf->Line(45, 49.5, 45, 66);
                /* LINEA VERTICAL PARTIDA DE PARTIDA */
                $pdf->Line(90, 49.5, 90, 66);

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
                $pdf->SetY(71);
                $pdf->SetX(5);
                $pdf->Cell(35, 6, utf8_decode("CROQUIS O ANEXO "), 0, 1, 'L');

                /* DATOS */
                $pdf->SetY(33);
                $pdf->SetX(46);
                $pdf->SetFont('Arial', '', 8);
                $pdf->Cell(115, 5, "#OBRA: ", 0, 1);
                $pdf->SetY(26);
                $pdf->SetX(214);
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->Cell(60, 5, "#EMPRESA: ", 0, 1, 'C');
                $pdf->SetY(39);
                $pdf->SetX(46);
                $pdf->Cell(115, 5, "#UBICACION: ", 0, 1);
                $pdf->SetY(39);
                $pdf->SetX(164);
                $pdf->SetFont('Arial', '', 8);
                $pdf->Cell(50, 5, utf8_decode("#UNIDAD"), 0, 1, 'C');
                $pdf->SetY(39);
                $pdf->SetX(219);
                $pdf->Cell(0, 5, $pdf->PageNo() . ' DE {nb}', 0, 0, 'C');
                $pdf->SetY(58);
                $pdf->SetX(15);
                $pdf->Cell(75, 5, "#CLAVE: ", 0, 1);
                $pdf->SetY(58);
                $pdf->SetX(57);
                $pdf->Cell(75, 5, "#PARTIDA: ", 0, 1);
                $pdf->SetY(56.5);
                $pdf->SetX(90);
                $pdf->SetFont('Arial', '', 6);
                $pdf->MultiCell(184, 2.5, "#FLETE DE MOBILIARIO EN CAMION DE HASTA 3.5TON, ESTACIONES DE TRABAJO, "
                        . "MAMPARAS, SEÑALAMIENTOS, ETC. CONSIDERANDO CARGA Y DESCARGA A PIE DE CAMION; INCLUYE, "
                        . "CASETAS, GASOLINA, MANO DE OBRA, EQUIPO DE SEGURIDAD, PROTECCION DE LAS AREAS ADYASENTES, "
                        . "LIMPIEZA FINA DURANTE Y AL FINAL DE LOS TRABAJOS Y TODO LO NECESARIO PARA SU CORRECTA "
                        . "EJECUCION FLETE DE MOBILIARIO EN CAMION DE HASTA 3.5TON, ESTACIONES DE TRABAJO, MAMPARAS, "
                        . "PARA SU CORRECTA EJECUCION", 0, 'J');

                /* DETALLE IMAGENES */
                if ($page == 1) {
//                    $dimensiones = getimagesize(base_url() . 'img/PRUEBAS_REPORTE/EJEMPLO_CROQUIS.jpg');
//                     $pdf->Cell(25, 5, utf8_decode("FOTO W:".$dimensiones[0]." H:".$dimensiones[1]), 0, 1, 'C');
                    $pdf->Image(base_url() . 'img/PRUEBAS_REPORTE/EJEMPLO_CROQUIS.jpg', 35, 80, 215, 90);
                }
                /* FIN DETALLE IMAGENES */
                /* FIRMAS */
                /* ELABORÓ */
                $pdf->SetFont('Arial', '', 8);
                $pdf->SetY(183);
                $pdf->SetX(5);
                $pdf->Cell(80, 5, utf8_decode("ELABORÓ"), 0, 1, 'C');

                $pdf->SetFont('Arial', 'B', 8);
                $pdf->SetY(203);
                $pdf->SetX(5);
                $pdf->Cell(80, 5, utf8_decode("#FIRMA1"), 'T', 1, 'C');

                /* REVISÓ */
                $pdf->SetY(183);
                $pdf->SetX(100);
                $pdf->Cell(80, 5, utf8_decode("REVISÓ"), 0, 1, 'C');
                /* LINEA HORIZONTAL REVISÓ */
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->SetY(203);
                $pdf->SetX(100);
                $pdf->Cell(80, 5, utf8_decode("#FIRMA2"), 'T', 1, 'C');

                /* AUTORIZO */
                $pdf->SetY(183);
                $pdf->SetX(195);
                $pdf->Cell(80, 5, utf8_decode("AUTORIZÓ"), 0, 1, 'C');
                /* LINEA HORIZONTAL AUTORIZÓ */
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->SetY(203);
                $pdf->SetX(195);
                $pdf->Cell(80, 5, utf8_decode("#FIRMA3"), 'T', 1, 'C');

//                $pdf->Image('http://chart.googleapis.com/chart?cht=p3&chd=t:60,40&chs=250x100&chl=Hello|World',60,30,90,0,'PNG');
                $borders = 1;
            }
//            $pdf->Cell(0, 5, 'Imprimiendo linea numero ' . $i, 0, 1);
            /* AUMENTAR EL TAMAÑO */
            $bottom += 10;
        }
        /* FIN CUERPO */
        if (!file_exists('uploads/Reportes')) {
            mkdir('uploads/Reportes', 0777, true);
        }
        $file_name = "REPORTE_CROQUIS";
        $url = 'uploads/Reportes/' . $file_name . '.pdf';

        $pdf->Output($url);
        print base_url() . $url;
    }

}

class PDF extends FPDF {

  

}
