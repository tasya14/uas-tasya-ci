<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
        $this->load->model('Mlogin', 'Mlogin');
    }

    function index() {
        if ($this->session->userdata('logged') != TRUE) {
            $this->load->view('admin/login');
        } else {
            $url = base_url('home'); 
            redirect($url);
        }
    }

    function autentikasi(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
	
		// Validasi email
		$validasi_email = $this->Mlogin->query_validasi_email($email);
		if ($validasi_email->num_rows() > 0) {
	
			// Validasi password
			$validate_ps = $this->Mlogin->query_validasi_password($email, $password);
			if ($validate_ps->num_rows() > 0) {
	
				// Ambil data user
				$x = $validate_ps->row_array();
				if ($x['user_status'] == '1') {
	
					// Set session data
					$this->session->set_userdata('logged', TRUE);
					$this->session->set_userdata('user', $email);
					$id = $x['user_id'];
					$name = $x['user_name'];
	
					// Cek akses user
					if ($x['user_akses'] == '1') { // Administrator
						$this->session->set_userdata('access', 'Administrator');
					} elseif ($x['user_akses'] == '2') { // Dosen
						$this->session->set_userdata('access', 'Dosen');
					} elseif ($x['user_akses'] == '3') { // Mahasiswa
						$this->session->set_userdata('access', 'Mahasiswa');
					}
	
					// Set data session
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('name', $name);
					
					// Redirect ke halaman home
					redirect(base_url('home'));;
				} else {
					// Akun diblokir
					$url = base_url('login');
					$this->session->set_flashdata('msg', 
						'<span onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-displaytopright">&times;</span>
						<h3>Uupps!</h3>
						<p>Akun kamu telah di blokir. Silahkan hubungi operator.</p>'
					);
					redirect($url);
				}
			} else {
				// Password salah
				$url = base_url('login');
				$this->session->set_flashdata('msg', 
					'<span onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-displaytopright">&times;</span>
					<h3>Uupps!</h3>
					<p>Password yang kamu masukan salah.</p>'
				);
				redirect($url);
			}
		} else {
			// Email salah
			$url = base_url('login');
			$this->session->set_flashdata('msg', 
				'<span onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-displaytopright">&times;</span>
				<h3>Uupps!</h3>
				<p>Email yang kamu masukan salah.</p>'
			);
			redirect($url);
		}
	}
	

    function logout() {
        $this->session->sess_destroy();
        redirect(base_url('login')); 
    }
}

