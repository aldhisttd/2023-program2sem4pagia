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
    header('location: role/user.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>

<body>
    <?php
    // ambil id karyawan nya dari url varible
    $sn = $_REQUEST['sn'];
    // koneksi
    $koneksi= mysqli_connect("localhost","root","","2155201008");
    // jalankan query select dengan condition 
    $q = mysqli_query($koneksi, "SELECT * FROM software WHERE sn='$sn'");
    // simpan dalam format array
    $ary = mysqli_fetch_array($q);
    ?>
    <form action="act/act-edit.php" method="POST" enctype="multipart/form-data">

        <table>
            <tr>
                <td>Nama Software</td>
                <td>:</td>
                <td>
                    <input type="text" readonly name="sn" value="<?php echo $ary['sn'] ?>">
                </td>
            </tr>
            <tr>
                <td>Tanggal Rilis</td>
                <td>:</td>
                <td>
                    <input type="date" name="tanggal_rilis" value="<?php echo $ary['tanggal_rilis'] ?>">
                </td>
            </tr>
            <tr>
                <td>Jenis Software</td>
                <td>:</td>
                <td>
                        <select input type="text" name="jenis" value="<?php echo $jenis ?>">
                            <option value="">Pilih Jenis Software</option>
                            <option value="editing">Editing</option>
                            <option value="coding">Coding</option>
                            <option value="tools">Tools</option>
                        </select>  
                </td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td>:</td>
                <td>
                    <input type="number" name="quantity" value="<?php echo $ary['quantity'] ?>">
                </td>
            </tr>
            <tr>
                <td>Spesifikasi</td>
                <td>:</td>
                <td>
                    <input type="varchar" name="spesifikasi" value="<?php echo $ary['spesifikasi'] ?>">
                </td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>:</td>
                <td>
                    <input type="file" name="gambar">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <br><br>
                    <button type="submit" name="btn-update">Update Data Buku</button>
                </td>
            </tr>
        </table>

    </form>

</body>

</html>