<?php
	$query = "select count(id_barang) as count from tbl_barang";
	$result=$koneksi->query($query) or die (mysql_error());
	$data=$result->fetch_assoc();
	$count = "BRG000".($data['count'] + 1);

?>

<h1>TAMBAH BARANG</h1>

<form method="post" enctype="multipart/form-data">
<table width="450" border="0" align="center" cellpading="5" cellspacing="5">

<tr><td> Id Barang</td>
	<td>
		<br><input type="text" name="id" class="form-control" value="<?php echo $count;?>" readonly>
	</td>
</tr>
<tr><td> Nama Barang</td>
	<td>
		<br><input type="text" name="nama" class="form-control">
	</td>
</tr>
<tr><td> Harga Barang</td>
	<td>
		<br><input type="text" name="harga" class="form-control">
	</td>
</tr>
<tr><td> Stok</td>
	<td>
		<br><input type="text" name="stok" class="form-control">
	</td>
</tr>
<tr><td> Foto Barang</td>
	<td>
		<br><input type="file" name="foto" class="form-control">
	</td>
</tr>

		<tr><td> detail</td>
	<td>
		<br><input type="text" name="detail" class="form-control">
	</td>
</tr>

<tr><td> pilih merek</td>                                  
<td>
    <?php
     $tampil=mysqli_query($koneksi, "select * from tbl_merek");
     echo"                                                                                           
     <select class='form-control' name='merek'>";
     echo "<option>Pilih Merek</option>";
     while($x=mysqli_fetch_array($tampil))
      {
      echo"<option value='$x[id_merek]'>$x[nama_merek]</option>";
      }
    echo"</select>";
    ?>
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

	$koneksi->query("INSERT INTO tbl_barang(id_barang,nama_barang,harga,stok,gambar,detail,id_merek) 
VALUES('$_POST[id]','$_POST[nama]','$_POST[harga]','$_POST[stok]','$namafile','$_POST[detail]','$_POST[merek]')");
	$unduhfile  = $tempatfoto.$namafile;
	move_uploaded_file($_FILES['foto']['tmp_name'],$unduhfile);

	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=main.php?halaman=databarang'>";

}	



