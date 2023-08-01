<?php
session_start();


$koneksi = mysqli_connect("localhost","root","","2155201008");

if (isset($_POST['btnlogin'])) {
    $userForm = $_POST['userform'];
    $passForm = $_POST['passform'];


    $login = mysqli_query($koneksi,"SELECT * FROM akun WHERE username='$userForm' and password='$passForm'");
    $cek = mysqli_num_rows($login);

    if($cek > 0){
 
        $data = mysqli_fetch_assoc($login);
     
        // cek jika user login sebagai admin
        if($data['username']=="admin"){
     
            // buat session login dan username
            $_SESSION['sudah_login'] = $userForm;
            $_SESSION['username'] = "admin";
            // alihkan ke halaman dashboard admin
            header("location:../role/admin.php");
     
        // cek jika user login sebagai user
        }elseif($data['username']=="user"){
            // buat session login dan username
            $_SESSION['sudah_login'] = $userForm;
            $_SESSION['username'] = "user";
            // alihkan ke halaman dashboard user
            header("location:../role/user.php");
     
        // cek jika user login sebagai karyawan
        }
    }else{
        header("location:form.php?pesan=gagal");
    }
}  