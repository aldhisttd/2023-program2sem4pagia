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
  <h2>Data Karyawan</h2>

  <table>
    <tr>
      <th>Nomor Tagihan</th>
      <th>Tanggal</th>
      <th>Jenis Tagihan</th>
      <th>Nominal</th>
      <th>Bukti Transfer</th>
      <th>Aksi</th>

    </tr>
    <?php
    include "action/koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM pembayaran");

    while ($row = mysqli_fetch_array($data)) {
    ?>
      <tr>
        <td><?php echo $row['nomor_tagihan'] ?></td>
        <td><?php echo $row['tanggal'] ?></td>
        <td><?php echo $row['jenis_tagihan'] ?></td>
        <td><?php echo $row['nominal'] ?></td>


        <td>
          <img width="150" src="bukti_transfer/<?php echo $row['bukti_transfer'] ?>" alt="">
        </td>
        <td>
          <a href="edit.php?nomor_tagihan=<?php echo $row['nomor_tagihan'] ?>">Edit</a> -
          <a href="hapus.php?nomor_tagihan=<?php echo $row['nomor_tagihan'] ?>">Hapus</a>
        </td>
      </tr>
    <?php
    }
    ?>

  </table>

</body>

</html>