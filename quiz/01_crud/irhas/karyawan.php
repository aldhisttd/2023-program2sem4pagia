<?php

include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<body>

<h2>Data Karyawan</h2>
<a href="index.php">Input Kembali Karyawan</a>
<table border="2">

  <tr>
    <th>No</th>
    <th>Id Karyawan</th>
    <th>Nama Karyawan</th>
    <th>Tanggal Lahir</th>
    <th></th>
  </tr>

  <?php  
    $koneksi = mysqli_connect("localhost","root","","genap");
    $data = mysqli_query($koneksi, "SELECT * FROM karyawan");
    $no = 1;
    while ($row=mysqli_fetch_array($data)) {
      // area php code
  ?>
  <!-- area html -->
  <tr>
    <td><?php echo $no ?></td>
    <td><?php echo $row['id_karyawan'] ?></td>
    <td><?php echo $row['nama_karyawan'] ?></td>
    <td><?php echo $row['tgl_lahir'] ?></td>
    <td>
      <a href="delete.php?kode=<?php echo $row['kode'] ?>">Hapus</a> - 
      <a href="index.php?kode=<?php echo $row['kode'] ?>">Edit</a>
    </td>
  </tr>
  <?php
      $no++;
    }

  ?>
</table>

</body>
</html>