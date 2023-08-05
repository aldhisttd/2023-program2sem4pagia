<?php
// ambil sn dari url variable
$sn = $_REQUEST['sn'];
// koneksi
$koneksi = mysqli_connect('localhost','root','','2155201008');
// ambil nama cover
$q = mysqli_query($koneksi, "SELECT gambar FROM software WHERE sn='$sn'");
$dt = mysqli_fetch_array($q);
$cover = $dt['gambar'];
// hapus cover nya
unlink('img/' . $cover);
// jalankan query delete dengan condition sn=snnya
mysqli_query($koneksi, "DELETE FROM software WHERE sn='$sn'");
// kembalikan ke halaman data.php
header('location:../role/admin.php');