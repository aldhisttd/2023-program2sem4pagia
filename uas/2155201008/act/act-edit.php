<?php 
$koneksi = mysqli_connect('localhost','root','','2155201008');

if(isset($_POST['btn-update'])){
    $sn = $_POST['sn'];
    $tanggal_rilis = $_POST['tanggal_rilis'];
    $jenis = $_POST['jenis'];
    $quantity = $_POST['quantity'];
    $spesifikasi = $_POST['spesifikasi'];
    $gambar = $_FILES['gambar'];

    $gambarDir = "../img/";
    $targetgambar = $gambarDir . basename($_FILES["gambar"]["name"]);
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetgambar);
    
    mysqli_query($koneksi, "UPDATE software SET tanggal_rilis='$tanggal_rilis', jenis='$jenis' , quantity='$quantity' , spesifikasi='$spesifikasi', gambar='$targetgambar'
     WHERE sn='$sn'");
    
}
    header("location:../role/admin.php");
