<?php
session_start();


$koneksi = mysqli_connect("localhost","root","","user_db");

if (isset($_POST['btnlogin'])) {
    $userForm = $_POST['userform'];
    $passForm = $_POST['passform'];


    $login = mysqli_query($koneksi,"SELECT * FROM akun WHERE username='$userForm' and pass='$passForm'");
    $cek = mysqli_num_rows($login);

    if($cek > 0){
 
        $data = mysqli_fetch_assoc($login);
     
        if($data['username']=="admin"){
     
            $_SESSION['sudah_login'] = $userForm;
            $_SESSION['username'] = "admin";
            header("location:../role/admin.php");
     
        }elseif($data['username']=="user"){
            $_SESSION['sudah_login'] = $userForm;
            $_SESSION['username'] = "user";
            header("location:../role/user.php");
     
        }elseif($data['username']=="karyawan"){
            $_SESSION['sudah_login'] = $userForm;
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