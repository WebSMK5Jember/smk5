<?php
class admin_si_piket extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logon') !=TRUE){
            $url=base_url('login_si');
            redirect($url);
        };
		$this->load->model('M_mapel');

		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){

		$x['data']=$this->M_mapel->get_all_mapel();
		$this->load->view('apps/admin/v_piket',$x);
	}
	
	function simpan_piket(){
	
	                        $kode=strip_tags($this->input->post('kode'));
	                        $nama=strip_tags($this->input->post('xnama'));
	                       
						

							$this->M_mapel->simpan_mapel($kode,$nama);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin_si_mapel');
					
	}
	
	function update_piket(){
				
	           
	                         $kode=strip_tags($this->input->post('kode'));
	                        $nama=strip_tags($this->input->post('xnama'));

							$this->m_mapel->update_mapel($kode,$nama);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin_si_mapel');
	                    
	                }
	           

	

	function hapus_piket(){
		$kode=$this->input->post('kode');
		
		$this->M_mapel->hapus_mapel($kode);
		
		
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin_si_mapel');
	}

}