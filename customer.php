<?php
include "navbar.php";
?>


<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<title>Customer ⦁ U-TECH</title>
</head>

<body >

<br><h1><center>Data Customer</center></h1></br>

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
          <td class="active">Nama Customer</td>
          <td class="active">No. Telepon</td>
        	<td align="center">Aksi</td>
		</tr>

<style>
  .table-responsive {
    background-color: white;
    width: 900;
  }
</style>

		<?php
        include "koneksi.php";
         if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $sql = "SELECT * from tb_customer where id_customer = '$cari' or nama_customer like '%$cari%'";
         }else{
            $sql = "SELECT * from tb_customer";
         }

			$no=1;
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				?>

                 <tr>
                <td><?php echo $data['id_customer']; ?></td>
                <td><?php echo $data['nama_customer']; ?></td>
                <td><?php echo $data['telp_customer']; ?></td>
                
   

    <td>
      <a href="customer/edit.php?id_customer=<?php echo "$data[id_customer]"; ?>">EDIT</a> |						
      <a href="customer/aksi_hapus.php?id_customer=<?php echo "$data[id_customer]"; ?>" onclick="return confirm('Anda yakin ingin menghapus data?<?php echo "$data[id_customer]"; ?>  ')">HAPUS</a>
    </td>
				</tr>
				<?php
				$no++;
				}
		?>
		</table>
</div></center>

<p><center><right><input type="button" value="Tambah Data Customer Baru" onclick="location.href='customer/tambah.php'"></right>

<right><input type="button" value="Cetak" onclick="location.href='customer/cetak_customer.php'"></right></center></p>

</body>
</html>