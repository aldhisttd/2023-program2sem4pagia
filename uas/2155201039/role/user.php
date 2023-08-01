<?php 
session_start();

if (!isset($_SESSION['sudah_login'])) {
   
}

if ($_SESSION['username'] === 'user') {
} elseif ($_SESSION['username'] === 'admin') {
    header('location: admin.php');
    exit();
} 

header('location:../data_user.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman User</title>
</head>
<body>
    <p>Login sbg : <?php echo $_SESSION['username'] ?></p>
    <p><a href="../act/logout.php">Logout</a></p>
    <h1>Selamat Datang di Halaman User</h1>
</body>
</html>