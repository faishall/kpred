<?php
include "PHPMailer/PHPMailerAutoload.php";

$mail = new PHPMailer;
$mail->isSMTP();                                     
$mail->Host = 'mail.cruwekch.com';  
$mail->SMTPAuth = true;                               
$mail->Username = 'redforce@cruwekch.com';                 
$mail->Password = '*faishal#';                           
$mail->SMTPSecure = 'tls';                            
$mail->Port = 587;                

$mail->setFrom('redforce@cruwekch.com', 'Coba');

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