<?php
$path = $_FILES['photo']['name'];
$ext = "." . pathinfo($path, PATHINFO_EXTENSION);
$photo = md5(time()) . $ext;
move_uploaded_file($_FILES['photo']['tmp_name'], '../uploads/' . $photo);

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$umur = $_POST['umur'];

$query = "INSERT INTO crud_tb (nim,nama,jurusan,umur,photo) VALUES ('$nim','$nama','$jurusan','$umur','$photo')";

include "koneksi.php";

mysqli_query($koneksi, $query);

header("location:../data.php");