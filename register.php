<?php 
	session_start();
	if (isset($_SESSION['login'])) {
	
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link rel="stylesheet" href="style.css">
	<form action="actionlogin.php" method="post">
</head>
<body style="background:url(gora2.jpg)">


	<div class="box">
		<h2>Login</h2>
	<form>
		<div class="inputBox">
		<input type="text" name="username" required=""> 
		<label> username</label>
		</div>
		<div class="inputBox">
		<input type="password" name="password" required=""> 
		<label>password</label>
		</div>
		
		
		<input type="submit" name="submit" value="submit">
		<button> <a href="formregister.php">register</a></button>
	
	</form>
	</div>
	
</body>
</html>