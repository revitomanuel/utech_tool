<?php
		include '../koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cetak Data</title>
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
 $query = "SELECT * FROM tb_barang";

 $result = mysqli_query($db_link , $query);

 ?>
	<div>
      <h2><center>DATA  BARANG </center></h2>
		<table align="center">
			<tr>
			  <th width="100px">ID BARANG</th>
              <th width="165px">NAMA BARANG</th>
              <th width="200px" >JENIS BARANG</th>
              <th width="200px">KATEGORI BARANG</th>
              <th width="120px">TAHUN RILIS</th>
              <th widht="75px">HARGA SATUAN</th>
              <th width="50px">STOK BARANG</th>
      

			</tr>
			<tr>
		<?php
			$no=1;
			$sql="SELECT * FROM tb_barang";
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				?>
				<tr>
                <td><?php echo "$data[id_barang]"; ?></td>
               	<td><?php echo "$data[nama_barang]"; ?></td>
                <td><?php echo "$data[jenis_barang]"; ?></td>
		      	<td><?php echo "$data[kategori_barang]"; ?></td>
			    <td><?php echo "$data[tahun_rilis]"; ?></td>
                <td><?php echo "$data[harga_satuan]"; ?></td>
                <td><?php echo "$data[stok_barang]"; ?></td>
               
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