<?php
class admin_si_jadwal extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logon') !=TRUE){
            $url=base_url('login_si');
            redirect($url);
        };
		$this->load->model('M_jadwal');

		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		
		$x['data']=$this->M_jadwal->get_all_jadwal();
		$x['guru']=$this->M_jadwal->get_all_guru();
		$x['kelas']=$this->M_jadwal->get_all_kelas();
		$x['mapel']=$this->M_jadwal->get_all_mapel();
		$this->load->view('apps/admin/v_jadwal',$x);
	}
	
	function simpan_jadwal(){
							$KODE_KELAS=strip_tags($this->input->post('kodekelas'));
							$KODE_MAPEL=strip_tags($this->input->post('kodemapel'));
							$KODE_GURU=strip_tags($this->input->post('kodeguru'));
	                        $JAM=strip_tags($this->input->post('jam'));
	                        $Ruang=strip_tags($this->input->post('ruang'));
	                        $Hari=strip_tags($this->input->post('Hari'));
	                       
						

							$this->M_jadwal->simpan_jadwal($KODE_KELAS,$KODE_MAPEL,$KODE_GURU,$JAM,$Ruang,$Hari);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin_si_jadwal');
					
				
	}
	
	function update_jadwal(){
						$KODE_KELAS=strip_tags($this->input->post('kodekelas'));
							$KODE_MAPEL=strip_tags($this->input->post('kodemapel'));
							$KODE_GURU=strip_tags($this->input->post('kodeguru'));
	                        $JAM=strip_tags($this->input->post('jam'));
	                        $Ruang=strip_tags($this->input->post('ruang'));
	                        $Hari=strip_tags($this->input->post('Hari'));
	                       
						

							$this->M_jadwal->update_jadwal($KODE_KELAS,$KODE_MAPEL,$KODE_GURU,$JAM,$Ruang,$Hari);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin_si_jadwal');
				
	           

	}

	function hapus_guru(){
		$kode=$this->input->post('kode');
		
		$this->M_jadwal->hapus_jadwal($kode);
		
		
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin_si_jadwal');
	}
		

}