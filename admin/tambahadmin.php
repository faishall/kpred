<h1>Tambah Admin</h1>

<form method="post" enctype="multipart/form-data">
	
		<table width="400" border="0" align="" cellpadding="5" cellspacing="5">

			<tr><td>Username</td>
			<td>
				<input type="text" class="form-control" name="username">
			</td></tr>
			<tr><td>Password</td>
			<td>
				<input type="Password" class="form-control" name="pass">
			</td></tr>
			<tr><td>Nama</td>
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
	$pass=$_POST['pass'];
	$pass1=md5($pass);
	$koneksi->query("INSERT INTO tbl_admin(username, password ,nama) VALUES ('$_POST[username]','$pass1','$_POST[nama]')");

	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=main.php?halaman=dataadmin'>";
}
 ?>