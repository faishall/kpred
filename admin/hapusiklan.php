<?php 

include 'admin/config/koneksi.php';
	$id_iklan = $_GET['id'];

	$sql = "DELETE FROM tbl_iklan WHERE id_iklan='$_GET[id]'";
	$query = mysqli_query($koneksi, $sql);

echo "<div class='alert alert-info'>Data Terhapus</div>";
echo "<meta http-equiv='refresh' content='1;url=main.php?halaman=dataiklan'>";

 ?>