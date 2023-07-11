<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h2>Data Karyawan</h2>
<a href="tambah.php">Tambah Data Karyawan</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">

  <tr>
    <th>ID Karyawan</th>
    <th>Nama Karyawan</th>
    <th>Tanggal Lahir</th>
    <th>Photo</th>
    <th>Aksi</th>
  </tr>

  <?php 
    $koneksi = mysqli_connect('localhost','root','','phpdasar');
    $data = mysqli_query($koneksi, "SELECT * FROM karyawan");
    while ($row=mysqli_fetch_array($data)) {
      // area php code
  ?>
  <!-- area html -->
  <tr>
    <td><?php echo $row['id_karyawan'] ?></td>
    <td><?php echo $row['nama_karyawan'] ?></td>
    <td><?php echo $row['tgl_lahir'] ?></td>
    <td><img src="img/<?php echo $row['photo']?>" alt="" width="50px"></td>
    <td>
        <a href="hapus.php?id_karyawan=<?php echo $row['id_karyawan'] ?>">Hapus</a> |
        <a href="edit.php?id_karyawan=<?php echo $row['id_karyawan'] ?>">Edit</a>
    </td>
  </tr>
  <?php
    }

  ?>
</table>

</body>
</html>

