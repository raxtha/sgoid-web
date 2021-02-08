<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
class Login_model extends CI_Model
{

	function validasi($username, $passwordx)
    {
        $this->db->select('user.*');
        $this->db->where('username', $username);
        $this->db->where($passwordx);
        $this->db->where('status', 'Aktif');
        $hasil = $this->db->get('user');
        if ($hasil->num_rows() == 1){
        	return $hasil->result();
        } else {
        	return false;
        }
    }
	function history($id)
    {
//        $this->db->where('id_user', $id);
		$sql = "UPDATE user SET waktu = NOW() WHERE id_user = '".$id."'";
		
        return $this->db->query($sql);
    }
	function pengajar($id)
    {
    	$this->db->select('user.*, pengajar.status');        
    	$this->db->join('pengajar', 'pengajar.nip=user.user');
        $this->db->where('user.id_user', $id);
        $hasil = $this->db->get('user');
        
        return $hasil->row();
    }


}