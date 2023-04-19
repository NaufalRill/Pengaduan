<!DOCTYPE html>
<html>
<head>
	<title>LaporYuk</title>
	
	<link rel="stylesheet" type="text/css" href="css/main1.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link rel="icon" href="img/icon.png">

	
</head>
<body>
<center>
<header>

<div class="logo">
<h1><font face="Fantasy" size="100" color="#ffffff">LaporYuk!</font></h1>
           </div>
<div id="navbar">
<a href="register.php">REGISTER</a>
<a href="login-petugas.php">LOGIN SEBAGAI PETUGAS</a>
</div>
</header>

<body style="background: url(img/backgroun.jpg); background-size: cover;">
	<div class="container">
		

	<?php 
		include 'koneksi.php';
		if(@$_GET['p']==""){
			include_once 'login.php';
		}
		elseif(@$_GET['p']=="login"){
			include_once 'login.php';
		}
		elseif(@$_GET['p']=="logout"){
			include_once 'logout.php';
		}
	 ?>


	</div>
	
<br/>
<br/>
<hr/>
<footer>

<div class="row">
  <div class="column">
    <img src="img/logo1.jpg" height="200px" width="200px">
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
</footer>
</center>
</body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>	

</html>