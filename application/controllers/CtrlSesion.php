<?php

header('Access-Control-Allow-Origin: http://project.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . "/third_party/fpdf17/fpdf.php";

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

    public function onReporteFin49() {
        // Creación del objeto de la clase heredada 
        $pdf = new PDF('P', 'mm', array(297/* ANCHO */, 210/* ALTURA */));

        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetAutoPageBreak(false, 300);
        $pdf->SetLineWidth(0.4);

        /* ENCABEZADO */
        /* Primer Recuerdo contenedor */
        /* INICIA  EN LA ESQUINA */
        $pdf->Rect(5, 10, 200, 17);

        /* SEGUNDO RECUADRO */
        $pdf->Rect(6, 11, 63, 15);
        /* TERCER RECUADRO */
        $pdf->Rect(70, 11, 134, 15);
        // Logo
        $pdf->Image(base_url() . 'img/bbva.png', 10, 12, 48);

        // Arial bold 15
        $pdf->SetFont('Arial', '', 7);
        // Título
        $pdf->SetY(5);
        // Movernos a la derecha
        $pdf->SetX(5);
        $pdf->SetTextColor(162, 162, 162);
        $pdf->Cell(200, 5, utf8_decode("FIN­049A Notificación De Items Adicionales Y/O Fuera De Catálogo De Precios Unitarios (Posible Orden De Cambio)"), 0, 0, 'R');
        $pdf->SetTextColor(0, 0, 0);
       
        //Texto del segundo recuadro

        $pdf->SetFont('Arial', '', 8);
        $pdf->SetY(10);
        $pdf->SetX(152);
        $pdf->Cell(50, 15, utf8_decode("Gestión De Calidad Ulises"), 0, 0, 'R');
        $pdf->Ln(5);
        $pdf->SetY(14);
        $pdf->SetX(152);
        $pdf->Cell(50, 15, utf8_decode("Dirección De Construcción"), 0, 0, 'R');
        $pdf->Ln(5);

        /* CUERPO */
        $pdf->SetFillColor(169, 208, 255);
        $pdf->SetY(30);
        $pdf->SetX(5);
        $pdf->Cell(200, 5, utf8_decode("Notificación De Items Adicionales (Posible Orden De Cambio)"), 1, 1, 'C', true);
        
        /*PRIMER PARTE ENCABEZADO*/
        $pdf->SetFont('Arial', '', 7);
        $pdf->SetY(37);
        $pdf->SetX(125);
        $pdf->Cell(30, 5, utf8_decode("FECHA:"), 0, 1, 'R');
        
        $pdf->SetY(37);
        $pdf->SetX(155);
        $pdf->Cell(50, 5, utf8_decode("#FECHA"), 'B', 1, 'C');
        
        $pdf->SetFillColor(82,245,237);
        $pdf->SetY(43);
        $pdf->SetX(125);
        $pdf->Cell(30, 5, utf8_decode("TIPO DE CONCEPTO:"), 0, 1, 'R',true);
        
        $pdf->SetY(43);
        $pdf->SetX(155);
        $pdf->Cell(50, 5, utf8_decode("#TIPO CONCEPTO"), 'B', 1, 'C',true);
       
         /*SEGUNDA PARTE ENCABEZADO*/
        $pdf->SetFont('Arial', '', 6);
        $pdf->SetY(50);
        $pdf->SetX(5);
        $pdf->Cell(20, 5, utf8_decode("CR & SUCURSAL:"), 1, 1, 'R');
        $pdf->SetY(50);
        $pdf->SetX(25);
        $pdf->Cell(55, 5, utf8_decode("#CR + #SUCURSAL"), 'B', 1, 'C');
        
        $pdf->SetY(50);
        $pdf->SetX(80);
        $pdf->Cell(30, 5, utf8_decode("EMPRESA CONTRATISTA:"), 1, 1, 'R');
        $pdf->SetY(50);
        $pdf->SetX(110);
        $pdf->Cell(40, 5, utf8_decode("#EMPRESA CONTRATISTA"), 'B', 1, 'C');
        
        $pdf->SetY(50);
        $pdf->SetX(150);
        $pdf->Cell(30, 5, utf8_decode("EMPRESA CONTRATISTA:"), 1, 1, 'R');
        $pdf->SetY(50);
        $pdf->SetX(180);
        $pdf->Cell(40, 5, utf8_decode("#EMPRESA CONTRATISTA"), 'B', 1, 'C');
        





        /* FIN CUERPO */
        if (!file_exists('uploads/Reportes')) {
            mkdir('uploads/Reportes', 0777, true);
        }
        $file_name = "REPORTE_FIN49";
        $url = 'uploads/Reportes/' . $file_name . '.pdf';

        $pdf->Output($url);
        print base_url() . $url;
    }

    public function onReporteCroquis() {
        // Creación del objeto de la clase heredada 
        $pdf = new PDF('L', 'mm', array(297/* ANCHO */, 210/* ALTURA */));

        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetAutoPageBreak(false, 300);

        /* ENCABEZADO */
        // Logo
        $pdf->Image(base_url() . 'img/bbva.png', 5, 5, 64);
        // Arial bold 15
        $pdf->SetFont('Arial', 'B', 9);
        // Título
        $pdf->SetY(10);
        // Movernos a la derecha
        $pdf->Cell(75);
        $pdf->Cell(130, 25, utf8_decode("REPORTE CROQUIS"), 0, 0, 'C');
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->SetY(1);
        $pdf->SetX(241);
        $pdf->Cell(50, 15, utf8_decode("Dirección de Administración de"), 0, 0, 'R');
        $pdf->Ln(5);
        $pdf->SetY(4);
        $pdf->SetX(241.5);
        $pdf->Cell(50, 15, utf8_decode("InmueblesGestión de Calidad"), 0, 0, 'R');
        $pdf->Ln(5);
        $pdf->SetY(7);
        $pdf->SetX(241);
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
                $pdf->Rect(180, 25, 110, 20);

                /* INICIA EN LA ESQUINA DE OBRA */
                $pdf->Rect(5, 32, 285, 13);

                /* INICIA EN LA ESQUINA DE CLAVE */
                $pdf->Rect(5, 49.5, 285, 17);

                /* INICIA EN LA ESQUINA DE FOTOS */
                $pdf->Rect(5, 71, 285, 105);

                /* ENCIERRA LA PALABRA FOTOS */
                $pdf->Rect(5, 71, 40, 6);

                /* LINEA VERTICAL DELANTE DE EMPRESA Y UBICACIÓN */
                $pdf->Line(45, 32, 45, 45);

                /* LINEA VERTICAL ENTRE EMPRESA, UNIDAD, PZA */
                $pdf->Line(230, 25, 230, 45);

                /* LINEA HORIZONTAL DEBAJO DE OBRA, UNIDAD Y ARRIBA DE UBICACIÓN Y PZA */
                $pdf->Line(5, 38, 290, 38);

                /* LINEA VERTICAL DELANTE DE CLAVE */
                $pdf->Line(45, 49.5, 45, 66);
                /* LINEA VERTICAL PARTIDA DE PARTIDA */
                $pdf->Line(90, 49.5, 90, 66);

                /* LINEA HORIZONTAL DEBAJO DE CLAVE, PARTIDA Y CONCEPTO */
                $pdf->Line(5, 56, 290, 56);

                /* TITULOS */
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->SetY(33);
                $pdf->SetX(20);
                $pdf->Cell(55, 5, "OBRA: ", 0, 1);
                $pdf->SetY(39);
                $pdf->SetX(15);
                $pdf->Cell(55, 5, utf8_decode("UBICACIÓN: "), 0, 1);
                $pdf->SetY(26);
                $pdf->SetX(179);
                $pdf->Cell(55, 5, utf8_decode("EMPRESA: "), 0, 1, 'C');
                $pdf->SetY(33);
                $pdf->SetX(179);
                $pdf->Cell(55, 5, utf8_decode("UNIDAD "), 0, 1, 'C');
                $pdf->SetY(33);
                $pdf->SetX(232);
                $pdf->Cell(55, 5, utf8_decode("HOJA "), 0, 1, 'C');
                $pdf->SetY(51);
                $pdf->SetX(15);
                $pdf->Cell(20, 5, utf8_decode("CLAVE "), 0, 1, 'C');
                $pdf->SetY(51);
                $pdf->SetX(60);
                $pdf->Cell(15, 5, utf8_decode("PARTIDA "), 0, 1, 'C');
                $pdf->SetY(51);
                $pdf->SetX(180);
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
                $pdf->SetX(230);
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->Cell(60, 5, "#EMPRESA: ", 0, 1, 'C');
                $pdf->SetY(39);
                $pdf->SetX(46);
                $pdf->Cell(115, 5, "#UBICACION: ", 0, 1);
                $pdf->SetY(39);
                $pdf->SetX(180);
                $pdf->SetFont('Arial', '', 8);
                $pdf->Cell(50, 5, utf8_decode("#UNIDAD"), 0, 1, 'C');
                $pdf->SetY(39);
                $pdf->SetX(234);
                $pdf->Cell(0, 5, $pdf->PageNo() . ' DE {nb}', 0, 0, 'C');
                $pdf->SetY(58);
                $pdf->SetX(15);
                $pdf->Cell(75, 5, "#CLAVE: ", 0, 1);
                $pdf->SetY(58);
                $pdf->SetX(57);
                $pdf->Cell(75, 5, "#PARTIDA: ", 0, 1);
                $pdf->SetY(56);
                $pdf->SetX(90);
                $pdf->SetFont('Arial', '', 6);
                $pdf->MultiCell(200, 3.5, "#FLETE DE MOBILIARIO EN CAMION DE HASTA 3.5TON, ESTACIONES DE TRABAJO, "
                        . "MAMPARAS, SEÑALAMIENTOS, ETC. CONSIDERANDO CARGA Y DESCARGA A PIE DE CAMION; INCLUYE, "
                        . "CASETAS, GASOLINA, MANO DE OBRA, EQUIPO DE SEGURIDAD, PROTECCION DE LAS AREAS ADYASENTES, "
                        . "LIMPIEZA FINA DURANTE Y AL FINAL DE LOS TRABAJOS Y TODO LO NECESARIO PARA SU CORRECTA "
                        . "EJECUCION FLETE DE MOBILIARIO EN CAMION DE HASTA 3.5TON, ESTACIONES DE TRABAJO, MAMPARAS, "
                        . "PARA SU CORRECTA EJECUCION", 0, 'L');

                /* DETALLE IMAGENES */
                if ($page == 1) {
//                    $dimensiones = getimagesize(base_url() . 'img/PRUEBAS_REPORTE/EJEMPLO_CROQUIS.jpg');
//                     $pdf->Cell(25, 5, utf8_decode("FOTO W:".$dimensiones[0]." H:".$dimensiones[1]), 0, 1, 'C');
                    $pdf->Image(base_url() . 'img/PRUEBAS_REPORTE/EJEMPLO_CROQUIS.jpg', 45, 80, 215, 90);
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
                $pdf->SetY(185);
                $pdf->SetX(40);
                $pdf->Cell(15, 5, utf8_decode("ELABORÓ"), 0, 1, 'C');


                /* LINEA HORIZONTAL ELABORÓ */
                $pdf->Line(5, 200, 90, 200);
                $pdf->SetY(200);
                $pdf->SetX(40);
                $pdf->Cell(15, 5, utf8_decode("#FIRMA 1"), 0, 1, 'C');


                /* REVISÓ */
                $pdf->SetY(185);
                $pdf->SetX(140);
                $pdf->Cell(15, 5, utf8_decode("REVISÓ"), 0, 1, 'C');
                /* LINEA HORIZONTAL REVISÓ */
                $pdf->Line(100, 200, 190, 200);
                $pdf->SetY(200);
                $pdf->SetX(140);
                $pdf->Cell(15, 5, utf8_decode("#FIRMA 1"), 0, 1, 'C');

                /* AUTORIZO */
                $pdf->SetY(185);
                $pdf->SetX(240);
                $pdf->Cell(15, 5, utf8_decode("AUTORIZÓ"), 0, 1, 'C');
                /* LINEA HORIZONTAL AUTORIZÓ */
                $pdf->Line(200, 200, 290, 200);
                $pdf->SetY(200);
                $pdf->SetX(240);
                $pdf->Cell(15, 5, utf8_decode("#FIRMA 3"), 0, 1, 'C');

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

    public function onReportePresupuestoBBVA() {
        // Creación del objeto de la clase heredada 
        $pdf = new PDF('P', 'mm', array(297/* ANCHO */, 210/* ALTURA */));

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
        $pdf->Cell(160, 5, utf8_decode("PRESUPUESTO DE CONCILIACÓN DE PRECIOS UNITARIOS DE CONCEPTOS FUERA DE PROYECTO"), 0, 0, 'C');
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
                $pdf->Rect(145, 15, 60, 20);

                /* SEGUNDO RECUADRO */
                $pdf->Rect(5, 22, 200, 13);
                /**/
                $pdf->SetY(40);
                $pdf->SetX(5);
                $pdf->SetFillColor(169, 208, 255);
                $pdf->Cell(200, 5, '', 1, 1, 'C', true);

                $pdf->SetY(35);
                $pdf->SetX(5);
                $pdf->SetFillColor(255, 252, 76);
                $pdf->Cell(200, 5, utf8_decode("IMPORTE CONTRATADO"), 1, 1, 'C', true);

                /* TITULOS */
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->SetY(16);
                $pdf->SetX(145);
                $pdf->Cell(60, 5, utf8_decode("EMPRESA: "), 0, 1, 'C');

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
                $pdf->Cell(20, 5, utf8_decode("IMPORTE"), 1, 1, 'C');

                /* DATOS */
                $pdf->SetY(23);
                $pdf->SetX(5);
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->Cell(140, 10, "CR + #CR + #SUCURSAL + #FOLIO", 0, 1, 'C');


                $pdf->SetY(23);
                $pdf->SetX(145);
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->Cell(60, 10, "#EMPRESA ", 0, 1, 'C');

                /* DETALLE  */
                if ($page == 1) {
                    $pdf->SetFont('Arial', 'B', 8);

                    /* Encierra el detalle */
                    $pdf->Rect(5, 45, 200, 5);
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
                    $pdf->Cell(20, 5, "#IMPORTE ", 0, 1, 'C');

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
                    $pdf->Cell(20, 5, "#TOTAL ", 1, 1, 'C', true);
                }
                /* FIN DETALLE  */

                /* TOTALES TITULOS */
                $pdf->SetY(65);
                $pdf->SetX(85);
                $pdf->Cell(80, 5, "Importe Contratado=", 0, 1, 'R');
                $pdf->SetY(75);
                $pdf->SetX(85);
                $pdf->SetTextColor(255, 38, 38);
                $pdf->Cell(80, 5, "Deductivas=", 0, 1, 'R');
                $pdf->SetY(85);
                $pdf->SetX(85);
                $pdf->SetTextColor(0, 0, 0);
                $pdf->Cell(80, 5, utf8_decode("Items fuera de catálogo="), 0, 1, 'R');
                $pdf->SetY(95);
                $pdf->SetX(85);
                $pdf->SetTextColor(255, 38, 38);
                $pdf->Cell(80, 5, utf8_decode("Penalización por incumplimiento de fechas contractuales="), 0, 1, 'R');
                $pdf->SetY(105);
                $pdf->SetX(85);
                $pdf->SetTextColor(0, 0, 0);
                $pdf->Cell(80, 5, "Subtotal=", 0, 1, 'R');

                /* TOTALES DATOS */
                $pdf->SetY(65);
                $pdf->SetX(180);
                $pdf->Cell(25, 5, utf8_decode("$0.00"), 1, 1, 'R');
                $pdf->SetY(75);
                $pdf->SetX(180);
                $pdf->Cell(25, 5, utf8_decode("$0.00"), 1, 1, 'R');
                $pdf->SetY(85);
                $pdf->SetX(180);
                $pdf->Cell(25, 5, utf8_decode("#TOTAL"), 1, 1, 'R');
                $pdf->SetY(95);
                $pdf->SetX(180);
                $pdf->Cell(25, 5, utf8_decode("$0.00"), 1, 1, 'R');
                $pdf->SetY(105);
                $pdf->SetX(180);
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
                $pdf->Line(110, 140, 200, 140);
                $pdf->SetY(140);
                $pdf->SetX(110);
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
        $pdf = new PDF('L', 'mm', array(297/* ANCHO */, 210/* ALTURA */));

        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetAutoPageBreak(false, 300);


        /* ENCABEZADO */
        // Logo
        $pdf->Image(base_url() . 'img/bbva.png', 5, 5, 64);
        // Arial bold 15
        $pdf->SetFont('Arial', 'B', 9);
        // Título
        $pdf->SetY(10);
        // Movernos a la derecha
        $pdf->Cell(75);
        $pdf->Cell(130, 25, utf8_decode("REPORTE FOTOGRÁFICO"), 0, 0, 'C');
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->SetY(1);
        $pdf->SetX(241);
        $pdf->Cell(50, 15, utf8_decode("Dirección de Administración de"), 0, 0, 'R');
        $pdf->Ln(5);
        $pdf->SetY(4);
        $pdf->SetX(241.5);
        $pdf->Cell(50, 15, utf8_decode("InmueblesGestión de Calidad"), 0, 0, 'R');
        $pdf->Ln(5);
        $pdf->SetY(7);
        $pdf->SetX(241);
        $pdf->Cell(50, 15, utf8_decode("InmueblesSubdirección de Inmovilizado"), 0, 0, 'R');
        // Salto de línea
        $pdf->Ln(29);

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
                $pdf->Rect(180, 25, 110, 20);

                /* INICIA EN LA ESQUINA DE OBRA */
                $pdf->Rect(5, 32, 285, 13);

                /* INICIA EN LA ESQUINA DE CLAVE */
                $pdf->Rect(5, 49.5, 285, 17);

                /* INICIA EN LA ESQUINA DE FOTOS */
                $pdf->Rect(5, 71, 285, 105);

                /* ENCIERRA LA PALABRA FOTOS */
                $pdf->Rect(5, 71, 15, 5);


                /* LINEA VERTICAL DELANTE DE EMPRESA Y UBICACIÓN */
                $pdf->Line(45, 32, 45, 45);

                /* LINEA VERTICAL ENTRE EMPRESA, UNIDAD, PZA */
                $pdf->Line(230, 25, 230, 45);

                /* LINEA HORIZONTAL DEBAJO DE OBRA, UNIDAD Y ARRIBA DE UBICACIÓN Y PZA */
                $pdf->Line(5, 38, 290, 38);

                /* LINEA VERTICAL DELANTE DE CLAVE */
                $pdf->Line(45, 49.5, 45, 66);
                /* LINEA VERTICAL PARTIDA DE PARTIDA */
                $pdf->Line(90, 49.5, 90, 66);

                /* LINEA HORIZONTAL DEBAJO DE CLAVE, PARTIDA Y CONCEPTO */
                $pdf->Line(5, 56, 290, 56);

                /* TITULOS */

                $pdf->SetFont('Arial', 'B', 8);
                $pdf->SetY(33);
                $pdf->SetX(20);
                $pdf->Cell(55, 5, "OBRA: ", 0, 1);
                $pdf->SetY(39);
                $pdf->SetX(15);
                $pdf->Cell(55, 5, utf8_decode("UBICACIÓN: "), 0, 1);
                $pdf->SetY(26);
                $pdf->SetX(179);
                $pdf->Cell(55, 5, utf8_decode("EMPRESA: "), 0, 1, 'C');
                $pdf->SetY(33);
                $pdf->SetX(179);
                $pdf->Cell(55, 5, utf8_decode("UNIDAD "), 0, 1, 'C');
                $pdf->SetY(33);
                $pdf->SetX(232);
                $pdf->Cell(55, 5, utf8_decode("HOJA "), 0, 1, 'C');
                $pdf->SetY(51);
                $pdf->SetX(15);
                $pdf->Cell(20, 5, utf8_decode("CLAVE "), 0, 1, 'C');
                $pdf->SetY(51);
                $pdf->SetX(60);
                $pdf->Cell(15, 5, utf8_decode("PARTIDA "), 0, 1, 'C');
                $pdf->SetY(51);
                $pdf->SetX(180);
                $pdf->Cell(15, 5, utf8_decode("CONCEPTO"), 0, 1, 'C');
                $pdf->SetY(71);
                $pdf->SetX(5);
                $pdf->Cell(15, 5, utf8_decode("FOTOS "), 0, 1, 'C');


                /* DATOS */
                $pdf->SetY(33);
                $pdf->SetX(46);
                $pdf->SetFont('Arial', '', 8);
                $pdf->Cell(115, 5, "#OBRA: ", 0, 1);
                $pdf->SetY(26);
                $pdf->SetX(230);
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->Cell(60, 5, "#EMPRESA: ", 0, 1, 'C');
                $pdf->SetY(39);
                $pdf->SetX(46);
                $pdf->Cell(115, 5, "#UBICACION: ", 0, 1);
                $pdf->SetY(39);
                $pdf->SetX(180);
                $pdf->SetFont('Arial', '', 8);
                $pdf->Cell(50, 5, utf8_decode("#UNIDAD"), 0, 1, 'C');
                $pdf->SetY(39);
                $pdf->SetX(234);
                $pdf->Cell(0, 5, $pdf->PageNo() . ' DE {nb}', 0, 0, 'C');
                $pdf->SetY(58);
                $pdf->SetX(15);
                $pdf->Cell(75, 5, "#CLAVE: ", 0, 1);
                $pdf->SetY(58);
                $pdf->SetX(57);
                $pdf->Cell(75, 5, "#PARTIDA: ", 0, 1);
                $pdf->SetY(56);
                $pdf->SetX(90);
                $pdf->SetFont('Arial', '', 6);
                $pdf->MultiCell(200, 3.5, "#FLETE DE MOBILIARIO EN CAMION DE HASTA 3.5TON, ESTACIONES DE TRABAJO, "
                        . "MAMPARAS, SEÑALAMIENTOS, ETC. CONSIDERANDO CARGA Y DESCARGA A PIE DE CAMION; INCLUYE, "
                        . "CASETAS, GASOLINA, MANO DE OBRA, EQUIPO DE SEGURIDAD, PROTECCION DE LAS AREAS ADYASENTES, "
                        . "LIMPIEZA FINA DURANTE Y AL FINAL DE LOS TRABAJOS Y TODO LO NECESARIO PARA SU CORRECTA "
                        . "EJECUCION FLETE DE MOBILIARIO EN CAMION DE HASTA 3.5TON, ESTACIONES DE TRABAJO, MAMPARAS, "
                        . "PARA SU CORRECTA EJECUCION", 0, 'L');



                /* DETALLE IMAGENES */
                if ($page == 1) {
                    $dimensiones = getimagesize(base_url() . 'img/PRUEBAS_REPORTE/1.jpg');
                    // $pdf->Cell(25, 5, utf8_decode("FOTO W:".$dimensiones[0]." H:".$dimensiones[1]), 0, 1, 'C');
                    $pdf->Image(base_url() . 'img/PRUEBAS_REPORTE/1.jpg', 15, 85, 80, 80);
                    $pdf->Image(base_url() . 'img/PRUEBAS_REPORTE/2.jpg', 107.5, 85, 80, 80);
                    $pdf->Image(base_url() . 'img/PRUEBAS_REPORTE/3.jpg', 200, 85, 80, 80);
                }
                /* FIN DETALLE IMAGENES */
                /* FIRMAS */
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->SetY(177);
                $pdf->SetX(5);
                $pdf->Cell(15, 5, utf8_decode("FIRMAS DE CONFORMIDAD"), 0, 1, 'L');


                /* ELABORÓ */
                $pdf->SetFont('Arial', '', 8);
                $pdf->SetY(185);
                $pdf->SetX(40);
                $pdf->Cell(15, 5, utf8_decode("ELABORÓ"), 0, 1, 'C');
                $pdf->SetFont('Arial', '', 8);

                /* LINEA HORIZONTAL ELABORÓ */
                $pdf->Line(5, 200, 90, 200);
                $pdf->SetY(200);
                $pdf->SetX(40);
                $pdf->Cell(15, 5, utf8_decode("#FIRMA 1"), 0, 1, 'C');


                /* REVISÓ */
                $pdf->SetY(185);
                $pdf->SetX(140);
                $pdf->Cell(15, 5, utf8_decode("REVISÓ"), 0, 1, 'C');
                /* LINEA HORIZONTAL REVISÓ */
                $pdf->Line(100, 200, 190, 200);
                $pdf->SetY(200);
                $pdf->SetX(140);
                $pdf->Cell(15, 5, utf8_decode("#FIRMA 1"), 0, 1, 'C');

                /* AUTORIZO */
                $pdf->SetY(185);
                $pdf->SetX(240);
                $pdf->Cell(15, 5, utf8_decode("AUTORIZÓ"), 0, 1, 'C');
                /* LINEA HORIZONTAL AUTORIZÓ */
                $pdf->Line(200, 200, 290, 200);
                $pdf->SetY(200);
                $pdf->SetX(240);
                $pdf->Cell(15, 5, utf8_decode("#FIRMA 3"), 0, 1, 'C');

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
        $pdf = new PDF('L', 'mm', array(297/* ANCHO */, 210/* ALTURA */));

        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetAutoPageBreak(false, 300);


        /* ENCABEZADO */
        // Logo
        $pdf->Image(base_url() . 'img/bbva.png', 5, 5, 64);
        // Arial bold 15
        $pdf->SetFont('Arial', 'B', 9);
        // Título
        $pdf->SetY(10);
        // Movernos a la derecha
        $pdf->Cell(75);
        $pdf->Cell(130, 25, utf8_decode("NÚMEROS GENERADORES"), 0, 0, 'C');
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->SetY(1);
        $pdf->SetX(241);
        $pdf->Cell(50, 15, utf8_decode("Dirección de Administración de"), 0, 0, 'R');
        $pdf->Ln(5);
        $pdf->SetY(4);
        $pdf->SetX(241.5);
        $pdf->Cell(50, 15, utf8_decode("InmueblesGestión de Calidad"), 0, 0, 'R');
        $pdf->Ln(5);
        $pdf->SetY(7);
        $pdf->SetX(241);
        $pdf->Cell(50, 15, utf8_decode("InmueblesSubdirección de Inmovilizado"), 0, 0, 'R');
        // Salto de línea
        $pdf->Ln(29);

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
                $pdf->Rect(180, 25, 110, 20);

                /* INICIA EN LA ESQUINA DE OBRA */
                $pdf->Rect(5, 32, 285, 13);

                /* INICIA EN LA ESQUINA DE CLAVE */
                $pdf->Rect(5, 49.5, 285, 17);

                /* LINEA VERTICAL DELANTE DE EMPRESA Y UBICACIÓN */
                $pdf->Line(45, 32, 45, 45);

                /* LINEA VERTICAL ENTRE EMPRESA, UNIDAD, PZA */
                $pdf->Line(230, 25, 230, 45);

                /* LINEA HORIZONTAL DEBAJO DE OBRA, UNIDAD Y ARRIBA DE UBICACIÓN Y PZA */
                $pdf->Line(5, 38, 290, 38);

                /* LINEA VERTICAL DELANTE DE CLAVE */
                $pdf->Line(45, 49.5, 45, 66);
                /* LINEA VERTICAL PARTIDA DE PARTIDA */
                $pdf->Line(90, 49.5, 90, 66);

                /* LINEA HORIZONTAL DEBAJO DE CLAVE, PARTIDA Y CONCEPTO */
                $pdf->Line(5, 56, 290, 56);


                /* TITULOS */

                $pdf->SetFont('Arial', 'B', 8);
                $pdf->SetY(33);
                $pdf->SetX(20);
                $pdf->Cell(55, 5, "OBRA: ", 0, 1);
                $pdf->SetY(39);
                $pdf->SetX(15);
                $pdf->Cell(55, 5, utf8_decode("UBICACIÓN: "), 0, 1);
                $pdf->SetY(26);
                $pdf->SetX(179);
                $pdf->Cell(55, 5, utf8_decode("EMPRESA: "), 0, 1, 'C');
                $pdf->SetY(33);
                $pdf->SetX(179);
                $pdf->Cell(55, 5, utf8_decode("UNIDAD "), 0, 1, 'C');
                $pdf->SetY(33);
                $pdf->SetX(232);
                $pdf->Cell(55, 5, utf8_decode("HOJA "), 0, 1, 'C');
                $pdf->SetY(51);
                $pdf->SetX(15);
                $pdf->Cell(20, 5, utf8_decode("CLAVE "), 0, 1, 'C');
                $pdf->SetY(51);
                $pdf->SetX(60);
                $pdf->Cell(15, 5, utf8_decode("PARTIDA "), 0, 1, 'C');
                $pdf->SetY(51);
                $pdf->SetX(180);
                $pdf->Cell(15, 5, utf8_decode("CONCEPTO"), 0, 1, 'C');



                /* DATOS */
                $pdf->SetY(33);
                $pdf->SetX(46);
                $pdf->SetFont('Arial', '', 8);
                $pdf->Cell(115, 5, "#OBRA: ", 0, 1);
                $pdf->SetY(26);
                $pdf->SetX(230);
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->Cell(60, 5, "#EMPRESA: ", 0, 1, 'C');
                $pdf->SetY(39);
                $pdf->SetX(46);
                $pdf->Cell(115, 5, "#UBICACION: ", 0, 1);
                $pdf->SetY(39);
                $pdf->SetX(180);
                $pdf->SetFont('Arial', '', 8);
                $pdf->Cell(50, 5, utf8_decode("#UNIDAD"), 0, 1, 'C');
                $pdf->SetY(39);
                $pdf->SetX(234);
                $pdf->Cell(0, 5, $pdf->PageNo() . ' DE {nb}', 0, 0, 'C');
                $pdf->SetY(58);
                $pdf->SetX(15);
                $pdf->Cell(75, 5, "#CLAVE: ", 0, 1);
                $pdf->SetY(58);
                $pdf->SetX(57);
                $pdf->Cell(75, 5, "#PARTIDA: ", 0, 1);
                $pdf->SetY(56);
                $pdf->SetX(90);
                $pdf->SetFont('Arial', '', 6);
                $pdf->MultiCell(200, 3.5, "#FLETE DE MOBILIARIO EN CAMION DE HASTA 3.5TON, ESTACIONES DE TRABAJO, "
                        . "MAMPARAS, SEÑALAMIENTOS, ETC. CONSIDERANDO CARGA Y DESCARGA A PIE DE CAMION; INCLUYE, "
                        . "CASETAS, GASOLINA, MANO DE OBRA, EQUIPO DE SEGURIDAD, PROTECCION DE LAS AREAS ADYASENTES, "
                        . "LIMPIEZA FINA DURANTE Y AL FINAL DE LOS TRABAJOS Y TODO LO NECESARIO PARA SU CORRECTA "
                        . "EJECUCION FLETE DE MOBILIARIO EN CAMION DE HASTA 3.5TON, ESTACIONES DE TRABAJO, MAMPARAS, "
                        . "PARA SU CORRECTA EJECUCION", 0, 'L');


                /* ENCABEZADO DETALLE GENERADOR */
                /* CONTENEDOR INICIA EN LA ESQUINA DE FOTOS */
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->Rect(5, 71, 285, 105);

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
                $pdf->Line(210, 176, 210, 71);
                /* LINEA VERTICAL DESPUES DE VOBO BANCOMER */
                $pdf->Line(250, 176, 250, 71);
                /* LINEA HORIZONTAL DE ENCABEZADO LOCALIZACION  */
                $pdf->Line(5, 76, 45, 76);
                /* LINEA HORIZONTAL DE ENCABEZADO COMPLETA */
                $pdf->Line(5, 81, 290, 81);

                /* TITULOS ENCABEZADO */
                $pdf->SetY(71);
                $pdf->SetX(5);
                $pdf->SetFont('Arial', 'B', 8);
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
                $pdf->MultiCell(35, 3, utf8_decode("CORRECCION SUPERVISIóN BBVA BANCOMER"), 0, 'C');
                $pdf->SetY(73);
                $pdf->SetX(212);
                $pdf->MultiCell(35, 3, utf8_decode("VoBo BBVA BANCOMER"), 0, 'C');
                $pdf->SetY(73);
                $pdf->SetX(252);
                $pdf->MultiCell(35, 3, utf8_decode("CONFORMIDAD EMPRESA "), 0, 'C');



                $pdf->SetFont('Arial', '', 8);
                /* DETALLE GENERADOR */
                if ($page == 1) {
                    /* LINEA VERTICAL EJE ABAJO DE LOCALIZACION DETALLE */
                    $pdf->Line(18, 86, 18, 81);
                    /* LINEA VERTICAL ENTRE EJE ABAJO DE LOCALIZACION DETALLE */
                    $pdf->Line(31, 86, 31, 81);
                    /* LINEA SEPARADOR DETALLE RENGLON */
                    $pdf->Line(5, 86, 290, 86);


                    /* DATOS DETALLE */

                    $pdf->SetFont('Arial', '', 8);
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
                $pdf->Rect(175, 176, 35, 5);

                $pdf->SetFont('Arial', 'B', 8);
                $pdf->SetY(176);
                $pdf->SetX(135);
                $pdf->Cell(20, 5, utf8_decode("TOTAL:"), 0, 1, 'C');

                $pdf->SetFont('Arial', '', 8);
                $pdf->SetY(176);
                $pdf->SetX(155);
                $pdf->Cell(20, 5, utf8_decode("#TOTAL"), 0, 1, 'C');

                $pdf->SetFont('Arial', '', 8);
                $pdf->SetY(176);
                $pdf->SetX(175);
                $pdf->Cell(35, 5, utf8_decode("#UNIDAD"), 0, 1, 'C');





                /* FIRMAS */
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->SetY(177);
                $pdf->SetX(5);
                $pdf->Cell(15, 5, utf8_decode("FIRMAS DE CONFORMIDAD"), 0, 1, 'L');


                /* ELABORÓ */
                $pdf->SetFont('Arial', '', 8);
                $pdf->SetY(185);
                $pdf->SetX(40);
                $pdf->Cell(15, 5, utf8_decode("ELABORÓ"), 0, 1, 'C');
                $pdf->SetFont('Arial', '', 8);

                /* LINEA HORIZONTAL ELABORÓ */
                $pdf->Line(5, 200, 90, 200);
                $pdf->SetY(200);
                $pdf->SetX(40);
                $pdf->Cell(15, 5, utf8_decode("#FIRMA 1"), 0, 1, 'C');


                /* REVISÓ */
                $pdf->SetY(185);
                $pdf->SetX(140);
                $pdf->Cell(15, 5, utf8_decode("REVISÓ"), 0, 1, 'C');
                /* LINEA HORIZONTAL REVISÓ */
                $pdf->Line(100, 200, 190, 200);
                $pdf->SetY(200);
                $pdf->SetX(140);
                $pdf->Cell(15, 5, utf8_decode("#FIRMA 1"), 0, 1, 'C');

                /* AUTORIZO */
                $pdf->SetY(185);
                $pdf->SetX(240);
                $pdf->Cell(15, 5, utf8_decode("AUTORIZÓ"), 0, 1, 'C');
                /* LINEA HORIZONTAL AUTORIZÓ */
                $pdf->Line(200, 200, 290, 200);
                $pdf->SetY(200);
                $pdf->SetX(240);
                $pdf->Cell(15, 5, utf8_decode("#FIRMA 3"), 0, 1, 'C');

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
        $file_name = "REPORTE_GENERADOR";
        $url = 'uploads/Reportes/' . $file_name . '.pdf';

        $pdf->Output($url);
        print base_url() . $url;
    }

}

class PDF extends FPDF {
    
}
