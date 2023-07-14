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

    <form action="action/ac_index.php" method="POST" enctype="multipart/form-data">

        <table>
            <tr>
                <td>ISBN</td>
                <td>:</td>
                <td>
                    <input type="text" name="isbn">
                </td>
            </tr>
            <tr>
                <td>Judul</td>
                <td>:</td>
                <td>
                    <input type="text" name="judul">
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
                    <input type="text" name="stok">
                </td>
            </tr>
            <tr>
                <td>File</td>
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
                    <button type="submit">Simpan Data Buku
                    </button>
                </td>
            </tr>
        </table>

    </form>

</body>

</html>