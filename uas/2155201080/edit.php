<?php
include("function.php");

$sn = $_GET['sn'];

$sfw = query("SELECT * FROM admin WHERE sn='$sn'")[0];

if (isset($_POST["submit"])) {
    if (edit($_POST) > 0) {
        echo"data berhasil dirubah";            
    }else{
        echo"data gagal dirubah";
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
    
<h1>Edit Data Mahasiswa</h1>
<a href="index.php">Kembali ke Index</a>
<br><br>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="gambarlama" value="<?php echo $sfw['gambar'] ?>">
    <ul>
        <li>
            <label for="sn">SN:</label>
            <input type="text" name="sn" id="sn" redonly value="<?php echo $sfw['sn'] ?>">
        </li>
        <li>
            <label for="tanggal_rilis">Tanggal Rilis :</label>
            <input type="date" name="tanggal_rilis" id="tanggal_rilis" value="<?php echo $sfw['tanggal_rilis'] ?>">
        </li>
        <li>
            <label for="Jenis">Jenis :</label>
                <select input type="text" name="jenis" value="<?php echo $sfw['jenis'] ?>">
                    <option value="editing">Editing</option>
                    <option value="coding">Cooding</option>
                    <option value="tools">Tools</option>
                </select>
        </li>
        <li>
            <label for="quantity">Quantity :</label>
            <input type="number" name="quantity" id="quantity" value="<?php echo $sfw['quantity'] ?>">
        </li>
        <li>
            <label for="spesifikasi">Spesifikasi :</label>
            <input type="textarea" name="spesifikasi" id="spesifikasi" value="<?php echo $sfw['spesifikasi'] ?>">
        </li>
        <li>
            <label for="gambar">Gambar :</label>
            <img src="img/<?php echo $sfw['gambar'] ?>" alt="">
            <input type="file" name="gambar" id="gambar" >
        </li>
        <li>
            <button type="submit" name="submit">
                ubah data
            </button>
        </li>
    </ul>
</form>

</body>
</html>