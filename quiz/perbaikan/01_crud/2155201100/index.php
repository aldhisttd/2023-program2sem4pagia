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
                <td>Kode</td>
                <td>:</td>
                <td>
                    <input type="text" name="kode">
                </td>
            </tr>
            <tr>
                <td>Tanggal masuk</td>
                <td>:</td>
                <td>
                    <input type="date" name="tanggal_masuk">
                </td>
            </tr>
            <tr>
                <td>Jenis kendaraan</td>
                <td>:</td>
                <td>
                <select name="jenis_kendaraan" value="<?php echo $jenis_kendaraan ?>">
                        <option value="SUV">SUV</option>
                        <option value="City Car">City Car</option>
                        <option value="Sedan">Sedan</option>
                    </select>   
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>
                    <input type="number" name="harga">
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
                    <button type="submit">Simpan Data Kendaraan
                    </button>
                </td>
            </tr>
        </table>

    </form>

</body>

</html>