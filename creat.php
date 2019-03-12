<?php 
session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>add new articel</title>
</head>
<body style="background:url(gmb2.png)">  
<body>
	<br><br>
 	<form method="POST" action="actioncreat.php">
 		<input type="hidden" name="waktu">
 		Nama Masakan	: 
		<input type="text" name="namamasakan" placeholder="Nama Masakan">
		<br>
		<br>
		Bahan-bahan	:
		<textarea name="bahan" placeholder="Text Artikel"> </textarea>
		<br><br>
		Cara Pembuatan	:
		<textarea name="langkah" placeholder="Text Artikel"> </textarea>
		<br><br>
		<input type="submit" name="submit">
 	</form>
</body>
</html>