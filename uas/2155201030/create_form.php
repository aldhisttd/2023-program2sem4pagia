<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Software Baru</title>
</head>
<body>
    <h1>Halaman Tambah Software Baru</h1>
    <form action="process_create.php" method="POST" enctype="multipart/form-data">
        <label for="sn">Sn:</label>
        <input type="text" name="sn" required><br>

        <label for="tanggal_rilis">Tanggal Rilis:</label>
        <input type="date" name="tanggal_rilis" required><br>

        <label for="jenis">Jenis:</label>
        <select name="jenis" required>
            <option value="Editing">Editing</option>
            <option value="Coding">Coding</option>
            <option value="Tools">Tools</option>
        </select><br>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" required><br>

        <label for="spesifikasi">Spesifikasi:</label>
        <input type="textarea" name="spesifikasi" required><br>

        <label for="gambar">Gambar:</label>
        <input type="file" name="gambar" accept="image/*" required><br>

        <input type="submit" value="Tambah Software">
    </form>
</body>
</html>
