<?php
class admin_si_dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logon') !=TRUE){
            $url=base_url('login_si');
            redirect($url);
        };
		
		$this->load->model('m_pengunjung');
	}
	function index(){
		if($this->session->userdata('pengguna_level')=='1'){
			$x['visitor'] = $this->m_pengunjung->statistik_pengujung();
			$this->load->view('apps/admin/v_dashboard',$x);
		}else{
			redirect('login_si');
		}
	
	}
	
}