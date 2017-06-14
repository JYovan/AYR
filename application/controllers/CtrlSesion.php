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

    public function onReporteCroquis() {
        // Creación del objeto de la clase heredada
        $pdf = new PDF('L', 'mm', array(279/* ANCHO */, 216/* ALTURA */));

        $pdf->AliasNbPages();

        $ID = $_POST['ID'];
        $Concepto = $this->trabajo_model->getConceptosReportesGenericos($ID);
        $Detalle = $this->trabajo_model->getDetalleCroquis($ID);

        foreach ($Concepto as $i => $datoConcepto) {

            /* DETALLE GENERADOR */
            foreach ($Detalle as $k => $datoDetalle) {

                $pdf->AddPage();
                $pdf->SetAutoPageBreak(false, 300);



                /* ENCABEZADO */
                // Logo
                $pdf->Image(base_url() . utf8_decode($datoConcepto->LogoCliente), 5, 5, 64);
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


                if ($datoDetalle->PreciarioConcepto_ID == $datoConcepto->ConceptoId) {

                    /* ENCIERRA LA PALABRA croquis o anexo */
                    $pdf->SetFont('Arial', 'B', 8);
                    $pdf->Rect(5, 71, 40, 6);

                    $pdf->SetY(71);
                    $pdf->SetX(5);
                    $pdf->Cell(35, 6, utf8_decode("CROQUIS O ANEXO "), 0, 1, 'L');

                    /* DETALLE IMAGENES */

                    $pdf->Image(base_url() . utf8_decode($datoDetalle->Url), 45, 79, 185, 94);
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
            }
        }
        /* FIN CUERPO */
        /* FIN CUERPO */
        $path = 'uploads/Reportes/' . $ID;
        // print $path;
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $file_name = "REPORTE CROQUIS";
        $url = $path . '/' . $file_name . '.pdf';

        $pdf->Output($url);
        print base_url() . $url;
    }

}

class PDF extends FPDF {

}

class PDFC extends FPDF {

    function Footer() {
        /* Leyenda */
        $this->SetY(232);
        $this->SetX(10);
        $this->SetFont('Arial', '', 6.5);
        $this->MultiCell(190, 3, utf8_decode("EL IMPORTE DE ESTE PRESUPUESTO NO INCLUYE 16% IVA. VIGENCIA VÁLIDA POR 30 DÍAS A PARTIR DE LA FECHA DE GENERACIÓN DEL PRESUPUESTO SIN OTRO PARTICULAR DE MOMENTO Y EN ESPERA DE VERNOS FAVORECIDOS CON SU PREFERENCIA, QUEDO A SUS APRECIABLES ORDENES."), 0, 'C');

        /* Firma */
        $CurrentY = $this->GetY();
        $this->SetY($CurrentY + 15);
        $this->SetX(73);
        $this->SetFont('Arial', 'B', 7.5);
        $this->cell(70, 5, utf8_decode("Ing. Victor Ayala Ruiz"), 'T', 0, 'C');
        $CurrentY = $this->GetY();
        $this->SetY($CurrentY + 3);
        $this->SetX(73);
        $this->SetFont('Arial', '', 7.5);
        $this->cell(70, 5, utf8_decode("A & R Construcciones Sa de Cv"), 0, 0, 'C');

        /* Barra Footer */
        $CurrentY = $this->GetY();
        $this->Image(base_url() . 'img/barra_Presupuesto.png', 5, $CurrentY + 2, 210, 6);

        $CurrentY = $this->GetY();
        $this->SetY($CurrentY + 4);
        $this->SetX(10);
        $this->SetFont('Arial', 'B', 7);
        $this->MultiCell(60, 3, utf8_decode("
Justo Sierra No. 2150
Col. Americana
CP. 44600
Guadalajara, Jalisco, MÉXICO"), 0, 'L');


        $this->SetY($CurrentY + 6);
        $this->SetX(175);
        $this->cell(30, 4, utf8_decode("victor.ayala@ayr.mx"), 0, 0, 'L');
    }

}
