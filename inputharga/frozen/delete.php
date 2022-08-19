<?php 
require '../config/koneksi.php';
	
		if (isset($_GET['id'])) {		
		$id = $_GET['id'];
		mysqli_query($koneksi, "DELETE FROM frozen_food WHERE id = '$id' ");
		header("location:tabel_harga.php");
}
?>