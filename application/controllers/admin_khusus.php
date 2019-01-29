<?php

Class admin_khusus extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
		$this ->load ->model('ModelAdmin');
        $this ->load ->model('ModelUi');
		if($this ->session ->userdata('logon_khusus') != true && $this ->session ->userdata('level') != 5){

			redirect(base_url('login_khusus'));
		}
	}

    public function index(){
        $list = $this->ModelAdmin->get_data_diri();
        $data = array(
            "menu"      => "menu_khusus/MenuAdmin_khusus",
            "panelbody" => "apps_khusus/admin/index",
            "list"      => $list
        );
        $this->load->view('menu_khusus/panelbody_khusus', $data);
        
    }

 }


   ?>