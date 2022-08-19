<?php
ob_start();
session_start();
require '../config/koneksi.php';
if(!isset($_SESSION['user_id'])) header("location: ../login.php");
$id = $_GET['id'];
$ex = mysqli_query($koneksi, "SELECT * FROM mobil WHERE id = '$id'");
$row_ex = mysqli_fetch_array($ex);

$list_asal = mysqli_query($koneksi, "SELECT * FROM list_kota ORDER BY nama_kota ASC");
$list_tujuan = mysqli_query($koneksi, "SELECT * FROM list_kota ORDER BY nama_kota ASC");
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>Tarif Pengiriman Mobil</title>
	<link rel="stylesheet" type="text/css" href="style/basic.css">
	<title>Update Tarif Kirim Mobil</title>
</head>
<body>

<div class="kotak" align="center">
	<h1 class="display-4">Input Tarif Kirim Mobil</h1>
	
	
	
	<div class="container">
	<form method="POST">
<hr>

<br><br>
	
	<div class="row mb-3">
	<div class="col">
		<label for="asal">Asal</label><br>
			<select name="asal" id="asal" class="form-control">
				<option><?php echo $row_ex['asal']; ?></option>
				<?php if (mysqli_num_rows($list_asal)){ ?>
			    <?php while ($row_asal = mysqli_fetch_array($list_asal)){ ?>
			    <option><?php echo $row_asal['nama_kota'];?></option>
			    <?php } ?>
			    <?php } ?>
			</select>
	</div><!-- baris satu -->
	<br>

	<div class="col">
		<label for="tujuan">Tujuan</label><br>
			<select name="tujuan" id="tujuan" class="form-control">
				<option><?php echo $row_ex['tujuan']; ?></option>
				<?php if (mysqli_num_rows($list_tujuan)){ ?>
			    <?php while ($row_tujuan = mysqli_fetch_array($list_tujuan)){ ?>
			    <option><?php echo $row_tujuan['nama_kota'];?></option>
			    <?php } ?>
			    <?php } ?>
			</select>
	</div><!-- baris dua -->
	<br>

	<div class="col">
			<label for="vendor">Vendor</label><br>
			<input type="text" class="form-control" name="vendor" id="vendor" min="20" max="40" required="" value="<?php echo $row_ex['vendor']; ?>"> 
		</div><!-- baris empat -->

	
	

	
	</div><!-- row1 -->
 
	<!-- ============================================================================== -->


	<div class="row mb-5">
	    
	    <div class="col">
	<label for="leadtime">Lead Time</label><br>
	<input type="text" name="leadtime" class="form-control" id="leadtime" required="" value="<?php echo $row_ex['leadtime']; ?>"> 
	</div><!-- baris empat -->
		
	<div class="col">
		<label for="modal">Modal</label><br>
		<input type="number" class="form-control" id="modal" name="modal" required="" value="<?php echo $row_ex['modal']; ?>">
	</div><!-- baris tiga -->
	
	<div class="col">
		<label for="modal">Harga Jual</label><br>
		<input type="number" class="form-control" id="jual" name="jual" required="" value="<?php echo $row_ex['jual']; ?>">
	</div><!-- baris tiga -->


	</div><!-- row2 -->

	<div class="baris lima">
	<input type="submit" name="update" value="Update" class="btn btn-primary">
	</div><!-- baris lima -->
	</form>
	</div>
	<br>
	<hr>
	<a class="btn btn-warning mt-3" href="tabel_harga.php">Tabel Tarif Kirim Mobil</a>
	<br>
	<br>
<?php 

	if (isset($_POST['update'])) {
		$asal = $_POST['asal'];
		$tujuan = $_POST['tujuan'];
		$vendor = $_POST['vendor'];
		$leadtime = $_POST['leadtime'];
		$modal = $_POST['modal'];
		$jual = $_POST['jual'];
		$input_date = date('l, d-M-Y');

		mysqli_query($koneksi, "UPDATE mobil SET asal = '$asal', tujuan = '$tujuan', vendor = '$vendor', leadtime = '$leadtime', modal = '$modal', jual = '$jual', input_date = '$input_date' WHERE id = '$id' ");

		$modal_read = number_format($modal);
		$jual_read = number_format($jual);
		
		echo "Data berhasil disunting ! <br>";


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
		</div>


		<?php } ?>
		<br>

 </div><!-- kotak -->

</body>
</html>

<?php 
mysqli_close($koneksi);
ob_end_flush();
 ?>