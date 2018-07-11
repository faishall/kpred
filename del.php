<?php 
require_once("admin/config/koneksi.php");
mysqli_query($koneksi, "DELETE FROM dtl_transaksi WHERE id_det_transaksi='$_GET[del]'");
// mysqli_query($koneksi, "DELETE FROM tbl_transaksi WHERE id_det_transaksi='$_GET[del]'");
header('location:index.php');
?>
