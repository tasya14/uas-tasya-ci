<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Nilai_model');
        $this->load->model('Mahasiswa_model');
        $this->load->model('Matakuliah_model');
    }

    public function index() {
        $data['nilai'] = $this->Nilai_model->get_all();
        $this->load->view('admin/rekap_nilai', $data);
    }

    public function create() {
        $data['mahasiswa'] = $this->Mahasiswa_model->get_all();
        $data['matakuliah'] = $this->Matakuliah_model->get_all();

        if ($this->input->post()) {
            $data = array(
                // 'id' => $this->input->post('id'),
                // 'id' => $this->input->post('id'),
                'nilai' => $this->input->post('nilai'),
            );
            $this->Nilai_model->insert($data);
            redirect('nilai');
        }

        $this->load->view('admin/tambah_data', $data);
    }

    public function delete($id) {
        $this->Nilai_model->delete($id);
        redirect('nilai');
    }
}