<?php

class ModelAdmin extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this ->load ->database();
		
	}



	function get_data_diri(){
	$this->db->select('*'); 
    $this->db->from('tabel_admin'); 
    $this->db->join('tabel_jabatan', 'tabel_jabatan.KODE_JABATAN = tabel_admin.JABATAN', 'left');
	
    $data = $this->db->get(); 
    return $data->result(); 
	}

	function get_input_siswa(){
		$this->db->set('NAMA_SISWA',$this->input->post('NAMA_SISWA'));
		$this->db->set('NIS',$this->input->post('NIS'));

	return $this->db->insert('tabel_siswa');

}
}

?>