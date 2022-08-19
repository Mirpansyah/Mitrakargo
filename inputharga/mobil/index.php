<?php
ob_start();
session_start();
require '../config/koneksi.php';
if(!isset($_SESSION['user_id'])) header("location: ../login.php");
date_default_timezone_set('Asia/Jakarta');


$list_asal = mysqli_query($koneksi, "SELECT * FROM list_kota ORDER BY nama_kota ASC");
$list_tujuan = mysqli_query($koneksi, "SELECT * FROM list_kota ORDER BY nama_kota ASC");
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../style/basic.css">
	<link rel="stylesheet" type="text/css" href="ff.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>Tarif Pengiriman Mobil</title>
	<style>
		.col {
			margin-right: 1em;
		}


	</style>
</head>
<body>
<div class="kotak" align="center">
	<h1 class="display-4">Tarif Pengiriman Mobil</h1>
	<br><br>
	<form method="POST" action="">
		<div class="container">
		<div class="row mb-3">

	<select name="asal" class="form-control col">
		<option>Asal</option>
		<?php if (mysqli_num_rows($list_asal)){ ?>
    <?php while ($row_asal = mysqli_fetch_array($list_asal)){ ?>
    <option><?php echo $row_asal['nama_kota'];?></option>
    <?php } ?>
    <?php } ?>
	</select>

	<select name="tujuan" class="form-control col">
		<option>Tujuan</option>
		<?php if (mysqli_num_rows($list_tujuan)){ ?>
    <?php while ($row_tujuan = mysqli_fetch_array($list_tujuan)){ ?>
    <option><?php echo $row_tujuan['nama_kota'];?></option>
    <?php } ?>
    <?php } ?>
	</select>
	
	<input type="text" name="vendor" placeholder="Vendor" required="" class="form-control col">
    
    </div><!-- row1 -->

	
	<div class="row mb-3">
	    
	    <input type="text" name="leadtime" placeholder="Lead Time" required="" class="form-control col">
	    
		<input type="number" name="modal" placeholder="Modal" required="" class="form-control col">

		<input type="number" name="jual" placeholder="Harga Jual" required="" class="form-control col">
		
	</div>
	<input type="submit" name="submit" value="Hitung" class="btn btn-primary">
	</div><!-- container -->
	</form>
	<br>


<?php 

	if (isset($_POST['submit'])) {
		$asal = $_POST['asal'];
		$tujuan = $_POST['tujuan'];
		$vendor = $_POST['vendor'];
		$leadtime = $_POST['leadtime'];
		$modal = $_POST['modal'];
		$jual = $_POST['jual'];
		$input_date = date('l, d-M-Y');

		mysqli_query($koneksi, "INSERT INTO mobil VALUES('','$asal', '$tujuan', '$vendor', '$leadtime', '$modal', $jual, '$input_date')");

		$modal_read = number_format($modal);
		$jual_read = number_format($jual);
		
		echo "Data berhasil disimpan !";

		?>
		<br>
		<div class="container">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Asal</th>
					<th>Tujuan</th>
					<th>Vendor</th>
					<th>Lead Time</th>
					<th>Modal</th>
					<th>Jual</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td><?php echo $asal; ?></td>
					<td><?php echo $tujuan; ?></td>
					<td><?php echo $vendor; ?></td>
					<td><?php echo $leadtime; ?></td>
					<td>Rp. <?php echo $modal_read; ?></td>
					<td>Rp. <?php echo $jual_read; ?></td>
				</tr>
			</tbody>
		</table>
	</div><!-- container -->


		<?php } ?>
<hr class="container">
<a href="tabel_harga.php" class="btn btn-info">Tabel Tarif Kirim Mobil</a>
<a href="../" class="btn btn-primary">Menu</a>
 </div><!-- kotak -->

 
</body>
</html>

<?php 
mysqli_close($koneksi);
ob_end_flush();
 ?>
