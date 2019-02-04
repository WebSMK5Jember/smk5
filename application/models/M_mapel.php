<?php
class M_mapel extends CI_Model{

	function get_all_mapel(){
		$hsl=$this->db->query("SELECT * FROM  tabel_mapel");
		return $hsl;
	}

	



	function simpan_mapel($kode,$nama){
		$hsl=$this->db->query("INSERT INTO tabel_mapel (KODE_MAPEL, NAMA_MAPEL) VALUES ('$kode','$nama')");
		return $hsl;
	}

	function update_mapel($kode,$nama){
		$hsl=$this->db->query("UPDATE tabel_mapel SET KODE_MAPEL='$kode',NAMA_MAPEL='$nama' WHERE KODE_MAPEL='$kode'");
		return $hsl;
	}

	function hapus_kelas($kode){
		$hsl=$this->db->query("DELETE FROM tabel_mapel WHERE KODE_MAPEL='$kode'");
		return $hsl;
	}


}