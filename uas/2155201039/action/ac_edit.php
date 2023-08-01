<?php

// ambil semua value dari form
$kode = $_POST['kode'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$jenis = $_POST['jenis'];
$quantity = $_POST['quantity'];
$spesifikasi = $_POST['spesifikasi'];
$file = $_POST['file'];

// koneksi
include "koneksi.php";
if ($_FILES['file']['file'] != "") {

    // ambil nama photo lama
    $q = mysqli_query($koneksi, "SELECT file FROM tb_data WHERE kode='$kode'");
    $dt = mysqli_fetch_array($q);
    $file = $dt['file'];

    // hapus photo lama
    unlink('../file/'.$file);

    // upload photo baru
    $path = $_FILES['file']['file'];
    $ext = "." . pathinfo($path, PATHINFO_EXTENSION);
    $file = md5(time()) . $ext;
    move_uploaded_file($_FILES['file']['tmp_name'], '../file/' . $file);
    

    // update nama photo ke photo baru
    mysqli_query($koneksi, "UPDATE tb_data SET file='$j' WHERE kode='$kode'");
}

// update dengan condition
mysqli_query($koneksi, "UPDATE tb_data SET tanggal_masuk='$tanggal_masuk', jenis='$jenis', quantity='$quantity', spesifikasi='$spesifikasi', jenis='$jenis', file='$file' WHERE koode='$kode'");
// pindah kehalaman data.php
header("location:../data.php");