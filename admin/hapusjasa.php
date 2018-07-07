<?php 

$koneksi = new mysqli("localhost","root","","kpredforce");
	$id_jasa = $_GET['id'];

	$sql = "DELETE FROM tbl_jasa WHERE id_jasa='$_GET[id]'";
	$query = mysqli_query($koneksi, $sql);

echo "<div class='alert alert-info'>Data Terhapus</div>";
echo "<meta http-equiv='refresh' content='1;url=main.php?halaman=datajasa'>";

 ?>