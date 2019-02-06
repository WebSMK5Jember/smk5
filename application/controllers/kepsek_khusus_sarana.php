<?php
class kepsek_khusus_sarana extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_kepsek');
	}

	function index(){
		$this->m_kepsek->update_status_sarana();
		$x['data']=$this->m_kepsek->get_all_sarana();
		$this->load->view('khusus/kepsek/laporsarana',$x);
	}

	function hapus_sarana(){
		$kode=$this->input->post('kode');
		$this->m_kepsek->hapus_sarana($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('khusus/kepsek/laporsarana');
	}
}