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

	
	public function multimedia(){		
		
		$this->load->view('beranda/header');
		$this->load->view('jurusan/multimedia');
		$this->load->view('beranda/footer');
	
	}

	public function holtikultura(){		
		
		$this->load->view('beranda/header');
		$this->load->view('jurusan/holtikultura');
		$this->load->view('beranda/footer');
	
	}

	public function perkebunan(){		
		
		$this->load->view('beranda/header');
		$this->load->view('jurusan/perkebunan');
		$this->load->view('beranda/footer');
	
	}

	public function benih(){		
		
		$this->load->view('beranda/header');
		$this->load->view('jurusan/benih');
		$this->load->view('beranda/footer');
	
	}
	public function ruminansia(){		
		
		$this->load->view('beranda/header');
		$this->load->view('jurusan/ruminansia');
		$this->load->view('beranda/footer');
	
	}
	public function unggas(){		
		
		$this->load->view('beranda/header');
		$this->load->view('jurusan/unggas');
		$this->load->view('beranda/footer');
	
	}
	public function pengolahan_pertanian(){		
		
		$this->load->view('beranda/header');
		$this->load->view('jurusan/pengolahan_pertanian');
		$this->load->view('beranda/footer');
	
	}

	public function mutu(){		
		
		$this->load->view('beranda/header');
		$this->load->view('jurusan/mutu');
		$this->load->view('beranda/footer');
	
	}
	public function mesin(){		
		
		$this->load->view('beranda/header');
		$this->load->view('jurusan/mesin');
		$this->load->view('beranda/footer');
	
	}
	public function perikanan(){		
		
		$this->load->view('beranda/header');
		$this->load->view('jurusan/perikanan');
		$this->load->view('beranda/footer');
	
	}
	
}