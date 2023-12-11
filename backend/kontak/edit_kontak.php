<?php


include __DIR__ . '/../../koneksi.php'; // Hubungkan ke database
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_kontak = $_POST['id_kontak'];
    $edit_nama = $_POST['edit_nama'];
    $edit_alamat = $_POST['edit_alamat'];
    $edit_email = $_POST['edit_email'];
    $edit_telepon = $_POST['edit_telepon'];
    $edit_fb = $_POST['edit_fb'];
    $edit_twt = $_POST['edit_twt'];
    $edit_ig = $_POST['edit_ig'];
    $edit_lokasi = $_POST['edit_lokasi'];

    // Lakukan query update
    $query = "UPDATE informasi_kontak SET 
              nama = '$edit_nama',
              alamat = '$edit_alamat',
              email = '$edit_email',
              telepon = '$edit_telepon',
              fb = '$edit_fb',
              twt = '$edit_twt',
              ig = '$edit_ig',
              link_lokasi = '$edit_lokasi'
              WHERE id = '$id_kontak'";

    $result = mysqli_query($koneksi, $query);

    // Periksa apakah query berhasil dieksekusi
    if ($result) {
        echo '<script type="text/javascript">
            alert("Update data berhasil.");
            window.location="../../admin/kontak.php";
        </script>';
    } else {
        echo '<script type="text/javascript">
            alert("Ada kesalahan dalam update data.");
            window.location="../../admin/kontak.php";
        </script>';
    }
} else {
    // Jika form tidak diakses melalui metode POST, redirect ke halaman yang sesuai
    header("Location: ../../admin/kontak_setting.php");
}

?>