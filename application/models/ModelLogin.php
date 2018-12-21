<?php

class ModelLogin extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this ->load ->database();
	}

	public function cek_siswa($user){
		$sql = "select count(NIS_USER) from tabel_user where NIS_USER='$user'";
		$query = $this ->db ->query($sql);
		return $row = $query ->row_array();
	}

	public function cek_guru($user){
		$sql = "select count(KODE_GURU_USER) from tabel_user where KODE_GURU_USER='$user'";
		$query = $this ->db ->query($sql);
		return $row = $query ->row_array();
	}
	
	public function cek_admin($user){
		$sql = "select count(KODE_ADMIN_USER) from tabel_user where KODE_ADMIN_USER='$user'";
		$query = $this ->db ->query($sql);
		return $row = $query ->row_array();
	}

	public function get_pass_siswa($user){

		$this ->db ->select('password');
		$this ->db ->from('tabel_user');
		$this ->db ->where('NIS_USER',$user);

		$query = $this ->db ->get();

		return $query;
	}

	public function get_pass_guru($user){

		$this ->db ->select('password');
		$this ->db ->from('tabel_user');
		$this ->db ->where('KODE_GURU_USER',$user);

		$query = $this ->db ->get();

		return $query;
	}
	
	public function get_pass_admin($user){

		$this ->db ->select('password');
		$this ->db ->from('tabel_user');
		$this ->db ->where('KODE_ADMIN_USER',$user);

		$query = $this ->db ->get();

		return $query;
	}

	public function get_level_siswa($user){

		$this ->db ->select('*');
		$this ->db ->from('tabel_user');
		$this ->db ->where('NIS_USER',$user);

		$query = $this ->db ->get();

		return $query;
	}

	public function get_level_guru($user){

		$this ->db ->select('*');
		$this ->db ->from('tabel_user');
		$this ->db ->where('KODE_GURU_USER',$user);

		$query = $this ->db ->get();

		return $query;
	}
	
	public function get_level_admin($user){

		$this ->db ->select('*');
		$this ->db ->from('tabel_user');
		$this ->db ->where('KODE_ADMIN_USER',$user);

		$query = $this ->db ->get();

		return $query;
	}

	public function get_name_siswa($user){
	
	$this->db->select('tabel_user.*,tabel_siswa.*'); 
    $this->db->from('tabel_user'); 
    $this->db->join('tabel_siswa', 'tabel_siswa.NIS = tabel_user.NIS_USER');
	$this->db->where('NIS_USER',$user);
    return $data = $this->db->get();
	}

	public function get_name_guru($user){
	
	$this->db->select('tabel_user.*,tabel_guru.*'); 
    $this->db->from('tabel_user'); 
	$this->db->join('tabel_guru', 'tabel_guru.KODE_GURU = tabel_user.KODE_GURU_USER');
	$this->db->where('KODE_GURU_USER',$user);
    return $data = $this->db->get(); 
	}
	
	public function get_name_admin($user){
	
	$this->db->select('tabel_user.*,tabel_admin.*'); 
    $this->db->from('tabel_user'); 
    $this->db->join('tabel_admin', 'tabel_admin.KODE_ADMIN = tabel_user.KODE_ADMIN_USER');
	$this->db->where('KODE_ADMIN_USER',$user);
    return $data = $this->db->get();
	}
}

?>