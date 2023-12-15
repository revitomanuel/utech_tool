<?php
include "../koneksi.php";

$host = 'localhost';
$username = 'root';
$password = "";
$database = 'db_utech';

$db_link= mysqli_connect($hostname,$user_name,$password,$database_name);

// Periksa koneksi
if ($db_link->connect_error) {
    die("Koneksi gagal: " . $db_link->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $tanggal = date("Y-m-d"); // Tanggal hari ini
    $id_customer = $_POST['id_customer'];
    $idAdmin = $_POST['id_admin']; // ID Admin, bisa dari sesi login atau form lain
    $idBarang = $_POST['id_barang'];
    $jumlah = $_POST['jumlah'];

    // Proses menyimpan transaksi ke database
    $totalHarga = 0;

    // Mulai transaksi
    $db_link->begin_transaction();

    // Tambahkan transaksi ke dalam tabel tb_transaksi
    $sqlTransaksi = "INSERT INTO tb_transaksi (id_admin, tgl_transaksi, total) VALUES ($idAdmin, '$tanggal', 0)";

    if ($db_link->query($sqlTransaksi) === TRUE) {
        $idTransaksi = $db_link->insert_id; // Mengambil ID transaksi yang baru saja dibuat

        // Loop untuk setiap barang dan jumlahnya
        foreach ($idBarang as $key => $id) {
            $jumlahBarang = $jumlah[$key];

            // Mengambil harga satuan dari tb_barang
            $sqlHarga = "SELECT harga_satuan FROM tb_barang WHERE id_barang = $id";
            $result = $db_link->query($sqlHarga);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $hargaSatuan = $row['harga_satuan'];
                $subtotal = $jumlahBarang * $hargaSatuan;
                $totalHarga += $subtotal;

                // Simpan detail transaksi ke dalam tabel tb_detail_transaksi
                $sqlDetailTransaksi = "INSERT INTO tb_detail_transaksi (id_transaksi, id_barang, jumlah_barang, subtotal) VALUES ($idTransaksi, $id, $jumlahBarang, $subtotal)";

                if ($db_link->query($sqlDetailTransaksi) !== TRUE) {
                    echo "Error: " . $sqlDetailTransaksi . "<br>" . $db_link->error;
                    $db_link->rollback(); // Rollback jika terjadi kesalahan saat memasukkan detail transaksi
                    break;
                }
            } else {
                echo "Barang dengan ID $id tidak ditemukan.";
                $db_link->rollback(); // Rollback jika barang tidak ditemukan
                break;
            }
        }

        // Update total harga di tb_transaksi
        $sqlUpdateTotal = "UPDATE tb_transaksi SET total = $totalHarga WHERE id_transaksi = $idTransaksi";
        if ($db_link->query($sqlUpdateTotal) !== TRUE) {
            echo "Error updating total: " . $db_link->error;
            $db_link->rollback(); // Rollback jika terjadi kesalahan saat mengupdate total harga
        } else {
            $db_link->commit(); // Commit transaksi jika semuanya berhasil
            echo "Transaksi berhasil disimpan.";
        }
    } else {
        echo "Error: " . $sqlTransaksi . "<br>" . $db_link->error;
    }
}

// Tutup koneksi
$db_link->close();
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>transaksi-gpt</title>
</head>

<body>
<!-- Form untuk melakukan transaksi -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="tanggal">Tanggal:</label><br>
    <input type="date" name="tanggal" value="<?php echo date("Y-m-d"); ?>" readonly><br><br>

    <label for="id_admin">ID Admin:</label><br>
    <input type="text" name="id_admin" required><br><br>

    <label for="id_barang">ID Barang:</label><br>
    <input type="text" name="id_barang[]" required><br><br>

    <label for="jumlah">Jumlah:</label><br>
    <input type="number" name="jumlah[]" required><br><br>

    <!-- Untuk menambah barang lagi -->
    <div id="more-items"></div>
    <button type="button" onclick="addMore()">Tambah Barang</button><br><br>

    <input type="submit" value="Simpan Transaksi">
</form>

<script>
    // Fungsi untuk menambah input field untuk barang dan jumlah
    function addMore() {
        var moreItemsDiv = document.getElementById('more-items');
        var newInput = document.createElement('div');
        newInput.innerHTML = `
            <label for="id_barang">ID Barang:</label><br>
            <input type="text" name="id_barang[]" required><br><br>
            
            <label for="jumlah">Jumlah:</label><br>
            <input type="number" name="jumlah[]" required><br><br>
        `;
        moreItemsDiv.appendChild(newInput);
    }
</script>

<script src="../js/bootstrap.js"></script>
<script src="../js/pooper.min.js"></script>
</body>
</html>