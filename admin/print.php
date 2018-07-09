<center><h1>Laporan Transaksi</h1></center>
<?php
include 'config/koneksi.php';
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Laporan_Transaksi-export.xls");
 
// Tambahkan table
include 'laporan.php';



?>