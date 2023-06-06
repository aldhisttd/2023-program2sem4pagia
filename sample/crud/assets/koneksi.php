<?php

$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "kelas_pagi_a_2020";
$dbport = 3307;

// Membuat koneksi ke database
$conn = mysqli_connect($servername,$username,$password,$dbname,$dbport);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}