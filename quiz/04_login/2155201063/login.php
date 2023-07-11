<?php
session_start();

if(isset($_SESSION['sudah_login'])){
    header('location:admin.php');
}

if(isset($_POST['btnlogin'])){
    
    $userForm = $_POST['userform'];
    $passForm = $_POST['passform'];

    $adminBenar = 'admin';
    $passadminBenar = 'admin123';
    
    $userBenar = 'user';
    $passuserBenar = 'user123';

    $karyawanBenar = 'karyawan';
    $passkaryawanBenar = 'karyawan123';

    // cek login
    if($userForm == $adminBenar && $passForm == $passadminBenar){
        // login
        $_SESSION['sudah_login'] = true;
        $_SESSION['username'] = $adminBenar;
        header('location:admin.php');
    }

    if($userForm == $userBenar && $passForm == $passuserBenar){
        // login
        $_SESSION['sudah_login'] = true;
        $_SESSION['username'] = $userBenar;
        header('location:user.php');
    }

    if($userForm == $karyawanBenar && $passForm == $passkaryawanBenar){
        // login
        $_SESSION['sudah_login'] = true;
        $_SESSION['username'] = $karyawanBenar;
        header('location:karyawan.php');
    }

}

?>

