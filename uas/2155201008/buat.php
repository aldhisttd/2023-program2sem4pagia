<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>

<body>

    <form action="action/simpan.php" method="POST" enctype="multipart/form-data">

        <table>
            <tr>
                <td>Nama Software</td>
                <td>:</td>
                <td>
                    <input type="text" name="sn">
                </td>
            </tr>
            <tr>
                <td>Tanggal Rilis</td>
                <td>:</td>
                <td>
                    <input type="date" name="tanggal_rilis">
                </td>
            </tr>
            <tr>
                <td>Jenis Software</td>
                <td>:</td>
                <td>
                        <select input type="text" name="kategori" value="<?php echo $jenis ?>">
                            <option value="">Pilih Kategori</option>
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
                    <input type="number" name="quantity">
                </td>
            </tr>
            <tr>
                <td>Spesifikasi</td>
                <td>:</td>
                <td>
                    <input type="text" name="spesifikasi">
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
                    <button type="submit" name="simpan">Simpan Data Buku
                    </button>
                </td>
            </tr>
        </table>

    </form>

</body>

</html>