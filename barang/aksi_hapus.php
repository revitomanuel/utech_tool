<?php
	include "../koneksi.php";

	$id_barang = $_GET['id_barang'];
	$sql = "DELETE FROM tb_barang WHERE id_barang = '$id_barang'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:../barang.php');
	}
	else
	{
	echo "Gagal menghapus data";
	}
?>