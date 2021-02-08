<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Player_model', 'Player');
		$this->load->library('encrypt');
		// $this->load->library('Fpdf');
	}

	function index()
	{
		$data['form_aksi']		= 'register/proses_tambah';
		$data['judul']			= 'Registrasi';
		$data['main']			= 'register/player_add';

		$this->load->view('template/layout', $data);
	}

	function proses_tambah()
	{
		$y = $this->input->post('data[username]');
		$cek = $this->db->query("Select username from accinfo where username='$y'") ->num_rows();

		if ($cek>0){
			$this->session->set_flashdata('pesanlink', 'Username Sudah Digunakan');
			
			redirect('register');			
		}else{
		
		$data	= $this->input->post('data');
				$sql = "insert into accinfo values ('0', '100001', '2005-02-01 00:00:00', '".$this->input->post('username')."', '".$this->input->post('password')."', 
				'1', '1', '0', '2100-01-01 00:00:00', '2', '".$this->input->post('email')."', '', '1', '', '', '', '1', '2100-01-01', '1970-01-01 00:00:00','')";
		if(!$this->db->query($sql)){
			$this->session->set_flashdata('pesanlink', 'gagal');	
		}else{
				$this->Player->tambahData($data);				
				$this->session->set_flashdata('pesanlink', 'Data Berhasil Disimpan');

				redirect('register');
		}
				
		}	
	}

	
}