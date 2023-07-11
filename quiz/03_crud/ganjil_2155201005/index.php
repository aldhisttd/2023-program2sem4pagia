<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku Perpustakaan</title>
</head>
<body>
    <h2>Daftar Buku Perpustakaan</h2>
    <a href="form.php"><button>Tambah Buku</button></a>

    <table>
        <tr>
            <th>ISBN</th>
            <th>Judul Buku</th>
            <th>Kategori</th>
            <th>Stok</th>
            <th>File Ebook</th>
        </tr>
        <?php
        // Koneksi ke database (contoh menggunakan mysqli)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_buku";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Query untuk mengambil data buku
        $sql = "SELECT * FROM tb_buku";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["isbn"] . "</td>";
                echo "<td>" . $row["judul"] . "</td>";
                echo "<td>" . $row["kategori"] . "</td>";
                echo "<td>" . $row["stok"] . "</td>";
                echo "<td><a href='uploads/" . $row["file_ebook"] . "'>Unduh</a></td>";
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