<?php 

class M_biodata extends CI_Model{
	function tampil_data(){
		return $this->db->get('biodata');
	}
	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}