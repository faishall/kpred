<?php
$koneksi = new mysqli("localhost","root","","kpredforce");
	$pass=$_POST['password'];
	$pass1=md5($pass);
	$login=mysqli_query($koneksi, "SELECT * FROM tbl_admin WHERE username='$_POST[username]' AND password='$pass1'");
	$ketemu=mysqli_num_rows($login);
	$r=mysqli_fetch_array($login);
	if($ketemu > 0)
	{
	session_start();
		$_SESSION[username] = $r[username];
		$_SESSION[password] = $r[password];
	header('location:main.php');
	}
		else
	{
		echo"
		<html>
			<body>
				Login Anda Gagal!
				<a href='index.php'>Ulangi Login</a>
			</body>
		</html>
		";
	}
?>