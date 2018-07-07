<?php
	$query = "select count(id_kota) as count from tbl_kota";
	$result=$koneksi->query($query) or die (mysql_error());
	$data=$result->fetch_assoc();
	$count = "KTA000".($data['count'] + 1);

?>

<h1>TAMBAH Kota</h1>

<form method="post" enctype="multipart/form-data">
<table width="450" border="0" align="center" cellpading="5" cellspacing="5">

<tr><td> Id Kota</td>
	<td>
		<br><input type="text" name="id" class="form-control" value="<?php echo $count;?>" readonly>
	</td>
</tr>
<tr><td> Nama Kota</td>
	<td>
		<br><input type="text" name="nama" class="form-control">
	</td>
</tr>
<tr><td> Ongkir </td>
	<td>
		<br><input type="text" name="ongkos" class="form-control">
	</td>
</tr>
<tr>
	<td colspan="2" align="center">
		<br><button class="btn btn-primary" name="simpan"> Simpan</button>
	</td>
</tr>
</table>
	
</form>

<?php 
if (isset($_POST['simpan'])) 


{
	

	$koneksi->query("INSERT INTO tbl_kota(id_kota,nama_kota,ongkos) 
VALUES('$_POST[id]','$_POST[nama]','$_POST[ongkos]')");
	

	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=main.php?halaman=datakota'>";

}	