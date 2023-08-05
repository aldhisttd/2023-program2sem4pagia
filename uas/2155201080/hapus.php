<?php
include "function.php";
$sn = $_REQUEST['sn'];

mysqli_query($conn, "DELETE FROM admin WHERE sn='$sn'");
header("location:index.php");


?>