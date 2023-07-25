<?php
// Lakukan koneksi ke database
$koneksi = mysqli_connect('localhost', 'root', '', '2155201024');
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sn = $_POST['sn'];
    $tanggal_rilis = $_POST['tanggal_rilis'];
    $jenis = $_POST['jenis'];
    $quantity = $_POST['quantity'];
    $spesifikasi = $_POST['spesifikasi'];
    $gambar = $_FILES['gambar']['name'];

    // Jika ada file foto baru di-upload, proses terlebih dahulu sebelum update data
    if ($_FILES['gambar']['name'] !== '') {
        // Hapus foto lama dari server jika ada
        $query_get_photo = "SELECT gambar FROM software WHERE sn='$sn'";
        $result_get_photo = mysqli_query($koneksi, $query_get_photo);
        $row_get_photo = mysqli_fetch_assoc($result_get_photo);
        $old_photo_path = 'uploads/' . $row_get_photo['gambar'];
        if (file_exists($old_photo_path)) {
            unlink($old_photo_path);
        }

        // Upload foto baru ke folder uploads
        $gambar = $_FILES['gambar']['name'];
        move_uploaded_file($_FILES['gambar']['tmp_name'], "uploads/" . $_FILES['gambar']['name']);

        // Query untuk update data termasuk foto
        $query = "UPDATE software SET sn='$sn', tanggal_rilis='$tanggal_rilis', jenis='$jenis', spesifikasi=$spesifikasi, gambar='$gambar' WHERE sn='$sn'";
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
    if (isset($_GET['sn'])) {
        $sn = $_GET['sn'];

        // Query untuk mengambil data software berdasarkan sn
        $query = "SELECT * FROM software WHERE sn='$sn'";
        $result = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($result);

        $sn = $row['sn'];
        $tanggal_rilis = $_POST['tanggal_rilis'];
        $jenis = $_POST['jenis'];
        $quantity = $_POST['quantity'];
        $spesifikasi = $_POST['spesifikasi'];
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
    <title>Edit Software</title>
</head>

<body>
    <h1>Edit Software</h1>
    <form action="update.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="sn" value="<?php echo $sn; ?>">

        <label for="sn">Sn :</label>
        <input type="text" name="sn" readonly value="<?php echo $sn; ?>" required><br>

        <label for="tanggal_rilis">Tanggal Rilis:</label>
        <input type="date" name="tanggal_rilis" value="<?php echo $tanggal_rilis; ?>" required><br>

        <label for="jenis">Jenis :</label>
        <select name="jenis" required>
            <option value="editing" <?php if ($jenis == "SUV") echo "selected"; ?>>Editing</option>
            <option value="coding" <?php if ($jenis == "City Car") echo "selected"; ?>>Coding</option>
            <option value="tools" <?php if ($jenis == "Sedan") echo "selected"; ?>>Tools</option>
        </select><br>

        <label for="quantity">Quantity :</label>
        <input type="number" name="quantity" value="<?php echo $quantity; ?>" required><br>

        <label for="spesifikasi">Spesifikasi :</label>
        <input type="text" name="spesifikasi" value="<?php echo $spesifikasi; ?>" required><br>

        <label for="gambar">Gambar :</label>
        <input type="file" name="gambar" accept="image/*"><br>

        <input type="submit" value="Simpan Perubahan">
    </form>
</body>

</html>