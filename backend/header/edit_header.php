<?php
include __DIR__ . '/../../koneksi.php'; // Hubungkan ke database

/*edit FAQ*/

$id=$_POST['id_navbar'];
$edit_home=$_POST['edit_home'];
$edit_product=$_POST['edit_product'];
$edit_my_cleon=$_POST['edit_my_cleon'];


$query = mysqli_query($koneksi, "
    UPDATE header 
    SET home_header='$edit_home', about_header='$edit_product', contact_header='$edit_my_cleon' 
    WHERE id='$id'
");

if ($query) {
    ?>
    <script type="text/javascript">
        alert("update data navbar berhasil.");
        window.location='../../admin/header.php'
    </script>
    <?php
}else{
    ?>
    <script type="text/javascript">
        alert("ada kesalahan dalam update data");
        window.location='../../admin/header.php'
    </script>
    <?php
}


?>