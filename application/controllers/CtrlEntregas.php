<?php

header('Access-Control-Allow-Origin: http://control.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . "/third_party/PHPExcel.php";

class CtrlEntregas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session');
        $this->load->model('entregas_model');
        $this->load->model('cliente_model');
        $this->load->model('trabajo_model');
    }

    public function index() {

        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            $this->load->view('vEncabezado');
            $this->load->view('vNavegacion');
            $this->load->view('vEntregas');
            $this->load->view('vFooter');
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

    public function getTrabajosControlByClienteXClasificacion() {
        try {
            extract($this->input->post());


            $data = $this->trabajo_model->getTrabajosControlByClienteXClasificacion($Cliente_ID);
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
                'Movimiento' => $Movimiento,
                'FechaCreacion' => $FechaCreacion,
                'Cliente_ID' => $Cliente_ID,
                'NoEntrega' => (isset($NoEntrega) && $NoEntrega !== '') ? $NoEntrega : NULL,
                'Clasificacion' => (isset($Clasificacion) && $Clasificacion !== '') ? $Clasificacion : NULL,
                'Usuario_ID' => (isset($Usuario_ID) && $Usuario_ID !== '') ? $Usuario_ID : NULL,
                'Estatus' => (isset($Estatus) && $Estatus !== '') ? $Estatus : NULL,
                'Importe' => (isset($Importe) && $Importe !== 0) ? $Importe : 0
            );
            $ID = $this->entregas_model->onAgregar($data);

            echo $ID;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarDetalleEditar() {
        try {
            extract($this->input->post());
            $data = array(
                'Entrega_ID' => $Entrega_ID,
                'Trabajo_ID' => $Trabajo_ID,
                'Renglon' => $Renglon
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

            //var_dump($Estatus);
            $this->entregas_model->onModificar($ID, $this->input->post());

            if ($Estatus == 'Concluido') {

                $this->trabajo_model->onEntregado($ID);
            } else {
                $this->trabajo_model->onCancelarEntregado($ID);
            }
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
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, 1, 'Clave');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, 1, 'Concepto');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 1, 'Cantidad');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 1, 'Unidad');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 1, 'P.U.');
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 1, 'Total');

            $row = 2;

            foreach ($fields as $key => $value) {
                //Set number format
                $objPHPExcel->getActiveSheet()->getStyle('C' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_00);
                $objPHPExcel->getActiveSheet()->getStyle('E' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
                $objPHPExcel->getActiveSheet()->getStyle('F' . $row)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1);
                // Add some data
                $objPHPExcel->getActiveSheet()->setCellValue('A' . $row, $value->Clave);
                $objPHPExcel->getActiveSheet()->setCellValue('B' . $row, $value->Descripcion);
                $objPHPExcel->getActiveSheet()->setCellValue('C' . $row, $value->Cantidad);
                $objPHPExcel->getActiveSheet()->setCellValue('D' . $row, $value->Unidad);
                $objPHPExcel->getActiveSheet()->setCellValue('E' . $row, $value->Precio);
                $objPHPExcel->getActiveSheet()->setCellValue('F' . $row, $value->Importe);

                $row++;
            }
            //Totales
            $objPHPExcel->getActiveSheet()->setCellValue('E' . $row, 'Total');
            $objPHPExcel->getActiveSheet()->setCellValue('F' . $row, $datosGenerales->ImporteTotal);

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
            $contador=1;
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
                $objPHPExcel->getActiveSheet()->setCellValue('L' . $row, $value->Importe);;

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

}

class Excel extends PHPExcel {

    public function __construct() {
        parent::__construct();
    }

}
