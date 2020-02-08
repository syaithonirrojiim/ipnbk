<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
	
	//m_biodata
	$this->load->model('m_biodata');
                $this->load->helper('url');
	
	//m_komitmen
	$this->load->model('m_komitmen');
                $this->load->helper('url');
				
	//m_unit_kerja
	$this->load->model('m_unit_kerja');
                $this->load->helper('url');
				
	//m_co_ad
	$this->load->model('m_co_ad');
                $this->load->helper('url');
				
				
	$this->load->model('m_dashboard');
                $this->load->helper('url');
				
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
  }
 
 
 //Index Dasboard
  function index(){
    $this->load->view('v_dashboard');
  }
  
  
  
  
  
  //TABEL PENGGUNA
  function unit_kerja(){
	$data['pengguna'] = $this->m_unit_kerja->tampil_data()->result();
    $this->load->view('v_unit_kerja', $data);
  }
  function tambah_pegawai(){
		$this->load->view('v_iup');
	}
  
  
  
  
  //TABEL CO-ADMIN
  function co_admin(){
	$data['admin'] = $this->m_co_ad->tampil_data()->result();
    $this->load->view('v_co_ad', $data);
  }
  function tambah_co_ad(){
		$this->load->view('v_iac');
	}
}