<?php

include "koneksi.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tgl_lahir = $_POST['tgl_lahir'];
$nim = $_POST['nim'];

$photo_name = $_FILES['photo']['name'];
$photo_tmp = $_FILES['photo']['tmp_name'];

// Pindahkan file foto ke direktori yang diinginkan
$target_dir = "uploads/";
$target_file = $target_dir . basename($photo_name);
move_uploaded_file($photo_tmp, $target_file);

$query = "INSERT INTO mahasiswa (nim, nama, alamat, tgl_lahir, photo) VALUES ('$nim', '$nama', '$alamat', '$tgl_lahir', '$target_file')";

$ex = $conn->query($query);


include "read.php";

