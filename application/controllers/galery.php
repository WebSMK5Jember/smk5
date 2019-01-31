<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class galery extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this ->load ->model('ModelFoto');
	}
 
	public function index(){		
		
		$this->load->view('beranda/header');
		$this->load->view('galeri/galery_foto');
		$this->load->view('beranda/footer');
	
	}

	
}
?>