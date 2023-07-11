<?php 
$koneksi = mysqli_connect('localhost','root','','data_genap');

// Mengambil nilai dari form input
if(isset($_POST['btn-update'])){
    $id_karyawan = $_POST['id_karyawan'];
    $nama_karyawan = $_POST['nama_karyawan'];
    $tgl_lahir = $_POST['tgl_lahir'];

    $photo_name = $_FILES['photo']['name'];
    $photo_tmp = $_FILES['photo']['tmp_name'];

    // Pindahkan file foto ke direktori yang diinginkan
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($photo_name);
    move_uploaded_file($photo_tmp, $target_file);

    // Menyiapkan pernyataan SQL untuk menyimpan data
    $sql = "INSERT INTO karyawan (id_karyawan, nama_karyawan, tgl_lahir, photo) VALUES ('$id_karyawan', '$nama_karyawan', '$tgl_lahir', '$photo', '$target_file')";
    mysqli_query($koneksi, "UPDATE karyawan SET nama_karyawan='$nama_karyawan', tgl_lahir='$tgl_lahir', photo='$photo',  WHERE id_karyawan='$id_karyawan'");
    header("location:index.php");

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan ke database.";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fauziah Fitri</title>
</head>
<body>
    <h3>Form Edit Data</h3>
    <?php 
    // koneksi db
    // ambil id_karyawan dari URL
    $id_karyawan = $_REQUEST['id_karyawan'];
    // jalankan query dengan where id_karyawan
    $data = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE id_karyawan='$id_karyawan'");
    
    while ($row=mysqli_fetch_array($data)) {
        $nama_jurusan = $row['nama'];
        $tgl_lahir = $row['tgl_lahir'];
        $photo = $row['photo'];
    }
    
    ?>
    <form action="edit.php" method="POST">

        <label for="">id_karyawan</label> :
        <input type="text" name="id_karyawan" readonly value="<?php echo $id_karyawan ?>">

        <br>

        <label for="">nama_karyawan</label>:
        <input type="text" name="nama_karyawan" value="<?php echo $nama_karyawan ?>">

        <br>

        <label for="">tgl_lahir</label>:
        <input type="text" name="tgl_lahir" value="<?php echo $tgl_lahir ?>">
        
        <br>

        <label for="">photo</label>:
        <input type="text" name="photo" value="<?php echo $photo ?>">

        <br><br>

        <button type="submit" name="btn-update">Update Data</button>
    </form>
</body>
</html>