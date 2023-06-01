<?php

include "koneksi.php";
if(isset($_POST['submit'])){
      $nim        = $_POST['nim'];
      $nama       = $_POST['nama'];
      $tgl_lahir  = $_POST['tgl_lahir'];
      $alamat     = $_POST['alamat'];
  // 
  $photo_name = $_FILES['photo']['name'];
  $photo_tmp = $_FILES['photo']['tmp_name'];
  $folder = './uploads/';

  // 
  
  move_uploaded_file($photo_tmp, $folder.$photo_name);

  // 
  $insert = mysqli_query($koneksi, "INSERT INTO mahasiswa_pagi VALUES( NULL, '$nama' , '$tgl_lahir', '$alamat', '$photo_name')");
  //
  if($insert){
    echo 'Berhasil Upload';
  }else{
    echo 'Gagal Uplaod';
  }
}
  ?>