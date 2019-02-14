<?php
class M_V_PRAKERIN extends CI_Model{

	
	function get_all_prakerin(){
		$hsl=$this->db->query("SELECT tabel_prakerin.*, tbl_guru.*,tabel_tempat_prakerin.* from tabel_prakerin join tbl_guru on KODE_GURU_P=guru_id JOIN tabel_tempat_prakerin on KODE_TEMPAT_P=KODE_TEMPAT");
		return $hsl;
	}


function update_prakerin($kode,$KODE_GURU,$KODE_TEMPAT_P){
		$hsl=$this->db->query("UPDATE tabel_prakerin SET KODE_GURU_P='$KODE_GURU', KODE_TEMPAT_P='$KODE_TEMPAT_P', status= '1' WHERE KODE_PRAKERIN='$kode'");
		return $hsl;
	}

	


	function get_all_guru(){
		$hsl=$this->db->query("SELECT * from tbl_guru");
		return $hsl;
	}

	function get_all_tempat(){
		$hsl=$this->db->query("SELECT * FROM  tabel_tempat_prakerin");
		return $hsl;
	}

	function get_all_tanggal(){
		$hsl=$this->db->query("SELECT * from tbl_tanggal");
		return $hsl;
	}
	function hapus_tanggal($kode){
		$hsl=$this->db->query("DELETE FROM tbl_tanggal WHERE id='$kode'");
		return $hsl;
	}
function update_tanggal($kode,$tgl_awal,$tgl_akhir){
		$hsl=$this->db->query("UPDATE tbl_tanggal SET tgl_awal='$tgl_awal', tgl_akhir='$tgl_akhir' WHERE id='$kode'");
		return $hsl;
	}
	function simpan_tanggal($tgl_awal,$tgl_akhir){
		$hsl=$this->db->query("INSERT INTO tbl_tanggal  (tgl_awal,tgl_akhir) VALUES ('$tgl_awal','$tgl_akhir')");
		return $hsl;
	}


function get_all_tanggal_review(){
		$hsl=$this->db->query("SELECT * from tbl_tanggal_review");
		return $hsl;
	}
	function hapus_tanggal_review($kode){
		$hsl=$this->db->query("DELETE FROM tbl_tanggal_review WHERE id='$kode'");
		return $hsl;
	}
function update_tanggal_review($kode,$tgl_awal,$tgl_akhir){
		$hsl=$this->db->query("UPDATE tbl_tanggal_review SET tgl_awal='$tgl_awal', tgl_akhir='$tgl_akhir' WHERE id='$kode'");
		return $hsl;
	}
	function simpan_tanggal_review($tgl_awal,$tgl_akhir){
		$hsl=$this->db->query("INSERT INTO tbl_tanggal_review  (tgl_awal,tgl_akhir) VALUES ('$tgl_awal','$tgl_akhir')");
		return $hsl;
	}



	
}