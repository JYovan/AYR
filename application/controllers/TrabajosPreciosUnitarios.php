
<?php

header('Access-Control-Allow-Origin: http://app.ayr.mx/');
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "/third_party/fpdf17/fpdf.php";
require_once APPPATH . "/third_party/PHPExcel.php";

class TrabajosPreciosUnitarios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session');
        $this->load->model('trabajos_preciosunitarios_model')
                ->helper('reportePUnit_helper')
                ->helper('file')
                ->model('registroUsuarios_model');
    }

    public function index() {
        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            $this->load->view('vEncabezado');

            switch ($this->session->userdata["TipoAcceso"]) {
                case 'SUPER ADMINISTRADOR':
                    $this->load->view('vNavegacion');

                    break;
                case 'COORDINADOR DE PROCESOS':
                    $this->load->view('vMenuCoordinador');

                    break;
            }
            $this->load->view('vFondo');
            $this->load->view('vTrabajosPreciosUnitarios');

            $this->load->view('vFooter');

            $dataRegistrarAccion = array(
                'Accion' => 'ACCESO A TRABAJOS CON PRECIOS UNITARIOS',
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

    public function getRecords() {
        try {
            print json_encode($this->trabajos_preciosunitarios_model->getRecords());
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoByID() {
        try {
            print json_encode($this->trabajos_preciosunitarios_model->getTrabajoByID($this->input->post('ID')));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregar() {
        try {
            /* TRABAJO */
            extract($this->input->post());
            $data = array(
                'TrabajoID' => $TrabajoID,
                'ConceptoID' => $ConceptoID,
                'Clave' => strtoupper($Clave),
                'Descripcion' => strtoupper($Descripcion),
                'Categoria' => $Categoria,
                'Cantidad' => $Cantidad,
                'Unidad' => strtoupper($Unidad),
                'Costo' => $Costo,
                'Importe' => $Importe
            );
            $ID = $this->trabajos_preciosunitarios_model->onAgregar($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarDetalle() {
        try {
            extract($this->input->post());
            $data = array(
                'Clave' => strtoupper($Clave),
                'Descripcion' => strtoupper($Descripcion),
                'Categoria' => $Categoria,
                'Cantidad' => $Cantidad,
                'Unidad' => strtoupper($Unidad),
                'Costo' => $Costo,
                'Importe' => $Importe
            );
            $this->trabajos_preciosunitarios_model->onModificarDetalle($ID, $data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoDetalleAbiertoByID() {
        try {
            extract($this->input->post());
            $data = $this->trabajos_preciosunitarios_model->getTrabajoDetalleAbiertoByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getConceptosXPreciarioID() {
        try {
            extract($this->input->post());
            $data = $this->trabajos_preciosunitarios_model->getConceptosXPreciarioID($Preciario_ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getConceptoByID() {
        try {
            extract($this->input->post());
            $data = $this->trabajos_preciosunitarios_model->getConceptoByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onComprobarExisteConceptoID() {
        try {
            extract($this->input->post());
            $data = $this->trabajos_preciosunitarios_model->onComprobarExisteConceptoID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarDetalle() {
        try {
            extract($this->input->post());
            $this->trabajos_preciosunitarios_model->onEliminarDetalle($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onImprimirReporte() {
        $cm = $this->trabajos_preciosunitarios_model;
        $Categorias = $cm->getCategorias($this->input->post('ID'));
        $Detalle = $cm->getPreciosUnitarios($this->input->post('ID'));

        if (!empty($Categorias)) {

            $pdf = new PDF('P', 'mm', array(215.9, 279.4));


            $pdf->setCliente($this->input->post('Cliente'));
            $pdf->setSucursal($this->input->post('Sucursal'));
            $pdf->setDesc_concepto($Detalle[0]->ClaveConcepto . '   -    ' . $Detalle[0]->DescConcepto);
            $pdf->setUnidad($Detalle[0]->UnidadConcepto);

            $pdf->AddPage();
            $pdf->SetAutoPageBreak(true, 10);

            $Total_Gen = 0;
            foreach ($Categorias as $keyFT => $T) {
                $pdf->SetFont('Arial', 'BI', 10);
                $pdf->SetX(10);
                $pdf->Cell(35, 7, utf8_decode($T->Categoria), 0, 1, 'L');
                //Detalle

                $anchos = array(40/* 0 */, 95/* 1 */, 20/* 2 */, 15/* 3 */, 15/* 4 */, 20/* 5 */);
                $aligns = array('L', 'L', 'R', 'C', 'R', 'R');
                $pdf->SetFont('Arial', 'B', 9);
                $pdf->SetWidths($anchos);
                $pdf->SetAligns($aligns);
                $pdf->Row(array('Clave', utf8_decode('Descripción'), 'Cant.', 'U.M.', 'Costo', 'Subtotal'));
                $Total_Cat_Cant = 0;
                $Total_Cat_Total = 0;
                foreach ($Detalle as $keyFT => $F) {

                    if ($T->Categoria === $F->Categoria) {

                        $pdf->SetLineWidth(0.25);
                        $pdf->SetFillColor(255, 255, 255);
                        $pdf->SetTextColor(0, 0, 0);
                        $pdf->SetX(5);
                        $pdf->SetFont('Arial', '', 8);


                        $pdf->Row(array(
                            mb_strimwidth(utf8_decode($F->Clave), 0, 25, "..."),
                            mb_strimwidth(utf8_decode($F->Descripcion), 0, 90, "..."),
                            number_format($F->Cantidad, 2, ".", ","),
                            utf8_decode($F->Unidad),
                            '$' . number_format($F->Costo, 2, ".", ","),
                            '$' . number_format($F->Importe, 2, ".", ","),
                        ));
                        $Total_Cat_Total += $F->Importe;
                        $Total_Cat_Cant += $F->Cantidad;
                        $Total_Gen += $F->Importe;
                    }
                }
                $pdf->SetFont('Arial', 'B', 9);
                $pdf->RowNoBorder(array(
                    '',
                    'Importe por ' . substr(utf8_decode($T->Categoria), 1) . ': ',
                    number_format($Total_Cat_Cant, 2, ".", ","),
                    '',
                    '',
                    '$' . number_format($Total_Cat_Total, 2, ".", ","),
                ));
            }
            $pdf->SetFont('Arial', 'B', 9);
            $pdf->RowNoBorder(array(
                '',
                'PRECIO UNITARIO: ',
                '',
                '',
                '',
                '$' . number_format($Total_Gen, 2, ".", ","),
            ));

            /* FIN RESUMEN */
            $path = 'uploads/ReportesTrabajos/ReportePreciosUnitarios';
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file_name = "REPORTE PRECIOS UNITARIOS " . date("d-m-Y his");
            $url = $path . '/' . $file_name . '.pdf';
            /* Borramos el archivo anterior */
            if (delete_files('uploads/ReportesTrabajos/ReportePreciosUnitarios/')) {
                /* ELIMINA LA EXISTENCIA DE CUALQUIER ARCHIVO EN EL DIRECTORIO */
            }
            $pdf->Output($url);
            print base_url() . $url;
        }
    }

    public function onImprimirReporteComparacion() {
        $cm = $this->trabajos_preciosunitarios_model;
        $Categorias = $cm->getCategorias($this->input->post('ID'));
        $Detalle = $cm->getPreciosUnitarios($this->input->post('ID'));

        if (!empty($Categorias)) {

            $pdf = new PDF('P', 'mm', array(215.9, 279.4));


            $pdf->setCliente($this->input->post('Cliente'));
            $pdf->setSucursal($this->input->post('Sucursal'));
            $pdf->setDesc_concepto($Detalle[0]->ClaveConcepto . '   -    ' . $Detalle[0]->DescConcepto);
            $pdf->setUnidad($Detalle[0]->UnidadConcepto);


            $pdf->AddPage();
            $pdf->SetAutoPageBreak(true, 10);

            $Total_Gen = 0;
            $Total_Gen_Cte = 0;
            foreach ($Categorias as $keyFT => $T) {
                $pdf->SetFont('Arial', 'BI', 9);
                $pdf->SetX(10);
                $pdf->Cell(35, 8, utf8_decode($T->Categoria), 0, 1, 'L');
                //Detalle

                $anchos = array(20/* 0 */, 55/* 1 */, 20/* 2 */, 15/* 3 */, 15/* 4 */, 20/* 5 */, 15/* 6 */, 20/* 7 */, 25/* 8 */);
                $aligns = array('L', 'L', 'R', 'C', 'R', 'R', 'R', 'R', 'R');
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->SetWidths($anchos);
                $pdf->SetAligns($aligns);
                $pdf->Row(array('Clave', utf8_decode('Descripción'), 'Cant.', 'U.M.', 'Costo', 'Importe', 'Cto. Cte', 'Importe Cte', 'Diferencia'));
                $Total_Cat_Cant = 0;
                $Total_Cat_Total = 0;
                $Total_Cat_Total_Cte = 0;
                foreach ($Detalle as $keyFT => $F) {

                    if ($T->Categoria === $F->Categoria) {

                        $pdf->SetLineWidth(0.25);
                        $pdf->SetFillColor(255, 255, 255);
                        $pdf->SetTextColor(0, 0, 0);
                        $pdf->SetX(5);
                        $pdf->SetFont('Arial', '', 7.5);


                        $pdf->Row(array(
                            mb_strimwidth(utf8_decode($F->Clave), 0, 15, "..."),
                            mb_strimwidth(utf8_decode($F->Descripcion), 0, 45, "..."),
                            number_format($F->Cantidad, 2, ".", ","),
                            utf8_decode($F->Unidad),
                            '$' . number_format($F->Costo, 2, ".", ","),
                            '$' . number_format($F->Importe, 2, ".", ","),
                            '$' . number_format($F->CostoCte, 2, ".", ","),
                            '$' . number_format($F->ImporteCte, 2, ".", ","),
                            '$' . number_format($F->ImporteCte - $F->Importe, 2, ".", ","),
                        ));
                        $Total_Cat_Total += $F->Importe;
                        $Total_Cat_Cant += $F->Cantidad;
                        $Total_Cat_Total_Cte += $F->ImporteCte;
                        $Total_Gen += $F->Importe;
                        $Total_Gen_Cte += $F->ImporteCte;
                    }
                }
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->RowNoBorder(array(
                    '',
                    'Importe por ' . substr(utf8_decode($T->Categoria), 1) . ': ',
                    number_format($Total_Cat_Cant, 2, ".", ","),
                    '',
                    '',
                    '$' . number_format($Total_Cat_Total, 2, ".", ","),
                    '',
                    '$' . number_format($Total_Cat_Total_Cte, 2, ".", ","),
                    '$' . number_format($Total_Cat_Total_Cte - $Total_Cat_Total, 2, ".", ","),
                ));
            }
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->RowNoBorder(array(
                '',
                'PRECIO UNITARIO: ',
                '',
                '',
                '',
                '$' . number_format($Total_Gen, 2, ".", ","),
                '',
                '$' . number_format($Total_Gen_Cte, 2, ".", ","),
                '$' . number_format($Total_Gen_Cte - $Total_Gen, 2, ".", ","),
            ));

            /* FIN RESUMEN */
            $path = 'uploads/ReportesTrabajos/ReportePreciosUnitarios';
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file_name = "REPORTE PRECIOS UNITARIOS COMPARACION" . date("d-m-Y his");
            $url = $path . '/' . $file_name . '.pdf';
            /* Borramos el archivo anterior */
            if (delete_files('uploads/ReportesTrabajos/ReportePreciosUnitarios/')) {
                /* ELIMINA LA EXISTENCIA DE CUALQUIER ARCHIVO EN EL DIRECTORIO */
            }
            $pdf->Output($url);
            print base_url() . $url;
        }
    }

}
