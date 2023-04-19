<?php 
// mengaktifkan session pada php
session_start();
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($con,"select * from petugas where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="Admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Admin";
		// alihkan ke halaman dashboard admin
		header("location:halaman-admin.php");
 
 
	// cek jika user login sebagai pengurus
	}else if($data['level']=="Petugas"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Petugas";
		// alihkan ke halaman dashboard pengurus
		header("location:halaman-petugas.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login-petugas.php?pesan=gagal");
	}	
}else{
	header("location:login-petugas.php?pesan=gagal");
}
 
?>