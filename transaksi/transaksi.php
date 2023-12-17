<?php
include "navbar.php";
?>


<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<title>Transaksi ⦁ U-TECH</title>
</head>

<body >

<br><h1><center>Data Transaksi</center></h1></br>

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
          <td class="active">Tanggal</td>  
		  <td class="active">ID Transaksi</td>
          <td class="active">ID Customer</td>
          <td class="active">ID Admin</td>
		  <td class="active">Total</td>
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
            $sql = "SELECT * from tb_transaksi where id_transaksi = '$cari' or id_customer = '$cari' or id_admin = '$cari'";
         }else{
            $sql = "SELECT * from tb_transaksi";
         }

			$no=1;
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				?>

                 <tr>
                <td><?php echo $data['tgl_transaksi']; ?></td>
                <td><?php echo $data['id_transaksi']; ?></td>
                <td><?php echo $data['id_customer']; ?></td>
                <td><?php echo $data['id_admin']; ?></td>
                <td><?php echo $data['total']; ?></td>
                
   

    <td>
      <a href="transaksi/edit.php?id_transaksi=<?php echo "$data[id_transaksi]"; ?>">EDIT</a> |						
      <a href="transaksi/aksi_hapus.php?id_transaksi=<?php echo "$data[id_transaksi]"; ?>" onclick="return confirm('Anda yakin ingin menghapus data?<?php echo "$data[id_transaksi]"; ?>  ')">HAPUS</a>
    </td>
				</tr>
				<?php
				$no++;
				}
		?>
		</table>
</div></center>

<p><center><right><input type="button" value="Tambah Transaksi Baru" onclick="location.href='transaksi/tambah.php'"></right>

<right><input type="button" value="Cetak" onclick="location.href='transaksi/cetak_transaksi.php'"></right></center></p>

</body>
</html>