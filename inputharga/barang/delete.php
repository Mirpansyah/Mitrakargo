<?php 
require '../config/koneksi.php';
	
		if (isset($_GET['id'])) {		
		$id = $_GET['id'];
		mysqli_query($koneksi, "DELETE FROM harga_barang WHERE id = '$id' ");
		header("location:tabel_harga.php");
}
?>