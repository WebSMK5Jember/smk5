<?php
class admin_si_piket extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logon') !=TRUE){
            $url=base_url('login_si');
            redirect($url);
        };
		$this->load->model('M_piket');

		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){

		$x['data']=$this->M_piket->get_all_piket();
		$this->load->view('apps/admin/v_piket',$x);
	}
	
	function simpan_piket(){
	
	                        $kode=strip_tags($this->input->post('kodepiket'));
	                        $nama=strip_tags($this->input->post('hari'));
	                       
						

							$this->M_piket->simpan_piket($kode,$nama);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin_si_piket');
					
	}
	
	function update_piket(){
				
	           
	                         $kode=strip_tags($this->input->post('kodepiket'));
	                        $nama=strip_tags($this->input->post('hari'));

							$this->M_piket->update_piket($kode,$nama);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin_si_piket');
	                    
	                }
	           

	

	function hapus_piket(){
		$kode=$this->input->post('kodepiket');
		
		$this->M_piket->hapus_piket($kode);
		
		
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin_si_mapel');
	}

}