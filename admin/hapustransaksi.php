<?php 

include 'admin/config/koneksi.php';
	$id_produk = $_GET['id'];

	$sql = "DELETE FROM transaksi WHERE id_transaksi='$_GET[id]'";
	$query = mysqli_query($koneksi, $sql);

echo "<div class='alert alert-info'>Data Terhapus</div>";
echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=datatransaksi'>";

 ?>