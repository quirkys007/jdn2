<?php
include __DIR__ . '/../../config/config.php'; // Hubungkan ke database

$id = $_POST['id_about'];
$edit_home = $_POST['edit_home'];
$edit_product = $_POST['edit_product'];



$query = mysqli_query($koneksi, "
    UPDATE about 
    SET judul_isi='$edit_home', isi='$edit_product'
    WHERE id='$id'
");


// Periksa apakah query berhasil dieksekusi
if ($query) {
    echo '<script type="text/javascript">
        alert("Update data berhasil.");
        window.location="../../admin/about_us.php";
    </script>';
} else {
    echo '<script type="text/javascript">
        alert("Ada kesalahan dalam update data.");
        window.location="../../admin/about_us.php";
    </script>';
}
?>
