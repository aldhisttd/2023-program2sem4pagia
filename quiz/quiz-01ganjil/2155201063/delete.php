<?php 

echo "menghapus data";

// koneksi ke db
$koneksi = mysqli_connect("localhost","root","","quiz_01");

// jalankan query
$kode = $_REQUEST['kode'];
mysqli_query($koneksi, "DELETE FROM ganjil WHERE kode='$kode'");

// redirect ke table
header("location:index.php");

?>