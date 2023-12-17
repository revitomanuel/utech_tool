<?php
		include '../koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CETAK DATA </title>
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
 $query = "SELECT * FROM tb_pegawai";

 $result = mysqli_query($db_link , $query);

 ?>
	<div>
      <h2><center>DATA  PEGAWAI</center></h2>
		<table align= "center">
			<tr>
			  <th width="250px">ID PEGAWAI</th>
              <th width="165px">NAMA PEGAWAI</th>
              <th width="200px" >ALAMAT PEGAWAI</th>
              <th width="200px">TELP PEGAWAI</th>
           
			</tr>
			<tr>
		<?php
			$no=1;
			$sql="SELECT * FROM tb_pegawai";
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				?>
				<tr>
                <td><?php echo "$data[id_pegawai]"; ?></td>
               	<td><?php echo "$data[nama_pegawai]"; ?></td>
                <td><?php echo "$data[alamat_pegawai]"; ?></td>
		      	<td><?php echo "$data[telp_pegawai]"; ?></td>
			   
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