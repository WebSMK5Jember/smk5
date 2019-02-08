<?php
class m_tempat_prakerin extends CI_Model{

	function get_all_tempat(){
		$hsl=$this->db->query("SELECT * FROM tabel_tempat_prakerin");
		return $hsl;
	}

	function simpan_tempat($kode,$nama,$lokasi){
		$hsl=$this->db->query("INSERT INTO tabel_tempat_prakerin (KODE_TEMPAT, NAMA_TEMPAT_PRAKERIN, LOKASI) VALUES ('$kode','$nama','$lokasi')");
		return $hsl;
	}

function update_tempat($kode,$nama,$lokasi){
		$hsl=$this->db->query("UPDATE tabel_tempat_prakerin SET KODE_TEMPAT='$kode',NAMA_TEMPAT_PRAKERIN='$nama', LOKASI='$lokasi' WHERE KODE_TEMPAT='$kode'");
		return $hsl;
	}

	function hapus_tempat($kode){
		$hsl=$this->db->query("DELETE FROM tabel_tempat_prakerin WHERE KODE_TEMPAT='$kode'");
		return $hsl;
	}

	function hapus_daftar_prakerin($kode){
		$hsl=$this->db->query("DELETE FROM tabel_prakerin WHERE KODE_TEMPAT='$kode'");
		return $hsl;
	}
}