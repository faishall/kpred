<?php
// error_reporting(0);
$koneksi = new mysqli("localhost","root","","kpredforce");
// include_once 'admin/config/koneksi.php';
	$pass=$_POST['pass'];
	$pass1=md5($pass);
	$login=mysqli_query($koneksi, "SELECT * FROM tbl_customer WHERE email='$_POST[email]' AND password='$pass1'");
	$ketemu=mysqli_num_rows($login);
	$r=mysqli_fetch_array($login);
	if($ketemu > 0)
	{
	session_start();
		$_SESSION[email] = $r[email];
		$_SESSION[password] = $r[password];
		$_SESSION[id] = $r[id_customer];
		$_SESSION[nama] = $r[nama];
	
	// header("location:home_user.php?user=$r[id_customer]");
		echo "<script>alert('Login berhasil! Selamat berbelanja.')</script>";
		echo "<script>window.location=history.go(-1);</script>";
	}
		else
	{
	echo "<script>alert('Username atau Password salah');window.history.go(-1);</script>";
// echo "<meta http-equiv='refresh' content='2' url=login.php'>";
	}
?>