
<h1>Data Barang</h1>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>id Barang</th>
			<th>Nama Barang</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>Gambar</th>
			<th>Berat</th>
			<th>detail</th>
			<th>id Merek</th>
			<th>Aksi</th>
			
		</tr>

	</thead>
	<tbody>
		<?php  $no=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM tbl_barang "); ?>
		<?php while ($bagi = $ambil ->fetch_assoc()){ ?>
		

		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $bagi['id_barang']; ?></td>
			<td><?php echo $bagi['nama_barang']; ?></td>
			<td><?php echo $bagi['harga']; ?></td>
			<td><?php echo $bagi['stok']; ?></td>
			<td><img src="gambar/<?php echo $bagi['gambar'];?>"  width=100px></td>
			<td><?php echo $bagi['berat']; ?></td>
			<td><?php echo $bagi['detail']; ?></td>
			<td><?php echo $bagi['id_merek']; ?></td>
			<td>
				<a href="main.php?halaman=hapusbarang&id=<?php echo $bagi['id_barang'];?>" class="btn-danger btn">Dalete</a>
				<a href="main.php?halaman=editbarang&id=<?php echo $bagi['id_barang'];?>" class="btn btn-warning">Edit</a>

			</td>

		</tr>
		<?php $no++; ?>
		<?php } ?>

	</tbody>

</table>
<!-- <a href="main.php?halaman=tambahbarang" class="btn btn-primary">Tambah Barang</a> -->
