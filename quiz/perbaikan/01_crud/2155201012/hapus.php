<?php
// ambil nim dari url variable
$kode = $_REQUEST['kode'];
// koneksi
include "action/koneksi.php";
// ambil nama photo
$q = mysqli_query($koneksi, "SELECT photo FROM kendaraan WHERE kode='$kode'");
$dt = mysqli_fetch_array($q);
$photo = $dt['photo'];
// hapus file nya
unlink('/photo' . $photo);
// jalankan query delete dengan condition kode=kodenya
mysqli_query($koneksi, "DELETE FROM kendaraan WHERE kode='$kode'");
// kembalikan ke halaman data.php
header('location:data.php');