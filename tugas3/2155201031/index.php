<!DOCTYPE html>
<html>
<head>
  <title>Create And Read</title>
</head>
<body>
  <h1>DATA WAJIB DI ISI </h1>
  <form action="" method="post" enctype="multipart/form-data">
    <table border="6">
    <tr>
        <td>Nim</td>    
        <td>:</td>
        <td><label for="nim"></label><input type="number" name="nim" requiredplaceholder="Silahkan Diisi..." style="width:98%"></td>
    </tr>

    <tr>
        <td>Nama</td>    
        <td>:</td>
        <td><label for="nama"></label><input type="text" name="nama" requiredplaceholder="Silahkan Diisi..." style="width:98%"></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>    
        <td>:</td>
        <td><label for="tgl_lahir"></label><input type="date" name="tgl_lahir" requiredplaceholder="Silahkan Diisi..." style="width:99%"></td>
    </tr>
    <tr>
        <td>Alamat</td>    
        <td>:</td>
        <td><textarea name="alamat" rows="5" cols="40" placeholder="Kamu tinngal dimana?" type="placeholder"></textarea></td>
    </tr>
    <tr>
            <td><p>Pilih foto</p></td>
            <td><p>:</p></td>

            <td><input type="file" name="photo" /></td>
    </tr>

    </table>
    <input type="submit" value="Submit" name="submit">
  </form>
  <a href="hasil.php">Next</a>
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
    $insert = mysqli_query($koneksi, "INSERT INTO data_mahasiswa VALUES( '$nim', '$nama' , '$tgl_lahir', '$alamat', '$photo_name')");
    //
    if($insert){
      echo 'Berhasil Upload';
    }else{
      echo 'Gagal Uplaod';
    }
  }
    ?>


</body>
</html>