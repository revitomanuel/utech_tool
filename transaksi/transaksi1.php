<?php
    include "../koneksi.php";
//include "../navbar.php";
?>



<html>
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>transaksi1</title>
  </head>
  <body>

  <!--<div class="container"> -->


  <center> <h3 class="textJudul mb-5 mt-1">Transaksi</h3></center>


		<form name="tambah" action="" method="POST">


<div class="mb-3">
  <label for="exampleInputNama1" class="form-label textForm">ID Transaksi</label>
  <input type="text" name="id_transaksi" class="form-control" id="id_transaksi">
</div>

<div class="mb-3">
  <label for="exampleInputNama1" class="form-label textForm">ID Customer</label>
  <input type="text" name="id_customer" class="form-control" id="id_customer">
</div>

<div class="mb-3">
  <label for="exampleInputNama1" class="form-label textForm">ID Pegawai</label>
  <input type="text" name="id_pegawai" class="form-control" id="id_pegawai">
</div>


   <div class="mb-3">
  <label for="exampleInputNama1" class="form-label textForm">Nama Barang</label>
  <script>
    function cetak(){
  var id_barang =document.getElementById("id_barang").value;
      document.location='transaksi2.php?id_barang='+id_barang+'';}
     </script>

  <input type="text" name="nama_barang" class="form-control" id="nama_barang" onclick="cetak()">
 </div>





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




 </form>

 <script src="../js/bootstrap.js"></script>
 <script src="../js/pooper.min.js"></script>
</body>
          </html>