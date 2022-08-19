<?php 
require '../config/koneksi.php';
ob_start();
session_start();
	
		if (isset($_GET['sdelete'])) {		
		$id_data = $_GET['sdelete'];
		mysqli_query($koneksi, "DELETE FROM motor_sedang WHERE id = '$id_data'");
		header("location: index.php?sedang");
}
mysqli_close($koneksi);
ob_end_flush();

?>