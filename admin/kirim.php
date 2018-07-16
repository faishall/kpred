<?php 
include 'config/koneksi.php';


$ambil=$koneksi->query("SELECT * FROM tbl_customer JOIN dtl_transaksi ON tbl_customer.nama=dtl_transaksi.nama WHERE id_det_transaksi='$_POST[id]'"); 
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
$mailContent = "<h3>Laporan Konfirmasi Pengiriman</h3>
<p>Trimakasi Telah bergabung degan kami<br>
Transaksi degan <br> Nama ".$nama." <br> Kode Pengiriman : ".$_POST['kode_pengiriaman']." <br>Akan kami segerah kirim ke Alamat Setempat</p>";
$mail->Body = $mailContent;


// Kirim email
if(!$mail->send()){
	echo "<script>alert('Email Tidak terkirim');window.location = 'main.php?halaman=detailtransaksi';</script>";
	exit();
		// echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
	mysqli_query($koneksi, "UPDATE dtl_transaksi SET kode_pengiriaman='$_POST[kode_pengiriaman]' WHERE id_det_transaksi='$_POST[id]'");
	echo "<script>alert('Pembayaran dan Pengiriman Berhasil Dikonfirmasi pada customer');window.location = 'main.php?halaman=pengiriman';</script>";
}

?>