<html>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"></link>
	
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">SELAMAT DATANG!</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
 
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
					</li>
				</ul>
			</div>
		</div>
	</nav>
<?php
   session_start();
   require_once("config.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];   
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $koneksi->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:index.php');
     }
   }
?>
<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/popper.min.js"></script>
	<script src="/bootstrap/js/bootstrap.min.js"></script>