<?php
include __DIR__ . '/../../config/config.php'; // Hubungkan ke database

/*edit FAQ*/

$id=$_POST['id_faq'];
$edit_pertanyaan=$_POST['edit_pertanyaan'];
$edit_jawaban=$_POST['edit_jawaban'];

$query=mysqli_query($conn, "
    UPDATE faq_content SET question='$edit_pertanyaan', answer='$edit_jawaban' WHERE id='$id'
    ");

if ($query) {
    ?>
    <script type="text/javascript">
        alert("update data berhasil.");
        window.location='../../admin/faq.php'
    </script>
    <?php
}else{
    ?>
    <script type="text/javascript">
        alert("ada kesalahan dalam update data");
        window.location='../../admin/faq.php'
    </script>
    <?php
}


?>