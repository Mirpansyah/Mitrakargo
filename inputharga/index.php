<?php 
ob_start();
session_start();
require 'config/koneksi.php';
if(!isset($_SESSION['user_id'])) header("location: login.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/index.css">

    <title>Tarif Data Center</title>
  </head>
  <body>

    <div align="center">
      <br><br>
      <h1 class="display-4">Tarif Data Center</h1>
      <div class="alert alert-light" role="alert" style="margin-top: -15px;">
        Developed By @qodrikhalik
      </div>
      <br><br>

      
        <a href="barang" class="btn btn-warning">Barang</a>
        <a href="motor" class="btn btn-warning">Motor</a>
        <a href="frozen" class="btn btn-warning">Frozen Food</a>
        <a href="mobil" class="btn btn-warning">Mobil</a>
        <a href="kota" class="btn btn-info">Tambah Kota</a>
        <a href="logout.php" class="btn btn-danger">Logout</a>
      

    </div><!-- container -->






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

<?php 
mysqli_close($koneksi);
ob_end_flush();
 ?>