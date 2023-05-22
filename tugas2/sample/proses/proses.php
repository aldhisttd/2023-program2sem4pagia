
<?php



if(isset($_POST['tombol_submit'])){

    echo "anda menekan tombol submit";

    $nama = $_POST['input_nama'];
    echo $nama;


}else{
    echo "submit error";
}




?>