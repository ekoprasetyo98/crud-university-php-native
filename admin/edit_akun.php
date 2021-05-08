<!DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>

	<?php 

	include '../config/koneksi_db.php';

	session_start();
	if ($_SESSION['status']!= "login") {
		# code...
		header("location:../index.php");
	}



	$dataID = $_GET['id'];

	$sql = mysqli_query($conn,"SELECT*FROM user WHERE id_user = '$dataID'");

	 ?>

	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-primary">
		<div class="container">
		  <span>Hai, <?= $_SESSION['username']?></span>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="data_user.php">Data User</a>
		      </li>
		      
		      <li class="nav-item">
		        <a href="../config/act_logout.php" class="nav-link btn btn-danger" onclick="return confirm('Apakah anda ingin keluar?')">Logout</a>
		      </li>
		    </ul>
		  </div>
	  	</div>
	</nav>

	<!-- content -->
	<div class="container">
		<h3 class="text-center">Edit Data mahasiswa</h3>
		<?php foreach($sql as $d): ?>
		<form class="form" action="../config/act_edit_akun.php" method="post" onsubmit="return validasi()">
			<div class="form-group">
				<label>Username :</label>
				<input required="" value="<?= $d['id_user']?>" placeholder="Masukan nama" type="hidden" name="id" class="form-control">
				<input required="" value="mahasiswa" placeholder="Masukan nama" type="hidden" name="role" class="form-control">
				<input required="" value="<?= $d['username']?>" placeholder="Masukan Username" type="text" name="username" class="form-control">
			</div>

			<div class="form-group">
				<label>Password :</label>
				<input minlength="6" required="" id="password" placeholder="Masukan Password" type="password" name="password" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Ulangi Password :</label>
				<input minlength="6" required="" id="password2" placeholder="Masukan Password" type="password" name="password2" class="form-control">
			</div>
			
			<input type="submit" name="edit" class="btn btn-success w-100">
			
		</form>
	<?php endforeach ?>
	</div>
	
<script type="text/javascript">
	function validasi() {
		var	password = document.getElementById('password').value;
		var	password2 = document.getElementById('password2').value;

		if (password != password2) {
			alert('password salah');
			return false;
		}else{
			return true;
		}
	}
	
</script>
</body>
</html>