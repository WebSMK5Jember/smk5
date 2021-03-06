<?php
class M_nilai extends CI_Model{

	function get_all_nilai(){
		$hsl=$this->db->query("SELECT ID_NILAI,NIS,KODE_MAPEL_NILAI,KODE_KELAS,KODE_GURU,SEMESTER FROM tabel_nilai");
		return $hsl;
	}

		function get_all_absen(){
		$hsl=$this->db->query("SELECT KODE_ABSENSI,NIS_ABSEN,KODE_MAPEL_ABSEN,KODE_KELAS_ABSEN,KODE_GURU_ABSEN FROM tabel_absensi");
		return $hsl;
	}

	function simpan_nilai($kode,$KODE_KELAS,$KODE_MAPEL,$KODE_GURU, $Semester){
		$hsl=$this->db->query("INSERT INTO tabel_nilai (NIS, KODE_KELAS, KODE_MAPEL_NILAI, KODE_GURU, SEMESTER) VALUES ('$kode',  
			'$KODE_KELAS','$KODE_MAPEL','$KODE_GURU','$Semester')");
		return $hsl;
	}

function update_nilai($id,$kode,$KODE_KELAS,$KODE_MAPEL,$KODE_GURU,$Semester){
		$hsl=$this->db->query("UPDATE tabel_nilai SET NIS='$kode',KODE_KELAS='$KODE_KELAS', KODE_MAPEL_NILAI='$KODE_MAPEL',KODE_GURU='$KODE_GURU',SEMESTER='$Semester' WHERE ID_NILAI='$id'");
		return $hsl;
	}

	function hapus_nilai($id){
		$hsl=$this->db->query("DELETE FROM tabel_nilai WHERE ID_NILAI='$id'");
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
function get_all_siswa(){
		$hsl=$this->db->query("SELECT * from tbl_siswa");
		return $hsl;
	}


	function update_absen($id,$mapel,$guru,$kelas,$nis){
		$hsl=$this->db->query("UPDATE tabel_absensi SET KODE_MAPEL_ABSEN='$mapel',KODE_GURU_ABSEN='$guru', KODE_KELAS_ABSEN='$kelas',NIS_ABSEN='$nis' WHERE KODE_ABSENSI='$id'");
		return $hsl;
	}

	function hapus_absen($id){
		$hsl=$this->db->query("DELETE FROM tabel_absensi WHERE KODE_ABSENSI='$id'");
		return $hsl;
	}

	
}