<?php 

include 'config/koneksi.php';
$id = $_GET['id'];

$ambil=$koneksi->query("SELECT * FROM tbl_customer JOIN dtl_transaksi ON tbl_customer.nama=dtl_transaksi.nama WHERE id_det_transaksi='$id'"); 
$bagi = $ambil ->fetch_assoc();

$email = $bagi['email'];

$nama = $bagi['nama'];

include '../PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

// Konfigurasi SMTP
$mail = new PHPMailer;
$mail->isSMTP();                                     
$mail->Host = 'mail.cruwekch.com';  
$mail->SMTPAuth = true;                               
$mail->Username = 'redforce@cruwekch.com';                 
$mail->Password = '*faishal#';                           
$mail->SMTPSecure = 'tls';                            
$mail->Port = 587;    

$mail->setFrom('redforce@cruwekch.com', 'Redforce Komputer');

// Menambahkan penerima
$mail->addAddress(''.$email.'');

// Subjek email
$mail->Subject = 'Redforce Komputer';

// Mengatur format email ke HTML
$mail->isHTML(true);

// Konten/isi email
$mailContent = "<h3>Laporan Konfirmasi Pembayaran</h3>
<p>Trimakasi Telah bergabung degan kami<br>
Transaksi degan <br> Nama ".$nama." <br> ID Transaksi : ".$id." <br>Sudah kami terimah dan Kami akan segerah memproses pengiriman Tunggu Konfirmasi dari kami Trimakasi</p>";
$mail->Body = $mailContent;


// Kirim email
if(!$mail->send()){
	echo "<script>alert('Email Tidak terkirim');window.location = 'main.php?halaman=detailtransaksi';</script>";
	exit();
		// echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
	echo "<script>alert('Pembayaran dan Pengiriman Berhasil Dikonfirmasi pada customer');window.location = 'main.php?halaman=detailtransaksi';</script>";
}

?>