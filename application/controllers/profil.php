<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class profil extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
 
	public function index(){		
		
		$this->load->view('beranda/header');
		$this->load->view('fitur/profil');
		$this->load->view('beranda/footer');
	
	}
	
}