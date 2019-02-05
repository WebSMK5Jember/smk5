<?php

class ModelGuru extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this ->load ->database();
	}



	function get_data_diri($id){
	$this->db->select('*'); 
    $this->db->from('tbl_guru'); 
    $this->db->join('tabel_mapel', 'tabel_mapel.KODE_MAPEL = tbl_guru.guru_mapel_id', 'left');
	$this->db->join('tabel_jabatan', 'tabel_jabatan.KODE_JABATAN = tbl_guru.guru_jabatan_id', 'left');
	$this->db->join('tabel_piket', 'tabel_piket.KODE_PIKET = tbl_guru.guru_piket_id', 'left');
     $data = array(
				'tbl_guru.guru_id'=>$id
				);
			$this ->db ->where($data,$id);

			$query = $this ->db ->get();

			return $query;
	}

	public function get_kelas(){
		return $this ->db ->get("tbl_kelas");
	}
	public function get_data_siswa(){

		$this ->db ->select('*');
		$this ->db ->from('tbl_siswa');
		$this ->db ->where('siswa_kelas_id= $kelas_id');


		$query = $this ->db ->get();

		return $query;
	}

	public function get_jadwal($id){
		$this ->db ->select('*');
		$this ->db ->from('tabel_jadwal');
		$this->db->join('tabel_mapel', 'tabel_mapel.KODE_MAPEL = tabel_jadwal.KODE_MAPEL_JADWAL', 'left');
		$this->db->join('tbl_kelas', 'tbl_kelas.kelas_id = tabel_jadwal.KODE_KELAS', 'left');
		$this->db->join('tbl_guru', 'tbl_guru.guru_id = tabel_jadwal.KODE_GURU', 'left');
	
		$data = array(
				'tabel_jadwal.KODE_GURU'=>$id
				);
			$this ->db ->where($data,$id);

			$query = $this ->db ->get();

			return $query;		

	}
	
	public function get_nilai_input($id){
		$this ->db ->select('*');
		$this ->db ->from('tabel_nilai');
		$this->db->join('tbl_siswa', 'tbl_siswa.siswa_nis = tabel_nilai.NIS', 'left');
		$this->db->join('tabel_mapel', 'tabel_mapel.KODE_MAPEL = tabel_nilai.KODE_MAPEL', 'left');
		$this->db->join('tbl_kelas', 'tbl_kelas.kelas_id= tabel_nilai.KODE_KELAS', 'left');
		$this->db->join('tbl_guru', 'tbl_guru.guru_id = tabel_nilai.KODE_GURU', 'left');
	
		$data = array(
				'tabel_nilai.KODE_GURU'=>$id
				);
			$this ->db ->where($data,$id);

			$query = $this ->db ->get();

			return $query;		

	}
	


}

?>