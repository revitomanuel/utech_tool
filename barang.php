<?php
     include "../koneksi.php";
include "index.php";

?>


<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body >

   <h2><center>Data Barang</center></h2>
  <hr>
  <nav class="navbar bg-body-tertiary">
  <div class="container-fluid" >
    <form method='GET' class="d-flex" role="search">
      <input name="cari" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button Name="Cari" class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>

  <br>
 <div class="table-responsive">
		<table class="table table-bordered table-striped table-hover">
		<table border='3' cellspacing="0" cellpadding='15' align="center">

          <tr>
			<td class="active">ID</td>
          <td class="active">Nama Barang</td>
          <td class="active">Merk </td>
		  <td class="active">Kategori</td>
          <td class="active">Tahun Rilis</td>
		  <td class="active">Harga</td>
          <td class="active">Stok</>
        	<td align="center">Aksi</td>
		</tr>


		<?php
         if(isset($_GET['cari'])){
         $cari = $_GET['cari'];
         $sql = "SELECT * from tb_barang where dk like '%".$cari."%'";
         }else{
          $sql = "SELECT* from tb_barang";
         }

			$no=1;
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				?>

                 <tr>
    <td><?php echo $data['id_barang']; ?></td>
    <td><?php echo $data['nama_barang']; ?></td>
    <td><?php echo $data['merk_barang']; ?></td>
    <td><?php echo $data['kategori_barang']; ?></td>
    <td><?php echo $data['tahunrilis_barang']; ?></td>
    <td><?php echo $data['harga_barang']; ?></td>
    <td><?php echo $data['stok_barang']; ?></td>
   

    <td><a href="kegiatan/edit.php?dk=<?php echo "$data[id_barang]"; ?>">EDIT</a> |						<a href="aksi/aksihapus_data.php?dk=<?php echo "$data[id_barang]"; ?>" onclick="return confirm('Anda yakin menghapus?<?php echo "$data[id_barang]"; ?>  ')">HAPUS</a></td>
				</tr>
				<?php
				$no++;
				}
		?>
		</table>
<p>

 <center> <right><input type="button" value="Tambah Data Barang Baru" onclick="location.href='/kegiatan/tambahs.php'"></right>
  <right><input type="button" value="cetak" onclick="location.href='../menuisi/pencetakan.php'"></right></center>
  </p></table>

  </div>

</body>

</html>