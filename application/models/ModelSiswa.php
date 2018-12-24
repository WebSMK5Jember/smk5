<?php

class ModelSiswa extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this ->load ->database();
	}



	function get_data_diri($id){
	$this->db->select('*'); 
    $this->db->from('tabel_siswa'); 
    $this->db->join('table_prodi', 'table_prodi.KODE_PRODI = tabel_siswa.KODE_PRODI', 'left');
	$this->db->join('tabel_kelas', 'tabel_kelas.KODE_KELAS = tabel_siswa.KODE_KELAS', 'left');
    $data = array(
				'tabel_siswa.NIS'=>$id
				);
			$this ->db ->where($data,$id);

			$query = $this ->db ->get();

			return $query;
	}

	function get_jadwal_pelajaran($id){
		$this->db->select('*'); 
		$this->db->from('tabel_jadwal');
		$this->db->join('tabel_kelas', 'tabel_kelas.KODE_KELAS = tabel_jadwal.KODE_KELAS', 'left');
		$this->db->join('tabel_mapel', 'tabel_mapel.KODE_MAPEL = tabel_jadwal.KODE_MAPEL', 'left');
		$this->db->join('tabel_guru', 'tabel_guru.KODE_GURU = tabel_jadwal.KODE_GURU', 'left');
		$this->db->join('tabel_siswa', 'tabel_siswa.KODE_KELAS = tabel_kelas.KODE_KELAS', 'left');
		$data = array(
				'tabel_siswa.NIS'=>$id
				);
			$this ->db ->where($data,$id);

			$query = $this ->db ->get();

			return $query;
	}

	function get_nilai($id){
		$this->db->select('*'); 
		$this->db->from('tabel_nilai');
		$this->db->join('tabel_kelas', 'tabel_kelas.KODE_KELAS = tabel_nilai.KODE_KELAS', 'left');
		$this->db->join('tabel_mapel', 'tabel_mapel.KODE_MAPEL = tabel_nilai.KODE_MAPEL', 'left');
		$this->db->join('tabel_guru', 'tabel_guru.KODE_GURU = tabel_nilai.KODE_GURU', 'left');
		$this->db->join('tabel_siswa', 'tabel_siswa.NIS = tabel_nilai.NIS', 'left');
		$data = array(
				'tabel_siswa.NIS'=>$id
				);
			$this ->db ->where($data,$id);

			$query = $this ->db ->get();

			return $query;

}
	function get_absensi($id){
		$this->db->select('*'); 
		$this->db->from('tabel_absensi');
		$this->db->join('tabel_mapel', 'tabel_mapel.KODE_MAPEL = tabel_absensi.KODE_MAPEL', 'left');
		$this->db->join('tabel_siswa', 'tabel_siswa.NIS = tabel_absensi.NIS', 'left');
		$data = array(
				'tabel_siswa.NIS'=>$id
				);
			$this ->db ->where($data,$id);

			$query = $this ->db ->get();

			return $query;

}
}
?>