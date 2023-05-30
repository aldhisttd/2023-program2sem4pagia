<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "data_form");

// Memeriksa koneksi
if (mysqli_connect_errno()) {
  echo "Koneksi database gagal: " . mysqli_connect_error();
  exit();
}

// Mengambil data dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tanggal_lahir = $_POST['tgl_lahir'];

// Mengupload foto ke direktori
$foto = $_FILES['foto']['name'];
$lokasi_foto = "image/" . $foto;
move_uploaded_file($_FILES['foto']['tmp_name'], $lokasi_foto);

// Menyimpan data ke dalam tabel mahasiswa
$query = "INSERT INTO mhsform (nim, nama, alamat, tgl_lahir, foto) 
          VALUES ('$nim', '$nama', '$alamat', '$tanggal_lahir', '$lokasi_foto')";

if (mysqli_query($koneksi, $query)) {
  echo "Data mahasiswa berhasil disimpan.";
} 

// Menutup koneksi database
mysqli_close($koneksi);

header("location:hasil.php");
?>
