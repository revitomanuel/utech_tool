<?php
include "navbar.php";
?>


<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body >

<br><h1><center>Data Barang</center></h1></br>

<div class="container-fluid" >
  <form method='GET' class="d-flex" role="search" style="margin-left: 30px;">
    <input name="cari" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button Name="Cari" class="btn btn-outline-success" type="submit">Search</button>
  </form>
</div>


  <br>
 <center><div class="table-responsive">
		<table class="table table-bordered table-striped table-hover">
		<table cellspacing="0" cellpadding='35' align="center">

          <tr>
			<td class="active">ID</td>
          <td class="active">Nama Barang</td>
          <td class="active">Jenis Barang</td>
		  <td class="active">Kategori Barang</td>
          <td class="active">Tahun Rilis</td>
		  <td class="active">Harga Satuan</td>
          <td class="active">Stok</>
        	<td align="center">Aksi</td>
		</tr>

<style>
  .table-responsive {
    background-color: white;
    width: 1300;
  }



</style>  

		<?php
        include "koneksi.php";
         if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $sql = "SELECT * from tb_barang where id_barang = '$cari' or nama_barang like '%$cari%'";
         }else{
            $sql = "SELECT * from tb_barang";
         }

			$no=1;
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				?>

                 <tr>
                <td><?php echo $data['id_barang']; ?></td>
                <td><?php echo $data['nama_barang']; ?></td>
                <td><?php echo $data['jenis_barang']; ?></td>
                <td><?php echo $data['kategori_barang']; ?></td>
                <td><?php echo $data['tahun_rilis']; ?></td>
                <td><?php echo $data['harga_satuan']; ?></td>
                <td><?php echo $data['stok_barang']; ?></td>
   

    <td>
      <a href="barang/edit.php?id_barang=<?php echo "$data[id_barang]"; ?>">EDIT</a> |						
      <a href="barang/aksi_hapus.php?id_barang=<?php echo "$data[id_barang]"; ?>" onclick="return confirm('Anda yakin ingin menghapus data?<?php echo "$data[id_barang]"; ?>  ')">HAPUS</a>
    </td>
				</tr>
				<?php
				$no++;
				}
		?>
		</table>

</div></center>

 
<p><center><right><input type="button" value="Tambah Data Barang Baru" onclick="location.href='barang/tambah.php'"></right>

<right><input type="button" value="Cetak" onclick="location.href='barang/cetak_barang.php'"></right></center></p>

  

</body>

</html>