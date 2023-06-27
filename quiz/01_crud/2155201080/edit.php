<?php 
$koneksi = mysqli_connect('localhost','root','','phpdasar');

if(isset($_POST['submit'])){
    $id_karyawan = $_POST['id_karyawan'];
    $nama_karyawan = $_POST['nama_karyawan'];

    mysqli_query($koneksi, "UPDATE karyawan SET nama_karyawan='$nama_karyawan' WHERE  id_karyawan='$id_karyawan'");
    header("location:index.php");
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
<a href="index.php">Kembali ke index</a>
<br><br>
<?php 
    // koneksi db
    // ambil kode dari URL
    $id_karyawan = $_REQUEST['id_karyawan'];
    // jalankan query dengan where kode
    $data = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE id_karyawan='$id_karyawan'");
    
    while ($row=mysqli_fetch_array($data)) {
        $nama_karyawan = $row['nama_karyawan'];
        $tgl_lahir = $row['tgl_lahir'];
        $photo = $row['photo'];
    }
    
    ?>
<form action="edit.php" method="post">
    <ul>
        <li>
            <label for="id_karyawan">ID Karyawan:</label>
            <input type="text" name="id_karyawan" id="id_karyawan" readonly value="<?php echo $id_karyawan ?>">
        </li>
        <li>
            <label for="nama_karyawan">Nama Karyawan :</label>
            <input type="text" name="nama_karyawan" id="nama_karyawan" value="<?php echo $nama_karyawan ?>">
        </li>
        <li>
            <label for="tgl_lahir">Tanggal Lahir :</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir" value="<?php echo $tgl_lahir ?>">
        </li>
        <li>
            <label for="photo">Gambar :</label>
            <input type="text" name="photo" id="photo" value="<?php echo $photo ?>">
        </li>
        <li>
            <button type="submit" name="submit">
                Update Data
            </button>
        </li>
    </ul>
</form>

</body>
</html>