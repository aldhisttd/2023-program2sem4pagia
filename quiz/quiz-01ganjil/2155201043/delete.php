<?php 

echo "menghapus data";

// koneksi ke db
$koneksi = mysqli_connect("localhost","root","","quiz_mahmud");

// jalankan query
$kode = $_REQUEST['kode'];
mysqli_query($koneksi, "DELETE FROM mahmud WHERE kode_barang='$kode'");

// redirect ke table
header("location:edit.php");

?>