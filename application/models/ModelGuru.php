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

	public function get_kelas(){
		return $this ->db ->get("tbl_kelas");
	}
	public function get_nilai($ID_NILAI){
		return $this ->db ->get("tabel_nilai");
	}
	public function get_data_siswa(){

		$this ->db ->select('*');
		$this ->db ->from('tbl_siswa');
		$this ->db ->where('siswa_kelas_id= $kelas_id');


		$query = $this ->db ->get();

		return $query;
	}

	public function get_jadwal($id){
		$this ->db ->select('*');
		$this ->db ->from('tabel_jadwal');
		$this->db->join('tabel_mapel', 'tabel_mapel.KODE_MAPEL = tabel_jadwal.KODE_MAPEL_JADWAL', 'left');
		$this->db->join('tbl_kelas', 'tbl_kelas.kelas_id = tabel_jadwal.KODE_KELAS', 'left');
		$this->db->join('tbl_guru', 'tbl_guru.guru_id = tabel_jadwal.KODE_GURU', 'left');
	
		$data = array(
				'tabel_jadwal.KODE_GURU'=>$id
				);
			$this ->db ->where($data,$id);

			$query = $this ->db ->get();

			return $query;		

	}

	
	
	public function get_nilai_input($id){
		$this ->db ->select('*');
		$this ->db ->from('tabel_nilai');
		$this->db->join('tbl_siswa', 'tbl_siswa.siswa_nis = tabel_nilai.NIS', 'left');
		$this->db->join('tabel_mapel', 'tabel_mapel.KODE_MAPEL = tabel_nilai.KODE_MAPEL_NILAI', 'left');
		$this->db->join('tbl_kelas', 'tbl_kelas.kelas_id= tabel_nilai.KODE_KELAS', 'left');
		$this->db->join('tbl_guru', 'tbl_guru.guru_id = tabel_nilai.KODE_GURU', 'left');
	
		$data = array(
				'tabel_nilai.KODE_GURU'=>$id
				);
			$this ->db ->where($data,$id);

			$query = $this ->db ->get();

			return $query;		

	}



	function get_data_diri_akun($id){
	$this->db->select('*'); 
    $this->db->from('tbl_pengguna'); 

    $data = array(
				'pengguna_guru'=>$id
				);
			$this ->db ->where($data,$id);

			$query = $this ->db ->get();

			return $query;
	}
	
	public function get_absensi_input($id){
		$this ->db ->select('*');
		$this ->db ->from('tabel_absensi');
		$this->db->join('tbl_siswa', 'tbl_siswa.siswa_nis = tabel_absensi.NIS_ABSEN', 'left');
		$this->db->join('tabel_mapel', 'tabel_mapel.KODE_MAPEL = tabel_absensi.KODE_MAPEL_ABSEN', 'left');
		$this->db->join('tbl_kelas', 'tbl_kelas.kelas_id= tabel_absensi.KODE_KELAS_ABSEN', 'left');
		$this->db->join('tbl_guru', 'tbl_guru.guru_id = tabel_absensi.KODE_GURU_ABSEN', 'left');
		
		$data = array(
				'tabel_absensi.KODE_GURU_ABSEN'=>$id
				);
			$this ->db ->where($data,$id);

			$query = $this ->db ->get();

			return $query;		

	}
	  function edit_nilai($ID_NILAI)
    {
        $q="SELECT * FROM  tabel_nilai WHERE ID_NILAI='$ID_NILAI'";
        $query=$this->db->query($q);
        return $query->row();
    }

    function simpan_edit_user($ID_NILAI, $NIS, $KODE_MAPEL, $KODE_GURU, 
		$SEMESTER, $TUGAS1,$TUGAS2,$TUGAS3,$TUGAS4,$TUGAS5,$UH1,$UH2,$UH3,$UH4,$UTS,$UAS,$RAPORT)
    {
        $data = array(
            'ID_NILAI'        => $ID_NILAI,
			 'NIS'        => $NIS,
			  'KODE_MAPEL_NILAI'        => $KODE_MAPEL,
			   'KODE_GURU'        => $KODE_GURU,
			    'SEMESTER'        => $SEMESTER,
				 'TUGAS1'        => $TUGAS1,
				  'TUGAS2'        => $TUGAS2,
				   'TUGAS3'        => $TUGAS3,
				    'TUGAS4'        => $TUGAS4,
					 'TUGAS5'        => $TUGAS5,
					  'UH1'        => $UH1,
					   'UH2'        => $UH2,
					    'UH3'        => $UH3,
						 'UH4'        => $UH4,
						  'UTS'        => $UTS,
						   'UAS'        => $UAS,
						    'RAPORT'        => $RAPORT
           
        );
        $this->db->where('ID_NILAI', $ID_NILAI);
        $this->db->update('tabel_nilai', $data);    
    }
	
	public function nilai_edit($ID_NILAI){
      $this ->db ->select('*');
		$this ->db ->from('tabel_nilai');
		$this->db->join('tbl_siswa', 'tbl_siswa.siswa_nis = tabel_nilai.NIS', 'left');
		$this->db->join('tabel_mapel', 'tabel_mapel.KODE_MAPEL = tabel_nilai.KODE_MAPEL_NILAI', 'left');
		$this->db->join('tbl_kelas', 'tbl_kelas.kelas_id= tabel_nilai.KODE_KELAS', 'left');
		$this->db->join('tbl_guru', 'tbl_guru.guru_id = tabel_nilai.KODE_GURU', 'left');
	
		$this ->db ->where('ID_NILAI',$ID_NILAI);

		$query = $this ->db ->get();

		return $query;
	}



	public function absensi_edit($KODE_ABSENSI){
 $this ->db ->select('*');
		$this ->db ->from('tabel_absensi');
		$this->db->join('tbl_siswa', 'tbl_siswa.siswa_nis = tabel_absensi.NIS_ABSEN', 'left');
		$this->db->join('tabel_mapel', 'tabel_mapel.KODE_MAPEL = tabel_absensi.KODE_MAPEL_ABSEN', 'left');
		$this->db->join('tbl_guru', 'tbl_guru.guru_id = tabel_absensi.KODE_GURU_ABSEN', 'left');
		$this->db->join('tbl_kelas', 'tbl_kelas.kelas_id = tabel_absensi.KODE_KELAS_ABSEN', 'left');
	$this ->db ->where('KODE_ABSENSI',$KODE_ABSENSI);

			$query = $this ->db ->get();

			return $query;		

	
	


}

}