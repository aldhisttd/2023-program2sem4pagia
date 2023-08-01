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
  <?php include "component/menu.php" ?>
  <h2>Data Laptop</h2>

  <table>
    <tr>
      <th>kode</th>
      <th>Tanggal Masuk</th>
      <th>Jenis</th>  
      <th>Quantity</th>
      <th>Spesifikasi</th>  
	    <th>File</th>
      <th>Aksi</th>
    </tr>
    <?php
    include "action/koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM tb_data");

    while ($row = mysqli_fetch_array($data)) {
    ?>
      <tr>
        <td><?php echo $row['kode'] ?></td>
        <td><?php echo $row['tanggal_masuk'] ?></td>
        <td><?php echo $row['jenis'] ?></td>
        <td><?php echo $row['quantity'] ?></td>
        <td><?php echo $row['spesifikasi'] ?></td>
        <td>
          <img width="150" src="file/<?php echo $row['file'] ?>" alt="">
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