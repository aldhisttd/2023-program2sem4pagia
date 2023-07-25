<?php
// Proses tambah data (CREATE)
if ($_POST['action'] == 'create') {
    $sn = $_POST['sn'];
    $tanggal_rilis = $_POST['tanggal_rilis'];
    $jenis = $_POST['jenis'];
    $quantity = $_POST['quantity'];
    $spesifikasi = $_POST['spesifikasi'];
    $gambar = $_FILES['gambar']['name'];

    // Lakukan koneksi ke database
    $koneksi = mysqli_connect('localhost', 'root', '', '2155201024');
    if (mysqli_connect_errno()) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    // Query untuk insert data ke tabel kendaraan
    $query = "INSERT INTO software (sn, tanggal_rilis, jenis, quantity, spesifikasi, gambar) 
              VALUES ('$sn', '$tanggal_rilis', '$jenis', '$quantity','$spesifikasi', '$gambar')";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        // Upload gambar ke folder uploads
        move_uploaded_file($_FILES['photo']['tmp_name'], "uploads/" . $_FILES['photo']['name']);
        header("Location: index.php"); // Redirect kembali ke halaman utama
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
?>