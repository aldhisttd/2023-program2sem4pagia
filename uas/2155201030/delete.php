<?php
$koneksi = mysqli_connect("localhost", "root", "", "2155201030"); 

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['sn'])) {
    $sn = $_GET['sn'];

    // Query untuk menghapus data software berdasarkan sn
    $query = "DELETE FROM software WHERE sn = '$sn'";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        header("Location: read_table.php"); // Redirect kembali ke halaman untuk menampilkan tabel software setelah berhasil hapus software
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
