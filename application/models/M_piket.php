<?php
class M_piket extends CI_Model{

	function get_all_piket(){
		$hsl=$this->db->query("SELECT * FROM tabel_piket");
		return $hsl;
	}

	function simpan_piket($kode,$nama){
		$hsl=$this->db->query("INSERT INTO tabel_piket (KODE_PIKET, HARI) VALUES ('$kode','$nama')");
		return $hsl;
	}

function update_piket($kode,$nama){
		$hsl=$this->db->query("UPDATE tabel_piket SET KODE_PIKET='$kode',HARI='$nama' WHERE KODE_PIKET='$kode'");
		return $hsl;
	}

	function hapus_piket($kode){
		$hsl=$this->db->query("DELETE FROM tabel_piket WHERE KODE_PIKET='$kode'");
		return $hsl;
	}

	
}