<?php 

echo "menghapus data";

// koneksi ke db
$koneksi = mysqli_connect('127.0.0.1','root','root','4pagia','3307');

// jalankan query
$kode = $_REQUEST['kode'];
mysqli_query($koneksi, "DELETE FROM jurusan WHERE kode='$kode'");

// redirect ke table
header("location:index.php");

?>