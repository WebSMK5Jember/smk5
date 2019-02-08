
<?php
class admin_si_tempat_prakerin extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logon') !=TRUE){
            $url=base_url('login_si');
            redirect($url);
        };
		$this->load->model('m_tempat_prakerin');

		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){

		$x['data']=$this->m_tempat_prakerin->get_all_tempat();
		$this->load->view('apps/admin/v_prakerin',$x);
	}
	
	function simpan_tempat(){
	
	                        $kode=strip_tags($this->input->post('kode'));
	                        $nama=strip_tags($this->input->post('xnama'));
	                         $lokasi=strip_tags($this->input->post('xalamat'));
	                       
						

							$this->m_tempat_prakerin->simpan_tempat($kode,$nama,$lokasi);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin_si_tempat_prakerin');
					
	}
	
	function update_tempat(){
				
	           
	                         $kode=strip_tags($this->input->post('kode'));
	                        $nama=strip_tags($this->input->post('xnama'));
	                        $lokasi=strip_tags($this->input->post('xalamat'));

							$this->m_tempat_prakerin->update_tempat($kode,$nama,$lokasi);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin_si_tempat_prakerin');
	                    
	                }
	           

	

	function hapus_tempat(){
		$kode=$this->input->post('kode');
		
		$this->m_tempat_prakerin->hapus_tempat($kode);
		
		
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin_si_tempat_prakerin');
	}

}