<?php 

include 'admin/config/koneksi.php';
	$id_barang = $_GET['id'];

	$view = mysqli_query($koneksi, "SELECT * FROM tbl_barang WHERE id_barang='$id_barang'");

	$cek = mysqli_fetch_array($view);

	$folder="gambar/$cek['gambar']";

	if (file_exists($folder)) {
		unlink($folder);
	}

	unlink($folder);

	
	$sql = "DELETE FROM tbl_barang WHERE id_barang='$_GET[id]'";
	$query = mysqli_query($koneksi, $sql);

echo "<div class='alert alert-info'>Data Terhapus</div>";
echo "<meta http-equiv='refresh' content='1;url=main.php?halaman=databarang'>";

 ?>