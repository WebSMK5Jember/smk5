<?php
class admin_si_tanggal_review extends CI_Controller{
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

		$x['data']=$this->M_V_PRAKERIN->get_all_tanggal_review();
		$this->load->view('apps/admin/v_tanggal_review',$x);
	}
	
	function simpan_tanggal_review(){
	
	                        $tgl_awal=strip_tags($this->input->post('awal'));
	                        $tgl_akhir=strip_tags($this->input->post('akhir'));
	                       
						

							$this->M_V_PRAKERIN->simpan_tanggal_review($tgl_awal,$tgl_akhir);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin_si_tanggal_review');
					
	}
	
	function update_tanggal_review(){
				
	           
	                         $kode=strip_tags($this->input->post('kode'));
	                         $tgl_awal=strip_tags($this->input->post('awal'));
	                        $tgl_akhir=strip_tags($this->input->post('akhir'));
	                       

							$this->M_V_PRAKERIN->update_tanggal_review($kode,$tgl_awal,$tgl_akhir);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin_si_tanggal_review');
	                    
	                }
	           

	

	function hapus_tanggal_review(){
		$kode=$this->input->post('kode');
		
		$this->M_V_PRAKERIN->hapus_tanggal_review($kode);

		
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin_si_tanggal_review');
	}

}