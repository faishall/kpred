<h1>Data Jasa</h1>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>id jasa</th>
			<th>Nama Jasa</th>
			<th>Aksi</th>
		</tr>

	</thead>
	<tbody>
		<?php  $no=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM tbl_jasa "); ?>
		<?php while ($bagi = $ambil ->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $bagi['id_jasa']; ?></td>
			<td><?php echo $bagi['nama_jasa']; ?></td>
			<td>
				<a href="main.php?halaman=hapusjasa&id=<?php echo $bagi['id_jasa'];?>" class="btn-danger btn">Dalete</a>
				<a href="main.php?halaman=editjasa&id=<?php echo $bagi['id_jasa'];?>" class="btn btn-warning">Edit</a>

			</td>

		</tr>
		<?php $no++; ?>
		<?php } ?>

	</tbody>

</table>
<a href="main.php?halaman=tambahjasa" class="btn btn-primary">Tambah Jasa</a>