<?php
	session_start();
	if (isset($_SESSION)) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
</head>
<body>
	<form action="up.php" method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>
				Nama
			</td>
			<td>
				:
			</td>
			<td>
			<input type="text" name="nama">
		</td>
		<tr>
			<td>
				NIM
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="nim">
			</td>
		<tr>
			<td>
				Fakultas
			</td>
			<td>
				:
			</td>
			<td>
				<select name="fakultas" id="fakultas">
					<option>Fakultas Ilmu Terapan</option>
					<option>Fakultas Komunikasi Bisnis</option>
					<option>Fakultas Ekonomi Bisnis</option>
			</td>
		<tr>
			<td>
				Jenis Kelamin
			</td>
			<td>
				:
			</td>
			<td>
				<input type="radio" name="jeniskel" value="Laki-Laki">Laki-Laki
				<input type="radio" name="jeniskel" value="Perempuan">Perempuan
			</td>
		<tr>
			<td>
				File Gambar
			</td>
			<td>
				:
			</td>
			<td>
				<input type="file" name="filegbr" id="filegbr">
			</td>
		<tr>
			<td>
				<input type="submit" name="submit" value="KIRIM">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>
<?php
}else{
	header("Location: login.php");
}
?>