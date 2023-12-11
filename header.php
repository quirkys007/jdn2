<?php
include 'koneksi.php'; // Pastikan file koneksi_database.php sudah di-include

// Ambil data dari database (misalnya menggunakan query SELECT)
$sql_select = "SELECT home_header, about_header, contact_header  FROM header WHERE id = 1"; // Sesuaikan query dengan struktur tabel
$result_select = $koneksi->query($sql_select);

if ($result_select) {
    $row = $result_select->fetch_assoc();
    $home_header = $row['home_header'];
    $about_header= $row['about_header'];
    $contact_header= $row['contact_header'];

} else {
    // Handle kesalahan saat menjalankan query SELECT
    die("Error: " . $koneksi->error);
}

$koneksi->close(); // Tutup koneksi ke database
?>