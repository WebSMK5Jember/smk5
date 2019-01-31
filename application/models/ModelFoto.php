<?php

class ModelFoto extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this ->load ->database();
	}

public function get_foto(){
		return $this ->db ->get("tabel_galeri");
	}

}

?>