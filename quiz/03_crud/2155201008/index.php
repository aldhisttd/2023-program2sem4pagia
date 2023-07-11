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

<h2>Pembayaran</h2>

<table>

  <tr>
    <th>Nomor Tagihan</th>
    <th>Tagihan</th>
    <th>Jenis Tagihan</th>
    <th>Nominal</th>
    <th>Bukti Transfer</th>
  </tr>

  <?php 
    $koneksi = mysqli_connect('localhost','root','','quiz_genap');
    $data = mysqli_query($koneksi, "SELECT * FROM tabel_pembayaran");
    $no = 1;
    while ($row=mysqli_fetch_array($quiz_genap)) {
      // area php code
  ?>
  <!-- area html -->
  <tr>
    <td><?php echo $row['nomor_tagihan'] ?></td>
    <td><?php echo $row['tanggal'] ?></td>
    <td><?php echo $row['jenis_tagihan'] ?></td>
    <td><?php echo $row['nominal'] ?></td>
    <td><?php echo $row['bukti_transfer'] ?></td>
  
   
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
