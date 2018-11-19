<?php

header('Access-Control-Allow-Origin: http://app.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "/third_party/PHPExcel.php";
require_once APPPATH . "/third_party/fpdf17/fpdf.php";

class ReporteAdeudo extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session');
        $this->load->model('reporteAdeudo_model');
        $this->load->helper('reporteAdeudo_helper');
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

    public function onImprimirReporteAdeudo() {
        $cm = $this->reporteAdeudo_model;

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
        $Subtotal = $cm->getSubtotal($clientes, $this->input->post('Region'), $status);

        if (!empty($Encabezado)) {

            $pdf = new PDF('L', 'mm', array(215.9, 279.4));
            $pdf->Region = $Encabezado[0]->Region;
            $pdf->Subtotal = $Subtotal[0]->Subtotal;

            $pdf->AddPage();
            $pdf->SetAutoPageBreak(true, 21);


            foreach ($ClientesBD as $k => $v) {
                $SUBTOTAL_CLIENTE = 0;
                $TOTAL_CLIENTE = 0;
                $pdf->SetFont('Arial', 'B', 7);
                $pdf->SetX(5);
                $pdf->SetFillColor(250, 250, 170);
                $pdf->SetTextColor(0, 0, 0);
                $pdf->Cell(270, 5, utf8_decode($v->Cliente), 1, 1, 'L', 1);


                foreach ($Titulos as $keyFT => $T) {

                    $pdf->SetFont('Arial', 'B', 7);
                    $pdf->SetX(5);
                    $pdf->SetFillColor(248, 248, 248);
                    $pdf->SetTextColor(0, 0, 0);
                    $pdf->Cell(270, 5, utf8_decode($T->ET), 1, 1, 'C', 1);

                    $SUBTOTAL = 0;
                    $TOTAL = 0;

                    //Detalle
                    foreach ($Encabezado as $keyFT => $F) {

                        if ($T->ET === $F->ET && $F->IDCliente === $v->IDCliente) {

                            $pdf->SetLineWidth(0.25);
                            $pdf->SetFillColor(255, 255, 255);
                            $pdf->SetTextColor(0, 0, 0);
                            $pdf->SetX(5);
                            $pdf->SetFont('Arial', '', 6);
                            $anchos = array(15/* 0 */, 18/* 1 */, 35/* 2 */, 18/* 3 */, 20/* 4 */, 22/* 5 */, 22/* 6 */, 16/* 7 */, 11/* 8 */, 17/* 9 */, 17/* 10 */, 17/* 11 */, 42/* 11 */);
                            $aligns = array('C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'R', 'R', 'C', 'C');
                            $pdf->SetAligns($aligns);
                            $pdf->SetWidths($anchos);

                            $pdf->Row(array(
                                utf8_decode($F->CentroCostos),
                                utf8_decode($F->Factura),
                                utf8_decode($F->TrabajoRequerido),
                                utf8_decode($F->OrdenCompra),
                                '',
                                utf8_decode($F->Folio),
                                utf8_decode($F->Especialidad),
                                utf8_decode($F->FechaEntrega),
                                'MXN',
                                '$' . number_format($F->Subtotal, 2, ".", ","),
                                '$' . number_format($F->Total, 2, ".", ","),
                                utf8_decode($F->Region),
                                utf8_decode(' (' . $F->ID . ')  ' . $F->Sucursal . '  [ENT: ' . $F->NoEntrega . '] ' . ' Fecha: ' . $F->FechaFolio)
                            ));
                            $SUBTOTAL += $F->Subtotal;
                            $TOTAL += $F->Total;
                            $SUBTOTAL_CLIENTE += $F->Subtotal;
                            $TOTAL_CLIENTE += $F->Total;
                        }
                    }

                    $pdf->SetFont('Arial', 'B', 6.5);
                    $pdf->SetX(5);
                    $anchos = array(0/* 0 */, 0/* 1 */, 0/* 2 */, 0/* 3 */, 0/* 4 */, 0/* 5 */, 0/* 6 */, 0/* 7 */, 0/* 8 */, 0/* 9 */, 177/* 10 */, 17/* 11 */, 17/* 11 */);
                    $aligns = array('C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'R', 'R', 'R', 'R');
                    $pdf->SetAligns($aligns);
                    $pdf->SetWidths($anchos);
                    $pdf->RowNoBorder(array(
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        'TOTAL DE ' . strtoupper(utf8_decode($T->ET)) . ':',
                        '$' . number_format($SUBTOTAL, 2, ".", ","),
                        '$' . number_format($TOTAL, 2, ".", ","),
                    ));
                }
                $pdf->SetFont('Arial', 'B', 6.5);
                $pdf->SetX(5);
                $anchos = array(0/* 0 */, 0/* 1 */, 0/* 2 */, 0/* 3 */, 0/* 4 */, 0/* 5 */, 0/* 6 */, 0/* 7 */, 0/* 8 */, 0/* 9 */, 177/* 10 */, 17/* 11 */, 17/* 11 */);
                $aligns = array('C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'R', 'R', 'R', 'R');
                $pdf->SetAligns($aligns);
                $pdf->SetWidths($anchos);
                $pdf->RowNoBorder(array(
                    '',
                    '',
                    '',
                    '',
                    '',
                    '',
                    '',
                    '',
                    '',
                    '',
                    'TOTAL DE ' . utf8_decode($v->Cliente) . ':',
                    '$' . number_format($SUBTOTAL_CLIENTE, 2, ".", ","),
                    '$' . number_format($TOTAL_CLIENTE, 2, ".", ","),
                ));
            }
            $YY = $pdf->GetY() + 5;
            $pdf->Image(base_url() . 'img/firma_adeudo.png', 40, $YY, 200);

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

    public function onImprimirReporteAdeudoExcel() {
        try {
            $cm = $this->reporteAdeudo_model;

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
            $Encabezado = $cm->getDatoseporteAdeudoExcel($clientes, $this->input->post('Region'), $status);
            $Subtotal = $cm->getSubtotal($clientes, $this->input->post('Region'), $status);

            if (!empty($Encabezado)) {
                //$datosGenerales = $fields[0];
                $objPHPExcel = new Excel();
                $objPHPExcel->setActiveSheetIndex(0);

                //Header
                //Borde
                $objPHPExcel->getActiveSheet()->getStyle("F1:L1")->applyFromArray(
                        array(
                            'borders' => array(
                                'allborders' => array(
                                    'style' => PHPExcel_Style_Border::BORDER_THIN,
                                    'color' => array('rgb' => '000000')
                                )
                            )
                        )
                );

                //Alinear para que combine y centre
                $style = array(
                    'alignment' => array(
                        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                    )
                );

                $objPHPExcel->getActiveSheet()->getStyle("F1:L1")->applyFromArray($style);
                $objPHPExcel->getActiveSheet()->getStyle('F1')->getFont()->setBold(true);
                $objPHPExcel->getActiveSheet()->mergeCells('F1:L1');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 1, 'REPORTE DE ADEUDO POR CLIENTE/ESTATUS');

                $objPHPExcel->getActiveSheet()->getStyle('P1')->getFont()->setBold(true);
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(15, 1, 'FECHA:');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(16, 1, Date('d/m/Y'));
                $objPHPExcel->getActiveSheet()->getStyle('A2')->getFont()->setBold(true);
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, 2, 'REGION:');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, 2, $this->input->post('Region'));
                $objPHPExcel->getActiveSheet()->getStyle('E2')->getFont()->setBold(true);
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 2, 'CLIENTE(S):');

                $Cli = '||';
                foreach ($ClientesBD as $k => $v) {
                    $Cli .= $v->Cliente . '||';
                    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 2, $Cli);
                }
                $objPHPExcel->getActiveSheet()->getStyle('E3')->getFont()->setBold(true);
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 3, 'ESTATUS:');
                $Est = '||';
                foreach ($Titulos as $k => $v) {
                    $Est .= $v->ET . '||';
                    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 3, $Est);
                }
                $objPHPExcel->getActiveSheet()->getStyle('Q' . 2)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATEDMXN);
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(15, 2, 'SUBTOTAL:');
                $objPHPExcel->getActiveSheet()->getStyle('P2')->getFont()->setBold(true);
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(16, 2, $Subtotal[0]->Subtotal);


                $objPHPExcel->getActiveSheet()->getRowDimension('5')->setRowHeight(45);
                // Field names in the first row
                $from = "A5"; // or any value
                $to = "R5"; // or any value
                $objPHPExcel->getActiveSheet()->getStyle("$from:$to")->getFont()->setBold(true);
                //$objPHPExcel->getActiveSheet()->getStyle("$from:$to")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
                //$objPHPExcel->getActiveSheet()->getStyle("$from:$to")->getFill()->getStartColor()->setARGB('FFFF0000');
                $objPHPExcel->getActiveSheet()->getStyle("$from:$to")->getFill()->applyFromArray(array(
                    'type' => PHPExcel_Style_Fill::FILL_SOLID,
                    'startcolor' => array(
                        'rgb' => '64ade6'
                    )
                ));

                $objPHPExcel->getActiveSheet()->getStyle("$from:$to")->applyFromArray(
                        array(
                            'borders' => array(
                                'allborders' => array(
                                    'style' => PHPExcel_Style_Border::BORDER_THIN,
                                    'color' => array('rgb' => 'FFFFFF')
                                )
                            )
                        )
                );
                $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
                $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
                $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
                $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
                $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
                $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
                $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
                $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);

                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, 5, 'CTA GASTO INVERSION');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, 5, 'NO FACTURA');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 5, 'DESCRIPCION BREVE');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 5, 'ORDEN DE COMPRA');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 5, 'ACEPTACION');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 5, 'ORDEN DE TRABAJO');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 5, 'ESPECIALIDAD');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 5, 'FECHA ENTREGA');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 5, 'MONEDA');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 5, 'SUBTOTAL');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10, 5, 'TOTAL C/IVA');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 5, 'REGION');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, 5, 'CLIENTE');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13, 5, 'ESTATUS');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(14, 5, 'FOLIO');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(15, 5, 'SUCURSAL');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(16, 5, 'ENTREGA');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(17, 5, 'FECHA FOLIO');
                $row = 6;
                $TOTAL_SUBTOTAL = 0;
                $TOTAL_TOTAL = 0;
                foreach ($Encabezado as $key => $v) {
                    //Set number format
                    //$objPHPExcel->getActiveSheet()->getStyle('J' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_00);
                    $objPHPExcel->getActiveSheet()->getStyle('J' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATEDMXN);
                    $objPHPExcel->getActiveSheet()->getStyle('K' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATEDMXN);
                    // Add some data
                    $objPHPExcel->getActiveSheet()->setCellValue('A' . $row, $v->CentroCostos);
                    $objPHPExcel->getActiveSheet()->setCellValue('B' . $row, $v->Factura);
                    $objPHPExcel->getActiveSheet()->setCellValue('C' . $row, $v->TrabajoRequerido);
                    $objPHPExcel->getActiveSheet()->setCellValue('D' . $row, $v->OrdenCompra);
                    $objPHPExcel->getActiveSheet()->setCellValue('E' . $row, '');
                    $objPHPExcel->getActiveSheet()->setCellValue('F' . $row, $v->Folio);
                    $objPHPExcel->getActiveSheet()->setCellValue('G' . $row, $v->Especialidad);
                    $objPHPExcel->getActiveSheet()->setCellValue('H' . $row, $v->FechaEntrega);
                    $objPHPExcel->getActiveSheet()->setCellValue('I' . $row, 'MXN');
                    $objPHPExcel->getActiveSheet()->setCellValue('J' . $row, $v->Subtotal);
                    $objPHPExcel->getActiveSheet()->setCellValue('K' . $row, $v->Total);
                    $objPHPExcel->getActiveSheet()->setCellValue('L' . $row, $v->Region);
                    $objPHPExcel->getActiveSheet()->setCellValue('M' . $row, $v->NombreCliente);
                    $objPHPExcel->getActiveSheet()->setCellValue('N' . $row, $v->ET);
                    $objPHPExcel->getActiveSheet()->setCellValue('O' . $row, $v->ID);
                    $objPHPExcel->getActiveSheet()->setCellValue('P' . $row, $v->Sucursal);
                    $objPHPExcel->getActiveSheet()->setCellValue('Q' . $row, $v->NoEntrega);
                    $objPHPExcel->getActiveSheet()->setCellValue('R' . $row, $v->FechaFolio);
                    $TOTAL_SUBTOTAL += $v->Subtotal;
                    $TOTAL_TOTAL += $v->Total;
                    $row++;
                }
                //ESTABLECER ALINEACION HASTA LA ULTIMA FILA
                $objPHPExcel->getActiveSheet()->getStyle('F6:F' . $row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                //Totales
                $objPHPExcel->getActiveSheet()->getStyle('I' . $row)->getFont()->setBold(true);
                $objPHPExcel->getActiveSheet()->setCellValue('I' . $row, 'Total');
                $objPHPExcel->getActiveSheet()->getStyle('J' . $row)->getFont()->setBold(true);
                $objPHPExcel->getActiveSheet()->getStyle('J' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATEDMXN);
                $objPHPExcel->getActiveSheet()->setCellValue('J' . $row, $TOTAL_SUBTOTAL);
                $objPHPExcel->getActiveSheet()->getStyle('K' . $row)->getFont()->setBold(true);
                $objPHPExcel->getActiveSheet()->getStyle('K' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATEDMXN);
                $objPHPExcel->getActiveSheet()->setCellValue('K' . $row, $TOTAL_TOTAL);
                $objPHPExcel->setActiveSheetIndex(0);
// Rename sheet
                $objPHPExcel->getActiveSheet()->setTitle('Hoja1');
// Save Excel 2007 file
                $path = 'uploads/ReportesGerenciales/Reporte Adeudo.xlsx';
                $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
                $objWriter->save(str_replace(__FILE__, $path, __FILE__));
                print base_url() . $path;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
