<?php 
session_start();

if (!isset($_SESSION['sudah_login'])) {
    header('location: ../form.php');
    exit();
}

// Periksa peran pengguna
// Periksa peran pengguna
if ($_SESSION['userForm'] === 'admin') {
    // User adalah admin, lanjutkan ke halaman admin
    // ...
} elseif ($_SESSION['userForm'] === 'user') {
    // User adalah user, lanjutkan ke halaman user
    header('location: user.php');
    exit();
} else {
    // User bukan admin atau user yang valid
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
    <p>Login sbg : <?php echo $_SESSION['userForm'] ?></p>
    <p><a href="../act/logout.php">Logout</a></p>
    <h1>Selamat Datang di Halaman Admin</h1>
</body>
</html>