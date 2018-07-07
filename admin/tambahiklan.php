<?php
	$query = "select count(id_iklan) as count from tbl_iklan";
	$result=$koneksi->query($query) or die (mysql_error());
	$data=$result->fetch_assoc();
	$count = "IKL000".($data['count'] + 1);

?>

<h1>TAMBAH Iklan</h1>

<form method="post" enctype="multipart/form-data">
<table width="450" border="0" align="center" cellpading="5" cellspacing="5">

<tr><td> Id Iklan</td>
	<td>
		<br><input type="text" name="id" class="form-control" value="<?php echo $count;?>" readonly>
	</td>
</tr>
<tr><td> Nama Iklan</td>
	<td>
		<br><input type="text" name="nama" class="form-control">
	</td>
</tr>


<tr><td> Foto Iklan</td>
	<td>
		<br><input type="file" name="foto" class="form-control">
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
	$tempatfoto = 'gambar/';
$namafile = $_FILES['foto']['name'];

	$koneksi->query("INSERT INTO tbl_iklan(id_iklan,nama_iklan,gambar) VALUES('$_POST[id]','$_POST[nama]','$namafile')");
	$unduhfile  = $tempatfoto.$namafile;
	move_uploaded_file($_FILES['foto']['tmp_name'],$unduhfile);

	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=main.php?halaman=dataiklan'>";

}	