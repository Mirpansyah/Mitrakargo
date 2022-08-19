w<?php
ob_start();
session_start();
require '../config/koneksi.php';
if(!isset($_SESSION['user_id'])) header("location: ../login.php");
$id = $_GET['id'];
$ex = mysqli_query($koneksi, "SELECT * FROM frozen_food WHERE id = '$id'");
$row_ex = mysqli_fetch_array($ex);

$list_asal = mysqli_query($koneksi, "SELECT * FROM list_kota ORDER BY nama_kota ASC");
$list_tujuan = mysqli_query($koneksi, "SELECT * FROM list_kota ORDER BY nama_kota ASC");
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/basic.css">
	<title>Update Harga</title>
</head>
<body>

<div class="kotak" align="center">
	<h1>Input Harga</h1>
	<a>Batal ? <span><a href="tabel_harga.php">Tabel Harga</a></span></a>
	
	<br><br>
	<form method="POST">

	<div class="baris satu">
		<label>Asal</label><br>
			<select name="asal">
				<option><?php echo $row_ex['asal']; ?></option>
				<?php if (mysqli_num_rows($list_asal)){ ?>
			    <?php while ($row_asal = mysqli_fetch_array($list_asal)){ ?>
			    <option><?php echo $row_asal['nama_kota'];?></option>
			    <?php } ?>
			    <?php } ?>
			</select>
	</div><!-- baris satu -->
	<br>

	<div class="baris dua">
		<label>Tujuan</label><br>
			<select name="tujuan">
				<option><?php echo $row_ex['tujuan']; ?></option>
				<?php if (mysqli_num_rows($list_tujuan)){ ?>
			    <?php while ($row_tujuan = mysqli_fetch_array($list_tujuan)){ ?>
			    <option><?php echo $row_tujuan['nama_kota'];?></option>
			    <?php } ?>
			    <?php } ?>
			</select>
	</div><!-- baris dua -->
	<br>

	<div class="baris tiga">
		<label>Modal</label><br>
		Rp. <input type="number" name="modal" required="" value="<?php echo $row_ex['modal']; ?>">
	</div><!-- baris tiga -->
	<br>

	<div class="baris empat">
	<label>Margin</label><br>
	<input type="number" name="margin" min="20" max="40" required="" value="<?php echo $row_ex['margin']; ?>"> %
	</div><!-- baris empat -->
	<br>

	<div class="baris lima">
	<input type="submit" name="update" value="Update">
	</div><!-- baris lima -->
	</form><br>
	


<?php 

	if (isset($_POST['update'])) {
		$asal = $_POST['asal'];
		$tujuan = $_POST['tujuan'];
		$modal = $_POST['modal'];
		$margin = $_POST['margin'];
		$jual = $modal*$margin/100+$modal;
		$input_time = date('H:i:s a');
		$input_date = date('l, d-M-Y');

		mysqli_query($koneksi, "UPDATE frozen_food SET asal = '$asal', tujuan = '$tujuan', modal = '$modal', margin = '$margin', jual = '$jual', input_time = '$input_time', input_date = '$input_date' WHERE id = '$id' ");

		$modal_read = number_format($modal);
		$jual_read = number_format($jual);
		
		echo "Data berhasil disunting !";

		?>
		<br>
		<table border="">
			<thead>
				<tr>
					<th>Asal</th>
					<th>Tujuan</th>
					<th>Modal</th>
					<th>Margin</th>
					<th>Jual</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td><?php echo $asal; ?></td>
					<td><?php echo $tujuan; ?></td>
					<td>Rp. <?php echo $modal_read; ?></td>
					<td><?php echo $margin; ?> %</td>
					<td>Rp. <?php echo $jual_read; ?></td>
				</tr>
			</tbody>
		</table>


		<?php } ?>
		<br>

 </div><!-- kotak -->

</body>
</html>

<?php 
mysqli_close($koneksi);
ob_end_flush();
 ?>