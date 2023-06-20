<?php 
$connect = mysqli_connect('localhost','root','','data_genap');

if(isset($_POST['btn-update'])){
    $id_karyawan = $_POST['id_karyawan'];
    $nama_karyawan = $_POST['nama_karyawan'];
    $tgl_lahir = $_POST['tgl_lahir'];

    mysqli_query($connect, "UPDATE karyawan SET id_karyawan='$id_karyawan', nama_karyawan='$nama_karyawan', tgl_lahir='$tgl_lahir' WHERE id_karyawan='$id_karyawan'");
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
    $id_karyawan = $_REQUEST['id_karyawan'];
    // jalankan query dengan where kode
    $data = mysqli_query($connect, "SELECT * FROM karyawan WHERE id_karyawan='$id_karyawan'");
    
    while ($row=mysqli_fetch_array($data)) {
        $nama_karyawan = $row['nama_karyawan'];
        $tgl_lahir = $row['tgl_lahir'];
    }
    
    ?>
    <form action="edit.php" method="POST">

        <label for="">id_karyawan</label> :
        <input type="" name="id_karyawan" value="<?php echo $id_karyawan ?>">

        <br>

        <label for="">nama_karyawan</label> :
        <input type="" name="nama_karyawan" readonly value="<?php echo $nama_karyawan ?>">

        <br>

        <label for="">tgl_lahir</label>:
        <input type="text" name="tgl_lahir" value="<?php echo $tgl_lahir ?>">
        
        <br><br>

        <button type="submit" name="btn-update">Update Data</button>
    </form>
</body>
</html>