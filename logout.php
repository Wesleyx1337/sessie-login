<?php session_start();
session_destroy();
header("location:sessie.php");
exit;
?>