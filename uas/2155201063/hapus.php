<?php

$kode = $_REQUEST['kode'];

include "action/koneksi.php";

$q = mysqli_query($koneksi, "SELECT gambar FROM uas_crud WHERE kode='$kode'");
$dt = mysqli_fetch_array($q);
$photo = $dt['photo'];

unlink('upload/' . $photo);

mysqli_query($koneksi, "DELETE FROM uas_crud WHERE kode='$kode'");

header('location:data.php');