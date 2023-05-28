<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses/proses.php" method="POST">
    <div class="form-group">
        <label >Nama</label>
        <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <input type="text" class="form-control" name="alamat">
    </div>
    <div class="form-group">
        <label>Tanggal lahir</label>
        <input type="date" class="form-control" name="Tanggal lahirk">
    </div>
    <div class="form-group">
        <p>Pilih File Gambar : <br/><input type='file' name='filegbr' id='Filegambar'></p>
    </div>
    <div class="form-group">
        <input type="submit" name="Submit" value="Upload" />
    </div>
</body>
</html>