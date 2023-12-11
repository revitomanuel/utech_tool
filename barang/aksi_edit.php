<?php

include "../koneksi.php";
$id_barang=$_POST['id_barang'];
$nama_barang=$_POST['nama_barang'];
$jenis_barang=$_POST['jenis_barang'];
$kategori_barang =$_POST['kategori_barang'];
$tahun_rilis=$_POST['tahun_rilis'];
$harga_satuan=$_POST['harga_satuan'];
$stok_barang=$_POST['stok_barang'];
$sql = "UPDATE  tb_barang SET id_barang='$id_barang', nama_barang='$nama_barang',jenis_barang='$jenis_barang',kategori_barang='$kategori_barang',tahun_rilis='$tahun_rilis',harga_satuan='$harga_satuan',stok_barang='$stok_barang'where id_barang='$id_barang'";

$query =mysqli_query($db_link, $sql);


if($query){;?>




<script language="javascript">document.location="../barang.php";</script>
<?php


}else{;?>

<script language="javascript">document.location="../barang.php";</script>
<?php

}