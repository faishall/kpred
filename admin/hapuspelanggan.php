<?php 

$koneksi = new mysqli("localhost","root","","kpredforce");
	$id_customer = $_GET['id'];

	$sql = "DELETE FROM tbl_customer WHERE id_customer='$_GET[id]'";
	$query = mysqli_query($koneksi, $sql);

echo "<div class='alert alert-info'>Data Terhapus</div>";
echo "<meta http-equiv='refresh' content='1;url=main.php?halaman=datapelanggan'>";

 ?>