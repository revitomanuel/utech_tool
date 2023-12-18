<?php
include "navbar.php";
?>


<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<title>Pegawai ⦁ U-TECH</title>
</head>

<body >

<br><h1><center>Data Pegawai</center></h1></br>

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
      <td class="active">Nama Pegawai</td>
      <td class="active">Alamat Pegawai</td>
		  <td class="active">Telp Pegawai</td>
      <td class="active">Tanggal Mulai Bekerja</td>
      <td align="center">Aksi</td>
		</tr>

<style>
  .table-responsive {
    background-color: white;
    width: 1400;
  }
</style>

		<?php
        include "koneksi.php";
         if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $sql = "SELECT * from tb_pegawai where id_pegawai = '$cari' or nama_pegawai like '%$cari%'";
         }else{
            $sql = "SELECT * from tb_pegawai";
         }

			$no=1;
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				?>

                 <tr>
                <td><?php echo $data['id_pegawai']; ?></td>
                <td><?php echo $data['nama_pegawai']; ?></td>
                <td><?php echo $data['alamat_pegawai']; ?></td>
                <td><?php echo $data['telp_pegawai']; ?></td>
                <td><?php echo $data['tggl_mulai']; ?></td>

   

    <td>
      <a href="pegawai/edit.php?id_pegawai=<?php echo "$data[id_pegawai]"; ?>">EDIT</a> |						
      <a href="pegawai/aksi_hapus_pegawai.php?id_pegawai=<?php echo "$data[id_pegawai]"; ?>" onclick="return confirm('Anda yakin ingin menghapus data?<?php echo "$data[id_pegawai]"; ?>  ')">HAPUS</a>
    </td>
				</tr>
				<?php
				$no++;
				}
		?>
		</table>
</div></center>

<p><center><right><input type="button" value="Tambah Data Pegawai Baru" onclick="location.href='pegawai/tambah.php'"></right>

<right><input type="button" value="Cetak" onclick="location.href='pegawai/cetak_pegawai.php'"></right></center></p>

</body>
</html>