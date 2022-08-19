<?php 
require '../config/koneksi.php';
ob_start();
session_start();
	
		if (isset($_GET['bdelete'])) {		
		$id_data = $_GET['bdelete'];
		mysqli_query($koneksi, "DELETE FROM motor_besar WHERE id = '$id_data'");
		header("location: index.php?besar");
}
mysqli_close($koneksi);
ob_end_flush();

?>