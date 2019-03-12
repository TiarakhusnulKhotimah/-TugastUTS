<body style="background:url(sponge1.jpg)"> 

<?php 
	require 'koneksi.php';


	session_start();
	$namamasakan = $_POST['namamasakan'];
	$bahan = $_POST['bahan'];
	$langkah = $_POST['langkah'];
	$waktu = $_POST['waktu'];
	
	

	$tambah = mysqli_query($conn,"INSERT INTO blog VALUES(null,'$namamasakan','$bahan','$langkah',null)");

		if ($tambah>0) {
			echo "Data Berhasil ditambahkan";
			echo "<br>";
			echo "klik ";
			echo "<a href='admin.php'>DISINI</a>";
			echo " Untuk Melihat Hasil";
		}
		else {
			echo "Data Gagal Ditambahkan";
			echo "<br>";
			echo "klik ";
			echo "<a href='creat.php'>DISINI</a>";
		echo " Bray";

		}
	

 ?>