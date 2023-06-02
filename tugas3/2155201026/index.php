<!DOCTYPE html>
<html>
<head>
  <title>CREATE AND READ YOLANDA</title>
</head>
<body>
  <h1>Form Input Mahasiswa</h1>

  <form action="hasil.php" method="post" enctype="multipart/form-data">
    <table>
    <tr>
        <td>Nim</td>    
        <td>:</td>
        <td><label for="nim"></label><input type="number" name="nim" required></td>
    </tr>

    <tr>
        <td>Nama</td>    
        <td>:</td>
        <td><label for="nama"></label><input type="text" name="nama" required></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>    
        <td>:</td>
        <td><label for="tgl_lahir"></label><input type="date" name="tgl_lahir" required></td>
    </tr>
    <tr>
        <td>Alamat</td>    
        <td>:</td>
        <td><textarea name="alamat" rows="5" cols="40" placeholder="" type="placeholder"></textarea></td>
    </tr>
    <tr>
            <td><p>Pilih foto</p></td>
            <td><p>:</p></td>
            
            <td><input type="file" name="photo" /></td>
        </tr>
    </table>
    <input type="submit" value="Submit" name="submit">
  </form>

    <?php

  include "koneksi.php";
  if(isset($_POST['submit'])){
        $nama       = $_POST['nama'];
        $nim        = $_POST['nim'];
        $tgl_lahir  = $_POST['tgl_lahir'];
        $alamat     = $_POST['alamat'];
    // 
    $photo_name = $_FILES['photo']['name'];
    $photo_tmp = $_FILES['photo']['tmp_name'];

// Pindahkan file foto ke direktori yang diinginkan
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($photo_name);

    move_uploaded_file($photo_tmp, $target_file);

    // 
    

    // 
    $insert = mysqli_query($koneksi, "INSERT INTO sttd_mahasiswa VALUES(NULL, '$nama' , '$tgl_lahir', '$alamat', '$photo_name')");
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