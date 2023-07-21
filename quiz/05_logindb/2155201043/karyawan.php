<?php
session_start();
// jika belum login, redirect ke halaman login
if (!isset($_SESSION['sedang_login'])) {
    header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman karyawan</title>
</head>

<body>
    <h1>Selamat Datang, <?= $_SESSION['username'] ?> !</h1>

    <a href="logout.php">Logout</a>

    <h3>Ini halaman <?= $_SESSION['role'] ?>.</h3>
</body>

</html>