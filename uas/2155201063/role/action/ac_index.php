<?php
$path = $_FILES['photo']['name'];
$ext = "." . pathinfo($path, PATHINFO_EXTENSION);
$gambar = md5(time()) . $ext;
move_uploaded_file($_FILES['photo']['tmp_name'], '../upload/' . $gambar);

$kode = $_POST['kode'];
$tanggal = $_POST['tanggal'];
$jenis = $_POST['jenis'];
$quantity = $_POST['quantity'];
$spesifikasi = $_POST['spesifikasi'];

$query = "INSERT INTO uas_crud (kode,tanggal_masuk,jenis,quantity,spesifikasi,gambar) VALUES ('$kode','$tanggal','$jenis','$quantity', '$spesifikasi', '$gambar')";

include "koneksi.php";

mysqli_query($koneksi, $query);

header("location:../admin.php");