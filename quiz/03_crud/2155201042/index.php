<!DOCTYPE html>
<html>
<head>
    <title>Tabel Pembayaran</title>
</head>
<body>
    <h2>Input Buku Perpustakaan</h2>
    <form action="simpan.php" method="post" enctype="multipart/form-data">
        <label for="isbn">nomor_tagihan:</label><br>
        <input type="text" id="isbn" name="isbn" required><br><br>
        <label for="judul">tanggal:</label><br>
        <input type="text" id="judul" name="judul" required><br><br>
        <label for="kategori">jenis_tagihan:</label><br>
        <input type="text" id="kategori" name="kategori" required><br><br>
        <label for="stok">Nominal:</label><br>
        <input type="number" id="stok" name="stok" required><br><br>
        <label for="cover">Bukti_Transfer:</label><br>
        <input type="file" id="cover" name="cover" required><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
