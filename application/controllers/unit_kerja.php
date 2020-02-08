<?php 

class Unit_kerja extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_unit_kerja');
		$this->load->helper('url');
		$this->load->library('session');
	}

	function index(){
		$data['pengguna'] = $this->m_unit_kerja->tampil_data()->result();
		$this->load->view('v_unit_kerja',$data);
	}

	
	function tambah_aksi(){
		
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');
		$pass = $this->input->post('pass');
		
		$data = array(
			'nip' => $nip,
			'nama' => $nama,
			'pass' => md5($this->input->post('pass'))
			);
		$this->m_unit_kerja->input_data($data,'pengguna');
		
		
		if($data == null) {
        $this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Input Gagal</p>
                </div>');    
        redirect('page/unit_kerja');
    	} else {    
        $this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Success</h4>
                    <p>Input Berhasil</p>
                </div>');    
		redirect('page/unit_kerja');
    	};
		
		//redirect('page/unit_kerja');
	}
	
	
	function profil($id){
		$where = array('id' => $id);
		$data['pengguna'] = $this->m_unit_kerja->edit_data($where,'pengguna')->result();
		$this->load->view('p_unit',$data);
	}
	

	function edit($id){
		$where = array('id' => $id);
		$data['pengguna'] = $this->m_unit_kerja->edit_data($where,'pengguna')->result();
		$this->load->view('v_eup',$data);
	}
	
	function update(){
		$id = $this->input->post('id');
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');
		$pass = $this->input->post('pass');
 
		$data = array(
				'id' => $id,
				'nip' => $nip,
				'nama' => $nama,
				'pass' => md5($this->input->post('pass'))
		);
 
	$where = array(
		'id' => $id
	);
 
	$this->m_unit_kerja->update_data($where,$data,'pengguna');

	if($data == null) {
        $this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Update Data Gagal</p>
                </div>');    
        redirect('page/unit_kerja');
    	} else {    
        $this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Success</h4>
                    <p>Update Data Berhasil</p>
                </div>');    
		redirect('page/unit_kerja');
    	};
	}
	
	
	
	function hapus($id){
		$where = array('id' => $id);
		$this->m_unit_kerja->hapus_data($where,'pengguna');
		
		if($id == null) {
        $this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Hapus Data Gagal</p>
                </div>');    
        redirect('page/unit_kerja');
    	} else {    
        $this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Success</h4>
                    <p>Hapus Data Berhasil</p>
                </div>');    
		redirect('page/unit_kerja');
    	};
		
		//redirect('page/unit_kerja');
	}
	
	
	
	function pass_up($id){
		$where = array('id' => $id);
		$data['pengguna'] = $this->m_unit_kerja->edit_data($where,'pengguna')->result();
		$this->load->view('v_pass_up',$data);
	}
	function pass(){
		$id = $this->input->post('id');
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');
		$pass = $this->input->post('pass');
 
		$data = array(
				'id' => $id,
				'nip' => $nip,
				'nama' => $nama,
				'pass' => md5($this->input->post('pass'))
		);
 
	$where = array(
		'id' => $id
	);
 
	$this->m_unit_kerja->update_data($where,$data,'pengguna');

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