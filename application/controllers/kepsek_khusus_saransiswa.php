<?php
class kepsek_khusus_saransiswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_kepsek');
	}

	function index(){
		$this->m_kepsek->update_status_saransiswa();
		$x['data']=$this->m_kepsek->get_all_saransiswa();
		$this->load->view('khusus/kepsek/saransiswa',$x);
	}

	function hapus_saransiswa(){
		$kode=$this->input->post('kode');
		$this->m_kepsek->hapus_saransiswa($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('khusus/kepsek/saransiswa');
	}
}