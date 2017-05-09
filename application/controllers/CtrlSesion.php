<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlSesion extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index() {
        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            $this->load->view('vEncabezado'); 
            $this->load->view('vNavegacion'); 
        } else {
            $this->load->view('vEncabezado');
            $this->load->view('vSesion');
        }
    }

    public function onIngreso() {
        try {
            extract(filter_input_array(INPUT_POST));
            session_start();
            $newdata = array(
                'USERNAME' => $USUARIO,
                'PASSWORD' => $CONTRASENA,
                'EMAIL' => 'johndoe@some-site.com',
                'LOGGED' => TRUE
            );
            $this->session->mark_as_temp('LOGGED', 28800);
            $this->session->set_userdata($newdata);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onSalir() {
        try {
            $array_items = array('USERNAME', 'EMAIL', 'LOGGED');
            $this->session->unset_userdata($array_items);
            header('Location: ' . base_url() . 'index.php/');
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
