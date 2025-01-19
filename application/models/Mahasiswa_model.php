<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

    public function __construct() {
        parent::__construct(); 
        $this->load->database(); 
        $this->db = $this->db;  
    }
    
    public function get_all() {
        return $this->db->get('mahasiswa')->result();
    }

    public function insert($data) {
        $this->db->insert('mahasiswa', $data);
    }

    public function get_by_id($id) {
        return $this->db->get_where('mahasiswa', array('id' => $id))->row();
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('mahasiswa', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }
}