<?php

Class admin extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
        $this->load->helper(array('form','url'));
		$this ->load ->model('ModelAdmin');
        $this ->load ->model('ModelUi');
		if($this ->session ->userdata('logon') != true && $this ->session ->userdata('level') != 5){

			redirect(base_url('login'));
		}
	}

    public function index(){
        $list = $this->ModelAdmin->get_data_diri();
        $data = array(
            "menu"      => "MenuAdmin",
            "panelbody" => "apps/admin/index",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);
        
    }
public function get_input_siswa(){
     
        $nama = $this->input->post(NAMA_SISWA); 
        $NIS = $this->input->post(NIS)
        ;
         $data = array(
            'NAMA_SISWA'=> $nama,
            'NIS'       => $NIS,
            "menu"      => "MenuAdmin",
            "panelbody" => "apps/admin/inputsiswa",
            "list"      => $list ); 
    
    $this->load->view('apps/admin/inputsiswa');
  $this->ModelAdmin->input_data($data,'user');
    
    }
    
}