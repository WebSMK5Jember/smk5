<?php
class admin_si_jurusan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logon') !=TRUE){
            $url=base_url('login_si');
            redirect($url);
        };
		$this->load->model('m_jurusan');
$this->load->model('m_kelas');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){

		$x['data']=$this->m_jurusan->get_all_jurusan();
		$this->load->view('apps/admin/v_jurusan',$x);
	}
	
	function simpan_jurusan(){
	
	                        $kode=strip_tags($this->input->post('kode'));
	                        $nama=strip_tags($this->input->post('xnama'));
	                       
						

							$this->m_jurusan->simpan_jurusan($kode,$nama);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin_si_jurusan');
					
	}
	
	function update_jurusan(){
				
	           
	                         $kode=strip_tags($this->input->post('kode'));
	                        $nama=strip_tags($this->input->post('xnama'));

							$this->m_jurusan->update_jurusan($kode,$nama);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin_si_jurusan');
	                    
	                }
	           

	

	function hapus_jurusan(){
		$kode=$this->input->post('kode');
		
		$this->m_jurusan->hapus_jurusan($kode);
		$this->m_jurusan->hapus_kelas_jurusan($kode);
		
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin_si_jurusan');
	}

}