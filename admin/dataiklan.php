
<h1>Data Iklan</h1>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>id iklan</th>
			<th>Nama iklan</th>
			<th>Gambar</th>
			<th>Aksi</th>
			
		</tr>

	</thead>
	<tbody>
		<?php  $no=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM tbl_iklan "); ?>
		<?php while ($bagi = $ambil ->fetch_assoc()){ ?>
		

		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $bagi['id_iklan']; ?></td>
			<td><?php echo $bagi['nama_iklan']; ?></td>
			<td><img src="gambar/<?php echo $bagi['gambar'];?>"  width=100px></td>
			
			<td>
				<a href="main.php?halaman=hapusiklan&id=<?php echo $bagi['id_iklan'];?>" class="btn-danger btn">Dalete</a>
				<a href="main.php?halaman=editiklan&id=<?php echo $bagi['id_iklan'];?>" class="btn btn-warning">Edit</a>

			</td>

		</tr>
		<?php $no++; ?>
		<?php } ?>

	</tbody>

</table>
<a href="main.php?halaman=tambahiklan" class="btn btn-primary">Tambah iklan</a>
