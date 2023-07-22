<?php
$path = $_FILES['photo']['name'];
$ext = "." . pathinfo($path, PATHINFO_EXTENSION);
$photo = md5(time()) . $ext;
move_uploaded_file($_FILES['photo']['tmp_name'], '../photo/' . $photo);

$kode = $_POST['kode'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];
$harga = $_POST['harga'];

$query = "INSERT INTO kendaraan (kode,tanggal_masuk,jenis_kendaraan,harga,photo) VALUES ('$kode','$tanggal_masuk','$jenis_kendaraan','$harga','$photo')";

include "koneksi.php";

mysqli_query ($koneksi, $query);

header("location:../data.php");