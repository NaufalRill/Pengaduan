<?php
include 'koneksi.php';

$id = $_POST['id_pengaduan'];
$status = $_POST['status'];

$sql=mysqli_query($con,"update pengaduan set status='$status' where id_pengaduan='$id'");
if ($sql)
{
	?>
	<script type="text/javascript">
	alert ("status changed succesfully");
	window.location="pro-comp.php" ;
	</script>
<?php
}
else {
	die ('Gagal!' .mysqli_error($con));
}
?>
