<?php
class jurusan extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_galeri');
		$this->load->model('m_pengumuman');
		$this->load->model('m_agenda');
		$this->load->model('m_files');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
		$x['tot_guru']=$this->db->get('tbl_guru')->num_rows();
		$x['tot_siswa']=$this->db->get('tbl_siswa')->num_rows();
		$x['tot_files']=$this->db->get('tbl_files')->num_rows();
		$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
			$this->load->view('depan/jurusan/index',$x);
	}

	function tkj(){
		$x['tot_guru']=$this->db->get('tbl_guru')->num_rows();
		$x['tot_siswa']=$this->db->get('tbl_siswa')->num_rows();
		$x['tot_files']=$this->db->get('tbl_files')->num_rows();
		$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
			$this->load->view('depan/jurusan/tkj',$x);
	}


}

