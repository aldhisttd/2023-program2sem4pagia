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

<h1>Form Input karyawan</h1>

  <form action="edit.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="id_karyawan">id karyawan:</label>
      <input type="text" name="id_karyawan" required>
    </div>

    <div class="form-group">
      <label for="nama_karyawan">nama karyawan:</label>
      <input type="text" name="nama_karyawan" required>
    </div>

    <div class="form-group">
      <label for="tgl_lahir">Tanggal Lahir:</label>
      <input type="date" name="tgl_lahir" required>
    </div>

    <div class="form-group">
      <label for="photo">Photo:</label>
      <input type="file" name="photo" required accept="image/*">
    </div>

    <div class="form-group">
      <input type="submit" value="Submit">
    </div>
  </form>

<h2>Karyawan</h2>

<table>

  <tr>
    <th>No</th>
    <th>id_karyawan</th>
    <th>nama_karyawan</th>
    <th>tgl_lahir</th>
    <th>photo</th>
    <th></th>
  </tr>

  <?php 
    $koneksi = mysqli_connect('localhost','root','','data_genap');
    $data = mysqli_query($koneksi, "SELECT * FROM karyawan");
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
    <td><?php echo $row['photo'] ?></td>
    <td>
      <a href="create.php?id_karyawan=<?php echo $row['id_karyawan'] ?>">create</a>
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