<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAHASISWA</title>
</head>
<body>
    <form action="proses.php"method="post"entype="multipart/from-data">
<table>
    <tr>
        <td>nama</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>alamat</td>
        <td>:</td>
        <td><input type="text" name="alamat"></td>
    </tr>
    <tr>
        <td>tanggal lahir</td>
        <td>:</td>
        <td><input type="text" name=tanggal_lahir></td>
    </tr>
    <tr>
        <td>upload foto</td>
        <td>:</td>
        <td><input type="file" name="foto" accept="images/*"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="spn" value="submit"></td>
    </tr>
</table>
    </form>
    
</body>
</html>