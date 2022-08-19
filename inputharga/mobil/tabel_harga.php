<?php 
ob_start();
session_start();
require '../config/koneksi.php';
if(!isset($_SESSION['user_id'])) header("location: ../login.php");

$baca_harga = mysqli_query($koneksi, "SELECT * FROM mobil ORDER BY id DESC");

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <script type="text/javascript" src="//code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../style/basic.css">
	<title>Tabel Harga Pengiriman Mobil</title>
</head>
<body>

<div class="kotak" align="center">
<h1>Data Harga Pengiriman Mobil</h1>
	<a href="index.php">Input Harga</a>
		<br><br>
		<table id="mytable" class="display">
			<thead>
				<tr>
					<th>Asal</th>
					<th>Tujuan</th>
					<th>Vendor</th>
					<th>Lead Time</th>
					<th>Modal</th>
					<th>Harga</th>
					<th>Tanggal Input</th>
					<th>Action</th>
				</tr>
			</thead>

			<tbody>
				<?php if (mysqli_num_rows($baca_harga)){ ?>
        <?php while ($row_harga = mysqli_fetch_array($baca_harga)){ 
        	$raw_modal = $row_harga['modal'];
					$raw_jual = $row_harga['jual'];

					$modal = number_format($raw_modal);
					$jual = number_format($raw_jual);
        ?>
				<tr>
					<td><?php echo $row_harga['asal']; ?></td>
					<td><?php echo $row_harga['tujuan']; ?></td>
					<td><?php echo $row_harga['vendor']; ?></td>
					<td><?php echo $row_harga['leadtime']; ?></td>
					<td>Rp. <?php echo $modal ?></td>
					<td>Rp. <?php echo $jual ?></td>
					<td><?php echo $row_harga['input_date']; ?></td>
					<td>
						<a href="update.php?id=<?= $row_harga['id']; ?>">Edit</a>
						|
           	<a href="delete.php?id=<?php echo $row_harga['id'] ?>">Delete</a>
					</td>
				</tr>
				<?php } ?>
        <?php } ?>
			</tbody>
		</table>

		<script type="text/javascript">
        $(document).ready(function() 
        { $('#mytable').DataTable(); });
    </script>

</div><!-- kotak -->
</body>
</html>

<?php 
mysqli_close($koneksi);
ob_end_flush();
 ?>
