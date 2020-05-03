<?php
//error_reporting(E_ALL ^ E_NOTICE || E_WARNING);
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "mahasiswa");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


 ?>
