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
    <h2>DATA MAHASISWA PAGI</h2>

    <table border="2">
      <tr>
        <td>Nim</td>
        <td>Nama</td>
        <td>Tanggal Lahir</td>
        <td>Alamat</td>
        <td>Foto</td>
      </tr>
      <?php
      $query = mysqli_query($koneksi, "SELECT * FROM data_mahasiswa");
      while($row = mysqli_fetch_array($query)){
      ?>
      <tr>
        <td><?php echo $row['NIM'] ?></td>
        <td><?php echo $row['Nama']?></td>
        <td><?php echo $row['Tanggal_Lahit']?></td>
        <td><?php echo $row['Alamat']?></td>
        <td><img src="uploads/<?php echo $row['Foto'] ?>" width="150px" height="150px"> </td>
      </tr>
      <?php } ?>
    </table>
</body>
</html>