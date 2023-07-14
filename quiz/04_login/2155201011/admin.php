<?php 
session_start();

if (!isset($_SESSION['sudah_login']) || $_SESSION['sudah_login'] !== true) {
    header('location: login.php');
    exit();
}

// Periksa peran pengguna
if ($_SESSION['username'] !== 'admin') {
    header('location: user.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <p>Login sbg : <?php echo $_SESSION['username'] ?></p>
    <p><a href="logout.php">Logout</a></p>
    <h1>Welcome To Halaman Admin</h1>
</body>
</html>