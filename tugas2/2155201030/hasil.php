<!DOCTYPE html>
<html>
<head>
  <title>Hasil Form Input Mahasiswa</title>
</head>
<body>
  <h1>Hasil Form Input Mahasiswa</h1>

  <?php
  // Mengambil nilai dari form input
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $tgl_lahir = $_POST['tgl_lahir'];
  $photo_name = $_FILES['photo']['name'];
  $photo_tmp = $_FILES['photo']['tmp_name'];

  // Pindahkan file foto ke direktori yang diinginkan
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($photo_name);
  move_uploaded_file($photo_tmp, $target_file);

  // Menampilkan hasil output
  echo "Nama: " . $nama . "<br>";
  echo "Alamat: " . $alamat . "<br>";
  echo "Tanggal Lahir: " . $tgl_lahir . "<br>";
  echo "Photo: <img src='" . $target_file . "' alt='Photo Mahasiswa' width='200'>";
  ?>
</body>
</html>