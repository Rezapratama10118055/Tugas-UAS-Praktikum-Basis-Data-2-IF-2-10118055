<?php

include 'koneksi.php';

$result = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
$result1 = mysqli_query($koneksi,"SELECT * FROM Matakuliah");
$result2 = mysqli_query($koneksi,"SELECT * FROM dosen");

$id = mysqli_num_rows($result);
$sks = mysqli_num_rows($result1);
$dosen = mysqli_num_rows($result2);


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
    <a class="nav-link active text-white" href="halaman_admin.php"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
  </li>
  
  <li class="nav-item">
    <a class="nav-link text-white" href="daftarmahasiswa.php"><i class="fas fa-user mr-2"></i>Daftar Mahasiswa</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="matkul.php"><i class="fas fa-book mr-2"></i>Daftar Matakuliah</a><hr class="bg-secondary">
  </li>
   <li class="nav-item">
    <a class="nav-link text-white" href="dosen.php"><i class="fas fa-user-graduate mr-2"></i>Daftar Dosen</a><hr class="bg-secondary">
  </li>
    <li class="nav-item">
    <a class="nav-link text-white" href="nilai.php"><i class="fas fa-star mr-2"></i>Daftar nilai mahasiswa</a><hr class="bg-secondary">
  </li>
 

</ul>

</div>







<div style="margin-left: 310px; width: calc(100% - 350px);">
    <h1>Hello, Admin</h1>

    <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
<br>



<div class="row text-white"> 
  <div class="card bg-info ml-3" style="width: 18rem;">
   <div class="card-body">
    <div class="card-body-icon">
      <i class="fas fa-users mr-2"></i>
    </div>
    <h5 class="card-title">JUMLAH MAHASISWA</h5>
    <div class="display-4"><b><?php echo $id; ?></b></p></div>
  <a href="daftarmahasiswa"><p class="card-text text-white">Lihat Detail
    <i class="fas fa-angle-double-right ml-2"></i></p></a>
  </div>
  </div>


 <div class="card bg-success ml-5" style="width: 18rem;">
   <div class="card-body">
    <div class="card-body-icon">
   <i class="fas fa-book-open"></i>
    </div>
    <h5 class="card-title">JUMLAH MATAKULIAH</h5>
    <div class="display-4"><b><?php echo $sks; ?></b></div>
  <a href="matkul"><p class="card-text text-white">Lihat Detail
    <i class="fas fa-angle-double-right ml-2"></i></p></a>
  
  </div>
</div>


<div class="card bg-warning ml-5" style="width: 18rem;">
   <div class="card-body">
    <div class="card-body-icon">
   <i class="fas fa-user-tie"></i>
    </div>
    <h5 class="card-title">JUMLAH DOSEN</h5>
    <div class="display-4"><b><?php echo $dosen; ?></b></div>
  <a href="dosen"><p class="card-text text-white">Lihat Detail
    <i class="fas fa-angle-double-right ml-2"></i></p></a>
  
  </div>
</div>


</div>


 <table class="table table-bordered mt-2">
  <thead class="thead-dark">

    <tr>
      <th scope="col">No</th>
      <th scope="col">Nim</th>
      <th scope="col">Nama</th>
       <th scope="col">Tanggal lahir</th>
        <th scope="col">Jenis kelamin</th>
       <th scope="col">Alamat</th>
        <th colspan="1" scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
<br>
<h2><i class="fas fa-user mr-2"></i>MAHASISWA</h2><hr>

    <?php 
    $no=1;

    while ($row = mysqli_fetch_assoc($result)): ?>


      <tr>
      <th scope="row"><?php echo $no++; ?></th>
      <td><?php echo $row['nim']; ?></td>
      <td><?php echo $row['nama']; ?></td>
      <td><?php echo $row['tanggal_lahir']; ?></td>
      <td><?php echo $row['jenis_kelamin']; ?></td>
       <td><?php echo $row['alamat']; ?></td>
        <td><a href="daftarmahasiswa.php" class="btn btn-primary">Detail</a></td>
         
        </tr>
   <?php endwhile; ?>

 </tbody>



<table class="table table-bordered mt-2">
  <thead class="thead-dark">

    <tr>
    <th scope="col">No</th>
      <th scope="col">NIP</th>
       <th scope="col">NAMA DOSEN</th>
       <th scope="col">TANGGAL LAHIR</th>
        <th scope="col">ALAMAT</th>
        <th scope="col">DOSEN MATKUL</th>
        <th colspan="1" scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
<br>
<h2><i class="fas fa-user-graduate mr-2"></i>DOSEN</h2><hr>

   <?php 
    $no=1;

    while ($row = mysqli_fetch_assoc($result2)): ?>


      <tr>
      <th scope="row"><?php echo $no++; ?></th>
      <td><?php echo $row['nip']; ?></td>
      <td><?php echo $row['nama_dosen']; ?></td>
      <td><?php echo $row['tanggal_lahir']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
          <td><?php echo $row['dosen_matkul']; ?></td>
        <td><a href="#" class="btn btn-primary">Detail</a></td>
          
        </tr>
   <?php endwhile; ?>

 </tbody>

</table>




</div>
</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


  </body>
</html>