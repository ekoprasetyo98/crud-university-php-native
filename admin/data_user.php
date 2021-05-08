<!DOCTYPE html>
<html>
<head>
	<title>dashboard admin</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>

	<?php 
	include '../config/koneksi_db.php';

	session_start();
	if ($_SESSION['status'] != "login") {
		# code...
		header("location:../index.php");
	}

	$data = mysqli_query($conn,"SELECT*FROM user");
	 ?>

	 <nav class="navbar navbar-expand-lg navbar-light bg-primary">
		<div class="container">
		  <span>Hai, <?= $_SESSION['username']?></span>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav ml-auto">
		      
		      <li class="nav-item">
		        <a href="../config/act_logout.php" class="nav-link btn btn-danger" onclick="return confirm('Apakah anda ingin keluar?')">Logout</a>
		      </li>
		    </ul>
		  </div>
	  	</div>
	</nav>

	 <div class="container">

	 	<section id="menu">
	 		<nav>
				<ul>
					
					<li><a href="index.php">Data Mahasiswa</a></li>
					<li><a href="data_user.php">Data User</a></li>
					<li><a href="config/act_logout.php" onclick="return confirm('Apakah anda ingin keluar?')">Logout</a></li>
				</ul>
			</nav>

			<article>
				<h2 class="text-cennter">Daftar nama mahasiswa baru</h2>
				<span>Total : </span><?= mysqli_num_rows($data)?>

				<table class="table">
					<thead class="thead-dark">
					<tr>
						<th>No</th>
						<th>Username</th>
						<th>Role</th>
						<th>Action</th>
					</tr>
					</thead>

					<?php $no = 1; foreach($data as $d) :?>
					<tr>
						<td><?= $no++?></td>
						<td><?= $d['username']?></td>
						<td><?= $d['role']?></td>
						<td>
							<a class="badge badge-warning" href="edit_akun.php?id=<?= $d['id_user']?>" onclick="return confirm('Apakah anda ingin mengedit data?')" >Edit</a>
							<a class="badge badge-danger" href="../config/act_hapus_akun.php?id=<?= $d['id_user']?>" onclick="return confirm('Apakah anda ingin Hapus data?')">Hapus</a>
						</td>
					</tr>
				<?php endforeach?>
				</table>
				
			</article>
	 	</section>
		
	</div>

</body>
</html>