<?php 
session_start();

if(!isset($_SESSION['sudah_login'])|| $_SESSION['sudah_login'] !== true){
    header('location:login.php');
}
if ($_SESSION['username'] !== 'karyawan') {
    header('location: admin.php');

    if ($_SESSION['username'] !== 'karyawan'){
        header('location: user.php');
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <p>Login sbg : <?php echo $_SESSION['username'] ?></p>
    <p><a href="logout.php">Logout</a></p>
    <h1>Selamat Datang di Halaman Karyawan</h1>
</body>
</html>