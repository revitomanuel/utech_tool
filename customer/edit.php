<?php
include "../koneksi.php";

if(isset($_GET['id_customer'])) {
    $id_customer = $_GET['id_customer'];
    
    // Ambil data customer berdasarkan ID
    $query = "SELECT * FROM tb_customer WHERE id_customer = '$id_customer'";
    $result = mysqli_query($db_link, $query);
    
    if(mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        
        // Tampilkan formulir untuk edit
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Edit Data Customer</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        </head>
        <body>
            <h2><center>Edit Data Customer</center></h2>
            <hr>
            <div class="container">
                <form action="aksi_edit.php" method="POST">

					<div class="mb-3">
						<label for="id_customer" class="form-label">ID customer:</label>
						<input type="text" class="form-control" id="id_customer" name="id_customer" value="<?php echo $data['id_customer']; ?>" readonly>
					</div>	
                    
                    <div class="mb-3">
                        <label for="nama_customer" class="form-label">Nama customer:</label>
                        <input type="text" class="form-control" id="nama_customer" name="nama_customer" value="<?php echo $data['nama_customer']; ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="telp_customer" class="form-label">Telp customer:</label>
                        <input type="text" class="form-control" id="telp_customer" name="telp_customer" value="<?php echo $data['telp_customer']; ?>">
                    </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="customer.php" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </body>
        </html>
        <?php
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID Customer tidak diberikan.";
}
?>
