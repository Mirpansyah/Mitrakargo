<link rel="stylesheet" href="{{ asset('css/basic.css') }}">
<div class="container">
	<form method="GET" action="#hasil">
		<div class="row form-group">
			<div class="col-md-5 py-1">
				<input class="form-control" type="text" name="asal" placeholder="Asal" autocomplete="off">
			</div>
			<div class="col-md-5 py-1">
				<input class="form-control" type="text" name="tujuan" placeholder="Tujuan" autocomplete="off">
			</div>
			<div class="col-md-2 py-1">
				<input class="btn btn-warning btn-block" type="submit" name="submit" value="Cek">
			</div>
		</div>
	</form>
</div>

<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'Agario12092002');
define('DBNAME', 'pusat_harga');

$koneksi = mysqli_connect(HOST, USER, PASS, DBNAME);
// error_reporting(0);


if (isset($_GET['submit'])) {
	$asal = $_GET['asal'];
	$tujuan = $_GET['tujuan'];
	$kode = $asal . $tujuan;
	$tarif = mysqli_query($koneksi, "SELECT * FROM plugin_barang WHERE kode LIKE '%$kode%' ");
	$indicate = mysqli_query($koneksi, "SELECT * FROM plugin_barang WHERE kode LIKE '%$kode%' ");
	$indicator = mysqli_fetch_array($indicate);
	if ($asal == null || $tujuan == null) { ?>
		<div class="container">
			<div class="res"><?= "Silahkan masukkan kota asal dan tujuan"; ?></div>
		</div>
	<?php } elseif (empty($indicator['id'])) { ?>
		<div class="container">
			<div class="res">
				<?= "Data tidak tersedia, " ?><a href="https://api.whatsapp.com/send?phone=628125883396"><?= "Klik untuk hubungi admin"; ?></a>
			</div>
		</div>
		<?php } else {

		while ($row_tarif = mysqli_fetch_array($tarif)) {
			$harga = number_format($row_tarif['harga']);
		?>
			<div class="container">
				<strong>
					<h3><?= $row_tarif['asal'] . " - " . $row_tarif['tujuan']; ?></h3>
				</strong>
				<div class="res"><strong>Harga : <?= 'Rp' . $harga; ?> </strong></div>
				<div class="res"><strong>Min. Charge : <?= $row_tarif['min_charge']; ?></strong></div>
				<div class="res"><strong>Estimasi : <?= $row_tarif['estimasi']; ?></strong> </div>
				<div class="res"><strong>Layanan : <?= $row_tarif['layanan']; ?></strong></div>
				<div class="res"><strong>Hubungi Admin : </strong>
					<a href="https://api.whatsapp.com/send/?phone=<?= $row_tarif['no_cs']; ?>&text=Halo+kak...+saya+mau+tanya-tanya+dong" class="btn btn-success btn-sm" target="_blank">Hubungi Admin</a>
				</div>
				<div class="divider-1"></div>
				<hr>
			</div> <?php }
			}
		}
					?>