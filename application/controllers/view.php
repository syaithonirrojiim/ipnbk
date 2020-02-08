<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

// Load library phpspreadsheet
require('./excel/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
// End load library phpspreadsheet

class View extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_view');
		$this->load->helper('url');
		$this->load->library('session');
		
	}
	
	function status(){
		$data['pengguna'] = $this->m_view->tampil_data()->result();
		$this->load->view('v_ad_quiz',$data);
	}
	
	function isi($id){
		$data = array(
				'status' => '1'
		);
 
	$where = array(
		'id' => $id
	);
 
	$this->m_view->update_data($where,$data,'pengguna');

	if($data == null) {
        $this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Update Data Gagal</p>
                </div>');    
        redirect('view/status');
    	} else {    
        $this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Success</h4>
                    <p>Update Data Berhasil</p>
                </div>');    
		redirect('view/status');
    	};
	}
	
	function kosong($id){
		$data = array(
				'status' => '0'
		);
 
	$where = array(
		'id' => $id
	);
 
	$this->m_view->update_data($where,$data,'pengguna');
	
	$where = array('id_kabeh' => $id);
	$this->m_view->hapus_data($where,'biodata');
	
	$where = array('id_kabeh' => $id);
	$this->m_view->hapus_data($where,'komitmen_pr');
	
	$where = array('id_kabeh' => $id);
	$this->m_view->hapus_data($where,'komitmen_lk');
	
	$where = array('id_kabeh' => $id);
	$this->m_view->hapus_data($where,'keteladanan_pr');
	
	$where = array('id_kabeh' => $id);
	$this->m_view->hapus_data($where,'keteladanan_lk');
	
	$where = array('id_kabeh' => $id);
	$this->m_view->hapus_data($where,'profesionalisme_pr');
	
	$where = array('id_kabeh' => $id);
	$this->m_view->hapus_data($where,'profesionalisme_lk');
	
	$where = array('id_kabeh' => $id);
	$this->m_view->hapus_data($where,'integritas_pr');
	
	$where = array('id_kabeh' => $id);
	$this->m_view->hapus_data($where,'integritas_lk');
	
	$where = array('id_kabeh' => $id);
	$this->m_view->hapus_data($where,'disiplin_pr');
	
	$where = array('id_kabeh' => $id);
	$this->m_view->hapus_data($where,'disiplin_lk');
		
	if($data == null) {
        $this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Update Data Gagal</p>
                </div>');    
        redirect('view/status');
    	} else {    
        $this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Success</h4>
                    <p>Update Data Berhasil</p>
                </div>');    
		redirect('view/status');
    	};
	}
	
	
	
	
	
	
	
	
	//CETAK SPREADSHEET
	public function export(){
		
		// Create new Spreadsheet object
		$spreadsheet = new Spreadsheet();

		$spreadsheet->createSheet(1);
		$sheet2 = $spreadsheet->getSheet(1)->setTitle('PEREMPUAN '.date('d-m-Y H'));

		// Set document properties
		$spreadsheet->getProperties()->setCreator('http://twitter.com/ra_hidayatulloh')
		->setLastModifiedBy('http://instagram.com/ra.hidayatulloh')
		->setTitle('Office 2007 XLSX Test Document')
		->setSubject('Office 2007 XLSX Test Document')
		->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')
		->setKeywords('office 2007 openxml php')
		->setCategory('Test result file');
		
		$lk = $this->m_view->listing_lk();
		
		
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('A1:I1')
		->setCellValue('A1', 'LAKI-LAKI')
		;
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('A2:A4')
		->setCellValue('A2', 'STAF/UNIT KERJA');
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('AE2:AE4')
		->setCellValue('AE2', 'TOTAL RATA-RATA');
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('B2:AD2')
		->setCellValue('B2', 'NILAI KOMPONEN BUDAYA KERJA');
		
		// Add some data (K)
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('B3:I3')
		->setCellValue('B3', 'KOMITMEN (K)')
		->setCellValue('B4', '1.1')
		->setCellValue('C4', '1.2')
		->setCellValue('D4', '1.3')
		->setCellValue('E4', '1.4')
		->setCellValue('F4', '1.5')
		->setCellValue('G4', '1.6')
		->setCellValue('H4', '1.7')
		->setCellValue('I4', '1.8');
		
		// Add some data (KL)
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('J3:O3')
		->setCellValue('J3', 'KETELADANAN (KL)')
		->setCellValue('J4', '2.1')
		->setCellValue('K4', '2.2')
		->setCellValue('L4', '2.3')
		->setCellValue('M4', '2.4')
		->setCellValue('N4', '2.5')
		->setCellValue('O4', '2.6');
		
		// Add some data (PRO)
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('P3:U3')
		->setCellValue('P3', 'PROFESIONALISME (PRO)')
		->setCellValue('P4', '3.1')
		->setCellValue('Q4', '3.2')
		->setCellValue('R4', '3.3')
		->setCellValue('S4', '3.4')
		->setCellValue('T4', '3.5')
		->setCellValue('U4', '3.6');
		
		// Add some data (INT)
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('V3:Z3')
		->setCellValue('V3', 'INTEGRITAS (INT)')
		->setCellValue('V4', '4.1')
		->setCellValue('W4', '4.2')
		->setCellValue('X4', '4.3')
		->setCellValue('Y4', '4.4')
		->setCellValue('Z4', '4.5');
		
		// Add some data (DISP)
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('AA3:AD3')
		->setCellValue('AA3', 'DISIPLIN (DISP)')
		->setCellValue('AA4', '5.1')
		->setCellValue('AB4', '5.2')
		->setCellValue('AC4', '5.3')
		->setCellValue('AD4', '5.4');
		
		// Miscellaneous glyphs, UTF-8 (K)
		$i=5; //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<baris awal nilai
		foreach($lk as $lk) {
		$TOTAL_AV		= (($lk->a1) + ($lk->a2) + ($lk->a3) + ($lk->a4) + ($lk->a5) + ($lk->a6) + ($lk->a7) + ($lk->a8) + ($lk->b1) + ($lk->b2) + ($lk->b3) + ($lk->b4) + ($lk->b5) + ($lk->b6) + ($lk->c1) + ($lk->c2) + ($lk->c3) + ($lk->c4) + ($lk->c5) + ($lk->c6) + ($lk->d1) + ($lk->d2) + ($lk->d3) + ($lk->d4) + ($lk->d5) + ($lk->e1) + ($lk->e2) + ($lk->e3) + ($lk->e4)) / 29;

			
			$spreadsheet->setActiveSheetIndex(0)
			->setCellValue('A'.$i, $lk->nama_unit_kerja)
			//---KOMITMEN---
			->setCellValue('B'.$i, $lk->a1)
			->setCellValue('C'.$i, $lk->a2)
			->setCellValue('D'.$i, $lk->a3)
			->setCellValue('E'.$i, $lk->a4)
			->setCellValue('F'.$i, $lk->a5)
			->setCellValue('G'.$i, $lk->a6)
			->setCellValue('H'.$i, $lk->a7)
			->setCellValue('I'.$i, $lk->a8)//--------------------TEPI BATAS
			->setCellValue('J'.$i, $lk->b1)
			->setCellValue('K'.$i, $lk->b2)
			->setCellValue('L'.$i, $lk->b3)
			->setCellValue('M'.$i, $lk->b4)
			->setCellValue('N'.$i, $lk->b5)
			->setCellValue('O'.$i, $lk->b6)//--------------------TEPI BATAS
			->setCellValue('P'.$i, $lk->c1)
			->setCellValue('Q'.$i, $lk->c2)
			->setCellValue('R'.$i, $lk->c3)
			->setCellValue('S'.$i, $lk->c4)
			->setCellValue('T'.$i, $lk->c5)
			->setCellValue('U'.$i, $lk->c6)//--------------------TEPI BATAS
			->setCellValue('V'.$i, $lk->d1)
			->setCellValue('W'.$i, $lk->d2)
			->setCellValue('X'.$i, $lk->d3)
			->setCellValue('Y'.$i, $lk->d4)
			->setCellValue('Z'.$i, $lk->d5)//--------------------TEPI BATAS
			->setCellValue('AA'.$i, $lk->e1)
			->setCellValue('AB'.$i, $lk->e2)
			->setCellValue('AC'.$i, $lk->e3)
			->setCellValue('AD'.$i, $lk->e4)
			->setCellValue('AE'.$i, $TOTAL_AV)//--------------------TEPI BATAS
			;
			$i++;
		}
		
		$apg = $this->m_view->av_alk();
		$bpg = $this->m_view->av_blk();
		$cpg = $this->m_view->av_clk();
		$dpg = $this->m_view->av_dlk();
		$epg = $this->m_view->av_elk();
		
		
		
		$kbk_k = (($apg->a1) + ($apg->a2) + ($apg->a3) + ($apg->a4) + ($apg->a5) + ($apg->a6) + ($apg->a7) + ($apg->a8)) / 8;
		$kbk_kl = (($bpg->b1) + ($bpg->b2) + ($bpg->b3) + ($bpg->b4) + ($bpg->b5) + ($bpg->b6)) / 6;
		$kbk_pro = (($cpg->c1) + ($cpg->c2) + ($cpg->c3) + ($cpg->c4) + ($cpg->c5) + ($cpg->c6)) / 6;
		$kbk_int = (($dpg->d1) + ($dpg->d2) + ($dpg->d3) + ($dpg->d4) + ($dpg->d5)) / 5;
		$kbk_disp = (($epg->e1) + ($epg->e2) + ($epg->e3) + ($epg->e4)) / 4;
		
		$ibk = ($kbk_k + $kbk_kl + $kbk_pro + $kbk_int + $kbk_disp) / 5;
		
		$N_KBK = $ibk * 25;
				
		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A52', 'Nilai KBK')
		->mergeCells('B52:I52')->setCellValue('B52', $kbk_k)
		->mergeCells('J52:O52')->setCellValue('J52', $kbk_kl)
		->mergeCells('P52:U52')->setCellValue('P52', $kbk_pro)
		->mergeCells('V52:Z52')->setCellValue('V52', $kbk_int)
		->mergeCells('AA52:AD52')->setCellValue('AA52', $kbk_k)
		->setCellValue('A53', 'Nilai IBK')
		->setCellValue('B53', $ibk)
		->setCellValue('A55', 'Nilai KUALITAS BK')
		->setCellValue('B55', $N_KBK)
		;
		
		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A50', 'Nilai Rata-Rata')
		->setCellValue('B50', $apg->a1)
		->setCellValue('C50', $apg->a2)
		->setCellValue('D50', $apg->a3)
		->setCellValue('E50', $apg->a4)
		->setCellValue('F50', $apg->a5)
		->setCellValue('G50', $apg->a6)
		->setCellValue('H50', $apg->a7)
		->setCellValue('I50', $apg->a8)
		->setCellValue('J50', $bpg->b1)
		->setCellValue('K50', $bpg->b2)
		->setCellValue('L50', $bpg->b3)
		->setCellValue('M50', $bpg->b4)
		->setCellValue('N50', $bpg->b5)
		->setCellValue('O50', $bpg->b6)
		->setCellValue('P50', $cpg->c1)
		->setCellValue('Q50', $cpg->c2)
		->setCellValue('R50', $cpg->c3)
		->setCellValue('S50', $cpg->c4)
		->setCellValue('T50', $cpg->c5)
		->setCellValue('U50', $cpg->c6)
		->setCellValue('V50', $dpg->d1)
		->setCellValue('W50', $dpg->d2)
		->setCellValue('X50', $dpg->d3)
		->setCellValue('Y50', $dpg->d4)
		->setCellValue('Z50', $dpg->d5)
		->setCellValue('AA50', $epg->e1)
		->setCellValue('AB50', $epg->e2)
		->setCellValue('AC50', $epg->e3)
		->setCellValue('AD50', $epg->e4)
		;
		
		
		//8888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888
		//77777777777777777777777777777777777777   B A T A S P R 888888888888888888888888888888888888888888888888888888888
		

		
		$pr = $this->m_view->listing_pr();
		// Add some data (K)
		$spreadsheet->getSheetByName('PEREMPUAN '.date('d-m-Y H'))->mergeCells('A1:I1')
		->setCellValue('A1', 'PEREMPUAN');
		$spreadsheet->getSheetByName('PEREMPUAN '.date('d-m-Y H'))->mergeCells('A2:A4')
		->setCellValue('A2', 'STAF/UNIT KERJA');
		$spreadsheet->getSheetByName('PEREMPUAN '.date('d-m-Y H'))->mergeCells('AE2:AE4')
		->setCellValue('AE2', 'TOTAL RATA-RATA');
		$spreadsheet->getSheetByName('PEREMPUAN '.date('d-m-Y H'))->mergeCells('B2:AD2')
		->setCellValue('B2', 'NILAI KOMPONEN BUDAYA KERJA');
		
		// Add some data (K)
		$spreadsheet->getSheetByName('PEREMPUAN '.date('d-m-Y H'))->mergeCells('B3:I3')
		->setCellValue('B3', 'KOMITMEN (K)')
		->setCellValue('B4', '1.1')
		->setCellValue('C4', '1.2')
		->setCellValue('D4', '1.3')
		->setCellValue('E4', '1.4')
		->setCellValue('F4', '1.5')
		->setCellValue('G4', '1.6')
		->setCellValue('H4', '1.7')
		->setCellValue('I4', '1.8');
		
		// Add some data (KL)
		$spreadsheet->getSheetByName('PEREMPUAN '.date('d-m-Y H'))->mergeCells('J3:O3')
		->setCellValue('J3', 'KETELADANAN (KL)')
		->setCellValue('J4', '2.1')
		->setCellValue('K4', '2.2')
		->setCellValue('L4', '2.3')
		->setCellValue('M4', '2.4')
		->setCellValue('N4', '2.5')
		->setCellValue('O4', '2.6');
		
		// Add some data (PRO)
		$spreadsheet->getSheetByName('PEREMPUAN '.date('d-m-Y H'))->mergeCells('P3:U3')
		->setCellValue('P3', 'PROFESIONALISME (PRO)')
		->setCellValue('P4', '3.1')
		->setCellValue('Q4', '3.2')
		->setCellValue('R4', '3.3')
		->setCellValue('S4', '3.4')
		->setCellValue('T4', '3.5')
		->setCellValue('U4', '3.6');
		
		// Add some data (INT)
		$spreadsheet->getSheetByName('PEREMPUAN '.date('d-m-Y H'))->mergeCells('V3:Z3')
		->setCellValue('V3', 'INTEGRITAS (INT)')
		->setCellValue('V4', '4.1')
		->setCellValue('W4', '4.2')
		->setCellValue('X4', '4.3')
		->setCellValue('Y4', '4.4')
		->setCellValue('Z4', '4.5');
		
		// Add some data (DISP)
		$spreadsheet->getSheetByName('PEREMPUAN '.date('d-m-Y H'))->mergeCells('AA3:AD3')
		->setCellValue('AA3', 'DISIPLIN (DISP)')
		->setCellValue('AA4', '5.1')
		->setCellValue('AB4', '5.2')
		->setCellValue('AC4', '5.3')
		->setCellValue('AD4', '5.4');		
		
		
		
		$avg = $this->m_view->av_apr();
		$bvg = $this->m_view->av_bpr();
		$cvg = $this->m_view->av_cpr();
		$dvg = $this->m_view->av_dpr();
		$evg = $this->m_view->av_epr();
		
		
		
		$kvk_k = (($avg->a1) + ($avg->a2) + ($avg->a3) + ($avg->a4) + ($avg->a5) + ($avg->a6) + ($avg->a7) + ($avg->a8)) / 8;
		$kvk_kl = (($bvg->b1) + ($bvg->b2) + ($bvg->b3) + ($bvg->b4) + ($bvg->b5) + ($bvg->b6)) / 6;
		$kvk_pro = (($cvg->c1) + ($cvg->c2) + ($cvg->c3) + ($cvg->c4) + ($cvg->c5) + ($cvg->c6)) / 6;
		$kvk_int = (($dvg->d1) + ($dvg->d2) + ($dvg->d3) + ($dvg->d4) + ($dvg->d5)) / 5;
		$kvk_disp = (($evg->e1) + ($evg->e2) + ($evg->e3) + ($evg->e4)) / 4;
		
		$ivk = ($kvk_k + $kvk_kl + $kvk_pro + $kvk_int + $kvk_disp) / 5;
		
		$N_KvK = $ivk * 25;
				
		$spreadsheet->getSheetByName('PEREMPUAN '.date('d-m-Y H'))
		->setCellValue('A52', 'Nilai KBK')
		->mergeCells('B52:I52')->setCellValue('B52', $kvk_k)
		->mergeCells('J52:O52')->setCellValue('J52', $kvk_kl)
		->mergeCells('P52:U52')->setCellValue('P52', $kvk_pro)
		->mergeCells('V52:Z52')->setCellValue('V52', $kvk_int)
		->mergeCells('AA52:AD52')->setCellValue('AA52', $kvk_k)
		->setCellValue('A53', 'Nilai IBK')
		->setCellValue('B53', $ivk)
		->setCellValue('A55', 'Nilai KUALITAS BK')
		->setCellValue('B55', $N_KvK)
		;
		
		$spreadsheet->getSheetByName('PEREMPUAN '.date('d-m-Y H'))
		->setCellValue('A50', 'Nilai Rata-Rata')
		->setCellValue('B50', $avg->a1)
		->setCellValue('C50', $avg->a2)
		->setCellValue('D50', $avg->a3)
		->setCellValue('E50', $avg->a4)
		->setCellValue('F50', $avg->a5)
		->setCellValue('G50', $avg->a6)
		->setCellValue('H50', $avg->a7)
		->setCellValue('I50', $avg->a8)
		->setCellValue('J50', $bvg->b1)
		->setCellValue('K50', $bvg->b2)
		->setCellValue('L50', $bvg->b3)
		->setCellValue('M50', $bvg->b4)
		->setCellValue('N50', $bvg->b5)
		->setCellValue('O50', $bvg->b6)
		->setCellValue('P50', $cvg->c1)
		->setCellValue('Q50', $cvg->c2)
		->setCellValue('R50', $cvg->c3)
		->setCellValue('S50', $cvg->c4)
		->setCellValue('T50', $cvg->c5)
		->setCellValue('U50', $cvg->c6)
		->setCellValue('V50', $dvg->d1)
		->setCellValue('W50', $dvg->d2)
		->setCellValue('X50', $dvg->d3)
		->setCellValue('Y50', $dvg->d4)
		->setCellValue('Z50', $dvg->d5)
		->setCellValue('AA50', $evg->e1)
		->setCellValue('AB50', $evg->e2)
		->setCellValue('AC50', $evg->e3)
		->setCellValue('AD50', $evg->e4)
		;
		
		
		// Miscellaneous glyphs, UTF-8 (K)
		$i=5; //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<baris awal nilai
		foreach($pr as $pr) {
			
		$TOTAL_AV		= (($pr->a1) + ($pr->a2) + ($pr->a3) + ($pr->a4) + ($pr->a5) + ($pr->a6) + ($pr->a7) + ($pr->a8) + ($pr->b1) + ($pr->b2) + ($pr->b3) + ($pr->b4) + ($pr->b5) + ($pr->b6) + ($pr->c1) + ($pr->c2) + ($pr->c3) + ($pr->c4) + ($pr->c5) + ($pr->c6) + ($pr->d1) + ($pr->d2) + ($pr->d3) + ($pr->d4) + ($pr->d5) + ($pr->e1) + ($pr->e2) + ($pr->e3) + ($pr->e4)) / 29;
			
			$spreadsheet->getSheetByName('PEREMPUAN '.date('d-m-Y H'))
			->setCellValue('A'.$i, $pr->nama_unit_kerja)
			//---KOMITMEN---
			->setCellValue('B'.$i, $pr->a1)
			->setCellValue('C'.$i, $pr->a2)
			->setCellValue('D'.$i, $pr->a3)
			->setCellValue('E'.$i, $pr->a4)
			->setCellValue('F'.$i, $pr->a5)
			->setCellValue('G'.$i, $pr->a6)
			->setCellValue('H'.$i, $pr->a7)
			->setCellValue('I'.$i, $pr->a8)//--------------------TEPI BATAS
			->setCellValue('J'.$i, $pr->b1)
			->setCellValue('K'.$i, $pr->b2)
			->setCellValue('L'.$i, $pr->b3)
			->setCellValue('M'.$i, $pr->b4)
			->setCellValue('N'.$i, $pr->b5)
			->setCellValue('O'.$i, $pr->b6)//--------------------TEPI BATAS
			->setCellValue('P'.$i, $pr->c1)
			->setCellValue('Q'.$i, $pr->c2)
			->setCellValue('R'.$i, $pr->c3)
			->setCellValue('S'.$i, $pr->c4)
			->setCellValue('T'.$i, $pr->c5)
			->setCellValue('U'.$i, $pr->c6)//--------------------TEPI BATAS
			->setCellValue('V'.$i, $pr->d1)
			->setCellValue('W'.$i, $pr->d2)
			->setCellValue('X'.$i, $pr->d3)
			->setCellValue('Y'.$i, $pr->d4)
			->setCellValue('Z'.$i, $pr->d5)//--------------------TEPI BATAS
			->setCellValue('AA'.$i, $pr->e1)
			->setCellValue('AB'.$i, $pr->e2)
			->setCellValue('AC'.$i, $pr->e3)
			->setCellValue('AD'.$i, $pr->e4)
			->setCellValue('AE'.$i, $TOTAL_AV)//--------------------TEPI BATAS
			;
			$i++;
		}
		
		
		// Rename worksheet
		$spreadsheet->getActiveSheet()->setTitle('LAKI-LAKI '.date('d-m-Y H'));
		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		$spreadsheet->setActiveSheetIndex(0);

		// Redirect output to a client’s web browser (Xlsx)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="Report Q-IPNBK BBIB-SINGOSARI.xlsx"');
		header('Cache-Control: max-age=0');
		
		// If you're serving to IE 9, then the following may be needed
		header('Cache-Control: max-age=1');

		// If you're serving to IE over SSL, then the following may be needed
		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
		header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
		header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
		header('Pragma: public'); // HTTP/1.0

		$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
		$writer->save('php://output');
		
		foreach ($spreadsheet->getWorksheetIterator() as $worksheet) {

			$spreadsheet->setActiveSheetIndex($spreadsheet->getIndex($worksheet));

			$sheet = $spreadsheet->getActiveSheet();
			$cellIterator = $sheet->getRowIterator()->current()->getCellIterator();
			$cellIterator->setIterateOnlyExistingCells(true);
			/** @var PHPExcel_Cell $cell */
			foreach ($cellIterator as $cell) {
				$sheet->getColumnDimension($cell->getColumn())->setAutoSize(true);
			}
		}
		exit;
	}
}
