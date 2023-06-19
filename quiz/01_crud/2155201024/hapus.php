<?php 

echo "menghapus data";

// koneksi ke db
$koneksi = mysqli_connect('localhost','root','','karyawan');

// jalankan query
$id_karyawan = $_REQUEST['id_karyawan'];
mysqli_query($koneksi, "DELETE FROM genap WHERE id_karyawan='$id_karyawan'");

// redirect ke table
header("location:index.php");

?>