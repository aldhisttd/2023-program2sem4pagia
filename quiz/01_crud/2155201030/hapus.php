<?php 

echo "menghapus data";

// koneksi ke db
$connect = mysqli_connect('localhost','root','','data_genap');

// jalankan query
$id_karyawan = $_REQUEST['id_karyawan'];
mysqli_query($connect, "DELETE FROM karyawan WHERE id_karyawan='$id_karyawan'");

// redirect ke table
header("location:index.php");

?>