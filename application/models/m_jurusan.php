<?php
class m_jurusan extends CI_Model{

	function get_all_jurusan(){
		$hsl=$this->db->query("SELECT * FROM tabel_jurusan");
		return $hsl;
	}

	function simpan_jurusan($kode,$nama){
		$hsl=$this->db->query("INSERT INTO tabel_jurusan (KODE_JURUSAN, NAMA_JURUSAN) VALUES ('$kode','$nama')");
		return $hsl;
	}

function update_jurusan($kode,$nama){
		$hsl=$this->db->query("UPDATE tabel_jurusan SET KODE_JURUSAN='$kode',NAMA_JURUSAN='$nama' WHERE KODE_JURUSAN='$kode'");
		return $hsl;
	}

	function hapus_jurusan($kode){
		$hsl=$this->db->query("DELETE FROM tabel_jurusan WHERE KODE_JURUSAN='$kode'");
		return $hsl;
	}

	function hapus_jurusan_kelas($kode){
		$hsl=$this->db->query("DELETE FROM tbl_kelas WHERE kelas_jurusan_id='$kode'");
		return $hsl;
	}
}