<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Software</title>
</head>
<body>
    <?php
    $koneksi = mysqli_connect("localhost", "root", "", "2155201030"); 
    if (mysqli_connect_errno()) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['sn'])) {
        $sn = $_GET['sn'];

        // Query untuk mengambil data software berdasarkan sn
        $query = "SELECT * FROM software WHERE sn = '$sn'";
        $result = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_assoc($result);

        // Tampilkan form untuk mengedit data software
        if ($data) {
            ?>
            <h1>Edit Software</h1>
            <form action="process_edit.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="sn" value="<?php echo $data['sn']; ?>">

                <label for="tanggal_rilis">Tanggal Rilis:</label>
                <input type="date" name="tanggal_rilis" value="<?php echo $data['tanggal_rilis']; ?>" required><br>

                <label for="jenis">Jenis:</label>
                <select name="jenis" required>
                    <option value="Editing" <?php if ($data['jenis'] === 'Editing') echo 'selected'; ?>>Editing</option>
                    <option value="Coding" <?php if ($data['jenis'] === 'Coding') echo 'selected'; ?>>Coding</option>
                    <option value="Tools" <?php if ($data['jenis'] === 'Tools') echo 'selected'; ?>>Tools</option>
                </select><br>

                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" value="<?php echo $data['quantity']; ?>" required><br>

                <label for="spesifikasi">Spesifikasi:</label>
                <input type="textarea" name="spesifikasi" value="<?php echo $data['spesifikasi']; ?>" required><br>

                <label for="gambar">Gambar:</label>
                <input type="file" name="gambar" accept="image/*"><br>

                <input type="submit" value="Simpan Perubahan">
            </form>
            <?php
        } else {
            echo "software tidak ditemukan.";
        }
    } else {
        echo "sn software tidak valid.";
    }

    mysqli_close($koneksi);
    ?>
</body>
</html>
