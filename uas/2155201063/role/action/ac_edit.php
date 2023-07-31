<?php

// ambil semua value dari form
$kode = $_POST['kode'];
$tanggal = $_POST['tanggal'];
$jenis = $_POST['jenis'];
$quantity = $_POST['quantity'];
$spesifikasi = $_POST['spesifikasi'];


include "koneksi.php";
if ($_FILES['photo']['name'] != "") {

  
    $q = mysqli_query($koneksi, "SELECT gambar FROM uas_crud WHERE kode='$kode'");
    $dt = mysqli_fetch_array($q);
    $photo = $dt['photo'];

    
    unlink('../upload/'.$photo);

    // upload photo baru
    $path = $_FILES['photo']['name'];
    $ext = "." . pathinfo($path, PATHINFO_EXTENSION);
    $namaphoto = md5(time()) . $ext;
    move_uploaded_file($_FILES['photo']['tmp_name'], '../upload/' . $namaphoto);
    

    mysqli_query($koneksi, "UPDATE uas_crud SET gambar='$namaphoto' WHERE kode='$kode'");
}

// update dengan condition
mysqli_query($koneksi, "UPDATE uas_crud SET tanggal='$tanggal', jenis='$jenis', quantity='$quantity', spesifikasi='$spesifikasi', gambar='$namaphoto' WHERE kode='$kode'");
// pindah kehalaman data.php

header("location:../data.php");