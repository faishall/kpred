<?php
include("config/koneksi.php"); 
$hasil = mysqli_query($koneksi, "SELECT id_customer FROM tbl_customer ORDER BY id_customer DESC LIMIT 1");
$data = @mysqli_fetch_array($hasil);
$lastkode = $data['id_customer'];
$noUrut = (int) substr($lastkode, 3, 4);
$noUrut++;
$char = "PLG";
$kode = $char . str_pad(strval($noUrut),4,"0",STR_PAD_LEFT);
?>
<h1>Tambah Pelanggan</h1>

<form method="post" enctype="multipart/form-data">
	
		<table width="400" border="0" align="" cellpadding="5" cellspacing="5">


			<tr><td>ID Pelanggan</td>
			<td>
				<input type="text" class="form-control" value="<?php echo $kode; ?>" name="id" readonly>
			</td></tr>
			<tr><td>Nama Pelanggan</td>
			<td>
				<input type="text" class="form-control" name="nama">
			</td></tr>
			<tr><td>NO Telepon</td>
			<td>
				<br><input type="text" class="form-control" name="notel">
			</td></tr>
			<tr><td>Email</td>
			<td>
				<input type="text" class="form-control" name="email">
			</td></tr>
			<tr><td>Password</td>
			<td>
				<input type="Password" class="form-control" name="pass">
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
	$koneksi->query("INSERT INTO tbl_customer(id_customer, nama,nohp ,email, password) VALUES ('$_POST[id]','$_POST[nama]','$_POST[notel]','$_POST[email]','$pass1')");

	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=main.php?halaman=datapelanggan'>";
}
 ?>