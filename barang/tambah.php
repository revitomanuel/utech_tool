<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../style.css">
<title>Input Barang</title>
</head>

<body>
<form name="login" method="post" action="aksi_tambah.php">
<div class="container">
<h3 class ="textjudulmb-5 mt-1"><center>Input Barang<center></h3>

<p>
	<div class="form-group row">
		<label for="id_barang" class="col-sm-2 col-form-label">ID Barang</label>
		<div class="col-sm-10">
			<input type="text" class="form-control"  name="id_barang" id="id_barang" placeholder="Masukan ID Barang (10 Digit)">
		</div>
	</div>
</p>
 
<P>
	<div class="form-group row">
		<label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="nama_barang" id="nama_barang" >
		</div>
	</div>
</P>

<p>
    <div class="form-group">
		<label for="jenis_barang">Jenis Barang</label>
		<select name="jenis_barang" id="jenis_barang" class="form-control">
			<option value="jenis_barang">- Pilih jenis barang</option>
			<option value="iphone">iPhone</option>
			<option value="samsung">Samsung</option>
			<option value="oppo">Oppo</option>
</select>
	</div>
</p>

<p>
    <div class="form-group">
		<label for="kategori_barang">Kategori Barang</label>
		<select  name="kategori_barang" id="kategori_barang" class="form-control">
			<option value="kategori_barang">- Pilih kategori barang</option>
			<option value="iOS">iOS</option>
			<option value="android">Android</option>
		</select>
	</div>
</p>

<p>
    <div class="form-group row">
	<label for="tahun_rilis" class="col-sm-2 col-form-label">Tahun Rilis:</label>
	<div class="col-sm-10">
<input type="number" id="tahun_rilis" name="tahun_rilis" min="1900" max="2099" step="1">

		</div>
	</div>
</p>




<p>
    <div class="form-group row">
		<label for="harga_satuan" class="col-sm-2 col-form-label">Harga Satuan</label>
		<div class="col-sm-10">
			<input type="number" class="form-control" name="harga_satuan" id="harga_satuan" >
		</div>
	</div>
</p>


<div class="form-group row">
		<label for="stok_barang" class="col-sm-2 col-form-label">Tanggal masuk </label>
		<div class="col-sm-10">
			<input type="date" class="form-control" name="tanggal_barang" id="tanggal_barang">
		</div>
</div>

    <div class="form-group row">
		<label for="stok_barang" class="col-sm-2 col-form-label">Stok Barang</label>
		<div class="col-sm-10">
			<input type="number" class="form-control" name="stok_barang" id="stok_barang">
		</div>
	</div>



<p><center>    
	<button type="submit" class="btn btn-primary">Tambah</button>
</center></p>
</form>




</body>

</html>