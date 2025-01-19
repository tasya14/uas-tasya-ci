<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Mahasiswa_model');
    }

    public function index() {
        $data['mahasiswa'] = $this->Mahasiswa_model->get_all();
        $this->load->view('admin/mhs', $data);
    }

    public function create() {
        if ($this->input->post()) {
            $data = array(
                'nim' => $this->input->post('nim'),
                'nama' => $this->input->post('nama'),
            );
            $this->Mahasiswa_model->insert($data);
            redirect('mahasiswa');
        }
        $this->load->view('mahasiswa/create');
    }

    public function delete($id) {
        $this->Mahasiswa_model->delete($id);
        redirect('mahasiswa');
    }
}