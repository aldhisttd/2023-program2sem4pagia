<?php
// Lakukan koneksi ke database
$koneksi = mysqli_connect('localhost', 'root', '', 'Software');
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Sn = $_POST['Sn'];
    $tanggal_rilis = $_POST['tanggal_rilis'];
    $jenis = $_POST['jenis'];
    $Quantity = $_POST['Quantity'];
    $Spesifikasi = $_POST['Spesifikasi'];
    $Gambar = $_FILES['Gambar']['name'];

    // Jika ada file foto baru di-upload, proses terlebih dahulu sebelum update data
    if ($_FILES['Gambar']['name'] !== '') {
        // Hapus foto lama dari server jika ada
        $query_get_Gambar = "SELECT Gambar FROM Software WHERE Sn='$Sn'";
        $result_get_Gambar = mysqli_query($koneksi, $query_get_Gambar);
        $row_get_Gambar = mysqli_fetch_assoc($result_get_Gambar);
        $old_Gambar_path = 'uploads/' . $row_get_photo['Gambar'];
        if (file_exists($old_Gambar_path)) {
            unlink($old_Gambar_path);
        }

        // Upload foto baru ke folder uploads
        $Gambar = $_FILES['Gambar']['name'];
        move_uploaded_file($_FILES['Gambar']['tmp_name'], "uploads/" . $_FILES['Gambar']['name']);

        // Query untuk update data termasuk foto
        $query = "UPDATE Software SET Sn='$Sn', Tanggal_rilis='$Tanggal_rilis', jenis='$jenis', Quantity=$Quantity, Gambar='$Gambar' WHERE Sn='$Sn'";
    } else {
        // Query untuk update data tanpa foto baru
        $query = "UPDATE Software SET Sn='$Sn', Tanggal_rilis='$Tanggal_rilis', jenis='$jenis', Quantity=$Quantity, Gambar='$Gambar' WHERE Sn='$Sn'";
    }

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php"); // Redirect kembali ke halaman utama
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
} else {
    // Jika akses bukan dari metode POST, ambil Sn Software dari URL parameter
    if (isset($_GET['Sn'])) {
        $Sn = $_GET['Sn'];

        // Query untuk mengambil data Software berdasarkan Sn
        $query = "SELECT * FROM Softwrae WHERE Sn='$sn'";
        $result = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($result);

        $Sn = $row['Sn'];
        $Tanggal_rilis = $row['Tanggal_rilis'];
        $jenis = $row['jenis'];
        $Quantity = $row['Quantity'];
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