<?php

$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "tugas3pagia";
$dbport = 3307;

// Membuat koneksi ke database
$conn = mysqli_connect($servername,$username,$password,$dbname,$dbport);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}