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
  <h2>Data Mahasiswa</h2>

  <table>
    <tr>
      <th>NO</th>
      <th>Nim</th>
      <th>Nama</th>
      <th>Jurusan</th>  
      <th>Umur</th>
	    <th>Photo</th>
      <th>Aksi</th>
    </tr>
    <?php
    include "action/koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM crud_tb");
    $no = 1;
    while ($row = mysqli_fetch_array($data)) {
    ?>
      <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $row['nim'] ?></td>
        <td><?php echo $row['nama'] ?></td>
        <td><?php echo $row['jurusan'] ?></td>
        <td><?php echo $row['umur'] ?></td>
        <td>
          <img src="uploads/<?php echo $row['foto'] ?>" width="250px" height="250px">
        </td>
        <td>
          <a href="edit.php?nim=<?php echo $row['nim'] ?>">Edit</a> 
          <a href="hapus.php?nim=<?php echo $row['nim'] ?>">Hapus</a>
        </td>
      </tr>
    <?php
    $no++;
    }
    ?>

  </table>

</body>

</html>