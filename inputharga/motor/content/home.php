<?php
$stok_asal = mysqli_query($koneksi, "SELECT * FROM list_kota ORDER BY nama_kota ASC");
$stok_tujuan = mysqli_query($koneksi, "SELECT * FROM list_kota ORDER BY nama_kota ASC");
?>
<h1>Input Tarif Motor</h1>
<form method="POST">
		<br>
			<div class="">
				<select name="asal">
					<option>Asal</option>
					<?php if (mysqli_num_rows($stok_asal)){ ?>
       			<?php while ($row_kota = mysqli_fetch_array($stok_asal)){ ?>
         	<option><?php echo $row_kota['nama_kota'];?></option>
                <!-- Value nama_kota adalah nama_kota nya -->
             	<?php } ?>
             	<?php } ?>
				</select>
				<select name="tujuan">
					<option>Tujuan</option>
					<?php if (mysqli_num_rows($stok_tujuan)){ ?>
       			<?php while ($row_kota = mysqli_fetch_array($stok_tujuan)){ ?>
         	<option><?php echo $row_kota['nama_kota'];?></option>
                <!-- Value nama_kota adalah nama_kota nya -->
             	<?php } ?>
             	<?php } ?>
				</select>
				
				<input type="text" name="vendor" placeholder="Vendor" required="">
				
			<select name="jenis">
				<option>Jenis Motor</option>
				<option>Di Bawah 135cc</option>
				<option>Di Atas 135cc</option>
				<option>Di Atas 200cc</option>
			</select>
		</div>
		<br>
		<div class="">
			<input type="number" name="modal" placeholder="Modal Rp." required="">
			<input type="number" name="margin" placeholder="Margin %" required="">
		</div>
		<br>
		<input type="submit" name="submit" value="Kirim">
	</form>

<?php

if (isset($_POST['submit'])) {
	$asal = $_POST['asal'];
	$tujuan = $_POST['tujuan'];
	$vendor = $_POST['vendor'];
	$jenis = $_POST['jenis'];
	$modal = $_POST['modal'];
	$margin = $_POST['margin'];
	$jual = $modal*$margin/100+$modal;
	$input_time = date('H:i:s a');
	$input_date = date('l, d-M-Y');
	
	if ($asal !== "Asal" && $tujuan !== "Tujuan" && $jenis !== "Jenis Motor") {
		
	if ($jenis == "Di Bawah 135cc") {
		mysqli_query($koneksi, "INSERT INTO motor_kecil VALUES('','$asal','$tujuan','$vendor','$jenis','$modal','$margin','$jual','$input_time','$input_date')");
	
	} elseif ($jenis == "Di Atas 135cc") {
		mysqli_query($koneksi, "INSERT INTO motor_sedang VALUES('','$asal','$tujuan','$vendor','$jenis','$modal','$margin','$jual','$input_time','$input_date')");
	
	}	elseif ($jenis == "Di Atas 200cc") {
		mysqli_query($koneksi, "INSERT INTO motor_besar VALUES('','$asal','$tujuan','$vendor','$jenis','$modal','$margin','$jual','$input_time','$input_date')");

	}

	?>
	<br>
	<table border="1" align="center">
		<thead>
			<tr>
				<th>Asal</th>
				<th>Tujuan</th>
				<th>Vendor</th>
				<th>Jenis Motor</th>
				<th>Modal</th>
				<th>Margin</th>
				<th>Harga Jual</th>
				<th>Waktu Input</th>
				<th>Hari & Tanggal Input</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td><?php echo $asal; ?></td>
				<td><?php echo $tujuan; ?></td>
				<td><?php echo $vendor; ?></td>
				<td><?php echo $jenis; ?></td>
				<td><?php echo $modal; ?></td>
				<td><?php echo $margin; ?></td>
				<td><?php echo $jual; ?></td>
				<td><?php echo $input_time; ?></td>
				<td><?php echo $input_date; ?></td>
			</tr>
		</tbody>
	</table>

<?php
} else {
	echo "<br>Isi semua opsi dengan benar";
}
}
?>