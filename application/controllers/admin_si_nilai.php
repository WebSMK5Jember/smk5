<?php
class admin_si_nilai extends CI_Controller{
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

		$x['data']=$this->M_nilai->get_all_nilai();
		$x['guru']=$this->M_nilai->get_all_guru();
		$x['kelas']=$this->M_nilai->get_all_kelas();
		$x['mapel']=$this->M_nilai->get_all_mapel();

		$x['siswa']=$this->M_nilai->get_all_siswa();
		$this->load->view('apps/admin/v_master_nilai',$x);
	}
	
	function simpan_nilai(){
							$kode =strip_tags($this->input->post('nis'));
							$KODE_KELAS=strip_tags($this->input->post('kodekelas'));
							$KODE_MAPEL=strip_tags($this->input->post('kodemapel'));
							$KODE_GURU=strip_tags($this->input->post('kodeguru'));
	                        $Semester=strip_tags($this->input->post('Semester'));
	                       
						

							$this->M_nilai->simpan_nilai($kode,$KODE_KELAS,$KODE_MAPEL,$KODE_GURU,$Semester);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin_si_nilai');
					
				
	}
	
	function update_nilai(){
						$id=strip_tags($this->input->post('id'));
							$kode=strip_tags($this->input->post('nis'));
							$KODE_KELAS=strip_tags($this->input->post('kodekelas'));
							$KODE_MAPEL=strip_tags($this->input->post('kodemapel'));
							$KODE_GURU=strip_tags($this->input->post('kodeguru'));
	                        $Semester=strip_tags($this->input->post('Semester'));
	                        
						

							$this->M_nilai->update_nilai($id,$kode,$KODE_KELAS,$KODE_MAPEL,$KODE_GURU,$Semester);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin_si_nilai');
				
	           

	}

	function hapus_nilai(){
		$kode=$this->input->post('kode');
		
		$this->M_nilai->hapus_nilai($kode);
		
		
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin_si_nilai');
	}
		

}