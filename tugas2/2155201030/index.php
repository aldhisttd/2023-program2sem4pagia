<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Form</h1>

    <form action="proses.php" method="POST" enctype="multipart/form-data">

        <label for="">Nama</label> <br>
        <input type="text" name="nama">

        <br>

        <label for="">Alamat</label> <br>
        <textarea name="alamat" id="" cols="30" rows="3"></textarea>

        <br>

        <label for="">Tanggal Lahir</label> <br>
        <input type="date" name="tgl_lahir">

        <br>

        <label for="">Photo</label> <br>
        <input type="file" name="photo">

        <br><br>

        <button type="submit" name="btn_submit">Submit</button>


    </form>

</body>
</html>