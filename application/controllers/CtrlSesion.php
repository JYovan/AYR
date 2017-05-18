<?php

header('Access-Control-Allow-Origin: http://project.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlSesion extends CI_Controller {
 

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('usuario_model');
    }

    public function index() {
        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            $this->load->view('vEncabezado');
            $this->load->view('vNavegacion');
        } else {
            $this->load->view('vEncabezado');
            $this->load->view('vSesion');
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

    /**/

    public function onReport() {
// Creación del objeto de la clase heredada 
        $pdf = new PDF('L', 'mm', array(295/* ANCHO */, 230/* ALTURA */));
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetAutoPageBreak(false, 300);
        /* CUERPO */
        $CURRENT_Y = $pdf->GetY();
        $pdf->SetY(25);
        $borders = 0;
        $bottom = 0;
        $pdf->SetLineWidth(0.5);
        $page = 1;
        for ($i = 1; $i <= 75; $i++) {
            if ($bottom == 290) {
                $pdf->AddPage();
                $borders = 0;
                $bottom = 0;
                $page += 1;
            }
            if ($borders == 0) {

//        $pdf->Rect($x, $y, $w, $h);
//        $pdf->Line($x1, $y1, $x2, $y2)

                /* INICIA  EN LA ESQUINA DE EMPRESA */
                $pdf->Rect(190, 28, 100, 22);

                /* INICIA EN LA ESQUINA DE OBRA */
                $pdf->Rect(5, 35, 285, 15);

                /* INICIA EN LA ESQUINA DE CLAVE */
                $pdf->Rect(5, 52.5, 285, 20);

                /* INICIA EN LA ESQUINA DE FOTOS */
                $pdf->Rect(5, 75, 285, 95);

                /* ENCIERRA LA PALABRA FOTOS */
                $pdf->Rect(5, 75, 15, 5);


                /* LINEA VERTICAL DELANTE DE EMPRESA Y UBICACIÓN */
                $pdf->Line(60, 35, 60, 50);

                /* LINEA VERTICAL ENTRE EMPRESA, UNIDAD, PZA */
                $pdf->Line(235, 28, 235, 50);

                /* LINEA HORIZONTAL DEBAJO DE OBRA, UNIDAD Y ARRIBA DE UBICACIÓN Y PZA */
                $pdf->Line(5, 42, 290, 42);

                /* LINEA VERTICAL DELANTE DE CLAVE */
                $pdf->Line(45, 52.5, 45, 72);
                /* LINEA VERTICAL PARTIDA DE PARTIDA */
                $pdf->Line(90, 52.5, 90, 72);

                /* LINEA HORIZONTAL DEBAJO DE CLAVE, PARTIDA Y CONCEPTO */
                $pdf->Line(5, 60, 290, 60);

                /* TITULOS */
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->SetY(36);
                $pdf->SetX(25);
                $pdf->Cell(55, 5, "OBRA: ", 0, 1);
                $pdf->SetY(43);
                $pdf->SetX(20);
                $pdf->Cell(55, 5, utf8_decode("UBICACIÓN: "), 0, 1);
                $pdf->SetY(29);
                $pdf->SetX(185);
                $pdf->Cell(55, 5, utf8_decode("EMPRESA: "), 0, 1, 'C');
                $pdf->SetY(36);
                $pdf->SetX(185);
                $pdf->Cell(55, 5, utf8_decode("UNIDAD "), 0, 1, 'C');
                $pdf->SetY(43);
                $pdf->SetX(185);
                $pdf->Cell(55, 5, utf8_decode("PZA "), 0, 1, 'C');
                $pdf->SetY(54);
                $pdf->SetX(15);
                $pdf->Cell(20, 5, utf8_decode("CLAVE "), 0, 1, 'C');
                $pdf->SetY(54);
                $pdf->SetX(60);
                $pdf->Cell(15, 5, utf8_decode("PARTIDA "), 0, 1, 'C');
                $pdf->SetY(54);
                $pdf->SetX(180);
                $pdf->Cell(15, 5, utf8_decode("CONCEPTO "), 0, 1, 'C');
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->SetY(75);
                $pdf->SetX(5);
                $pdf->Cell(15, 5, utf8_decode("FOTOS "), 0, 1, 'C');
                $pdf->SetFont('Arial', 'B', 10);
                /*DETALLE IMAGENES*/
                if ($page == 1) {
                    $dimensiones = getimagesize(base_url() . 'img/1.jpg'); 
                $pdf->Cell(25, 5, utf8_decode("FOTO W:".$dimensiones[0]." H:".$dimensiones[1]), 0, 1, 'C');
                    $pdf->Image(base_url() . 'img/1.jpg', 15, 85, 80, 80); 
                }if ($page == 2) {
                    $pdf->Image(base_url() . 'img/1.jpg', 15, 85, 80, 80);
                    $pdf->Image(base_url() . 'img/2.jpg', 107.5, 85, 80, 80); 
                }if ($page > 2) {
                    $pdf->Image(base_url() . 'img/1.jpg', 15, 85, 80, 80);
                    $pdf->Image(base_url() . 'img/2.jpg', 107.5, 85, 80, 80);
                    $pdf->Image(base_url() . 'img/3.jpg', 200, 85, 80, 80);
                }
                /*FIN DETALLE IMAGENES*/
                /*FIRMAS*/
//        $pdf->Line($x1, $y1, $x2, $y2)
                $pdf->SetY(180);
                $pdf->SetX(22.5);
                $pdf->Cell(15, 5, utf8_decode("FIRMAS DE CONFORMIDAD"), 0, 1, 'C');
                $pdf->SetFont('Arial', '', 10);
                
                /*ELABORÓ*/
                $pdf->SetY(185);
                $pdf->SetX(35);
                $pdf->Cell(15, 5, utf8_decode("ELABORÓ"), 0, 1, 'C');
                
                /* LINEA HORIZONTAL ELABORÓ */ 
                $pdf->Line(5, 200, 90, 200);
                $pdf->SetY(200);
                $pdf->SetX(35);
                $pdf->Cell(15, 5, utf8_decode("GENERADOR DE OBRA"), 0, 1, 'C');
                
                
                /*REVISÓ*/
                $pdf->SetY(185);
                $pdf->SetX(140);
                $pdf->Cell(15, 5, utf8_decode("REVISÓ"), 0, 1, 'C');
                /* LINEA HORIZONTAL REVISÓ*/ 
                $pdf->Line(100, 200, 190, 200);
                $pdf->SetY(200);
                $pdf->SetX(140);
                $pdf->Cell(15, 5, utf8_decode("RESIDENTE DE OBRA"), 0, 1, 'C');
                
                /*AUTORIZO*/
                $pdf->SetY(185);
                $pdf->SetX(240);
                $pdf->Cell(15, 5, utf8_decode("AUTORIZÓ"), 0, 1, 'C');
                /* LINEA HORIZONTAL AUTORIZÓ */
                $pdf->Line(200, 200, 290, 200);
                $pdf->SetY(200);
                $pdf->SetX(240);
                $pdf->Cell(15, 5, utf8_decode("SUPERVISIÓN"), 0, 1, 'C');
                
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

}

require_once APPPATH . "/third_party/fpdf17/fpdf.php";

class PDF extends FPDF {

    function Header() {
        // Logo
        $this->Image(base_url() . 'img/bbva.png', 5, 8, 64);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 10);
        // Título
        $this->SetY(12);
        // Movernos a la derecha
        $this->Cell(75);
        $this->Cell(130, 25, utf8_decode("REPORTE FOTOGRÁFICO"), 0, 0, 'C');
        $this->SetFont('Arial', 'B', 9);
        $this->SetY(2);
        $this->SetX(240);
        $this->Cell(50, 25, utf8_decode("Dirección de Administración de"), 0, 0, 'C');
        $this->Ln(5);
        $this->SetY(5);
        $this->SetX(241.5);
        $this->Cell(50, 25, utf8_decode("InmueblesGestión de Calidad"), 0, 0, 'C');
        $this->Ln(5);
        $this->SetY(8);
        $this->SetX(233.5);
        $this->Cell(50, 25, utf8_decode("InmueblesSubdirección de Inmovilizado"), 0, 0, 'C');

        // Salto de línea
        $this->Ln(29);
    }

    function Footer() {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, utf8_decode("PÁGINA ") . $this->PageNo() . ' DE {nb}', 0, 0, 'C');
    }

}
