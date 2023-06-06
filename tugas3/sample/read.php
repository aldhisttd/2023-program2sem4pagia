<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tgl Lahir</th>
                <th>Photo</th>
            </tr>
        </thead>

        <tbody>
            

            <?php

                $data = $conn->query("SELECT * FROM mahasiswa");
                
                while($dt = mysqli_fetch_array($data)){
                    //ini area loop
            ?>
                    <tr>
                        <td><?php echo $dt['nim'] ?></td>
                        <td><?php echo $dt['nama'] ?></td>
                        <td><?php echo $dt['alamat'] ?></td>
                        <td><?php echo $dt['tgl_lahir'] ?></td>
                        <td>
                            <img src="<?php echo $dt['photo'] ?>"  width="100" height="100">
                        </td>
                    </tr>

            <?php
                }
            ?>


        </tbody>
    </table>
</body>
</html>