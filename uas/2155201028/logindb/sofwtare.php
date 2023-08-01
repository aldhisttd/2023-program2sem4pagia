<?php 
session_start();

if (!isset($_SESSION['sudah_login'])) {
    header('location: ../form.php');
    exit();
}

// Periksa peran pengguna
// Periksa peran pengguna
if ($_SESSION['username'] === 'software') {
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Software</title>
</head>
<body>
    <p>Login sbg : <?php echo $_SESSION['username'] ?></p>
    <p><a href="../logout.php">Logout</a></p>
    <h1>Selamat Datang di Halaman software</h1>
</body>
</html>