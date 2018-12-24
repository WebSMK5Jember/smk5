<?php

class ModelSiswa extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this ->load ->database();
	}



	function get_data_diri(){
	$this->db->select('*'); 
    $this->db->from('tabel_siswa'); 
    $this->db->join('table_prodi', 'table_prodi.KODE_PRODI = tabel_siswa.KODE_PRODI', 'left');
	$this->db->join('tabel_kelas', 'tabel_kelas.KODE_KELAS = tabel_siswa.KODE_KELAS', 'left');
    $data = $this->db->get(); 
    return $data->result(); 
	}

	function get_jadwal_pelajaran(){
		$this->db->select('*'); 
		$this->db->from('tabel_jadwal');
		$this->db->join('tabel_kelas', 'tabel_kelas.KODE_KELAS = tabel_jadwal.KODE_KELAS', 'left');
		$this->db->join('tabel_mapel', 'tabel_mapel.KODE_MAPEL = tabel_jadwal.KODE_MAPEL', 'left');
		$this->db->join('tabel_guru', 'tabel_guru.KODE_GURU = tabel_jadwal.KODE_GURU', 'left');
		$data = $this->db->get();
	return $data->result();
	}

	function get_nilai(){
		$this->db->select('*'); 
		$this->db->from('tabel_nilai');
		$this->db->join('tabel_kelas', 'tabel_kelas.KODE_KELAS = tabel_nilai.KODE_KELAS', 'left');
		$this->db->join('tabel_mapel', 'tabel_mapel.KODE_MAPEL = tabel_nilai.KODE_MAPEL', 'left');
		$this->db->join('tabel_guru', 'tabel_guru.KODE_GURU = tabel_nilai.KODE_GURU', 'left');
		$data = $this->db->get();
	return $data->result();

}
	function get_absensi(){
		$this->db->select('*'); 
		$this->db->from('tabel_absensi');
		$this->db->join('tabel_mapel', 'tabel_mapel.KODE_MAPEL = tabel_absensi.KODE_MAPEL', 'left');
		$this->db->join('tabel_siswa', 'tabel_siswa.NIS = tabel_absensi.NIS', 'left');
		$data = $this->db->get();
	return $data->result();

}
}
?>