<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Player_model extends CI_Model 
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
            $this->db->where("(user.nama like '%{$keyword}%')");
        }
    }
	
    function tambahData($data)
    {
		
		return $this->db->insert('accinfo', $data);
	}
	
    function editData($id, $data)
    {
    	$this->db->where('id', $id);
    	return $this->db->update('siswa', $data);
	}

    function hapusData($id)
    {
    	$this->db->where('id', $id);
    	return $this->db->delete('siswa');
	}
}