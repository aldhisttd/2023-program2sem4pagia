<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sn = $_POST['sn'];

    // Lakukan koneksi ke database
    $koneksi = mysqli_connect('localhost', 'root', '', 'uas_genap');
    if (mysqli_connect_errno()) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    // Query untuk delete data dari tabel kendaraan
    $query = "DELETE FROM software WHERE sn='$sn'";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php"); // Redirect kembali ke halaman utama
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
} else {
    // Jika akses bukan dari metode POST, maka tampilkan konfirmasi untuk menghapus data
    $kode = $_GET['kode'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Software</title>
</head>
<body>
    <h1>Hapus Software</h1>
    <p>Apakah Anda yakin ingin menghapus data software dengan kode <?php echo $kode; ?>?</p>
    <form action="delete.php" method="POST">
        <input type="hidden" name="sn" value="<?php echo $kode; ?>">
        <input type="submit" value="Hapus">
    </form>
</body>
</html>

<?php
}
?>