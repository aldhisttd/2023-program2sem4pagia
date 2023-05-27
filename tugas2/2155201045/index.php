<html>
    <head>
        <title>Mahasiswa</title>
    </head>
    <body>
        <h3>Data Mahasiswa</h3>
<form action="proses.php" method="POST" enctype="multipart/form-data">
<table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="textarea" name="alamat"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tgl_lahir"></td>
            </tr>
            <tr>
                <td>Upload Foto</td>
                <td>:</td>
                <td><input type="file" name="foto" accept="images/*"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="spn" value="Simpan"></td>
            </tr>
        </table>
</form>
       
</body>
</html>