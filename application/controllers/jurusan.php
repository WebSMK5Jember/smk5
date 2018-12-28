<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class jurusan extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
 
	public function analisiskimia(){		
		
		$this->load->view('beranda/header');
		$this->load->view('jurusan/analisiskimia');
		$this->load->view('beranda/footer');
	
	}
	public function tkj(){		
		
		$this->load->view('beranda/header');
		$this->load->view('jurusan/tkj');
		$this->load->view('beranda/footer');
	
	}
}