<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS DIAN AFRINADI</title>
</head>
<body>
    
    <h1>Form Data Mahasiswa</h1>

    <form action="" method="POST">

        <label for="">Nama</label> <br>
        <input type="text" name="nama">

        <br>
        <br>
        <label for="">Nim</label> <br> <input type="number" name="nim">

        <br>
        <br>    
        <label for="">Tanggal Lahir</label> <br>
        <input type="date" name="tgl_lahir">

        <br>

        <br>
        <textarea name="alamat" rows="5" cols="40" placeholder="Masukkan Alamat" type="placeholder"></textarea><br>

        <br>

        <label for="">Photo</label> <br>
        <input type="file" name="photo">

        <br><br>

        <input type="submit" value ="Submit" name="proses"></input>

    </form>
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
?>
</body>
</html>