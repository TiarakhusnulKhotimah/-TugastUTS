<?php 
require 'koneksi.php';
  session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }
  $tampil = query ("SELECT * FROM blog");
  
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("<H1><font color=red><U>LOGIIIN LAGIII</U> !!!!!</font></H1>");//jika belum login jangan lanjut

}
//cek level user
if($_SESSION['level']!="admin"){
  header('location:manager.php');
    // die("Anda bukan manager");
    //jika bukan admin jangan lanjut
}else{
  $username = $_SESSION['username']; 
  $level=$_SESSION['level'];
}
?>

<body style="background:url(gmb4.png)">

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <title>index</title>
<div align='center'>
  <font color=black>
  <h1 style="text-align: center; font-family: sans-serif; color: white;"><font color= black>Selamat Datang</font> <?php echo $level;?> <b><?php echo $username;?></b> <a href="logout.php"><b><font color=black>Logout</font></b></a>
  </font>
</div></h1> 
<!-- <?php
// echo "<h2>Your Input:</h2>";
// echo "Nama : ";
// echo $password;
// echo "<br>";
// echo "Nim : ";
// echo $nim;
// echo "<br>";
// echo "E-mail : ";
// echo $email;
// echo "<br>";
// echo "jurusan : ";
// echo $jurusan;
// echo "<br>";
// echo "Gender : ";
// echo $gender;
// echo "<br>";
// echo "Usia : ";
// echo $usia;
// echo "<br>";
// echo "Website : ";
// echo $website;
// echo "<br>";
// echo "Biografi : ";
// echo $biografi;
// echo "<br>";
// echo $tgl = date("d/m/Y h:i:sa");
// echo "<br>";
?>

<?php
// $result=mysqli_query($connect,'SELECT * FROM user');
// $row=mysqli_fetch_row($result);
// echo "$row[0] $row[1] $row[2] $row[3]";
?> -->

<center>
<br><br>
    <h2>RESEP MASAKAN SUMATERA SELATAN</h2>
  <br><br>
  <div class="table-responsive">
    <table border="3" cellpadding="10" cellspacing="10" width="90%" >
  <tr>
   
     <th>No</th>
    <th>Nama Masakan</th>
    <th>Bahan-bahan</th>
    <th>Cara Pembuatan</th>
    <th>Terakhir di Update</th>
    <th>opsi</th>
  </tr> 

<?php $i=1; ?>
<?php foreach ($tampil as $x ) : //foreach itu pengulangan pada array  ?> 
  <tr>
    <td><?= $i; ?></td>
    <td><?= $x["namamasakan"] ?></td>
    <td><?= $x["bahan"];  ?></td>
    <td><?= $x["langkah"];  ?></td>
    <td><?= $x["waktu"];  ?></td>
    <td><a href="hapus.php?id=<?php echo $x['id']?>" onclick =" return confirm ('yakin untuk dihapus?');"><img src="image/btn_delete.png"></a>&nbsp;&nbsp;<a href="ubah.php?id=<?php echo $x['id']?>"><img src="image/btn_edit.png"></a></td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
</div>

<br>
<center>
  <br>
<a href="creat.php"><h2>Tambah Artikel>></h2></a>
</center>
  </body>
</html>
