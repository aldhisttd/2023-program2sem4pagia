<?php
 
include "../assets/koneksi.php";

$nip = $_REQUEST['nip'];

$conn->query("DELETE FROM pegawai WHERE nip=$nip");

header("location:../index.php?page=beranda");

?>