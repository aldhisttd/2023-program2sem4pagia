<?php 

echo "menghapus data";

// koneksi ke db
$koneksi = mysqli_connect('localhost','root','','genap');

// jalankan query
$id_karyawan = $_REQUEST['id_karyawan'];
mysqli_query($koneksi, "DELETE FROM karyawan WHERE id_karyawan='$id_karyawan'");

// redirect ke table
header("location:index.php");

?>