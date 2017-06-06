<?php

header('Access-Control-Allow-Origin: http://project.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlTrabajos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session');
        $this->load->model('sucursal_model');
        $this->load->model('cliente_model');
        $this->load->model('preciario_model');
        $this->load->model('codigoppta_model');
        $this->load->model('cuadrilla_model');
        $this->load->model('trabajo_model');
    }

    public function index() {

        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            $this->load->view('vEncabezado');
            $this->load->view('vNavegacion');
            $this->load->view('vTrabajos');
            $this->load->view('vFooter');
        } else {
            $this->load->view('vEncabezado');
            $this->load->view('vSesion');
            $this->load->view('vFooter');
        }
    }

    public function getRecords() {
        try {
            $data = $this->trabajo_model->getRecords();
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

    public function getConceptosXPreciarioID() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getConceptosXPreciarioID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getConceptoByID() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getConceptoByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoFotosDetalleByID() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getTrabajoFotosDetalleByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoCroquisDetalleByID() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getTrabajoCroquisDetalleByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoAnexosDetalleByID() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getTrabajoAnexosDetalleByID($ID);
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
                'Sucursal_ID' => $Sucursal_ID,
                'Preciario_ID' => (isset($Preciario_ID) && $Preciario_ID !== '') ? $Preciario_ID : NULL,
                'Clasificacion' => (isset($Clasificacion) && $Clasificacion !== '') ? $Clasificacion : NULL,
                'Atendido' => (isset($Atendido) && $Atendido !== '') ? $Atendido : NULL,
                'Cuadrilla_ID' => (isset($Cuadrilla_ID) && $Cuadrilla_ID !== '') ? $Cuadrilla_ID : NULL,
                'FolioCliente' => (isset($FolioCliente) && $FolioCliente !== '') ? $FolioCliente : NULL,
                'FechaAtencion' => (isset($FechaAtencion) && $FechaAtencion !== '') ? $FechaAtencion : NULL,
                'Codigoppta_ID' => (isset($Codigoppta_ID) && $Codigoppta_ID !== '') ? $Codigoppta_ID : NULL,
                'Solicitante' => (isset($Solicitante) && $Solicitante !== '') ? $Solicitante : NULL,
                'TrabajoSolicitado' => (isset($TrabajoSolicitado) && $TrabajoSolicitado !== '') ? $TrabajoSolicitado : NULL,
                'TrabajoRequerido' => (isset($TrabajoRequerido) && $TrabajoRequerido !== '') ? $TrabajoRequerido : NULL,
                'FechaOrigen' => (isset($FechaOrigen) && $FechaOrigen !== '') ? $FechaOrigen : NULL,
                'HoraOrigen' => (isset($HoraOrigen) && $HoraOrigen !== '') ? $HoraOrigen : NULL,
                'FechaLlegada' => (isset($FechaLlegada) && $FechaLlegada !== '') ? $FechaLlegada : NULL,
                'HoraLlegada' => (isset($HoraLlegada) && $HoraLlegada !== '') ? $HoraLlegada : NULL,
                'FechaSalida' => (isset($FechaSalida) && $FechaSalida !== '') ? $FechaSalida : NULL,
                'HoraSalida' => (isset($HoraSalida) && $HoraSalida !== '') ? $HoraSalida : NULL,
                'ImpactoEnPlazo' => (isset($ImpactoEnPlazo) && $ImpactoEnPlazo !== '') ? $ImpactoEnPlazo : NULL,
                'DiasImpacto' => (isset($DiasImpacto) && $DiasImpacto !== '') ? $DiasImpacto : NULL,
                'CausaTrabajo' => (isset($ClaveOrigenTrabajo) && $ClaveOrigenTrabajo !== '') ? $ClaveOrigenTrabajo : NULL,
                'ClaveOrigenTrabajo' => (isset($ClaveOrigenTrabajo) && $ClaveOrigenTrabajo !== '') ? $ClaveOrigenTrabajo : NULL,
                'EspecificaOrigenTrabajo' => (isset($EspecificaOrigenTrabajo) && $EspecificaOrigenTrabajo !== '') ? $EspecificaOrigenTrabajo : NULL,
                'DescripcionOrigenTrabajo' => (isset($DescripcionOrigenTrabajo) && $DescripcionOrigenTrabajo !== '') ? $DescripcionOrigenTrabajo : NULL,
                'DescripcionRiesgoTrabajo' => (isset($DescripcionRiesgoTrabajo) && $DescripcionRiesgoTrabajo !== '') ? $DescripcionRiesgoTrabajo : NULL,
                'DescripcionAlcanceTrabajo' => (isset($DescripcionAlcanceTrabajo) && $DescripcionAlcanceTrabajo !== '') ? $DescripcionAlcanceTrabajo : NULL,
                'Usuario_ID' => (isset($Usuario_ID) && $Usuario_ID !== '') ? $Usuario_ID : NULL,
                'Estatus' => 'ACTIVO',
                'Situacion' => (isset($Situacion) && $Situacion !== '') ? $Situacion : NULL
            );
            $ID = $this->trabajo_model->onAgregar($data);
            print "ID: " . $ID;
            $URL_DOC = 'uploads/Trabajos/AdjuntoEncabezado';
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
                        'Adjunto' => ($img)
                    );
                    $this->trabajo_model->onModificar($ID, $DATA);
                } else {
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }

            /* TRABAJO DETALLE */
//            var_dump($_POST);
//            var_dump($_FILES);
            $CONCEPTOSX = json_decode($this->input->post("CONCEPTOS"));

            foreach ($CONCEPTOSX as $k => $v) {
                if ($v->Cantidad !== '' && $v->Cantidad !== 0) {
                    $data = array(
                        'Trabajo_ID' => $ID,
                        'PreciarioConcepto_ID' => $v->PreciarioConcepto_ID,
                        'Renglon' => $v->Renglon,
                        'Cantidad' => $v->Cantidad,
                        'Unidad' => $v->Unidad,
                        'Precio' => $v->Precio,
                        'Importe' => $v->Importe,
                        'IntExt' => $v->IntExt,
                        'Moneda' => $v->Moneda
                    );
                    $IDD = $this->trabajo_model->onAgregarDetalle($data);

                    /* GENERADOR */

                    print "\n\n* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * JSON GENERADOR ****************\n";
//                    print $v->Generador;
                    $GENERADORX = json_decode("[" . $v->Generador . "]", true);
//                    var_dump($GENERADORX);
                    print "\n* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * END JSON GENERADOR ****************\n\n";
                    print "\n NUM. " . count($GENERADORX) . " REGISTROS\n";
                    foreach ($GENERADORX as $k => $vg) {
                        print $vg["Concepto_ID"] . "\n";
                        $subtotal = (($vg["Largo"] !== 0 && $vg["Largo"] !== "0") ? $vg["Largo"] : 1) * (($vg["Ancho"] !== 0 && $vg["Ancho"] !== "0") ? $vg["Ancho"] : 1) * (($vg["Alto"] !== 0 && $vg["Alto"] !== "0") ? $vg["Alto"] : 1) * (($vg["Cantidad"] !== 0 && $vg["Cantidad"] !== "0") ? $vg["Cantidad"] : 1);
                        if ($subtotal !== '' && $subtotal !== 0) {
                            $data = array(
                                'IdTrabajoDetalle' => $IDD,
                                'Concepto_ID' => $vg["Concepto_ID"],
                                'Area' => $vg["Area"],
                                'Eje' => $vg["Eje"],
                                'EntreEje1' => $vg["EntreEje1"],
                                'EntreEje2' => $vg["EntreEje2"],
                                'Largo' => $vg["Largo"],
                                'Ancho' => $vg["Ancho"],
                                'Alto' => $vg["Alto"],
                                'Cantidad' => $vg["Cantidad"],
                                'Total' => $subtotal
                            );
                            $IDDG = $this->trabajo_model->onAgregarDetalleGenerador($data);
                        }
                    }

                    /* DETALLE FOTOS */
                    $FOTOX = json_decode("[" . $this->input->post("JSONFOTOS")[$v->Renglon - 1] . "]");
                    var_dump($FOTOX);
                    foreach ($FOTOX[0] as $k => $vgf) {
//                        var_dump($vgf);
                        $data = array(
                            'IdTrabajo' => $ID,
                            'IdTrabajoDetalle' => $IDD,
                            'Observaciones' => $vgf->Foto,
                            'Renglon' => $v->Renglon,
                            'Estatus' => "ACTIVO",
                            'Registro' => Date('d/m/y h:i:s a')
                        );
                        $IDDGF = $this->trabajo_model->onAgregarDetalleFotos($data);
                        /* CREAR DIRECTORIO DE ANEXO */
                        $URL_DOC = "uploads/Trabajos/Fotos/T$ID/TD$IDD";
                        $master_url = $URL_DOC . '/';
                        $total = count($_FILES['FOTOS']['name']);
                        print "\nTOTAL DE FOTOS: $total";

                        for ($i = 0; $i < $total; $i++) {
                            if ($_FILES["FOTOS"]["name"][$i] === $vgf->Foto) {
                                if (!file_exists($URL_DOC)) {
                                    mkdir($URL_DOC, 0777, true);
                                }
                                if (move_uploaded_file($_FILES["FOTOS"]["tmp_name"][$i], $URL_DOC . '/' . utf8_decode($vgf->Foto))) {
                                    $img = $master_url . $vgf->Foto;
                                    $DATA = array(
                                        'Url' => ($img)
                                    );
                                    $this->trabajo_model->onModificarDetalleFoto($IDDGF, $DATA);
                                } else {
                                    echo "\nERROR:\nNO SE PUDO SUBIR LA FOTO: " . $img;
                                }
                            }
                        }
                    }
                    /* FIN DETALLE FOTOS */


                    /* DETALLE CROQUIS */
                    $CROQUISX = json_decode("[" . $this->input->post("JSONCROQUIS")[$v->Renglon - 1] . "]");
                    var_dump($CROQUISX);
                    foreach ($CROQUISX[0] as $k => $vgf) {
//                        var_dump($vgf);
                        $data = array(
                            'IdTrabajo' => $ID,
                            'IdTrabajoDetalle' => $IDD,
                            'Observaciones' => $vgf->Croquis,
                            'Renglon' => $v->Renglon,
                            'Estatus' => "ACTIVO",
                            'Registro' => Date('d/m/y h:i:s a')
                        );
                        $IDDGC = $this->trabajo_model->onAgregarDetalleCroquis($data);
                        /* CREAR DIRECTORIO DEL CROQUIS */
                        $URL_DOC = "uploads/Trabajos/Croquis/T$ID/TD$IDD";
                        $master_url = $URL_DOC . '/';
                        $total = count($_FILES['CROQUIS']['name']);
                        print "\nTOTAL DE CROQUIS: $total";

                        for ($i = 0; $i < $total; $i++) {
                            //Get the temp file path
                            if (isset($_FILES["CROQUIS"]["name"][$i]) && $_FILES["CROQUIS"]["name"][$i] === $vgf->Croquis) {

                                if (!file_exists($URL_DOC)) {
                                    mkdir($URL_DOC, 0777, true);
                                }
                                if (move_uploaded_file($_FILES["CROQUIS"]["tmp_name"][$i], $URL_DOC . '/' . ($vgf->Croquis))) {
                                    $img = $master_url . $vgf->Croquis;
                                    $DATA = array(
                                        'Url' => ($img)
                                    );
                                    $this->trabajo_model->onModificarDetalleCroquis($IDDGC, $DATA);
                                } else {
                                    echo "\nERROR:\nNO SE PUDO SUBIR EL ANEXO: $vgf->Croquis\n";
                                }
                            }
                        }
                    }
                    /* FIN DETALLE CROQUIS */

                    /* DETALLE ANEXOS */
                    $ANEXOSX = json_decode("[" . $this->input->post("JSONANEXOS")[$v->Renglon - 1] . "]");
                    var_dump($ANEXOSX);
                    foreach ($ANEXOSX[0] as $k => $vgf) {
//                        var_dump($vgf);
                        $data = array(
                            'IdTrabajo' => $ID,
                            'IdTrabajoDetalle' => $IDD,
                            'Observaciones' => $vgf->Anexo,
                            'Renglon' => $v->Renglon,
                            'Estatus' => "ACTIVO",
                            'Registro' => Date('d/m/y h:i:s a')
                        );
                        $IDDGA = $this->trabajo_model->onAgregarDetalleAnexos($data);
                        /* CREAR DIRECTORIO DE FOTO */
                        $URL_DOC = "uploads/Trabajos/Anexos/T$ID/TD$IDD";
                        $master_url = $URL_DOC . '/';
                        $total = count($_FILES['ANEXOS']['name']);
                        print "\nTOTAL DE ANEXOS: $total";

                        for ($i = 0; $i < $total; $i++) {
                            //Get the temp file path
                            if (isset($_FILES["ANEXOS"]["name"][$i]) && $_FILES["ANEXOS"]["name"][$i] === $vgf->Anexo) {

                                if (!file_exists($URL_DOC)) {
                                    mkdir($URL_DOC, 0777, true);
                                }
                                if (move_uploaded_file($_FILES["ANEXOS"]["tmp_name"][$i], $URL_DOC . '/' . ($vgf->Anexo))) {
                                    $img = $master_url . $vgf->Anexo;
                                    $DATA = array(
                                        'Url' => ($img)
                                    );
                                    $this->trabajo_model->onModificarDetalleAnexo($IDDGA, $DATA);
                                } else {
                                    echo "\nERROR:\nNO SE PUDO SUBIR EL ANEXO: $vgf->Anexo\n";
                                }
                            }
                        }
                    }
                    /* FIN DETALLE ANEXOS */
                    print "\n";
                }
            }
            print "\n";
            print "\n";
            print "* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *  END CONCEPTOS * * * * * * * * * * * * * * * * * * * * * * * * \n";
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getTrabajoDetalleByID() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getTrabajoDetalleByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar() {
        try {
            extract($this->input->post());
            $this->trabajo_model->onModificar($ID, $this->input->post());
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar() {
        try {
            extract($this->input->post());
            $this->trabajo_model->onEliminar($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminarFotoXConcepto() {
        try {
            extract($this->input->post());
            $this->trabajo_model->onEliminarFotoXConcepto($ID);
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

    public function getSucursalesByCliente() {
        try {
            extract($this->input->post());
            $data = $this->sucursal_model->getSucursalesByCliente($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPreciariosByCliente() {
        try {
            extract($this->input->post());
            $data = $this->preciario_model->getPreciariosByCliente($Cliente_ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getSucursalByID() {
        try {
            extract($this->input->post());
            $data = $this->sucursal_model->getSucursalByID($ID);
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

    public function getCodigosPPTA() {
        try {
            extract($this->input->post());
            $data = $this->codigoppta_model->getCodigosPPTA();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCuadrillas() {
        try {
            extract($this->input->post());
            $data = $this->cuadrilla_model->getCuadrillas();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCodigoPPTAbyID() {
        try {
            extract($this->input->post());
            $data = $this->codigoppta_model->getCodigoPPTAByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
