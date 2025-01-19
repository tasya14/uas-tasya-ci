<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        if ($this->session->userdata('logged') != TRUE) {
            $url = base_url('login');
            redirect($url);
        }
    }

    public function index(){
        $this->load->view('admin/dashboard');
    }
}

