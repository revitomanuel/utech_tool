<?php

include "../koneksi.php";
$id_pegawai=$_POST['id_pegawai'];
$nama_pegawai=$_POST['nama_pegawai'];
$alamat_pegawai=$_POST['alamat_pegawai'];
$telp_pegawai =$_POST['telp_pegawai'];
$tggl_mulai=$_POST['tggl_mulai'];




//mengecek jika ada form yang kosong
if($id_pegawai==""||$nama_pegawai==""||$alamat_pegawai==""||$telp_pegawai==""||$tggl_mulai==""){;?>
<!--jika ada form yang kosong-->
<script type="text/javascript">
alert("Data tidak boleh kosong!!");  document.location="../pegawai.php?mod=tambah";</script>




<?php
}else{

//script cek primary key sudah ada
  $queryCek= mysqli_query($db_link,"select id_pegawai from tb_pegawai where id_pegawai='$id_pegawai'");
  $row= mysqli_num_rows($queryCek);


  if($row==0){
// script untuk menambahkan data ke tabel aksi_tambah
    $query=mysqli_query($db_link,"INSERT INTO tb_pegawai(id_pegawai,nama_pegawai,alamat_pegawai,telp_pegawai,tggl_mulai)VALUES('$id_pegawai','$nama_pegawai','$alamat_pegawai','$telp_pegawai','$tggl_mulai')")or die ("GAGAL");

  


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