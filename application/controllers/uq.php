<?php 

class Uq extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_uq');
		$this->load->helper('url');
		$this->load->library('session');
	}
	
	function index(){
		$this->load->view('v_uq');
		
	}
	
	function tambah_aksi(){
		//biodata
		$nama_unit_kerja = $this->input->post('nama_unit_kerja');
		$id_kabeh = $this->input->post('id_kabeh');
		$status = $this->input->post('status');
		$jabatan = $this->input->post('jabatan');
		$golongan = $this->input->post('golongan');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$umur = $this->input->post('umur');
		$pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
		
		//komitmen
		$a1 = $this->input->post('a1');
		$a2 = $this->input->post('a2');
		$a3 = $this->input->post('a3');
		$a4 = $this->input->post('a4');
		$a5 = $this->input->post('a5');
		$a6 = $this->input->post('a6');
		$a7 = $this->input->post('a7');
		$a8 = $this->input->post('a8');
		
		//ketaladanan
		$b1 = $this->input->post('b1');
		$b2 = $this->input->post('b2');
		$b3 = $this->input->post('b3');
		$b4 = $this->input->post('b4');
		$b5 = $this->input->post('b5');
		$b6 = $this->input->post('b6');
		
		//profesionalisme
		$c1 = $this->input->post('c1');
		$c2 = $this->input->post('c2');
		$c3 = $this->input->post('c3');
		$c4 = $this->input->post('c4');
		$c5 = $this->input->post('c5');
		$c6 = $this->input->post('c6');
		
		//integritas
		$d1 = $this->input->post('d1');
		$d2 = $this->input->post('d2');
		$d3 = $this->input->post('d3');
		$d4 = $this->input->post('d4');
		$d5 = $this->input->post('d5');
		
		//disiplin
		$e1 = $this->input->post('e1');
		$e2 = $this->input->post('e2');
		$e3 = $this->input->post('e3');
		$e4 = $this->input->post('e4');
		
		if ((!empty($golongan)) && (!empty($a1)) && (!empty($a2)) && (!empty($a3)) && (!empty($a4)) && (!empty($a5)) && (!empty($a6)) && (!empty($a7)) && (!empty($a8)) && (!empty($b1)) && (!empty($b2)) && (!empty($b3)) && (!empty($b4)) && (!empty($b5)) && (!empty($b6)) && (!empty($c1)) && (!empty($c2)) && 
		(!empty($c3)) && (!empty($c4)) && (!empty($c5)) && (!empty($c6)) && (!empty($d1)) && (!empty($d2)) && (!empty($d3)) && (!empty($d4)) && 
		(!empty($d5)) && (!empty($e1)) && (!empty($e2)) && (!empty($e3)) && (!empty($e4))){
		
		if($jenis_kelamin == 'Perempuan'){ /*---------------------------------TEPI BATAS BY RAHMAT-----------------------------------------------*/
			
			//BIODATA
			$data = array(
				'id_kabeh' 		=> $id_kabeh,
				'nama_unit_kerja' => $nama_unit_kerja,
				'jabatan' 		=> $jabatan,
				'golongan' 		=> $golongan,
				'jenis_kelamin'	=> $jenis_kelamin,
				'umur'			=> $umur,
				'pendidikan_terakhir' => $pendidikan_terakhir
			
			);
			$this->m_uq->input_data($data,'biodata');
			
			//STATUS
			$sudah = array(
				'status' => $status,
			);
 
			$where = array(
			'id' => $id_kabeh
			);
			$this->m_uq->update_data($where,$sudah,'pengguna');
			
			//KOMITMEN
			$komitmen = array(
				'id_kabeh' 		=> $id_kabeh,
				'a1'			=> $a1,
				'a2'			=> $a2,
				'a3'			=> $a3,
				'a4'			=> $a4,
				'a5'			=> $a5,
				'a6'			=> $a6,
				'a7'			=> $a7,
				'a8'			=> $a8
			);
			$this->m_uq->input_data($komitmen,'komitmen_pr');
			
			//KETELADANAN
			$keteladanan = array(
				'id_kabeh' 		=> $id_kabeh,
				'b1'			=> $b1,
				'b2'			=> $b2,
				'b3'			=> $b3,
				'b4'			=> $b4,
				'b5'			=> $b5,
				'b6'			=> $b6				
			);
			$this->m_uq->input_data($keteladanan,'keteladanan_pr');
			
			//PROFESIONALISME
			$profesionalisme = array(
				'id_kabeh' 		=> $id_kabeh,
				'c1'			=> $c1,
				'c2'			=> $c2,
				'c3'			=> $c3,
				'c4'			=> $c4,
				'c5'			=> $c5,
				'c6'			=> $c6
			);
			$this->m_uq->input_data($profesionalisme,'profesionalisme_pr');
			
			//INTEGRITAS
			$integritas = array(
				'id_kabeh' 		=> $id_kabeh,
				'd1'			=> $d1,
				'd2'			=> $d2,
				'd3'			=> $d3,
				'd4'			=> $d4,
				'd5'			=> $d5
			);
			$this->m_uq->input_data($integritas,'integritas_pr');
			
			//DISIPLIN
			$disiplin = array(
				'id_kabeh' 		=> $id_kabeh,
				'e1'			=> $e1,
				'e2'			=> $e2,
				'e3'			=> $e3,
				'e4'			=> $e4
			);
			$this->m_uq->input_data($disiplin,'disiplin_pr');
			
			$this->session->set_flashdata(
					'msg', 
                	'<div class="alert alert-success">
                    <h4>Success</h4>
                    <p>Input Berhasil</p>
                	</div>'
				);    
				redirect('quiz');
		
		}else{	
			//BIODATA
			$data = array(
				'id_kabeh' 		=> $id_kabeh,
				'nama_unit_kerja' => $nama_unit_kerja,
				'jabatan' 		=> $jabatan,
				'golongan' 		=> $golongan,
				'jenis_kelamin'	=> $jenis_kelamin,
				'umur'			=> $umur,
				'pendidikan_terakhir' => $pendidikan_terakhir
			
			);
			$this->m_uq->input_data($data,'biodata');
			
			//STATUS
			$sudah = array(
				'status' => $status,
			);
 
			$where = array(
			'id' => $id_kabeh
			);
			$this->m_uq->update_data($where,$sudah,'pengguna');
			
			//KOMITMEN
			$komitmen = array(
				'id_kabeh' 		=> $id_kabeh,
				'a1'			=> $a1,
				'a2'			=> $a2,
				'a3'			=> $a3,
				'a4'			=> $a4,
				'a5'			=> $a5,
				'a6'			=> $a6,
				'a7'			=> $a7,
				'a8'			=> $a8
			);
			$this->m_uq->input_data($komitmen,'komitmen_lk');
			
			//KETELADANAN
			$keteladanan = array(
				'id_kabeh' 		=> $id_kabeh,
				'b1'			=> $b1,
				'b2'			=> $b2,
				'b3'			=> $b3,
				'b4'			=> $b4,
				'b5'			=> $b5,
				'b6'			=> $b6				
			);
			$this->m_uq->input_data($keteladanan,'keteladanan_lk');
			
			//PROFESIONALISME
			$profesionalisme = array(
				'id_kabeh' 		=> $id_kabeh,
				'c1'			=> $c1,
				'c2'			=> $c2,
				'c3'			=> $c3,
				'c4'			=> $c4,
				'c5'			=> $c5,
				'c6'			=> $c6
			);
			$this->m_uq->input_data($profesionalisme,'profesionalisme_lk');
			
			//INTEGRITAS
			$integritas = array(
				'id_kabeh' 		=> $id_kabeh,
				'd1'			=> $d1,
				'd2'			=> $d2,
				'd3'			=> $d3,
				'd4'			=> $d4,
				'd5'			=> $d5
			);
			$this->m_uq->input_data($integritas,'integritas_lk');
			
			//DISIPLIN
			$disiplin = array(
				'id_kabeh' 		=> $id_kabeh,
				'e1'			=> $e1,
				'e2'			=> $e2,
				'e3'			=> $e3,
				'e4'			=> $e4
			);
			$this->m_uq->input_data($disiplin,'disiplin_lk');
			
			$this->session->set_flashdata(
					'msg', 
                	'<div class="alert alert-success">
                    <h4>Success</h4>
                    <p>Input Berhasil</p>
                	</div>'
				);    
				redirect('quiz');
			
		}
		}else{
			$this->session->set_flashdata(
					'msg', 
                	'<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Input Gagal, Lengkapi quisioner anda</p>
                	</div>'
				);
			redirect('quiz');
		}
		//redirect('page/unit_kerja');
	}
}