

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" action="proses.php" enctype="multipart/form-data">

    <div class="form-group">
      <label for="nim">NIM:</label>
      <input type="text" name="nim" required>
    </div>

    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" name="nama" required>
    </div>
    <div class="form-group">
      <label for="alamat">Alamat:</label>
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