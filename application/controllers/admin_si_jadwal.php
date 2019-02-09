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

		$i['data']=$this->M_jadwal->get_all_jadwal();
		$i['guru']=$this->M_jadwal->get_all_guru();
		$i['kelas']=$this->M_jadwal->get_all_kelas();
		$i['mapel']=$this->M_jadwal->get_all_mapel();
		$this->load->view('apps/admin/v_jadwal',$i);
	}
	
	function simpan_jadwal(){
							$kelas=strip_tags($this->input->post('kodekelas'));
							$mapel=strip_tags($this->input->post('kodemapel'));
							$guru=strip_tags($this->input->post('kodeguru'));
	                        $jam=strip_tags($this->input->post('jam'));
	                        $RUANG=strip_tags($this->input->post('ruang'));
	                        $HARI=strip_tags($this->input->post('hari'));
	                       
						

							$this->M_jadwal->simpan_jadwal($kelas,$mapel,$guru,$jam,$RUANG,$HARI);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin_si_jadwal');
					
				
	}
	
	function update_jadwal(){
				$kode=strip_tags($this->input->post('kode'));
						$kelas=strip_tags($this->input->post('kodekelas'));
							$mapel=strip_tags($this->input->post('kodemapel'));
							$guru=strip_tags($this->input->post('kodeguru'));
	                        $jam=strip_tags($this->input->post('jam'));
	                        $RUANG=strip_tags($this->input->post('ruang'));
	                        $HARI=strip_tags($this->input->post('hari'));
	                       

							$this->M_jadwal->update_jadwal($kelas,$mapel,$guru,$jam,$RUANG,$HARI);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin_si_jadwal');
				
	           

	}

	function hapus_jadwal(){
		$kode=$this->input->post('kode');
		
		$this->M_jadwal->hapus_jadwal($kode);
		
		
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin_si_jadwal');
	}
		

}