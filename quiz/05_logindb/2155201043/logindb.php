<?php

session_start();

if (isset($_SESSION['sedang_login'])) {
    header('location:admin.php');
}

if (isset($_POST['btn-login'])) {

    // proses form nya

    // ambil nilai username form
    $vusername = $_POST['username'];
    // ambil nilai password form
    $vpassword = $_POST['password'];

    //cek ke table, apakah user pass ada di DB table user
    $koneksi = mysqli_connect('localhost', 'root', '', '4pagia');
    $sql = "SELECT * FROM user WHERE username='$vusername' AND password='$vpassword'";

    $q = mysqli_query($koneksi, $sql);

    $rowCount = mysqli_num_rows($q);


    if ($rowCount == 1) {
        // jika benar buat sesi sudah login
        // ambil nama photo lama
        $querys = mysqli_query($koneksi, "SELECT role FROM user WHERE username='$userFrom'");
        $dt = mysqli_fetch_array($q);
        $role = $dt['role'];
        $_SESSION['role'] = $role;
        $_SESSION['sedang_login'] = 1;
        $_SESSION['username'] = $vusername;
        // pindah ke halaman admin
        header('location:' . $role . '.php');
    } else {
        //notif login salah
        echo "login salah";
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

    <form action="" method="POST">

        <table>
            <tr>
                <td>User Name</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="btn-login">Login</button>
                </td>
            </tr>
        </table>

    </form>

</body>

</html>


<?php

?>