<h1>Data Pelangan</h1>

<div class="table-responsive">
<table class="table table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Id Customer</th>
			<th>Nama Lengkap</th>
			<th>nohp</th>
			<th>Email</th>
			<th>password</th>
			<th>Aksi</th>
		</tr>

	</thead>
	<tbody>
		<?php  $no=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM tbl_customer "); ?>
		<?php while ($bagi = $ambil ->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $bagi['id_customer']; ?></td>
			<td><?php echo $bagi['nama']; ?></td>
			<td><?php echo $bagi['nohp']; ?></td>
			<td><?php echo $bagi['email']; ?></td>
			<td><?php echo $bagi['password']; ?></td>
			
			<td>
				<a href="main.php?halaman=hapuspelanggan&id=<?php echo $bagi['id_customer'];?>" class="btn-danger btn">Dalete</a>
				<a href="main.php?halaman=editpelanggan&id=<?php echo $bagi['id_customer'];?>" class="btn btn-warning">Edit</a>

			</td>

		</tr>
		<?php $no++; ?>
		<?php } ?>

	</tbody>

</table>
<a href="main.php?halaman=tambahpelanggan" class="btn btn-primary">Tambah Customer</a>
</div>