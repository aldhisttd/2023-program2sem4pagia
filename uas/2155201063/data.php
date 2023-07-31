<!DOCTYPE html>
<html>

<head>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
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
  <?php include "menu.php" ?>
  <h2>Data Mahasiswa</h2>

  <table>
    <tr>
      <th>KODE</th>
      <th>TANGGAL MASUK</th>
      <th>JENIS</th>  
      <th>QUANTITY</th>
	    <th>SPESIFIKASI</th>
      <th>GAMBAR</th>
      <th>AKSI</th>
    </tr>
    <?php
    include "action/koneksi.php";

    $data = mysqli_query($koneksi, "SELECT * FROM uas_crud");

    while ($row = mysqli_fetch_array($data)) {
    ?>
      <tr>
        <td><?php echo $row['kode'] ?></td>
        <td><?php echo $row['tanggal_masuk'] ?></td>
        <td><?php echo $row['jenis'] ?></td>
        <td><?php echo $row['quantity'] ?></td>
        <td><?php echo $row['spesifikasi'] ?></td>
        <td>
          <img src="upload/<?php echo $row['gambar'] ?>" width="250px" height="250px">
        </td>
        <td>
          <a href="edit.php?kode=<?php echo $row['kode'] ?>">Edit</a> 
          <a href="hapus.php?kode=<?php echo $row['kode'] ?>">Hapus</a>
        </td>
      </tr>
    <?php
    }
    ?>

  </table>

</body>

</html>