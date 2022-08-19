<?php 
require '../config/koneksi.php';
ob_start();
session_start();
	
		if (isset($_GET['kdelete'])) {		
		$id_data = $_GET['kdelete'];
		mysqli_query($koneksi, "DELETE FROM motor_kecil WHERE id = '$id_data'");
		header("location: index.php?kecil");
}
mysqli_close($koneksi);
ob_end_flush();

?>