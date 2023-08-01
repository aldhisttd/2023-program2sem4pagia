<?php
session_start();

if (isset($_POST['btnlogin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $valid_username = 'user';
    $valid_password = 'user123';

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['sudah_login_user'] = true;
        $_SESSION['username_user'] = $username;

        header('location: read_table_user.php');
        exit();
    } else {
        header('location: login_user.php?pesan=gagal');
        exit();
    }
} else {
    header('location: login_user.php');
    exit();
}
?>
