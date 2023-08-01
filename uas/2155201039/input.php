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
                <td>kode</td>
                <td>:</td>
                <td>
                    <input type="text" name="kode">
                </td>
            </tr>
            <tr>
                <td>Tanggal Masuk</td>
                <td>:</td>
                <td>
                    <input type="date" name="tanggal_masuk">
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
                    <input type="text" name="quantity">
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
                <td>file</td>
                <td>:</td>
                <td>
                    <input type="file" name="file">
                </td>
            </tr>
            <tr>
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