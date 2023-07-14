<?php
// ambil nim dari url variable
$isbn = $_REQUEST['isbn'];
// koneksi
include "action/koneksi.php";
// ambil nama file
$q = mysqli_query($koneksi, "SELECT file FROM tb_buku WHERE isbn='$isbn'");
$dt = mysqli_fetch_array($q);
$file = $dt['file'];
// hapus file nya
unlink('file/' . $file);
// jalankan query delete dengan condition nim=nimnya
mysqli_query($koneksi, "DELETE FROM tb_buku WHERE isbn='$isbn'");
// kembalikan ke halaman data.php
header('location:data.php');