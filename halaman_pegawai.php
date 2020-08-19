<?php

include 'koneksi.php';



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
       <link href="fontawesome/css/all.min.css" rel="stylesheet">
   
        



  <title>Home</title>
  </head>
  <body>



<?php 
	session_start();
 

	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>


<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#"><i class="fas fa-home mr-2"></i>HaloKuliah</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
     <div class="navbar-nav ml-auto">
       
        <a class="nav-link" href=""> <i class="fas fa-user-circle mr-1 text-dark" data-toggle= "tooltip" title="USER"></i><?php echo $_SESSION['username']; ?></a>

      <a class="nav-link" href="logout.php"> <i class="fas fa-sign-out-alt fas fa-bell mr-3 text-dark"  data-toggle= "tooltip" title="Logout"></i></a>

       
    </div>
  </div>
</nav>

<div class=" no-gutters mt-5">
  <div class=" bg-dark mt-2 pr-3 pt-4" style="height: 100%;position: fixed; width: 300px;overflow-x: hidden;">
    <ul class="nav flex-column ml-3 mb-5">
  <li class="nav-item">
    <a class="nav-link active text-white" href=""><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
  </li>
  
 

</ul>

</div>







<div style="margin-left: 310px; width: calc(100% - 350px);">
    <h1>Hello, Halaman ini sedang dalam proses pembuatan terimakasih</h1>

    <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
<br>
<h1> >> Comingsoon </h1>







</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


  </body>
</html>