<h1>Detail Transaksi</h1>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>NO</th>
			<th>ID Detail Transaksi</th>
			<th>Nama</th>
			<th>Provinsi </th>
			<th>Kota</th>
			<th>Alamat</th>
			<th>Berat Total</th>
			<th>Ongir</th>
			<th>Grand Total</th>
			<th>Status Bayar</th>
			
		</tr>

	</thead>
	<tbody>
		<?php  $no=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM dtl_transaksi "); ?>
		<?php while ($bagi = $ambil ->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $bagi['id_det_transaksi']; ?></td>
			<td><?php echo $bagi['nama']; ?></td>
			<td><?php echo $bagi['provinsi']; ?></td>
			<td><?php echo $bagi['kota']; ?></td>
			<td><?php echo $bagi['alamat']; ?></td>
			<td><?php echo $bagi['berat_total']; ?></td>
			<td><?php echo $bagi['ongkir']; ?></td>
			<td><?php echo $bagi['grand_total']; ?></td>
			<td><?php echo $bagi['status_bayar']; ?></td>
			

		</tr>
		<?php $no++; ?>
		<?php } ?>

	</tbody>

</table>
