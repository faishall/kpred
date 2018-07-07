<h1>Data Merek</h1>


<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>id merek</th>
			<th>nama</th>
			<th>Aksi</th>
		</tr>

	</thead>
	<tbody>
		<?php  $no=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM tbl_merek "); ?>
		<?php while ($bagi = $ambil ->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $bagi['id_merek']; ?></td>
			<td><?php echo $bagi['nama_merek']; ?></td>
			<td>
				<a href="main.php?halaman=hapusmerek&id=<?php echo $bagi['id_merek'];?>" class="btn-danger btn">Dalete</a>
				<a href="main.php?halaman=editmerek&id=<?php echo $bagi['id_merek'];?>" class="btn btn-warning">Edit</a>

			</td>

		</tr>
		<?php $no++; ?>
		<?php } ?>

	</tbody>

</table>
<a href="main.php?halaman=tambahmerek" class="btn btn-primary">Tambah merek</a>