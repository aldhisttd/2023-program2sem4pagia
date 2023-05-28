<?php

include "koneksi.php";

    if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into mahasiswa set
    Nama = '$_POST[nama]',
    Nim = '$_POST[nim]',
    Tanggal_Lahir ='$_POST[tgl_lahir]',
    Alamat ='$_POST[alamat]',
    Photo = '$_POST[photo]'");

    echo "Data mahasiswa telah tersimpan";
}