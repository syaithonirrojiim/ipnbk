<?php 

class Biodata extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_biodata');
                $this->load->helper('url');
	}

	function index(){
		$data['biodata'] = $this->m_biodata->tampil_data()->result();
		$this->load->view('v_biodata',$data);
	}
	
	function tambah(){
		$this->load->view('v_ib');
	}
	
	function tambah_aksi(){
		$nama_unit_kerja = $this->input->post('nama_unit_kerja');
		$jabatan = $this->input->post('jabatan');
		$golongan = $this->input->post('golongan');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$umur = $this->input->post('umur');
		$pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
 
		$data = array(
			'nama_unit_kerja' => $nama_unit_kerja,
			'jabatan' => $jabatan,
			'golongan' => $golongan,
			'jenis_kelamin' => $jenis_kelamin,
			'umur' => $umur,
			'pendidikan_terakhir' => $pendidikan_terakhir
			);
		$this->m_biodata->input_data($data,'biodata');
		redirect('biodata/index');
	}
}