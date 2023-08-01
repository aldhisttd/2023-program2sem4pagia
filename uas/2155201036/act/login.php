<?php
session_start();

// if (isset($_SESSION['sudah_login'])) {
//     header('location:admin.php');
//     exit(); // Keluar dari skrip setelah mengarahkan pengguna
// }

$koneksi = mysqli_connect("localhost","root","","user_db");

if (isset($_POST['btnlogin'])) {
    $userForm = $_POST['userform'];
    $passForm = $_POST['passform'];

    // $userBenar = 'user';
    // $passUserBenar = 'user123';

    // $adminBenar = 'admin';
    // $passAdminBenar = 'admin123';

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
    
        }	
    }else{
        header("location:index.php?pesan=gagal");
    }
}  
    ?>


    <!-- // cek login
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
    }
    else {
        // Kombinasi username dan password tidak valid
        echo "Username atau password tidak valid.";
    }
}
?> -->
