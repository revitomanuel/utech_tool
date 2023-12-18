<?php

include "../koneksi.php";
$id_admin=$_POST['id_admin'];
$nama_admin=$_POST['nama_admin'];
$password=$_POST['password'];


//mengecek jika ada form yang kosong
if($id_admin==""||$nama_admin==""||$password==""){;?>
    <!--jika ada form yang kosong-->
    <script type="text/javascript">
    alert("Data tidak boleh kosong!!");  document.location="register.php?mod=tambah";
    </script>

<?php
}else{
    //script cek primary key sudah ada
    $queryCek= mysqli_query($db_link,"select id_admin from tb_admin where id_admin='$id_admin'");
    $row= mysqli_num_rows($queryCek);


    if($row==0){
        // script untuk menambahkan data ke tabel aksi_tambah
        $query=mysqli_query($db_link,"INSERT INTO tb_admin(id_admin,nama_admin,password)VALUES('$id_admin','$nama_admin','$password')")or die ("GAGAL");

    }else{?>
        <script type="text/javascript">
        alert("ID Admin sudah terdaftar!");
        document.location="register.php";
        </script>
<?php


  }
}




?>
<!--Menuju ke halaman utama-->
<script type="text/javascript">document.location="../homepage.php";
</script>
<?php
?>