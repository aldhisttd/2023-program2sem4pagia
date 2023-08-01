<?php
$koneksi = mysqli_connect("localhost" , "root", "", "2155201008");

// Mengambil data dari form
if(isset($_POST['simpan'])){
    $sn = $_POST['sn'];
    $tanggal_rilis = $_POST['tanggal_rilis'];
    $jenis = $_POST['jenis'];
    $quantity = $_POST['quantity'];
    $spesifikasi = $_POST['spesifikasi'];
    $gambar = $_FILES['gambar']['name'];
    // Upload file gambar ke folder tertentu
    $gambarDir = "../img/";
    $targetgambar = $gambarDir . basename($_FILES["gambar"]["name"]);
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetgambar);
    
    
    
    // Query untuk menyimpan data buku ke table
    $sql = "INSERT INTO software (sn, tanggal_rilis, jenis, quantity, spesifikasi, gambar)
     VALUES ('$sn', '$tanggal_rilis', '$jenis', '$quantity', '$spesifikasi', '$gambar')";
    
    if ($koneksi->query($sql) === TRUE) {
        header("location:../role/admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
header("location:../role/admin.php");
 
$koneksi->close();
