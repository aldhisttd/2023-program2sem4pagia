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
  <h2>Data Karyawan</h2>

  <table>
    <tr>
      <th>ISBN</th>
      <th>Judul</th>
      <th>Kategori</th>  
      <th>Stok</th>
	    <th>File</th>
      <th>Aksi</th>
    </tr>
    <?php
    include "action/koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM tb_buku");

    while ($row = mysqli_fetch_array($data)) {
    ?>
      <tr>
        <td><?php echo $row['isbn'] ?></td>
        <td><?php echo $row['judul'] ?></td>
        <td><?php echo $row['kategori'] ?></td>
        <td><?php echo $row['stok'] ?></td>
        <td>
          <img width="100" src="file/<?php echo $row['file'] ?>" alt="">
        </td>
        <td>
          <a href="edit.php?isbn=<?php echo $row['isbn'] ?>">Edit</a> -
          <a href="hapus.php?isbn=<?php echo $row['isbn'] ?>">Hapus</a>
        </td>
      </tr>
    <?php
    }
    ?>

  </table>

</body>

</html>