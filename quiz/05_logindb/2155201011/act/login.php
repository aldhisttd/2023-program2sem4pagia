<?php
session_start();

$koneksi = mysqli_connect("localhost","root","","login_db");

if (isset($_POST['btnlogin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' and password='$password'");
    $cek = mysqli_num_rows($user);

    if($cek > 0){

        $data = mysqli_fetch_assoc($user);

        if($data['username']=="admin"){

            $_SESSION['sudah_login'] = $username;
            $_SESSION['username'] = "admin";
            header("location:../role/admin.php");

        }elseif($data['username']=="user"){
            $_SESSION['sudah_login'] = $username;
            $_SESSION['username'] = "user";
            header("location:../role/user.php");

        }elseif($data['username']=="karyawan"){
            $_SESSION['sudah_login'] = $username;
            $_SESSION['username'] = "karyawan";
            header("location:../role/karyawan.php");

        }else{
            header("location:index.php?pesan=gagal");
        }	
    }else{
        header("location:index.php?pesan=gagal");
    }
}  
    ?>