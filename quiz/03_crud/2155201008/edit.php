<?php 
$koneksi = mysqli_connect('localhost','root','','quiz_genap');

if(isset($_POST['btn-update'])){
    $nomor_tagihan = $_POST['nomor_tagihan'];
    $tanggal = $_POST['tanggal'];
    $jenis_tagihan = $_POST['jenis_tagihan'];
    $nominal = $_POST['nominal'];
    $bukti_transfer = $_POST['bukti_transfer'];

    mysqli_query($koneksi, "UPDATE pembayaran SET nomor_tagihan='$nomor_tagihan', tanggal='$tanggal', jenis_tagihan='$jenis_tagihan', nominal='$nominal'
     WHERE bukti_transfer='$bukti_transfer'");
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <?php 
    // koneksi db
    // ambil quiz_genap dari URL
    $quiz_genap = $_REQUEST['quiz_genap'];
    // jalankan query dengan where quiz_genap
    $data = mysqli_query($koneksi, "SELECT * FROM tabel_pembayaran WHERE nomor_tagihan='$nomor_tagihan'");
    
    while ($row=mysqli_fetch_array($data)) {
        $nomor_tagihan = $row['nomor_tagihan'];
        $tanggal = $row['tanggal'];
        $jenis_tagihan = $row['jenis_tagihan'];
        $nominal = $row['nominal'];
        $bukti_transfer = $row['bukti_transfer'];
    }
    
    ?>
      <h3>Form Edit Data</h3>
     <table>
    <form action="edit.php" method="POST">
       
        <tr>
            <td>Nomor Tagihan</td>
            <td>:</td>
            <td><input type="text" name="nomor_tagihan" readonly value="<?php echo $nomor_tagihan?>"></td>
        </tr>
        <br>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td><input type="date" name="tanggal" value="<?php echo $tanggal ?>"></td>
        </tr>
        <br>
        <tr>
            <td>Jenis Tagihan</td>
            <td>:</td>
            <td><input type="select option" name="jenis_tagihan" value="<?php echo $jenis_tagihan ?>"></td>
        </tr>
        <tr>
            <td>Nominal</td>
            <td>:</td>
            <td><input type="number" name="nominal" value="<?php echo $nominal ?>"></td>
        </tr>
        <tr>
            <td>Bukti Transfer</td>
            <td>:</td>
            <td><input type="file" name="photo" required accept="image/*"></td>
        </tr>
        <br>
        <tr>
            <td><button type="submit" name="btn-update">Update Data</button></td>
        </tr>   
        
    </form>
    </table>
</body>
</html>