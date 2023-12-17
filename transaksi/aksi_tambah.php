<?php

include "../koneksi.php";
$tgl_transaksi=$_POST['tgl_transaksi'];
$id_transaksi=$_POST['id_transaksi'];
$id_customer=$_POST['id_customer'];
$id_admin=$_POST['id_admin'];
$total=$_POST['total'];




//mengecek jika ada form yang kosong
if($tgl_transaksi==""||$id_transaksi==""||$id_customer==""||$id_admin==""){;?>
<!--jika ada form yang kosong-->
<script type="text/javascript">
alert("Data tidak boleh kosong!!");  document.location="transaksi.php?mod=tambah";</script>




<?php
}else{

//script cek primary key sudah ada
  $queryCek= mysqli_query($db_link,"select id_transaksi from tb_transaksi where id_transaksi='$id_transaksi'");
  $row= mysqli_num_rows($queryCek);


  if($row==0){
// script untuk menambahkan data ke tabel aksi_tambah
    $query=mysqli_query($db_link,"INSERT INTO tb_admin(tgl_transaksi,nama_pegawa,alamat_pegawai,telp_pegawai)VALUES('$id_pegawai','$nama_pegawai','$alamat_pegawai','$telp_pegawai')")or die ("GAGAL");

  


   }else{?>

<script type="text/javascript">
  alert("Id pegawai sudah terdaftar!!");
 document.location="tambah.php";
</script>
<?php


  }
}




?>
<!--Menuju ke halaman utama-->
<script type="text/javascript">document.location="../pegawai.php";
</script>
<?php
?>