<?php
session_start();

if (isset($_POST['btnlogin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $valid_username = 'admin';
    $valid_password = 'admin123';

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['sudah_login'] = true;
        $_SESSION['username'] = $username;

        header('location: create_form.php');
        exit();
    } else {
        header('location: login_admin.php?pesan=gagal');
        exit();
    }
} else {
    header('location: login_admin.php');
    exit();
}
?>
