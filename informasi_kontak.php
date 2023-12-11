<?php
include 'koneksi.php'; // Pastikan file koneksi_database.php sudah di-include

// Ambil data dari database (misalnya menggunakan query SELECT)
$sql_select = "SELECT nama, alamat, email, telepon, fb, twt, ig, link_lokasi FROM informasi_kontak WHERE id = 1"; // Sesuaikan query dengan struktur tabel
$result_select = $koneksi->query($sql_select);

if ($result_select) {
    $row = $result_select->fetch_assoc();
    $nama = $row['nama'];
    $alamat = $row['alamat'];
    $email = $row['email'];
    $telepon= $row['telepon'];
    $fb = $row['fb'];
    $twt = $row['twt'];
    $ig= $row['ig'];
    $link_lokasi= $row['link_lokasi'];
    
    
    
} else {
    // Handle kesalahan saat menjalankan query SELECT
    die("Error: " . $koneksi->error);
}

$koneksi->close(); // Tutup koneksi ke database
?>