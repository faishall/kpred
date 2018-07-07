<?php 
include 'admin/config/koneksi.php';
$jajal=mysqli_query($koneksi,"SELECT berat FROM tbl_barang WHERE id_barang='BRG0002'");
$j=mysqli_fetch_array($jajal);
echo ceil($j['berat'])*1000;
 ?>