<?php

Class kepsek_khusus extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
        $this->load->helper(array('form','url'));
		$this ->load ->model('ModelGuru');
        $this ->load ->model('ModelUi');
		if($this ->session ->userdata('logon_khusus') != true && $this ->session ->userdata('level') != 1){

			redirect(base_url('login_khusus'));
		}
	}

    public function index_khusus(){
        $list = $this->ModelGuru->get_data_diri();
        $data = array(
            "menu"      => "menu_khusus/MenuKepsek_khusus",
            "panelbody" => "apps_khusus/kepsek/index",
            "list"      => $list
        );
        $this->load->view('menu_khusus/panelbody_khusus', $data);
        
    }

}   
    
?>