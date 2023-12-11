<?php
include "../index.php";
include "../koneksi.php";

$id_barang=$_GET['id_barang'];
			$sql = "SELECT * FROM tb_barang WHERE id_barang='$id_barang'";
			$query = mysqli_query($db_link,$sql);
			$data = mysqli_fetch_array($query);
		?>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../style.css">
<title>Input Barang</title>
</head>

<body>
<form name="login" method="post" action="">
<div class="container">
<h3 class ="textjudulmb-5 mt-1"><center> Update Barang <center></h3>

<p>
	<div class="form-group row">
		<label for="id_barang" class="col-sm-2 col-form-label">ID Barang</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="id_barang" placeholder="Masukan ID Barang (10 Digit)" value="<?php echo $data[0];?>"class="form-control" id_barang="id_barang">
		</div>
	</div>
</p>
 
<P>
	<div class="form-group row">
		<label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="nama_barang" value="<?php echo $data[1];?>"class="form-control" nama_barang="nama_barang">
		</div>
	</div>
</P>

<p>
    <div class="form-group">
		<label for="jenis_barang">Jenis Barang</label>
		<select id="jenis_barang" class="form-control" value="<?php echo $data[2];?>"class="form-control" jenis_barang="jenis_barang">
			<option value="">- Pilih jenis barang</option>
			<option value="">iPhone</option>
			<option value="">Samsung</option>
			<option value="">Oppo</option>
</select>
	</div>
</p>

<p>
    <div class="form-group">
		<label for="kategori_barang">Kategori Barang</label>
		<select id="kategori_barang" class="form-control" value="<?php echo $data[3];?>"class="form-control" kategori_barang="kategori_barang">
			<option value="">- Pilih kategori barang</option>
			<option value="">iOS</option>
			<option value="">Android</option>
		</select>
	</div>
</p>

<p>
    <div class="form-group row">
		<label for="tahun_rilis" class="col-sm-2 col-form-label">Tahun Rilis</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" tahun_rilis="tahun_rilis" value="<?php echo $data[4];?>"class="form-control" tahun_rilis="tahun_rilis">
		</div>
	</div>
</p>

<p>
    <div class="form-group row">
		<label for="harga_satuan" class="col-sm-2 col-form-label">Harga Satuan</label>
		<div class="col-sm-10">
			<input type="number" class="form-control" harga_satuan="harga_satuan" value="<?php echo $data[5];?>"class="form-control" harga_satuan="harga_satuan">
		</div>
	</div>
</p>

    <div class="form-group row">
		<label for="stok_barang" class="col-sm-2 col-form-label">Stok Barang</label>
		<div class="col-sm-10">
			<input type="number" class="form-control" stok_barang="stok_barang" value="<?php echo $data[6];?>"class="form-control" stok_barang="stok_barang">
		</div>
	</div>



<p><center>    
	<button type="submit" class="btn btn-primary">Tambah</button>
</center></p>
</form>




</body>

</html>