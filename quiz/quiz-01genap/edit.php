<?php 
$koneksi = mysqli_connect('localhost','root','','genap');

if(isset($_POST['btn-update'])){
    $id_karyawan = $_POST['id_karyawan'];
    $nama_karyawan = $_POST['nama_karyawan'];
    $tgl_lahir = $_POST['tgl_lahir'];

    mysqli_query($koneksi, "UPDATE karyawan SET nama_karyawan='$nama_karyawan', tgl_lahir='$tgl_lahir'
     WHERE id_karyawan='$id_karyawan'");
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
  
    <?php 
    // koneksi db
    // ambil id_karyawan dari URL
    $id_karyawan = $_REQUEST['id_karyawan'];
    // jalankan query dengan where id_karyawan
    $data = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE id_karyawan='$id_karyawan'");
    
    while ($row=mysqli_fetch_array($data)) {
        $nama_karyawan = $row['nama_karyawan'];
        $tgl_lahir = $row['tgl_lahir'];
    }
    
    ?>
      <h3>Form Edit Data</h3>
     <table>
    <form action="edit.php" method="POST">
       
        <tr>
            <td>ID Karyawan</td>
            <td>:</td>
            <td><input type="text" name="id_karyawan" readonly value="<?php echo $id_karyawan ?>"></td>
        </tr>
        <br>
        <tr>
            <td>Nama Karyawan</td>
            <td>:</td>
            <td><input type="text" name="nama_karyawan" value="<?php echo $nama_karyawan ?>"></td>
        </tr>
        <br>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tgl_lahir" value="<?php echo $tgl_lahir ?>"></td>
        </tr>
        <br>
        <tr>
            <td><button type="submit" name="btn-update">Update Data</button></td>
        </tr>   
        
    </form>
    </table>
</body>
</html>