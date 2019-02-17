<?php
	/* ===== www.dedykuncoro.com ===== */
	include 'koneksi.php';
	
	class usr{}
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	if ((empty($username)) || (empty($password))) { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Kolom tidak boleh kosong"; 
		die(json_encode($response));
	}
	
	$query = mysqli_query($koneksi, "SELECT * FROM tbl_pengguna WHERE pengguna_username='$username' AND pengguna_password=md5('$password')");
	
	$row = mysqli_fetch_array($query);
	
	if (!empty($row)){
		$response = new usr();
		$response->success = 1;
		$response->message = "Selamat datang ".$row['pengguna_username'];
		$response->id = $row['pengguna_id'];
		$response->username = $row['pengguna_username'];
		die(json_encode($response));
		
	} else { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Username atau password salah";
		die(json_encode($response));
	}
	
	mysql_close();


	//=================== KALAU PAKAI MYSQLI YANG ATAS SEMUA DI REMARK, TERUS YANG INI RI UNREMARK ========
	// include_once "koneksi.php";

	// class usr{}
	
	// $username = $_POST["username"];
	// $password = $_POST["password"];
	
	// if ((empty($username)) || (empty($password))) { 
	// 	$response = new usr();
	// 	$response->success = 0;
	// 	$response->message = "Kolom tidak boleh kosong"; 
	// 	die(json_encode($response));
	// }
	
	// $query = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password'");
	
	// $row = mysqli_fetch_array($query);
	
	// if (!empty($row)){
	// 	$response = new usr();
	// 	$response->success = 1;
	// 	$response->message = "Selamat datang ".$row['username'];
	// 	$response->id = $row['id'];
	// 	$response->username = $row['username'];
	// 	die(json_encode($response));
		
	// } else { 
	// 	$response = new usr();
	// 	$response->success = 0;
	// 	$response->message = "Username atau password salah";
	// 	die(json_encode($response));
	// }
	
	// mysqli_close($con);

?>