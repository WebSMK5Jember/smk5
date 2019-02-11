<?php

class ModelLogin extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this ->load ->database();
	}

	public function cek_siswa($user){
		$sql = "select count(pengguna_siswa) from tbl_pengguna where pengguna_siswa='$user'";
		$query = $this ->db ->query($sql);
		return $row = $query ->row_array();
	}

	public function cek_guru($user){
		$sql = "select count(pengguna_guru) from tbl_pengguna where pengguna_guru='$user'";
		$query = $this ->db ->query($sql);
		return $row = $query ->row_array();
	}
	
	public function cek_admin($user){
		$sql = "select count(pengguna_username) from tbl_pengguna where pengguna_username='$user'";
		$query = $this ->db ->query($sql);
		return $row = $query ->row_array();
	}

	public function get_pass_siswa($user){

		$this ->db ->select('pengguna_password');
		$this ->db ->from('tbl_pengguna');
		$this ->db ->where('pengguna_siswa',$user);

		$query = $this ->db ->get();

		return $query;
	}

	public function get_pass_guru($user){

		$this ->db ->select('pengguna_password');
		$this ->db ->from('tbl_pengguna');
		$this ->db ->where('pengguna_guru',$user);


		$query = $this ->db ->get();

		return $query;
	}
	
	public function get_pass_admin($user){

		$this ->db ->select('pengguna_password');
		$this ->db ->from('tbl_pengguna');
		$this ->db ->where('pengguna_username',$user);


		$query = $this ->db ->get();

		return $query;
	}

	public function get_level_siswa($user){

		$this ->db ->select('*');
		$this ->db ->from('tbl_pengguna');
		$this ->db ->where('pengguna_siswa',$user);

		$query = $this ->db ->get();

		return $query;
	}

	public function get_level_guru($user){

		$this ->db ->select('*');
		$this ->db ->from('tbl_pengguna');
		$this ->db ->where('pengguna_guru',$user);

		$query = $this ->db ->get();

		return $query;
	}
	
	public function get_level_admin($user){

		$this ->db ->select('*');
		$this ->db ->from('tbl_pengguna');
		$this ->db ->where('pengguna_username',$user);

		$query = $this ->db ->get();

		return $query;
	}

	public function get_name_siswa($user){
	
	$this->db->select('*'); 
    $this->db->from('tbl_siswa'); 
	$this->db->where('siswa_nis',$user);
    return $data = $this->db->get();
	
	}

	public function get_name_guru($user){
	$this->db->select('*'); 
    $this->db->from('tbl_guru'); 
	$this->db->where('pguru_id',$user);
    return $data = $this->db->get();
	}
    
	public function get_name_admin($user){
	
	$this->db->select('*'); 
    $this->db->from('tbl_pengguna'); 
	$this->db->where('pengguna_username',$user);
    return $data = $this->db->get();
	}
}

?>