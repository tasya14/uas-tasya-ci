<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	 public function __construct() {
		parent::__construct();
		$this->load->library('session');
	}
	
	public function index()
	{
		$this->load->helper('url');
		// $this->load->view('header/head');
		$this->load->view('admin/login');
		// $this->load->view('footer/footer');
	}
	public function dashboard()
	{
		// $this->load->view('header/head');
		$this->load->view('dashboard');
		// $this->load->view('footer/footer');
	}
	public function proses_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		echo $username;
		echo $password;
	}
	
}
