<h1>Data Admin</h1>


<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Password</th>
			<th>Nama</th>
			<th>Aksi</th>
		</tr>

	</thead>
	<tbody>
		<?php  $no=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM tbl_admin "); ?>
		<?php while ($bagi = $ambil ->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $bagi['username']; ?></td>
			<td><?php echo $bagi['password']; ?></td>
			<td><?php echo $bagi['nama']; ?></td>
			<td>
				<a href="main.php?halaman=hapusadmin&username=<?php echo $bagi['username'];?>" class="btn-danger btn">Dalete</a>
				<a href="main.php?halaman=editadmin&username=<?php echo $bagi['username'];?>" class="btn btn-warning">Edit</a>

			</td>

		</tr>
		<?php $no++; ?>
		<?php } ?>

	</tbody>

</table>
<a href="main.php?halaman=tambahadmin" class="btn btn-primary">Tambah admin</a>