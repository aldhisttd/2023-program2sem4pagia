<?php
include "login.php";
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