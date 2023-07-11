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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <form action="login.php" method="POST">

        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="userform"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="passform"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="btnlogin" value="Login"></td>
            </tr>
        </table>

    </form>
</body>
</html>