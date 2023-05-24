<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 2 Agung Syahputra</title>
</head>
<body>
    <h3>Form Data Mahasiswa</h1> 
    <form action="proses.php" method="POST" enctype="multipart/form-data">
            <label for="">Nama</label>
            <input name="input_nama" type="text"><br>
            <br>
            <label for="">Tanggal Lahir</label>
            <input name="input_tgl_lahir" type="date"><br>
            <br>
            <textarea name="input_alamat_rumah" rows="5" cols="40" placeholder="Masukkan Alamat" type="placeholder"></textarea><br>
            <p>Pilih File Gambar : <br/><input type="file" name="foto" required accept="images/"></p>
        <button type="submit" name="tombol_submit">Submit</button>
    </form>
     
    
</body>
</html>