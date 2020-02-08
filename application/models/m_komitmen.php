<?php 

class M_komitmen extends CI_Model{
	function tampil_data(){
		return $this->db->get('komitmen');
	}
	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}