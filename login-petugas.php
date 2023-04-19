<!DOCTYPE html>
<html>
<head>
	<title>LaporYuk</title>
	<link rel="stylesheet" type="text/css" href="css/main1.css">
	<link rel="icon" href="img/icon.png">
</head>
<body>
<center>
<header>

<div class="logo">
<h1><font face="Fantasy" size="100" color="#ffffff">LaporYuk!</font></h1>
           </div>
<div id="navbar">
<br>
</div>
</header>

 
	
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
 
	<div class="container">
	<div class="card" style="padding: 55px; width: 55%; margin: 0 auto; margin-top: 5%;">
		<h2>Login Sebagai Admin/Petugas</p>
		<form action="cek_login.php" method="post">			
			<label for="username">Username</label>
			<input id="username" type="text" name="username" required>
				
			<label for="password">Password</label>
			<input id="password" type="password" name="password" required>		
 
			<button type="submit">Login</button>
 
			<br/>
			<br/>
			<center>
				
			</center>
		</form>
		</div>
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