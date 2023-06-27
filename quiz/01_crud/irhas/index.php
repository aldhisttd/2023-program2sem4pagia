<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QUIZ/01-2155201100</title>
</head>
<body>
<h2>QUIZ NIM GENAP (T.MUHAMMAD IRHAS MUBARAK)</h2>
<table>
<a href="karyawan.php">Tabel Karyawan</a>
<form action="" method="post" enctype="multipart/form-data">
        <tr>
        <td>Id Karyawan</td>    
        <td>:</td>
        <td><label for="id_karyawan"></label><input type="number" name="id_karyawan" required></td>
        <tr>
        <tr>
        <td>Nama Karyawan</td>    
        <td>:</td>
        <td><label for="nama_karyawan"></label><input type="text" name="nama_karyawan" required></td>
        <tr>
        <td>Tanggal Lahir</td>    
        <td>:</td>
        <td><label for="tgl_lahir"></label><input type="date" name="tgl_lahir" required></td>
        <tr>
        </table>  
        <input type="submit" value="Proses" name="proses">
  </form>
  <?php

  include "koneksi.php";
  if(isset($_POST['proses'])){
        $id_karyawan         = $_POST['id_karyawan'];
        $nama_karyawan       = $_POST['nama_karyawan'];
        $tgl_lahir            = $_POST['tgl_lahir'];
    // 

    // 
    $insert = mysqli_query($koneksi, "INSERT INTO genap VALUES( NULL, '$nama_karyawan' , '$tgl_lahir')");
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