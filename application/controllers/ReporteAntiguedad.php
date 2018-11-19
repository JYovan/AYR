<?php

header('Access-Control-Allow-Origin: http://app.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "/third_party/PHPExcel.php";
require_once APPPATH . "/third_party/fpdf17/fpdf.php";

class ReporteAntiguedad extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session');
        $this->load->model('reporteAntiguedad_model');
        $this->load->helper('reporteAntiguedad_helper');
        $this->load->helper('file');
        // $this->load->model('centrocostos_model');
    }

    public function index() {
        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            $this->load->view('vEncabezado');
            $this->load->view('vFooter');

            $dataRegistrarAccion = array(
                'Accion' => 'ACCESO A ENTREGAS',
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

    public function onImprimirAntiguedad() {
        $cm = $this->reporteAntiguedad_model;

        $Estatus = json_decode($this->input->post('EstatusTrabajos'));
        $Clientes = json_decode($this->input->post('Cliente'));
        $status = array();
        $clientes = array();
        foreach ($Estatus as $k => $v) {
            array_push($status, $v->Estatus);
        }
        foreach ($Clientes as $k => $v) {
            array_push($clientes, $v->Cliente);
        }
        $ClientesBD = $cm->getClientes($clientes, $status, $this->input->post('Region'));
        $Titulos = $cm->getEstatus($clientes, $this->input->post('Region'), $status);
        $Encabezado = $cm->getDatoseporteAdeudo($clientes, $this->input->post('Region'), $status);

        if (!empty($Encabezado)) {

            $pdf = new PDF('L', 'mm', array(215.9, 279.4));
            $pdf->Region = $Encabezado[0]->Region;

            $pdf->AddPage();
            $pdf->SetAutoPageBreak(true, 10);
            $GGTOTAL = 0;
            $GGTOTAL_1 = 0;
            $GGTOTAL_2 = 0;
            $GGTOTAL_3 = 0;
            $GGTOTAL_4 = 0;
            $GGTOTAL_5 = 0;
            $GGTOTAL_6 = 0;

            foreach ($ClientesBD as $k => $v) {
                $GTOTAL = 0;
                $GTOTAL_1 = 0;
                $GTOTAL_2 = 0;
                $GTOTAL_3 = 0;
                $GTOTAL_4 = 0;
                $GTOTAL_5 = 0;
                $GTOTAL_6 = 0;
                //Detalle
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->SetX(5);
                $pdf->Cell(270, 8, utf8_decode($v->Cliente), 0, 1, 'L');


                foreach ($Titulos as $keyFT => $T) {
                    $pdf->SetFont('Arial', 'B', 7.5);
                    $pdf->SetX(13);
                    $pdf->Cell(35, 4, utf8_decode($T->ET), 0, 1, 'L');


                    $TOTAL = 0;
                    $TOTAL_1 = 0;
                    $TOTAL_2 = 0;
                    $TOTAL_3 = 0;
                    $TOTAL_4 = 0;
                    $TOTAL_5 = 0;
                    $TOTAL_6 = 0;
                    //Detalle
                    foreach ($Encabezado as $keyFT => $F) {

                        if ($T->ET === $F->ET && $F->IDCliente === $v->IDCliente) {

                            $pdf->SetLineWidth(0.25);
                            $pdf->SetFillColor(255, 255, 255);
                            $pdf->SetTextColor(0, 0, 0);
                            $pdf->SetX(5);
                            $pdf->SetFont('Arial', '', 7);
                            $anchos = array(15/* 0 */, 25/* 1 */, 80/* 2 */, 20/* 4 */, 20/* 5 */, 20/* 6 */, 20/* 7 */, 20/* 8 */, 20/* 9 */, 30/* 10 */);
                            $aligns = array('L', 'L', 'L', 'R', 'R', 'R', 'R', 'R', 'R', 'R');
                            $pdf->SetAligns($aligns);
                            $pdf->SetWidths($anchos);

                            $pdf->Row(array(
                                utf8_decode($F->ID),
                                mb_strimwidth(utf8_decode($F->Folio), 0, 15, "..."),
                                mb_strimwidth(utf8_decode($F->Cliente) . ' ' . utf8_decode($F->Sucursal), 0, 55, "..."),
                                '$' . number_format($F->Total, 2, ".", ","),
                                ($F->UNO > 0) ? '$' . number_format($F->UNO, 2, ".", ",") : '',
                                ($F->DOS > 0) ? '$' . number_format($F->DOS, 2, ".", ",") : '',
                                ($F->TRES > 0) ? '$' . number_format($F->TRES, 2, ".", ",") : '',
                                ($F->CUATRO > 0) ? '$' . number_format($F->CUATRO, 2, ".", ",") : '',
                                ($F->CINCO > 0) ? '$' . number_format($F->CINCO, 2, ".", ",") : '',
                                ($F->SEIS > 0) ? '$' . number_format($F->SEIS, 2, ".", ",") : ''
                            ));

                            $TOTAL += $F->Total;
                            $TOTAL_1 += $F->UNO;
                            $TOTAL_2 += $F->DOS;
                            $TOTAL_3 += $F->TRES;
                            $TOTAL_4 += $F->CUATRO;
                            $TOTAL_5 += $F->CINCO;
                            $TOTAL_6 += $F->SEIS;
                            $GTOTAL += $F->Total;
                            $GTOTAL_1 += $F->UNO;
                            $GTOTAL_2 += $F->DOS;
                            $GTOTAL_3 += $F->TRES;
                            $GTOTAL_4 += $F->CUATRO;
                            $GTOTAL_5 += $F->CINCO;
                            $GTOTAL_6 += $F->SEIS;
                            $GGTOTAL += $F->Total;
                            $GGTOTAL_1 += $F->UNO;
                            $GGTOTAL_2 += $F->DOS;
                            $GGTOTAL_3 += $F->TRES;
                            $GGTOTAL_4 += $F->CUATRO;
                            $GGTOTAL_5 += $F->CINCO;
                            $GGTOTAL_6 += $F->SEIS;
                            //Detalle
                        }
                    }

                    $pdf->SetFont('Arial', 'B', 7.5);
                    $pdf->SetX(5);
                    $anchos = array(15/* 0 */, 25/* 1 */, 80/* 2 */, 20/* 3 */, 20/* 4 */, 20/* 5 */, 20/* 6 */, 20/* 7 */, 20/* 8 */, 30/* 9 */);
                    $aligns = array('L', 'L', 'L', 'R', 'R', 'R', 'R', 'R', 'R', 'R');
                    $pdf->SetAligns($aligns);
                    $pdf->SetWidths($anchos);
                    $pdf->RowNoBorder(array(
                        '',
                        '',
                        'SALDO DE ' . strtoupper(utf8_decode($T->ET)) . ':',
                        ($TOTAL > 0) ? '$' . number_format($TOTAL, 2, ".", ",") : '',
                        ($TOTAL_1 > 0) ? '$' . number_format($TOTAL_1, 2, ".", ",") : '',
                        ($TOTAL_2 > 0) ? '$' . number_format($TOTAL_2, 2, ".", ",") : '',
                        ($TOTAL_3 > 0) ? '$' . number_format($TOTAL_3, 2, ".", ",") : '',
                        ($TOTAL_4 > 0) ? '$' . number_format($TOTAL_4, 2, ".", ",") : '',
                        ($TOTAL_5 > 0) ? '$' . number_format($TOTAL_5, 2, ".", ",") : '',
                        ($TOTAL_6 > 0) ? '$' . number_format($TOTAL_6, 2, ".", ",") : ''
                    ));
                }
                $pdf->SetFont('Arial', 'B', 7.5);
                $pdf->SetX(5);
                $anchos = array(15/* 0 */, 25/* 1 */, 75/* 2 */, 25/* 3 */, 20/* 4 */, 20/* 5 */, 20/* 6 */, 20/* 7 */, 20/* 8 */, 30/* 9 */);
                $aligns = array('L', 'L', 'L', 'R', 'R', 'R', 'R', 'R', 'R', 'R');
                $pdf->SetAligns($aligns);
                $pdf->SetWidths($anchos);
                $pdf->RowNoBorder(array(
                    '',
                    '',
                    'SALDO TOTAL DE ' . strtoupper(utf8_decode($v->Cliente)) . ':',
                    ($GTOTAL > 0) ? '$' . number_format($GTOTAL, 2, ".", ",") : '',
                    ($GTOTAL_1 > 0) ? '$' . number_format($GTOTAL_1, 2, ".", ",") : '',
                    ($GTOTAL_2 > 0) ? '$' . number_format($GTOTAL_2, 2, ".", ",") : '',
                    ($GTOTAL_3 > 0) ? '$' . number_format($GTOTAL_3, 2, ".", ",") : '',
                    ($GTOTAL_4 > 0) ? '$' . number_format($GTOTAL_4, 2, ".", ",") : '',
                    ($GTOTAL_5 > 0) ? '$' . number_format($GTOTAL_5, 2, ".", ",") : '',
                    ($GTOTAL_6 > 0) ? '$' . number_format($GTOTAL_6, 2, ".", ",") : ''
                ));
            }
            $pdf->SetFont('Arial', 'B', 7.5);
            $pdf->SetX(5);
            $anchos = array(15/* 0 */, 25/* 1 */, 75/* 2 */, 25/* 3 */, 20/* 4 */, 20/* 5 */, 20/* 6 */, 20/* 7 */, 20/* 8 */, 30/* 9 */);
            $aligns = array('L', 'L', 'L', 'R', 'R', 'R', 'R', 'R', 'R', 'R');
            $pdf->SetAligns($aligns);
            $pdf->SetWidths($anchos);
            $pdf->RowNoBorder(array(
                '',
                '',
                'SALDO TOTAL GENERAL:',
                ($GGTOTAL > 0) ? '$' . number_format($GGTOTAL, 2, ".", ",") : '',
                ($GGTOTAL_1 > 0) ? '$' . number_format($GGTOTAL_1, 2, ".", ",") : '',
                ($GGTOTAL_2 > 0) ? '$' . number_format($GGTOTAL_2, 2, ".", ",") : '',
                ($GGTOTAL_3 > 0) ? '$' . number_format($GGTOTAL_3, 2, ".", ",") : '',
                ($GGTOTAL_4 > 0) ? '$' . number_format($GGTOTAL_4, 2, ".", ",") : '',
                ($GGTOTAL_5 > 0) ? '$' . number_format($GGTOTAL_5, 2, ".", ",") : '',
                ($GGTOTAL_6 > 0) ? '$' . number_format($GGTOTAL_6, 2, ".", ",") : ''
            ));
            /* FIN RESUMEN */
            $path = 'uploads/ReportesGerenciales/ReportesGerenciales';
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file_name = "RELACION ADEUDO " . date("d-m-Y his");
            $url = $path . '/' . $file_name . '.pdf';
            /* Borramos el archivo anterior */
            if (delete_files('uploads/ReportesGerenciales/ReportesGerenciales/')) {
                /* ELIMINA LA EXISTENCIA DE CUALQUIER ARCHIVO EN EL DIRECTORIO */
            }
            $pdf->Output($url);
            print base_url() . $url;
        }
    }

}
