<html>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"></link>
	
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#"></a>
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
   session_destroy();
?>

<div align="center">
  <h2>Anda telah berhasil logout..</h2>
  Silahkan klik <a href="login.php">disini</a> untuk login kembali
</div>
<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/popper.min.js"></script>
	<script src="/bootstrap/js/bootstrap.min.js"></script>