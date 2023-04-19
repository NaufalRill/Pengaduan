<?php
require 'koneksi.php';
session_start();
$user =$_SESSION['username'];


$tgl=$_POST['tgl_pengaduan'];
$pengaduan =$_POST['complaint'];
$tgl=$_POST['tgl_pengaduan'];
$foto =$_FILES['foto']['name'];
$file =$_FILES['foto']['tmp_name'];
$status="0";

$take =mysqli_query($con,"select nik from masyarakat where username='$user'");
$nik=mysqli_fetch_array($take);
$a =$nik["nik"];
$tambah=mysqli_query($con, "insert into pengaduan (tgl_pengaduan,nik,isi_laporan,foto,status) values
('$tgl','$a','$pengaduan','$foto','$status')");

move_uploaded_file($file, "foto/" .$foto);
if ($tambah)
{
	?>
	<script type="text/javascript">
	alert ("Data Berhasil Disimpan");
	window.location="halaman-masyarakat.php";
	</script>
	<?php
}
else{
	die ('Gagal!' .mysqli_error($con));
}

?>