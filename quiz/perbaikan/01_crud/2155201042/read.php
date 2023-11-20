<?php
// Lakukan koneksi ke database
$koneksi = mysqli_connect('localhost', 'root', '', 'data_kendaraan');
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// Query untuk mengambil data dari tabel kendaraan
$query = "SELECT * FROM kendaraan";
$result = mysqli_query($koneksi, $query);

// Tampilkan data ke dalam tabel
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['kode']."</td>";
    echo "<td>".$row['tanggal_masuk']."</td>";
    echo "<td>".$row['jenis_kendaraan']."</td>";
    echo "<td>".$row['harga']."</td>";
    echo "<td><img src='uploads/".$row['photo']."' height='100'></td>";
    echo "<td><a href='update.php?kode=".$row['kode']."'>Edit</a> | 
          <a href='delete.php?kode=".$row['kode']."'>Hapus</a></td>";
    echo "</tr>";
}

mysqli_close($koneksi);
?>