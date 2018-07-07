<h1>Edit Merek</h1>

<?php 
$ambil=$koneksi->query("SELECT * FROM tbl_merek WHERE id_merek='$_GET[id]'");
$bagi=$ambil->fetch_assoc();
 ?>

  <form method="post" enctype="multipart/form-data">
	
		<table width="400" border="0" align="" cellpadding="5" cellspacing="5">
		
			<tr><td>ID Merek</td>
			<td>
				<input type="text" name="id_merek" class="form-control" value="<?php echo $bagi['id_merek']; ?>" readonly>
			</td></tr>
			<tr><td>Nama Merek</td>
			<td>
				<input type="text" name="nama_merek" class="form-control" value="<?php echo $bagi['nama_merek']; ?>">
			</td></tr>
			<tr>
            <td colspan="2" align="">
            <button class="btn btn-primary" name="edit">Edit</button>
            </td></tr>
    	</table>
    </form>

    <?php 
if (isset ($_POST['edit']))
{
	
	$koneksi->query("UPDATE tbl_merek SET nama_merek='$_POST[nama_merek]' WHERE id_merek='$_GET[id]' ");

	echo "<div class='alert alert-info'>Data Berhasil Di Update</div>";
	echo "<meta http-equiv='refresh' content='1;url=main.php?halaman=datamerek'>";
}

 ?>