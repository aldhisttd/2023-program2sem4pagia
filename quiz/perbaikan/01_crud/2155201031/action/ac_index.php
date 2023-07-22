<?php
$path = $_FILES['foto']['name'];
$ext = "." . pathinfo($path, PATHINFO_EXTENSION);
$photo = md5(time()) . $ext;
move_uploaded_file($_FILES['foto']['tmp_name'], '../uploads/' . $photo);

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$umur = $_POST['umur'];

$query = "INSERT INTO crud_tb (nim,nama,jurusan,umur,foto) VALUES ('$nim','$nama','$jurusan','$umur','$photo')";

include "koneksi.php";

mysqli_query($koneksi, $query);

header("location:../data.php");