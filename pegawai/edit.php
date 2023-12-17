<?php
include "../koneksi.php";

if(isset($_GET['id_pegawai'])) {
    $id_pegawai = $_GET['id_pegawai'];
    
    // Ambil data Pegawai berdasarkan ID
    $query = "SELECT * FROM tb_pegawai WHERE id_pegawai = '$id_pegawai'";
    $result = mysqli_query($db_link, $query);
    
    if(mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        
        // Tampilkan formulir untuk edit
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Edit Data Pegawai</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        </head>
        <body>
            <h2><center>Edit Data Pegawai</center></h2>
            <hr>
            <div class="container">
                <form action="aksi_edit.php" method="POST">

					<div class="mb-3">
						<label for="id_pegawai" class="form-label">ID Pegawai:</label>
						<input type="text" class="form-control" id="id_pegawai" name="id_pegawai" value="<?php echo $data['id_pegawai']; ?>" readonly>
					</div>	
                    
                    <div class="mb-3">
                        <label for="nama_pegawai" class="form-label">Nama Pegawai:</label>
                        <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="<?php echo $data['nama_pegawai']; ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="alamat_pegawai" class="form-label">Alamat Pegawai:</label>
                        <input type="text" class="form-control" id="alamat_pegawai" name="alamat_pegawai" value="<?php echo $data['alamat_pegawai']; ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="telp_pegawai" class="form-label">Telp Pegawai:</label>
                        <input type="text" class="form-control" id="telp_pegawai" name="telp_pegawai" value="<?php echo $data['telp_pegawai']; ?>">
                    </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="pegawai.php" class="btn btn-secondary">Batal</a>
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
