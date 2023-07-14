<?php
session_start();

if (isset($_SESSION['sudah_login'])) {
    header('location:admin.php');
    exit(); // Keluar dari skrip setelah mengarahkan pengguna
}

if (isset($_POST['btnlogin'])) {
    $userForm = $_POST['userform'];
    $passForm = $_POST['passform'];

    $userBenar = 'user';
    $passUserBenar = 'user123';

    $adminBenar = 'admin';
    $passAdminBenar = 'admin123';

    $karyawanBenar = 'karyawan';
    $passkaryawanBenar = 'karyawan123';

<<<<<<< HEAD
=======

>>>>>>> 042776ef48878af0cec018ec2831547a3560be8e
    // cek login
    if ($userForm == $userBenar && $passForm == $passUserBenar) {
        // login sebagai user
        $_SESSION['sudah_login'] = true;
        $_SESSION['username'] = $userBenar;
        header('location:user.php');
        exit(); // Keluar dari skrip setelah mengarahkan pengguna
    } elseif ($userForm == $adminBenar && $passForm == $passAdminBenar) {
        // login sebagai admin
        $_SESSION['sudah_login'] = true;
        $_SESSION['username'] = $adminBenar;
        header('location:admin.php');
        exit(); // Keluar dari skrip setelah mengarahkan pengguna
    } elseif ($userForm == $karyawanBenar && $passForm == $passkaryawanBenar) {
<<<<<<< HEAD
        // login sebagai admin
=======
        // login sebagai karyawan
>>>>>>> 042776ef48878af0cec018ec2831547a3560be8e
        $_SESSION['sudah_login'] = true;
        $_SESSION['username'] = $karyawanBenar;
        header('location:karyawan.php');
        exit(); // Keluar dari skrip setelah mengarahkan pengguna
<<<<<<< HEAD
    } 
     else {
=======
    } else {
>>>>>>> 042776ef48878af0cec018ec2831547a3560be8e
        // Kombinasi username dan password tidak valid
        echo "Username atau password tidak valid.";
    }
}
?>
