<!DOCTYPE html>
<html>
<head>
    <title>pembayaran</title>
</head>
<body>
    <h2>pembayaran</h2>
    <table>
        <tr>
            <th>nomor_tagihan</th>
            <th>tanggal</th>
            <th>jenis_tagihan</th>
            <th>nominal</th>
            <th>bukti_transfer</th>
        </tr>
        <?php
        // Koneksi ke database (contoh menggunakan mysqli)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_pembayaran";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Query untuk mengambil data buku
        $sql = "SELECT * FROM tb_pembayaran";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nomor_tagihan"] . "</td>";
                echo "<td>" . $row["tanggal"] . "</td>";
                echo "<td>" . $row["jenis_tagihan"] . "</td>";
                echo "<td>" . $row["nominal"] . "</td>";
                echo "<td><a href='uploads/" . $row["bukti_transfer"] . "'>Unduh</a></td>";
                echo "<td><img src='uploads/" . $row["bukti_transfer"] . "' alt='bukti_transfer' style='width: 100px;'></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Tidak ada data pembayaran.</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
