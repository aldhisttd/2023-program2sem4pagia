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

<h2>Tabel Barang</h2>
<a href="index.php">Input Kembali Barang</a>
<table border="2">

  <tr>
    <th>No</th>
    <th>Kode Barang</th>
    <th>Nama Barang</th>
    <th>Stok</th>
    <th></th>
  </tr>

  <?php  
    $koneksi = mysqli_connect("localhost","root","","quiz_01");
    $data = mysqli_query($koneksi, "SELECT * FROM ganjil");
    $no = 1;
    while ($row=mysqli_fetch_array($data)) {
      // area php code
  ?>
  <!-- area html -->
  <tr>
    <td><?php echo $no ?></td>
    <td><?php echo $row['kode'] ?></td>
    <td><?php echo $row['nama_barang'] ?></td>
    <td><?php echo $row['stok'] ?></td>
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