<?php
class guru_khusus_laporguru extends CI_Controller{
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
     $x['siswa']=$this->m_guru->get_all_guru();
 if($this->session->userdata('akses')=='3'){
     $this->load->view('khusus/guru/laporguru',$x);
    }else{
      redirect('administrator');
    }
}

   function kirim_lapor_guru(){
      $nama=htmlspecialchars($this->input->post('xnama',TRUE),ENT_QUOTES);
      $laporguru=htmlspecialchars($this->input->post('xlaporguru',TRUE),ENT_QUOTES);
     
      $this->m_guru->kirim_laporanguru($nama,$laporanguru);
      echo $this->session->set_flashdata('msg','<p><strong> NB: </strong> Terima Kasih Atas Laporannya.</p>');
      redirect('guru_khusus_laporguru');
  }

 
}
