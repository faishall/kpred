<h1>Data Transaksi</h1>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>NO</th>
			<th>ID Transaksi</th>
			<th>ID Customer</th>
			<th>ID Barang </th>
			<th>Kuantitas</th>
			<th>Berat</th>
			<th>Total</th>
			<th>ID Detl Transaksi</th>
			<th>Tanggal Transaksi</th>
			<th>Aksi</th>
		</tr>

	</thead>
	<tbody>
		<?php  $no=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM tbl_transaksi "); ?>
		<?php while ($bagi = $ambil ->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $bagi['id_transaksi']; ?></td>
			<td><?php echo $bagi['id_customer']; ?></td>
			<td><?php echo $bagi['id_barang']; ?></td>
			<td><?php echo $bagi['kuantitas']; ?></td>
			<td><?php echo $bagi['berat']; ?></td>
			<td><?php echo $bagi['total']; ?></td>
			<td><?php echo $bagi['id_det_transaksi']; ?></td>
			<td><?php echo $bagi['tgl_transaksi']; ?></td>
			<td>
				<a href="main.php?halaman=hapuspemesanan&id=<?php echo $bagi['id_transaksi'];?>" class="btn-danger btn">Dalete</a>
				<a href="main.php?halaman=editpemesanani&id=<?php echo $bagi['id_transaksi'];?>" class="btn btn-warning">Edit</a>

				

			</td>

		</tr>
		<?php $no++; ?>
		<?php } ?>

	</tbody>

</table>
<a href="main.php?halaman=tambahtransaksi" class="btn btn-primary">Tambah Transaksi</a>