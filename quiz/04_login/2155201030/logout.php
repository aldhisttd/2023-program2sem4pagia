<?php 
session_start();

unset($_SESSION['sudah_login']);
unset($_SESSION['username']);

header('location:form.php');

?>
