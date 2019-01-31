<?php

class ModelAdmin extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this ->load ->database();
		
	}



	function get_data_diri($id){
	$this->db->select('*'); 
    $this->db->from('tabel_admin'); 
    $this->db->join('tabel_jabatan', 'tabel_jabatan.KODE_JABATAN = tabel_admin.JABATAN', 'left');
	
    $data = array(
				'tabel_admin.KODE_ADMIN'=>$id
				);
			$this ->db ->where($data,$id);

			$query = $this ->db ->get();

			return $query;
	}

	public function get_kelas(){
		return $this ->db ->get("tabel_kelas");
	}

	public function get_prodi(){
		return $this ->db ->get("table_prodi");
	}
	public function get_jabatan(){
		return $this ->db ->get("tabel_jabatan");
	}
	public function get_piket(){
		return $this ->db ->get("tabel_piket");
	}
	public function get_mapel(){
		return $this ->db ->get("tabel_mapel");
	}
	public function get_guru(){
		return $this ->db ->get("tabel_guru");
	}
}

?>