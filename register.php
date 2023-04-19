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


<div class="container">

<div class="card" style="padding: 55px; width: 55%; margin: 0 auto; margin-top: 5%;">
<h2 style="text-align: center;" class="black-text">Silahkan Register</h2>
<form class="user"method="post"action="simpan.php">
 <form>  
          
            <label>NIK : </label>   
            <input type="number" placeholder="Enter Your NIK" name="nik" required>
			
            <label>Nama Panjang : </label>   
            <input type="text" placeholder="Enter Your Name" name="nama" required>
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  			
          
			<label>No. Telp : </label>   
            <input type="number" placeholder="Enter Telp. Number" name="telp" required>  			
            <button type="submit">Register</button> 
			
            
            <button type="button" class="cancelbtn"> Cancel</button> 		
             
          
    </form>                     
</form>
</div>

</div>


<div class="container">

<div class="card" style="padding: 55px; width: 55%; margin: 0 auto; margin-top: 5%;">
<h2 style="text-align: center;" class="black-text">Ingin Membantu Sebagai Administrator?<br>Register Dibawah Sini!</h2>
<form class="user"method="post"action="simpan-admin.php">
 <form>  
          
			
            <label>Nama Panjang : </label>   
            <input type="text" placeholder="Enter Your Name" name="nama_petugas" required>
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  			
          
			<label>No. Telp : </label>   
            <input type="number" placeholder="Enter Telp. Number" name="telp" required>  

			<label>Bekerja Sebagai : </label>
			<input type="radio" name="level" value="Admin" checked="checked"><b>ADMIN<b><br>
            <button type="submit">Register</button> 
			
            
            <button type="button" class="cancelbtn"> Cancel</button> 
			
             
          
    </form>                     
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