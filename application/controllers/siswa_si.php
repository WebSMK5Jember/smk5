<?php

Class siswa_si extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
        $this->load->helper(array('form','url'));
		$this ->load ->model('ModelSiswa');
        $this ->load ->model('ModelUi');
        $this->load->library('upload');
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

   
        

        $data = array(

            'KODE_PRAKERIN' => $this->input->post('KODE_PRAKERIN'),
            'NIS' => $this->input->post('NIS'),
            'KODE_GURU_P' => $this->input->post('KODE_GURU_P'),
            'KODE_TEMPAT_P' => $this->input->post('KODE_TEMPAT_P'),
            'MINAT' => $this->input->post('MINAT'),
            'PERSETUJUAN_ORGTUA' => $this->input->post('PERSETUJUAN_ORGTUA')
            
    );
        
        $this->db->insert('tabel_prakerin',$data);
        
        redirect('siswa_si/prakerin_fix');


    }




     public function prakerin_fix(){

        $guru = $this ->ModelSiswa->get_guru()->result();
        $tempat = $this ->ModelSiswa->get_tempat()->result();
        $id = $this->session->userdata('id_session');
        $list = $this->ModelSiswa->get_prakerin($id)->result();
        $data = array(
            "menu"      => "MenuSiswa",
            "panelbody" => "apps/siswa/prakerin_fix",
            "list"      => $list,

            "guru" => $guru,
            "tempat" => $tempat
        );
        $this->load->view('panelbody', $data);
        
    }

public function cetak_prakerin($id) {
          $id = $this->session->userdata('KODE_PRAKERIN');
        $data = array(
            "title" => "BUKTI DAFTAR PRAKERIN",
            "table" => $this->ModelSiswa->get_cetak_prakerin($id)->result(),
            "panelbody" => "apps/siswa/cetak_prakerin"
            
            );
        $this->load->view('panelbody', $data);
    }


public function input_daful(){

       
        $data = array(
            "menu"      => "MenuSiswa",
            "panelbody" => "apps/siswa/daful"

            
        );
        $this->load->view('panelbody', $data);
}
public function save_input_daful(){
    
  
        $data = array(

            'NIS' => $this->input->post('NIS'),
            'SEMESTER' => $this->input->post('SEMESTER'),
            'TANGGAL_DAFUL' => $this->input->post('TANGGAL_DAFUL'),
            'filespp' => $this->input->post('filespp')
          
            
    );
        
        $this ->db ->insert('table_daful',$data);
        redirect('siswa_si');


    }


   


}




