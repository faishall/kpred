<h1>Laporan Transaksi</h1>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>NO</th>
			<th>Nama Barang</th>
			<th>Unit</th>
			<th>Harga Satuan</th>
			<th>Date Transaksi</th>
		</tr>

	</thead>
	<tbody>


		
		<?php $no=0; 
		$get = $_GET['bln'];
		$date = date('/m');
		if ($get == true) {

			$kuantitas=$koneksi->query("SELECT * ,SUM(kuantitas)as kuk,SUM(total)as tot, date_format(tgl_transaksi,'%Y %M') as cek FROM tbl_transaksi INNER JOIN tbl_barang ON tbl_transaksi.id_barang=tbl_barang.id_barang WHERE MONTH(tgl_transaksi)='$get' GROUP BY nama_barang");
		}else{

			$kuantitas=$koneksi->query("SELECT * ,SUM(kuantitas)as kuk,SUM(total)as tot, date_format(tgl_transaksi,'%Y') as cek FROM tbl_transaksi INNER JOIN tbl_barang ON tbl_transaksi.id_barang=tbl_barang.id_barang  GROUP BY nama_barang");

		}
		

		while ($bagi = $kuantitas ->fetch_array()){

			?>
			<tr>
				<td><?php $no++; echo $no; ?></td>
				<td><?php echo $bagi['nama_barang']; ?></td>
				<td><?php echo $bagi['kuk'] ?></td>
				<td>Rp. <?php echo $tot = $bagi['tot']; ?></td>
				<td><?php echo $bagi['cek'] ?></td>

			</tr>

		<?php } ?>
		

	</tbody>

</table>
<h3>Total : <? echo array_sum($tot); ?> </h3>
<form name="form" action="print.php" method="get">
	<select name="bln">
		<option selected="selected">BULAN</option>
		<?php
		$bln=array(1=>"Januari","Februari","Maret","April","Mei","Juni","July","Agustus","September","Oktober","November","Desember");
		for($bulan=1; $bulan<=12; $bulan++){
			if($bulan<=9) { echo "<option value='0$bulan'>$bln[$bulan]</option>"; }
			else { echo "<option value='$bulan'>$bln[$bulan]</option>"; }
		}
		?>

	</select><br><br><br> 
	<input class="btn btn-primary" type="submit" value="PRINT">

</form>