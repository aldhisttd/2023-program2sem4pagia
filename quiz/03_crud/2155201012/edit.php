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
    // ambil nomor tagihan nya dari url variable
    $nomor_tagihan = $_REQUEST['nomor_tagihan'];
    // koneksi
    include "action/koneksi.php";
    // jalankan query select dengan condition 
    $q = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE nomor_tagihan='$nomor_tagihan'");
    // simpan dalam format array
    $ary = mysqli_fetch_array($q);
    ?>
    <form action="action/ac_edit.php" method="POST" enctype="multipart/form-data">

        <table>
            <tr>
                <td>Nomor Tagihan</td>
                <td>:</td>
                <td>
                    <input readonly type="text" name="nomor_tagihan" value="<?php echo $ary['nomor_tagihan'] ?>">
                </td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td>
                    <input type="date" name="tanggal" value="<?php echo $ary['tanggal'] ?>">
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
            <tr>
                <td>Nominal</td>
                <td>:</td>
                <td>
                    <input type="text" name="nominal" value="<?php echo $ary['nominal'] ?>">
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
                    <button type="submit">Update Data Mahasiswa</button>
                </td>
            </tr>
        </table>

    </form>

</body>

</html>