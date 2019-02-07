<?php

Class guru_si extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
        $this->load->helper(array('form','url'));
		$this ->load ->model('ModelGuru');
        $this ->load ->model('ModelUi');
		if($this ->session ->userdata('logon') != true && $this ->session ->userdata('level') != 2){

			redirect(base_url('login'));
		}
	}

    public function index(){
        $id = $this->session->userdata('id_session');
        $list = $this->ModelGuru->get_data_diri($id)->result();
        $data = array(
            "menu"      => "MenuGuru",
            "panelbody" => "apps/guru/index",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);
        
    }

    public function nilai_siswa(){
        
        $list = $this->ModelGuru->get_kelas();
        $data = array(
            "menu"      => "MenuGuru",
            "panelbody" => "apps/guru/data_kelas",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);
        
    }

    
    public function nilai_siswa_input(){
        $id = $this->session->userdata('id_session');
        $list = $this->ModelGuru->get_nilai_input($id)->result();
        $data = array(
            "menu"      => "MenuGuru",
            "panelbody" => "apps/guru/input_nilai",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);
        
    }

    public function absensi_siswa_input(){
        $id = $this->session->userdata('id_session');
        $list = $this->ModelGuru->get_absensi_input($id)->result();
        $data = array(
            "menu"      => "MenuGuru",
            "panelbody" => "apps/guru/input_absensi",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);
        
    }


    public function jadwal_guru(){
        $id = $this->session->userdata('id_session');
        $list = $this->ModelGuru->get_jadwal($id)->result();
        $data = array(
            "menu"      => "MenuGuru",
            "panelbody" => "apps/guru/jadwal_guru",
            "list"      => $list
        );
        $this->load->view('panelbody', $data);
        
    }
	
	
	function edit_nilai($ID_NILAI)
    {
		$ID_NILAI = $this->uri->segment(3);
        $list = $this ->ModelGuru ->nilai_edit($ID_NILAI)->row_array();
        
        $data = array(
            'menu' => 'MenuGuru',
            'panelbody' => 'apps/guru/edit_nilai',
            "form_edit_nilai" => "apps/guru/form_edit_nilai",
            'list' => $list
            
        );
        $this ->load ->view('panelbody',$data);
    
    }

    function simpan_edit_nilai()
    {
            $ID_NILAI = $this->input->post('ID_NILAI');
			$data = array(
            'SEMESTER'=> $this->input->post('SEMESTER'),
            'TUGAS1'=> $this->input->post('TUGAS1'),
			 'TUGAS2'=> $this->input->post('TUGAS2'),
			  'TUGAS3'=> $this->input->post('TUGAS3'),
			   'TUGAS4'=> $this->input->post('TUGAS4'),
			    'TUGAS5'=> $this->input->post('TUGAS5'),
				 'UH1'=> $this->input->post('UH1'),
				  'UH2'=> $this->input->post('UH2'),
				   'UH3'=> $this->input->post('UH3'),
				    'UH4'=> $this->input->post('UH4'),
					 'UTS'=> $this->input->post('UTS'),
					  'UAS'=> $this->input->post('UAS'),
					   'NRATARAPOT'=> $this->input->post('RAPORT')
					    
            
        );
        $this->db->where('ID_NILAI', $ID_NILAI);
        $this->db->update('tabel_nilai', $data);
        redirect('guru_si/nilai_siswa_input');
    
    }
	
	public function hapus_nilai_siswa(){
        $ID_NILAI = $this ->uri ->segment(3);
        $this ->db ->where('ID_NILAI',$ID_NILAI);
        $this ->db ->delete('tabel_nilai');

        redirect('guru_si/nilai_siswa_input');
    }

   
    
}