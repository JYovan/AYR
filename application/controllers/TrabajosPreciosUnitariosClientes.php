
<?php

header('Access-Control-Allow-Origin: http://app.ayr.mx/');
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "/third_party/fpdf17/fpdf.php";
require_once APPPATH . "/third_party/PHPExcel.php";

class TrabajosPreciosUnitariosClientes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session');
        $this->load->model('trabajos_preciosunitariosClientes_model')
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
                case 'CLIENTE':
                    $this->load->view('vMenuCliente');
                    break;
            }
            $this->load->view('vFondo');
            $this->load->view('vTrabajosPreciosUnitariosClientes');

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
            print json_encode($this->trabajos_preciosunitariosClientes_model->getRecords());
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoByID() {
        try {
            print json_encode($this->trabajos_preciosunitariosClientes_model->getTrabajoByID($this->input->post('ID')));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoDetalleAbiertoByID() {
        try {
            extract($this->input->post());
            $data = $this->trabajos_preciosunitariosClientes_model->getTrabajoDetalleAbiertoByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarDetalle() {
        try {
            extract($this->input->post());
            $data = array(
                'CostoTemp' => $CostoCte,
                'CostoCte' => $CostoCte,
                'ImporteTemp' => $ImporteCte,
                'ImporteCte' => $ImporteCte
            );
            $this->trabajos_preciosunitariosClientes_model->onModificarDetalle($ID, $data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarTemp() {
        try {
            //Borrar temp
            $this->trabajos_preciosunitariosClientes_model->onModificarTemp($this->input->post('ID'));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onImprimirReporte() {
        $cm = $this->trabajos_preciosunitariosClientes_model;
        $Categorias = $cm->getCategorias($this->input->post('ID'));
        $Detalle = $cm->getPreciosUnitarios($this->input->post('ID'));

        if (!empty($Categorias)) {

            $pdf = new PDFClientePU('P', 'mm', array(215.9, 279.4));


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
                            '$' . number_format($F->CostoCte, 2, ".", ","),
                            '$' . number_format($F->ImporteCte, 2, ".", ","),
                        ));
                        $Total_Cat_Total += $F->ImporteCte;
                        $Total_Cat_Cant += $F->Cantidad;
                        $Total_Gen += $F->ImporteCte;
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

}
