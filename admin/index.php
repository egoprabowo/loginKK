<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
	<title>Admin</title>
</head>
<body background="wfbkl.png">
<div align="center">
<div class="badan" style="height:700px;width:500px;background-color:gray;">
	<h2>Informasi Admin</h2>

	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
<img src="ego.jpg" alt="ego">
<div align="left" style="padding-left:24px;">
<p>Nama	: Ego Prabowo<br>
NPM : 1660100170<br>
Kelas : 6 D<br>
Username : <?php echo $_SESSION['username']; ?></p></div>

	<br/>
	<br/>
	<pre><a href="https://fb.me/izo165" target="_blank">FACEBOOK</a>		<a href="logout.php">LOGOUT</a></pre>
</div></div>
</body>
</html>