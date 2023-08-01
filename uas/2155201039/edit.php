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
    // ambil id karyawan nya dari url varible
    $kode = $_REQUEST['kode'];
    // koneksi
    include "action/koneksi.php";
    // jalankan query select dengan condition 
    $q = mysqli_query($koneksi, "SELECT * FROM tb_data WHERE kode='$kode'");
    // simpan dalam format array
    $ary = mysqli_fetch_array($q);
    ?>
    <form action="action/ac_edit.php" method="POST" enctype="multipart/form-data">

        <table>
            <tr>
                <td>kode</td>
                <td>:</td>
                <td>
                    <input type="text" name="kode" value="<?php echo $ary['kode'] ?>">
                </td>
            </tr>
            <tr>
                <td>Tanggal Masuk</td>
                <td>:</td>
                <td>
                    <input type="date" name="tanggal_masuk" value="<?php echo $ary['tanggal_masuk'] ?>">
                </td>
            </tr>
            <tr>
                <td>Jenis</td>
                <td>:</td>
                <td>
                        <select input type="text" name="jenis" value="<?php echo $jenis ?>">
                            <option value="">Pilih Jenis</option>
                            <option value="office">Office</option>
                            <option value="gaming">Gaming</option>
                            <option value="content">Content</option>
                            <option value="creator">Creator</option>
                        </select>  
                </td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td>:</td>
                <td>
                    <input type="text" name="quantity" value="<?php echo $ary['quantity'] ?>">
                </td>
            </tr>
            <tr>
                <td>Spesifikasi</td>
                <td>:</td>
                <td>
                    <input type="text" name="spesifikasi" value="<?php echo $ary['spesifikasi'] ?>">
                </td>
            </tr>
            <tr>
                <td>file</td>
                <td>:</td>
                <td>
                    <input type="file" name="file">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <br><br>
                    <button type="submit">Update Data Laptop</button>
                </td>
            </tr>
        </table>

    </form>

</body>

</html>