<?php

date_default_timezone_set("Asia/Jakarta");
error_reporting(0);

	// sesuaikan dengan server anda
	$host 	= '127.0.0.1'; // host server
        $port   = '3303';
	$user 	= 'root';  // username server
	$pass 	= 'root'; // password server, kalau pakai xampp kosongin saja
	$dbname = 'test'; // nama database anda
	
	try{
		$config = new PDO("mysql:host=$host;port=$port;dbname=$dbname;", $user,$pass);
		//echo 'sukses';
	}catch(PDOException $e){
		echo 'KONEKSI GAGAL' .$e -> getMessage();
	}
	
	$view = 'fungsi/view/view.php'; // direktori fungsi select data
?>

