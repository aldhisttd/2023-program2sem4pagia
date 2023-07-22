<?php
// Lakukan koneksi ke database
$koneksi = mysqli_connect('localhost', 'root', '', 'data_kendaraan');
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode = $_POST['kode'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $jenis_kendaraan = $_POST['jenis_kendaraan'];
    $harga = $_POST['harga'];

    // Jika ada file foto baru di-upload, proses terlebih dahulu sebelum update data
    if ($_FILES['photo']['name'] !== '') {
        // Hapus foto lama dari server jika ada
        $query_get_photo = "SELECT photo FROM kendaraan WHERE kode='$kode'";
        $result_get_photo = mysqli_query($koneksi, $query_get_photo);
        $row_get_photo = mysqli_fetch_assoc($result_get_photo);
        $old_photo_path = 'uploads/' . $row_get_photo['photo'];
        if (file_exists($old_photo_path)) {
            unlink($old_photo_path);
        }

        // Upload foto baru ke folder uploads
        $photo = $_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'], "uploads/" . $_FILES['photo']['name']);

        // Query untuk update data termasuk foto
        $query = "UPDATE kendaraan SET kode='$kode', tanggal_masuk='$tanggal_masuk', jenis_kendaraan='$jenis_kendaraan', harga=$harga, photo='$photo' WHERE kode='$kode'";
    } else {
        // Query untuk update data tanpa foto baru
        $query = "UPDATE kendaraan SET kode='$kode', tanggal_masuk='$tanggal_masuk', jenis_kendaraan='$jenis_kendaraan', harga=$harga WHERE kode='$kode'";
    }

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php"); // Redirect kembali ke halaman utama
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
} else {
    // Jika akses bukan dari metode POST, ambil kode kendaraan dari URL parameter
    if (isset($_GET['kode'])) {
        $kode = $_GET['kode'];

        // Query untuk mengambil data kendaraan berdasarkan kode
        $query = "SELECT * FROM kendaraan WHERE kode='$kode'";
        $result = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($result);

        $kode = $row['kode'];
        $tanggal_masuk = $row['tanggal_masuk'];
        $jenis_kendaraan = $row['jenis_kendaraan'];
        $harga = $row['harga'];
    } else {
        // Jika parameter kode tidak ada, kembali ke halaman utama
        header("Location: index.php");
        exit();
    }
}

mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kendaraan</title>
</head>

<body>
    <h1>Edit Kendaraan</h1>
    <form action="update.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="kode" value="<?php echo $kode; ?>">

        <label for="kode">Kode Kendaraan :</label>
        <input type="text" name="kode" readonly value="<?php echo $kode; ?>" required><br>

        <label for="tanggal_masuk">Tanggal Masuk :</label>
        <input type="date" name="tanggal_masuk" value="<?php echo $tanggal_masuk; ?>" required><br>

        <label for="jenis_kendaraan">Jenis Kendaraan :</label>
        <select name="jenis_kendaraan" required>
            <option value="SUV" <?php if ($jenis_kendaraan == "SUV") echo "selected"; ?>>SUV</option>
            <option value="City Car" <?php if ($jenis_kendaraan == "City Car") echo "selected"; ?>>City Car</option>
            <option value="Sedan" <?php if ($jenis_kendaraan == "Sedan") echo "selected"; ?>>Sedan</option>
        </select><br>

        <label for="harga">Harga :</label>
        <input type="number" name="harga" value="<?php echo $harga; ?>" required><br>

        <label for="photo">Foto Kendaraan:</label>
        <input type="file" name="photo" accept="image/*"><br>

        <input type="submit" value="Simpan Perubahan">
    </form>
</body>

</html>