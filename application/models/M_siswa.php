<?php 
class M_siswa extends CI_Model{

	function get_all_siswa(){
		$hsl=$this->db->query("SELECT tbl_siswa.*,kelas_nama FROM tbl_siswa JOIN tbl_kelas ON siswa_kelas_id=kelas_id");
		return $hsl;
	}

	function simpan_siswa($nis,$nama,$jenkel,$kelas,$tempat_lahir,$tgl_lahir,$alamat,$ortu,$asal_sekolah,$ijasah,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_siswa  (siswa_nis,siswa_nama,siswa_jenkel,siswa_kelas_id, siswa_tempat_lahir, siswa_tgl_lahir, siswa_alamat, siswa_ortu, siswa_asal_sekolah, no_ijasah,siswa_photo) VALUES ('$nis','$nama','$jenkel','$kelas','$tempat_lahir','$tgl_lahir','$alamat','$ortu','$asal_sekolah','$ijasah','$photo')");
		return $hsl;
	}
	function simpan_siswa_tanpa_img($nis,$nama,$jenkel,$kelas,$tempat_lahir,$tgl_lahir,$alamat,$ortu,$asal_sekolah,$ijasah){
		$hsl=$this->db->query("INSERT INTO tbl_siswa  (siswa_nis,siswa_nama,siswa_jenkel,siswa_kelas_id, siswa_tempat_lahir, siswa_tgl_lahir, siswa_alamat, siswa_ortu, siswa_asal_sekolah, no_ijasah) VALUES ('$nis','$nama','$jenkel','$kelas','$tempat_lahir','$tgl_lahir','$alamat','$ortu','$asal_sekolah','$ijasah')");
		return $hsl;
	}

	function update_siswa($nis,$nama,$jenkel,$kelas,$tempat_lahir,$tgl_lahir,$alamat,$ortu,$asal_sekolah,$ijasah,$photo){
		$hsl=$this->db->query("UPDATE tbl_siswa SET siswa_nama='$nama',siswa_jenkel='$jenkel',siswa_kelas_id='$kelas',siswa_tempat_lahir='$tempat_lahir',siswa_tgl_lahir='$tgl_lahir',siswa_alamat='$alamat',siswa_ortu='$ortu',siswa_asal_sekolah='$asal_sekolah',no_ijasah='$ijasah',siswa_photo='$photo' WHERE siswa_nis='$nis'");
		return $hsl;
	}
	function update_siswa_tanpa_img($nis,$nama,$jenkel,$kelas,$tempat_lahir,$tgl_lahir,$alamat,$ortu,$asal_sekolah,$ijasah){
		$hsl=$this->db->query("UPDATE tbl_siswa SET siswa_nama='$nama',siswa_jenkel='$jenkel',siswa_kelas_id='$kelas',siswa_tempat_lahir='$tempat_lahir',siswa_tgl_lahir='$tgl_lahir',siswa_alamat='$alamat',siswa_ortu='$ortu',siswa_asal_sekolah='$asal_sekolah',no_ijasah='$ijasah' WHERE siswa_nis='$nis'");
		return $hsl;
	}
	function hapus_siswa($nis){
		$hsl=$this->db->query("DELETE FROM tbl_siswa WHERE siswa_nis='$nis'");
		return $hsl;
	}
	function hapus_user($nis){
		$hsl=$this->db->query("DELETE FROM tbl_pengguna WHERE pengguna_siswa='$nis'");
		return $hsl;
	}

	function siswa(){
		$hsl=$this->db->query("SELECT tbl_siswa.*,kelas_nama FROM tbl_siswa JOIN tbl_kelas ON siswa_kelas_id=kelas_id");
		return $hsl;
	}
	function siswa_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_siswa.*,kelas_nama FROM tbl_siswa JOIN tbl_kelas ON siswa_kelas_id=kelas_id limit $offset,$limit");
		return $hsl;
	}

	function kirim_saran($nama,$deskripsi){
		$hsl=$this->db->query("INSERT INTO tabel_saran(NAMA_SISWA,DESCRIPSI_SARAN) VALUES ('$nama','$deskripsi')");
		return $hsl;
	}

	function get_siswa(){
		$hsl=$this->db->query("SELECT * from tbl_siswa");
		return $hsl;
	}

}