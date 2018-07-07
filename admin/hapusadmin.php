 <?php 

$koneksi = new mysqli("localhost","root","","kpredforce");
	$username = $_GET['username'];

	$sql = "DELETE FROM tbl_admin WHERE username='$_GET[username]'";
	$query = mysqli_query($koneksi, $sql);

echo "<div class='alert alert-info'>Data Terhapus</div>";
echo "<meta http-equiv='refresh' content='1;url=main.php?halaman=dataadmin'>";

 ?>