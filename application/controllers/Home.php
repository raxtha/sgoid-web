<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();		
		$this->load->model('Home_model', 'home');
		$this->load->model('Login_model', 'login');
		$this->load->library('encrypt');
		
	}

	function index()
	{
		if ($this->session->userdata('level') == 'admin'){
		
		$data['judul']			= 'TEST';
		$data['main']			= 'home/home';

		$this->load->view('template/layout', $data);

			}
			else{
		$data['judul']			= 'Stagate';
		$data['main']			= 'home/home';

		$this->load->view('template/layout', $data);
			}
	}
	
}