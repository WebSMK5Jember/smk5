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
public function inputsiswa(){
    
        $data = array(
         
            "menu"      => "MenuAdmin",
            "panelbody" => "apps/admin/inputsiswa");
            
         $this->load->view('panelbody', $data);
      
    }
    public function saveinputsiswa(){
        
         $data = array(
            'NAMA_SISWA' => $this ->input ->post('NAMA_SISWA'),
            'NIS' => $this ->input ->post('NIS'));
            
        $this ->db ->insert('tabel_siswa', $data);
        redirect('admin/inputsiswa');
    
    }
    
    
    public function inputguru(){
    
        $data = array(
         
            "menu"      => "MenuAdmin",
            "panelbody" => "apps/admin/inputguru");
            
         $this->load->view('panelbody', $data);
      
    
    }
    
}