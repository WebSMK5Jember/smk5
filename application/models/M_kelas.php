<?php
class M_kelas extends CI_Model{

	function get_all_kelas(){
		$hsl=$this->db->query("SELECT tbl_kelas.*,NAMA_JURUSAN FROM tbl_kelas JOIN tabel_jurusan ON kelas_jurusan_id=KODE_JURUSAN");
		return $hsl;
	}

	



	function simpan_kelas($kode,$kode_jurusan,$nama){
		$hsl=$this->db->query("INSERT INTO tbl_kelas (kelas_id, kelas_jurusan_id, kelas_nama) VALUES ('$kode',$kode_jurusan,'$nama')");
		return $hsl;
	}

	function update_kelas($kode,$kode_jurusan,$nama){
		$hsl=$this->db->query("UPDATE tbl_kelas SET kelas_id='$kode',kelas_jurusan_id='$kode_jurusan',kelas_nama='$nama' WHERE kelas_id='$kode'");
		return $hsl;
	}

	function hapus_kelas($kode){
		$hsl=$this->db->query("DELETE FROM tbl_kelas WHERE kelas_id='$kode'");
		return $hsl;
	}


}