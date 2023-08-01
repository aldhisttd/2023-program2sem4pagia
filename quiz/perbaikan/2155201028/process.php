<?php
// Proses tambah data (CREATE)
if ($_POST['action'] == 'create') {
    $kode = $_POST['kode'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $jenis_kendaraan = $_POST['jenis_kendaraan'];
    $harga = $_POST['harga'];
    $photo = $_FILES['photo']['name'];

    // Lakukan koneksi ke database
    $koneksi = mysqli_connect('localhost', 'root', '', 'genap11');
    if (mysqli_connect_errno()) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    // Query untuk insert data ke tabel kendaraan
    $query = "INSERT INTO kendaraan (kode, tanggal_masuk, jenis_kendaraan, harga, photo) 
              VALUES ('$kode', '$tanggal_masuk', '$jenis_kendaraan', $harga, '$photo')";

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