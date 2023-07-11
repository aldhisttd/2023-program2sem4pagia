<?php

// ambil semua value dari form
$isbn = $_POST['isbn'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$stok = $_POST['stok'];
$file = $_POST['file'];

// koneksi
include "koneksi.php";
if ($_FILES['file']['file'] != "") {

    // ambil nama photo lama
    $q = mysqli_query($koneksi, "SELECT file FROM tb_buku WHERE isbn='$isbn'");
    $dt = mysqli_fetch_array($q);
    $file = $dt['file'];

    // hapus photo lama
    unlink('../file/'.$file);

    // upload photo baru
    $path = $_FILES['file']['file'];
    $ext = "." . pathinfo($path, PATHINFO_EXTENSION);
    $file = md5(time()) . $ext;
    move_uploaded_file($_FILES['file']['tmp_name'], '../file/' . $judul);

    // update nama photo ke photo baru
    mysqli_query($koneksi, "UPDATE tb_buku SET file='$judul' WHERE isbn='$isbn'");
}

// update dengan condition
mysqli_query($koneksi, "UPDATE tb_buku SET judul='$judul', stok='$stok', kategori='$kategori', file='$file' WHERE isbn='$isbn'");
// pindah kehalaman data.php
header("location:../data.php");