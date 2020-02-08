<?php 

class Co_admin extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_co_ad');
		$this->load->helper('url');
		$this->load->library('session');
	}

	function index(){
		$data['admin'] = $this->m_co_ad->tampil_data()->result();
		$this->load->view('v_co_ad',$data);
	}

	
	function tambah_aksi(){
		$id_admin = $this->input->post('id_admin');
		$nama = $this->input->post('nama');
		$pass = $this->input->post('pass');
		$level = $this->input->post('level');
		
		$data = array(
			'id_admin' => $id_admin,
			'nama' => $nama,
			'pass' => md5($this->input->post('pass')),
			'level' => $level
			);
		$this->m_co_ad->input_data($data,'admin');
		
		
		if($data == null) {
        $this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Input Gagal</p>
                </div>');    
        redirect('page/co_admin');
    	} else {    
        $this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Success</h4>
                    <p>Input Berhasil</p>
                </div>');    
		redirect('page/co_admin');
    	};
		
		//redirect('page/co_admin');
	}
	
	function profil($id){
		$where = array('id' => $id);
		$data['admin'] = $this->m_co_ad->edit_data($where,'admin')->result();
		$this->load->view('p_admin',$data);
	}

	function edit($id){
		$where = array('id' => $id);
		$data['admin'] = $this->m_co_ad->edit_data($where,'admin')->result();
		$this->load->view('v_eco',$data);
	}
	
	function update(){
		$id = $this->input->post('id');
		$id_admin = $this->input->post('id_admin');
		$nama = $this->input->post('nama');
		$pass = $this->input->post('pass');
 
		$data = array(
				'id' => $id,
				'id_admin' => $id_admin,
				'nama' => $nama,
				'pass' => md5($this->input->post('pass'))
		);
 
	$where = array(
		'id' => $id
	);
 
	$this->m_co_ad->update_data($where,$data,'admin');

	if($data == null) {
        $this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Update Data Gagal</p>
                </div>');    
        redirect('page/co_admin');
    	} else {    
        $this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Success</h4>
                    <p>Update Data Berhasil</p>
                </div>');    
		redirect('page/co_admin');
    	};
	}
	
	
	
	function hapus($id){
		$where = array('id' => $id);
		$this->m_co_ad->hapus_data($where,'admin');
		
		if($id == null) {
        $this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Hapus Data Gagal</p>
                </div>');    
        redirect('page/co_admin');
    	} else {    
        $this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Success</h4>
                    <p>Hapus Data Berhasil</p>
                </div>');    
		redirect('page/co_admin');
    	};
		
		//redirect('page/co_admin');
	}
	
	
	
	
	function pass_ad($id){
		$where = array('id' => $id);
		$data['admin'] = $this->m_co_ad->edit_data($where,'admin')->result();
		$this->load->view('v_pass_ad',$data);
	}
	function pass(){
		$id = $this->input->post('id');
		$id_admin = $this->input->post('id_admin');
		$nama = $this->input->post('nama');
		$pass = $this->input->post('pass');
 
		$data = array(
				'id' => $id,
				'id_admin' => $id_admin,
				'nama' => $nama,
				'pass' => md5($this->input->post('pass'))
		);
 
	$where = array(
		'id' => $id
	);
 
	$this->m_co_ad->update_data($where,$data,'admin');

	if($data == null) {
        $this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Update Data Gagal</p>
                </div>');    
        redirect('page');
    	} else {    
        $this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Success</h4>
                    <p>Update Data Berhasil</p>
                </div>');    
		redirect('page');
    	};
	}
}