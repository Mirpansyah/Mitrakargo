<?php
ob_start();
session_start();
if(isset($_SESSION['user_username'])) header("location: index.php");
require 'config/koneksi.php';

/* PROSES LOGIN */
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$login = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");

	if (mysqli_num_rows($login)>0) {
		$row_user = mysqli_fetch_array($login);
		$_SESSION['user_id'] = $row_user['id'];
		$_SESSION['user_username'] = $row_user['username'];
		header("location: index.php");
	} else {
		header("location: login.php?login_failed");
	}
}

?>

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Sign Dulu Dong</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="container" style="width: 25%; margin-top: 	5%;"  align="center">
	<form method="post">
		<h1 class="display-4">Sign In</h1>
		<br>
	<div class="form-group">
		<input type="text" name="username" required="" placeholder="Username" class="form-control" required="">
		<br>
		<input type="password" name="password" required="" placeholder="Password" class="form-control" required="">
		<?php if (isset($_GET['logout'])) {?>
			<br>
		<div class="alert alert-success" role="alert">
		  <a>Logout Successfully</a>
		</div>
		<?php } ?>

		<?php if (isset($_GET['login_failed'])) {?>
			<br>
		<div class="alert alert-danger" role="alert">
		  <a>Incorect Username Or Password</a>
		</div>
		<?php } ?>

		<br>
		<input type="submit" name="submit" value="Sign in" class="btn btn-primary" style="width: 50%;">
		<br><br>
		<p class="text-muted">
			Belum punya akun ? <a href="sign_up.php" class="text-reset">Daftar</a>
		</p>
	</div>
	</form>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

<?php 
mysqli_close($koneksi);
ob_end_flush();
 ?>