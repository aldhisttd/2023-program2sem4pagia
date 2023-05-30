<h3> Data Mahasiswa </h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Nim</th>
        <th>Alamat</th>
        <th>Tanggal lahir</th>
        <th>Photo</th>
    </tr>
    
    <input type='button' value ='Back'onClick='top.location ="index.php"'> </input>

    <?php

    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from mahasiswa");
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo"
        <tr> 
            <td>$no</td>
            <td>$tampil[Nama]</td>
            <td>$tampil[NIm]</td>
            <td>$tampil[Alamat]</td>
            <td>$tampil[Tanggal_Lahir]</td>
            <td>$tampil[Photo]</td>
        </tr>";

        $no++;
    }   
    ?>
</table> 