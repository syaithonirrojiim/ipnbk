<?php 

class Quiz extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_intro');
                $this->load->helper('url');
	}

	function index(){
		$this->load->view('intro');
	}
}
?>