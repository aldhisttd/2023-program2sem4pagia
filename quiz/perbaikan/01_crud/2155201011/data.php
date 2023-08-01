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
      <th>Nim</th>
      <th>Nama</th>
      <th>Jurusan</th>  
      <th>Umur</th>
	    <th>Photo</th>
      <th>Aksi</th>
    </tr>
    <?php
    include "action/ac_koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
   
    while ($row = mysqli_fetch_array($data)) {
    ?>
      <tr>
        <td><?php echo $row['nim'] ?></td>
        <td><?php echo $row['nama'] ?></td>
        <td><?php echo $row['jurusan'] ?></td>
        <td><?php echo $row['umur'] ?></td>
        <td>
          <img src="upload/<?php echo $row['photo'] ?>" width="250px" height="250px">
        </td>
        <td>
          <a href="edit.php?nim=<?php echo $row['nim'] ?>">Edit</a> 
          <a href="hapus.php?nim=<?php echo $row['nim'] ?>">Hapus</a>
        </td>
      </tr>
    <?php
   
    }

    ?>

  </table>

</body>

</html>