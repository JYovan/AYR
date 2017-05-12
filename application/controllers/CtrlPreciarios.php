
<?php

header('Access-Control-Allow-Origin: http://project.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlPreciarios extends CI_Controller {

   
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('usuario_model');
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

 

   

}
