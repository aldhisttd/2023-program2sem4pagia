<?php
// Koneksi ke database (contoh menggunakan mysqli)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Database:tabel genab quiz 3";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form
$isbn = $_POST['Nomor tagihan'];
$judul = $_POST['tanggal'];
$kategori = $_POST['Jenis tagihan'];
$stok = $_POST['nominal'];
$cover = $_FILES['bukti Transfer']['name'];

// Upload file ebook ke folder tertentu
$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["ebook"]["name"]);
move_uploaded_file($_FILES["ebook"]["tmp_name"], $targetFile);
$coverTargetFile = $targetDir . basename($_FILES["cover"]["name"]);
move_uploaded_file($_FILES["cover"]["tmp_name"], $coverTargetFile);

// Query untuk menyimpan data buku ke database
$sql = "INSERT INTO tb_buku (isbn, judul, kategori, stok, file_ebook, cover) VALUES ('$isbn', '$judul', '$kategori', $stok, '$ebook', '$cover')";

if ($conn->query($sql) === TRUE) {
    echo "Data buku berhasil disimpan.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
