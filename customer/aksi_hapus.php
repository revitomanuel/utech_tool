<?php
include '../koneksi.php';

if (isset($_GET['id_customer'])) {
    $id_customer = $_GET['id_customer'];

    $hapus = "DELETE FROM tb_customer WHERE id_customer = ?";
    $data = $db_link->prepare($hapus);
    $data->bind_param("i", $id_customer);

    try {
        $data->execute();
        header("Location: ../customer.php");
    } catch (mysqli_sql_exception $e) {
        echo "Hapus Data Error " . $e->getMessage();
    }

    $data->close();
} else {
    echo "ID customer tidak ditemukan.";
}

$db_link->close();
?>