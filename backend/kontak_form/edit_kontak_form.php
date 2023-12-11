<?php
// Memasukkan file koneksi.php
include('../../koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['delete_id'])) {
        $id_del = $_POST['id_del'];

        // Buat query SQL untuk menghapus data berdasarkan ID
        $delete_query = "DELETE FROM kontak_form WHERE id = ?";
        $stmt = $koneksi->prepare($delete_query);
        $stmt->bind_param("i", $id_del);

        if ($stmt->execute()) {
            // Menggunakan JavaScript untuk menampilkan alert
            echo "<script>
                    alert('Data berhasil dihapus');
                    document.location.href = '../../admin/kontak_form.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Data gagal dihapus');
                    document.location.href = '../../admin/kontak_form.php';
                  </script>";
        }

        $stmt->close();
    } else {
        // Jika permintaan penghapusan tidak terpenuhi
        echo "<script>
                alert('Invalid request for deletion');
                document.location.href = '../../admin/kontak_form.php';
              </script>";
    }
} else {
    // Jika metode permintaan tidak valid
    echo "<script>
            alert('Invalid request method');
            document.location.href = '../../admin/kontak_form.php';
          </script>";
}

// Tutup koneksi setelah selesai
$koneksi->close();
?>
