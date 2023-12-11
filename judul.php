<?php
include 'koneksi.php';

// Ambil data dari database
$sql_select = "SELECT judul_header, judul_singkat, judul_web, keterangan, image1, judul_isi, isi FROM home_page WHERE id = 1";
$result_select = $koneksi->query($sql_select);

if ($result_select) {
    $row = $result_select->fetch_assoc();
    $judul_header = $row['judul_header'];
    $judul_singkat = $row['judul_singkat'];
    $judul_web = $row['judul_web'];
    $keterangan = $row['keterangan'];
    $image1 = $row['image1'];
    $judul_isi = $row['judul_isi'];
    $isi = $row['isi'];
    
} else {
    die("Error: " . $koneksi->error);
}

$koneksi->close();

// Proses unggahan foto jika ada form yang disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $image1_baru = $_FILES['image1']['name'];
    $lokasi_image1_baru = "lokasi_penyimpanan/" . $image1_baru;

    move_uploaded_file($_FILES['image1']['tmp_name'], $lokasi_image1_baru);

    $image2_baru = $_FILES['image2']['name'];
    $lokasi_image2_baru = "lokasi_penyimpanan/" . $image2_baru;

    move_uploaded_file($_FILES['image2']['tmp_name'], $lokasi_image2_baru);

    // Simpan nama file dan lokasi foto baru ke database
    $sql_update_images = "UPDATE judul SET image1 = '$image1_baru', image2 = '$image2_baru' WHERE id = 1";
    $result_update_images = $koneksi->query($sql_update_images);

    if ($result_update_images) {
        echo "Gambar berhasil diunggah dan disimpan.";
    } else {
        echo "Terjadi kesalahan: " . $koneksi->error;
    }
}
?>
