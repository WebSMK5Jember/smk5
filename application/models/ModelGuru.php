<?php

class ModelGuru extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this ->load ->database();
	}



	function get_data_diri($id){
	$this->db->select('*'); 
    $this->db->from('tbl_guru'); 
    $this->db->join('tabel_mapel', 'tabel_mapel.KODE_MAPEL = tbl_guru.guru_mapel_id', 'left');
	$this->db->join('tabel_jabatan', 'tabel_jabatan.KODE_JABATAN = tbl_guru.guru_jabatan_id', 'left');
	$this->db->join('tabel_piket', 'tabel_piket.KODE_PIKET = tbl_guru.guru_piket_id', 'left');
     $data = array(
				'tbl_guru.guru_id'=>$id
				);
			$this ->db ->where($data,$id);

			$query = $this ->db ->get();

			return $query;
	}

	

}

?>