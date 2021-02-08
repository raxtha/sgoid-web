<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{

	function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model', 'login');
        $this->load->model('Pengaturan_model', 'Pengaturan');
    }

	function index()
	{
		if ($this->session->userdata('level') =='admin'){
				redirect('home');
			}
			else {

		$data['judul']      = "LOGIN";
		$data['data']		= $this->Pengaturan->ambilPengaturan();

		$this->load->view('form_login',$data);
			}
	}
 
	function cek_validasi()
	{
		$username	= $this->input->post('username'); 
		$password	= $this->input->post('password');
//		$passwordx = 
//		"password = MD5(CONCAT(MD5(MD5('".$username."')),MD5(MD5('".$password."'))))";
		$hasil		= $this->login->validasi($username, $password);
//		$hasil		= $this->login->validasi($username, $passwordx);
		if (!$hasil){//jika hasilnya null / tidak sesuai 
			echo "<script>alert('Gagal Login: Cek username , password!');history.go(-1);</script>";
		} else {
			foreach($hasil as $sess)
            {
              $sess_data['logged_in'] 	= 'Sudah Login';
              $sess_data['id_user'] 	= $sess->id_user;
              $sess_data['username'] 	= $sess->username;
              $sess_data['level'] 		= $sess->level;
              $sess_data['nama'] 		= $sess->nama;
              $this->session->set_userdata($sess_data);
            }
			if ($this->session->userdata('level') =='admin'){
				redirect('home');
			}
			else if ($this->session->userdata('level') =='pengajar'){
				redirect('home');
			}
			else if ($this->session->userdata('level') =='siswa'){
				redirect('home');
			}else {
				echo "<script>alert('Login lagi');history.go(-1);</script>";
			}
		}
	}
 
	function logout() {
		$id = $this->session->userdata('id_user');
		$this->login->history($id);
		
		$this->session->sess_destroy();
		redirect('login');
	} 
}