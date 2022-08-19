<?php
ob_start();
session_start();
require '../config/koneksi.php';
if(!isset($_SESSION['user_id'])) header("location: ../login.php");
$id = $_GET['id'];
$ex = mysqli_query($koneksi, "SELECT * FROM harga_barang WHERE id = '$id'");
$row_ex = mysqli_fetch_array($ex);

$list_asal = mysqli_query($koneksi, "SELECT * FROM list_kota ORDER BY nama_kota ASC");
$list_tujuan = mysqli_query($koneksi, "SELECT * FROM list_kota ORDER BY nama_kota ASC");
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../style/basic.css">
	<title>Update Harga</title>
</head>
<body>

<div class="kotak" align="center">
	<h1 class="display-4">Input Harga</h1>
	<a href="tabel_harga.php">Cancel</a></span></a>
	
	<br><br>
	<form method="POST">
		<div class="container" style="width: 30%;">


		<div class="baris satu">
			<label>Asal</label>
				<select name="asal" class="form-control">
					<option><?php echo $row_ex['asal']; ?></option>
					<?php if (mysqli_num_rows($list_asal)){ ?>
				    <?php while ($row_asal = mysqli_fetch_array($list_asal)){ ?>
				    <option><?php echo $row_asal['nama_kota'];?></option>
				    <?php } ?>
				    <?php } ?>
				</select>
		</div><!-- baris satu -->
		<br>

		<div class="baris dua" class="form-control">
			<label>Tujuan</label>
				<select name="tujuan" class="form-control">
					<option><?php echo $row_ex['tujuan']; ?></option>
					<?php if (mysqli_num_rows($list_tujuan)){ ?>
				    <?php while ($row_tujuan = mysqli_fetch_array($list_tujuan)){ ?>
				    <option><?php echo $row_tujuan['nama_kota'];?></option>
				    <?php } ?>
				    <?php } ?>
				</select>
		</div><!-- baris dua -->
		<br>


		<div class="baris dua-dua">
			<label>Vendor</label>
			<input type="text" name="vendor" required="" value="<?php echo $row_ex['vendor']; ?>" class="form-control">
		</div>
		<br>

		<div class="baris dua-tiga">
			<label>Lead Time</label>
			<input type="text" name="leadtime" required="" value="<?php echo $row_ex['leadtime']; ?>" class="form-control">
		</div>
		<br>

		<div class="baris tiga">
			<label>Rp. Modal</label>
			<input type="number" name="modal" class="form-control" required="" value="<?php echo $row_ex['modal']; ?>">
		</div><!-- baris tiga -->
		<br>

		<div class="baris empat">
		<label>Margin %</label>
		<input type="number" name="margin" class="form-control" min="20" max="40" required="" value="<?php echo $row_ex['margin']; ?>">
		</div><!-- baris empat -->
		<br>

		<div class="baris lima">
		<input type="submit" name="update" value="Update" class="btn btn-primary">
		</div><!-- baris lima -->
		</div>
	</form>
	<br><br>
	


<?php 

	if (isset($_POST['update'])) {
		$asal = $_POST['asal'];
		$tujuan = $_POST['tujuan'];
		$vendor = $_POST['vendor'];
		$leadtime = $_POST['leadtime'];
		$modal = $_POST['modal'];
		$margin = $_POST['margin'];
		$jual = $modal*$margin/100+$modal;

		$input_date = date('l, d-M-Y');

		mysqli_query($koneksi, "UPDATE harga_barang SET asal = '$asal', tujuan = '$tujuan', vendor = '$vendor', leadtime = '$leadtime', modal = '$modal', margin = '$margin', jual = '$jual', input_date = '$input_date' WHERE id = '$id' ");

		$modal_read = number_format($modal);
		$jual_read = number_format($jual);
		
		echo "Data berhasil disunting !";
		?>
		<br>
		<div class="container" style="width: 50%;">
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
	</div><!-- container table -->
		<br>
		<a href="tabel_harga.php" class="btn btn-info">Lihat Table</a>


		<?php } ?>

 </div><!-- kotak -->

</body>
</html>

<?php 
mysqli_close($koneksi);
ob_end_flush();
 ?>