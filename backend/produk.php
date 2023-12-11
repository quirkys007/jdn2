<?php
// Sertakan file config.php
require_once("config/config.php");

// Inisialisasi variabel filter
$filter = "Semua"; // Nilai default untuk filter

// Periksa apakah parameter filter telah diterima melalui URL
if (isset($_GET['filter'])) {
    // Jika parameter filter diterima, gunakan nilainya
    $filter = $_GET['filter'];

    // Berdasarkan nilai filter, atur query SQL yang sesuai
    if ($filter === "Paket1") {
        $sql = "SELECT * FROM paket_internet WHERE masa_aktiv = '30 hari'";
    } elseif ($filter === "Paket2") {
        $sql = "SELECT * FROM paket_internet WHERE kecepatan >= 10.00";
    } elseif ($filter === "Paket3") {
        $sql = "SELECT * FROM paket_internet WHERE harga <= 5.000";
    } else {
        // Jika filter "Semua" atau tidak dikenal, tampilkan semua data
        $sql = "SELECT * FROM paket_internet";
    }
} else {
    // Jika parameter filter tidak ada, tampilkan semua data
    $sql = "SELECT * FROM paket_internet";
}

$result = $conn->query($sql);
?>