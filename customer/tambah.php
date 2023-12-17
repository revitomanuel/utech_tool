<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../style.css">
<title>Input Customer</title>
</head>

<body>
<form name="login" method="post" action="aksi_tambah.php">
<div class="container">
<h3 class ="textjudulmb-5 mt-1"><center>Input Customer<center></h3>

<p>
	<div class="form-group row">
		<label for="id_customer" class="col-sm-2 col-form-label">ID Customer</label>
		<div class="col-sm-10">
			<input type="text" class="form-control"  name="id_customer" id="id_customer" placeholder="Masukan ID Customer">
		</div>
	</div>
</p>
 
<P>
	<div class="form-group row">
		<label for="nama_customer" class="col-sm-2 col-form-label">Nama Customer</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="nama_customer" id="nama_customer" >
		</div>
	</div>
</P>

<p>
    <div class="form-group row">
		<label for="telp_customer" class="col-sm-2 col-form-label">No. Telepon</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="telp_customer" id="telp_customer" >
		</div>
	</div>
</p>

   



<p><center>    
	<button type="submit" class="btn btn-primary">Tambah</button>
</center></p>
</form>




</body>

</html>