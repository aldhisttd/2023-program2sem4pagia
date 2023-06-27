<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QUIZ/01-2155201063</title>
</head>
<body>
<h2>QUIZ NIM GANJIL (DIAN AFRIANDI)</h2>
<table>
<a href="tabelbarang.php">Tabel Barang</a>
<form action="" method="post" enctype="multipart/form-data">
        <tr>
        <td>Kode Barang</td>    
        <td>:</td>
        <td><label for="kode"></label><input type="number" name="kode" required></td>
        <tr>
        <tr>
        <td>Nama Barang</td>    
        <td>:</td>
        <td><label for="barang"></label><input type="text" name="barang" required></td>
        <tr>
        <td>Stok</td>    
        <td>:</td>
        <td><label for="stok"></label><input type="text" name="stok" required></td>
        <tr>
        <tr>
        <td>Foto</td>    
        <td>:</td>
        <td><label for="photo"></label><input type="file" name="photo" required></td>
        <tr>
        </table>  
        <input type="submit" value="Proses" name="proses">
  </form>
  <?php

  include "koneksi.php";
  if(isset($_POST['proses'])){
        $kodebarang       = $_POST['kode'];
        $namabarang       = $_POST['barang'];
        $stok  = $_POST['stok'];

        $photo_name = $_FILES['photo']['name'];
        $photo_tmp = $_FILES['photo']['tmp_name'];
        $folder = './foto/';

    // 

        move_uploaded_file($photo_tmp, $folder.$photo_name);
    // 

    // 
    $insert = mysqli_query($koneksi, "INSERT INTO ganjil VALUES( NULL, '$namabarang' , '$stok', '$photo_name')");
    //
    if($insert){
      echo 'Berhasil Input';
    }else{
      echo 'Gagal Input';
    }
  }
    ?>

</body>
</html>
