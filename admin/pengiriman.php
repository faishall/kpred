<h1>Pengiriaman</h1>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>NAMA</th>
			<th>Nomor Resi</th>
			<th>Aksi</th>

		</tr>
	</thead>
	<tbody>
		<tr>
			<form action="kirim.php" method="POST">
			<th>
				<select class="btn btn-primary" name="id">
				<?php 
				$ambilx=$koneksi->query("SELECT * FROM dtl_transaksi WHERE kode_pengiriaman = '' "); 
				while ($bagii = $ambilx ->fetch_assoc()){ ?>
					
						<option value="<?php echo $bagii['id_det_transaksi'];?>" ><?php echo $bagii['nama'];?></option>
				<? }?>
				</select>
			</th>
			<th><input type="text" class="form-control" id="input-payment-name" placeholder="Nomor Resi" value="" name="kode_pengiriaman"></th>
			<th> <input type="submit" class="btn btn-primary" id="button-confirm" value="KONFIRMASI PENGIRIRMAN"></th>

		</tr>
		</form>
	</tbody>
</table>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>NO</th>
			<th>ID Detail Transaksi</th>
			<th>Nama</th>
			<th>Status Bayar</th>
			<th>Nomor Resi Pengiriaman</th>

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
					<td><?php echo $bagi['status_bayar']; ?></td>
					<td><b><font color="#00a65a"><?php echo $bagi['kode_pengiriaman']; ?></font></b></td>
				</tr>
				<?php $no++; ?>

			<?php 

			if (isset($_GET['kode'])) 
			{
				$kode_pengiriaman=$_POST['kode_pengiriaman'];
				$id=$_POST['id'];

				$koneksi->query("UPDATE dtl_transaksi SET kode_pengiriaman='$kode_pengiriaman' WHERE id_det_transaksi = '$id' ");

			}
			?>
		<?php } ?>

	</tbody>

</table>
