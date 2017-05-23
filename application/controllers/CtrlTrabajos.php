<?php

header('Access-Control-Allow-Origin: http://project.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlTrabajos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        
    }

    public function index() {

        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            $this->load->view('vEncabezado');
            $this->load->view('vNavegacion');
            $this->load->view('vTrabajos');
        } else {
            $this->load->view('vEncabezado');
            $this->load->view('vSesion');
        }
    }

}
