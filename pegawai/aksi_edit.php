<?php
include "../koneksi.php";

if(isset($_POST['id_pegawai'])) {
    $id_pegawai = $_POST['id_pegawai'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $alamat_pegawai = $_POST['alamat_pegawai'];
    $telp_pegawai = $_POST['telp_pegawai'];
    $tggl_mulai = $_POST['tggl_mulai'];


    $query = "UPDATE tb_pegawai SET nama_pegawai = '$nama_pegawai', alamat_pegawai = '$alamat_pegawai', telp_pegawai = '$telp_pegawai', tggl_mulai = '$tggl_mulai' WHERE id_pegawai = '$id_pegawai'";
    
    $result = mysqli_query($db_link, $query);

    if($result) {
        header("Location:../pegawai.php");
    } else {
        echo "Gagal menyimpan perubahan.";
    }
} else {
    echo "Tidak ada data yang diterima.";
}
?>
