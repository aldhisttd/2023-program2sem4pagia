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

<h2>Data Karyawan</h2>

<table>

  <tr>
    <th>No</th>
    <th>id_karyawan</th>
    <th>nama_karyawan</th>
    <th>tgl_lahir</th>
    <th></th>
  </tr>

  <?php 
    $connect = mysqli_connect('localhost','root','','data_genap');
    $data = mysqli_query($connect, "SELECT * FROM karyawan");
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
      <a href="hapus.php?id_karyawan=<?php echo $row['id_karyawan'] ?>">Hapus</a> - 
      <a href="edit.php?id_karyawan=<?php echo $row['id_karyawan'] ?>">Edit</a>
    </td>
  </tr>
  <?php
      $no++;
    }

  ?>
</table>

</body>
</html>
