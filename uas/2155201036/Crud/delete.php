<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Sn = $_POST['Sn'];

    // Lakukan koneksi ke database
    $koneksi = mysqli_connect('localhost', 'root', '', 'Software');
    if (mysqli_connect_errno()) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    // Query untuk delete data dari tabel Software
    $query = "DELETE FROM Gambar WHERE Sn='$Sn'";

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
    $Sn = $_GET['Sn'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Gambar</title>
</head>
<body>
    <h1>Hapus Gambar</h1>
    <p>Apakah Anda yakin ingin menghapus data Gambar dengan Sn <?php echo $Sn; ?>?</p>
    <form action="delete.php" method="POST">
        <input type="hidden" name="Sn" value="<?php echo $Sn; ?>">
        <input type="submit" value="Hapus">
    </form>
</body>
</html>

<?php
}