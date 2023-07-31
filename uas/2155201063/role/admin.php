<?php 
session_start();

if (!isset($_SESSION['sudah_login'])) {
    header('location: ../form.php');
    exit();
}

// Periksa peran pengguna
// Periksa peran pengguna
if ($_SESSION['username'] === 'admin') {
    // User adalah admin, lanjutkan ke halaman admin
    // ...
} elseif ($_SESSION['username'] === 'user') {
    // User adalah user, lanjutkan ke halaman user
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
<body style="background-color:#C4D7B2;">
    <p>Login sbg : <?php echo $_SESSION['username'] ?></p>
    <h1 style="color:#1D267D">Selamat Datang di Halaman Admin</h1>
    <?php 
    include "../data.php";
    ?>
    <p><a href="../act/logout.php">Logout</a></p>
</body>
</html>