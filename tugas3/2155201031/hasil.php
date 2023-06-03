<?php

include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h2>TABEL DATA</h2>

    <table border="1">
      <tr>
        <td>No</td>
        <td>Nim</td>
        <td>Nama</td>
        <td>Tanggal Lahir</td>
        <td>Alamat</td>
        <td>Foto Mahasiswa</td>
      </tr>
      <?php
      $no=1;
      $query = mysqli_query($koneksi, "SELECT * FROM data_mahasiswa");
      while($row = mysqli_fetch_array($query)){

      ?>
      <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $row['nim'] ?></td>
        <td><?php echo $row['nama']?></td>
        <td><?php echo $row['tanggal_lahir']?></td>
        <td><?php echo $row['alamat']?></td>
        <td><img src="uploads/<?php echo $row['foto'] ?>" width="150px" height="150px"> </td>
      </tr>
      <?php 
      $no++; } ?>
    </table>
    <a href="index.php">Back</a>
</body>
</html>