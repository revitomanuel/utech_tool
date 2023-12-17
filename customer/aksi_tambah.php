<?php

include "../koneksi.php";
$id_customer=$_POST['id_customer'];
$nama_customer=$_POST['nama_customer'];
$telp_customer =$_POST['telp_customer'];




//mengecek jika ada form yang kosong
if($id_customer==""||$nama_customer==""||$telp_customer==""){;?>
<!--jika ada form yang kosong-->
<script type="text/javascript">
alert("Data tidak boleh kosong!!");  document.location="../customer.php?mod=tambah";</script>




<?php
}else{

//script cek primary key sudah ada
  $queryCek= mysqli_query($db_link,"select id_customer from tb_customer where id_customer='$id_customer'");
  $row= mysqli_num_rows($queryCek);


  if($row==0){
// script untuk menambahkan data ke tabel aksi_tambah
    $query=mysqli_query($db_link,"INSERT INTO tb_customer(id_customer,nama_customer,telp_customer)VALUES('$id_customer','$nama_customer','$telp_customer')")or die ("GAGAL");

  


   }else{?>

<script type="text/javascript">
  alert("Id customer sudah terdaftar!!");
 document.location="tambah.php";
</script>
<?php


  }
}




?>
<!--Menuju ke halaman utama-->
<script type="text/javascript">document.location="../customer.php";
</script>
<?php
?>