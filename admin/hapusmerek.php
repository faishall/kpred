<?php 

include 'admin/config/koneksi.php';
	$id_merek = $_GET['id'];

	$sql = "DELETE FROM tbl_merek WHERE id_merek='$_GET[id]'";
	$query = mysqli_query($koneksi, $sql);

echo "<div class='alert alert-info'>Data Terhapus</div>";
echo "<meta http-equiv='refresh' content='1;url=main.php?halaman=datamerek'>";

 ?>