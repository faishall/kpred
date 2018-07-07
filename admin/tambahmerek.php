<?php
	$query = "select count(id_merek) as count from tbl_merek";
	$result=$koneksi->query($query) or die (mysql_error());
	$data=$result->fetch_assoc();
	$count = "MRK000".($data['count'] + 1);

?>
<h1>Tambah Merek</h1>

<form method="post" enctype="multipart/form-data">
	
		<table width="400" border="0" align="" cellpadding="5" cellspacing="5">


			<tr><td>ID Merek</td>
			<td>
				<input type="text" class="form-control" value="<?php echo $count; ?>" readonly name="id">
			</td></tr>
			<tr><td>Nama Merek</td>
			<td>
				<input type="text" class="form-control" name="nama">
			</td></tr>
			<tr>
            <td colspan="2" align="">
            <button class="btn btn-primary" name="simpan">SIMPAN</button>
            </td></tr>
    	</table>
</form>

<?php 
if (isset($_POST['simpan'])) 
{
	$koneksi->query("INSERT INTO tbl_merek(id_merek, nama_merek) VALUES ('$_POST[id]','$_POST[nama]')");

	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=main.php?halaman=datamerek'>";
}
 ?>