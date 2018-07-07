<h1>Edit Customer</h1>

<?php 
$ambil=$koneksi->query("SELECT * FROM tbl_customer WHERE id_customer='$_GET[id]'");
$bagi=$ambil->fetch_assoc();
 ?>

  <form method="post" enctype="multipart/form-data">
	
		<table width="400" border="0" align="" cellpadding="5" cellspacing="5">
		
			<tr><td>ID Customer</td>
			<td>
				<input type="text" name="id_customer" class="form-control" value="<?php echo $bagi['id_customer']; ?>" readonly>
			</td></tr>
			<tr><td>Nama</td>
			<td>
				
				<br><input type="text" name="nama" class="form-control" value="<?php echo $bagi['nama']; ?>">
			</td></tr>

			<tr><td>No HP</td>
			<td>
				<br><input type="text" name="nohp" class="form-control" value="<?php echo $bagi['nohp']; ?>">
			</td></tr>
				<tr><td>Email</td>
			<td>
				
				<br><input type="text" name="email" class="form-control" value="<?php echo $bagi['email']; ?>">
			</td></tr>
			<tr><td>Password</td>
			<td>
			<br><input type="text" name="password" class="form-control" value="">
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
		$koneksi->query("UPDATE tbl_customer SET nama='$_POST[nama]',nohp='$_POST[nohp]',email='$_POST[email]' WHERE id_customer='$_GET[id]' ");

	echo "<div class='alert alert-info'>Data Berhasil Di Update</div>";
	echo "<meta http-equiv='refresh' content='1;url=main.php?halaman=datapelanggan'>";
	}
	else{
		$pass=$_POST['password'];
	$pass1=md5($pass);
	$koneksi->query("UPDATE tbl_customer SET nama='$_POST[nama]',nohp='$_POST[nohp]',email='$_POST[email]',password='$pass1' WHERE id_customer='$_GET[id]' ");

	echo "<div class='alert alert-info'>Data Berhasil Di Update</div>";
	echo "<meta http-equiv='refresh' content='1;url=main.php?halaman=datapelanggan'>";
	}
}

 ?>