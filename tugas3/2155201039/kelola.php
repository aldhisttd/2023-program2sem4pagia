<!DOCTYPE html>

<?php
    include 'koneksi.php';

    $id_mahasiswa = '';
    $nama = '';
    $nim = '';
    $alamat = '';
    $tgl_lahir = '';
    $foto = '';

    if (isset($_GET['edit'])){
        $id_mahasiswa = $_GET['edit'];

        $query = "SELECT * FROM tb_mahasiswa WHERE id_mahasiswa = '$id_mahasiswa';";
        $sql = mysqli_query($conn, $query);

        $result = mysqli_fetch_assoc($sql);
        
        $nama = $result['nama'];
        $nim = $result['nim'];
        $alamat = $result['alamat'];
        $tgl_lahir = $result['tgl_lahir'];

        //var dump($result);
        //die();

    }
?>   
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Form</h1>

    <form action="proses.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" value="<?php echo $id_mahasiswa; ?>" name="id_mahasiswa">

        <label for="nama">Nama</label> <br>
        <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>">

        <br>

        <label for="nim">NIM</label> <br>
        <input type="text" id="nim" name="nim" value="<?php echo $nim; ?>">

        <br>

        <label for="alamat">Alamat</label> <br>
        <textarea name="alamat" id="alamat" cols="30" rows="3"><?php echo $alamat; ?></textarea>

        <br>

        <label for="tgl_lahir">Tanggal Lahir</label> <br>
        <input type="date" id="tgl_lahir" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>">

        <br>

        <label for="foto">Foto</label> <br>
        <input type="file" id="foto" name="foto">

        <br><br>

		<?php
			if(isset($_GET['edit'])){
		?>
			<button type="submit" name="aksi" value="edit">Simpan Perubahan</button>
		<?php
			} else {
		?>
			<button type="submit" name="aksi" value="add">Tambahkan</button>
		<?php
			}
        ?>

    </form>
</body>
</html>