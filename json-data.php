
<?php 
 
 /*
 
 penulis: Muhammad yusuf
 website: http://www.kodingindonesia.com/
 
 */
 
	//Import File Koneksi Database
	require_once('koneksi.php');
	
	//Membuat SQL Query
	$sql = "SELECT * FROM tbl_pengumuman";
	
	//Mendapatkan Hasil
	$r = mysqli_query($koneksi,$sql);
	
	//Membuat Array Kosong 
	$result = array();
	
	while($row = mysqli_fetch_array($r)){
		
		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 
		array_push($result,array(
			"id"=>$row['pengumuman_judul'],
			"name"=>$row['pengumuman_deskripsi']
		));
	}
	
	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($koneksi);
?>