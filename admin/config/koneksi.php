<?php
error_reporting(0);
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "kpredforce";

// $db_host = "103.254.153.95";
// $db_user = "crud9343_lola";
// $db_pass = "faishall";
// $db_name = "crud9343_redforce";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
?>