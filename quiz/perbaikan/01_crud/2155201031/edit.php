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
    $nim = $_REQUEST['nim'];
    // koneksi
    include "action/koneksi.php";
    // jalankan query select dengan condition 
    $q = mysqli_query($koneksi, "SELECT * FROM crud_tb WHERE nim='$nim'");
    // simpan dalam format array
    $ary = mysqli_fetch_array($q);
    ?>
    <form action="action/ac_edit.php" method="POST" enctype="multipart/form-data">

        <table>
            <tr>
                <td>Nim</td>
                <td>:</td>
                <td>
                    <input type="text" name="nim" value="<?php echo $ary['nim'] ?>">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" value="<?php echo $ary['nama'] ?>">
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                        <select input type="text" name="jurusan" value="<?php echo $ary['jurusan'] ?>">
                            <option value="">Pilih Kategori</option>
                            <option value="Informatika">Informatika</option>
                            <option value="Industri">Industri</option>
                            <option value="Sipil">Sipil</option>
                        </select>  
                </td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td>
                    <input type="number" name="umur" value="<?php echo $ary['umur'] ?>">
                </td>
            </tr>
            <tr>
                <td>Photo</td>
                <td>:</td>
                <td>
                    <input type="file" name="foto" value="<?php echo $ary['foto'] ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <br><br>
                    <button type="submit">Update</button>
                </td>
            </tr>
        </table>

    </form>

</body>

</html>