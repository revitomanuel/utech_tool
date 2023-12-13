<?php
include '../koneksi.php';

if (isset($_GET['id_barang'])) {
    $id_barang = $_GET['id_barang'];

    $hapus = "DELETE FROM tb_barang WHERE id_barang = ?";
    $data = $db_link->prepare($hapus);
    $data->bind_param("i", $id_barang);

    try {
        $data->execute();
        header("Location: ../barang.php");
    } catch (mysqli_sql_exception $e) {
        echo "Hapus Data Error " . $e->getMessage();
    }

    $data->close();
} else {
    echo "ID barang tidak ditemukan.";
}

$db_link->close();
?>