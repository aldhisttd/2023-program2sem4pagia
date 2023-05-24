<?php

if(isset($_POST['tombol_submit'])){

    $nama       = $_POST['input_nama'];
    $ttl        = $_POST['input_tgl_lahir'];
    $alamat     = $_POST['input_alamat_rumah'];
    $foto       = $_FILES['foto']['name'];
    $foto_tmp   = $_FILES['foto']['tmp_name'];

    echo "Nama Saya $nama <br/> Saya Lahir Pada tanggal $ttl <br/> Saya Tinggal $alamat <br/>";

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($foto);
    move_uploaded_file($foto_tmp, $target_file);

    echo "Foto: <img src='". $target_file . "'alt='Foto Mahasiswa' width='200'>";

}else{
    echo "submit error";
}
?>
