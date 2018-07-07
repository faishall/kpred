<?php 
// session_unset();
session_start();
session_destroy();
echo "<script>alert('Logout berhasil! Sampai jumpa kembali.')</script>";
echo "<script>window.location=('index.php');</script>";
// header("location: index.php");
?>