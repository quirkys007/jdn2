<?php
include __DIR__ . '/../../koneksi.php'; // Hubungkan ke database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_hero = $_POST['id_hero'];
    $edit_judul = $_POST['edit_judul'];
    $edit_dsection = $_POST['edit_dsection'];
    $edit_kontenp1 = $_POST['edit_kontenp1'];
    $edit_kontenp2 = $_POST['edit_kontenp2'];
    $edit_judul_isi = $_POST['edit_judul_isi'];
    $edit_isi = $_POST['edit_isi'];

    // Ambil nama file gambar yang ada dalam database
    $query = mysqli_query($koneksi, "SELECT image1 FROM home_page WHERE id='$id_hero'");
    $data = mysqli_fetch_assoc($query);

    // Tentukan nama file yang ada dalam database
    $existing_gambarp1 = $data['image1'];

    // Tentukan path untuk menyimpan gambar yang ada dalam database
    $existing_gambarp1_path = '../../assets/img/' . $existing_gambarp1;

    // Ambil nama file gambar yang diunggah
    $edit_gambar = $_FILES['edit_gambar']['name'];
    $image_tmp = $_FILES['edit_gambar']['tmp_name'];

    // Tentukan path untuk menyimpan gambar yang diunggah
    $new_gambar_path = '../../assets/img/' . basename($edit_gambar);

    // Periksa apakah ada file yang diunggah
    if (!empty($edit_gambar)) {
        // Pindahkan file yang diunggah ke folder penyimpanan
        move_uploaded_file($image_tmp, $new_gambar_path);
    } else {
        // Jika file tidak diunggah, gunakan kembali nama file yang ada
        $edit_gambar = $existing_gambarp1;
    }

    // Update data di database
    $query_update = "UPDATE home_page SET 
                    judul_header = '$edit_judul',
                    judul_singkat = '$edit_dsection',
                    judul_web = '$edit_kontenp1',
                    keterangan = '$edit_kontenp2',
                    image1 = '$edit_gambar',
                    judul_isi = '$edit_judul_isi',
                    isi = '$edit_isi'
                    WHERE id = '$id_hero'";

    $result = mysqli_query($koneksi, $query_update);

    // Periksa apakah query berhasil dieksekusi
    if ($result) {
        echo '<script type="text/javascript">
            alert("Update data berhasil.");
            window.location="../../admin/home_page.php";
        </script>';
    } else {
        echo '<script type="text/javascript">
            alert("Ada kesalahan dalam update data.");
            window.location="../../admin/home_page.php";
        </script>';
    }
}
?>
