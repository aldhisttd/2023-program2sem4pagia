<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>

<body>
    <?php include "component/menu.php" ?>
    <?php
    // ambil nomor tagihan nya dari url variable
    $kode = $_REQUEST['kode'];
    // koneksi
    include "action/koneksi.php";
    // jalankan query select dengan condition 
    $q = mysqli_query($koneksi, "SELECT * FROM kendaraan WHERE kode='$kode'");
    // simpan dalam format array
    $ary = mysqli_fetch_array($q);
    ?>
    <form action="action/ac_edit.php" method="POST" enctype="multipart/form-data">

        <table>
            <tr>
                <td>Kode</td>
                <td>:</td>
                <td>
                    <input type="text" name="kode" value="<?php echo $ary['kode'] ?>">
                </td>
            </tr>
            <tr>
                <td>Tanggal masuk</td>
                <td>:</td>
                <td>
                    <input type="date" name="tanggal_masuk" value="<?php echo $ary['tanggal_masuk'] ?>">
                </td>
            </tr>
            <tr>
                <td>Jenis kendaraan</td>
                <td>:</td>
                <td>
                    <select name="jenis_kendaraan" value="<?php echo $ary['jenis_kendaraan'] ?>">
                        <option value="SUV">SUV</option>
                        <option value="City Car">City Car</option>
                        <option value="Sedan">Sedan</option>
                    </select>        

                </td>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>
                    <input type="number" name="harga" value="<?php echo $ary['harga'] ?>">
                </td>
            </tr>
            <tr>
                <td>Photo</td>
                <td>:</td>
                <td>
                    <input type="file" name="photo">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <br><br>
                    <button type="submit">Update Data Kendaraan</button>
                </td>
            </tr>
        </table>

    </form>

</body>

</html>