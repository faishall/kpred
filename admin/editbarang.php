<h1>Edit Barang</h1>

<?php 
$ambil=$koneksi->query("SELECT * FROM tbl_barang WHERE id_barang='$_GET[id]'");
$bagi=$ambil->fetch_assoc();


 ?>

 <form method="post" enctype="multipart/form-data">
	
		<table width="400" border="0" align="" cellpadding="5" cellspacing="5">
		
			<tr><td>ID Barang</td>
			<td>
				<input type="text" name="id_barang" class="form-control" value="<?php echo $bagi['id_barang']; ?>" readonly>
			</td></tr>
			<tr><td>Nama Barang</td>
			<td>	
				<br><input type="text" name="nama_barang" class="form-control" value="<?php echo $bagi['nama_barang']; ?>">
			</td></tr>
			<tr><td>Harga</td>
			<td>			
				<br><input type="text" name="harga" class="form-control" value="<?php echo $bagi['harga']; ?>">
			</td></tr>

			<tr><td>Stock</td>
			<td>			
				<br><input type="text" name="stok" class="form-control" value="<?php echo $bagi['stok']; ?>">
			</td></tr>

			<tr><td>Gambar</td>
			<td>			

				<input type="hidden" id="x" name="x"  value="<?php echo $bagi['gambar']; ?>">
				<br><img width="150px" height="150px" name="gambar"  src="gambar/<?php echo $bagi['gambar']; ?>" >
				<input type="file"  name="gambar" class="form-control">
			</td></tr>
			<tr><td>Berat</td>
			<td>			
				<br><input type="number" name="number" class="form-control" value="<?php echo $bagi['berat']; ?>">
			</td></tr>
			<tr><td>Detail</td>
			<td>			
				<br><input type="text" name="detail" class="form-control" value="<?php echo $bagi['detail']; ?>">
			</td></tr>
			
			<tr><td>ID Merk</td>
			<td>			
 			<?php
		     $tampil=mysqli_query($koneksi, "select * from tbl_merek");
		     echo"<select class='form-control' name='id_merek'>";
		     echo"<option value='$bagi[id_merek]'>$bagi[id_merek]</option>";
		     while($x=mysqli_fetch_array($tampil))
		      {
		      echo"<option value='$x[id_merek]'>$x[id_merek]</option>";
		      }
		    echo"</select>";
		    ?>
			</td></tr>
			<tr>
            <td colspan="2" align="">
            <button class="btn btn-primary" name="Update">Update</button>
            </td></tr>
    	</table>
    </form>

    <?php 
    	$tempatfoto = 'gambar/';
		$namafile = $_FILES['gambar']['name'];
    	$x=$_POST['x'];
    	$fot=$_FILES['gambar']['tmp_name'];
    if (isset($_POST['Update']))
    {
    	if(!$fot==""){
    		$nama=$namafile;
    	}else{
    			$nama=$x;
    		
    	}
    	$koneksi->query("UPDATE tbl_barang SET nama_barang='$_POST[nama_barang]',harga='$_POST[harga]',stok='$_POST[stok]',gambar='$nama',berat='$_POST[berat]',detail='$_POST[detail]',id_merek='$_POST[id_merek]' WHERE id_barang='$_GET[id]'");

    	$unduhfile  = $tempatfoto.$namafile;
	move_uploaded_file($_FILES['gambar']['tmp_name'],$unduhfile);

	echo "<div class='alert alert-info'>Data Berhasil Diupdate</div>";
	echo "<meta http-equiv='refresh' content='1;url=main.php?halaman=databarang'>";
    }

     ?>