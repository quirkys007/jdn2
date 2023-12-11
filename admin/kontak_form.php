<?php
include("APheader.php");
include('../koneksi.php');
?>

 
     
<?php


// Buat query SQL untuk mengambil data paket internet dari database
$sql = "SELECT * FROM `kontak_form`";
$result = $koneksi->query($sql);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Projects</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Projects</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Projects</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                id
                            </th>
                            <th style="width: 20%">
                                Nama
                            </th>
                            <th style="width: 8%" class="text-center">
                                Email
                            </th>
                            <th>
                                subject
                            </th>
                            <th>
                                message
                            </th>
                            <th>
                                Waktu
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                // Ambil data dari database dan masukkan ke dalam template HTML
                                $id = $row["id"];
                                $nama = $row["name"];
                                $email = $row["email"];
                                $subject = $row["subject"];
                                $message = $row["message"];
                                $waktu_submit = $row["waktu_submit"];
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $id; ?>
                                    </td>
                                    <td>
                                        <?php echo $nama; ?>
                                    </td>
                                    <td>
                                        <?php echo $email; ?>
                                    </td>
                                    <td>
                                        <?php echo $subject; ?>
                                    </td>
                                    <td>
                                        <?php echo $message; ?>
                                    </td>
                                    <td>
                                        <?php echo $waktu_submit; ?>
                                    </td>
                                    <td class="project-actions text-right">
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#delKomen<?php echo $id; ?>"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <div class="modal fade" id="delKomen<?php echo $id; ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="../backend\kontak_form\edit_kontak_form.php" method="post">
                                                <div class="modal-body">
                                                    <input type="hidden" name="id_del" value="<?php echo $id; ?>">
                                                    <p>Apakah anda Yakin akan menghapus id(
                                                        <?php echo $id; ?>) ini ?
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" name="delete_id"
                                                        class="btn btn-danger">Delete</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </tbody>

                            <?php
                            }
                        } else {
                            echo "Tidak ada data komen.";
                        }

                        // Tutup koneksi setelah selesai
                        $koneksi->close();
                        ?>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include("APfooter.php");
?>