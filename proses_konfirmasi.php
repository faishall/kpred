<?php 
include 'admin/config/koneksi.php';
session_start();
if (isset($_POST['konfirm'])){
	$id = $_POST['trans'];
	$tempatfoto = 'images/confirm/';
	$namafile = $_FILES['bukti']['name'];
	$id_pembayaran= 'TRX'.date('yMdhis');
	$bank_asal=$_POST['bank-asal'];
	$no_rek=$_POST['rekening'];
	$nm_pengirim=$_POST['pengirim'];
	$jml=$_POST['jumlah'];
	$tgl=$_POST['tanggal'];

	$pembayaran=mysqli_query($koneksi, "INSERT INTO tbl_bayar (id_pembayaran, id_transaksi, id_customer, gambar, nama_pengirim, bank_asal, no_rekening, bank_tujuan, nominal, tgl_bayar) VALUES ('$id_pembayaran', '$id', '$_SESSION[id]', '$namafile', '$nm_pengirim', '$bank_asal', '$no_rek', '$bank_tujuan', '$jml', '$tgl')");
	move_uploaded_file($_FILES['bukti']['tmp_name'],$unduhfile);

	$konfirmasi=mysqli_query($koneksi, "UPDATE dtl_transaksi SET status_bayar='Sudah terbayar' WHERE id_det_transaksi='$id'");

/*apliaksi*/

	
	echo "<script>alert('Pembayaran Berhasil Dikonfirmasi');</script>";
	echo "<meta http-equiv='refresh' content='../'>";


}
?>