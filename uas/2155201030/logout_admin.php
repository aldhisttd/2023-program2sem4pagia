<?php
session_start();
session_unset(); // Hapus semua session
session_destroy(); // Hapus data session dari server
header("Location: index.php"); // Redirect kembali ke halaman login
exit();
?>
