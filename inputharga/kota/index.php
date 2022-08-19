<?php
ob_start();
session_start();
require '../config/koneksi.php';
if(!isset($_SESSION['user_id'])) header("location: ../login.php");
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../style/basic.css">
	<title>Tambah Kota</title>
</head>
<body>

<div class="kotak" align="center">
	<h1 class="display-4">Tambah Nama Kota</h1>
	<br><br>
	<form method="POST">
		<div class="container" style="width: 20%">
			<input type="text" name="nama_kota" placeholder="Nama Kota" required="" class="form-control">
			<br>
			<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
		</div>	
	</form>
	<br>
	<a href="../index.php">Menu</a><br>

	<?php 
		if (isset($_POST['submit'])) {
		$nama_kota = $_POST['nama_kota'];

		mysqli_query($koneksi, "INSERT INTO list_kota VALUES('','$nama_kota')");
		echo "Nama kota berhasil ditambahkan";
		}
	?>

</div>

</body>
</html>

<?php 
mysqli_close($koneksi);
ob_end_flush();
 ?>