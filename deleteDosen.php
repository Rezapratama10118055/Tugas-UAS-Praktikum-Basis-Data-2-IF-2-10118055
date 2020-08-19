<?php

include('koneksi.php');
 


if(isset($_GET["iddosen"])){
	
	$iddosen = $_GET["iddosen"];
	
	

	$cek = mysqli_query($koneksi, "SELECT * FROM dosen WHERE iddosen='$iddosen' ") or die(mysqli_error($koneksi));
	
	
	if(mysqli_num_rows($cek) > 0){
		

		$del = mysqli_query($koneksi, "DELETE  FROM dosen WHERE iddosen='$iddosen'") or die(mysqli_error($koneksi));
		if($del){
			echo '<script>alert("Berhasil menghapus data."); document.location="dosen.php";</script>';
		}else{
			echo '<script>alert("Gagal menghapus data."); document.location="index.php";</script>';
		}
	}else{
		echo '<script>alert("ID tidak ditemukan di database."); document.location="index.php";</script>';
	}
}else{
	echo '<script>alert("ID tidak ditemukan di database."); document.location="index.php";</script>';
}
 
?>