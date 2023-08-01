<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel software (User)</title>
</head>
<body>
    <h1>Daftar software (User)</h1>
    <table>
        <thead>
            <tr>
                <th>SN</th>
                <th>Tanggal Rilis</th>
                <th>Jenis</th>
                <th>Quantity</th>
                <th>Spesifikasi</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $koneksi = mysqli_connect("localhost", "root", "", "2155201030"); 
            if (mysqli_connect_errno()) {
                die("Failed to connect to MySQL: " . mysqli_connect_error());
            }

            // Query untuk mengambil data software dari tabel software
            $query = "SELECT sn, tanggal_rilis, jenis, quantity, gambar FROM software";
            $result = mysqli_query($koneksi, $query);

            // Tampilkan data software ke dalam tabel
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['sn'] . "</td>";
                echo "<td>" . $row['tanggal_rilis'] . "</td>";
                echo "<td>" . $row['jenis'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "<td><img src='uploads/" . $row['gambar'] . "' width='100' height='150'></td>";
                echo "</tr>";
            }

            mysqli_close($koneksi);
            ?>
        </tbody>
    </table>
    <a href="logout_user.php">Logout</a>
</body>
</html>
