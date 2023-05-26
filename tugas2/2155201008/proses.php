
<?php

if(isset($_POST['spn'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tanggal = $_POST['tgl_lahir'];
    $file = $_FILES['foto']['name'];
    $tmp_name = $_FILES['foto']['tmp_name'];
    $dirUpLoad = "images/";
    $fileUpLoad = $dirUpLoad .basename($file);
    move_uploaded_file($tmp_name, $fileUpLoad);

    echo "<h2>Data Mahasiswa</h2>";
    echo "<table>";

    echo "<tr>";
    echo  "<td>Nama<td>";
    echo  "<td>:<td>";
    echo  "<td>$nama<td>";
    echo "</tr>";

    echo "<tr>";
    echo  "<td>Alamat<td>";
    echo  "<td>:<td>";
    echo  "<td>$alamat<td>";
    echo "</tr>";

    echo "<tr>";
    echo  "<td>Tanggal Lahir<td>";
    echo  "<td>:<td>";
    echo  "<td>$tanggal<td>";
    echo "</tr>";
   
    echo "<tr>";
    echo  "<td>Gambar<td>";
    echo  "<td>:<td>";
    echo  "<td><img src='". $fileUpLoad ."' width='70' height='90' align='middle'><td>";
    echo "</tr>";
    echo "</table>";
    

}
?>
