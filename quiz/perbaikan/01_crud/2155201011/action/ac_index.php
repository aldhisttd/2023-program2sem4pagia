<?php
$path = $_FILES['photo']['name'];
$ext = "." . pathinfo($path, PATHINFO_EXTENSION);
$photo = md5(time()) . $ext;
move_uploaded_file($_FILES['photo']['tmp_name'], '../upload/' . $photo);

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$umur = $_POST['umur'];

$query = "INSERT INTO mahasiswa (nim,nama,jurusan,umur,photo) VALUES ('$nim','$nama','$jurusan','$umur','$photo')";

include "ac_koneksi.php";

mysqli_query($koneksi, $query);

header("location:../data.php"); 