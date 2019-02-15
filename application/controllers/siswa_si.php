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

       $tgl_awal = $this ->ModelSiswa->get_jadwal_awal();
        $tgl_akhir = $this ->ModelSiswa->get_jadwal_akhir();
        $guru = $this ->ModelSiswa->get_guru()->result();
        $tempat = $this ->ModelSiswa->get_tempat()->result();
 date_default_timezone_set('Asia/Jakarta');
            $y = date("Y");
            $m=date("m");
            $d=date("d");
            $akhir = explode('-',$tgl_akhir['tgl_akhir']);
            $awal = explode('-',$tgl_awal['tgl_awal']);
            
            // $val = $this->ModelMahasiswa->get_jadwal()->result();

            // if($val!=0){
                if(@($y-$awal[0]==0 && $m-$awal[1]==0 && $d-$awal[2]>=0)&&($y-$akhir[0]==0 && $m-$akhir[1]==0 && $d-$akhir[2]<=0)){
                    $l=1;
                }else{
                    $l=0;
                } 
                // if($val<1){
                //     $l=2;
                // }
            // }else{
            //     $l=2;
            // }

        $data = array(
            "menu"      => "MenuSiswa",
            "panelbody" => "apps/siswa/prakerin",
             "tgl_awal" => $tgl_awal,
               "tgl_akhir" => $tgl_akhir,
            "guru" => $guru,
            "tempat" => $tempat,
                  "limit"=>$l
           
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
        
        redirect('siswa_si/input_prakerin');


    }



     public function akun(){
         $id = $this->session->userdata('id_session');
    
        $list = $this->ModelSiswa->get_data_diri_akun($id)->result();
        $data = array(
            "menu"      => "MenuSiswa",
          
            "panelbody" => "apps/siswa/akun",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);
        
    }



    


    function edit_akun($pengguna_siswa)
    {
        $pengguna_id = $this->uri->segment(3);

        
        $data = array(
            'menu' => 'MenuSiswa',
            'panelbody' => 'apps/siswa/edit_akun',
            "form_edit_akun" => "apps/siswa/form_edit_akun"
         
            
        );
        $this ->load ->view('panelbody',$data);
    
    }

function simpan_edit_akun()
    {
            $pengguna_siswa = $this->input->post('pengguna_id');
            $data = array(
            'pengguna_password'=> md5($this->input->post('pengguna_password'))
           
                        
            
        );
        $this->db->where('pengguna_id', $pengguna_siswa);
        $this->db->update('tbl_pengguna', $data);
        redirect('siswa_si/akun');
    
    }


    public function Review_prakerin(){
         $tgl_awal = $this ->ModelSiswa->get_jadwal_awal();
        $tgl_akhir = $this ->ModelSiswa->get_jadwal_akhir();
    $id = $this->session->userdata('id_session');
        $list = $this->ModelSiswa->get_prakerin($id)->result();


        date_default_timezone_set('Asia/Jakarta');
            $y = date("Y");
            $m=date("m");
            $d=date("d");
            $akhir = explode('-',$tgl_akhir['tgl_akhir']);
            $awal = explode('-',$tgl_awal['tgl_awal']);
            
            // $val = $this->ModelMahasiswa->get_jadwal()->result();

            // if($val!=0){
                if(@($y-$awal[0]==0 && $m-$awal[1]==0 && $d-$awal[2]>=0)&&($y-$akhir[0]==0 && $m-$akhir[1]==0 && $d-$akhir[2]<=0)){
                    $l=1;
                }else{
                    $l=0;
                } 
                // if($val<1){
                //     $l=2;
                // }
            // }else{
            //     $l=2;
            // }
        $data = array(
            "menu"      => "MenuSiswa",
            "panelbody" => "apps/siswa/review_prakerin",
            "list"      => $list,
              "tgl_awal" => $tgl_awal,
               "tgl_akhir" => $tgl_akhir,
    
                  "limit"=>$l
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




