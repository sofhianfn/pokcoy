<?php

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$dbase = 'pokcoy';

	$con = mysqli_connect($host,$user,$pass) 
	OR DIE ("koneksi ke database MySQL gagal, silakan buat/sesuaikan");
	
	mysqli_select_db($con,$dbase) 
	OR DIE ("koneksi ke database MySQL gagal, silakan buat/sesuaikan");

?>