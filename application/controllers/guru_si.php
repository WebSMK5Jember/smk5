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

   
    
}