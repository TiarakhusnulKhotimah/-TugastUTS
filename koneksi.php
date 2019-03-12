<?php 
	
	$conn = mysqli_connect("localhost","root","","ndy");

	function query ($query){
		global $conn;
		$result = mysqli_query ($conn,$query);
		$rows = [];

		while ($mhs = mysqli_fetch_assoc($result)) {
			$rows[]=$mhs;
		}
		return $rows;
	}

	function hapus ($id){
		global $conn;
		mysqli_query($conn, "DELETE FROM blog WHERE id = $id");
		return mysqli_affected_rows($conn); 
	}


	function ubah($data)
	{
		global $conn;

		$id = $data["id"];
		$namamasakan = htmlspecialchars($data["namamasakan"]);
		$bahan = htmlspecialchars($data["bahan"]);
		$langkah = htmlspecialchars($data["langkah"]);

		$query = "UPDATE blog SET namamsakan = '$namamasakan', bahan = '$bahan', langkah = '$langkah' WHERE id = $id";

		mysqli_query ($conn, $query);
		return mysqli_affected_rows ($conn);
	}

	// function creat ($data){
	// 	global $conn;

	// 	$judul = $data["judul"];
	// 	$isi = $data["isi"];

	// 	$query = "INSERT INTO blog VALUES ('','$judul', '$isi')";

	// 	mysql_query($conn, $query);

	// 	return mysqli_affected_rows($conn);



	
 ?>