<?php
class siswa_khusus_dashboard extends CI_Controller{
  function __construct(){
		parent::__construct();
    if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
      $this->load->model('m_siswa');
      $this->load->model('m_pengunjung');
  		$this->m_pengunjung->count_visitor();
	}
	function index(){
     $x['siswa']=$this->m_siswa->get_siswa();
 if($this->session->userdata('akses')=='4'){
     $this->load->view('khusus/saran',$x);
    }else{
      redirect('administrator');
    }

     
  
	
  
	}

   function kirim_saran(){
      $nama=htmlspecialchars($this->input->post('xnama',TRUE),ENT_QUOTES);
      $deskripsi=htmlspecialchars($this->input->post('xdes',TRUE),ENT_QUOTES);
     
      $this->m_siswa->kirim_saran($nama,$deskripsi);
      echo $this->session->set_flashdata('msg','<p><strong> NB: </strong> Terima Kasih Atas Masukkannya.</p>');
      redirect('siswa_khusus_dashboard');
  }

 
}
