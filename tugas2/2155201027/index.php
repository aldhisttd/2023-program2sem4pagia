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
    <form action="proses.php" method="POST" enctype="multipart/form-data">
        <label for="">Nama</label> <br>
        <input type="text" name="nama">
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
        <button type="submit" name="btn_submit">Submit</button>
    </form>
</body>
</html>
 28 changes: 28 additions & 0 deletions28  
tugas2/2155201024/proses.php
Marking files as viewed can help keep track of your progress, but will not affect your submitted reviewViewed
Comment on this file
@@ -0,0 +1,28 @@
<?php


if(isset($_POST['btn_submit'])){

    $a = $_POST['nama'];
    $b = $_POST['alamat'];
    $c = $_POST['tgl_lahir'];
    $d = $_FILES['photo']['name'];
    $photo_tmp = $_FILES['photo']['tmp_name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($d);
    move_uploaded_file($photo_tmp, $target_file);


    echo $a; echo "<br>";
    echo $b; echo "<br>";
    echo $c; echo "<br>";

    echo "<img src='" . $target_file . "' alt='Photo Mahasiswa' width='150'>";




}else{

    header('Location: index.php');
}
