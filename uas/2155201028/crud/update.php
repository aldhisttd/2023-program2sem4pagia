<?php
// Lakukan koneksi ke database
$koneksi = mysqli_connect('localhost', 'root', '', 'uas_genap');
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sn = $_POST['sn'];
    $tanggal_rilis = $_POST['tanggal_rilis'];
    $jenis = $_POST['jenis'];
    $quantity = $_POST['quantity'];
    $spesifikasi = $_POST['spesifikasi'];
    $photo = $_POST['photo'];

    // Jika ada file foto baru di-upload, proses terlebih dahulu sebelum update data
    if ($_FILES['photo']['name'] !== '') {
        // Hapus foto lama dari server jika ada
        $query_get_photo = "SELECT photo FROM software WHERE sn='$sn'";
        $result_get_photo = mysqli_query($koneksi, $query_get_photo);
        $row_get_photo = mysqli_fetch_assoc($result_get_photo);
        $old_photo_path = 'uploads/' . $row_get_photo['photo'];
        if (file_exists($old_photo_path)) {
            unlink($old_photo_path);
        }

        // Upload foto baru ke folder uploads
        $gambar = $_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'], "uploads/" . $_FILES['photo']['name']);

        // Query untuk update data termasuk foto
        $query = "UPDATE software SET tanggal_rilis='$tanggal_rilis', jenis='$jenis', quantity='$quantity', spesifikasi='$spesifikasi', photo='$photo' WHERE sn='$sn'";
    } else {
        // Query untuk update data tanpa foto baru
        $query = "UPDATE software SET tanggal='$tanggal', jenis='$jenis', quantity='$quantity', spesifikasi='$spesifikasi' WHERE kode='$kode'";
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

        // Query untuk mengambil data kendaraan berdasarkan kode
        $query = "SELECT * FROM software WHERE sn='$sn'";
        $result = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($result);

        $tanggal_rilis = $row['tanggal_rilis'];
        $jenis = $row['jenis'];
        $quantity = $row['quantity'];
        $spesifikasi = $row['spesifikasi'];
        $photo = $row['photo'];

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

        <label for="tanggal_rilis">Tanggal Rilis:</label>
        <input type="date" name="tanggal_rilis" value="<?php echo $tanggal_rilis; ?>" required><br>

        <label for="jenis">Jenis:</label>
        <select name="jenis" required>
            <option value="Editing" <?php if ($jenis == "Editing") echo "selected"; ?>>Editing</option>
            <option value="Coding" <?php if ($jenis == "Coding") echo "selected"; ?>>Coding</option>
            <option value="Tools" <?php if ($jenis == "Tools") echo "selected"; ?>>Tools</option>
        </select><br>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" value="<?php echo $quantity; ?>" required><br>

        <label for="spesifikasi">Spesifikasi:</label>
        <input type="text" name="spesifikasi" value="<?php echo $spesifikasi; ?>" required><br>


        <label for="photo">Phoso:</label>
        <input type="file" name="photo" accept="image/*"><br>

        <input type="submit" value="Simpan Perubahan">
    </form>
</body>

</html>