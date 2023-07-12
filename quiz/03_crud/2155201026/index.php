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
        $dbname = "pembayarans";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Query untuk mengambil data pembayaran
        $sql = "SELECT * FROM pembayaran";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["Nomor_Tagihan"] . "</td>";
                echo "<td>" . $row["Tanggal"] . "</td>";
               echo "<td>" . $row["Jenis_Tagihan"] . "</td>";
                echo "<td>" . $row["Nominal"] . "</td>";
                echo "<td><img src='uploads/" . $row["Bukti_Transfer"] . "' alt='Bukti Transfer' style='width: 100px;'></td>";

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