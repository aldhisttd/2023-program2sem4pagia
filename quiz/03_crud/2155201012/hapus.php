<?php
// ambil nim dari url variable
$nomor_tagihan = $_REQUEST['nomor_tagihan'];
// koneksi
include "action/koneksi.php";
// ambil nama photo
$q = mysqli_query($koneksi, "SELECT bukti_transfer FROM pembayaran WHERE nomor_tagihan='$nomor_tagihan'");
$dt = mysqli_fetch_array($q);
$bukti_transfer = $dt['bukti_transfer'];
// hapus file nya
unlink('buktipembayaran/' . $bukti_transfer);
// jalankan query delete dengan condition nim=nimnya
mysqli_query($koneksi, "DELETE FROM pembayaran WHERE nomor_tagihan='$nomor_tagihan'");
// kembalikan ke halaman data.php
header('location:data.php');