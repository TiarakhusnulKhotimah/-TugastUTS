<?php 
	require 'koneksi.php';
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = mysqli_query($conn,"SELECT * FROM user where username='$username' and password ='$password'");

	$data	= mysqli_fetch_assoc($result);

 	if (mysqli_num_rows($result)>0){
 		//login
 		$_SESSION['login'] = true;
 		$_SESSION['username'] = $username;
 		$_SESSION['id'] = $data['id'];
 	} if($password <> $data['password']) {
       echo "<div align='center'>Password salah! <a href='register.php'>Back</a></div>";
     } if(!$username || !$password) {
	echo "maaf kamu belum beruntung silakan coba lagi";
 	} else  {
       $_SESSION['username'] = $data['username'];
      $_SESSION['level'] = $data['level'];
      if($data['level']=="admin"){
            header("location:admin.php");
        }
    }
    if ($data['level']=="manager"){
            header("location:manager.php");
        }
    

?>