<?php

Class Login_si extends CI_Controller{

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
    	$pass = md5($this ->input ->post('pass'));


    	$vs = $this ->ModelLogin ->cek_siswa($user);
		$vg = $this ->ModelLogin ->cek_guru($user);
    	$va = $this ->ModelLogin ->cek_admin($user);
    	
    	if($vs != 0 && $vg !=0 && $va !=0){
    	
    		$val_pass_siswa = $this ->ModelLogin ->get_pass_siswa($user)->row_array();
    		$val_pass_guru = $this ->ModelLogin ->get_pass_guru($user)->row_array();
			$val_pass_admin = $this ->ModelLogin ->get_pass_admin($user)->row_array();


	    	if($val_pass_guru['pengguna_password'] == $pass){
	    		$this ->session ->set_userdata('logon', true);
    			$data = $this ->ModelLogin ->get_level_guru($user)->row_array();
				$gur = $this->ModelLogin->get_name_guru($user)->row_array();

	    		if($data['pengguna_level'] == 2){

	    			$this ->session ->set_userdata('pengguna_level', '2');
	    			$this ->session ->set_userdata('id_session', $data['pengguna_guru']);
	    			$this ->session ->set_userdata('name_session', $gur['guru_nama']);
				redirect('kepsek_si');
	    			
					$this ->load ->view('apps/kepsek/index.php');
	    		}else if($data['pengguna_level'] == 3){

	    			$this ->session ->set_userdata('pengguna_level', '3');
	    			$this ->session ->set_userdata('id_session', $data['pengguna_guru']);
	    			$this ->session ->set_userdata('name_session', $gur['guru_nama']);

	    		redirect('guru_si');
	    			$this ->load ->view('apps/guru/index.php');
	    		}else{
	    			echo "no akses";
	    		}
    		}else if($val_pass_siswa['pengguna_password'] == $pass){
	    		$this ->session ->set_userdata('logon', true);
    			$data = $this ->ModelLogin ->get_level_siswa($user)->row_array();
				$sisw = $this->ModelLogin->get_name_siswa($user)->row_array();

	    		if($data['pengguna_level'] == 4){

	    			$this ->session ->set_userdata('pengguna_level', '4');
	    			$this ->session ->set_userdata('id_session', $data['pengguna_siswa']);
	    			$this ->session ->set_userdata('name_session', $sisw['siswa_nama']);

	    			redirect('siswa_si');
						
	    		}else{
	    			echo "no akses";
	    		}
				
				}else if($val_pass_admin['pengguna_password'] == $pass){
	    		$this ->session ->set_userdata('logon', true);
    			$data = $this ->ModelLogin ->get_level_admin($user)->row_array();
				$adm = $this->ModelLogin->get_name_admin($user)->row_array();

	    		if($data['pengguna_level'] == 1){

	    			$this ->session ->set_userdata('pengguna_level', '1');
	    			$this ->session ->set_userdata('id_session', $data['pengguna_username']);
	    			$this ->session ->set_userdata('name_session', $adm['pengguna_nama']);

	    		redirect('admin_si_dashboard');
						$this ->load ->view('apps/admin/dashboard.php');
	    		}else{
	    			echo "no akses";
	    		}
    		}else{
    			$this ->session ->set_flashdata('msg', $this ->ModelUi ->alert('Username atau password anda salah !','danger'));
    			redirect('login_si');
    		}
    	}
}
    

    public function logout(){

    	$this ->session ->sess_destroy();
    	redirect(base_url("login_si"));
    }
}

?>