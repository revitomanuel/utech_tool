<?php

include "../koneksi.php";
$id_barang=$_POST['id_barang'];
$nama_barang=$_POST['nama_barang'];
$jenis_barang=$_POST['jenis_barang'];
$kategori_barang =$_POST['kategori_barang'];
$tahun_rilis=$_POST['tahun_rilis'];
$harga_satuan=$_POST['harga_satuan'];


//mengecek jika ada form yang kosong
if($id_barang==""||$nama_barang==""||$jenis_barang==""||$kategori_barang==""||$tahun_rilis==""||$harga_satuan==""||$stok_barang==""){;?>
    <!--jika ada form yang kosong-->
    <script type="text/javascript">
    alert("Data tidak boleh kosong!!");  document.location="../data_transaksi.php?mod=tambah";</script>;
    
    

<?php
}else{

//script cek primary key sudah ada
  $queryCek= mysqli_query($db_link,"select dk from transaksi where dk='$dk'");
  $row= mysqli_num_rows($queryCek);
  if($row==0){


// script untuk menambahkan data ke tabel aksi_transaksi
    $query=mysqli_query($db_link,"INSERT INTO transaksi (dk,nik,nama,alamat,nomor_rangka,warna_dk,pokok,sanksi,jumlah,tahun_berlaku)VALUES('$dk','$nik','$nama','$alamat','$nomor_rangka','$warna_dk','$pokok','$sanksi','$jumlah','$tahun_berlaku')")or die ("GAGAL");




   }else{?>

<script type="text/javascript">
  alert("Data sudah melakukan transaksi!"); document.location="../menuisi/data_transaksi.php";
</script>
<?php


  }
}

?>
<!--Menuju ke halaman utama-->
<script type="text/javascript">
 alert(" TRANSAKSI BERHASIL!!");  document.location="../menuisi/data_transaksi.php";


</script>