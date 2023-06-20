<?php 
$koneksi = mysqli_connect('localhost','root','','data_barang');

if(isset($_POST['btn-update'])){
    $kd_brg = $_POST['kd_brg'];
    $nama_brg = $_POST['nama_brg'];
    $stok = $_POST['stok'];

    mysqli_query($koneksi, "UPDATE barang SET kd_brg='$kd_brg','nama_brg='$nama_brg','stok='$stok',` WHERE kode='$kode'");
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
    <h3>Form Edit Data</h3>
    <?php 
    // koneksi db
    // ambil kode dari URL
    $kd_brg= $_REQUEST['kd_brg'];
    // jalankan query dengan where kode
    $data = mysqli_query($koneksi, "SELECT * FROM barang WHERE kode='$data_barang'");
    
    while ($row=mysqli_fetch_array($data)) {
        $kd_brg = $row['kd_brg'];
        $nama_brg = $row['nama_brg'];
        $stok = $row['stok'];
    }
    
    ?>
    <form action="edit.php" method="POST">

        <label for="">kd_brg</label> :
        <input type="text" name="kode" readonly value="<?php echo $kode ?>">

        <br>

        <label for="">nama_brg</label>:
        <input type="text" name="jurusan" value="<?php echo $nama_jurusan ?>">
        
        <br>

        <label for="">stok</label>:
        <input type="text" name="jurusan" value="<?php echo $nama_jurusan ?>">
        
        <br><br>

        <button type="submit" name="btn-update">Update Data</button>
    </form>
</body>
</html>