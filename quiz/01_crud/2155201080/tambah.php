<?php
$conn = mysqli_connect("localhost","root" ,"","phpdasar");


if (isset($_POST["submit"])) {
    $id = $_POST["id_karyawan"];
    $nama_karyawan = $_POST["nama_karyawan"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $photo = $_POST["photo"];

    $query="INSERT INTO karyawan
                VALUES
            ('$id', '$nama_karyawan', '$tgl_lahir', '$photo')
            ";

    mysqli_query($conn , $query);
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
<a href="index.php">kembali ke index</a>

<form action="" method="post">
    <ul>
        <li>
            <label for="id_karyawan">ID Karyawan:</label>
            <input type="text" name="id_karyawan" id="id_karyawan">
        </li>
        <li>
            <label for="nama_karyawan">Nama Karyawan :</label>
            <input type="text" name="nama_karyawan" id="nama_karyawan">
        </li>
        <li>
            <label for="tgl_lahir">Tanggal Lahir :</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir">
        </li>
        <li>
            <label for="photo">Gambar :</label>
            <input type="text" name="photo" id="photo">
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