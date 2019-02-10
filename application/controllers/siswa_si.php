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

        $id = $this->session->userdata('id_session');
         $prakerin = $this ->ModelSiswa->get_prakerin($id)->result();
        $guru = $this ->ModelSiswa->get_guru()->result();
        $tempat = $this ->ModelSiswa->get_tempat()->result();


        $data = array(
            "menu"      => "MenuSiswa",
            "panelbody" => "apps/siswa/prakerin",

            "guru" => $guru,
            "tempat" => $tempat,
            "prakerin" => $prakerin
           
        );
        $this->load->view('panelbody', $data);
}
public function save_input_prakerin(){

    $cek = $this->db->query("SELECT * FROM tabel_prakerin where KODE_PRAKERIN='".$this->input->post('KODE_PRAKERIN')."'")->num_rows();
    if ($cek<=0){
         $config['upload_path'] = './assets/images/'; //path folder
                $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
                $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

     $this->upload->initialize($config);
                if(!empty($_FILES['filesurat']['name']))
                {
                    if ($this->upload->do_upload('filesurat'))
                    {
                            $gbr = $this->upload->data();
                            //Compress Image
                            $config['image_library']='gd2';
                            $config['source_image']='./assets/images/'.$gbr['file_name'];
                            $config['create_thumb']= FALSE;
                            $config['maintain_ratio']= FALSE;
                            $config['quality']= '60%';
                            $config['width']= 300;
                            $config['height']= 300;
                            $config['new_image']= './assets/images/'.$gbr['file_name'];
                            $this->load->library('image_lib', $config);
                            $this->image_lib->resize();


                             $photo=$gbr['file_name'];
                            $nis=strip_tags($this->input->post('NIS'));
                             $guru=strip_tags($this->input->post('guru_id'));
                             $tempat=strip_tags($this->input->post('KODE_TEMPAT'));
                              $minat=strip_tags($this->input->post('MINAT'));
                               $surat=strip_tags($this->input->post('filesurat'));


        $data = array(

            'KODE_PRAKERIN' => $this->input->post('KODE_PRAKERIN'),
            'NIS' => $this->input->post('NIS'),
            'KODE_GURU' => $this->input->post('KODE_GURU'),
            'KODE_TEMPAT_P' => $this->input->post('KODE_TEMPAT_P'),
            'MINAT' => $this->input->post('MINAT'),
            'PERSETUJUAN_ORGTUA' => $this->input->post('PERSETUJUAN_ORGTUA')
            
    );
        
        $this->db->insert('tabel_prakerin',$data);
        $this->db->ModelSiswa->simpan_prakerin()->result();
        redirect('siswa_si');


    }
}

}

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
            'STATUS' => $this->input->post('STATUS')
          
            
    );
        
        $this ->db ->insert('table_daful',$data);
        redirect('siswa_si');


    }


}