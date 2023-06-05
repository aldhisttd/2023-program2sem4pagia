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