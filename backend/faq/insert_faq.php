<?php
include __DIR__ . '/../../config/config.php'; // Hubungkan ke database

// tambah faq 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $insert_pertanyaan = $_POST["insert_pertanyaan"] ?? '';
    $insert_jawaban = $_POST["insert_jawaban"] ?? '';

    $query = "INSERT INTO faq_content (question, answer)
              VALUES ('$insert_pertanyaan', '$insert_jawaban')";

    if ($conn->query($query) === TRUE) {
        echo "<script>alert('data berhasil ditambahkan.'); window.location='../../admin/faq.php';</script>";
    } else {
        echo "<script>alert('Kesalahan dalam menambahkan data.'); window.location='../../admin/faq.php';</script>";
    }
} 
else {
    echo "<script>alert('Data tidak dikirimkan.'); window.location='../../admin/faq.php';</script>";
}
?>