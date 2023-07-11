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
                <td>Nomor Tagihan</td>
                <td>:</td>
                <td>
                    <input type="text" name="nomor_tagihan">
                </td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td>
                    <input type="date" name="tanggal">
                </td>
            </tr>
            <tr>
                <td>Jenis Tagihan</td>
                <td>:</td>
                <td>
                <select name="jenis_tagihan" value="<?php echo $jenis_tagihan ?>">
                        <option value="listrik">Listrik</option>
                        <option value="internet">Internet</option>
                        <option value="pajak">Pajak</option>
                    </select>   
                </td>
            </tr>
            <tr>
                <td>Nominal</td>
                <td>:</td>
                <td>
                    <input type="text" name="nominal">
                </td>
            </tr>
            <tr>
                <td>Bukti Transfer</td>
                <td>:</td>
                <td>
                    <input type="file" name="bukti_transfer">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <br><br>
                    <button type="submit">Simpan Data Karyawan
                    </button>
                </td>
            </tr>
        </table>

    </form>

</body>

</html>