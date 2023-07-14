<?php
$path = $_FILES['file']['name'];
$ext = "." . pathinfo($path, PATHINFO_EXTENSION);
$file = md5(time()) . $ext;
move_uploaded_file($_FILES['file']['tmp_name'], '../file/' . $file);

$isbn = $_POST['isbn'];
$judul = $_POST['judul'];
$kategori =$_POST['kategori'];
$stok = $_POST['stok'];

$query = "INSERT INTO tb_buku (isbn,judul,kategori,stok,file) VALUES ('$isbn','$judul','$kategori','$stok','$file')";

include "koneksi.php";

mysqli_query($koneksi, $query);

header("location:../data.php");