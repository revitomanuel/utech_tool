<html>
  <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>transaksi</title>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">
      <img src="img/logo.jpeg" alt="Logo" width="70" height="70" class="d-inline-block">
	</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../menuisi/datatabel.php"> Barang</a>
        </li>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../menuisi/Datapegawai.php">Data Pegawai</a>
        </li>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../menuisi/transaksi1.php">Transaksi</a>
        </li></ul></div>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../menuisi/data_transaksi.php">Data Transaksi</a>

        <li class="nav-item">
          <a class="nav-link" href="../index.php">Logout</a>
        </li>
      </ul>
    </div>
</ul></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</ul></div></div></nav></body>





<br>
<div class="table-responsive">
<table class="table table-striped table-hover" >
<tr>
			<td class="active">Nomor Kendaraan</td>
          <td class="active">Nik</td>
          <td class="active">Nama Lengkap</td>
		  <td class="active">Alamat</td>
          <td class="active">Nomor Rangka</td>
		  <td class="active">Warna plat</td>
          <td class="active">Tahun Berlaku
          <td>Pajak pokok</td>
        	<td align="center">Aksi</td>
		</tr>


		<?php
         if(isset($_GET['cari'])){
         $cari = $_GET['cari'];
         $sql = "SELECT * from data_kendaraan  where dk like '%".$cari."%'";
         }else{
          $sql = "SELECT* from data_kendaraan";
         }

			$no=1;
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				?>

                 <tr>
    <td><?php echo $data['dk']; ?></td>
    <td><?php echo $data['nik']; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['alamat']; ?></td>
    <td><?php echo $data['nomor_rangka']; ?></td>
    <td><?php echo $data['warna_dk']; ?></td>
    <td><?php echo $data['tahun_berlaku']; ?></td>
    <td><?php echo $data['pokok']; ?></td>

    <td><a href="../menuisi/editdata.php?dk=<?php echo "$data[dk]"; ?>">EDIT</a> |						<a href="../aksimenu/aksihapusdata.php?dk=<?php echo "$data[dk]"; ?>" onclick="return confirm('Anda yakin menghapus?<?php echo "$data[dk]"; ?>  ')">HAPUS</a></td>
				</tr>
				<?php
				$no++;
				}
		?>
</br>

</html>