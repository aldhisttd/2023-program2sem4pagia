<?php 
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "2155201080");

function query ($query) {
    global $conn;
    $result = mysqli_query($conn , $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $sn = $data["sn"];
    $tanggal_rilis = $data["tanggal_rilis"];
    $jenis = $data["jenis"];
    $quantity = $data["quantity"];
    $spesifikasi = $data["spesifikasi"];
    $gambar = upload();
    if(!$gambar){
        return false;
    }

    $query="INSERT INTO admin VALUES('$sn', '$tanggal_rilis', '$jenis', '$quantity','$spesifikasi', '$gambar')";

    mysqli_query($conn , $query);
    
    return mysqli_affected_rows($conn);
}

function upload() {
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpname = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($tmpname,"img/".$namafile);
    return $namafile;
}

function edit($data){
    global $conn;
    $sn = $data["sn"];
    $tanggal_rilis = $data["tanggal_rilis"];
    $jenis = $data["jenis"];
    $quantity = $data["quantity"];
    $spesifikasi = $data["spesifikasi"];
    $gambarlama = $data['gambarlama'];
    if($_FILES['gambar']['error'] === 4){
        $gambar = $gambarlama;
    }else{
        $gambar = upload();
    }


    $query="UPDATE admin SET tanggal_rilis = '$tanggal_rilis', jenis = '$jenis', quantity = '$quantity', spesifikasi = '$spesifikasi', gambar = '$gambar' WHERE sn = '$sn'";

    mysqli_query($conn , $query);
    
    return mysqli_affected_rows($conn);
}

?>