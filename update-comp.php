<?php
include 'koneksi.php';

if (!isset($_SESSION)) {

session_start();
}

$id = $_POST['id_pengaduan'];
$tgl = $_POST['tgl_tanggapan'];
$status = $_POST['status'];
$response=$_POST['response'];
$username =$_SESSION['username'];

$take=mysqli_query($con,"select id_petugas from petugas where username='$username'");
$petugas=mysqli_fetch_array($take);
$a=$petugas["id_petugas"];

$sql=mysqli_query($con, "update pengaduan set status='$status' where id_pengaduan='$id'");
$sql2=mysqli_query($con,"insert into tanggapan (id_pengaduan,tgl_tanggapan,tanggapan,id_petugas) values ('$id','$tgl','$response','$a')");

if ($sql) {
	
  if($sql2){
	  ?>
	<script type="text/javascript"> 
	alert ("Data Berhasil Disimpan");
	window.location="new-comp.php";
	</script>
	
	<?php
  }else{
?>
	<script type="text/javascript"> 
	alert ("Data Berhasil Disimpan");
	window.location="new-comp.php";
	</script>
<?php
	}
}
else{
	die ('Gagal!' .mysqli_error($con));
}

?>