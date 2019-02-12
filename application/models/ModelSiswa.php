<?php

class ModelSiswa extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this ->load ->database();
	}



	function get_data_diri($id){
	$this->db->select('*'); 
    $this->db->from('tbl_siswa'); 
	$this->db->join('tbl_kelas', 'tbl_kelas.kelas_id = tbl_siswa.siswa_kelas_id', 'left');
	$this->db->join('tabel_jurusan', 'tabel_jurusan.KODE_JURUSAN = tbl_kelas.kelas_jurusan_id', 'left');
    $data = array(
				'tbl_siswa.siswa_nis'=>$id
				);
			$this ->db ->where($data,$id);

			$query = $this ->db ->get();

			return $query;
	}

	function get_jadwal_pelajaran($id){
		$this->db->select('*'); 
		$this->db->from('tabel_jadwal');
		$this->db->join('tbl_kelas', 'tbl_kelas.kelas_id = tabel_jadwal.KODE_KELAS', 'left');
		$this->db->join('tabel_mapel', 'tabel_mapel.KODE_MAPEL = tabel_jadwal.KODE_MAPEL_JADWAL', 'left');
		$this->db->join('tbl_guru', 'tbl_guru.guru_id = tabel_jadwal.KODE_GURU', 'left');
		$this->db->join('tbl_siswa', 'tbl_siswa.siswa_kelas_id = tbl_kelas.kelas_id', 'left');
		$data = array(
				'tbl_siswa.siswa_nis'=>$id
				);
			$this ->db ->where($data,$id);

			$query = $this ->db ->get();

			return $query;
	}

	function get_nilai($id){
		$this->db->select('*'); 
		$this->db->from('tabel_nilai');
		$this->db->join('tbl_kelas', 'tbl_kelas.kelas_id = tabel_nilai.KODE_KELAS', 'left');
		$this->db->join('tabel_mapel', 'tabel_mapel.KODE_MAPEL = tabel_nilai.KODE_MAPEL_NILAI', 'left');
		$this->db->join('tbl_guru', 'tbl_guru.guru_id = tabel_nilai.KODE_GURU', 'left');
		$this->db->join('tbl_siswa', 'tbl_siswa.siswa_nis = tabel_nilai.NIS', 'left');
		$data = array(
				'tbl_siswa.siswa_nis'=>$id
				);
			$this ->db ->where($data,$id);

			$query = $this ->db ->get();

			return $query;

}
	function get_absensi($id){
		$this->db->select('*'); 
		$this->db->from('tabel_absensi');
		$this->db->join('tabel_mapel', 'tabel_mapel.KODE_MAPEL = tabel_absensi.KODE_MAPEL', 'left');
		$this->db->join('tbl_siswa', 'tbl_siswa.siswa_nis = tabel_absensi.NIS', 'left');
		$data = array(
				'tbl_siswa.siswa_nis'=>$id
				);
			$this ->db ->where($data,$id);

			$query = $this ->db ->get();

			return $query;

}

public function get_guru(){
		return $this ->db ->get("tbl_guru");
	}
public function get_tempat(){
		return $this ->db ->get("tabel_tempat_prakerin");
	}
	public function get_kelas(){
		return $this ->db ->get("tbl_kelas");
	}

	public function get_mapel(){
		return $this ->db ->get("tabel_mapel");
	}

function get_prakerin($id){
	$this->db->select('*'); 
    $this->db->from('tabel_prakerin'); 
	$this->db->join('tbl_guru', 'tbl_guru.guru_id = tabel_prakerin.KODE_GURU_P', 'left');
	$this->db->join('tbl_siswa', 'tbl_siswa.siswa_nis = tabel_prakerin.NIS', 'left');
	$this->db->join('tabel_tempat_prakerin', 'tabel_tempat_prakerin.KODE_TEMPAT = tabel_prakerin.KODE_TEMPAT_P', 'left');
    $data = array(
				'tabel_prakerin.KODE_PRAKERIN'=>$id
				);
			$this ->db ->where($data,$id);

			$query = $this ->db ->get();

			return $query;
	}


	function simpan_prakerin($id,$nis,$guru,$tempat,$minat,$surat){
		$hsl=$this->db->query("INSERT INTO tabel_prakerin  (NIS,KODE_GURU_P, KODE_TEMPAT_P, MINAT, PERSETUJUAN_ORGTUA) VALUES ('$nis','$guru','$tempat','$minat','$surat')");
$data = array(
				'tabel_prakerin.KODE_PRAKERIN'=>$id
				);
			$this ->db ->where($data,$id);

			$query = $this ->db ->get();


		return $hsl;
	}
}

?>