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
			<th>Aksi</th>
			
		</tr>

	</thead>
	<tbody>
		<?php  $no=1; 
		 $ambil=$koneksi->query("SELECT * FROM dtl_transaksi"); 
		while ($bagi = $ambil ->fetch_assoc()){ ?>
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
				<td>
					<?php 
					if ($bagi['ver_v'] == 1) { 
						echo "<a href='_konfirmasi.php?kon=".$bagi['id_det_transaksi']."' class='btn btn-warning'>KONFIRMAIS</a>";
					}else {
						
						echo "<a href='' class='btn-danger btn'>SUKSES</a>";
					}
					 ?>
					

				</td>


			</tr>
			<?php $no++; ?>
		<?php } ?>

	</tbody>

</table>
