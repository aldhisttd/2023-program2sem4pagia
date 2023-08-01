<?php
session_start();

$koneksi = mysqli_connect("localhost","root","","db_login");

if (isset($_POST['btnlogin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = mysqli_query($koneksi,"SELECT * FROM tb_login WHERE username='$username' and password='$password'");
    $cek = mysqli_num_rows($login);

    if($cek > 0){
 
        $data = mysqli_fetch_assoc($login);
     
        if($data['username']=="admin"){
     
            $_SESSION['sudah_login'] = $username;
            $_SESSION['username'] = "admin";
            header("location:../role/admin.php");
     
        }elseif($data['username']=="user"){
            $_SESSION['sudah_login'] = $username;
            $_SESSION['username'] = "user";
            header("location:../role/user.php");
     
        }else{
            header("location:index.php?pesan=gagal");
        }	
    }else{
        header("location:index.php?pesan=gagal");
    }
}  
    ?>

