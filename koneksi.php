<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "dbsmartkopi";

$koneksi = mysqli_connect($host, $username, $password, $db_name);

if ($koneksi) {

} else {
	echo "Koneksi gagal";
}
?>