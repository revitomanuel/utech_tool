<?php
		include '../koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CETAK DATA</title>
	<style>
		div {
			width: 1000px;
			height: 400px;
			margin: 55px auto;
		}
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
<?php
 //tambahkan dbconnect
 

 //query
 $query = "SELECT * FROM tb_customer";

 $result = mysqli_query($db_link , $query);

 ?>
	<div>
      <h2><center>DATA CUSTOMER</center></h2>
		<table align= "center">
			<tr>
			  <th width="250px">ID CUSTOMER</th>
              <th width="165px">NAMA CUSTOMER</th>
              <th width="200px">TELP CUSTOMER</th>
           
			</tr>
			<tr>
		<?php
			$no=1;
			$sql="SELECT * FROM tb_customer";
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				?>
				<tr>
                <td><?php echo "$data[id_customer]"; ?></td>
               	<td><?php echo "$data[nama_customer]"; ?></td>
		      	<td><?php echo "$data[telp_customer]"; ?></td>
			   
				</tr>
				<?php
				$no++;
				}
		?>
		</table>
	</div>
	<script>
		window.print();
	</script>

</body>
</html>