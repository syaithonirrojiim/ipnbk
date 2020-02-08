<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_view extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function tampil_data(){
		return $this->db->get('pengguna');
	}
	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
		
		
		
	}
	// Listing
	public function listing_pr(){
		$this->db->select('*');
		$this->db->from('komitmen_pr');
		$this->db->join('profesionalisme_pr','profesionalisme_pr.id_kabeh = komitmen_pr.id_kabeh');
		$this->db->join('keteladanan_pr','keteladanan_pr.id_kabeh = profesionalisme_pr.id_kabeh');
		$this->db->join('integritas_pr','integritas_pr.id_kabeh = keteladanan_pr.id_kabeh');
		$this->db->join('disiplin_pr','disiplin_pr.id_kabeh = integritas_pr.id_kabeh');
		$this->db->join('biodata','biodata.id_kabeh = disiplin_pr.id_kabeh');
		
		$query = $this->db->get();
		return $query->result();
	}
	
	public function listing_lk(){
		$this->db->select('*');
		$this->db->from('komitmen_lk');
		$this->db->join('profesionalisme_lk','profesionalisme_lk.id_kabeh = komitmen_lk.id_kabeh');
		$this->db->join('keteladanan_lk','keteladanan_lk.id_kabeh = profesionalisme_lk.id_kabeh');
		$this->db->join('integritas_lk','integritas_lk.id_kabeh = keteladanan_lk.id_kabeh');
		$this->db->join('disiplin_lk','disiplin_lk.id_kabeh = integritas_lk.id_kabeh');
		$this->db->join('biodata','biodata.id_kabeh = disiplin_lk.id_kabeh');
		
		$query = $this->db->get();
		return $query->result();
	}

	//AVERAGE PEREMPUAN
	public function av_apr(){
		$sql="SELECT AVG(a1) as a1, AVG(a2) AS a2, AVG(a3) as a3, AVG(a4) as a4, AVG(a5) AS a5, AVG(a6) AS a6, AVG(a7) AS a7, AVG(a8) AS a8 from komitmen_pr;";
	    $query = $this->db->query($sql);
		return $query->row();
	}
	public function av_bpr(){
		$sql="SELECT AVG(b1) as b1, AVG(b2) AS b2, AVG(b3) as b3, AVG(b4) as b4, AVG(b5) AS b5, AVG(b6) AS b6 from keteladanan_pr;";
	    $query = $this->db->query($sql);
		return $query->row();
	}
	public function av_cpr(){
		$sql="SELECT AVG(c1) as c1, AVG(c2) AS c2, AVG(c3) as c3, AVG(c4) as c4, AVG(c5) AS c5, AVG(c6) AS c6 from profesionalisme_pr;";
	    $query = $this->db->query($sql);
		return $query->row();
	}
	public function av_dpr(){
		$sql="SELECT AVG(d1) as d1, AVG(d2) AS d2, AVG(d3) as d3, AVG(d4) as d4, AVG(d5) AS d5 from integritas_pr;";
	    $query = $this->db->query($sql);
		return $query->row();
	}
	public function av_epr(){
		$sql="SELECT AVG(e1) as e1, AVG(e2) AS e2, AVG(e3) as e3, AVG(e4) as e4 from disiplin_pr;";
	    $query = $this->db->query($sql);
		return $query->row();
	}
	//END OF AVG PEREMPUAN
	
	
	//AVERAGE LAKI-LAKI
	public function av_alk(){
		$sql="SELECT AVG(a1) as a1, AVG(a2) AS a2, AVG(a3) as a3, AVG(a4) as a4, AVG(a5) AS a5, AVG(a6) AS a6, AVG(a7) AS a7, AVG(a8) AS a8 from komitmen_lk;";
	    $query = $this->db->query($sql);
		return $query->row();
	}
	public function av_blk(){
		$sql="SELECT AVG(b1) as b1, AVG(b2) AS b2, AVG(b3) as b3, AVG(b4) as b4, AVG(b5) AS b5, AVG(b6) AS b6 from keteladanan_lk;";
	    $query = $this->db->query($sql);
		return $query->row();
	}
	public function av_clk(){
		$sql="SELECT AVG(c1) as c1, AVG(c2) AS c2, AVG(c3) as c3, AVG(c4) as c4, AVG(c5) AS c5, AVG(c6) AS c6 from profesionalisme_lk;";
	    $query = $this->db->query($sql);
		return $query->row();
	}
	public function av_dlk(){
		$sql="SELECT AVG(d1) as d1, AVG(d2) AS d2, AVG(d3) as d3, AVG(d4) as d4, AVG(d5) AS d5 from integritas_lk;";
	    $query = $this->db->query($sql);
		return $query->row();
	}
	public function av_elk(){
		$sql="SELECT AVG(e1) as e1, AVG(e2) AS e2, AVG(e3) as e3, AVG(e4) as e4 from disiplin_lk;";
	    $query = $this->db->query($sql);
		return $query->row();
	}

}