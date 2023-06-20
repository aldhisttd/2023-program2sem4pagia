<?php
	include 'koneksi.php';

	$query = "SELECT * FROM tb_mahasiswa";
	$sql = mysqli_query($conn, $query);
	$no = 0;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Data Mahasiswa</h1>
	<a href="kelola.php"><button>Tambah Data</button></a>
	<table border="1">
		<thead>
			<tr>
				<th>No.</th>
				<th>NIM</th>
				<th>Nama Mahasiswa</th>
				<th>Alamat</th>
				<th>tgl_lahir</th>
				<th>foto</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php
			while($result = mysqli_fetch_assoc($sql)){
		?>
			<tr>
				<td><?php echo ++$no; ?>.</td>
				<td><?php echo $result['nim']; ?></td>
				<td><?php echo $result['nama']; ?></td>
				<td><?php echo $result['alamat']; ?></td>
				<td><?php echo $result['tgl_lahir']; ?></td>
				<td>
					<img src="img/<?php echo $result['foto']; ?>" style="width: 150px;">
				</td>
				<td>
					<a name="edit" href="kelola.php?edit=<?php echo $result['id_mahasiswa']; ?>"><button>edit</button></a>
					<a name="hapus"href="proses.php?hapus=<?php echo $result['id_mahasiswa']; ?>" onClick="return confirm('Yakin mau ngehapus???')"><button>hapus</button></a>
				</td>
			</tr>	
		<?php
			}
		?>

		</tbody>
	</table>
</body>
</html>
 82 changes: 82 additions & 0 deletions82  
tugas3/2155201012/kelola.php
Marking files as viewed can help keep track of your progress, but will not affect your submitted reviewViewed
Comment on this file
@@ -0,0 +1,82 @@
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