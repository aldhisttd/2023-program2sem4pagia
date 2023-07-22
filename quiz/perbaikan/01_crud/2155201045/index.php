<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>

<body>
    <ul>
    <li>
        <a href="index.php">Form Input</a>
    </li>
    <li>
        <a href="data.php">Data</a>
    </li>
</ul>

    <form action="action/ac_index.php" method="POST" enctype="multipart/form-data">

        <table>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td>
                    <input type="text" name="nim">
                </td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td>JURUSAN</td>
                <td>:</td>
                <td>
                        <select input type="text" name="jurusan" value="<?php echo $kategori ?>">
                            <option value="">Pilih Kategori</option>
                            <option value="Informatika">Informatika</option>
                            <option value="Industri">Industri</option>
                            <option value="Sipil">Sipil</option>
                        </select>  
                </td>
            </tr>
            <tr>
                <td>UMUR</td>
                <td>:</td>
                <td>
                    <input type="number" name="umur">
                </td>
            </tr>
            <tr>
                <td>PHOTO</td>
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
                    <button type="submit">Save your data
                    </button>
                </td>
            </tr>
        </table>

    </form>

</body>

</html>