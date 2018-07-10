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

	$view = mysqli_query($koneksi, "SELECT * FROM tbl_transaksi WHERE id_det_transaksi='$id'");
	$row = $view->fetch_array();

	$barang = mysqli_query($koneksi, "SELECT * FROM tbl_barang WHERE id_barang='$row[id_barang]'");
	$rxx = $barang->fetch_array();

	$dtl_transaksi = mysqli_query($koneksi, "SELECT * FROM tbl_transaksi WHERE id_det_transaksi='$id'");
	$dtl = $dtl_transaksi->fetch_array(); 


	$stok1 = $dtl['kuantitas'];
	$stok2 = $rxx['stok'];
	$stok = $stok2 - $stok1 ;

	mysqli_query($koneksi, "UPDATE tbl_barang SET stok='$stok' WHERE id_barang='$row[id_barang]'");
	

	$konfirmasi=mysqli_query($koneksi, "UPDATE dtl_transaksi SET status_bayar='Sudah Terbayar' WHERE id_det_transaksi='$id'");


	$vw = mysqli_query($koneksi, "SELECT * FROM dtl_transaksi WHERE id_det_transaksi='$id'");
	$rowx = $vw->fetch_array();
	$nama = $rowx['nama'];

	/*apliaksi*/

	// header("location:index.");


	require 'PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;

// Konfigurasi SMTP
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'redforce1410@gmail.com';
	$mail->Password = 'adminredforce@';
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;

	$mail->setFrom('redforce1410@gmail.com', 'Admin Redforce');

// Menambahkan penerima
	$mail->addAddress('redforce1410@gmail.com');

// Menambahkan beberapa penerima
//$mail->addAddress('penerima2@contoh.com');
//$mail->addAddress('penerima3@contoh.com');

// Menambahkan cc atau bcc 
	// $mail->addCC('cc@contoh.com');
	// $mail->addBCC('bcc@contoh.com');

// Subjek email
	$mail->Subject = 'Laporan Transaksi Redforce-Komputer';

// Mengatur format email ke HTML
	$mail->isHTML(true);

// Konten/isi email
	$mailContent = "<h3>Laporan Konfirmasi Transaksi</h3>
	<p>Transaki degan Nama : $nama <br> ID Detail Transaksi : $id <br> sudah Dikonfirmasi</p>";
	$mail->Body = $mailContent;


// Kirim email
	if(!$mail->send()){
		echo 'Pesan tidak dapat dikirim.';
		// echo 'Mailer Error: ' . $mail->ErrorInfo;
	}else{
		echo "<script>alert('Pembayaran Berhasil Dikonfirmasi');window.location = 'index.php';</script>";
	}

}
?>