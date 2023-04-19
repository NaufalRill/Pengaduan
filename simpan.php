<?php
require 'koneksi.php';
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];

$register="insert into masyarakat values('$nik','$nama','$user','$pass','$telp')";
mysqli_query($con,$register);
echo "you have been registered successfully";

{
?>
<script type="text/javascript">
alert ('Data Berhasil DIsimpan, Silakan Login');
window.location="index.php";
</script>


<?php
}
?>