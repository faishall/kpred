<h1>Edit Barang</h1>

<?php 
$ambil=$koneksi->query("SELECT * FROM tbl_iklan WHERE id_iklan='$_GET[id]'");
$bagi=$ambil->fetch_assoc();


 ?>

 <form method="post" enctype="multipart/form-data">
	
		<table width="400" border="0" align="" cellpadding="5" cellspacing="5">
		
			<tr><td>ID Iklan</td>
			<td>
				<input type="text" name="id_barang" class="form-control" value="<?php echo $bagi['id_iklan']; ?>" readonly>
			</td></tr>
			<tr><td>Nama Iklan</td>
			<td>		
				<br><input type="text" name="nama_barang" class="form-control" value="<?php echo $bagi['nama_iklan']; ?>">
			</td></tr>
			<tr><td>Gambar</td>
			<td>			

				<input type="hidden" id="x" name="x"  value="<?php echo $bagi['gambar']; ?>">
				<br><img width="150px" height="150px" name="gambar"  src="gambar/<?php echo $bagi['gambar']; ?>" >
				<input type="file"  name="gambar" class="form-control">
			</td></tr>
			<tr>
            <td colspan="2" align="">
            <button class="btn btn-primary" name="Update">Update</button>
            </td></tr>
			</table>
			</form>
    <?php 
    	$tempatfoto = 'gambar/';
    	// $namafile = $_FILES['gambar']['name'];
    	// $x=$_POST['x'];
    	// $fot=$_FILES['gambar']['tmp_name'];
    if (isset($_POST['Update']))
    {
    	if(!$fot==""){
    		$nama=$namafile;
    	}else{
    			$nama=$x;
    		
    	}
    	$koneksi->query("UPDATE tbl_iklan SET nama_iklan='$_POST[nama_iklan]',gambar='$nama' WHERE id_iklan='$_GET[id]'");

    	$unduhfile  = $tempatfoto.$namafile;
	move_uploaded_file($_FILES['gambar']['tmp_name'],$unduhfile);

	echo "<div class='alert alert-info'>Data Berhasil Diupdate</div>";
	echo "<meta http-equiv='refresh' content='1;url=main.php?halaman=dataiklan'>";
    }

     ?>