<?php
$host = 'localhost';
$database = 'login';
$nama = 'root';
$pass = '';

$koneksi =mysqli_connect($host,$nama,$pass,$database);
if (mysqli_connect_errno())
{
	echo 'Gagal terhubung :'.mysqli_connect_error(); 
}
else {
	
}

?>