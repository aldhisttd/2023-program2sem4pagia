<?php
// Proses tambah data (CREATE)
if ($_POST['action'] == 'create') {
    $Sn = $_POST['Sn'];
    $tanggal_rilis = $_POST['tanggal_rilis'];
    $jenis = $_POST['jenis'];
    $Quantity = $_POST['Quantity'];
    $Spesifikasi = $_POST['Spesifikasi'];
    $Gambar = $_FILES['Gambar']['name'];

    // Lakukan koneksi ke database
    $koneksi = mysqli_connect('localhost', 'root', '', 'Software');
    if (mysqli_connect_errno()) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    // Query untuk insert data ke tabel kendaraan
    $query = "INSERT INTO kendaraan (Sn, Tanggal_rilis, jenis , Quantity , Spesifikasi , Gambar) 
              VALUES (' $Sn', '$Tanggal_rilis', '$jenis', $Quantity, '$Spesifikasi' , '$Gambar')";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        // Upload gambar ke folder uploads
        move_uploaded_file($_FILES['Gambar']['tmp_name'], "uploads/" . $_FILES['Gambar']['name']);
        header("Location: index.php"); // Redirect kembali ke halaman utama
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
?>