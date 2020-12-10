<?php
session_start();
 
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
 
 
$login = mysqli_query($mysqli, "SELECT * FROM akun WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
	$_SESSION['nama']    = $data['nama'];
 
	// cek jika user login sebagai admin
	if($data['role']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:index.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['role']=="pegawai"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "pegawai";
		// alihkan ke halaman dashboard pegawai
		header("location:index_pegawai.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>