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
		$this->load->view('beranda/header',$x);
			$this->load->view('depan/jurusan/index',$x);
			$this->load->view('beranda/footer',$x);
	}

	function tkj(){
		$x['tot_guru']=$this->db->get('tbl_guru')->num_rows();
		$x['tot_siswa']=$this->db->get('tbl_siswa')->num_rows();
		$x['tot_files']=$this->db->get('tbl_files')->num_rows();
		$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
		$this->load->view('beranda/header',$x);
			$this->load->view('depan/jurusan/tkj',$x);
			$this->load->view('beranda/footer',$x);
	}

	function atph(){
		$x['tot_guru']=$this->db->get('tbl_guru')->num_rows();
		$x['tot_siswa']=$this->db->get('tbl_siswa')->num_rows();
		$x['tot_files']=$this->db->get('tbl_files')->num_rows();
		$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
		$this->load->view('beranda/header',$x);
			$this->load->view('depan/jurusan/atph',$x);
			$this->load->view('beranda/footer',$x);
	}
function kimia(){
		$x['tot_guru']=$this->db->get('tbl_guru')->num_rows();
		$x['tot_siswa']=$this->db->get('tbl_siswa')->num_rows();
		$x['tot_files']=$this->db->get('tbl_files')->num_rows();
		$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
		$this->load->view('beranda/header',$x);
			$this->load->view('depan/jurusan/kimia',$x);
			$this->load->view('beranda/footer',$x);
	}

function multimedia(){
		$x['tot_guru']=$this->db->get('tbl_guru')->num_rows();
		$x['tot_siswa']=$this->db->get('tbl_siswa')->num_rows();
		$x['tot_files']=$this->db->get('tbl_files')->num_rows();
		$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
		$this->load->view('beranda/header',$x);
			$this->load->view('depan/jurusan/multimedia',$x);
			$this->load->view('beranda/footer',$x);
	}
function ruminansia(){
		$x['tot_guru']=$this->db->get('tbl_guru')->num_rows();
		$x['tot_siswa']=$this->db->get('tbl_siswa')->num_rows();
		$x['tot_files']=$this->db->get('tbl_files')->num_rows();
		$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
		$this->load->view('beranda/header',$x);
			$this->load->view('depan/jurusan/ruminansia',$x);
			$this->load->view('beranda/footer',$x);
	}

function unggas(){
		$x['tot_guru']=$this->db->get('tbl_guru')->num_rows();
		$x['tot_siswa']=$this->db->get('tbl_siswa')->num_rows();
		$x['tot_files']=$this->db->get('tbl_files')->num_rows();
		$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
		$this->load->view('beranda/header',$x);
			$this->load->view('depan/jurusan/unggas',$x);
			$this->load->view('beranda/footer',$x);
	}
function perkebunan(){
		$x['tot_guru']=$this->db->get('tbl_guru')->num_rows();
		$x['tot_siswa']=$this->db->get('tbl_siswa')->num_rows();
		$x['tot_files']=$this->db->get('tbl_files')->num_rows();
		$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
		$this->load->view('beranda/header',$x);
			$this->load->view('depan/jurusan/perkebunan',$x);
			$this->load->view('beranda/footer',$x);
	}
function mutu(){
		$x['tot_guru']=$this->db->get('tbl_guru')->num_rows();
		$x['tot_siswa']=$this->db->get('tbl_siswa')->num_rows();
		$x['tot_files']=$this->db->get('tbl_files')->num_rows();
		$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
		$this->load->view('beranda/header',$x);
			$this->load->view('depan/jurusan/mutu',$x);
			$this->load->view('beranda/footer',$x);
	}
function benih(){
		$x['tot_guru']=$this->db->get('tbl_guru')->num_rows();
		$x['tot_siswa']=$this->db->get('tbl_siswa')->num_rows();
		$x['tot_files']=$this->db->get('tbl_files')->num_rows();
		$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
		$this->load->view('beranda/header',$x);
			$this->load->view('depan/jurusan/benih',$x);
			$this->load->view('beranda/footer',$x);
	}
function php(){
		$x['tot_guru']=$this->db->get('tbl_guru')->num_rows();
		$x['tot_siswa']=$this->db->get('tbl_siswa')->num_rows();
		$x['tot_files']=$this->db->get('tbl_files')->num_rows();
		$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
		$this->load->view('beranda/header',$x);
			$this->load->view('depan/jurusan/php',$x);
			$this->load->view('beranda/footer',$x);
	}
function mesin(){
		$x['tot_guru']=$this->db->get('tbl_guru')->num_rows();
		$x['tot_siswa']=$this->db->get('tbl_siswa')->num_rows();
		$x['tot_files']=$this->db->get('tbl_files')->num_rows();
		$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
		$this->load->view('beranda/header',$x);
			$this->load->view('depan/jurusan/mesin',$x);
			$this->load->view('beranda/footer',$x);
	}

function perikanan(){
		$x['tot_guru']=$this->db->get('tbl_guru')->num_rows();
		$x['tot_siswa']=$this->db->get('tbl_siswa')->num_rows();
		$x['tot_files']=$this->db->get('tbl_files')->num_rows();
		$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
		$this->load->view('beranda/header',$x);
			$this->load->view('depan/jurusan/perikanan',$x);
			$this->load->view('beranda/footer',$x);
	}



}

