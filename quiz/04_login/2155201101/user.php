<?php 
session_start();

if(!isset($_SESSION['sudah_login'])|| $_SESSION['sudah_login'] !== true){
    header('location:login.php');
}

if ($_SESSION['username'] !== 'user') {
    header('location: admin.php');

     if ($_SESSION['username'] !== 'admin'){
    header('location: karyawan.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman User</title>
</head>
<body>
    <p>Login sbg : <?php echo $_SESSION['username'] ?></p>
    <p><a href="logout.php">Logout</a></p>
    <h1>Selamat Datang di Halaman User</h1>
</body>
</html>