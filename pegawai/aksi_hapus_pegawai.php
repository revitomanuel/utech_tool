<?php
include '../koneksi.php';

if (isset($_GET['id_pegawai'])) {
    $id_pegawai = $_GET['id_pegawai'];

    $hapus = "DELETE FROM tb_pegawai WHERE id_pegawai = ?";
    $data = $db_link->prepare($hapus);
    $data->bind_param("i", $id_pegawai);

    try {
        $data->execute();
        header("Location: ../pegawai.php");
    } catch (mysqli_sql_exception $e) {
        echo "Hapus Data Error " . $e->getMessage();
    }

    $data->close();
} else {
    echo "ID pegawai tidak ditemukan.";
}

$db_link->close();
?>