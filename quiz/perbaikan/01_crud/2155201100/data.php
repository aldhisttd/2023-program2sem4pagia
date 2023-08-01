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
      background-color: ;
    }
  </style>
</head>

<body>
  <?php include "component/menu.php" ?>
  <h2>Data Kendaraan</h2>

  <table>
    <tr>
      <th>Kode</th>
      <th>Tanggal masuk</th>
      <th>Jenis kendaraan</th>
      <th>Harga</th>
      <th>Photo</th>
      <th>Aksi</th>

    </tr>
    <?php
    include "action/koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM kendaraan");

    while ($row = mysqli_fetch_array($data)) {
    ?>
      <tr>
        <td><?php echo $row['kode'] ?></td>
        <td><?php echo $row['tanggal_masuk'] ?></td>
        <td><?php echo $row['jenis_kendaraan'] ?></td>
        <td><?php echo $row['harga'] ?></td>
        
        <td>
          <img width="150" height="150" src="photo/<?php echo $row['photo'] ?>" alt="">
        </td>
        <td>
          <a href="edit.php?kode=<?php echo $row['kode'] ?>">Edit</a> -
          <a href="hapus.php?kode=<?php echo $row['kode'] ?>">Hapus</a>
        </td>
      </tr>
    <?php
    }
    ?>

  </table>

</body>

</html>