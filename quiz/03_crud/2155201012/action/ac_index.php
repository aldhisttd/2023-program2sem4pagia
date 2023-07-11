<?php
$path = $_FILES['bukti_transfer']['name'];
$ext = "." . pathinfo($path, PATHINFO_EXTENSION);
$bukti_transfer = md5(time()) . $ext;
move_uploaded_file($_FILES['bukti_transfer']['tmp_name'], '../bukti_transfer/' . $bukti_transfer);

$nomor_tagihan = $_POST['nomor_tagihan'];
$tanggal = $_POST['tanggal'];
$jenis_tagihan = $_POST['jenis_tagihan'];
$nominal = $_POST['nominal'];

$query = "INSERT INTO pembayaran (nomor_tagihan,tanggal,jenis_tagihan,nominal,bukti_transfer) VALUES ('$nomor_tagihan','$tanggal','$jenis_tagihan','$nominal','$bukti_transfer')";

include "koneksi.php";

mysqli_query ($koneksi, $query);

header("location:../data.php");