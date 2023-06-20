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

<h2>Data Barang</h2>

<table>

  <tr>
    <th>no</th>
    <th>kd_barang</th>
    <th>nama_barang</th>
    <th>stok</th>
    <th></th>
  </tr>

  <?php 
    $koneksi = mysqli_connect('localhost','root','','data_barang');
    $data = mysqli_query($koneksi, "SELECT * FROM barang");
    $no = 1;
    while ($row=mysqli_fetch_array($data)) {
      // area php code
  ?>
  <!-- area html -->
  <tr>
    <td><?php echo $no ?></td>
    <td><?php echo $row['kd_brg'] ?></td>
    <td><?php echo $row['nama_brg'] ?></td>
    <td><?php echo $row['stok'] ?></td>
    <td>
      <a href="hapus.php?kd_brg=<?php echo $row['kd_brg'] ?>">Hapus</a> - 
      <a href="hapus.php?kd_brg=<?php echo $row['kd_brg'] ?>">Edit</a>
    </td>
  </tr>
  <?php
      $no++;
    }

  ?>
</table>

</body>
</html>

