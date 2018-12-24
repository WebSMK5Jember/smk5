<?php

Class siswa extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
        $this->load->helper(array('form','url'));
		$this ->load ->model('ModelSiswa');
        $this ->load ->model('ModelUi');
		if($this ->session ->userdata('logon') != true && $this ->session ->userdata('level') != 4){

			redirect(base_url('login'));
		}
	}

    public function index(){
        $list = $this->ModelSiswa->get_data_diri();
        $data = array(
            "menu"      => "MenuSiswa",
            "panelbody" => "apps/siswa/index",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);
        
    }
public function jadwalpelajaran(){
        $list = $this->ModelSiswa->get_jadwal_pelajaran();
        $data = array(
            "menu"      => "MenuSiswa",
            "panelbody" => "apps/siswa/jadwalpelajaran",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);
        
    }
   public function nilai(){
        $list = $this->ModelSiswa->get_nilai();
        $data = array(
            "menu"      => "MenuSiswa",
            "panelbody" => "apps/siswa/nilai",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);
    
}
 public function absensi(){
        $list = $this->ModelSiswa->get_absensi();
        $data = array(
            "menu"      => "MenuSiswa",
            "panelbody" => "apps/siswa/absensi",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);
}
}