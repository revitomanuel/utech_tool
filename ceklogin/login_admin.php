<?php
include "../koneksi.php";

// Mengambil nilai dari form login
$id_admin=$_POST['id_admin'];
$password=$_POST['password'];



// Melakukan query ke database untuk memeriksa keberadaan ID dan password
$query = "SELECT * FROM tb_admin WHERE id_admin = '$id_admin' AND password = '$password'";
$result = mysqli_query($db_link, $query);

// Memeriksa apakah query berhasil dieksekusi
if ($result) {
    // Memeriksa apakah data ditemukan
    if ($result->num_rows > 0) {
        // Login berhasil, arahkan ke halaman selanjutnya atau lakukan tindakan lainnya
		header("Location:../homepage_pegawai.php");
    } else {
        // Login gagal, arahkan kembali ke halaman login dengan pesan error
        echo "ID atau password salah. Silakan coba lagi.";
    }
} else {
    // Query gagal dieksekusi
    echo "Error: " . $db_link->error;
}

// Menutup koneksi database
$db_link->close();
?>
