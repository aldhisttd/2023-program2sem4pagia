<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if(isset($_POST['spn'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tanggal = $_POST['tgl_lahir'];
    $file = $_FILES['foto']['name'];
    $tmp_name = $_FILES['foto']['tmp_name'];
    $dirUpLoad = "images/";
    $fileUpLoad = $dirUpLoad .basename($file);
    move_uploaded_file($tmp_name, $fileUpLoad);
   
    echo  "Nama &nbsp;: " . $nama .  "<br>";
    echo "Alamat : " . $alamat . "<br>";
    echo "Tanggal : " . $tanggal . "<br>";
    echo "Gambar : <img src='". $fileUpLoad ."' width='70' height='90' align='middle'>"; 
}
?>
</body>
</html>

