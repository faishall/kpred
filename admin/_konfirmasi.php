<?php 
include 'config/koneksi.php';
$id = $_GET['kon'];
mysqli_query($koneksi, "UPDATE dtl_transaksi SET ver_v='0' WHERE id_det_transaksi='$_GET[kon]'");


	

// 	$vw = mysqli_query($koneksi, "SELECT * FROM dtl_transaksi WHERE id_det_transaksi='$id'");
// 	$rowx = $vw->fetch_array();

// 	// $vwx = mysqli_query($koneksi, "SELECT * FROM dtl_customer WHERE nama='$rowx[nama]'");
// 	// $row = $vwx->fetch_array();


// 	require '../PHPMailer/PHPMailerAutoload.php';
// 	$mail = new PHPMailer;

// // Konfigurasi SMTP
// 	$mail->isSMTP();
// 	$mail->Host = 'smtp.gmail.com';
// 	$mail->SMTPAuth = true;
// 	$mail->Username = 'redforce1410@gmail.com';
// 	$mail->Password = 'adminredforce@';
// 	$mail->SMTPSecure = 'tls';
// 	$mail->Port = 587;

// 	$mail->setFrom('redforce1410@gmail.com', 'Admin Redforce');

// // Menambahkan penerima
// 	$mail->addAddress('faishalabrari@gmail.com');

// // Menambahkan beberapa penerima
// //$mail->addAddress('penerima2@contoh.com');
// //$mail->addAddress('penerima3@contoh.com');

// // Menambahkan cc atau bcc 
// 	// $mail->addCC('cc@contoh.com');
// 	// $mail->addBCC('bcc@contoh.com');

// // Subjek email
// 	$mail->Subject = 'Redforce Komputer';

// // Mengatur format email ke HTML
// 	$mail->isHTML(true);

// // Konten/isi email
// 	$mailContent = "<h3>Laporan Konfirmasi Transaksi</h3>
// 	<p>Transaki degan <br> 	Nama : $rowx['nama'] <br> ID Detail Transaksi : $id <br> <b>Sudah Dikirim</b></p>";
// 	$mail->Body = $mailContent;


// // Kirim email
// 	if(!$mail->send()){
// 		echo 'Pesan tidak dapat dikirim.';
// 		// echo 'Mailer Error: ' . $mail->ErrorInfo;
// 	}else{
		echo "<script>alert('Pembayaran Berhasil Dikonfirmasi');window.location = 'main.php?halaman=detailtransaksi';</script>";
	// }

	

?>