<?php
include "../koneksi.php";

if(isset($_GET['id_barang'])) {
    $id_barang = $_GET['id_barang'];
    
    // Ambil data barang berdasarkan ID
    $query = "SELECT * FROM tb_barang WHERE id_barang = '$id_barang'";
    $result = mysqli_query($db_link, $query);
    
    if(mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        
        // Tampilkan formulir untuk edit
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Edit Data Barang</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        </head>
        <body>
            <h2><center>Edit Data Barang</center></h2>
            <hr>
            <div class="container">
                <form action="aksi_edit.php" method="POST">

					<div class="mb-3">
						<label for="id_barang" class="form-label">ID Barang:</label>
						<input type="text" class="form-control" id="id_barang" name="id_barang" value="<?php echo $data['id_barang']; ?>" readonly>
					</div>	
                    
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang:</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $data['nama_barang']; ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="jenis_barang" class="form-label">Jenis Barang:</label>
                        <input type="text" class="form-control" id="jenis_barang" name="jenis_barang" value="<?php echo $data['jenis_barang']; ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="kategori_barang" class="form-label">Kategori Barang:</label>
                        <input type="text" class="form-control" id="kategori_barang" name="kategori_barang" value="<?php echo $data['kategori_barang']; ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="tahun_rilis" class="form-label">Tahun Rilis:</label>
                        <input type="text" class="form-control" id="tahun_rilis" name="tahun_rilis" value="<?php echo $data['tahun_rilis']; ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="harga_satuan" class="form-label">Harga Satuan:</label>
                        <input type="text" class="form-control" id="harga_satuan" name="harga_satuan" value="<?php echo $data['harga_satuan']; ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="stok_barang" class="form-label">Stok Barang:</label>
                        <input type="text" class="form-control" id="stok_barang" name="stok_barang" value="<?php echo $data['stok_barang']; ?>">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="../barang.php" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </body>
        </html>
        <?php
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID Barang tidak diberikan.";
}
?>
