<?php

Class guru_si extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
        $this->load->helper(array('form','url'));
		$this ->load ->model('ModelGuru');
        $this ->load ->model('ModelUi');
		if($this ->session ->userdata('logon') != true && $this ->session ->userdata('level') != 2){

			redirect(base_url('login'));
		}
	}

    public function index(){
        $id = $this->session->userdata('id_session');
        $list = $this->ModelGuru->get_data_diri($id)->result();
        $data = array(
            "menu"      => "MenuGuru",
            "panelbody" => "apps/guru/index",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);
        
    }

    public function nilai_siswa(){
        
        $list = $this->ModelGuru->get_kelas();
        $data = array(
            "menu"      => "MenuGuru",
            "panelbody" => "apps/guru/data_kelas",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);
        
    }

    public function nilai_siswa_input(){
        $id = $this->session->userdata('id_session');
        $list = $this->ModelGuru->get_nilai_input($id)->result();
        $data = array(
            "menu"      => "MenuGuru",
            "panelbody" => "apps/guru/input_nilai",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);
        
    }

    public function absensi_siswa_input(){
        $id = $this->session->userdata('id_session');
        $list = $this->ModelGuru->get_absensi_input($id)->result();
        $data = array(
            "menu"      => "MenuGuru",
            "panelbody" => "apps/guru/input_absensi",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);
        
    }


    public function jadwal_guru(){
        $id = $this->session->userdata('id_session');
        $list = $this->ModelGuru->get_jadwal($id)->result();
        $data = array(
            "menu"      => "MenuGuru",
            "panelbody" => "apps/guru/jadwal_guru",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);
        
    }

   
    
}