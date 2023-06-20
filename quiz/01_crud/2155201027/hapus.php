<?php 

echo "menghapus data";

// koneksi ke db
$koneksi = mysqli_connect('127.0.0.1','root','root','4pagia','3307');

// jalankan query
$kode = $_REQUEST['kd_barang'];
mysqli_query($koneksi, "DELETE FROM barang WHERE kode='$kd_barang'");

// redirect ke table
header("location:index.php");

?>