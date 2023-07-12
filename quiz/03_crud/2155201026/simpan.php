<?php
// Koneksi ke database (contoh menggunakan mysqli)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pembayarans";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form
$nomor_tagihan = $_POST['nomor_tagihan'];
$tanggal = $_POST['tanggal'];
$jenis_tagihan = $_POST['jenis_tagihan'];
$nominal = $_POST['nominal'];
$bukti_transfer = $_FILES['bukti_transfer']['name'];

// Upload file bukti_transfer ke folder tertentu
$targetDir = "uploads/";
$bukti_transferTargetFile = $targetDir . basename($_FILES["bukti_transfer"]["name"]);
move_uploaded_file($_FILES["Bukti_Transfer"]["tmp_name"], $bukti_transferTargetFile);

// Query untuk menyimpan data pembayaran ke database
$sql = "INSERT INTO pembayaran (Nomor_Tagihan, Tanggal, Jenis_Tagihan, Nominal, Bukti_Transfer) VALUES ('$nomor_tagihan', '$tanggal', '$jenis_tagihan', $nominal, '$bukti_transfer')";

if ($conn->query($sql) === TRUE) {
    header("location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>