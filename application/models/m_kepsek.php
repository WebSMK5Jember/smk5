<?php
class m_kepsek extends CI_Model{

	

	function get_all_laporguru(){
		$hsl=$this->db->query("SELECT tabel_laporguru.*,DATE_FORMAT(TANGGAL_LAPORGURU,'%d %M %Y') AS tanggal FROM tabel_laporguru ORDER BY KODE_LAPORGURU DESC");
		return $hsl;
	}
	
	function get_all_saransiswa(){
		$hsl=$this->db->query("SELECT tabel_saran.*,DATE_FORMAT(TANGGAL_KRITIKSARAN,'%d %M %Y') AS tanggal FROM tabel_saran ORDER BY KODE_SARAN DESC");
		return $hsl;
	}
	
	function get_all_sarana(){
		$hsl=$this->db->query("SELECT tabel_laporsarana.*,DATE_FORMAT(TANGGAL_LAPORANSARANA,'%d %M %Y') AS tanggal FROM tabel_laporsarana ORDER BY KODE_LAPORSRANA DESC");
		return $hsl;
	}

	function hapus_laporguru($kode){
		$hsl=$this->db->query("DELETE FROM tabel_laporguru WHERE KODE_LAPORGURU='$kode'");
		return $hsl;
	}
	function hapus_sarana($kode){
		$hsl=$this->db->query("DELETE FROM tabel_laporsarana WHERE KODE_SRANA='$kode'");
		return $hsl;
	}
	
	function hapus_saransiswa($kode){
		$hsl=$this->db->query("DELETE FROM tabel_saran WHERE KODE_SARAN='$kode'");
		return $hsl;
	}

	function update_status_laporguru(){
		$hsl=$this->db->query("UPDATE tabel_laporguru SET STATUS_LAPOR_GURU='0'");
		return $hsl;
	}
	
	function update_status_sarana(){
		$hsl=$this->db->query("UPDATE tabel_laporsarana SET STATUS_LAPOR_SARANA='0'");
		return $hsl;
	}
	
	function update_status_saransiswa(){
		$hsl=$this->db->query("UPDATE tabel_saran SET STATUS_SARAN='0'");
		return $hsl;
	}
}