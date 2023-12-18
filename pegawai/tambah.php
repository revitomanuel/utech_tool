<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../style.css">
<title>Input Pegawai</title>
</head>

<body>
<form name="login" method="post" action="aksi_tambah.php">
<div class="container">
<h3 class ="textjudulmb-5 mt-1"><center>Input Pegawai<center></h3>

<p>
	<div class="form-group row">
		<label for="id_barang" class="col-sm-2 col-form-label">ID Pegawai</label>
		<div class="col-sm-10">
			<input type="text" class="form-control"  name="id_pegawai" id="id_pegawai" placeholder="Masukan ID Pegawai (10 Digit)">
		</div>
	</div>
</p>
 
<P>
	<div class="form-group row">
		<label for="nama_barang" class="col-sm-2 col-form-label">Nama Pegawai</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai" >
		</div>
	</div>
</P>




<p>
    <div class="form-group row">
		<label for="tahun_rilis" class="col-sm-2 col-form-label">Alamat Pegawai</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="alamat_pegawai" id="alamat_pegawai">
		</div>
	</div>
</p>

<p>
    <div class="form-group row">
		<label for="harga_satuan" class="col-sm-2 col-form-label">Telp pegawai</label>
		<div class="col-sm-10">
			<input type="tel" class="form-control" name="telp_pegawai" id="telp_pegawai" >
		</div>
	</div>
</p>

<p>
    <div class="form-group row">
		<label for="harga_satuan" class="col-sm-2 col-form-label">Tanggal Mulai Bekerja</label>
		<div class="col-sm-10">
			<input type="date" class="form-control" name="tggl_mulai" id="tggl_mulai" >
		</div>
	</div>
</p>




<p><center>    
	<button type="submit" class="btn btn-primary">Tambah</button>
</center></p>
</form>




</body>

</html>