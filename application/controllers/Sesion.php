<?php

header('Access-Control-Allow-Origin: http://app.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "/third_party/fpdf17/fpdf.php";

class Sesion extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session');
        $this->load->model('usuario_model');
        $this->load->model('registroUsuarios_model');
    }

    public function index() {
        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            $this->load->view('vEncabezado');
            $this->load->view('vNavegacion');
            $this->load->view('vFooter');
        } else {
            $this->load->view('vEncabezado');
            $this->load->view('vSesion');
            $this->load->view('vFooter');
        }
    }

    public function getLogoByID() {
        try {
            $data = $this->usuario_model->getLogoByID();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onIngreso() {
        try {
            extract(filter_input_array(INPUT_POST));
            $data = $this->usuario_model->getAcceso($USUARIO, $CONTRASENA);
            if (count($data) > 0) {
                $newdata = array(
                    'USERNAME' => $data[0]->Usuario,
                    'PASSWORD' => $data[0]->Contrasena,
                    'Nombre' => $data[0]->Nombre,
                    'Apellidos' => $data[0]->Apellidos,
                    'Cliente' => $data[0]->Cliente_ID,
                    'Empresa' => $data[0]->Empresa_ID,
                    'ID' => $data[0]->ID,
                    'LOGGED' => TRUE,
                    'TipoAcceso' => $data[0]->TipoAcceso,
                );
                $this->session->mark_as_temp('LOGGED', 28800);
                $this->session->set_userdata($newdata);
                $this->usuario_model->onModificarUltimoAcceso($data[0]->ID, date("d-m-Y H:i:s"));

                $dataRegistrarAccion = array(
                    'Accion' => 'LOGIN',
                    'Registro' => date("d-m-Y H:i:s"),
                    'Usuario_ID' => $data[0]->ID
                );
                $this->registroUsuarios_model->onAgregar($dataRegistrarAccion);

                print 1;
            } else {
                print 'ACCESO DENEGADO, VERIFIQUE SU USUARIO Y/O CONTRASEÑA';
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregar() {
        try {
            extract($this->input->post());
            $data = array(
                'Accion' => $Accion,
                'Registro' => date("d-m-Y H:i:s"),
                'Usuario_ID' => $this->session->userdata('ID')
            );
            $ID = $this->registroUsuarios_model->onAgregar($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onCambiarContrasena() {
        try {
            extract($this->input->post());
            $DATA = array(
                'Contrasena' => ($Contrasena !== NULL) ? $Contrasena : NULL
            );
            $this->usuario_model->onModificar($ID, $DATA);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onSalir() {
        try {
            $array_items = array('USERNAME', 'PASSWORD', 'LOGGED');
            $this->session->unset_userdata($array_items);
            header('Location: ' . base_url());
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onSendMail() {
        extract($this->input->post());
        $data = $this->usuario_model->getContrasena($USUARIO);
        //var_dump($data);
        if (!empty($data[0])) {
            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://mut.hosting-mexico.net',
                'smtp_port' => 465,
                'smtp_user' => 'no-reply@ayr.mx',
                'smtp_pass' => 'CDw9#,y^I(_N',
                'mailtype' => 'html',
                'charset' => 'ISO_8859-1',
                'wordwrap' => TRUE
            );
            $this->load->library('email', $config);
            $this->email->from('no-reply@ayr.mx', 'app.ayr.mx');
            $this->email->to($USUARIO);
            $this->email->subject(utf8_decode('Envío de contraseña app.ayr.mx'));
            $this->email->message(utf8_decode('<p>Se ha enviado su contraseña para el usuario: ' . $USUARIO . '</p><br>'
                            . '<p>Su contraseña es: </p>' . '<h3>' . $data[0]->Contrasena . '</h3><hr>'
                            . ''));
            if ($this->email->send()) {
                print 1;
            } else {
                print 0;
            }
        } else {
            print 2;
        }
    }

}
