<?php 
require 'koneksi.php';
  $tampil = query ("SELECT * FROM blog");

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>CRUD</title>
  <link href="dist/css/bootstrap.min.css" rel="stylesheet"> 
   <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<body style="background:url(gmb3.png)">
<center>
<br><br>
    <h2>RESEP MASAKAN SUMATERA SELATAN LEZAT</h2>
  <br><br>
    <table border="3" cellpadding="10" cellspacing="10" width="90%">
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
</center>

<br>
<center>
<br><br><br><br><br>
<a href="logout.php">Logout>></a>
</center>
  </body>
</html>
