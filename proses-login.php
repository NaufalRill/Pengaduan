<?php

session_start();
include 'koneksi.php';

$user=$_POST['username'];
$pass=$_POST['password'];


$sql = mysqli_query ($con, "SELECT * FROM masyarakat WHERE username='$user' AND password='$pass'");
$data = mysqli_num_rows($sql);

if ($data > 0){
    $sql=mysqli_fetch_array($sql);
    session_start();
    $_SESSION['username'] = $user;
    $_SESSION['status'] = "login";
    header("location:halaman-masyarakat.php");
}
else{
   header("location:index.php?pesan=gagal");
}
?>