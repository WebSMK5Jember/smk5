<?php
class admin_si_absen extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logon') !=TRUE){
            $url=base_url('login_si');
            redirect($url);
        };
		$this->load->model('M_nilai');

		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){

		$x['data']=$this->M_nilai->get_all_absen();
		$x['guru']=$this->M_nilai->get_all_guru();
		$x['kelas']=$this->M_nilai->get_all_kelas();
		$x['mapel']=$this->M_nilai->get_all_mapel();

		$x['siswa']=$this->M_nilai->get_all_siswa();
		$this->load->view('apps/admin/v_master_absen',$x);
	}
	
	
	
	function update_absen(){
						$id=strip_tags($this->input->post('id'));
							$mapel=strip_tags($this->input->post('mapel'));
							$guru=strip_tags($this->input->post('guru'));
							$kelas=strip_tags($this->input->post('kelas'));
							$nis=strip_tags($this->input->post('nis'));
	                
	                        
						

							$this->M_nilai->update_absen($id,$mapel,$guru,$kelas,$nis);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin_si_absen');
				
	           

	}

	function hapus_absen(){
		$id=$this->input->post('id');
		
		$this->M_nilai->hapus_absen($id);
		
		
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin_si_absen');
	}
		

}