<?php
include "../koneksi.php";

if(isset($_POST['id_customer'])) {
    $id_customer = $_POST['id_customer'];
    $nama_customer = $_POST['nama_customer'];
    $telp_customer = $_POST['telp_customer'];

    $query = "UPDATE tb_customer SET nama_customer = '$nama_customer', telp_customer = '$telp_customer' WHERE id_customer = '$id_customer'";
    
    $result = mysqli_query($db_link, $query);

    if($result) {
        header("Location:../customer.php");
    } else {
        echo "Gagal menyimpan perubahan.";
    }
} else {
    echo "Tidak ada data yang diterima.";
}
?>
