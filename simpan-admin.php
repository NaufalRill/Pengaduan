<?php
require 'koneksi.php';
$nama_petugas=$_POST['nama_petugas'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];
$level=$_POST['level'];

$tambah=mysqli_query($con, "insert into petugas (nama_petugas,username,password,telp,level) values('$nama_petugas','$user','$pass','$telp','$level')");

echo "you have been registered successfully";

{
?>
<script type="text/javascript">
alert ('Data Berhasil DIsimpan, Silakan Login');
window.location="register.php";
</script>


<?php
}
?>