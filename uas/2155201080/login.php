<?php
include("function.php");
session_start();

if(isset ($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    //cek username
    if(mysqli_num_rows($result) === 1) {

        //cek password dari username yang diamsukan 
        $row = mysqli_fetch_assoc($result);
        if($row["password"] == "user123"  ){
            // buat session login dan username
            $_SESSION['sudah_login'] = $username;
            $_SESSION['username'] = "user";
            // alihkan ke halaman dashboard user
            header("location:user.php");
        }
        if($row["password"] == "admin123"  ){
            // buat session login dan username
            $_SESSION['sudah_login'] = $username;
            $_SESSION['username'] = "admin";
            // alihkan ke halaman dashboard user
            header("location:index.php");
        }
    }
    $error = true;
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
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="login" value="Login"></td>
            </tr>
        </table>

    </form>
</body>
</html>