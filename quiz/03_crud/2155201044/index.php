<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku Perpustakaan</title>
</head>
<body>
    <h2>Daftar Buku Perpustakaan</h2>
    <a href="form.php"><button>Tambah Data</button></a>
    <table>
        <tr>
            <th>Nomor tagihan</th>
            <th>Tanggal</th>
            <th>Jenis Tagihan</th>
            <th>Nominal</th>
            <th>Bukti transfer

            </th>
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

        // Query untuk mengambil data pembayaran
        $sql = "SELECT * FROM tb_pembayaran";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nomor_tagihan"] . "</td>";
                echo "<td>" . $row["tanggal"] . "</td>";
                echo "<td>" . $row["jenis_tagihan"] . "</td>";
                echo "<td>" . $row["nominal"] . "</td>";
                echo "<td><img src='uploads/" . $row["bukti_transfer"] . "' alt='Bukti Transfer' style='width: 100px;'></td>";

                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Tidak ada data buku.</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
