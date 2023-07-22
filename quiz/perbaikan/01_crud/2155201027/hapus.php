<?php
// ambil nim dari url variable
$nim = $_REQUEST['nim'];
// koneksi
include "action/koneksi.php";
// ambil nama file
$q = mysqli_query($koneksi, "SELECT photo FROM crud_tb WHERE nim='$nim'");
$dt = mysqli_fetch_array($q);
$photo = $dt['photo'];
// hapus file nya
unlink('uploads/' . $photo);
// jalankan query delete dengan condition nim=nimnya
mysqli_query($koneksi, "DELETE FROM crud_tb WHERE nim='$nim'");
// kembalikan ke halaman data.php
header('location:data.php');