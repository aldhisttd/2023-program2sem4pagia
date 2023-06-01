<!DOCTYPE html>
<html>
<head>
  <title>TUGAS CREATE AND READ YOLANDA</title>
</head>
<body>
  <h1>Form Input Mahasiswa</h1>
  <form action="" method="post" enctype="multipart/form-data">
    <table>
    <tr>
        <td>Nim</td>    
        <td>:</td>
        <td><label for="nim"></label><input type="number" name="nim" required></td>
    </tr>

    <tr>
        <td>Nama</td>    
        <td>:</td>
        <td><label for="nama"></label><input type="text" name="nama" required></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>    
        <td>:</td>
        <td><label for="tgl_lahir"></label><input type="date" name="tgl_lahir" required></td>
    </tr>
    <tr>
        <td>Alamat</td>    
        <td>:</td>
        <td><textarea name="alamat" rows="5" cols="40" placeholder="Kamu tinngal dimana?" type="placeholder"></textarea></td>
    </tr>
    <tr>
            <td><p>Pilih foto</p></td>
            <td><p>:</p></td>
            
            <td><input type="file" name="photo" /></td>
        </tr>
    </table>
    <input type="submit" value="Submit" name="submit">
  </form>
</body>
</html>