<!DOCTYPE html>
<html>
<head>
  <title>Form Input Karyawan</title>
  <style>
    .form-group {
      margin-bottom: 10px;
    }

    .form-group label {
      display: inline-block;
      width: 150px;
      font-weight: bold;
    }

    .form-group input[type="text"],
    .form-group textarea,
    .form-group input[type="date"],
    .form-group input[type="file"] {
      width: 300px;
    }
  </style>
</head>
<body>
  <h1>Form Input Karyawan</h1>

  <form action="koneksi.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="nama">ID Karyawan:</label>
      <input type="text" name="nama" required>
    </div>

    <div class="form-group">
      <label for="alamat">Nama Karyawan:</label>
      <textarea name="alamat" required></textarea>
    </div>

    <div class="form-group">
      <label for="tgl_lahir">Tanggal Lahir:</label>
      <input type="date" name="tgl_lahir" required>
    </div>

    <div class="form-group">
      <label for="photo">Photo:</label>
      <input type="file" name="photo" required accept="image/*">
    </div>

    <div class="form-group">
      <input type="submit" value="Submit">
    </div>
  </form>
</body>
</html>
