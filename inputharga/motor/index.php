<?php 
ob_start();
session_start();
require '../config/koneksi.php';
if(!isset($_SESSION['user_id'])) header("location: ../login.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Input Tarif Motor</title>
	<link rel="stylesheet" type="text/css" href="styling/index.css">
</head>
<body>

	<div class="header">
		<a href="index.php?home">Input</a>
		<a href="index.php?kecil">Table Motor <135cc</a>
		<a href="index.php?sedang">Table Motor >135cc</a>
		<a href="index.php?besar">Table Motor >200cc</a>
		<a href="../">Menu</a>
	</div><!-- header -->


<div class="content">
	<?php include "config/config.php"; // Load file config.php ?>
</div><!-- content -->


<div class="footer">
	
</div><!-- footer -->
</body>
</html>

<?php 
mysqli_close($koneksi);
ob_end_flush();
 ?>