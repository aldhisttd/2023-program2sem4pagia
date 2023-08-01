<?php
session_start();

// Periksa apakah pengguna sudah login, jika belum, arahkan ke halaman login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Sisipkan file konfigurasi koneksi database
require_once "config.php";

// Fungsi untuk menghindari serangan SQL Injection
function sanitize_input($data)
{
    global $conn;
    return mysqli_real_escape_string($conn, $data);
}

// Fungsi untuk mendapatkan data dari tabel laptop
function get_laptop_data()
{
    global $conn;
    $sql = "SELECT * FROM laptop";
    $result = mysqli_query($conn, $sql);
    $laptop_data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $laptop_data[] = $row;
    }
    return $laptop_data;
}

// Fungsi untuk menambahkan data ke tabel laptop
function add_laptop_data($data)
{
    global $conn;
    $kode = sanitize_input($data['kode']);
    $tanggal_masuk = sanitize_input($data['tanggal_masuk']);
    $jenis = sanitize_input($data['jenis']);
    $quantity = sanitize_input($data['quantity']);
    $spesifikasi = sanitize_input($data['spesifikasi']);

    // Unggah gambar
    $gambar = '';
    if (isset($_FILES['gambar'])) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Periksa apakah file gambar adalah gambar asli atau palsu
        if (isset($_POST["add"])) {
            $check = getimagesize($_FILES["gambar"]["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }
        }
        // Periksa apakah file sudah ada
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        // Periksa ukuran file
        if ($_FILES["gambar"]["size"] > 500000) {
            $uploadOk = 0;
        }
        // Hanya izinkan beberapa ekstensi file gambar
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $uploadOk = 0;
        }
        // Jika tidak ada kesalahan, unggah gambar
        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                $gambar = $target_file;
            }
        }
    }

    $sql = "INSERT INTO laptop (kode, tanggal_masuk, jenis, quantity, spesifikasi, gambar) 
            VALUES ('$kode', '$tanggal_masuk', '$jenis', $quantity, '$spesifikasi', '$gambar')";

    return mysqli_query($conn, $sql);
}

// Fungsi untuk memperbarui data di tabel laptop
function update_laptop_data($data)
{
    global $conn;
    $kode = sanitize_input($data['kode']);
    $tanggal_masuk = sanitize_input($data['tanggal_masuk']);
    $jenis = sanitize_input($data['jenis']);
    $quantity = sanitize_input($data['quantity']);
    $spesifikasi = sanitize_input($data['spesifikasi']);

    // Periksa apakah ada file gambar baru yang diunggah
    if (isset($_FILES['gambar']) && $_FILES['gambar']['size'] > 0) {
        $gambar = '';
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["gambar"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        if ($_FILES["gambar"]["size"] > 500000) {
            $uploadOk = 0;
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $uploadOk = 0;
        }
        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                $gambar = $target_file;
            }
        }
        $sql = "UPDATE laptop SET tanggal_masuk = '$tanggal_masuk', jenis = '$jenis', quantity = $quantity, 
                spesifikasi = '$spesifikasi', gambar = '$gambar' WHERE kode = '$kode'";
    } else {
        $sql = "UPDATE laptop SET tanggal_masuk = '$tanggal_masuk', jenis = '$jenis', quantity = $quantity, 
                spesifikasi = '$spesifikasi' WHERE kode = '$kode'";
    }

    return mysqli_query($conn, $sql);
}

// Fungsi untuk menghapus data dari tabel laptop
function delete_laptop_data($kode)
{
    global $conn;
    $kode = sanitize_input($kode);

    $sql = "DELETE FROM laptop WHERE kode = '$kode'";
    return mysqli_query($conn, $sql);
}

// Periksa apakah pengguna memiliki role "admin ganjil" atau "user ganjil"
$is_admin = $_SESSION['role'] === "admin ganjil";
$is_user = $_SESSION['role'] === "user ganjil";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["add"])) {
        if (add_laptop_data($_POST)) {
            header("Location: dashboard.php");
            exit();
        }
    } elseif (isset($_POST["update"])) {
        if (update_laptop_data($_POST)) {
            header("Location: dashboard.php");
            exit();
        }
    } elseif (isset($_POST["delete"])) {
        $kode = $_POST['kode'];
        if (delete_laptop_data($kode)) {
            header("Location: dashboard.php");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h1>
    <a href="logout.php">Logout</a>

    <?php if ($is_admin) { ?>
        <h2>Tambah Data Laptop</h2>
        <form method="post" action="" enctype="multipart/form-data">
        <p> <input type="text" name="kode" placeholder="Kode" required></p>
        <p>    <input type="date" name="tanggal_masuk" required></p>
        <p> <select name="jenis" required></p>
                <option value="Office">Office</option>
                <option value="Gaming">Gaming</option>
                <option value="Content Creator">Content Creator</option>
            </select>
            <p>  <input type="number" name="quantity" placeholder="Quantity" required></p>
            <p>   <textarea name="spesifikasi" placeholder="Spesifikasi" required></textarea></p>
            <p>  <input type="file" name="gambar" required></p>
            <p> <input type="submit" name="add" value="Tambah"><p>
        </form>
    <?php } ?>

    <h2>Data Laptop</h2>
    <table border="1">
        <tr>
            <p><th>Kode</th></p>
            <p><th>Tanggal Masuk</th></p>
            <p><th>Jenis</th></p>
            <p><th>Quantity</th>/<p>
            <p> <th>Spesifikasi</th></p>
            <p><th>Gambar</th></p>
            <?php if ($is_admin) { ?>
                <th>Aksi</th>
            <?php } ?>
        </tr>
        <?php foreach (get_laptop_data() as $laptop) { ?>
            <tr>
                <p><td><?php echo $laptop['kode']; ?></td></p>
                <p><td><?php echo $laptop['tanggal_masuk']; ?></td></p>
                <td><?php echo $laptop['jenis']; ?></td>
                <td><?php echo $laptop['quantity']; ?></td>
                <td><?php echo $laptop['spesifikasi']; ?></td>
                <td><img src="<?php echo $laptop['gambar']; ?>" width="100"></td>
                <?php if ($is_admin) { ?>
                    <td>
                        <form method="post" action="">
                            <input type="hidden" name="kode" value="<?php echo $laptop['kode']; ?>">
                            <input type="submit" name="update" value="Edit">
                            <input type="submit" name="delete" value="Hapus">
                        </form>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
