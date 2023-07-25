<?php
// Lakukan koneksi ke database
$koneksi = mysqli_connect('localhost', 'root', '', '2155201024');
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// Query untuk mengambil data dari tabel software
$query = "SELECT * FROM software";
$result = mysqli_query($koneksi, $query);

// Tampilkan data ke dalam tabel
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['sn']."</td>";
    echo "<td>".$row['tanggal_rilis']."</td>";
    echo "<td>".$row['jenis']."</td>";
    echo "<td>".$row['quantity']."</td>";
    echo "<td>".$row['spesifikasi']."</td>";
    echo "<td><img src='uploads/".$row['gambar']."' height='100'></td>";
    echo "<td><a href='update.php?kode=".$row['sn']."'>Edit</a> | 
          <a href='delete.php?kode=".$row['sn']."'>Hapus</a></td>";
    echo "</tr>";
}

mysqli_close($koneksi);
?>