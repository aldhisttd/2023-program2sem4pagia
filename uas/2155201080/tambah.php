<?php
include("function.php");

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo"data berhasil ditambahkan";            
    }else{
        echo"data gagal ditambahkan";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Tambah Data Mahasiswa</h1>
<a href="index.php">Kembali ke Index</a>
<br><br>
<form action="" method="POST" enctype="multipart/form-data">
    <ul>
        <li>
            <label for="sn">SN:</label>
            <input type="text" name="sn" id="sn">
        </li>
        <li>
            <label for="tanggal_rilis">Tanggal Rilis :</label>
            <input type="date" name="tanggal_rilis" id="tanggal_rilis">
        </li>
        <li>
            <label for="Jenis">Jenis :</label>
                <select input type="text" name="jenis">
                    <option value="editing">Editing</option>
                    <option value="coding">Cooding</option>
                    <option value="tools">Tools</option>
                </select>
        </li>
        <li>
            <label for="quantity">Quantity :</label>
            <input type="number" name="quantity" id="quantity">
        </li>
        <li>
            <label for="spesifikasi">Spesifikasi :</label>
            <input type="textarea" name="spesifikasi" id="spesifikasi">
        </li>
        <li>
            <label for="gambar">Gambar :</label>
            <input type="file" name="gambar" id="gambar">
        </li>
        <li>
            <button type="submit" name="submit">
                Masukan Data
            </button>
        </li>
    </ul>
</form>

</body>
</html>