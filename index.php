<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Hello, world!</title>
    <style type="text/css">
      body{
        background-image: url(img/bg1.jpg);
        background-size: cover;
      }

      form{
        background-color: #fff;
      }

      h1{
        color: 
      }
    </style>

  </head>
  <body>
    <div class="container">

    	<h1 class="text-center">Selamat Datang Di Pendaftaran Mahasiswa Baru UNK</h1>
 
    	<form action="config/act_login.php" method="post">
        <img src="img/logo.png" class="img-fluid" width="200" height="200">
        <h4 class="text-center">Silahkan Login</h4>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Username</label>
		    <input type="text" class="form-control" placeholder="Masukan uername anda" name="username" required="">
		  </div>

		  <div class="form-group">
		    <label>Password</label>
		    <input type="password"  class="form-control" placeholder="Masukan password anda" name="password" required="">
		  </div>

		  <div class="form-group">
		  <a href="registrasi.php">Belum punya akun?</a>
		  </div>
		  
		  <button type="submit" name="submit" class="btn btn-primary w-100">Login</button>
		</form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>