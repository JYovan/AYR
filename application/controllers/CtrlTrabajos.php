<?php

header('Access-Control-Allow-Origin: http://project.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . "/third_party/fpdf17/fpdf.php";

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
                'Estatus' => (isset($Estatus) && $Estatus !== '') ? $Estatus : NULL,
                'Situacion' => (isset($Situacion) && $Situacion !== '') ? $Situacion : NULL,
                'Importe' => (isset($Importe) && $Importe !== 0) ? $Importe : NULL
            );
            $ID = $this->trabajo_model->onAgregar($data);
            print $ID;
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
                    $DATA = array(
                        'Adjunto' => (NULL)
                    );
                    $this->trabajo_model->onModificar($ID, $DATA);
                    // echo "NO SE PUDO SUBIR EL ARCHIVO";
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

                    //                 print "\n\n* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * JSON GENERADOR ****************\n";
//                    print $v->Generador;
                    $GENERADORX = json_decode("[" . $v->Generador . "]", true);
//                    var_dump($GENERADORX);
                    //                print "\n* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * END JSON GENERADOR ****************\n\n";
                    //               print "\n NUM. " . count($GENERADORX) . " REGISTROS\n";
                    foreach ($GENERADORX as $k => $vg) {
                        //               print $vg["Concepto_ID"] . "\n";
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
                    //  var_dump($FOTOX);
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
                        //               print "\nTOTAL DE FOTOS: $total";

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
                                    //             echo "\nERROR:\nNO SE PUDO SUBIR LA FOTO: " . $img;
                                }
                            }
                        }
                    }
                    /* FIN DETALLE FOTOS */


                    /* DETALLE CROQUIS */
                    $CROQUISX = json_decode("[" . $this->input->post("JSONCROQUIS")[$v->Renglon - 1] . "]");
                    //   var_dump($CROQUISX);
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
                        //         print "\nTOTAL DE CROQUIS: $total";

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
                    //       var_dump($ANEXOSX);
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
                        //      print "\nTOTAL DE ANEXOS: $total";

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
                                    //             echo "\nERROR:\nNO SE PUDO SUBIR EL ANEXO: $vgf->Anexo\n";
                                }
                            }
                        }
                    }
                    /* FIN DETALLE ANEXOS */
                    //    print "\n";
                }
            }
            //    print "\n";
            //    print "\n";
            //    print "* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *  END CONCEPTOS * * * * * * * * * * * * * * * * * * * * * * * * \n";
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

    public function getGeneradoresDetalleXConceptoID() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getGeneradoresDetalleXConceptoID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar() {
        try {
            extract($this->input->post());
            $this->trabajo_model->onModificar($ID, $this->input->post());

            $URL_DOC = 'uploads/Trabajos/AdjuntoEncabezado';
            $master_url = $URL_DOC . '/';

            var_dump($this->input->post());

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
                    $DATA = array(
                        'Adjunto' => (NULL)
                    );
                    $this->trabajo_model->onModificar($ID, $DATA);
                    echo "NO SE PUDO SUBIR EL ARCHIVO";
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarGenerador() {
        try {
            extract($this->input->post());
            $data = array(
                'Concepto_ID' => (isset($Concepto_ID) && $Concepto_ID !== '') ? $Concepto_ID : NULL,
                'IdTrabajoDetalle' => (isset($IdTrabajoDetalle) && $IdTrabajoDetalle !== '') ? $IdTrabajoDetalle : NULL,
                'Area' => (isset($Area) && $Area !== '') ? $Area : "NA",
                'Eje' => (isset($Eje) && $Eje !== '') ? $Eje : "NA",
                'EntreEje1' => (isset($EntreEje1) && $EntreEje1 !== '') ? $EntreEje1 : "NA",
                'EntreEje2' => (isset($EntreEje2) && $EntreEje2 !== '') ? $EntreEje2 : "NA",
                'Largo' => (isset($Largo) && $Largo !== '') ? $Largo : "",
                'Ancho' => (isset($Ancho) && $Ancho !== '') ? $Ancho : "",
                'Alto' => (isset($Alto) && $Alto !== '') ? $Alto : "",
                'Cantidad' => (isset($Cantidad) && $Cantidad !== '') ? $Cantidad : "",
                'Total' => (isset($Total) && $Total !== '') ? $Total : ""
            );
            $this->trabajo_model->onAgregarDetalleGenerador($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarGenerador() {
        try {
            extract($this->input->post());
            $data = array(
                'Area' => (isset($Area) && $Area !== '') ? $Area : NULL,
                'Eje' => (isset($Eje) && $Eje !== '') ? $Eje : NULL,
                'EntreEje1' => (isset($EntreEje1) && $EntreEje1 !== '') ? $EntreEje1 : NULL,
                'EntreEje2' => (isset($EntreEje2) && $EntreEje2 !== '') ? $EntreEje2 : NULL,
                'Largo' => (isset($Largo) && $Largo !== '') ? $Largo : NULL,
                'Ancho' => (isset($Ancho) && $Ancho !== '') ? $Ancho : NULL,
                'Alto' => (isset($Alto) && $Alto !== '') ? $Alto : NULL,
                'Cantidad' => (isset($Cantidad) && $Cantidad !== '') ? $Cantidad : NULL,
                'Total' => (isset($Total) && $Total !== '') ? $Total : NULL
            );
            $this->trabajo_model->onModificarGenerador($ID, $data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarConceptoCantidadEImporte() {
        try {
            extract($this->input->post());
            $data = array(
                'Cantidad' => (isset($Cantidad) && $Cantidad !== '') ? $Cantidad : NULL,
                'Importe' => (isset($Importe) && $Importe !== '') ? $Importe : NULL
            );
            $this->trabajo_model->onModificarConceptoCantidadEImporte($ID, $data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarImportePorTrabajo() {
        try {
            extract($this->input->post());
            print json_encode($this->trabajo_model->onModificarImportePorTrabajo($ID));
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

    public function onEliminarGeneradorEditar() {
        try {
            extract($this->input->post());
            $this->trabajo_model->onEliminarGeneradorEditar($ID);
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

    /* FUNCIONES DE EDICION */

    public function onEliminarConceptoXDetalle() {
        try {
            extract($this->input->post());
            $this->trabajo_model->onEliminarConcepto($ID);
            $this->trabajo_model->onEliminarGeneradoresXConcepto($ID);
            $this->trabajo_model->onEliminarFotosXConcepto($ID);
            $this->trabajo_model->onEliminarCroquisXConcepto($ID);
            $this->trabajo_model->onEliminarAnexosXConcepto($ID);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getPrecioPorConceptoID() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getPrecioPorConceptoID($ID, $IDCO);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getConceptoByIDSinFormato() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getConceptoByIDSinFormato($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getImporteTotalDelTrabajoByID() {
        try {
            extract($this->input->post());
            $data = $this->trabajo_model->getImporteTotalDelTrabajoByID($ID);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregarDetalleEditar() {
        try {
            extract($this->input->post());
            $data = array(
                'Trabajo_ID' => $Trabajo_ID,
                'PreciarioConcepto_ID' => $PreciarioConcepto_ID,
                'Renglon' => $Renglon,
                'Cantidad' => 0,
                'Unidad' => (isset($Unidad)) ? $Unidad : "",
                'Precio' => (isset($Precio)) ? $Precio : "",
                'Importe' => (isset($Importe)) ? $Importe : "",
                'IntExt' => (isset($IntExt)) ? $IntExt : "",
                'Moneda' => (isset($Moneda)) ? $Moneda : ""
            );
            $ID = $this->trabajo_model->onAgregarDetalle($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /* ____________________________________REPORTES__________________________________________ */
    /* ______________________________________________________________________________________ */

    public function onReportePresupuesto() {

        $ID = $_POST['ID'];
        $trabajo = $this->trabajo_model->getPresupuesto($ID);

        $categorias = $this->trabajo_model->getCategoriasPresupuesto($ID);

        $encabezado = $trabajo[0];

        // Creación del objeto de la clase heredada 
        $pdf = new PDFC('P', 'mm', array(279 /* ANCHO */, 216 /* ALTURA */));


        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetAutoPageBreak(false, 300);
        $pdf->SetLineWidth(0.4);



        /* ENCABEZADO */
        // Logo
        $pdf->Image(base_url() . 'img/watermark.png', 10, 95);
        $pdf->Image(base_url() . 'img/ms-icon-144x144AYR.png', 175, 3, 30);
        $pdf->Image(base_url() . 'img/barra_Presupuesto.png', 5, 21, 210, 6);

        $pdf->SetX(10);
        $pdf->SetY(5);
        // Movernos a la iquierda
        $pdf->SetFont('Arial', 'B', 11);
        $pdf->Cell(50, 5, utf8_decode("A&R Construcciones Sa de Cv"), 0, 0, 'L');
        $CurrentY = $pdf->GetY();
        $pdf->SetY($CurrentY + 4);
        $pdf->SetX(18);
        $pdf->SetFont('Arial', 'B', 7);
        $pdf->Cell(50, 5, utf8_decode("·CONSTRUCCIÓN"), 0, 0, 'L');
        $CurrentY = $pdf->GetY();
        $pdf->SetY($CurrentY + 3);
        $pdf->SetX(18);
        $pdf->Cell(50, 5, utf8_decode("·MANTENIMIENTO"), 0, 0, 'L');
        $CurrentY = $pdf->GetY();
        $pdf->SetY($CurrentY + 3);
        $pdf->SetX(18);
        $pdf->Cell(50, 5, utf8_decode("·PROYECTOS EJECUTIVOS"), 0, 0, 'L');
        $CurrentY = $pdf->GetY();
        $pdf->SetY($CurrentY + 3);
        $pdf->SetX(18);
        $pdf->Cell(50, 5, utf8_decode("·PROYECTOS DE AHORRO DE ENERGÍA"), 0, 0, 'L');

        /* INICIO CUERPO */
        $CurrentY = $pdf->GetY();
        $pdf->SetY($CurrentY + 10);
        $pdf->SetX(100);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(20, 5, utf8_decode("PRESUPUESTO"), 0, 0, 'L');
        $pdf->SetY($CurrentY + 7);
        $pdf->SetX(145);
        $pdf->SetFont('Arial', 'B', 7.5);
        $pdf->Cell(60, 5, utf8_decode($encabezado->FolioCliente), 0, 0, 'R');

        /* DATS GENERALES */
        $CurrentY = $pdf->GetY();
        $pdf->SetY($CurrentY + 8);
        $pdf->SetX(10);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(80, 4, utf8_decode($encabezado->Cliente), 0, 0, 'L');
        $pdf->SetY($CurrentY + 8);
        $pdf->SetX(140);
        $pdf->Cell(60, 4, utf8_decode('GUADALAJARA, JALISCO'), 0, 0, 'R');

        $CurrentY = $pdf->GetY();
        $pdf->SetY($CurrentY + 4);
        $pdf->SetX(10);
        $pdf->Cell(20, 4, utf8_decode("SUCURSAL: "), 0, 0, 'L');
        $pdf->SetX(30);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(100, 4, utf8_decode($encabezado->Sucursal . ' CR ' . $encabezado->CR), 0, 0, 'L');
        $CurrentY = $pdf->GetY();
        $pdf->SetY($CurrentY + 4);
        $pdf->SetX(10);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(20, 4, utf8_decode("OBRA: "), 0, 0, 'L');
        $pdf->SetX(30);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(100, 4, utf8_decode($encabezado->TrabajoSolicitado), 0, 0, 'L');
        $CurrentY = $pdf->GetY();
        $pdf->SetY($CurrentY + 4);
        $pdf->SetX(10);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(80, 4, utf8_decode("INMUEBLES DIVISIÓN DE " . $encabezado->Region), 0, 0, 'L');

        $CurrentY = $pdf->GetY();
        $pdf->SetY($CurrentY + 10);
        $pdf->SetX(10);
        $pdf->SetFont('Arial', '', 7.5);
        $pdf->MultiCell(190, 3.5, utf8_decode("                 POR ESTE CONDUCTO TENEMOS EL AGRADO DE PONER A SU AMABLE CONSIDERACIÓN DEL PRESUPUESTO POR TRABAJOS DE MANTENIMEINTO Y CONSERVACIÓN REFERENTES A : " . utf8_decode($encabezado->TrabajoRequerido) . " EN LA SUCURSAL " . utf8_decode($encabezado->Sucursal . ' CR ' . $encabezado->CR) . " UBICADA EN " . $encabezado->Calle . ' No. ' . $encabezado->NoExterior . ' ' . $encabezado->Colonia . ', ' . $encabezado->Ciudad . ', ' . $encabezado->Estado), 0, 'J');

        /* ENCABEZADO DETALLE */



        $pdf->SetLineWidth(0.4);




        /* ENCABEZADO TITULOS */
        $pdf->SetFont('Arial', 'B', 6.5);
        $CurrentY = $pdf->GetY() + 10;
        $pdf->SetY($CurrentY);
        $pdf->SetX(10);
        $pdf->Cell(15, 5, utf8_decode("CLAVE"), 1, 1, 'C');
        $pdf->SetY($CurrentY);
        $pdf->SetX(25);
        $pdf->Cell(110, 5, utf8_decode("CONCEPTO"), 1, 1, 'C');
        $pdf->SetY($CurrentY);
        $pdf->SetX(135);
        $pdf->Cell(15, 5, utf8_decode("UNIDAD"), 1, 1, 'C');
        $pdf->SetY($CurrentY);
        $pdf->SetX(150);
        $pdf->Cell(15, 5, utf8_decode("VOLUMEN"), 1, 1, 'C');
        $pdf->SetY($CurrentY);
        $pdf->SetX(165);
        $pdf->Cell(20, 5, utf8_decode("P.U."), 1, 1, 'C');
        $pdf->SetY($CurrentY);
        $pdf->SetX(185);
        $pdf->Cell(20, 5, utf8_decode("IMPORTE"), 1, 1, 'C');



        $CurrentY = 80.5;
        foreach ($categorias as $key => $value) {

            /* CATEGORIAS */

            $pdf->SetY($CurrentY);
            $pdf->SetX(10);
            $pdf->Cell(15, 5, utf8_decode($value->ClaveCategoria), 1, 1, 'C');
            $pdf->SetY($CurrentY);
            $pdf->SetX(25);
            $pdf->MultiCell(110, 5, utf8_decode($value->Categoria), 1, 'L');
            $pdf->SetY($CurrentY);
            $pdf->SetX(135);
            $pdf->Cell(15, 5, utf8_decode(""), 1, 1, 'C');
            $pdf->SetY($CurrentY);
            $pdf->SetX(150);
            $pdf->Cell(15, 5, utf8_decode(""), 1, 1, 'C');
            $pdf->SetY($CurrentY);
            $pdf->SetX(165);
            $pdf->Cell(20, 5, utf8_decode(""), 1, 1, 'C');
            $pdf->SetY($CurrentY);
            $pdf->SetX(185);
            $pdf->Cell(20, 5, utf8_decode(""), 1, 1, 'C');



            foreach ($trabajo as $keyConceptos => $valueConceptos) {
                $pdf->SetFont('Arial', '', 7);
                //para ajustar multicell
                $AnchoConcepto = $pdf->GetStringWidth(utf8_decode($valueConceptos->Concepto));
                $numero_lineasConcepto = $AnchoConcepto / (103 ); //El ancho de multicell -5 de la altura
                $numero_lineasConcepto = ceil($numero_lineasConcepto);
                $AlturaLineaConcepto = 4;
                $AlturaCeldaConcepto = $numero_lineasConcepto * $AlturaLineaConcepto;
                $AlturaCeldaConcepto = ceil($AlturaCeldaConcepto);


                if ($valueConceptos->Categoria == $value->Categoria) {
                    
                    $CurrentY = $pdf->GetY();
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(10);
                    $pdf->Cell(15, $AlturaCeldaConcepto, utf8_decode($valueConceptos->Clave), 1, 1, 'C');
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(25);
                    $pdf->MultiCell(110, 4, utf8_decode($valueConceptos->Concepto), 1, 'J');

                    $pdf->SetY($CurrentY);
                    $pdf->SetX(135);
                    $pdf->Cell(15, $AlturaCeldaConcepto, utf8_decode($valueConceptos->Unidad), 1, 1, 'C');
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(150);
                    $pdf->Cell(15, $AlturaCeldaConcepto, number_format($valueConceptos->Cantidad,2), 1, 1, 'C');
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(165);
                    $pdf->Cell(20, $AlturaCeldaConcepto, '$' . number_format($valueConceptos->Precio, 2), 1, 1, 'C');
                    $pdf->SetY($CurrentY);
                    $pdf->SetX(185);
                    $pdf->Cell(20, $AlturaCeldaConcepto, '$' . number_format($valueConceptos->ImporteRenglon, 2), 1, 1, 'C');


                    $CurrentY = $pdf->GetY();

                    if ($CurrentY > 190) {

                        $pdf->AddPage();

                        /* ENCABEZADO */
                        // Logo
                        $pdf->Image(base_url() . 'img/watermark.png', 10, 95);
                        $pdf->Image(base_url() . 'img/ms-icon-144x144AYR.png', 175, 3, 30);
                        $pdf->Image(base_url() . 'img/barra_Presupuesto.png', 5, 21, 210, 6);

                        $pdf->SetX(10);
                        $pdf->SetY(5);
                        // Movernos a la iquierda
                        $pdf->SetFont('Arial', 'B', 11);
                        $pdf->Cell(50, 5, utf8_decode("A&R Construcciones Sa de Cv"), 0, 0, 'L');
                        $CurrentY = $pdf->GetY();
                        $pdf->SetY($CurrentY + 4);
                        $pdf->SetX(18);
                        $pdf->SetFont('Arial', 'B', 7);
                        $pdf->Cell(50, 5, utf8_decode("·CONSTRUCCIÓN"), 0, 0, 'L');
                        $CurrentY = $pdf->GetY();
                        $pdf->SetY($CurrentY + 3);
                        $pdf->SetX(18);
                        $pdf->Cell(50, 5, utf8_decode("·MANTENIMIENTO"), 0, 0, 'L');
                        $CurrentY = $pdf->GetY();
                        $pdf->SetY($CurrentY + 3);
                        $pdf->SetX(18);
                        $pdf->Cell(50, 5, utf8_decode("·PROYECTOS EJECUTIVOS"), 0, 0, 'L');
                        $CurrentY = $pdf->GetY();
                        $pdf->SetY($CurrentY + 3);
                        $pdf->SetX(18);
                        $pdf->Cell(50, 5, utf8_decode("·PROYECTOS DE AHORRO DE ENERGÍA"), 0, 0, 'L');

                        /* INICIO CUERPO */
                        $CurrentY = $pdf->GetY();
                        $pdf->SetY($CurrentY + 10);
                        $pdf->SetX(100);
                        $pdf->SetFont('Arial', 'B', 8);
                        $pdf->Cell(20, 5, utf8_decode("PRESUPUESTO"), 0, 0, 'L');
                        $pdf->SetY($CurrentY + 7);
                        $pdf->SetX(145);
                        $pdf->SetFont('Arial', 'B', 7.5);
                        $pdf->Cell(60, 5, utf8_decode($encabezado->FolioCliente), 0, 0, 'R');

                        /* DATS GENERALES */
                        $CurrentY = $pdf->GetY();
                        $pdf->SetY($CurrentY + 8);
                        $pdf->SetX(10);
                        $pdf->SetFont('Arial', 'B', 8);
                        $pdf->Cell(80, 4, utf8_decode($encabezado->Cliente), 0, 0, 'L');
                        $pdf->SetY($CurrentY + 8);
                        $pdf->SetX(140);
                        $pdf->Cell(60, 4, utf8_decode('GUADALAJARA, JALISCO'), 0, 0, 'R');

                        $CurrentY = $pdf->GetY();
                        $pdf->SetY($CurrentY + 4);
                        $pdf->SetX(10);
                        $pdf->Cell(20, 4, utf8_decode("SUCURSAL: "), 0, 0, 'L');
                        $pdf->SetX(30);
                        $pdf->SetFont('Arial', '', 8);
                        $pdf->Cell(100, 4, utf8_decode($encabezado->Sucursal . ' CR ' . $encabezado->CR), 0, 0, 'L');
                        $CurrentY = $pdf->GetY();
                        $pdf->SetY($CurrentY + 4);
                        $pdf->SetX(10);
                        $pdf->SetFont('Arial', 'B', 8);
                        $pdf->Cell(20, 4, utf8_decode("OBRA: "), 0, 0, 'L');
                        $pdf->SetX(30);
                        $pdf->SetFont('Arial', '', 8);
                        $pdf->Cell(100, 4, utf8_decode($encabezado->TrabajoSolicitado), 0, 0, 'L');
                        $CurrentY = $pdf->GetY();
                        $pdf->SetY($CurrentY + 4);
                        $pdf->SetX(10);
                        $pdf->SetFont('Arial', 'B', 8);
                        $pdf->Cell(80, 4, utf8_decode("INMUEBLES DIVISIÓN DE " . $encabezado->Region), 0, 0, 'L');

                        $CurrentY = $pdf->GetY();
                        $pdf->SetY($CurrentY + 10);
                        $pdf->SetX(10);
                        $pdf->SetFont('Arial', '', 7.5);
                        $pdf->MultiCell(190, 3.5, utf8_decode("                 POR ESTE CONDUCTO TENEMOS EL AGRADO DE PONER A SU AMABLE CONSIDERACIÓN DEL PRESUPUESTO POR TRABAJOS DE MANTENIMEINTO Y CONSERVACIÓN REFERENTES A : " . utf8_decode($encabezado->TrabajoRequerido) . " EN LA SUCURSAL " . utf8_decode($encabezado->Sucursal . ' CR ' . $encabezado->CR) . " UBICADA EN " . $encabezado->Calle . ' No. ' . $encabezado->NoExterior . ' ' . $encabezado->Colonia . ', ' . $encabezado->Ciudad . ', ' . $encabezado->Estado), 0, 'J');

                        /* ENCABEZADO DETALLE */



                        $pdf->SetLineWidth(0.4);




                        /* ENCABEZADO TITULOS */
                        $pdf->SetFont('Arial', 'B', 6.5);
                        $CurrentY = $pdf->GetY() + 10;
                        $pdf->SetY($CurrentY);
                        $pdf->SetX(10);
                        $pdf->Cell(15, 5, utf8_decode("CLAVE"), 1, 1, 'C');
                        $pdf->SetY($CurrentY);
                        $pdf->SetX(25);
                        $pdf->Cell(110, 5, utf8_decode("CONCEPTO"), 1, 1, 'C');
                        $pdf->SetY($CurrentY);
                        $pdf->SetX(135);
                        $pdf->Cell(15, 5, utf8_decode("UNIDAD"), 1, 1, 'C');
                        $pdf->SetY($CurrentY);
                        $pdf->SetX(150);
                        $pdf->Cell(15, 5, utf8_decode("VOLUMEN"), 1, 1, 'C');
                        $pdf->SetY($CurrentY);
                        $pdf->SetX(165);
                        $pdf->Cell(20, 5, utf8_decode("P.U."), 1, 1, 'C');
                        $pdf->SetY($CurrentY);
                        $pdf->SetX(185);
                        $pdf->Cell(20, 5, utf8_decode("IMPORTE"), 1, 1, 'C');


                        $CurrentY = 80.5;
                        $pdf->SetY($CurrentY);
                    }
                }
            }

            /* SUBTOTALES */
            $pdf->SetFont('Arial', 'B', 6.5);
            $pdf->SetFillColor(160, 160, 160);
            $pdf->SetY($CurrentY);
            $pdf->SetX(10);
            $pdf->Cell(15, 5, utf8_decode(""), 1, 1, 'C', true);
            $pdf->SetY($CurrentY);
            $pdf->SetX(25);
            $pdf->MultiCell(110, 5, utf8_decode("SUBTOTAL:"), 1, 'J', true);
            $pdf->SetY($CurrentY);
            $pdf->SetX(135);
            $pdf->Cell(15, 5, utf8_decode(""), 1, 1, 'C', true);
            $pdf->SetY($CurrentY);
            $pdf->SetX(150);
            $pdf->Cell(15, 5, utf8_decode(""), 1, 1, 'C', true);
            $pdf->SetY($CurrentY);
            $pdf->SetX(165);
            $pdf->Cell(20, 5, utf8_decode(""), 1, 1, 'C', true);
            $pdf->SetY($CurrentY);
            $pdf->SetX(185);
            $pdf->Cell(20, 5, '$' . number_format($value->ImporteRenglon, 2), 1, 1, 'C', true);

            $CurrentY = $CurrentY + 5;
        }

        //TOTALES
        $pdf->SetFont('Arial', 'B', 6.5);
        $pdf->SetFillColor(160, 160, 160);
        $pdf->SetY($CurrentY);
        $pdf->SetX(10);
        $pdf->Cell(15, 5, utf8_decode(""), 1, 1, 'C', true);
        $pdf->SetY($CurrentY);
        $pdf->SetX(25);
        $pdf->MultiCell(110, 5, utf8_decode("TOTAL GENERAL:"), 1, 'J', true);
        $pdf->SetY($CurrentY);
        $pdf->SetX(135);
        $pdf->Cell(15, 5, utf8_decode(""), 1, 1, 'C', true);
        $pdf->SetY($CurrentY);
        $pdf->SetX(150);
        $pdf->Cell(15, 5, utf8_decode(""), 1, 1, 'C', true);
        $pdf->SetY($CurrentY);
        $pdf->SetX(165);
        $pdf->Cell(20, 5, utf8_decode(""), 1, 1, 'C', true);
        $pdf->SetY($CurrentY);
        $pdf->SetX(185);
        $pdf->Cell(20, 5, '$' . number_format($value->Importe, 2), 1, 1, 'C', true);




        /* FIN CUERPO */
        $path = 'uploads/Reportes/' . $ID;
        // print $path;
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $file_name = "REPORTE_PRESUPUESTO A&R";
        $url = $path . '/' . $file_name . '.pdf';

        $pdf->Output($url);
        print base_url() . $url;
    }
    
    public function onReporteFin49() {
        //conexion a bd
        try {

            $ID = $_POST['ID'];

            $trabajo = $this->trabajo_model->getFin49ByID($ID);


            // $trabajo[0]->Movimiento;
            // Creación del objeto de la clase heredada
            $pdf = new PDF('P', 'mm', array(279 /* ANCHO */, 216 /* ALTURA */));

            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->SetAutoPageBreak(false, 300);
            $pdf->SetLineWidth(0.4);

            /* ENCABEZADO */
            /* Primer Recuerdo contenedor */
            /* INICIA  EN LA ESQUINA */
            $pdf->Rect(5, 10, 205, 17);

            /* SEGUNDO RECUADRO */
            $pdf->Rect(6, 11, 63, 15);
            /* TERCER RECUADRO */
            $pdf->Rect(70, 11, 139, 15);
            // Logo
            $pdf->Image(base_url() . $trabajo[0]->RutaLogo, 10, 12, 48);

            // Arial bold 15
            $pdf->SetFont('Arial', '', 7);
            // Título
            $pdf->SetY(5);
            // Movernos a la derecha
            $pdf->SetX(5);
            $pdf->SetTextColor(167, 167, 167);
            $pdf->Cell(205, 5, utf8_decode("FIN­049A Notificación De Items Adicionales Y/O Fuera De Catálogo De Precios Unitarios (Posible Orden De Cambio)"), 0, 0, 'R');
            $pdf->SetTextColor(0, 0, 0);

            //Texto del segundo recuadro

            $pdf->SetFont('Arial', '', 8);
            $pdf->SetY(10);
            $pdf->SetX(158);
            $pdf->Cell(50, 13, utf8_decode("Gestión De Calidad Ulises"), 0, 0, 'R');
            $pdf->Ln(5);
            $pdf->SetY(14);
            $pdf->SetX(158);
            $pdf->Cell(50, 13, utf8_decode("Dirección De Construcción"), 0, 0, 'R');
            $pdf->Ln(5);

            /* CUERPO */
            $pdf->SetFillColor(208, 225, 248);
            $pdf->SetY(30);
            $pdf->SetX(5);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(205, 5, utf8_decode("Notificación De Items Adicionales (Posible Orden De Cambio)"), 1, 1, 'C', true);

            /* PRIMER PARTE ENCABEZADO */
            $pdf->SetFont('Arial', '', 7);
            $pdf->SetY(37);
            $pdf->SetX(125);
            $pdf->Cell(30, 5, utf8_decode("FECHA:"), 0, 1, 'R');

            $pdf->SetY(37);
            $pdf->SetX(155);
            $pdf->Cell(55, 5, utf8_decode($trabajo[0]->FechaCreacion), 'B', 1, 'C');

            $pdf->SetFillColor(169, 244, 251);
            $pdf->SetY(43);
            $pdf->SetX(125);
            $pdf->Cell(30, 5, utf8_decode("TIPO DE CONCEPTO:"), 0, 1, 'R', true);

            $pdf->SetY(43);
            $pdf->SetX(155);
            $pdf->Cell(55, 5, utf8_decode($trabajo[0]->TipoConcepto), 'B', 1, 'C', true);

            /* SEGUNDA PARTE ENCABEZADO */
            $pdf->SetFont('Arial', '', 6);
            $pdf->SetY(50);
            $pdf->SetX(5);
            $pdf->Cell(20, 5, utf8_decode("CR & SUCURSAL:"), 0, 1, 'R');
            $pdf->SetY(50);
            $pdf->SetX(25);
            $pdf->Cell(55, 5, utf8_decode($trabajo[0]->CR . ' - ' . $trabajo[0]->NombreSucursal), 'B', 1, 'C');

            $pdf->SetY(50);
            $pdf->SetX(80);
            $pdf->Cell(30, 5, utf8_decode("EMPRESA CONTRATISTA:"), 0, 1, 'R');
            $pdf->SetY(50);
            $pdf->SetX(110);
            $pdf->Cell(45, 5, utf8_decode($trabajo[0]->Empresa), 'B', 1, 'C');

            $pdf->SetY(50);
            $pdf->SetX(155);
            $pdf->Cell(20, 5, utf8_decode("INICIO DE OBRA:"), 0, 1, 'R');
            $pdf->SetY(50);
            $pdf->SetX(175);
            $pdf->Cell(35, 5, utf8_decode($trabajo[0]->FechaInicio), 'B', 1, 'C');


            $pdf->SetY(55);
            $pdf->SetX(5);
            $pdf->Cell(20, 5, utf8_decode("TIPO DE OBRA:"), 0, 1, 'R');
            $pdf->SetY(55);
            $pdf->SetX(25);
            $pdf->Cell(55, 5, utf8_decode($trabajo[0]->TipoObra), 'B', 1, 'C');

            $pdf->SetY(55);
            $pdf->SetX(80);
            $pdf->Cell(30, 5, utf8_decode("GERENCIA DE PROY:"), 0, 1, 'R');
            $pdf->SetY(55);
            $pdf->SetX(110);
            $pdf->Cell(45, 5, utf8_decode($trabajo[0]->EmpresaSupervisora), 'B', 1, 'C');

            $pdf->SetY(55);
            $pdf->SetX(155);
            $pdf->Cell(20, 5, utf8_decode("FIN DE OBRA:"), 0, 1, 'R');
            $pdf->SetY(55);
            $pdf->SetX(175);
            $pdf->Cell(35, 5, utf8_decode($trabajo[0]->FechaFin), 'B', 1, 'C');

            //Para tachar la casilla de origen PCO
            if ($trabajo[0]->ClaveOrigenTrabajo == 'CONTR') {
                $pdf->Line(35, 62, 25, 67);
            }
            if ($trabajo[0]->ClaveOrigenTrabajo == 'GDP') {
                $pdf->Line(41, 62, 35, 67);
            }
            if ($trabajo[0]->ClaveOrigenTrabajo == 'OTRO') {
                $pdf->Line(57, 62, 49, 67);
            }
            //Si es nombre corto del cliente
            else {
                $pdf->Line(49, 62, 41, 67);
            }

            $pdf->SetY(62);
            $pdf->SetX(5);
            $pdf->Cell(20, 5, utf8_decode("ORIGEN PCO:"), 0, 1, 'R');
            $pdf->SetY(62);
            $pdf->SetX(25);
            $pdf->Cell(10, 5, utf8_decode("CONTR"), 1, 1, 'C');
            $pdf->SetY(62);
            $pdf->SetX(35);
            $pdf->Cell(6, 5, utf8_decode("GdP"), 1, 1, 'C');
            $pdf->SetY(62);
            $pdf->SetX(41);
            $pdf->Cell(8, 5, utf8_decode($trabajo[0]->NombreCorto), 1, 1, 'C');
            $pdf->SetY(62);
            $pdf->SetX(49);
            $pdf->Cell(8, 5, utf8_decode("OTRO"), 1, 1, 'C');
            $pdf->SetY(62);
            $pdf->SetX(57);
            $pdf->Cell(23, 5, utf8_decode($trabajo[0]->EspecificaOrigenTrabajo), 'B', 1, 'C');


            $pdf->SetY(60);
            $pdf->SetX(80);
            $pdf->Cell(30, 5, utf8_decode("CONTRATO:"), 0, 1, 'R');
            $pdf->SetY(60);
            $pdf->SetX(110);
            $pdf->Cell(45, 5, utf8_decode($trabajo[0]->Contrato), 'B', 1, 'C');

            $pdf->SetY(60);
            $pdf->SetX(155);
            $pdf->Cell(20, 5, utf8_decode("FOLIO:"), 0, 1, 'R');
            $pdf->SetY(60);
            $pdf->SetX(175);
            $pdf->Cell(35, 5, utf8_decode($trabajo[0]->CR) . '-' . utf8_decode($trabajo[0]->FolioCliente), 'B', 1, 'C');

            /* TERCERA PARTE */
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->SetY(70);
            $pdf->SetX(4);
            $pdf->Cell(20, 5, utf8_decode("ORIGEN:"), 0, 1, 'L');
            $pdf->SetFont('Arial', '', 5.5);
            $pdf->SetY(75);
            $pdf->SetX(5);
            $pdf->Cell(205, 25, '', 1, 1, 'L');
            $pdf->SetY(76);
            $pdf->SetX(5);
            $pdf->MultiCell(205, 2.2, utf8_decode($trabajo[0]->DescripcionOrigenTrabajo), 0, 'L');

            $pdf->SetFont('Arial', 'B', 8);
            $pdf->SetY(105);
            $pdf->SetX(4);
            $pdf->Cell(20, 5, utf8_decode("RIESGO:"), 0, 1, 'L');
            $pdf->SetFont('Arial', '', 5.5);
            $pdf->SetY(110);
            $pdf->SetX(5);
            $pdf->Cell(205, 25, '', 1, 1, 'L');
            $pdf->SetY(111);
            $pdf->SetX(5);
            $pdf->MultiCell(205, 2.2, utf8_decode($trabajo[0]->DescripcionRiesgoTrabajo), 0, 'L');

            $pdf->SetFont('Arial', 'B', 8);
            $pdf->SetY(140);
            $pdf->SetX(4);
            $pdf->Cell(20, 5, utf8_decode("DESCRIPCIÓN DE ALCANCE:"), 0, 1, 'L');
            $pdf->SetFont('Arial', '', 5.5);
            $pdf->SetY(145);
            $pdf->SetX(5);
            $pdf->Cell(205, 25, '', 1, 1, 'L');
            $pdf->SetY(146);
            $pdf->SetX(5);
            $pdf->MultiCell(205, 2.2, utf8_decode($trabajo[0]->DescripcionAlcanceTrabajo), 0, 'J');

            /* SECCION PRE FOOTER */


            if ($trabajo[0]->ImpactoEnPlazo == 'Si') {
                $pdf->Line(55, 175, 35, 180);
            } else {
                $pdf->Line(75, 175, 55, 180);
            }

            $pdf->SetFont('Arial', 'B', 7);
            $pdf->SetY(175);
            $pdf->SetX(5);
            $pdf->Cell(30, 5, utf8_decode("IMPACTO EN PLAZO"), 0, 1, 'l');
            $pdf->SetFont('Arial', '', 7);
            $pdf->SetY(175);
            $pdf->SetX(35);
            $pdf->Cell(20, 5, utf8_decode("SI"), 1, 1, 'C');
            $pdf->SetY(175);
            $pdf->SetX(55);
            $pdf->Cell(20, 5, utf8_decode("NO"), 1, 1, 'C');
            $pdf->SetY(175);
            $pdf->SetX(75);
            $pdf->Cell(15, 5, utf8_decode($trabajo[0]->DiasImpacto), 'B', 1, 'C');
            $pdf->SetY(175);
            $pdf->SetX(90);
            $pdf->Cell(10, 5, utf8_decode("DIAS"), 0, 1, 'C');


            if ($trabajo[0]->Importe >= 5000) {
                $pdf->Line(165, 175, 145, 180);
            } else {
                $pdf->Line(185, 175, 165, 180);
            }

            $pdf->SetFont('Arial', 'B', 7);
            $pdf->SetY(175);
            $pdf->SetX(115);
            $pdf->Cell(30, 5, utf8_decode("IMPACTO EN COSTO"), 0, 1, 'l');
            $pdf->SetFont('Arial', '', 7);
            $pdf->SetY(175);
            $pdf->SetX(145);
            $pdf->Cell(20, 5, utf8_decode("SI"), 1, 1, 'C');
            $pdf->SetY(175);
            $pdf->SetX(165);
            $pdf->Cell(20, 5, utf8_decode("NO"), 1, 1, 'C');
            $pdf->SetY(175);
            $pdf->SetX(185);

            $pdf->Cell(25, 5, '$' . number_format($trabajo[0]->Importe, 2), 'B', 1, 'C');
            $pdf->SetY(175);
            $pdf->SetX(195);


            $pdf->SetFont('Arial', 'B', 7);
            $pdf->SetY(185);
            $pdf->SetX(5);
            $pdf->Cell(200, 5, utf8_decode("Notas Importantes"), 0, 1, 'l');

            $pdf->SetFont('Arial', '', 7);
            $pdf->SetY(190);
            $pdf->SetX(5);
            $pdf->Cell(200, 3, utf8_decode("1. El Contratista Esta Obligado A Integrar Su PCO Y/O Orden De Cambio Acorde A Lo Establecido En Su Contrato"), 0, 1, 'L');
            $pdf->SetY(193);
            $pdf->SetX(5);
            $pdf->Cell(200, 3, utf8_decode("2. En Caso De Aprobación Se Requiere Firma Del Representante Del Cliente, Caso Contrario, Cruzar Con Una Linea El Nombre"), 0, 1, 'L');
            $pdf->SetY(196);
            $pdf->SetX(5);
            $pdf->Cell(200, 3, utf8_decode("3. Entiéndase De Que La No Aprobación Indicara La No Ejecución De Los Trabajos"), 0, 1, 'L');
            $pdf->SetY(199);
            $pdf->SetX(5);
            $pdf->Cell(200, 3, utf8_decode("4. Este Costo Es Un Estimado Inicial Que Sera Sujeto Al Proceso Contractual De Revision, Asimismo Se Validara La Procedencia Como ODC Según Alcances "), 0, 1, 'L');
            $pdf->SetY(202);
            $pdf->SetX(8);
            $pdf->Cell(200, 3, utf8_decode("Previamente Contratados"), 0, 1, 'L');

            /* FIRMAS PRIMER BLOQUE */
            /* FIRMA 1 */
            $pdf->SetFont('Arial', 'B', 7.5);
            $pdf->Rect(5, 210, 63, 25);
            $pdf->SetY(210);
            $pdf->SetX(5);
            $pdf->Cell(63, 5, utf8_decode("VALIDA:"), 0, 1, 'C');
            $pdf->SetY(230);
            $pdf->SetX(5);
            $pdf->Cell(63, 5, utf8_decode("Supervisión Gerencia De Proyectos"), 'T', 1, 'C');
            /* FIRMA 2 */
            $pdf->Rect(76, 210, 63, 25);
            $pdf->SetY(210);
            $pdf->SetX(76);
            $pdf->Cell(63, 5, utf8_decode("VALIDA:"), 0, 1, 'C');
            $pdf->SetY(230);
            $pdf->SetX(76);
            $pdf->Cell(63, 5, utf8_decode("Costos De Gerencia De Proyectos"), 'T', 1, 'C');
            /* FIRMA 3 */
            $pdf->Rect(146, 210, 64, 25);
            $pdf->SetY(210);
            $pdf->SetX(146);
            $pdf->Cell(63, 5, utf8_decode("AUTORIZA:"), 0, 1, 'C');
            $pdf->SetY(230);
            $pdf->SetX(146);
            $pdf->Cell(64, 5, utf8_decode("Subdirector De Construcción BBVA Bancomer"), 'T', 1, 'C');
            /* FIRMAS SEGUNDO BLOQUE */
            /* FIRMA 1 */
            $pdf->Rect(5, 240, 63, 25);
            $pdf->SetY(240);
            $pdf->SetX(5);
            $pdf->Cell(63, 5, utf8_decode("AUTORIZA:"), 0, 1, 'C');
            $pdf->SetY(260);
            $pdf->SetX(5);
            $pdf->Cell(63, 5, utf8_decode("Director De Construcción BBVA Bancomer"), 'T', 1, 'C');
            /* FIRMA 2 */
            $pdf->Rect(76, 240, 63, 25);
            $pdf->SetY(260);
            $pdf->SetX(76);
            $pdf->Cell(63, 5, utf8_decode(""), 'T', 1, 'C');
            /* FIRMA 3 */
            $pdf->Rect(146, 240, 64, 25);
            $pdf->SetY(240);
            $pdf->SetX(146);
            $pdf->Cell(63, 5, utf8_decode("AUTORIZA:"), 0, 1, 'C');
            $pdf->SetY(260);
            $pdf->SetX(146);
            $pdf->Cell(64, 5, utf8_decode("Director De PMO Ulises"), 'T', 1, 'C');



            /* PIE DE PAGINA */
            $pdf->SetFont('Arial', 'B', 7);
            $pdf->SetY(270);
            $pdf->SetX(5);
            $pdf->Cell(92, 4, utf8_decode("INMUEBLES: Actitud, Eficiecia Y Calidad A Tu Servicio"), 1, 1, 'L');
            $pdf->SetY(270);
            $pdf->SetX(97);
            $pdf->SetFillColor(169, 244, 251);
            $pdf->Cell(23, 4, utf8_decode("Versión 1"), 1, 1, 'C', true);
            $pdf->SetY(270);
            $pdf->SetX(120);
            $pdf->Cell(90, 4, utf8_decode("Pag. 1    "), 1, 1, 'R');


            /* FIN CUERPO */
            $path = 'uploads/Reportes/' . $ID;
            // print $path;
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file_name = "REPORTE_FIN49";
            $url = $path . '/' . $file_name . '.pdf';



            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onReporteResumenPartidas() {

        $ID = $_POST['ID'];
        $trabajo = $this->trabajo_model->getResumenPartidas($ID);
        $datos = $trabajo[0];

        // Creación del objeto de la clase heredada
        $pdf = new PDF('P', 'mm', array(279 /* ANCHO */, 216 /* ALTURA */));

        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetAutoPageBreak(false, 300);
        $pdf->SetLineWidth(0.4);


        /* ENCABEZADO */

       $pdf->Image(base_url() .  utf8_decode($datos->LogoEmpresa), 5, 5, 35);
        // LogoCliente
        $pdf->Image(base_url() . utf8_decode($datos->LogoCliente), 155, 5, 55);

        /* Titulo */
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->SetY(5);
        $pdf->SetX(5);
        $pdf->Cell(200, 5, utf8_decode($datos->Cliente), 0, 1, 'C');
        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY);
        $pdf->SetX(5);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(200, 5, utf8_decode("ADMNISTRACIÓN DE INMUEBLES"), 0, 1, 'C');

        /* PRIMEROS TITULOS */
        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY);
        $pdf->SetX(50);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(20, 5, utf8_decode("OBRA:"), 0, 1, 'L');
        $pdf->SetY($CurrenY);
        $pdf->SetX(70);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(75, 5, utf8_decode($datos->TrabajoSolicitado), 'B', 1, 'L');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY);
        $pdf->SetX(50);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(20, 5, utf8_decode("EMPRESA:"), 0, 1, 'L');
        $pdf->SetY($CurrenY);
        $pdf->SetX(70);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(75, 5, utf8_decode($datos->Empresa), 'B', 1, 'L');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY);
        $pdf->SetX(50);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(20, 5, utf8_decode("FECHA:"), 0, 1, 'L');
        $pdf->SetY($CurrenY);
        $pdf->SetX(70);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(75, 5, utf8_decode($datos->FechaCreacion), 'B', 1, 'L');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 4);
        $pdf->SetX(5);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(200, 5, utf8_decode("RESUMEN DE PARTIDAS"), 0, 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY);
        $pdf->SetX(5);
        $pdf->Cell(200, 5, utf8_decode('CR: ' . $datos->CR . ' - ' . $datos->Sucursal), 0, 1, 'C');

        /* SEGUNDA PARTE ENCABEZADO */

        //Traemos los valores totalizados
        $PreliminaresInt = '';
        $AlbañileriaInt = '';
        $AcabadosInt = '';
        $CanceleriaInt = '';
        $HerrerriaInt = '';
        $SuministrosInt = '';
        $LimpiezaInt = '';
        $InstHidroSanitariaInt = '';
        $InsElectricaInt = '';
        $AireAconInt = '';
        $InfraesctructuraInt = '';
        $VariosInt = '';

        $totalInteriores = 0;


        $PreliminaresExt = '';
        $AlbañileriaExt = '';
        $AcabadosExt = '';
        $HerrerriaExt = '';
        ;
        $InfraesctructuraExt = '';
        $VariosExt = '';

        $totalExteriores = 0;

        $GranTotal = 0;

        foreach ($trabajo as $i => $datoNuevo) {
            if ($datoNuevo->IntExt == "Interior") {



                if ($datoNuevo->Categoria == "PRELIMINARES") {
                    $PreliminaresInt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                } else if ($datoNuevo->Categoria == "ALBAÑILERÍA") {
                    $AlbañileriaInt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                } else if ($datoNuevo->Categoria == "ACABADOS") {
                    $AcabadosInt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                } else if ($datoNuevo->Categoria == "CANCELERÍA ALUMINIO Y CRISTAL") {
                    $CanceleriaInt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                } else if ($datoNuevo->Categoria == "HERRERÍA Y ESTRUCTURA METÁLICA") {
                    $HerrerriaInt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                } else if ($datoNuevo->Categoria == "SUMINISTROS DEL CLIENTE Y COLOCACIONES") {
                    $SuministrosInt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                } else if ($datoNuevo->Categoria == "LIMPIEZA") {
                    $LimpiezaInt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                } else if ($datoNuevo->Categoria == "INSTALACIÓN HIDROSANITARIA") {
                    $InstHidroSanitariaInt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                } else if ($datoNuevo->Categoria == "INSTALACIÓN ELÉCTRICA") {
                    $InsElectricaInt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                } else if ($datoNuevo->Categoria == "AIRE ACONDICIONADO") {
                    $AireAconInt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                } else if ($datoNuevo->Categoria == "INFRAESTRUCTURA") {
                    $InfraesctructuraInt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                } else {
                    $VariosInt += $datoNuevo->ImporteRenglon;
                }
                //Calcula el total de interiores
                $totalInteriores += $datoNuevo->ImporteRenglon;
            }

            if ($datoNuevo->IntExt == "Exterior") {

                if ($datoNuevo->Categoria == "PRELIMINARES") {
                    $PreliminaresExt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                } else if ($datoNuevo->Categoria == "ALBAÑILERÍA") {
                    $AlbañileriaExt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                } else if ($datoNuevo->Categoria == "ACABADOS") {
                    $AcabadosExt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                } else if ($datoNuevo->Categoria == "HERRERÍA Y ESTRUCTURA METÁLICA") {
                    $HerrerriaExt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                } else if ($datoNuevo->Categoria == "INFRAESTRUCTURA") {
                    $InfraesctructuraExt = '$' . number_format($datoNuevo->ImporteRenglon, 2);
                } else {
                    $VariosExt += $datoNuevo->ImporteRenglon;
                }
                //Calcula el total de exteriores
                $totalExteriores += $datoNuevo->ImporteRenglon;
            }
            //Calculamos el gran total
            $GranTotal = $totalInteriores + $totalExteriores;
        }
        //Despues de todo el for verificaos que no vengan vacios los campos de varios para formatearlos
        if (!$VariosInt == '') {
            $VariosInt = '$' . number_format((float) $VariosInt, 2);
        }
        if (!$VariosExt == '') {
            $VariosExt = '$' . number_format((float) $VariosExt, 2);
        }



        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY);
        $pdf->SetX(15);
        $pdf->Cell(55, 5, utf8_decode("SUCURSAL BANCARIA (INTERIORES) "), 0, 1, 'L');
        $pdf->SetFont('Arial', '', 8);
        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->Cell(55, 5, utf8_decode("PRELIMINARES  "), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, $PreliminaresInt, 'B', 1, 'C');


        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("ALBAÑILERIA"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, $AlbañileriaInt, 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("ACABADOS"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, $AcabadosInt, 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("CANCELERIA ALUMINIO Y CRISTAL"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, $CanceleriaInt, 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("HERRERIA Y ESTRUCTURA METALICA"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, $HerrerriaInt, 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("SUMINISTROS DEL CLIENTE Y COLOCACIONES"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, $SuministrosInt, 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("LIMPIEZA"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, $LimpiezaInt, 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("INSTALACIÓN HIDROSANITARIA"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, $InstHidroSanitariaInt, 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("INSTALACIÓN ELECTRICA"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, $InsElectricaInt, 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("AIRE ACONDICIONADO"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, $AireAconInt, 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, 'INFRAESTRUCTURA', 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, $InfraesctructuraInt, 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("SIN CLAVE"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, $VariosInt, 'B', 1, 'C');


        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 5);
        $pdf->SetX(15);
        $pdf->Cell(55, 5, utf8_decode("TOTAL SUCURSAL BANCARIA"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 5);
        $pdf->SetX(110);
        $pdf->Cell(95, 5, '$' . number_format($totalInteriores, 2), 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 8);
        $pdf->SetX(15);
        $pdf->Cell(55, 5, utf8_decode("OBRAS EXTERIORES"), 0, 1, 'L');


        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("PRELIMINARES"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, $PreliminaresExt, 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("ALBAÑILERIA"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, $AlbañileriaExt, 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("ACABADOS"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, $AcabadosExt, 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("HERRERIA Y ESTRUCTURA METALICA"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, $HerrerriaExt, 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("INFRAESTRUCUTRA"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, $InfraesctructuraExt, 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("VARIOS"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, $VariosExt, 'B', 1, 'C');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 5);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(55, 5, utf8_decode("TOTAL DE OBRAS EXTERIORES"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 5);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, '$' . number_format($totalExteriores, 2), 'B', 1, 'C');


        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 10);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(55, 5, utf8_decode("GRAN TOTAL"), 0, 1, 'L');
        $pdf->SetY($CurrenY + 10);
        $pdf->SetX(110);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(95, 5, '$' . number_format($GranTotal, 2), 'B', 1, 'C');



        /* PIE DE PAGINA FIRMAS */

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 10);
        $pdf->SetX(10);
        $pdf->Cell(55, 5, utf8_decode("FIRMAS DE CONFORMIDAD"), 0, 1, 'L');

        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(10);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("EMPRESA"), 0, 1, 'L');

        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(120);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(55, 5, utf8_decode("BANCO"), 0, 1, 'L');


        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(80, 5, utf8_decode($datos->Empresa), 0, 1, 'C');

        $pdf->SetY($CurrenY + 2);
        $pdf->SetX(120);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(80, 5, utf8_decode($datos->Cliente), 0, 1, 'C');


        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY + 10);
        $pdf->SetX(15);
        $pdf->Cell(80, 5, utf8_decode(""), 'B', 1, 'C');

        $pdf->SetY($CurrenY + 10);
        $pdf->SetX(120);
        $pdf->Cell(80, 5, utf8_decode(""), 'B', 1, 'C');


        $CurrenY = $pdf->GetY();
        $pdf->SetY($CurrenY);
        $pdf->SetX(15);
        $pdf->SetFont('Arial', '', 7);
        $pdf->Cell(80, 5, utf8_decode($datos->ContactoEmpresa), 0, 1, 'C');
        $pdf->SetY($CurrenY);
        $pdf->SetX(120);
        $pdf->SetFont('Arial', '', 7);
        $pdf->Cell(80, 5, utf8_decode($datos->FirmaBanco), 0, 1, 'C');


        /* FIN CUERPO */
        $path = 'uploads/Reportes/' . $ID;
        // print $path;
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $file_name = "RESUMEN DE PARTIDAS";
        $url = $path . '/' . $file_name . '.pdf';



        $pdf->Output($url);
        print base_url() . $url;
    }

    public function onReportePresupuestoBBVA() {

        $ID = $_POST['ID'];
        $trabajo = $this->trabajo_model->getPresupuestoBBVA($ID);
        $datosEncabezado = $trabajo[0];


        // Creación del objeto de la clase heredada
        $pdf = new PDF('P', 'mm', array(279 /* ANCHO */, 216 /* ALTURA */));
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetAutoPageBreak(false, 5);

        /* ENCABEZADO */

        // Arial bold 15
        $pdf->SetFont('Arial', 'B', 9);
        // Título
        $pdf->SetY(5);
        // Movernos a la derecha
        $pdf->SetX(25);
        $pdf->Cell(165, 5, utf8_decode("PRESUPUESTO DE CONCILIACÓN DE PRECIOS UNITARIOS DE CONCEPTOS FUERA DE PROYECTO"), 0, 0, 'C');
        $pdf->SetFont('Arial', 'B', 8);
        /* CUERPO */

        $CURRENT_Y = $pdf->GetY();
        $pdf->SetY(15);
        $pdf->SetLineWidth(0.4);


        /* INICIA  EN LA ESQUINA DE EMPRESA */
        $pdf->Rect(145, 15, 65, 20);

        /* SEGUNDO RECUADRO */
        $pdf->Rect(5, 22, 205, 13);
        /**/
        $pdf->SetY(40);
        $pdf->SetX(5);
        $pdf->SetFillColor(169, 208, 255);
        $pdf->Cell(205, 5, '', 1, 1, 'C', true);

        $pdf->SetY(35);
        $pdf->SetX(5);
        $pdf->SetFillColor(255, 252, 76);
        $pdf->Cell(205, 5, utf8_decode("IMPORTE CONTRATADO"), 1, 1, 'C', true);

        /* TITULOS */
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->SetY(16);
        $pdf->SetX(145);
        $pdf->Cell(65, 5, utf8_decode("EMPRESA: "), 0, 1, 'C');

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
        $pdf->Cell(25, 5, utf8_decode("IMPORTE"), 1, 1, 'C');

        /* DATOS */
        $pdf->SetY(23);
        $pdf->SetX(5);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(140, 10, "CR: " . $datosEncabezado->CR . " - " . $datosEncabezado->Sucursal . " - " . $datosEncabezado->FolioCliente, 0, 1, 'C');


        $pdf->SetY(23);
        $pdf->SetX(145);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(65, 10, $datosEncabezado->Empresa, 0, 1, 'C');

        /* DETALLE  */
        $Y = 45;
        $top = 0;
        $page = 1;
        $page_size = 234;

        $ImporteTotal = 0;


        foreach ($trabajo as $key => $value) {

            $top += 10;

            $pdf->SetFont('Arial', '', 7);
            $Ancho = $pdf->GetStringWidth(utf8_decode($value->Concepto));
            $numero_lineas = $Ancho / (103 ); //El ancho de multicell -5 de la altura
            $numero_lineas = ceil($numero_lineas);
            $AlturaLinea = 4;
            $AlturaCelda = $numero_lineas * $AlturaLinea;
            $AlturaCelda = ceil($AlturaCelda);

            /* DETALLE DATOS */

            $pdf->SetY($Y);
            $pdf->SetX(5);
            $pdf->cell(15, $AlturaCelda, utf8_decode($value->Clave), 1, 0, 'C');

            $pdf->SetY($Y);
            $pdf->SetX(20);
            $pdf->MultiCell(110, 4, utf8_decode($value->Concepto), 1, 'P', false);

            $H = $pdf->GetY();

            $pdf->SetY($Y);
            $pdf->SetX(130);
            $pdf->cell(15, $AlturaCelda, utf8_decode($value->Unidad), 1, 0, 'C');
            $pdf->SetY($Y);
            $pdf->SetX(145);
            $pdf->cell(20, $AlturaCelda, utf8_decode($value->Cantidad), 1, 0, 'C');
            $pdf->SetY($Y);
            $pdf->SetX(165);
            $pdf->cell(20, $AlturaCelda, "$ " . number_format($value->Precio, 2), 1, 0, 'C');
            $pdf->SetY($Y);
            $pdf->SetX(185);
            $pdf->cell(25, $AlturaCelda, "$ " . number_format($value->ImporteRenglon, 2), 1, 0, 'C');

            $Y = $H;

            $top += $AlturaCelda;

            if ($top > $page_size) {
                $pdf->AddPage();

                /* ENCABEZADO */

                // Arial bold 15
                $pdf->SetFont('Arial', 'B', 9);
                // Título
                $pdf->SetY(5);
                // Movernos a la derecha
                $pdf->SetX(25);
                $pdf->Cell(165, 5, utf8_decode("PRESUPUESTO DE CONCILIACÓN DE PRECIOS UNITARIOS DE CONCEPTOS FUERA DE PROYECTO"), 0, 0, 'C');
                $pdf->SetFont('Arial', 'B', 8);
                /* CUERPO */

                $CURRENT_Y = $pdf->GetY();
                $pdf->SetY(15);
                $pdf->SetLineWidth(0.4);


                /* INICIA  EN LA ESQUINA DE EMPRESA */
                $pdf->Rect(145, 15, 65, 20);

                /* SEGUNDO RECUADRO */
                $pdf->Rect(5, 22, 205, 13);
                /**/
                $pdf->SetY(40);
                $pdf->SetX(5);
                $pdf->SetFillColor(169, 208, 255);
                $pdf->Cell(205, 5, '', 1, 1, 'C', true);

                $pdf->SetY(35);
                $pdf->SetX(5);
                $pdf->SetFillColor(255, 252, 76);
                $pdf->Cell(205, 5, utf8_decode("IMPORTE CONTRATADO"), 1, 1, 'C', true);

                /* TITULOS */
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->SetY(16);
                $pdf->SetX(145);
                $pdf->Cell(65, 5, utf8_decode("EMPRESA: "), 0, 1, 'C');

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
                $pdf->Cell(25, 5, utf8_decode("IMPORTE"), 1, 1, 'C');
                /* DATOS */
                $pdf->SetY(23);
                $pdf->SetX(5);
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->Cell(140, 10, "CR: " . $datosEncabezado->CR . " - " . $datosEncabezado->Sucursal . " - " . $datosEncabezado->FolioCliente, 0, 1, 'C');

                $pdf->SetY(23);
                $pdf->SetX(145);
                $pdf->SetFont('Arial', 'B', 8);
                $pdf->Cell(65, 10, $datosEncabezado->Empresa, 0, 1, 'C');

                $Y = 45;
                $top = 0;
                $page = 2;
                $page_size = 234;
            } else {

            }
            $ImporteTotal += $value->ImporteRenglon;
        }

        /* FINAL DEL DETALLE */
        $pdf->SetFillColor(255, 252, 76);
        $pdf->SetY($Y);
        $pdf->SetX(5);
        $pdf->Cell(15, 5, "", 1, 1, 'C', true);
        $pdf->SetY($Y);
        $pdf->SetX(20);
        $pdf->Cell(110, 5, "TOTAL DE PRESUPUESTO ADICIONALES", 1, 1, 'L', true);
        $pdf->SetY($Y);
        $pdf->SetX(130);
        $pdf->Cell(15, 5, "", 1, 1, 'C', true);
        $pdf->SetY($Y);
        $pdf->SetX(145);
        $pdf->Cell(20, 5, "", 1, 1, 'C', true);
        $pdf->SetY($Y);
        $pdf->SetX(165);
        $pdf->Cell(20, 5, " ", 1, 1, 'C', true);
        $pdf->SetY($Y);
        $pdf->SetX(185);
        $pdf->Cell(25, 5, "$ " . number_format($ImporteTotal, 2), 1, 1, 'C', true);


      
        /* TOTALES TITULOS */
        $pdf->SetY(192);
        $pdf->SetX(85);
        $pdf->Cell(85, 5, "Importe Contratado=", 0, 1, 'R');
        $pdf->SetY(192);
        $pdf->SetX(185);
        $pdf->Cell(25, 5, utf8_decode("$0.00"), 1, 1, 'R');


     
        $pdf->SetY(202);
        $pdf->SetX(85);
        $pdf->SetTextColor(255, 38, 38);
        $pdf->Cell(85, 5, "Deductivas=", 0, 1, 'R');
        $pdf->SetY(202);
        $pdf->SetX(185);
        $pdf->Cell(25, 5, utf8_decode("$0.00"), 1, 1, 'R');

        $pdf->SetY(212);
        $pdf->SetX(85);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->Cell(85, 5, utf8_decode('Items fuera de catálogo='), 0, 1, 'R');
        $pdf->SetY(212);
        $pdf->SetX(185);
        $pdf->Cell(25, 5, "$ " . number_format($ImporteTotal, 2), 1, 1, 'R');

        
        $pdf->SetY(222);
        $pdf->SetX(85);
        $pdf->SetTextColor(255, 38, 38);
        $pdf->Cell(85, 5, utf8_decode("Penalización por incumplimiento de fechas contractuales="), 0, 1, 'R');
        $pdf->SetY(222);
        $pdf->SetX(185);
        $pdf->Cell(25, 5, utf8_decode("$0.00"), 1, 1, 'R');


        $pdf->SetY(232);
        $pdf->SetX(85);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->Cell(85, 5, "Subtotal=", 0, 1, 'R');
        $pdf->SetY(232);
        $pdf->SetX(185);
        $pdf->Cell(25, 5, "$ " . number_format($ImporteTotal, 2), 1, 1, 'R');




        /* FIRMAS */

        /* ELABORÓ */
    
        $pdf->SetFont('Arial', '', 8);
        $pdf->SetY(262);
        $pdf->SetX(10);
        $pdf->Cell(90, 5, utf8_decode($datosEncabezado->Empresa), 'T', 1, 'C');


        /* REVISÓ */

        $pdf->SetY(262);
        $pdf->SetX(120);
        $pdf->Cell(90, 5, utf8_decode($datosEncabezado->Supervisora), 'T', 1, 'C');


        /* FIN CUERPO */
        $path = 'uploads/Reportes/' . $ID;
        // print $path;
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $file_name = "REPORTE_PRESUPUESTOBBVA";
        $url = $path . '/' . $file_name . '.pdf';


        $pdf->Output($url);
        print base_url() . $url;
    }

}

class PDF extends FPDF {

}

class PDFC extends FPDF {
    function Footer()
{
    /* Leyenda */
        $this->SetY(232);
        $this->SetX(10);
        $this->SetFont('Arial', '', 6.5);
        $this->MultiCell(190, 3, utf8_decode("EL IMPORTE DE ESTE PRESUPUESTO NO INCLUYE 16% IVA. VIGENCIA VÁLIDA POR 30 DÍAS A PARTIR DE LA FECHA DE GENERACIÓN DEL PRESUPUESTO SIN OTRO PARTICULAR DE MOMENTO Y EN ESPERA DE VERNOS FAVORECIDOS CON SU PREFERENCIA, QUEDO A SUS APRECIABLES ORDENES."), 0, 'C');

        /* Firma */
        $CurrentY = $this->GetY();
        $this->SetY($CurrentY + 15);
        $this->SetX(73);
        $this->SetFont('Arial', 'B', 7.5);
        $this->cell(70, 5, utf8_decode("Ing. Victor Ayala Ruiz"), 'T', 0, 'C');
        $CurrentY = $this->GetY();
        $this->SetY($CurrentY + 3);
        $this->SetX(73);
        $this->SetFont('Arial', '', 7.5);
        $this->cell(70, 5, utf8_decode("A & R Construcciones Sa de Cv"), 0, 0, 'C');

        /* Barra Footer */
        $CurrentY = $this->GetY();
        $this->Image(base_url() . 'img/barra_Presupuesto.png', 5, $CurrentY + 2, 210, 6);

        $CurrentY = $this->GetY();
        $this->SetY($CurrentY + 4);
        $this->SetX(10);
        $this->SetFont('Arial', 'B', 7);
        $this->MultiCell(60, 3, utf8_decode("
Justo Sierra No. 2150
Col. Americana
CP. 44600
Guadalajara, Jalisco, MÉXICO"), 0, 'L');


        $this->SetY($CurrentY + 6);
        $this->SetX(175);
        $this->cell(30, 4, utf8_decode("victor.ayala@ayr.mx"), 0, 0, 'L');
}
}
