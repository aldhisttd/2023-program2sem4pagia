<?php 
session_start();

if (!isset($_SESSION['sudah_login'])) {
    header('location: ../form.php');
    exit();
}

if ($_SESSION['username'] === 'admin') {
} elseif ($_SESSION['username'] === 'user') {
    header('location: user.php');
    exit();
} else {
    header('location: karyawan.php');
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
    <p><a href="../act/logout.php">Logout</a></p>
    <h1>Selamat Datang di Halaman Admin</h1>
    <p><a href="../crud/index.php">Tampilkan Tabel Sebagai Admin</a></p>
</body>
</html>