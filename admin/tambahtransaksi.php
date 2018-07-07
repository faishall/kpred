<?php
include("config/koneksi.php");
$query = "select count(id_transaksi) as count from tbl_transaksi";
	$result=$koneksi->query($query) or die (mysql_error());
	$data=$result->fetch_assoc();
	$count = "TRAN000".($data['count'] + 1);
	
?>
<h1>TAMBAH TRANSAKSI</h1>

<form method="post" enctype="multipart/form-data">
<table width="450" border="0" align="center" cellpading="5" cellspacing="5">

<tr><td> ID Transaksi</td>
	<td>
		<br><input type="text" name="id" class="form-control" value="<?php echo $count;?>" readonly>
	</td>
</tr>
<tr><td> ID Customer</td>
	<td>
		<br><input type="text" name="customer" class="form-control">
	</td>
</tr>
<tr><td> ID Barang</td>
	<td>
		<br><input type="text" name="barang" class="form-control">
	</td>
</tr>
<tr><td> ID Jasa</td>
	<td>
		<br><input type="text" name="jasa" class="form-control">
	</td>
</tr>
<tr><td> Harga</td>
	<td>
		<br><input type="text" name="harga" class="form-control">
	</td>
</tr>

		<tr><td> Total</td>
	<td>
		<br><input type="text" name="total" class="form-control">
	</td>
</tr>
<tr><td> Tgl Transaksi</td>
	<td>
		<br><input type="text" name="tanggal" class="form-control">
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

	$koneksi->query("INSERT INTO tbl_transaksi(id_transaksi,id_customer,id_barang,id_jasa,harga,total,tgl_transaksi) 
VALUES('$_POST[id]','$_POST[customer]','$_POST[barang]','$_POST[jasa]','$_POST[harga]','$_POST[total]','$_POST[tanggal]')");
	
	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=main.php?halaman=datatransaksi'>";

}	