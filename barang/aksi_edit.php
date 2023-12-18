<?php
include "../koneksi.php";

if(isset($_POST['id_barang'])) {
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $kategori_barang = $_POST['kategori_barang'];
    $tahun_rilis = $_POST['tahun_rilis'];
    $harga_satuan = $_POST['harga_satuan'];
    $stok_barang = $_POST['stok_barang'];
    $tanggal_barang = $_POST['tanggal_barang'];
    

    $query = "UPDATE tb_barang SET nama_barang = '$nama_barang', jenis_barang = '$jenis_barang', kategori_barang = '$kategori_barang', tahun_rilis = '$tahun_rilis', harga_satuan = '$harga_satuan', stok_barang = '$stok_barang', tanggal_barang = '$tanggal_barang' WHERE id_barang = '$id_barang'";
    
    $result = mysqli_query($db_link, $query);

    if($result) {
        header("Location:../barang.php");
    } else {
        echo "Gagal menyimpan perubahan.";
    }
} else {
    echo "Tidak ada data yang diterima.";
}
?>
