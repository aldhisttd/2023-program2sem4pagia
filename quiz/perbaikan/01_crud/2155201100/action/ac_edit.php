<?php

// ambil semua value dari form
$kode = $_POST['kode'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];
$harga = $_POST['harga'];

// koneksi
include "koneksi.php";
if ($_FILES['photo']['name'] != "") {

    // ambil nama photo lama
    $q = mysqli_query($koneksi, "SELECT photo FROM kendaraan WHERE kode='$kode'");
    $dt = mysqli_fetch_array($q);
    $photo = $dt['photo'];
 
    // hapus photo lama
    unlink('../photo/'.$photo);

    // upload photo baru
    $path = $_FILES['photo']['name'];
    $ext = "." . pathinfo($path, PATHINFO_EXTENSION);
    $namaphoto = md5(time()) . $ext;
    move_uploaded_file($_FILES['photo']['tmp_name'], '../photo/' . $namaphoto);

    // update nama photo ke photo baru
    mysqli_query($koneksi, "UPDATE kendaraan SET photo='$namaphoto' WHERE kode='$kode'");
}
// update dengan condition
mysqli_query($koneksi, "UPDATE kendaraan SET tanggal_masuk='$tanggal_masuk', jenis_kendaraan ='$jenis_kendaraan', harga = '$harga',   photo = '$namaphoto' WHERE kode='$kode'");
// pindah kehalaman data.php
header("location:../data.php");