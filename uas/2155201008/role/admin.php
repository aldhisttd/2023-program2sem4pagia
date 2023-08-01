<?php
session_start();

if (!isset($_SESSION['sudah_login'])) {
    header('location: ../admin.php');
    exit();
}

// Periksa peran pengguna
// Periksa peran pengguna
if ($_SESSION['username'] === 'admin') {
    // User adalah admin, lanjutkan ke halaman admin
    // ...
} elseif ($_SESSION['username'] === 'user') {
    // User adalah user, lanjutkan ke halaman user
    header('location: user.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <p>Login sbg :
        <?php echo $_SESSION['username'] ?>
    </p>
    <p><a href="../act/act-logout.php">Logout</a></p>
    <h1>Selamat Datang di Halaman Admin</h1>
    <button><a href="../buat.php">Tambah+</a></button>
    <form action="">
        <table>
            <thead>
                <tr>

                    <th>No</th>
                    <th>Nama Software</th>
                    <th>Tanggal Rilis</th>
                    <th>Jenis Software</th>
                    <th>Quantity</th>
                    <th>Spesifikasi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php
            $koneksi = mysqli_connect("localhost","root","","2155201008");
            $data = mysqli_query($koneksi, "SELECT * FROM software");
            $no = 1;

            while ($row = mysqli_fetch_array($data)) {
                ?>
                <tr align="center">
                    <td><?php echo $no ?></td>
                    <td width="200px"><?php echo $row['sn'] ?></td>
                    <td><?php echo $row['tanggal_rilis'] ?></td>
                    <td><?php echo $row['jenis'] ?></td>
                    <td><?php echo $row['quantity'] ?></td>
                    <td width="500px"><?php echo $row['spesifikasi'] ?></td>
                    <td>
                        <?php echo "<img src='../img/" . $row["gambar"] . "' style='width: 100px;'></td>"; ?>
                    </td>
                    <td>
                        <a href="../edit.php?sn=<?php echo $row['sn'] ?>">Edit</a>
                        <a href="../act/hapus.php?sn=<?php echo $row['sn'] ?>">Hapus</a>
                    </td>
                </tr>
                <?php
                $no++;
            }
            ?>
            </tbody>
        </table>
    </form>

</body>

</html>