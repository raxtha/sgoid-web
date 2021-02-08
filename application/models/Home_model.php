<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model 
{	
    function __construct(){
		parent::__construct();
	}
	
	function search($filter, $keyword){
        if(is_array($filter)){
            $this->db->where($filter);
	    }

        if($keyword!=''){
            $keyword = $this->db->escape_like_str($keyword);
            $this->db->where("(siswa.nama like '%{$keyword}%')");
        }
    }
	
	function ambilSiswa(){   
        $this->db->select('count(siswa.id) as hitung');
    	$this->db->join('user', 'user.user=siswa.nis');
		$this->db->where('user.status', 'Aktif');
        $hasil = $this->db->get('siswa');
        return $hasil->row();
    }
	function ambilPendingSiswa(){   
        $this->db->select('count(siswa.id) as hitung');
    	$this->db->join('user', 'user.user=siswa.nis');
    	$this->db->where('user.status', 'Pending');
        $hasil = $this->db->get('siswa');
        return $hasil->row();
    }
	function ambilPengajar(){   
        $this->db->select('count(pengajar.id) as hitung');
    	$this->db->join('user', 'user.user=pengajar.nip');
    	$this->db->where('user.status', 'Aktif');
        $hasil = $this->db->get('pengajar');
        return $hasil->row();
    }
	function ambilPendingPengajar(){   
        $this->db->select('count(pengajar.id) as hitung');
    	$this->db->join('user', 'user.user=pengajar.nip');
    	$this->db->where('user.status', 'Pending');
        $hasil = $this->db->get('pengajar');
        return $hasil->row();
    }


}