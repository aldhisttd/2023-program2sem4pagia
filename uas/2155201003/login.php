<?php
session_start();

// Periksa apakah pengguna sudah login, jika ya, arahkan ke halaman dashboard
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

// Sisipkan file konfigurasi koneksi database
require_once "config.php";

// Proses login jika ada data yang dikirim dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mencari pengguna berdasarkan username
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        if (($user['role'] === "admin ganjil" || $user['role'] === "user ganjil") && $password === "admin ganjil") {
            
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $user['role'];
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Username atau password salah.";
        }
        
            } else {
                $error = "Username atau password salah.";
            }
    } else {
        $error = "Username atau password salah.";
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
</head>
<body>
    <h1>Silakan Login</h1>
    <?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    <form method="post" action="">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
    </form>
</body>
</html>
