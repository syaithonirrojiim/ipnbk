<?php 

class M_intro extends CI_Model{
	function tampil_data(){
		return $this->db->get('status');
	}
}