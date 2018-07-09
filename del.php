<?php 
require_once("admin/config/koneksi.php");
$konfirm=mysqli_query($koneksi, "DELETE FROM dtl_transaksi WHERE id_det_transaksi='$_GET[del]'");
header('location:index.php');
?>