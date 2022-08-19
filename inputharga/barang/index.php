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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style/basic.css">
	<title>Input Tarif Pengiriman Barang</title>
</head>
<body>
<div class="container" align="center">
	<h1 class="display-4">Tarif Pengiriman Barang</h1>
	
	<br><br>
	<form method="POST" action="index.php">

<div class="row">
	<div class="col">
		<select name="asal" class="form-control">
			<option>Asal</option>
			<?php if (mysqli_num_rows($list_asal)){ ?>
	    <?php while ($row_asal = mysqli_fetch_array($list_asal)){ ?>
	    <option><?php echo $row_asal['nama_kota'];?></option>
	    <?php } ?>
	    <?php } ?>
		</select>
	</div>

	<div class="col">
		<select name="tujuan" class="form-control">
			<option>Tujuan</option>
			<?php if (mysqli_num_rows($list_tujuan)){ ?>
	    <?php while ($row_tujuan = mysqli_fetch_array($list_tujuan)){ ?>
	    <option><?php echo $row_tujuan['nama_kota'];?></option>
	    <?php } ?>
	    <?php } ?>
		</select>
	</div>

	<div class="col">
		<input type="text" name="vendor" placeholder="Vendor" required="" class="form-control">	
	</div>
	
	<div class="col">
		<input type="text" name="leadtime" placeholder="Lead Time" required="" class="form-control">
	</div>

	<div class="col">
		<input type="number" name="modal" placeholder="Modal" required="" class="form-control">
	</div>

	<div class="col">
		<input type="number" name="margin" placeholder="Margin" min="20" max="40" required="" class="form-control">
	</div>

	<div class="col" align="left">
		<input type="submit" name="submit" value="Hitung" class="btn btn-primary">
	</div>
	
	</div><!-- row -->
	</form>
	<br>


<?php 

	if (isset($_POST['submit'])) {
		$asal = $_POST['asal'];
		$tujuan = $_POST['tujuan'];
		$vendor = $_POST['vendor'];
		$leadtime = $_POST['leadtime'];
		$modal = $_POST['modal'];
		$margin = $_POST['margin'];
		$jual = $modal*$margin/100+$modal;
		$input_date = date('l, d-M-Y');

		mysqli_query($koneksi, "INSERT INTO harga_barang VALUES('','$asal','$tujuan','$vendor','$leadtime','$modal','$margin','$jual','$input_date')");

		$modal_read = number_format($modal);
		$jual_read = number_format($jual);
		
		echo "Data berhasil disimpan !";

		?>
		<br>
		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>Asal</th>
					<th>Tujuan</th>
					<th>Vendor</th>
					<th>Lead Time</th>
					<th>Modal</th>
					<th>Margin</th>
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
					<td><?php echo $margin; ?> %</td>
					<td>Rp. <?php echo $jual_read; ?></td>
				</tr>
			</tbody>
		</table>


		<?php } ?>
		<a href="tabel_harga.php" class="btn btn-primary">Tabel Tarif</a>
		<a href="../" class="btn btn-warning">Menu</a>
		<br>
 </div><!-- kotak -->


</body>
</html>

<?php 
mysqli_close($koneksi);
ob_end_flush();
 ?>