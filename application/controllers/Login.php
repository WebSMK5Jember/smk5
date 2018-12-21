<?php

Class Login extends CI_Controller{

	public function __construct(){
		
		parent::__construct();
		$this ->load ->model('ModelLogin');
		$this ->load ->model('ModelUi');

	}

    public function index(){
        $this ->load->view('public/homeLogin');
    }

    public function prosesLogin(){

    	$user = $this ->input ->post('username');
    	$pass = ($this ->input ->post('pass'));


    	$vs = $this ->ModelLogin ->cek_siswa($user);
		$vg = $this ->ModelLogin ->cek_guru($user);
    	$va = $this ->ModelLogin ->cek_admin($user);
    	
    	if($vs != 0 && $vg !=0 && $va !=0){
    	
    		$val_pass_siswa = $this ->ModelLogin ->get_pass_siswa($user)->row_array();
    		$val_pass_guru = $this ->ModelLogin ->get_pass_guru($user)->row_array();
			$val_pass_admin = $this ->ModelLogin ->get_pass_admin($user)->row_array();


	    	if($val_pass_guru['password'] == $pass){
	    		$this ->session ->set_userdata('logon', true);
    			$data = $this ->ModelLogin ->get_level_guru($user)->row_array();
				$gur = $this->ModelLogin->get_name_guru($user)->row_array();

	    		if($data['LEVEL'] == 1){

	    			$this ->session ->set_userdata('LEVEL', '1');
	    			$this ->session ->set_userdata('id_session', $data['KODE_GURU_USER']);
	    			$this ->session ->set_userdata('name_session', $gur['NAMA_GURU']);
				redirect('kepsek');
	    			
					$this ->load ->view('apps/kepsek/index.php');
	    		}else if($data['LEVEL'] == 2){

	    			$this ->session ->set_userdata('LEVEL', '2');
	    			$this ->session ->set_userdata('id_session', $data['KODE_GURU_USER']);
	    			$this ->session ->set_userdata('name_session', $gur['NAMA_GURU']);

	    		redirect('guru');
	    			$this ->load ->view('apps/guru/index.php');
	    		}else{
	    			echo "no akses";
	    		}
    		}else if($val_pass_siswa['password'] == $pass){
	    		$this ->session ->set_userdata('logon', true);
    			$data = $this ->ModelLogin ->get_level_siswa($user)->row_array();
				$sisw = $this->ModelLogin->get_name_siswa($user)->row_array();

	    		if($data['LEVEL'] == 4){

	    			$this ->session ->set_userdata('LEVEL', '4');
	    			$this ->session ->set_userdata('id_session', $data['NIS_USER']);
	    			$this ->session ->set_userdata('name_session', $sisw['NAMA_SISWA']);

	    			redirect('siswa');
						
	    		}else{
	    			echo "no akses";
	    		}
				
				}else if($val_pass_admin['password'] == $pass){
	    		$this ->session ->set_userdata('logon', true);
    			$data = $this ->ModelLogin ->get_level_admin($user)->row_array();
				$sisw = $this->ModelLogin->get_name_admin($user)->row_array();

	    		if($data['LEVEL'] == 5){

	    			$this ->session ->set_userdata('LEVEL', '4');
	    			$this ->session ->set_userdata('id_session', $data['KODE_ADMIN_USER']);
	    			$this ->session ->set_userdata('name_session', $sisw['NAMA_ADMIN']);

	    		redirect('admin');
						$this ->load ->view('apps/admin/index.php');
	    		}else{
	    			echo "no akses";
	    		}
    		}else{
    			$this ->session ->set_flashdata('msg', $this ->ModelUi ->alert('Username atau password anda salah !','danger'));
    			redirect('login');
    		}
    	}
}
    

    public function logout(){

    	$this ->session ->sess_destroy();
    	redirect(base_url("login"));
    }
}