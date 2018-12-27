<?php

class ModelGuru extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this ->load ->database();
	}



	function get_data_diri($id){
	$this->db->select('*'); 
    $this->db->from('tabel_guru'); 
    $this->db->join('tabel_mapel', 'tabel_mapel.KODE_MAPEL = tabel_guru.KODE_MAPEL', 'left');
	$this->db->join('tabel_jabatan', 'tabel_jabatan.KODE_JABATAN = tabel_guru.KODE_JABATAN', 'left');
	$this->db->join('tabel_piket', 'tabel_piket.KODE_PIKET = tabel_guru.KODE_PIKET', 'left');
     $data = array(
				'tabel_guru.KODE_GURU'=>$id
				);
			$this ->db ->where($data,$id);

			$query = $this ->db ->get();

			return $query;
	}

	

}

?>