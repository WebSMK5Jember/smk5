<?php
class M_jadwal extends CI_Model{

	function get_all_jadwal(){
		$hsl=$this->db->query("SELECT tabel_jadwal.*,KODE_KELAS, KODE_MAPEL, KODE_GURU, JAM , RUANG, HARI FROM tabel_jadwal JOIN tbl_kelas ON 'tabel_jadwal.KODE_KELAS'='tbl_kelas.kelas_id' JOIN tabel_mapel ON  
			'tabel_jadwal.KODE_MAPEL_JADWAL'='tabel_mapel.KODE_MAPEL' JOIN tbl_guru ON 'tabel_jadwal.KODE_GURU'='tbl_guru.guru_id'");
		return $hsl;
	}

	function simpan_jadwal($kodekelas,$kodemapel,$kodeguru, $jam,$ruang,$hari){
		$hsl=$this->db->query("INSERT INTO tabel_jadwal (KODE_KELAS, KODE_MAPEL_JADWAL, KODE_GURU, JAM , RUANG, HARI) VALUES ('$kodekelas','$kodemapel','$kodeguru','$jam','$ruang','$hari')");
		return $hsl;
	}

function update_jadwal($kode,$kodekelas,$kodemapel,$kodeguru, $jam,$ruang,$hari){
		$hsl=$this->db->query("UPDATE tabel_jadwal SET KODE_KELAS='$kodekelas', KODE_MAPEL_JADWAL='$kodemapel',KODE_GURU='$kodeguru',JAM='$jam', RUANG='$ruang', HARI='$hari' WHERE KODE_JADWAL='$kode'");
		return $hsl;
	}

	function hapus_jadwal($kode){
		$hsl=$this->db->query("DELETE FROM tabel_jadwal WHERE KODE_JADWAL='$kode'");
		return $hsl;
	}

	function get_all_guru(){
		$hsl=$this->db->query("SELECT * from tbl_guru");
		return $hsl;
	}

	function get_all_mapel(){
		$hsl=$this->db->query("SELECT * FROM  tabel_mapel");
		return $hsl;
	}
function get_all_kelas(){
		$hsl=$this->db->query("SELECT tbl_kelas.*,NAMA_JURUSAN FROM tbl_kelas JOIN tabel_jurusan ON kelas_jurusan_id=KODE_JURUSAN");
		return $hsl;
	}

	
}