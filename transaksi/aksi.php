<?php
	session_start();
	if(isset($_SESSION['username'])){
		include 'koneksi.php';
		
	}else{
	   header("location:index.php");
	}

	//proses penjumlahan
	if (isset($_GET['id_produk']) && isset($_GET['jumlah'])) {

    $id_produk=$_GET['id_produk'];
    $jumlah=$_GET['jumlah'];

    include 'koneksi.php';

    $sql= "SELECT * FROM produk WHERE id_produk='$id_produk'";

    $query = mysqli_query($db_link,$sql);
    $data = mysqli_fetch_array($query);
    $id_produk=$data['id_produk'];
    $nama_produk=$data['nama_produk'];
    $harga=$data['harga'];

}else {
    $id_produk="";
    $jumlah=0;
}

if (isset($_GET['aksi'])) {
    $aksi=$_GET['aksi'];
}else {
    $aksi="";
}


switch($aksi){	
    //Fungsi untuk menambah penyewaan kedalam cart
    case "tambah_produk":
    $itemArray = array($id_produk=>array('id_produk'=>$id_produk,'nama_produk'=>$nama_produk,'jumlah'=>$jumlah,'harga'=>$harga));
    if(!empty($_SESSION["Keranjang"])) {
        if(in_array($data['id_produk'],array_keys($_SESSION["Keranjang"]))) {
            foreach($_SESSION["Keranjang"] as $k => $v) {
                if($data['id_produk'] == $k) {
                    $_SESSION["Keranjang"] = array_merge($_SESSION["Keranjang"],$itemArray);
                }
            }
        } else {
            $_SESSION["Keranjang"] = array_merge($_SESSION["Keranjang"],$itemArray);
        }
    } else {
        $_SESSION["Keranjang"] = $itemArray;
    }
    break;
    //Fungsi untuk menghapus item dalam cart
    case "hapus":

        if(!empty($_SESSION["Keranjang"])) {
            foreach($_SESSION["Keranjang"] as $k => $v) {
                    if($_GET["id_produk"] == $k)
                        unset($_SESSION["Keranjang"][$k]);
                    if(empty($_SESSION["Keranjang"]))
                        unset($_SESSION["Keranjang"]);
            }
        }
    break;

    case "update":
        $itemArray = array($id_produk=>array('id_produk'=>$id_produk,'nama_produk'=>$nama_produk,'jumlah'=>$jumlah,'harga'=>$harga));
        if(!empty($_SESSION["Keranjang"])) {
            foreach($_SESSION["Keranjang"] as $k => $v) {
                if($_GET["id_produk"] == $k)
                $_SESSION["Keranjang"] = array_merge($_SESSION["Keranjang"],$itemArray);
            }
        }
    break;
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
</head>
<body>
   <h2>Keranjang Belanja</h2>
  
      <br>
<form>
		<table border="1" cellspacing="0" class="table">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode Produk</th>
            <th width="40%">Nama Produk</th>
            <th>Harga</th>
            <th width="10%">Jumlah</th>
            <th>Sub Total</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <form action="input-keranjang.php" method="POST">
        <?php
            $no=0;
            $subtotal=0;
            $total=0;
            $total_berat=0;
            if(!empty($_SESSION["keranjang"])):
            foreach ($_SESSION["keranjang"] as $item):
                $no++;
                $subtotal = $item["jumlah"]*$item['harga'];
                $total+=$subtotal;

        ?>
            <input type="hidden" name="id_produk[]" class="id_produk" value="<?php echo $item["id_produk"]; ?>"/>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $item["id_produk"]; ?></td>
                <td><?php echo $item["nama_produk"]; ?></td>
                <td>Rp <?php echo number_format($item["harga"],0,',','.');?> </td>
                <td>
                <input type="number" min="1" value="<?php echo $item["jumlah"]; ?>" class="form-control" id="jumlah<?php echo $no; ?>" name="jumlah[]" >
                <script>
                  $("#jumlah<?php echo $no; ?>").bind('change', function () {
                        var jumlah<?php echo $no; ?>=$("#jumlah<?php echo $no; ?>").val();
                        $("#jumlah<?php echo $no; ?>").val(jumlah<?php echo $no; ?>);
                    });
                    $("#jumlah<?php echo $no; ?>").keydown(function(event) { 
                        return false;
                    });
                    
                </script>

                </td>
                <td>Rp <?php echo number_format($subtotal,0,',','.');?> </td>

                <td>
                    <form method="get">
                        <input type="hidden" name="id_produk"  value="<?php echo $item['id_produk']; ?>" class="form-control">
                        <input type="hidden" name="aksi"  value="update" class="form-control">
                        <input type="hidden" name="halaman"  value="Keranjang" class="form-control">
                        <input type="hidden" name="jumlah" value="<?php echo $item["jumlah"]; ?>" id="jumlaha<?php echo $no; ?>" value="" class="form-control">
                        <input type="submit" class="btn btn-primary btn-block" value="Update"> <br><br>
                    </form>
                    <a href="indexi.php?halaman=keranjang&kode_produk=<?php echo $item['kode_produk']; ?>&aksi=hapus" class="btn btn-primary btn-block" role="button">Delete</a>
                </td>
            </tr>
        <?php 
            endforeach;
            endif;
               
        ?>
        </tbody>
    </table>
</form>

    <h3>Total Pembayaran Rp <?php echo number_format($total,0,',','.');?> </h3>

    <a href="produk.php"><button>Lanjutkan Belanja</button></a>
 
    <a href="pesanan.php?total=<?php echo $total; ?>"><button>Buat Pesanan</button></a>
    </form>

</body>
</html>