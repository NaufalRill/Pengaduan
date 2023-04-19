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
<div id="navbar">
<button class="openbtn" onclick="openNav()">&#9776;</button>
<a href="new-comp.php">NEW</a>
<a href="pro-comp.php">PROCESS</a>
<a href="done-comp.php">FINISH</a>
<a href="generate-laporan.php">GENERATE LAPORAN</a>
</div>

<div id="mySidebar" class="sidebar">
<h2>PROFILE</h2>
<div class="profile">
<br>
  <table>
  <tbody>
		<?php
        session_start();
		include 'koneksi.php';
		$user =$_SESSION['username'];
		$data = mysqli_query($con, "select *from petugas where username='$user'");
		if (mysqli_num_rows($data)>0) {
			$no=1;
			while ($tampil=mysqli_fetch_array($data)){
				?>
				
				<tr>
				<p><?php echo $tampil["username"];?><p>
				</tr>
				
				<tr>
				<p><?php echo $tampil["nama_petugas"];?><p>
				</tr>
				
				<tr>
				<p><?php echo $tampil["telp"];?><p>
				</tr>
				
				<tr>
				<p><?php echo $tampil["level"];?><p>
				</tr>
			<?php }}?>
</tbody>
</table>

</div>
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<a href="halaman-admin.php">HOME</a>
<a href="logout.php">LOGOUT</a>


</div>



</header>

	<div class="container">
	<div class="card" style="padding: 55px; width: 55%; margin: 0 auto; margin-top: 5%;">
	<center>
<h1>Bagian Administrasi</h1>
<p> Suara masyarakat merupakan bagian penting untuk membuat sebuah negara dan bangsa lebih sejahtera. Kita sebagai administrator LaporYuk mempunyai pekerjaan untuk
memastikan suara mereka terdengar dan ditindaklanjuti.</p>


  </center>
          
          
           </div> 
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
    <img src="img/logo1.jpg" height="200px" width="200px">
  </div>
  <div class="column">
    <img src="img/logo2.jpg" >
  </div>
  <div class="column">
    <img src="img/logo3.png" >
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