<?php
$path = $_FILES['file']['name'];
$ext = "." . pathinfo($path, PATHINFO_EXTENSION);
$file = md5(time()) . $ext;
move_uploaded_file($_FILES['file']['tmp_name'], '../file/' . $file);

$kode = $_POST['kode'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$jenis = $_POST['jenis'];
$quantity = $_POST['quantity'];
$spesifikasi = $_POST['spesifikasi'];
$file = $_POST['file'];

$query = "INSERT INTO tb_buku (kode,tanggal_masuk,jenis,quantity,spesifikasi,file) VALUES ('$kode','$tanggal_masuk','$jenis','$quantity','$spesifikasi','$file')";

include "koneksi.php";

mysqli_query($koneksi, $query);

header("location:../data.php");