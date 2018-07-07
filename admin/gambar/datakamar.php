<h1>Data kamar</h1>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nomor Kamar</th>
			<th>Jenis Fasilitas</th>
			<th>Harga Sewa</th>
			<th>Status</th>
			
		</tr>

	</thead>
	<tbody>
		<?php  $no=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM produk "); ?>
		<?php while ($bagi = $ambil ->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $bagi['no_kamar']; ?></td>
			<td><?php echo $bagi['jenis_kamar']; ?></td>
			<td><?php echo $bagi['harga']; ?></td>
			<td><?php echo $bagi['status']; ?></td>
			

		</tr>
		<?php $no++; ?>
		<?php } ?>

	</tbody>

</table>
