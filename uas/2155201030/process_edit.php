<?php
$koneksi = mysqli_connect("localhost", "root", "", "2155201030"); 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sn = $_POST['sn'];
    $tanggal_rilis = $_POST['tanggal_rilis'];
    $jenis = $_POST['jenis'];
    $quantity = $_POST['quantity'];
    $spesifikasi = $_POST['spesifikasi'];
    $gambar = $_FILES['gambar']['name'];

    // Query untuk update data software di tabel software
    $query = "UPDATE software SET judul_buku = '$tanggal_rilis', jenis = '$jenis', quantity = '$quantity', spesifikasi = '$spesifikasi'";

    // Cek apakah ada gambar yang diupload
    if (!empty($gambar)) {
        // Upload gambar ke folder "uploads"
        move_uploaded_file($_FILES['gambar']['tmp_name'], "uploads" . $_FILES['gambar']['name']);
        $query .= ", gambar = '$gambar'";
    }

    $query .= " WHERE sn = '$sn'";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        header("Location: read_table.php"); // Redirect kembali ke halaman untuk menampilkan tabel software setelah berhasil edit software
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
