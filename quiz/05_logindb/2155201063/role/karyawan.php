<?php 
session_start();

if (!isset($_SESSION['sudah_login'])) {
    header('location: ../form.php');
    exit();
}

// Periksa peran pengguna
if ($_SESSION['username'] === 'karyawan') {
    // User adalah admin, lanjutkan ke halaman admin
    // ...
} elseif ($_SESSION['username'] === 'user') {
    // User adalah user, lanjutkan ke halaman user
    header('location: user.php');
    exit();
} else {
    // User bukan admin atau user yang valid
    header('location: admin.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Karyawan</title>
</head>
<body>
    <p>Login sbg : <?php echo $_SESSION['username'] ?></p>
    <h2 style="color:#1D267D">Selamat Datang di Halaman Karyawan</h2>
    <h2 style="color:#F79540">직원 페이지에 오신 것을 환영합니다</h2>
    <p><a href="../act/logout.php">Logout</a></p>
</body>
</html>