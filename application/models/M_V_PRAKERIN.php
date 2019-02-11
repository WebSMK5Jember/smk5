<?php
class M_V_PRAKERIN extends CI_Model{

	
	function get_all_prakerin(){
		$hsl=$this->db->query("SELECT * from tabel_prakerin");
		return $hsl;
	}


function update_prakerin($kode,$KODE_GURU,$KODE_TEMPAT_P){
		$hsl=$this->db->query("UPDATE tabel_prakerin SET KODE_GURU='$KODE_GURU', KODE_TEMPAT_P='$KODE_TEMPAT_P' WHERE KODE_PRAKERIN='$kode'");
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


	
}