<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_model extends CI_Model {
    // protected $db; 
    
    public function __construct() {
        parent::__construct(); 
        $this->load->database(); 
        $this->db = $this->db;  
    }

    public function get_all() {
        $this->db->select('nilai.*, mahasiswa.nama AS mahasiswa_nama, mata_kuliah.mata_kuliah AS matakuliah_nama');
        $this->db->from('nilai');
        $this->db->join('mahasiswa', 'nilai.id = mahasiswa.id');
        $this->db->join('mata_kuliah', 'nilai.id = mata_kuliah.id');
        return $this->db->get()->result();
    }

    public function insert($data) {
        $this->db->insert('nilai', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('nilai');
    }
}