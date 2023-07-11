<?php 
session_start();

if (!isset($_SESSION['sudah_login']) || $_SESSION['sudah_login'] !== true) {
    header('location: login.php');
    exit();
}

// Periksa peran pengguna
if ($_SESSION['username'] !== 'karyawan') {
<<<<<<< HEAD
    header('location: admin.php');
=======
    header('location: user.php');
>>>>>>> 042776ef48878af0cec018ec2831547a3560be8e
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Halaman Admin</title>
=======
    <title>Halaman Karyawan</title>
>>>>>>> 042776ef48878af0cec018ec2831547a3560be8e
</head>
<body>
    <p>Login sbg : <?php echo $_SESSION['username'] ?></p>
    <p><a href="logout.php">Logout</a></p>
<<<<<<< HEAD
    <h1>Welcome To Halaman Karyawan</h1>
=======
    <h1>Selamat Datang di Halaman Karyawan</h1>
>>>>>>> 042776ef48878af0cec018ec2831547a3560be8e
</body>
</html>