<?php
class guru_khusus_dashboard extends CI_Controller{
  function __construct(){
		parent::__construct();
    if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
      $this->load->model('m_guru');
      $this->load->model('m_pengunjung');
  		$this->m_pengunjung->count_visitor();
	}
	function index(){
     $x['guru']=$this->m_guru->get_all_guru();
 if($this->session->userdata('akses')=='3'){
     $this->load->view('khusus/guru/sarana',$x);
    }else{
      redirect('administrator');
    }
}

   function kirim_lapor_sarana(){
      $nama=htmlspecialchars($this->input->post('xnama',TRUE),ENT_QUOTES);
      $laporan=htmlspecialchars($this->input->post('xlaporan',TRUE),ENT_QUOTES);
     
      $this->m_guru->kirim_sarana($nama,$laporan);
      echo $this->session->set_flashdata('msg','<p><strong> NB: </strong> Terima Kasih Atas Laporannya.</p>');
      redirect('guru_khusus_dashboard');
  }

 
}
