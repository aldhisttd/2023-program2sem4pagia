<?php
// Mengambil nilai dari form input
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tgl_lahir = $_POST['tgl_lahir'];
$nim = $_POST['nim'];

$photo_name = $_FILES['photo']['name'];
$photo_tmp = $_FILES['photo']['tmp_name'];

// Pindahkan file foto ke direktori yang diinginkan
$target_dir = "uploads/";
$target_file = $target_dir . basename($photo_name);
move_uploaded_file($photo_tmp, $target_file);

// Menyimpan data ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_form_mahasiswa";

// Konfigurasi koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_form_mahasiswa";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

// Menyiapkan pernyataan SQL untuk menyimpan data
$sql = "INSERT INTO mahasiswa (nama, alamat, tgl_lahir, nim, photo) VALUES ('$nama', '$alamat', '$tgl_lahir', '$nim', '$target_file')";

if ($conn->query($sql) === TRUE) {
  echo "Data berhasil disimpan ke database.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Mengambil data dari tabel mahasiswa
$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);

// Menampilkan data
if ($result->num_rows > 0) {
    echo "<h1>Data Mahasiswa</h1>";
    echo "<table style='border-collapse: collapse;'>";
    echo "<tr><th>No.</th><th>Nama</th><th>Alamat</th><th>Tanggal Lahir</th><th>NIM</th><th>Foto</th></tr>";
    $counter = 1;
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td style='border: 1px solid black; padding: 5px;'>" . $counter . "</td>";
        echo "<td style='border: 1px solid black; padding: 5px;'>" . $row["nama"] . "</td>";
        echo "<td style='border: 1px solid black; padding: 5px;'>" . $row["alamat"] . "</td>";
        echo "<td style='border: 1px solid black; padding: 5px;'>" . $row["tgl_lahir"] . "</td>";
        echo "<td style='border: 1px solid black; padding: 5px;'>" . $row["nim"] . "</td>";
        echo "<td style='border: 1px solid black; padding: 5px;'><img src='" . $row["photo"] . "' alt='Photo Mahasiswa' width='150'></td>";
        echo "</tr>";
        $counter++;
    }
    echo "</table>";
} else {
    echo "Tidak ada data mahasiswa.";
}

// Menutup koneksi
$conn->close();
?>
