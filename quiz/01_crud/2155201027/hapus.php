<?php 

echo "menghapus data";

// koneksi ke db
$koneksi = mysqli_connect('localhost','root','','data_barang');

// jalankan query
$kode = $_REQUEST['kd_brg'];
mysqli_query($koneksi, "DELETE FROM barang WHERE kode='$kd_brg'");

// redirect ke table
header("location:index.php");

?>