<?php

Class kepsek extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
        $this->load->helper(array('form','url'));
		$this ->load ->model('ModelGuru');
        $this ->load ->model('ModelUi');
		if($this ->session ->userdata('logon') != true && $this ->session ->userdata('level') != 1){

			redirect(base_url('login'));
		}
	}

    public function index(){
        $list = $this->ModelGuru->get_data_diri();
        $data = array(
            "menu"      => "MenuKepsek",
            "panelbody" => "apps/kepsek/index",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);
        
    }

   
    
}