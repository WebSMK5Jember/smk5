<?php 
class M_guru extends CI_Model{

	
	
	function get_all_guru_piket(){
		$hsl=$this->db->query("SELECT tbl_guru.*,tabel_piket.*,tabel_mapel.*,tabel_jabatan.* FROM tbl_guru JOIN tabel_piket ON guru_piket_id=KODE_PIKET JOIN tabel_mapel ON guru_mapel_id=KODE_MAPEL JOIN tabel_jabatan ON guru_jabatan_id=KODE_JABATAN" );
		return $hsl;
	}
function get_all_guru(){
		$hsl=$this->db->query("SELECT * from tbl_guru");
		return $hsl;
	}
	function simpan_guru($kode,$mapel,$jabatan,$piket,$nip,$nama,$alamat,$jam,$jenkel,$tmp_lahir,$tgl_lahir,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_guru (guru_id,guru_mapel_id,guru_jabatan_id,guru_piket_id,guru_nip,guru_nama,guru_alamat,guru_jumlah_jam,guru_jenkel,guru_tmp_lahir,guru_tgl_lahir,guru_photo) VALUES ('$kode','$mapel','$jabatan','$piket','$nip','$nama','$alamat','$jam','$jenkel','$tmp_lahir','$tgl_lahir','$photo')");
		return $hsl;
	}
	function simpan_guru_tanpa_img($kode,$mapel,$jabatan,$piket,$nip,$nama,$alamat,$jam,$jenkel,$tmp_lahir,$tgl_lahir){
		$hsl=$this->db->query("INSERT INTO tbl_guru (guru_id,guru_mapel_id,guru_jabatan_id,guru_piket_id,guru_nip,guru_nama,guru_alamat,guru_jumlah_jam,guru_jenkel,guru_tmp_lahir,guru_tgl_lahir) VALUES ('$kode','$mapel','$jabatan','$piket','$nip','$nama','$alamat','$jam','$jenkel','$tmp_lahir','$tgl_lahir')");
		return $hsl;
	}

	function update_guru($kode,$mapel,$jabatan,$piket,$nip,$nama,$alamat,$jam,$jenkel,$tmp_lahir,$tgl_lahir,$photo){
		$hsl=$this->db->query("UPDATE tbl_guru SET guru_mapel_id='$mapel',guru_jabatan_id='$jabatan',guru_piket_id='$piket',guru_nip='$nip',guru_nama='$nama',guru_alamat='$alamat',guru_jumlah_jam='$jam',guru_jenkel='$jenkel',guru_tmp_lahir='$tmp_lahir',guru_tgl_lahir='$tgl_lahir',guru_photo='$photo' WHERE guru_id='$kode'");
		return $hsl;
	}
	function update_guru_tanpa_img($kode,$mapel,$jabatan,$piket,$nip,$nama,$alamat,$jam,$jenkel,$tmp_lahir,$tgl_lahir){
		("UPDATE tbl_guru SET guru_mapel_id='$mapel',guru_jabatan_id='$jabatan',guru_piket_id='$piket',guru_nip='$nip',guru_nama='$nama',guru_alamat='$alamat',guru_jumlah_jam='$jam',guru_jenkel='$jenkel',guru_tmp_lahir='$tmp_lahir',guru_tgl_lahir='$tgl_lahir' WHERE guru_id='$kode'");
		return $hsl;
	}
	function hapus_guru($kode){
		$hsl=$this->db->query("DELETE FROM tbl_guru WHERE guru_id='$kode'");
		return $hsl;
	}
	function hapus_user($kode){
		$hsl=$this->db->query("DELETE FROM tbl_pengguna WHERE pengguna_guru='$kode'");
		return $hsl;
	}

	//front-end
	
	


	public function get_jabatan(){
		return $this ->db ->get("tabel_jabatan");
	}
	public function get_piket(){
		return $this ->db ->get("tabel_piket");
	}
	public function get_mapel(){
		return $this ->db ->get("tabel_mapel");
	}
	public function get_guru(){
		return $this ->db ->get("tbl_guru");
	}

	function guru(){
		$hsl=$this->db->query("SELECT * FROM tbl_guru");
		return $hsl;
	}
	function guru_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_guru limit $offset,$limit");
		return $hsl;
	}

	function kirim_sarana($nama,$laporan){
		$hsl=$this->db->query("INSERT INTO tabel_laporsarana(NAMA_SARANA,ISI_LAPORAN) VALUES ('$nama','$laporan')");
		return $hsl;
	}

	function kirim_laporanguru($nama,$laporanguru){
		$hsl=$this->db->query("INSERT INTO tabel_laporguru(NAMA_GURU_LAPOR,ISI_LAPORGURU) VALUES ('$nama','$laporanguru')");
		return $hsl;
	}
	function cari_guru($keyword){
		$hsl=$this->db->query("SELECT tbl_guru.*,DATE_FORMAT(guru_tgl_lahir,'%d/%m/%Y') AS tanggal FROM tbl_guru WHERE guru_nama LIKE '%$keyword%' LIMIT 5");
		return $hsl;
	}

}