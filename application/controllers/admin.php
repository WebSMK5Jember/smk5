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
        $id = $this->session->userdata('id_session');
        $list = $this->ModelAdmin->get_data_diri($id)->result();
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

        $dataUser = array(
    		'NIS_USER' => $this ->input ->post('NIS'),
    		'PASSWORD' => md5($this ->input ->post('NIS')),
    		'level' => '4');
        
        $this ->db ->insert('tabel_siswa',$data);
        $this ->db ->insert("tabel_user",$dataUser);
        
        redirect('admin/input_siswa');


    }else {  
        echo "<script> alert('Data NIS yang anda masukkan sudah ada')</script>";

        

    }
$data = array(
            "menu"      => "MenuAdmin",
            "panelbody" => "apps/admin/inputsiswa"

            
           );
     
     $this->load->view('panelbody', $data);

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

         $dataUser = array(
    		'KODE_GURU_USER' => $this ->input ->post('KODE_GURU'),
    		'PASSWORD' => md5($this ->input ->post('KODE_GURU')),
    		'level' => '2');
        

        $this ->db ->insert('tabel_guru',$data);
        $this ->db ->insert("tabel_user",$dataUser);
        redirect('admin/input_guru');


    }else {  
        echo "<script> alert('Data kode guru yang anda masukkan sudah ada')</script>";
    }
}

public function input_admin(){

        $data = array(
            "menu"      => "MenuAdmin",
            "panelbody" => "apps/admin/inputadmin"
            
           );
        $this->load->view('panelbody', $data);
      }
    
    public function save_input_admin(){
    
    $cek = $this->db->query("SELECT * FROM tabel_admin where KODE_ADMIN='".$this->input->post('KODE_ADMIN')."'")->num_rows();
    if ($cek<=0){
        $data = array(
            'KODE_ADMIN' => $this->input->post('KODE_ADMIN'),
            'NAMA_ADMIN' => $this->input->post('NAMA_ADMIN'),
            'JABATAN' => $this->input->post('JABATAN'),
            'EMAIL' => $this->input->post('EMAIL')
            
    );

         $dataUser = array(
            'KODE_ADMIN_USER' => $this ->input ->post('KODE_ADMIN'),
            'PASSWORD' => md5($this ->input ->post('KODE_ADMIN')),
            'level' => '5');
        

        $this ->db ->insert('tabel_admin',$data);
        $this ->db ->insert("tabel_user",$dataUser);
        redirect('admin/input_admin');


    }else {  
        echo "<script> alert('Data kode guru yang anda masukkan sudah ada')</script>";
    }
}



public function input_jadwal(){

         $kelas = $this ->ModelAdmin->get_kelas()->result();
        $mapel = $this ->ModelAdmin->get_mapel()->result();
       
        $guru = $this ->ModelAdmin->get_guru()->result();
        $data = array(
            "menu"      => "MenuAdmin",
            "panelbody" => "apps/admin/inputjadwal",

                "kelas" => $kelas,
               "mapel" => $mapel,
               "guru" => $guru
            
           );
        $this->load->view('panelbody', $data);
      }
public function save_input_jadwal(){
    
   
        $data = array(
            'KODE_KELAS' => $this->input->post('KODE_KELAS'),
            'KODE_MAPEL' => $this->input->post('KODE_MAPEL'),
            'KODE_GURU' => $this->input->post('KODE_GURU'),
           'JAM' => $this->input->post('JAM'),
           'RUANG' => $this->input->post('RUANG'),
           'HARI' => $this->input->post('HARI'),

           
    );
        
        $this ->db ->insert('tabel_jadwal',$data);
        redirect('admin/input_jadwal');


    }
}

   ?>