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

    <form action="action/ac_index.php" method="POST" enctype="multipart/form-data">

        <table>
            <tr>
                <td>KODE</td>
                <td>:</td>
                <td>
                    <input type="text" name="kode">
                </td>
            </tr>
            <tr>
                <td>TANGGAL </td>
                <td>:</td>
                <td>
                    <input type="date" name="tanggal">
                </td>
            </tr>
            <tr>
                <td>Jenis</td>
                <td>:</td>
                <td>
                        <select input type="text" name="jenis">
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
                    <input type="number" name="quantity">
                </td>
            </tr>
            <tr>
                <td>SPESIFIKASI</td>
                <td>:</td>
                <td>
                    <textarea name="spesifikasi"></textarea>
                </td>
            </tr>
            <tr>
                <td>GAMBAR</td>
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
                    <button type="submit">input
                    </button>
                </td>
            </tr>
        </table>

    </form>

</body>

</html>