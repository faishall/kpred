<?php
include "config/koneksi.php";


$cari=mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$_POST[username]'");
$ketemu=mysqli_num_rows($cari);
$sr=mysqli_fetch_array($cari);
if ($ketemu > 0)
{
	echo "
	<script language='javascript' type='text/javascript'>
	alert('Data dengan user $_POST[username] sudah terdaftar.');
	</script>
	<meta http-equiv='refresh' content='0; url=input_admin.php'>";
}
else
{
$tempatfoto = '../img/foto_adm/';
$namafile = $_FILES['foto_admin']['name'];

$pass=$_POST['password'];
	$pass1=md5($pass);

mysqli_query ($koneksi, "
INSERT INTO admin(username,nama,password,foto_admin) 
VALUES('$_POST[username]','$_POST[nama]','$pass1','$namafile')");
$unduhfile  = $tempatfoto.$namafile;
move_uploaded_file($_FILES['foto_admin']['tmp_name'],$unduhfile);
header('location:../home.php?p=view_admin');
}
?> 