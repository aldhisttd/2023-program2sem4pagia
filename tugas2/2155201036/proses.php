<?php

if(isset($_POST['tombol_submit'])){
    $nama = $_POST['input_nama'];
    $alamat = $_POST['input_alamat_rumah'];
    $tanggal = $_POST['input_tgl_lahir'];
    $file = $_FILES['foto']['name'];
    $tmp_name = $_FILES['foto']['tmp_name'];
    $upLoads = "uploads/";
    $upLoads = $upLoads .basename($file);
    move_uploaded_file($tmp_name, $upLoads);

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
    echo  "<td><img src='". $upLoads ."' width='70' height='90' align='middle'><td>";
    echo "</tr>";
    echo "</table>";
}
?>