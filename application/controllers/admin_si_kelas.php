<?php
class admin_si_kelas extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logon') !=TRUE){
            $url=base_url('login_si');
            redirect($url);
        };
		
		$this->load->model('m_kelas');
		$this->load->model('m_pengguna');
	
		$this->load->library('upload');
	}


	function index(){
		
		
		$x['jurusan']=$this->m_kelas->get_all_jurusan();
		$x['data']=$this->m_kelas->get_all_kelas();
		
		$this->load->view('apps/admin/v_kelas',$x);
	}
	
	function simpan_kelas(){
							  $jurusan=strip_tags($this->input->post('xjurusan'));
	                        $kode=strip_tags($this->input->post('kode'));
	                      
	                        $nama=strip_tags($this->input->post('xnama'));
	                       
						

							$this->m_kelas->simpan_kelas($kode,$kode_jurusan,$nama);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin_si_kelas');
					
	}
	
	function update_kelas(){
				
	           				 $jurusan=strip_tags($this->input->post('xjurusan'));
	                         $kode=strip_tags($this->input->post('kode'));
	                        
	                         $nama=strip_tags($this->input->post('xnama'));

							$this->m_kelas->update_kelas($kode,$kode_jurusan,$nama);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin_si_kelas');
	                    
	                }
	           

	

	function hapus_kelas(){
		$kode=$this->input->post('kode');
		
		$this->m_kelas->hapus_kelas($kode);
		
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin_si_kelas');
	}

}