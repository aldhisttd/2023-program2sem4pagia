<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "2155201030"); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sn = $_POST['sn'];
    $tanggal_rilis = $_POST['tanggal_rilis'];
    $jenis = $_POST['jenis'];
    $quantity = $_POST['quantity'];
    $spesifikasi = $_POST['spesifikasi'];
    $gambar = $_FILES['gambar']['name'];

    // Query untuk insert data software ke tabel software
    $query = "INSERT INTO software (sn, tanggal_rilis, jenis, quantity, spesifikasi, gambar) 
              VALUES ('$sn', '$tanggal_rilis', '$jenis', $quantity, '$spesifikasi', '$gambar')";
    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        // Upload file software dan gambar ke folder "uploads"
        move_uploaded_file($_FILES['gambar']['tmp_name'], "uploads/" . $_FILES['gambar']['name']);

        header("Location: read_table.php"); // Redirect kembali ke halaman untuk menampilkan tabel software setelah berhasil tambah software
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
