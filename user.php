<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = ($_POST['password']);   
   $result = "SELECT * FROM user WHERE username = '$username'";
   $query = $db->query($result);
   $hasil = $query->fetch_assoc();


// if(isset($_COOKIE['login'])){
//   if($_COOKIE['login'] =='true'){
//     $_SESSION['level'] = "admin";
//   }
// }


  
if($_POST["remember"]=='1' || $_POST["remember"]=='on')
                    {
                    $hour = time() + 3600 * 24 * 30;
                    setcookie('username', $login, $hour);
                         setcookie('password', $password, $hour);
                    }

   if($query->num_rows == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
      $_SESSION['level'] = $hasil['level'];
      if($hasil['level']=="admin"){

          if(isset($_POST['remember'])){
            setcookie('login','true',time()+60);
          }

            header("location:admin.php");
          }
        }
    if($hasil['level']=="manager"){
        if(isset($_POST['remember'])){
            setcookie('login','true',time()+60);
          }
            header("location:manager.php");
        }
     }
   

?>