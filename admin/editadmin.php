<h1>Edit Admin</h1>

<?php 
$ambil=$koneksi->query("SELECT * FROM tbl_admin WHERE username='$_GET[username]'");
$bagi=$ambil->fetch_assoc();
 ?>

  <form method="post" enctype="multipart/form-data">
	
		<table width="400" border="0" align="" cellpadding="5" cellspacing="5">
		
			<tr><td>Username</td>
			<td>
				<input type="text" name="username" class="form-control" value="<?php echo $bagi['username']; ?>">
			</td></tr>
			<tr><td>Password</td>
			<td>
				<input type="text" name="password" class="form-control" value="">
			</td></tr>
			<tr><td>Nama</td>
			<td>
				<input type="text" name="nama" class="form-control" value="<?php echo $bagi['nama']; ?>">
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
	
	if ($_POST['password']=='') {
		$koneksi->query("UPDATE tbl_admin SET username='$_POST[username]', nama='$_POST[nama]' WHERE username='$_GET[username]' ");

	echo "<div class='alert alert-info'>Data Berhasil Di Update</div>";
	echo "<meta http-equiv='refresh' content='1;url=main.php?halaman=dataadmin'>";
	}
	else{
		$koneksi->query("UPDATE tbl_admin SET username='$_POST[username]', password='$_POST[password]', nama='$_POST[nama]' WHERE username='$_GET[username]' ");

	echo "<div class='alert alert-info'>Data Berhasil Di Update</div>";
	echo "<meta http-equiv='refresh' content='1;url=main.php?halaman=dataadmin'>";
	}
}

 ?>