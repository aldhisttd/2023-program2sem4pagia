<!DOCTYPE html>
<html>
<head>
  <title>Form Input Mahasiswa</title>
</head>
<body>
  <h1>Form Input Mahasiswa</h1>

  <form action="hasil.php" method="post" enctype="multipart/form-data">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" required>

    <br>

    <label for="alamat">Alamat:</label>
    <textarea name="alamat" required></textarea>

    <br>

    <label for="tgl_lahir">Tanggal Lahir:</label>
    <input type="date" name="tgl_lahir" required>

    <br>

    <label for="photo">Photo:</label>
    <input type="file" name="photo" required accept="image/*">

    <br>

    <input type="submit" value="Submit">
  </form>
</body>
</html>