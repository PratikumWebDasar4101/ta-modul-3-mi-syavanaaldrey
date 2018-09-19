<?php 
session_start();
if (isset($_SESSION["username"])) {
	include("kon.php");

	$nama = $_POST["nama"];
	$nim = $_POST["nim"];
	$fakultas = $_POST["fakultas"];
	$jenkel = $_POST["jeniskel"];

	$dir = "ta3/";
	$nama_file = $_FILES["filegbr"]["name"];
	$nama_file_tmp = $_FILES["filegbr"]["tmp_name"];
	$target_file = $dir . $nama_file;

	$sql = "INSERT into user values('$nim','$nama','$fakultas','$jenkel','$nama_file');";

	if (mysqlI_query($conn, $sql) and move_uploaded_file($nama_file_tmp, $target_file)) {
		echo "Data anda telah berhasil disimpan";
	}else {
		echo "Terjadi Kesalahan";
	}
}else {
	header("Location: login.php");
}
?>