<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlCuadrillas extends CI_Controller {

   
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index() {
        $this->load->view('vEncabezado');
        $this->load->view('vNavegacion');
        $this->load->view('vCuadrillas');
    }

}
