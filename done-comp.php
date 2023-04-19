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

<?php 
// mengaktifkan session pada php
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$user = $_SESSION['username'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($con,"select * from petugas where username='$user'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="Admin"){
		?>
		<br>
		<a href="halaman-admin.php">HOME</a>
 
	<?php
	}else if($data['level']=="Petugas"){
		?>
		<br>
		<a href="halaman-petugas.php">HOME</a>
 
 <?php
}}
 
?>

</div>
<br>
<br>
<br>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="halaman-petugas.php">HOME</a>
<a href="logout.php">LOGOUT</a>
</div>



</header>


	<div class="container1">
	<center>
<h1>PENGADUAN</h1>



    <table border="1" cellpadding="0" cellspacing="0">
	<thead>
        <tr>
		    <th width="40px">No</th>
            <th>Tgl.Pengaduan</th>
            <th>Isi Laporan</th>
			<th>status</th>
        </tr>
		</thead>
		<tfoot>
		<tr>
		<th colspan='4'>Complaint | 2021</th>
		</tr>
		</tfoot>
		<tbody>
		
		<?php
		include 'koneksi.php';
		$status="selesai";
		$data = mysqli_query($con, "select *from pengaduan where status='$status' order by
		tgl_pengaduan ASC");
		if (mysqli_num_rows($data)>0) {
			$no=1;
			while ($tampil=mysqli_fetch_array($data)){
				?>
				<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $tampil["tgl_pengaduan"];?></td>
				<td><?php echo $tampil["isi_laporan"];?></td>
				<td><button class="into" onclick="document.location=''">Finish</button></td>
				</tr>
			<?php $no++;}}?>
        </tbody>
		
    </table>
</form>
<br>
<br>


  </center>
          
          
            
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