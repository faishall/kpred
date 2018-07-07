<h1>Edit Jasa</h1>

<?php 
$ambil=$koneksi->query("SELECT * FROM tbl_jasa WHERE id_jasa='$_GET[id]'");
$bagi=$ambil->fetch_assoc();
 ?>

  <form method="post" enctype="multipart/form-data">
	
		<table width="400" border="0" align="" cellpadding="5" cellspacing="5">
		
			<tr><td>ID Jasa</td>
			<td>
				<input type="text" name="id_jasa" class="form-control" value="<?php echo $bagi['id_jasa']; ?>" readonly>
			</td></tr>

			<tr><td>Nama Jasa</td>
			<td>
				
				<br><input type="text" name="nama_jasa" class="form-control" value="<?php echo $bagi['nama_jasa']; ?>">
			</td></tr>
            <td colspan="2" align="">
            <button class="btn btn-primary" name="edit">Edit</button>
            </td></tr>
    	</table>
    </form>

    <?php 
if (isset ($_POST['edit']))
{
	$pass=$_POST['password'];
	$pass1=md5($pass);
	$koneksi->query("UPDATE tbl_jasa SET nama_jasa='$_POST[nama_jasa]' WHERE id_jasa='$_GET[id]' ");

	echo "<div class='alert alert-info'>Data Berhasil Di Update</div>";
	echo "<meta http-equiv='refresh' content='1;url=main.php?halaman=datajasa'>";
}

 ?>