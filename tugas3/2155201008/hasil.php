<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "data_form");

// Memeriksa koneksi
if (mysqli_connect_errno()) {
  echo "Koneksi database gagal: " . mysqli_connect_error();
  exit();
}

// Mengambil data mahasiswa dari tabel
$query = "SELECT * FROM mhsform";
$result = mysqli_query($koneksi, $query);

// Menampilkan data dalam tabel
echo "<a href='create.php'>Tambah Data</a>";
echo "<table>
        <tr>
          <th>NIM</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Tanggal Lahir</th>
          <th>Foto</th>
        </tr>";

while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>" . $row['nim'] . "</td>";
  echo "<td>" . $row['nama'] . "</td>";
  echo "<td>" . $row['alamat'] . "</td>";
  echo "<td>" . $row['tgl_lahir'] . "</td>";
  echo "<td><img src='" . $row['foto'] . "' width='100'></td>";
  echo "</tr>";
}

echo "</table>";

// Menutup koneksi database
mysqli_close($koneksi);
?>
