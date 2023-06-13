<?php 
$koneksi = mysqli_connect('127.0.0.1','root','root','4pagia','3307');

if(isset($_POST['btn-update'])){
    $kode = $_POST['kode'];
    $namaJurusan = $_POST['jurusan'];

    mysqli_query($koneksi, "UPDATE jurusan SET nama='$namaJurusan' WHERE kode='$kode'");
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
    $kode = $_REQUEST['kode'];
    // jalankan query dengan where kode
    $data = mysqli_query($koneksi, "SELECT * FROM jurusan WHERE kode='$kode'");
    
    while ($row=mysqli_fetch_array($data)) {
        $nama_jurusan = $row['nama'];
    }
    
    ?>
    <form action="edit.php" method="POST">

        <label for="">Kode</label> :
        <input type="text" name="kode" readonly value="<?php echo $kode ?>">

        <br>

        <label for="">Nama Jurusan</label>:
        <input type="text" name="jurusan" value="<?php echo $nama_jurusan ?>">
        
        <br><br>

        <button type="submit" name="btn-update">Update Data</button>
    </form>
</body>
</html>