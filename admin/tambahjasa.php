<?php
	$query = "select count(id_jasa) as count from tbl_jasa";
	$result=$koneksi->query($query) or die (mysql_error());
	$data=$result->fetch_assoc();
	$count = "JS000".($data['count'] + 1);

?>
<h1>Tambah Jasa</h1>

<form method="post" enctype="multipart/form-data">
	
		<table width="400" border="0" align="" cellpadding="5" cellspacing="5">


			<tr><td>ID jasa</td>
			<td>
				<input type="text" class="form-control" value="<?php echo $count; ?>" name="id" readonly>
			</td></tr>
			<tr><td>Nama Jasa</td>
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
	$koneksi->query("INSERT INTO tbl_jasa(id_jasa,nama_jasa) VALUES ('$_POST[id]','$_POST[nama]')");

	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=main.php?halaman=datajasa'>";
}
 ?>