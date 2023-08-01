<?php
include ("function.php");

$mahasiswa = query("SELECT*FROM admin");
session_start();

if (!isset($_SESSION['sudah_login'])) {
    header('location: login.php');
    exit();
}
if ($_SESSION['username'] === 'user') {
}   else {
    header('location: admin.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data mahasiswa</title>
</head>
<body>
    <p>Login sbg : <?php echo $_SESSION['username'] ?></p>
    <p><a href="logout.php">Logout</a></p>
    <h1>Selamat Datang di Halaman Admin</h1>
    <h1>Data Software</h1>
    <a href="tambah.php">Tambah Data Software</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>sn</th>
            <th>Tanggal Rilis</th>
            <th>jenis</th>
            <th>Quantity</th>
            <th>Spesifikasi</th>
            <th>Gambar</th>
        </tr>
        <?php foreach( $mahasiswa as $row ) : ?>
        <tr>
            <td><?php echo $row["sn"] ?></td>
            <td><?php echo $row["tanggal_rilis"] ?></td>
            <td><?php echo $row["jenis"] ?></td>
            <td><?php echo $row["quantity"] ?></td>
            <td><?php echo $row["spesifikasi"] ?></td>
            <td><img src="img/<?php echo $row["gambar"] ?>" alt="" width="50px"></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>