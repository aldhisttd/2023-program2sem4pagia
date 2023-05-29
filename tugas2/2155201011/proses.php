<?php


if(isset($_POST['btn_submit'])){

    $a = $_POST['nama'];
    $b = $_POST['alamat'];
    $c = $_POST['tgl_lahir'];
    $d = $_FILES['photo']['name'];
    $photo_tmp = $_FILES['photo']['tmp_name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($d);
    move_uploaded_file($photo_tmp, $target_file);


    echo $a; echo "<br>";
    echo $b; echo "<br>";
    echo $c; echo "<br>";

    echo "<img src='" . $target_file . "' alt='Photo Mahasiswa' width='150'>";




}else{

    header('Location: index.php');
}