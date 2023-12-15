<?php

include "../koneksi.php";
include "../navbar.php";

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

    <title>transaksi2</title>
  </head>




 <center>  <h3 class="textJudul mb-5 mt-1">Transaksi2</h3></center>

 <form  name= "tambah" method="POST" action="aksi_transaksi.php">


 <div class="mb-3">
						<label for="id_barang" class="form-label">ID Barang:</label>
						<input type="text" class="form-control" id="id_barang" name="id_barang" value="<?php echo $data['id_barang']; ?>" readonly>
					</div>	
                    
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang:</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $data['nama_barang']; ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="jenis_barang" class="form-label">Jenis Barang:</label>
                        <input type="text" class="form-control" id="jenis_barang" name="jenis_barang" value="<?php echo $data['jenis_barang']; ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="kategori_barang" class="form-label">Kategori Barang:</label>
                        <input type="text" class="form-control" id="kategori_barang" name="kategori_barang" value="<?php echo $data['kategori_barang']; ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="tahun_rilis" class="form-label">Tahun Rilis:</label>
                        <input type="text" class="form-control" id="tahun_rilis" name="tahun_rilis" value="<?php echo $data['tahun_rilis']; ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="harga_satuan" class="form-label">Harga Satuan:</label>
                        <input type="text" class="form-control" id="harga_satuan" name="harga_satuan" value="<?php echo $data['harga_satuan']; ?>">
                    </div>
               


   <button type="submit"  name="login"class="btn btn-primary btn-lg" >Bayar</button>

</form>

 <script src="../js/bootstrap.js"></script>
 <script src="../js/pooper.min.js"></script>
</html>