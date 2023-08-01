<?php
// Lakukan koneksi ke database
$koneksi = mysqli_connect('localhost', 'root', '', 'Software');
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// Query untuk mengambil data dari tabel Software
$query = "SELECT * FROM Software";
$result = mysqli_query($koneksi, $query);

// Tampilkan data ke dalam tabel
while ($row= mysqli_fecth_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['Sn']."</td>";
    echo "<td>".$row['Tanggal_rilis']."</td>";
    echo "<td>".$row['jenis']."</td>";
    echo "<td>".$row['Quantity']."</td>";
    echo "<td>".$row['Spesifikasi']."</td>";
    echo "<td>".$row['Gambar']."</td>";
    echo "<td><img src='uploads/".$row['Gambar']."' height='100'></td>";
    echo "<td><a href='update.php?kode=".$row['kode']."'>Edit</a> | 
          <a href='delete.php?kode=".$row['kode']."'>Hapus</a></td>";
    echo "</tr>";
}

mysqli_close($koneksi);
?>
