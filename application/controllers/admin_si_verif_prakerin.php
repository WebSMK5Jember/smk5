<?php
class admin_si_verif_prakerin extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logon') !=TRUE){
            $url=base_url('login_si');
            redirect($url);
        };
		$this->load->model('M_V_PRAKERIN');

		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){

		
		$i['data']=$this->M_V_PRAKERIN->get_all_prakerin();
		$i['guru']=$this->M_V_PRAKERIN->get_all_guru();
		$i['tempat']=$this->M_V_PRAKERIN->get_all_tempat();
		$this->load->view('apps/admin/v_vef_prakerin',$i);
	}
	
	
	
	function update_vef_prakerin(){

		$this->M_V_PRAKERIN->update_prakerin($KODE_GURU,$KODE_TEMPAT_Pss,$data);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin_si_verif_prakerin');
				
						
							$KODE_GURU=strip_tags($this->input->post('kodeguru'));
	                        $KODE_TEMPAT_P=strip_tags($this->input->post('kodetempat'));
	               

	                       $data = array(
	                       	'KODE_GURU' =>  $this ->input ->post('kodeguru'), 
	                       	'KODE_TEMPAT_P' =>  $this ->input ->post('kodetempat'),
	                       	'status' =>  '1');

							
							
	           

	}

	
		

}