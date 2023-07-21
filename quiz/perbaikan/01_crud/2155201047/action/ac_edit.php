<?php

// ambil semua value dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$umur = $_POST['umur'];

// koneksi
include "koneksi.php";
if ($_FILES['foto']['name'] != "") {

    // ambil nama photo lama
    $q = mysqli_query($koneksi, "SELECT foto FROM perbaikan_crud WHERE nim='$nim'");
    $dt = mysqli_fetch_array($q);
    $photo = $dt['foto'];

    // hapus photo lama
    unlink('../uploads/'.$photo);

    // upload photo baru
    $path = $_FILES['foto']['name'];
    $ext = "." . pathinfo($path, PATHINFO_EXTENSION);
    $namaphoto = md5(time()) . $ext;
    move_uploaded_file($_FILES['foto']['tmp_name'], '../uploads/' . $namaphoto);
    

    // update nama photo ke photo baru
    mysqli_query($koneksi, "UPDATE perbaikan_crud SET foto='$namaphoto' WHERE nim='$nim'");
}

// update dengan condition
mysqli_query($koneksi, "UPDATE perbaikan_crud SET nama='$nama', jurusan='$jurusan', umur='$umur', foto='$namaphoto' WHERE nim='$nim'");
// pindah kehalaman data.php
header("location:../data.php");