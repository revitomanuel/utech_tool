<?php

include "../koneksi.php";
$id_barang=$_POST['id_barang'];
$nama_barang=$_POST['nama_barang'];
$jenis_barang=$_POST['jenis_barang'];
$kategori_barang =$_POST['kategori_barang'];
$tahun_rilis=$_POST['tahun_rilis'];
$harga_satuan=$_POST['harga_satuan'];
$stok_barang=$_POST['stok_barang'];


//mengecek jika ada form yang kosong
if($id_barang==""||$nama_barang==""||$jenis_barang==""||$kategori_barang==""||$tahun_rilis==""||$harga_satuan==""||$stok_barang==""){;?>
<!--jika ada form yang kosong-->
<script type="text/javascript">
alert("Data tidak boleh kosong!!");  document.location="../barang.php?mod=tambah";</script>




<?php
}else{

//script cek primary key sudah ada
  $queryCek= mysqli_query($db_link,"select id_barang from tb_barang where id_barang='$id_barang'");
  $row= mysqli_num_rows($queryCek);


  if($row==0){
// script untuk menambahkan data ke tabel aksi_tambah
    $query=mysqli_query($db_link,"INSERT INTO tb_barang(id_barang,nama_barang,jenis_barang,kategori_barang,tahun_rilis,harga_satuan,stok_barang)VALUES('$id_barang','$nama_barang','$jenis_barang','$kategori_barang','$tahun_rilis','$harga_satuan','$stok_barang')")or die ("GAGAL");

  


   }else{?>

<script type="text/javascript">
  alert("Id barang sudah terdaftar!!");
 document.location="tambah.php";
</script>
<?php


  }
}




?>
<!--Menuju ke halaman utama-->
<script type="text/javascript">document.location="../barang.php";
</script>
<?php
?>