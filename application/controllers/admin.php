<?php

Class admin extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
		$this ->load ->model('ModelAdmin');
        $this ->load ->model('ModelUi');
		if($this ->session ->userdata('logon') != true && $this ->session ->userdata('level') != 5){

			redirect(base_url('login'));
		}
	}

    public function index(){
        $list = $this->ModelAdmin->get_data_diri();
        $data = array(
            "menu"      => "MenuAdmin",
            "panelbody" => "apps/admin/index",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);
        
    }
public function input_siswa(){

        $kelas = $this ->ModelAdmin->get_kelas()->result();
        $prodi = $this ->ModelAdmin->get_prodi()->result();
        $data = array(
            "menu"      => "MenuAdmin",
            "panelbody" => "apps/admin/inputsiswa",

               "kelas" => $kelas,
               "prodi" => $prodi
            
           );
        $this->load->view('panelbody', $data);
}
 public function save_input_siswa(){
    
    $cek = $this->db->query("SELECT * FROM tabel_siswa where NIS='".$this->input->post('NIS')."'")->num_rows();
    if ($cek<=0){
        $data = array(
            'NIS' => $this->input->post('NIS'),
            'NAMA_SISWA' => $this->input->post('NAMA_SISWA'),
            'KODE_PRODI' => $this->input->post('KD_PRODI'),
            'KODE_KELAS' => $this->input->post('KD_KELAS'),
            'TEMPAT_LAHIR' => $this->input->post('TEMPAT_LAHIR'),
            'TANGGAL_LAHIR' => $this->input->post('TANGGAL_LAHIR'),
            'ALAMAT_SISWA' => $this->input->post('ALAMAT_SISWA'),
            'JENIS_KELAMIN' => $this->input->post('JENIS_KELAMIN'),
            'NAMA_ORANG_TUA' => $this->input->post('NAMA_ORANG_TUA'),
            'ASAL_SEKOLAH' => $this->input->post('ASAL_SEKOLAH'),
            'NO_IJASAH' => $this->input->post('NO_IJASAH')
    );
        
        $this ->db ->insert('tabel_siswa',$data);
        redirect('admin/input_siswa');


    }else {  
        echo "<script> alert('Data NIS yang anda masukkan sudah ada')</script>";
    }
}

public function input_guru(){

        $mapel = $this ->ModelAdmin->get_mapel()->result();
        $jabatan = $this ->ModelAdmin->get_jabatan()->result();
        $piket = $this ->ModelAdmin->get_piket()->result();
        $data = array(
            "menu"      => "MenuAdmin",
            "panelbody" => "apps/admin/inputguru",

               "mapel" => $mapel,
               "jabatan" => $jabatan,
               "piket" => $piket
            
           );
        $this->load->view('panelbody', $data);
      }
    
    public function save_input_guru(){
    
    $cek = $this->db->query("SELECT * FROM tabel_guru where KODE_GURU='".$this->input->post('KODE_GURU')."'")->num_rows();
    if ($cek<=0){
        $data = array(
            'KODE_GURU' => $this->input->post('KODE_GURU'),
            'NIP' => $this->input->post('NIP'),
            'NAMA_GURU' => $this->input->post('NAMA_GURU'),
            'ALAMAT_GURU' => $this->input->post('ALAMAT_GURU'),
            'JUMLAH_JAM' => $this->input->post('JUMLAH_JAM'),
            'KODE_MAPEL' => $this->input->post('KODE_MAPEL'),
            'KODE_JABATAN' => $this->input->post('KODE_JABATAN'),
            'KODE_PIKET' => $this->input->post('KODE_PIKET')
    );
        
        $this ->db ->insert('tabel_guru',$data);
        redirect('admin/input_guru');


    }else {  
        echo "<script> alert('Data kode guru yang anda masukkan sudah ada')</script>";
    }
}
}
   ?>