<?php 

$read_motor = mysqli_query($koneksi, "SELECT * FROM motor_besar ORDER BY id ASC");
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styling/index.css">
	<title>Table Harga Motor</title>
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="//code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
</head>
<body>

<div class="bungkus">
	<h1>Table Harga Motor >200cc</h1>
	<table align="center" id="mytable">
		<thead>
			<tr>
				<th>ID</th>
				<th>Asal - Tujuan</th>
				<th>Vendor</th>
				<th>Modal</th>
				<th>Margin</th>
				<th>Jual</th>
				<th>Input Time</th>
				<th>Input Date</th>
				<th>Act</th>
			</tr>
		</thead>

		<tbody>
			
		<?php if (mysqli_num_rows($read_motor)){ ?>
        <?php while ($row = mysqli_fetch_array($read_motor)){ ?>
        	<tr>
    		<td><?php echo $row['id']; ?></td>
	      <td><?php echo $row['asal']. "-" .$row['tujuan']; ?></td>
	      <td><?php echo $row['vendor']; ?></td>
	      <td><?php echo "Rp".$row['modal']; ?></td>
	      <td><?php echo $row['margin']." %"; ?></td>
	      <td><?php echo "Rp".$row['jual']; ?></td>
	      <td><?php echo $row['mod-time']; ?></td>
	      <td><?php echo $row['mod-date']; ?></td>
	      <td>
  			<a href="">Edit</a>
  			<a href="bdelete.php?bdelete=<?php echo $row['id']; ?>">Delete</a>
		  </td>
		  </tr>
    	<?php } ?>
        <?php } ?>
			
		</tbody>
	</table>

</div>

<script type="text/javascript">
        $(document).ready(function() 
            {
                $('#mytable').DataTable();
            } );
    </script>
</body>
</html>