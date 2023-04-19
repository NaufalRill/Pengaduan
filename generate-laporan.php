<!DOCTYPE html>
<html>
<head>
	<title>LaporYuk</title>
	
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="icon" href="img/icon.png">

	
</head>
<body>
<header>

<div class="logo">
<h1><font face="Fantasy" size="100" color="#ffffff">LaporYuk!</font></h1>
           </div>




</header>

	<div class="container">
	<center>
<h1>HASIL LAPORAN</h1>
<?php
include 'koneksi.php';
?>
<table border="1" style="width: 100%">
<tr>
<th width="1%">No</th>
<th>Tgl.Pengaduan</th>
<th>Complaint</th>
<th>Foto</th>
<th width="10%">Status</th>
</tr>
<?php
$no = 1;
$status="selesai";
$sql = mysqli_query($con,"select *from pengaduan where status='$status' order by tgl_pengaduan ASC");
while($data = mysqli_fetch_array($sql)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $data['tgl_pengaduan']; ?></td>
<td><?php echo $data['isi_laporan']; ?></td>
<td><?php echo "<img src='foto/$data[foto]' width='90' height='90' />" ?></td>
<td><?php echo "Pengaduan Selesai" ?></td>
</tr>
<?php
}
?>
</table>


  </center>
<br>          
<br>
<br>
<br>
<br>         
<p align="right">_______________________</p>            
</div>

<br/>
<br/>

<div class="cage">
<hr/>
<br>
<footer>
<center>

<div class="row">
  <div class="column">
    <img src="img/logo1.jpg" height="200px" width="310px">
  </div>
  <div class="column">
    <img src="img/logo2.jpg" height="200px" width="300px">
  </div>
  <div class="column">
    <img src="img/logo3.png" height="200px" width="300px">
  </div>
</div>

<a href="https://www.smkn1tgt.sch.id/"<p>&copy; www.smkn1tgt.sch.id</a>.
2020 - 2021</p>
</center>
</footer>
</div>


</body>
</html>

<script>

window.print();

/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}


window.onscroll = function() {myFunction()};
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
    var siteWidth = 1280;
var scale = screen.width /siteWidth;

document.querySelector('meta[name="viewport"]').setAttribute('content', 'width='+siteWidth+', initial-scale='+scale+'');

</script>