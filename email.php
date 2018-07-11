<?php
include "PHPMailer/PHPMailerAutoload.php";

$mail = new PHPMailer;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.togeso.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'admin@togeso.com';                 // SMTP username
$mail->Password = 'admin123#';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                

$mail->setFrom('coba@penting.web.id', 'Coba');

$mail->addAddress('faishalabrari@gmail.com', 'Panel Ku');

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Judulku ke 2 ya';
$mail->Body    = 'Ini menggunakan HTML <b>ini tebal!</b>';

if(!$mail->send()) 
{
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} 
else 
{
    echo 'terkirim';
}
?>