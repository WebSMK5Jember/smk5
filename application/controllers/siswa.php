<?php

Class siswa extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
        $this->load->helper(array('form','url'));
		$this ->load ->model('ModelSiswa');
        $this ->load ->model('ModelUi');
		if($this ->session ->userdata('logon') != true && $this ->session ->userdata('level') != 4){

			redirect(base_url('login'));
		}
	}

    public function index(){
        $id = $this->session->userdata('id_session');
        $list = $this->ModelSiswa->get_data_diri($id)->result();
        $data = array(
            "menu"      => "MenuSiswa",
            "panelbody" => "apps/siswa/index",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);
        
    }
public function jadwalpelajaran(){
    $id = $this->session->userdata('id_session');
        $list = $this->ModelSiswa->get_jadwal_pelajaran($id)->result();
        $data = array(
            "menu"      => "MenuSiswa",
            "panelbody" => "apps/siswa/jadwalpelajaran",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);
        
    }
   public function nilai(){
    $id = $this->session->userdata('id_session');
        $list = $this->ModelSiswa->get_nilai($id)->result();
        $data = array(
            "menu"      => "MenuSiswa",
            "panelbody" => "apps/siswa/nilai",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);
    
}
 public function absensi(){
    $id = $this->session->userdata('id_session');
        $list = $this->ModelSiswa->get_absensi($id)->result();
        $data = array(
            "menu"      => "MenuSiswa",
            "panelbody" => "apps/siswa/absensi",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);
}

public function input_prakerin(){

        $guru = $this ->ModelSiswa->get_guru()->result();
        $tempat = $this ->ModelSiswa->get_tempat()->result();
        $data = array(
            "menu"      => "MenuSiswa",
            "panelbody" => "apps/siswa/prakerin",

            "guru" => $guru,
            "tempat" => $tempat
           
        );
        $this->load->view('panelbody', $data);
}
public function save_input_prakerin(){
    
    $cek = $this->db->query("SELECT * FROM tabel_prakerin where KODE_PRAKERIN='".$this->input->post('KODE_PRAKERIN')."'")->num_rows();
    if ($cek<=0){
        $data = array(

            'KODE_PRAKERIN' => $this->input->post('KODE_PRAKERIN'),
            'NIS' => $this->input->post('NIS'),
            'KODE_GURU' => $this->input->post('KODE_GURU'),
            'KODE_TEMPAT' => $this->input->post('KODE_TEMPAT'),
            'TANGGAL_DFTAR' => $this->input->post('TANGGAL_DFTAR'),
            'TANGGAL_KELUAR' => $this->input->post('TANGGAL_KELUAR')
          
            
    );
        
        $this ->db ->insert('tabel_prakerin',$data);
        redirect('siswa/input_prakerin');


    }else {  
        echo "<script> alert('ANDA TELAH MENDAFTAR PRAKERIN')</script>";
    }
}

}