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
    $isbn = $_REQUEST['isbn'];
    // koneksi
    include "action/koneksi.php";
    // jalankan query select dengan condition 
    $q = mysqli_query($koneksi, "SELECT * FROM tb_buku WHERE isbn='$isbn'");
    // simpan dalam format array
    $ary = mysqli_fetch_array($q);
    ?>
    <form action="action/ac_edit.php" method="POST" enctype="multipart/form-data">

        <table>
            <tr>
                <td>ISBN</td>
                <td>:</td>
                <td>
                    <input type="text" name="isbn" value="<?php echo $ary['isbn'] ?>">
                </td>
            </tr>
            <tr>
                <td>Judul</td>
                <td>:</td>
                <td>
                    <input type="text" name="judul" value="<?php echo $ary['judul'] ?>">
                </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>:</td>
                <td>
                        <select input type="text" name="kategori" value="<?php echo $kategori ?>">
                            <option value="">Pilih Kategori</option>
                            <option value="novel">Novel</option>
                            <option value="komik">Komik</option>
                            <option value="kamus">Kamus</option>
                        </select>  
                </td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td>
                    <input type="text" name="stok" value="<?php echo $ary['stok'] ?>">
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
                    <button type="submit">Update Data Buku</button>
                </td>
            </tr>
        </table>

    </form>

</body>

</html>