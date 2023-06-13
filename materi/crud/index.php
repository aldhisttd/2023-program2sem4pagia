<!DOCTYPE html>
<html>
<head>
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
</head>
<body>

<h2>Data Jurusan</h2>

<table>

  <tr>
    <th>No</th>
    <th>Kode</th>
    <th>Nama Jurusan</th>
    <th></th>
  </tr>

  <?php 
    $koneksi = mysqli_connect('127.0.0.1','root','root','4pagia','3307');
    $data = mysqli_query($koneksi, "SELECT * FROM jurusan");
    $no = 1;
    while ($row=mysqli_fetch_array($data)) {
      // area php code
  ?>
  <!-- area html -->
  <tr>
    <td><?php echo $no ?></td>
    <td><?php echo $row['kode'] ?></td>
    <td><?php echo $row['nama'] ?></td>
    <td>
      <a href="hapus.php?kode=<?php echo $row['kode'] ?>">Hapus</a> - 
      <a href="edit.php?kode=<?php echo $row['kode'] ?>">Edit</a>
    </td>
  </tr>
  <?php
      $no++;
    }

  ?>
</table>

</body>
</html>

