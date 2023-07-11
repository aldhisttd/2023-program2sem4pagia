<?php
// Koneksi ke database (contoh menggunakan mysqli)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pembayaran";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form
$isbn = $_POST['nomor_tagihan'];
$judul = $_POST['tanggal'];
$kategori = $_POST['jenis_tagihan'];
$stok = $_POST['nominal'];
$bukti_transfer = $_FILES['bukti_transfer']['name'];

// Upload file bukti_transfer ke folder tertentu
$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["bukti_transfer"]["name"]);
move_uploaded_file($_FILES["bukti_transfer"]["tmp_name"], $targetFile);

// Query untuk menyimpan data bukti_transfer ke database
$sql = "INSERT INTO tb_pembayaran (nomor_tagihan, tanggal, jenis_tagihan, nominal, bukti_pembayaran) VALUES ('$nomor_tagihan', '$tanggal', '$jenis_tagihan', $nomianl, '$bukti_transfer')";

if ($conn->query($sql) === TRUE) {
    echo "Data bukti_tramsfer berhasil disimpan.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>