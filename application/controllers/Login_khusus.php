<?php

Class Login_khusus extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
		$this ->load ->model('ModelLogin');
		$this ->load ->model('ModelUi');

	}

    public function index(){
        $this ->load->view('public_khusus/homeLogin_khusus');
    }

    public function prosesLogin_khusus(){

    	$user = $this ->input ->post('username');
    	$pass = ($this ->input ->post('pass'));


    	$vsk = $this ->ModelLogin ->cek_siswa($user);
		$vgk = $this ->ModelLogin ->cek_guru($user);
    	$vak = $this ->ModelLogin ->cek_admin($user);
    	
    	if($vsk != 0 && $vgk !=0 && $vak !=0){
    	
    		$valk_pass_siswa = $this ->ModelLogin ->get_pass_siswa($user)->row_array();
    		$valk_pass_guru = $this ->ModelLogin ->get_pass_guru($user)->row_array();
			$valk_pass_admin = $this ->ModelLogin ->get_pass_admin($user)->row_array();


	    	if($valk_pass_guru['password'] == $pass){
	    		$this ->session ->set_userdata('logon_khusus', true);
    			$data = $this ->ModelLogin ->get_level_guru($user)->row_array();
				$gurk = $this->ModelLogin->get_name_guru($user)->row_array();

	    		if($data['LEVEL'] == 1){

	    			$this ->session ->set_userdata('LEVEL', '1');
	    			$this ->session ->set_userdata('id_session', $data['KODE_GURU_USER']);
	    			$this ->session ->set_userdata('name_session', $gurk['NAMA_GURU']);
				redirect('kepsek_khusus');
	    			
					$this ->load ->view('apps_khusus/kepsek/index.php');
	    		}else if($data['LEVEL'] == 2){

	    			$this ->session ->set_userdata('LEVEL', '2');
	    			$this ->session ->set_userdata('id_session', $data['KODE_GURU_USER']);
	    			$this ->session ->set_userdata('name_session', $gurk['NAMA_GURU']);

	    		redirect('guru_khusus');
	    			$this ->load ->view('apps_khusus/guru/index.php');
	    		}else{
	    			echo "no akses";
	    		}
    		}else if($valk_pass_siswa['password'] == $pass){
	    		$this ->session ->set_userdata('logon_khusus', true);
    			$data = $this ->ModelLogin ->get_level_siswa($user)->row_array();
				$siswk = $this->ModelLogin->get_name_siswa($user)->row_array();

	    		if($data['LEVEL'] == 4){

	    			$this ->session ->set_userdata('LEVEL', '4');
	    			$this ->session ->set_userdata('id_session', $data['NIS_USER']);
	    			$this ->session ->set_userdata('name_session', $siswk['NAMA_SISWA']);

	    			redirect('siswa_khusus');
	    			$this ->load ->view('apps_khusus/siswa/index.php');
						
	    		}else{
	    			echo "no akses";
	    		}
				
				}else if($valk_pass_admin['password'] == $pass){
	    		$this ->session ->set_userdata('logon_khusus', true);
    			$data = $this ->ModelLogin ->get_level_admin($user)->row_array();
				$admk = $this->ModelLogin->get_name_admin($user)->row_array();

	    		if($data['LEVEL'] == 5){

	    			$this ->session ->set_userdata('LEVEL', '4');
	    			$this ->session ->set_userdata('id_session', $data['KODE_ADMIN_USER']);
	    			$this ->session ->set_userdata('name_session', $admk['NAMA_ADMIN']);

	    		redirect('admin_khusus');
						$this ->load ->view('apps_khusus/admin/index.php');
	    		}else{
	    			echo "no akses";
	    		}
    		}else{
    			$this ->session ->set_flashdata('msg', $this ->ModelUi ->alert('Username atau password anda salah !','danger'));
    			redirect('login_khusus');
    		}
    	}
}
    

    public function logout_khusus(){

    	$this ->session ->sess_destroy();
    	redirect(base_url("login_khusus"));
    }
}
?>