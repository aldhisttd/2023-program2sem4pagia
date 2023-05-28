<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Form</h1>

    <form action="" method="POST">

        <label for="">Nama</label> <br>
        <input type="text" name="nama">

        <br>

        <label for="">Nim</label> <br>
        <input type="number" name="nim">

        <br>

        <label for="">Alamat</label> <br>
        <textarea name="alamat" id="" cols="30" rows="3"></textarea>

        <br>

        <label for="">Tanggal Lahir</label> <br>
        <input type="date" name="tgl_lahir">

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
            Alamat ='$_POST[alamat]',
            Tanggal_Lahir ='$_POST[tgl_lahir]',
            Photo = '$_POST[photo]'");

            echo "Data mahasiswa telah tersimpan";
        }

    ?>
</body>
</html>