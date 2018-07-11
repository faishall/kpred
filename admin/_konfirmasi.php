<?php 
include 'config/koneksi.php';
$id = $_GET['kon'];


mysqli_query($koneksi, "UPDATE dtl_transaksi SET ver_v='0' WHERE id_det_transaksi='$_GET[kon]'");


echo "<script>window.location = '_email_customer.php?id=$id';</script>";

?>