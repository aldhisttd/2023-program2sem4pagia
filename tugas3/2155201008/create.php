<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="submit.php" method="POST" enctype="multipart/form-data">
    <table>
    <tr>
  <td>NIM</td>
    <td>:</td>
    <td> <input type="text" name="nim" required></td>
  </tr>  <br>
  
   <tr>
   <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama" required></td>
   </tr>
    
  <tr>
  <td>Alamat</td>
    <td>:</td>
    <td><input type="text" name="alamat" required></td>  <br>
  </tr>
   <tr>
   <td>Tanggal Lahir</td>
    <td>:</td>
    <td><input type="date" name="tgl_lahir" required></td><br>
   </tr>

  <tr>
  <td>Foto</td>
    <td>:</td>
    <td><input type="file" name="foto" required></td><br>
  </tr>

  <tr>
  <td><input type="submit" value="Submit"></td>
  </tr>

  </table>
  </form> 
</body>
</html>