
<?php

header('Access-Control-Allow-Origin: http://app.ayr.mx/');
defined('BASEPATH') or exit('No direct script access allowed');

class Requisiciones extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session');
        $this->load->model('requisiciones_model')->model('registroUsuarios_model');
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
                case 'TECNICO':
                    $this->load->view('vMenuTecnico');
                    break;
            }
            $this->load->view('vFondo');
            $this->load->view('vRequisiciones');
            $this->load->view('vFooter');

            $dataRegistrarAccion = array(
                'Accion' => 'ACCESO A REQUISICIONES',
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
            print json_encode($this->requisiciones_model->getRecords());
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getRequisicionByID() {
        try {
            print json_encode($this->requisiciones_model->getRequisicionByID($this->input->post('ID')));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTotalFotos() {
        try {
            print json_encode($this->requisiciones_model->getTotalFotos($this->input->get('ID'), $this->input->get('IDD')));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getFotosDetalleByID() {
        try {
            print json_encode($this->requisiciones_model->getFotosDetalleByID($this->input->post('ID'), $this->input->post('IDT')));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarFotosEditar() {
        try {
            extract($this->input->post());
            $nombre_foto = 'IMGT-' . $IdRequisicion . '-TD' . $IdRequisicionDetalle;
            $data = array(
                'IdRequisicion' => $IdRequisicion,
                'IdRequisicionDetalle' => $IdRequisicionDetalle,
                'Observaciones' => $nombre_foto,
                'Estatus' => "ACTIVO",
                'Registro' => Date('d/m/y h:i:s a'),
            );
            $ID = $this->requisiciones_model->onAgregarDetalleFotos($data);
            /* CREAR DIRECTORIO DE FOTOS */
            $URL_DOC = "uploads/Requisiciones/Fotos/R$IdRequisicion/RD$IdRequisicionDetalle";
            $master_url = $URL_DOC . '/';
            if (isset($_FILES["FOTO"]["name"])) {
                if (!file_exists($URL_DOC)) {
                    mkdir($URL_DOC, 0777, true);
                }
                if (!file_exists(utf8_decode($URL_DOC . '/'))) {
                    mkdir(utf8_decode($URL_DOC . '/'), 0777, true);
                }
                $FILE_EXT = pathinfo($_FILES["FOTO"]["name"], PATHINFO_EXTENSION);
                $NEW_NAME = $nombre_foto . '-' . $ID . "." . $FILE_EXT;
                if (move_uploaded_file($_FILES["FOTO"]["tmp_name"], $URL_DOC . '/' . $NEW_NAME)) {
                    $img = $master_url . $NEW_NAME;
                    $this->load->library('image_lib');
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $img;
                    $config['maintain_ratio'] = true;
                    $config['width'] = 900;
                    $config['height'] = 700;
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();
                    $DATA = array(
                        'Url' => ($img),
                        'Observaciones' => $_FILES["FOTO"]["name"],
                    );
                    $this->requisiciones_model->onModificarDetalleFoto($ID, $DATA);
                } else {
                    $DATA = array(
                        'Url' => (null),
                    );
                    $this->requisiciones_model->onModificarDetalleFoto($ID, $DATA);
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarFotoXConcepto() {
        try {
            extract($this->input->post());
            $data = $this->requisiciones_model->getFotoXConceptoID($ID, $IDT);
            $foto = $data[0];
            if (isset($foto->Url)) {
                unlink($foto->Url);
                rmdir("uploads/Requisiciones/Fotoso/R" . $foto->IdRequisicion . "/RD" . $foto->IdRequisicionDetalle . "/" . $foto->ID . "/");
            }
            $this->requisiciones_model->onEliminarFotoXConcepto($ID, $IDT);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregar() {
        try {
            extract($this->input->post());
            $data = array(
                'Fecha' => $Fecha,
                'Sitio' => (isset($Sitio) && $Sitio !== '') ? $Sitio : null,
                'Observaciones' => (isset($Observaciones) && $Observaciones !== '') ? $Observaciones : null,
                'Usuario_ID' => $this->session->userdata('ID'),
                'Estatus' => 'Pendiente',
            );
            $ID = $this->requisiciones_model->onAgregar($data);

            echo $ID;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar() {
        try {
            extract($this->input->post());
            $data = array(
                'Sitio' => (isset($Sitio) && $Sitio !== '') ? $Sitio : null,
                'Estatus' => (isset($Estatus) && $Estatus !== '') ? $Estatus : null,
                'Observaciones' => (isset($Observaciones) && $Observaciones !== '') ? $Observaciones : null
            );
            $this->requisiciones_model->onModificar($ID, $data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar() {
        try {
            extract($this->input->post());
            $this->requisiciones_model->onEliminar($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDetalleByID() {
        try {
            print json_encode($this->requisiciones_model->getDetalleByID($this->input->post('ID')));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getDatosDetalleByID() {
        try {
            print json_encode($this->requisiciones_model->getDatosDetalleByID($this->input->post('ID')));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarDetalle() {
        try {
            extract($this->input->post());
            $data = array(
                'Requisicion' => $Requisicion,
                'Material' => $Material,
                'Unidad' => $Unidad,
                'Cantidad' => $Cantidad
            );
            $ID = $this->requisiciones_model->onAgregarDetalle($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarDetalle() {
        try {
            extract($this->input->post());
            $data = array(
                'Material' => (isset($Material) && $Material !== '') ? $Material : null,
                'Unidad' => (isset($Unidad) && $Unidad !== '') ? $Unidad : null,
                'Cantidad' => (isset($Cantidad) && $Cantidad !== '') ? $Cantidad : 0
            );
            $this->requisiciones_model->onModificarDetalle($ID, $data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarDetalle() {
        try {
            extract($this->input->post());
            $this->requisiciones_model->onEliminarDetalle($ID);

            $data = $this->requisiciones_model->getFotosXDetalleID($ID, $IDT);
            foreach ($data as $key => $foto) {
                if (isset($foto->Url)) {
                    unlink($foto->Url);
                    rmdir("uploads/Requisiciones/Fotos/R" . $foto->IdRequisicion . "/RD" . $foto->IdRequisicionDetalle . "/");
                }
            }
            $this->requisiciones_model->onEliminarFotosXRenglon($ID, $IDT);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
