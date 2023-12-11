<?php
include 'koneksi.php'; // Pastikan file koneksi_database.php sudah di-include

// Ambil data dari database (misalnya menggunakan query SELECT)
$sql_select = "SELECT judul_isi, isi FROM about WHERE id = 1"; // Sesuaikan query dengan struktur tabel
$result_select = $koneksi->query($sql_select);

if ($result_select) {
    $row = $result_select->fetch_assoc();
    $judul_isi = $row['judul_isi'];
    $isi = $row['isi'];

} else {
    // Handle kesalahan saat menjalankan query SELECT
    die("Error: " . $koneksi->error);
}

$koneksi->close(); // Tutup koneksi ke database
?>