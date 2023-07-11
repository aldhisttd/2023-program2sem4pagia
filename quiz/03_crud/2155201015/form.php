<!DOCTYPE html>
<html>
<head>
    <title>Input Buku Perpustakaan</title>
</head>
<body>
    <h2>Input Buku Perpustakaan</h2>
    <form action="simpan.php" method="post" enctype="multipart/form-data">
        <label for="isbn">ISBN:</label><br>
        <input type="text" id="isbn" name="isbn" required><br><br>
        <label for="judul">Judul Buku:</label><br>
        <input type="text" id="judul" name="judul" required><br><br>
        <label for="kategori">Kategori:</label><br>
        <input type="text" id="kategori" name="kategori" required><br><br>
        <label for="stok">Stok:</label><br>
        <input type="number" id="stok" name="stok" required><br><br>
        <label for="ebook">File Ebook:</label><br>
        <input type="file" id="ebook" name="ebook" required><br><br>
     <input type="submit" value="simpan">
    </form>
</body>
</html>
