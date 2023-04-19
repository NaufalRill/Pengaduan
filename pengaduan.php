<!DOCTYPE html>
<html>
<head>
	<title>LaporYuk</title>
	
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link rel="icon" href="img/icon.png">
	
</head>
<body>
<header>

<div class="logo">
<h1><font face="Fantasy" size="100" color="#ffffff">LaporYuk!</font></h1>
           </div>
<div id="navbar">
<button class="openbtn" onclick="openNav()">&#9776;</button>
<a href="pengaduan.php">PENGADUAN</a>
</div>

<div id="mySidebar" class="sidebar">
<h2>PROFILE</h2>
<div class="profile">
<br>
  <table>
  <tbody>
		<?php
        @session_start();
		include 'koneksi.php';
		$user =$_SESSION['username'];
		$data = mysqli_query($con, "select *from masyarakat where username='$user'");
		if (mysqli_num_rows($data)>0) {
			$no=1;
			while ($tampil=mysqli_fetch_array($data)){
				?>
				<tr>
				<p><?php echo $tampil["nik"];?><p>
				</tr>
				
				<tr>
				<p><?php echo $tampil["username"];?><p>
				</tr>
				
				<tr>
				<p><?php echo $tampil["nama"];?><p>
				</tr>
				
				<tr>
				<p><?php echo $tampil["telp"];?><p>
				</tr>
			<?php }}?>
</tbody>
</table>

</div>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="halaman-masyarakat.php">HOME</a>
<a href="pengaduan.php">PENGADUAN</a>
<a href="logout.php">LOGOUT</a>
</div>

</header>
<body>

	<div class="container">
<h2 style="text-align: center;">Apa yang bisa kami bantu?</h2>
<form action="input-complaint.php" method="post" enctype="multipart/form-data">
<form class="user" method="post" action="input-complaint.php" enctype="multipart/form-data">
 <form>  
          
          <center>
		  	<label>Tanggal</label><br>
			
			<i class="fas fa-calendar-alt"></i><br>
			<br>
			<input type="text" name="tgl_pengaduan" align="center" readonly value="<?php echo date("y-m-d-h"); ?>">
			<br>
			<br>
            <label>Laporan : </label>   <br>
			<i class="fas fa-bullhorn"></i><br>
			<br>
            <textarea class="inputt" rows="10" cols="100" type="textarea" placeholder="Tulis Laporan" name="complaint"></textarea>
			
			<br>
            
			<label>Unggah Foto</label> <br>
			<i class="fas fa-camera"></i><br>
			<br>
			<input type="file" name="foto" /><br>
			<font color="blue"> Tipe yang bisa di upload : .jpg, .jpeg, .png, .gif</font>
			<br>
            <input type="submit" name="submit" value="Send"/>
			<input type="reset" class="btn btn-warning" value="Hapus"/>
             
          
    </form>                     
</form>
</div>

<br/>
<br/>
</div>

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