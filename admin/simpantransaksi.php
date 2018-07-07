<?php 
$koneksi = new mysqli("localhost","root","","rentalmobil");

$a=$_POST['hs'];
$b=$_POST['dr'];
$c= $a * $b;

if(isset($_POST['simpan']))
{
	$koneksi->query("INSERT INTO transaksi(tgl_transaksi,nama_plg,jenis_kamar,jaminan,harga,durasi_inap,total_harga) VALUES ('$_POST[tt]','$_POST[np]','$_POST[jm]','$_POST[jmn]','$_POST[hs]','$_POST[dr]','$_c')");

	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=datatransaksi'>";
}

 ?>