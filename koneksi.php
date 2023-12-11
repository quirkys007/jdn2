<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "jdn");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}