<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>

<body>
    <?php include "menu.php" ?>
    <?php include "admin.php" ?>
    <?php
    // ambil id karyawan nya dari url varible
    $kode = $_REQUEST['kode'];
    // koneksi
    include "action/koneksi.php";
    // jalankan query select dengan condition 
    $q = mysqli_query($koneksi, "SELECT * FROM uas_crud WHERE kode='$kode'");
    // simpan dalam format array
    $ary = mysqli_fetch_array($q);
    ?>
    <form action="action/ac_edit.php" method="POST" enctype="multipart/form-data">

        <table>
            <tr>
                <td>KODE</td>
                <td>:</td>
                <td>
                    <input type="text" name="kode" value="<?php echo $ary['kode'] ?>">
                </td>
            </tr>
            <tr>
                <td>TANGGAL MASUK</td>
                <td>:</td>
                <td>
                    <input type="date" name="tanggal" value="<?php echo $ary['tanggal_masuk'] ?>">
                </td>
            </tr>
            <tr>
                <td>Jenis</td>
                <td>:</td>
                <td>
                        <select input type="text" name="jenis" value="<?php echo $ary['jenis'] ?>">
                            <option value="">Select Option</option>
                            <option value="Office">Office</option>
                            <option value="Gaming">Gaming</option>
                            <option value="Content Creator">Content Creator</option>
                        </select>  
                </td>
            </tr>
            <tr>
                <td>QUANTITY</td>
                <td>:</td>
                <td>
                    <input type="number" name="quantity" value="<?php echo $ary['quantity'] ?>">
                </td>
            </tr>
            <tr>
                <td>SPESIFIKASI</td>
                <td>:</td>
                <td>
                    <input type="textarea" name="spek" value="<?php echo $ary['spesifikasi'] ?>">
                </td>
            </tr>
            <tr>
                <td>GAMBAR</td>
                <td>:</td>
                <td>
                    <input type="file" name="photo" value="<?php echo $ary['gambar'] ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <br><br>
                    <button type="submit">Update
                    </button>
                </td>
            </tr>
        </table>

    </form>

</body>

</html>