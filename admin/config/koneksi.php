<?php
error_reporting(0);
// $db_host = "localhost";
// $db_user = "root";
// $db_pass = "";
// $db_name = "kpredforce";

$db_host = "103.253.212.166";
$db_user = "togm7442_tiktok";
$db_pass = "tiktok123#";
$db_name = "togm7442_Redforce";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
?>