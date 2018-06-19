<?php

header('Access-Control-Allow-Origin: http://app.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "/third_party/PHPExcel.php";

class Entregas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session');
        $this->load->model('entregas_model');
        $this->load->model('cliente_model');
        $this->load->model('trabajo_model');
        $this->load->model('registroUsuarios_model');
        // $this->load->model('centrocostos_model');
    }

    public function index() {
        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            if (in_array($this->session->userdata["TipoAcceso"], array("COORDINADOR DE PROCESOS", "ADMINISTRADOR", "SUPER ADMINISTRADOR"))) {
                $this->load->view('vEncabezado');
                $this->load->view('vNavegacion');
                $this->load->view('vEntregas');
                $this->load->view('vFooter');
                $dataRegistrarAccion = array(
                    'Accion' => 'ACCESO A ENTREGAS',
                    'Registro' => date("d-m-Y H:i:s"),
                    'Usuario_ID' => $this->session->userdata('ID')
                );
                $this->registroUsuarios_model->onAgregar($dataRegistrarAccion);
            } else {
                $this->load->view('vEncabezado');
                $this->load->view('vNavegacion');
                $this->load->view('vFooter');
            }
        } else {
            $this->load->view('vEncabezado');
            $this->load->view('vSesion');
            $this->load->view('vFooter');
        }
    }

    public function getRecords() {
        try {
            $data = $this->entregas_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getMyRecords() {
        try {
            $data = $this->entregas_model->getMyRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEntregaByID() {
        try {
            extract($this->input->post());
            $data = $this->entregas_model->getEntregaByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoByID() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getTrabajoByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajosControlEntregasByCliente() {
        try {
            extract($this->input->post());
            $data = $this->entregas_model->getTrabajosControlEntregasByCliente($Cliente_ID, $ID_Entrega);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregar() {
        try {
            /* TRABAJO */
            extract($this->input->post());
            $data = array(
                'Movimiento' => 'Entrega',
                'FechaCreacion' => $FechaCreacion,
                'Cliente_ID' => $Cliente_ID,
                'NoEntrega' => (isset($NoEntrega) && $NoEntrega !== '') ? $NoEntrega : NULL,
                'Usuario_ID' => $this->session->userdata('ID'),
                'Estatus' => 'Borrador',
                'Importe' => (isset($Importe) && $Importe !== 0) ? $Importe : 0
            );
            $ID = $this->entregas_model->onAgregar($data);

            /* SUBIR AJUNTO */
            $URL_DOC = 'uploads/Entregas/AdjuntoEncabezado';
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
                        'Adjunto' => ($img),
                    );
                    $this->entregas_model->onModificar($ID, $DATA);
                } else {
                    $DATA = array(
                        'Adjunto' => (null),
                    );
                    $this->entregas_model->onModificar($ID, $DATA);
                }
            }

            echo $ID;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarDetalle() {
        try {
            extract($this->input->post());
            $data = array(
                'Entrega_ID' => $Entrega_ID,
                'Trabajo_ID' => $Trabajo_ID,
                'Renglon' => 0
            );
            $ID = $this->entregas_model->onAgregarDetalle($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getEntregaDetalleByID() {
        try {
            extract($this->input->post());
            $data = $this->entregas_model->getDetalleByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar() {
        try {
            extract($this->input->post());
            $data = array(
                'Cliente_ID' => $Cliente_ID,
                'NoEntrega' => (isset($NoEntrega) && $NoEntrega !== '') ? $NoEntrega : NULL
            );
            $this->entregas_model->onModificar($ID, $data);


            /* MODIFICAR ADJUNTO */
            $AdjuntoP = $this->input->post('Adjunto');
            if (empty($AdjuntoP)) {
                if ($_FILES["Adjunto"]["tmp_name"] !== "") {
                    $URL_DOC = 'uploads/Entregas/AdjuntoEncabezado';
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
                                'Adjunto' => ($img),
                            );
                            $this->entregas_model->onModificar($ID, $DATA);
                        } else {
                            $DATA = array(
                                'Adjunto' => (null),
                            );
                            $this->entregas_model->onModificar($ID, $DATA);
                        }
                    }
                }
            } else {
                $DATA = array(
                    'Adjunto' => (null),
                );
                $this->entregas_model->onModificar($ID, $DATA);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarEstatus() {
        try {
            extract($this->input->post());
            $data = array(
                'Estatus' => $Estatus
            );
            $this->entregas_model->onModificar($ID, $data);


            //AQUI SE INSERTA EL ID DE LA ENTREGA PARA PODERNOS TRAER SU INFORMACION
            if ($Estatus == 'Concluido') {
                $this->trabajo_model->onEntregado($ID);
            } else {
                $this->trabajo_model->onCancelarEntregado($ID);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarImportePorEntrega() {
        try {
            extract($this->input->post());
            print json_encode($this->entregas_model->onModificarImportePorEntrega($ID, $DATA));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar() {
        try {
            extract($this->input->post());
            $this->entregas_model->onEliminar($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarTrabajoDetalle() {
        try {
            extract($this->input->post());
            $this->entregas_model->onEliminarTrabajoDetalle($ID);
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

    //MEtodo para cambiar Estatus de los movimientos cuando se concluye la entrega
    public function onEntregado() {
        try {
            extract($this->input->post());
            $this->trabajo_model->onEntregado($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onCancelarEntregado() {
        try {
            extract($this->input->post());
            $this->trabajo_model->onCancelarEntregado($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTarifarioXEntrega() {
        try {
            $ID = $_POST["ID"];
            $fields = $this->trabajo_model->getTarifarioXEntrega($ID);
            $datosGenerales = $fields[0];
            $objPHPExcel = new Excel();
            $objPHPExcel->setActiveSheetIndex(0);
            // Field names in the first row
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, 1, 'No.');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, 1, 'CODIGO');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 1, 'DESCRIPCIÓN');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 1, 'TIPO PRECIO');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 1, 'CATALOGO');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 1, 'TIPO');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 1, 'UNIDAD');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 1, 'CANTIDAD');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 1, 'PU');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 1, 'TOTAL');
            $row = 2;
            foreach ($fields as $key => $value) {
                //Set number format
                $objPHPExcel->getActiveSheet()->getStyle('H' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_00);
                $objPHPExcel->getActiveSheet()->getStyle('I' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATEDMXN);
                $objPHPExcel->getActiveSheet()->getStyle('J' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATEDMXN);
                // Add some data
                $objPHPExcel->getActiveSheet()->setCellValue('A' . $row, str_pad($row - 1, 3, "0", STR_PAD_LEFT));
                $objPHPExcel->getActiveSheet()->setCellValue('B' . $row, $value->Clave);
                $objPHPExcel->getActiveSheet()->setCellValue('C' . $row, $value->Concepto);
                $objPHPExcel->getActiveSheet()->setCellValue('D' . $row, $value->TipoPrecio);
                $objPHPExcel->getActiveSheet()->setCellValue('E' . $row, $value->Catalogo);
                $objPHPExcel->getActiveSheet()->setCellValue('F' . $row, $value->TipoConcepto);
                $objPHPExcel->getActiveSheet()->setCellValue('G' . $row, $value->Unidad);
                $objPHPExcel->getActiveSheet()->setCellValue('H' . $row, $value->Cantidad);
                $objPHPExcel->getActiveSheet()->setCellValue('I' . $row, $value->Precio);
                $objPHPExcel->getActiveSheet()->setCellValue('J' . $row, $value->Importe);
                $row++;
            }
            //Totales
            $objPHPExcel->getActiveSheet()->setCellValue('I' . $row, 'Total');
            $objPHPExcel->getActiveSheet()->getStyle('J' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATEDMXN);
            $objPHPExcel->getActiveSheet()->setCellValue('J' . $row, $datosGenerales->ImporteTotal);
            $objPHPExcel->setActiveSheetIndex(0);
// Rename sheet
            $objPHPExcel->getActiveSheet()->setTitle('Hoja1');
// Save Excel 2007 file
            $path = 'uploads/Tarifarios/Tarifario de Conceptos.xlsx';
            $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
            $objWriter->save(str_replace(__FILE__, $path, __FILE__));
            print base_url() . $path;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getFicheroXEntrega() {
        try {
            $ID = $_POST["ID"];
            $fields = $this->trabajo_model->getFicheroXEntrega($ID);

            if (!empty($fields)) {
                $datosGenerales = $fields[0];
                $objPHPExcel = new Excel();
                $objPHPExcel->setActiveSheetIndex(0);
                // Field names in the first row
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, 1, 'CIF');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, 1, 'Número de la Orden');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 1, 'Fecha Atención');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 1, 'Hora Atención');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 1, 'Fecha Realización');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 1, 'Hora Realización');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 1, 'Causa de la Actuación');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 1, 'PRRLL');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 1, 'Contrato');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 1, 'Posicion');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10, 1, 'Sub Pos.');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 1, 'Material');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, 1, 'Servicio');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13, 1, 'Cantidad');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(14, 1, 'Ind.Impuesto');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(15, 1, 'Familia');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(16, 1, 'Unidad');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(17, 1, 'Importe unitario');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(18, 1, 'Texto Material');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(19, 1, 'Moneda');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(20, 1, 'Cal.1');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(21, 1, 'Cal.2');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(21, 1, 'Cal.3');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(23, 1, 'Cal.4');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(24, 1, 'Cal.5');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(25, 1, 'Texto Causa');
                $row = 2;
                foreach ($fields as $key => $value) {
                    //Set number format
                    $objPHPExcel->getActiveSheet()->getStyle('B' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER);
                    // $objPHPExcel->getActiveSheet()->getStyle('C' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_YYYYMMDD3);
                    //$objPHPExcel->getActiveSheet()->getStyle('E' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_YYYYMMDD3);
                    $objPHPExcel->getActiveSheet()->getStyle('D' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_TIME4);
                    $objPHPExcel->getActiveSheet()->getStyle('F' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_TIME4);
                    $objPHPExcel->getActiveSheet()->getStyle('R' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_00);

                    $objPHPExcel->getActiveSheet()->getStyle('L' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER);
                    $objPHPExcel->getActiveSheet()->getStyle('P' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER);

                    // Add data
                    $objPHPExcel->getActiveSheet()->setCellValue('A' . $row, $value->CIf);
                    $objPHPExcel->getActiveSheet()->setCellValue('B' . $row, $value->FolioCliente, PHPExcel_Cell_DataType::TYPE_STRING);
                    $objPHPExcel->getActiveSheet()->setCellValue('C' . $row, $value->FechaOrigen);
                    $objPHPExcel->getActiveSheet()->setCellValue('D' . $row, $value->HoraOrigen);
                    $objPHPExcel->getActiveSheet()->setCellValue('E' . $row, $value->FechaLlegada);
                    $objPHPExcel->getActiveSheet()->setCellValue('F' . $row, $value->HoraLlegada);
                    $objPHPExcel->getActiveSheet()->setCellValue('G' . $row, $value->Sintoma);
                    $objPHPExcel->getActiveSheet()->setCellValue('H' . $row, $value->PRRLL);
                    $objPHPExcel->getActiveSheet()->setCellValue('I' . $row, $value->Contrato);
                    $objPHPExcel->getActiveSheet()->setCellValue('J' . $row, $value->Posicion);
                    $objPHPExcel->getActiveSheet()->setCellValue('K' . $row, $value->SubPosicion);
                    $objPHPExcel->getActiveSheet()->setCellValue('L' . $row, $value->Material);
                    $objPHPExcel->getActiveSheet()->setCellValue('M' . $row, $value->Servicio);
                    $objPHPExcel->getActiveSheet()->setCellValue('N' . $row, $value->Cantidad);
                    $objPHPExcel->getActiveSheet()->setCellValue('O' . $row, $value->IndImpuesto);
                    $objPHPExcel->getActiveSheet()->setCellValue('P' . $row, $value->Familia);
                    $objPHPExcel->getActiveSheet()->setCellValue('Q' . $row, $value->Unidad);
                    $objPHPExcel->getActiveSheet()->setCellValue('R' . $row, $value->ImporteUnitario);
                    $objPHPExcel->getActiveSheet()->setCellValue('S' . $row, $value->TextoMaterial);
                    $objPHPExcel->getActiveSheet()->setCellValue('T' . $row, $value->Moneda);
                    $objPHPExcel->getActiveSheet()->setCellValue('U' . $row, $value->CAL1);
                    $objPHPExcel->getActiveSheet()->setCellValue('V' . $row, $value->CAL2);
                    $objPHPExcel->getActiveSheet()->setCellValue('W' . $row, $value->CAL3);
                    $objPHPExcel->getActiveSheet()->setCellValue('X' . $row, $value->CAL4);
                    $objPHPExcel->getActiveSheet()->setCellValue('Y' . $row, $value->CAL5);
                    $objPHPExcel->getActiveSheet()->setCellValue('Z' . $row, $value->TextoCausa);
                    $row++;
                }

                $objPHPExcel->setActiveSheetIndex(0);
// Rename sheet
                $objPHPExcel->getActiveSheet()->setTitle('Hoja1');
// Save Excel 2007 file
                $path = 'uploads/Tarifarios/Fichero.xlsx';
                $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
                $objWriter->save(str_replace(__FILE__, $path, __FILE__));
                print base_url() . $path;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDesgloseXEntrega() {
        try {
            $ID = $_POST["ID"];
            $fields = $this->trabajo_model->getDesgloseXEntrega($ID);
            $datosGenerales = $fields[0];
            $objPHPExcel = new Excel();
            $objPHPExcel->setActiveSheetIndex(0);
            // Field names in the first row
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, 1, '#');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, 1, 'REPORTE');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 1, 'NOMBRE DEL SITIO');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 1, 'CR');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 1, 'DIVICIÓN');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 1, 'FECHA DE ORIGEN');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 1, 'CLASIFICACIÓN');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 1, 'TRABAJO REALIZADO');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 1, 'TRABAJO REQUERIDO');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 1, 'FECHA LLEGADA');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10, 1, 'FECHA FIN ACTIVIDAD');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 1, 'IMPORTE');
            $row = 2;
            $contador = 1;
            foreach ($fields as $key => $value) {
                //Set number format
                $objPHPExcel->getActiveSheet()->getStyle('L' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
                // Add some data
                $objPHPExcel->getActiveSheet()->setCellValue('A' . $row, $contador);
                $objPHPExcel->getActiveSheet()->setCellValue('B' . $row, $value->FolioCliente);
                $objPHPExcel->getActiveSheet()->setCellValue('C' . $row, $value->Sucursal);
                $objPHPExcel->getActiveSheet()->setCellValue('D' . $row, $value->CR);
                $objPHPExcel->getActiveSheet()->setCellValue('E' . $row, $value->Region);
                $objPHPExcel->getActiveSheet()->setCellValue('F' . $row, $value->FechaOrigen);
                $objPHPExcel->getActiveSheet()->setCellValue('G' . $row, $value->Clasificacion);
                $objPHPExcel->getActiveSheet()->setCellValue('H' . $row, $value->TrabajoSolicitado);
                $objPHPExcel->getActiveSheet()->setCellValue('I' . $row, $value->TrabajoRequerido);
                $objPHPExcel->getActiveSheet()->setCellValue('J' . $row, $value->FechaLlegada);
                $objPHPExcel->getActiveSheet()->setCellValue('K' . $row, $value->FechaSalida);
                $objPHPExcel->getActiveSheet()->setCellValue('L' . $row, $value->Importe);
                ;
                $row++;
                $contador++;
            }
            $objPHPExcel->getActiveSheet()->getStyle('L' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);

            //Totales
            $objPHPExcel->getActiveSheet()->setCellValue('K' . $row, 'Total');
            $objPHPExcel->getActiveSheet()->setCellValue('L' . $row, $datosGenerales->ImporteTotal);
            $objPHPExcel->setActiveSheetIndex(0);
// Rename sheet
            $objPHPExcel->getActiveSheet()->setTitle('Hoja1');
// Save Excel 2007 file
            $path = 'uploads/Tarifarios/Desglose de Reportes.xlsx';
            $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
            $objWriter->save(str_replace(__FILE__, $path, __FILE__));
            print base_url() . $path;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getConceptosXPOCXEntrega() {
        try {
            $ID = $_POST["ID"];
            $trabajos = $this->trabajo_model->getPOCXEntrega($ID);

            $objPHPExcel = new Excel();
            $objPHPExcel->setActiveSheetIndex(0);

            // Field names in the first row
            $objPHPExcel->getActiveSheet()->getStyle('A1:I1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
            $objPHPExcel->getActiveSheet()->getStyle('A1:I1')->getFill()->getStartColor()->setARGB('BFBFBF');
            $objPHPExcel->getActiveSheet()->getStyle("A1:I1")->getFont()->setBold(true);


            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, 1, 'Minuta');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, 1, 'Partida');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 1, 'Clave');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 1, 'Concepto');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 1, 'Cantidad');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 1, 'Unidad');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 1, 'P.U.');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 1, 'Total');

            $row = 2;
            foreach ($trabajos as $key => $value) {
                $objPHPExcel->getActiveSheet()->getStyle('A' . $row)->getFont()->setBold(true);
                $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A' . $row . ':I' . $row);
                $objPHPExcel->getActiveSheet()->setCellValue('A' . $row, $value->OC);
                $row++;


                $fields = $this->trabajo_model->getConceptosXPOC($value->ID);
                $datosGenerales = $fields[0];
                foreach ($fields as $key => $value) {
                    //Set number format
                    $objPHPExcel->getActiveSheet()->getStyle('F' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_00);
                    $objPHPExcel->getActiveSheet()->getStyle('H' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
                    $objPHPExcel->getActiveSheet()->getStyle('I' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
                    // Add some data
                    $objPHPExcel->getActiveSheet()->setCellValue('A' . $row, $value->Observaciones);
                    $objPHPExcel->getActiveSheet()->setCellValue('B' . $row, $value->Categoria);
                    $objPHPExcel->getActiveSheet()->setCellValue('C' . $row, $value->Clave);
                    $objPHPExcel->getActiveSheet()->setCellValue('D' . $row, $value->Concepto);
                    $objPHPExcel->getActiveSheet()->setCellValue('F' . $row, $value->Cantidad);
                    $objPHPExcel->getActiveSheet()->setCellValue('G' . $row, $value->Unidad);
                    $objPHPExcel->getActiveSheet()->setCellValue('H' . $row, $value->Precio);
                    $objPHPExcel->getActiveSheet()->setCellValue('I' . $row, $value->Importe);
                    $row++;
                }
            }
            $objPHPExcel->setActiveSheetIndex(0);
// Rename sheet
            $objPHPExcel->getActiveSheet()->setTitle('Hoja1');
// Save Excel 2007 file
            $path = 'uploads/Tarifarios/Entrega OC.xlsx';
            $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
            $objWriter->save(str_replace(__FILE__, $path, __FILE__));
            print base_url() . $path;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}

class Excel extends PHPExcel {

    public function __construct() {
        parent::__construct();
    }

}
