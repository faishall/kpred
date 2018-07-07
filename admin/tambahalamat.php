<h1>Tambah Alamat</h1>

<form method="post" enctype="multipart/form-data">
	
		<table width="400" border="0" align="" cellpadding="5" cellspacing="5">

			<tr><td>ID Pengiriman</td>
			<td>
				<input type="number" class="form-control" name="id_pengiriman">
			</td></tr>
			<tr><td>Provinsi</td>
			<td>
				<input type="text" class="form-control" name="prov">
			</td></tr>
			<tr><td>Kota</td>
			<td>
				<input type="text" class="form-control" name="kota">
			</td></tr>
			<tr><td>Alamat</td>
			<td>
				<input type="text" class="form-control" name="alamat">
			</td></tr>
			<tr><td>Kode Pos</td>
			<td>
				<input type="number" class="form-control" name="kodepos">
			</td></tr>
			<tr><td>ID Customer</td>
			<td>
				<input type="text" class="form-control" name="id_customer">
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
	$koneksi->query("INSERT INTO tbl_pengiriman(id_pengiriman, provinsi ,kota, alamat, kodepos, id_customer) VALUES ('$_POST[id_pengiriman]','$_POST[prov]','$_POST[kota]','$_POST[alamat]','$_POST[kodepos]','$_POST[id_customer]')");

	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=main.php?halaman=dataalamatpengiriman'>";
}
 ?>