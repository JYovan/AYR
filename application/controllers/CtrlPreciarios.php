<?php

header('Access-Control-Allow-Origin: http://project.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlPreciarios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('preciario_model');
    }

    public function index() {

        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            $this->load->view('vEncabezado');
            $this->load->view('vNavegacion');
            $this->load->view('vPreciarios');
        } else {
            $this->load->view('vEncabezado');
            $this->load->view('vSesion');
        }
    }

    public function getRecords() {
        try {
            $data = $this->preciario_model->getRecords();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getClientes() {
        try {
            $data = $this->preciario_model->getClientes();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPreciarioByID() {
        try {
            extract($this->input->post());
            $data = $this->preciario_model->getPreciarioByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCategoriasByPreciarioID() {
        try {
            extract($this->input->post());
            $data = $this->preciario_model->getCategoriasByPreciarioID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getSubCategoriasByCategoriaIDPreciarioID() {
        try {
            extract($this->input->post());
            $data = $this->preciario_model->getSubCategoriasByCategoriaIDPreciarioID($ID, $IDC);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getSubSubCategoriasBySubCategoriaIDCategoriaIDPreciarioID() {
        try {
            extract($this->input->post());
            $data = $this->preciario_model->getSubSubCategoriasBySubCategoriaIDCategoriaIDPreciarioID($ID, $IDC, $IDSC);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getConceptosBySubSubCategoriaIDSubCategoriaIDCategoriaIDPreciarioID() {
        try {
            extract($this->input->post());
            $data = $this->preciario_model->getConceptosBySubSubCategoriaIDSubCategoriaIDCategoriaIDPreciarioID($ID, $IDC, $IDSC, $IDSSC);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregar() {
        try {
            extract($this->input->post());

            $ID = 0; /* ID */
            $IDPCA = 0; /* ID CATEGORIA */
            $IDPSCA = 0; /* ID SUB CATEGORIA */
            $IDPSSCA = 0; /* ID SUBSUB CATEGORIA */

            $DATA = array(
                'Nombre' => (isset($Nombre) && $Nombre !== NULL && $Nombre !== '') ? $Nombre : 'NO ESPECÍFICA',
                'Tipo' => (isset($Tipo) && $Tipo !== NULL && $Tipo !== '') ? $Tipo : 'NO ESPECÍFICA',
                'FechaCreacion' => (isset($FechaCreacion) && $FechaCreacion !== NULL && $FechaCreacion !== '') ? $FechaCreacion . " " . Date('h:i:s') : '',
                'Cliente_ID' => (isset($Cliente_ID) && $Cliente_ID !== NULL && $Cliente_ID !== '') ? $Cliente_ID : NULL,
                'Estatus' => (isset($Estatus) && $Estatus !== NULL && $Estatus !== '') ? $Estatus : NULL
            );
            $ID = $this->preciario_model->onAgregar($DATA);
            $PRECIARIO_DATA = json_decode($PRECIARIO);

            foreach ($PRECIARIO_DATA->HOJAN1 as $k => $v) {
                if (isset($v->Tipo) && $v->Tipo === '1') {
                    /* AQUI EL PRECIARIO EN LA COLUMNA TIPO, TIENE UN ESPACIO AL FINAL, ESTO SE DEBE DE EVITAR PARA NO PONERLO ENTRE LLAVES */

                    /* AGREGAR PRECIARIO CATEGORIA */
                    $data = array(
                        'Clave' => (isset($v->id) && $v->id !== NULL && $v->id !== '') ? $v->id : 'NA',
                        'Descripcion' => (isset($v->Concepto) && $v->Concepto !== NULL && $v->Concepto !== '') ? $v->Concepto : 'NA',
                        'Preciario_ID' => $ID
                    );
                    $IDPCA = $this->preciario_model->onAgregarPreciarioCategoria($data);
                }
                if (isset($v->Tipo) && $v->Tipo === '2') {
                    /* AGREGAR PRECIARIO SUB CATEGORIA */
                    $data = array(
                        'Clave' => (isset($v->id) && $v->id !== NULL && $v->id !== '') ? $v->id : 'NA',
                        'Descripcion' => (isset($v->Concepto) && $v->Concepto !== NULL && $v->Concepto !== '') ? $v->Concepto : 'NA',
                        'PreciarioCategoria_ID' => (isset($IDPCA) && $IDPCA !== NULL && $IDPCA !== '' && $IDPCA !== 0) ? $IDPCA : NULL,
                        'Preciario_ID' => $ID
                    );
                    $IDPSCA = $this->preciario_model->onAgregarPreciarioSubCategoria($data);
                }
                if (isset($v->Tipo) && $v->Tipo === '3') {

                    /* AGREGAR PRECIARIO SUBSUB CATEGORIA */
                    $data = array(
                        'Clave' => (isset($v->id) && $v->id !== NULL && $v->id !== '') ? $v->id : 'NA',
                        'Descripcion' => (isset($v->Concepto) && $v->Concepto !== NULL && $v->Concepto !== '') ? $v->Concepto : 'NA',
                        'PreciarioSubCategorias_ID' => (isset($IDPSCA) && $IDPSCA !== NULL && $IDPSCA !== '' && $IDPSCA !== 0) ? $IDPSCA : NULL,
                        'PreciarioCategoria_ID' => (isset($IDPCA) && $IDPCA !== NULL && $IDPCA !== '' && $IDPCA !== 0) ? $IDPCA : NULL,
                        'Preciario_ID' => $ID
                    );
                    $IDPSSCA = $this->preciario_model->onAgregarPreciarioSubSubCategoria($data);
                }
                if (!isset($v->Tipo) && isset($v->Precio) && isset($v->Moneda)) {
                    /* AGREGAR PRECIARIO CONCEPTO */
                    $data = array(
                        'Clave' => (isset($v->id) && $v->id !== NULL && $v->id !== '') ? $v->id : 'NA',
                        'Descripcion' => (isset($v->Concepto) && $v->Concepto !== NULL && $v->Concepto !== '') ? $v->Concepto : 'NA',
                        'Unidad' => (isset($v->Unidad) && $v->Unidad !== NULL && $v->Unidad !== '') ? $v->Unidad : 'NA',
                        'Costo' => (isset($v->Precio) && $v->Precio !== NULL && $v->Precio !== '') ? $v->Precio : 'NA',
                        'Moneda' => (isset($v->Moneda) && $v->Moneda !== NULL && $v->Moneda !== '') ? $v->Moneda : 'NA',
                        'PreciarioSubSubCategoria_ID' => (isset($IDPSSCA) && $IDPSSCA !== NULL && $IDPSSCA !== '' && $IDPSSCA !== 0) ? $IDPSSCA : NULL,
                        'PreciarioSubCategorias_ID' => (isset($IDPSCA) && $IDPSCA !== NULL && $IDPSCA !== '' && $IDPSCA !== 0) ? $IDPSCA : NULL,
                        'PreciarioCategorias_ID' => (isset($IDPCA) && $IDPCA !== NULL && $IDPCA !== '' && $IDPCA !== 0) ? $IDPCA : NULL,
                        'Preciarios_ID' => $ID
                    );
                    $IDPCO = $this->preciario_model->onAgregarPreciarioConceptos($data);
                }
            }

            $URL_DOC = 'uploads/Preciarios';
            $master_url = $URL_DOC . '/';

            if (isset($_FILES["RutaArchivo"]["name"])) {
                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/' . $ID))) {
                    mkdir(utf8_decode($URL_DOC . '/' . $ID), 0777, true);
                }
                if (move_uploaded_file($_FILES["RutaArchivo"]["tmp_name"], $URL_DOC . '/' . $ID . '/' . utf8_decode($_FILES["RutaArchivo"]["name"]))) {
                    $img = $master_url . $ID . '/' . $_FILES["RutaArchivo"]["name"];
                    $DATA = array(
                        'RutaArchivo' => ($img)
                    );
                    $this->preciario_model->onModificar($ID, $DATA);
                } else {
                    echo "NO SE PUDO SUBIR EL ARCHIVO: " . $master_url . $ID . '/' . $_FILES["RutaArchivo"]["name"];
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar() {
        try {
            extract($this->input->post());

            $DATA = array(
                'Nombre' => (isset($Nombre) && $Nombre !== NULL && $Nombre !== '') ? $Nombre : 'NO ESPECÍFICA',
                'Tipo' => (isset($Tipo) && $Tipo !== NULL && $Tipo !== '') ? $Tipo : 'NO ESPECÍFICA',
                'FechaCreacion' => (isset($FechaCreacion) && $FechaCreacion !== NULL && $FechaCreacion !== '') ? $FechaCreacion . " " . Date('h:i:s') : '',
                'Cliente_ID' => (isset($Cliente_ID) && $Cliente_ID !== NULL && $Cliente_ID !== '') ? $Cliente_ID : NULL,
                'Estatus' => (isset($Estatus) && $Estatus !== NULL && $Estatus !== '') ? $Estatus : NULL
            );
            $this->preciario_model->onModificar($ID, $DATA);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar() {
        try {
            extract($this->input->post());
            $this->preciario_model->onEliminar($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
