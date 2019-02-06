<?php
class kepsek_khusus_dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_kepsek');
	}

	function index(){
		$this->m_kepsek->update_status_laporguru();
		$x['data']=$this->m_kepsek->get_all_laporguru();
		$this->load->view('khusus/kepsek/laporguru',$x);
	}

	function hapus_laporguru(){
		$kode=$this->input->post('kode');
		$this->m_kepsek->hapus_laporguru($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('khusus/kepsek/laporguru');
	}
}