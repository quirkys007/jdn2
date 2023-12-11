<?php
include("APheader.php");
include('../koneksi.php');
?>
<?php
$no = 0;
$query=mysqli_query($koneksi, "SELECT * FROM home_page");
while ($row=mysqli_fetch_assoc($query)) {
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">home page setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">home page Setting</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary" id="card_edit<?php echo $no ?>">
              <div class="card-header">
                <h3 class="card-title">Update Home page</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="../backend/home_page/edit_hp.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                      <label>judul</label>
                      <input type="hidden" name="id_hero" value="<?php echo $row["id"] ?>">
                      <input class="form-control" type="text" name="edit_judul" value="<?php echo $row["judul_header"] ?>">
                      <label>judul singkat</label>
                      <input type="hidden" name="id_hero" value="<?php echo $row["id"] ?>">
                      <input class="form-control" type="text" name="edit_dsection" value="<?php echo $row["judul_singkat"] ?>">
                      <label>judul web</label>
                      <textarea class="form-control" type="text" name="edit_kontenp1" value="<?php echo $row["judul_web"] ?>"><?php echo $row["judul_web"] ?></textarea>
                      <label>keterangan</label>
                      <textarea class="form-control" type="text" name="edit_kontenp2" value="<?php echo $row["keterangan"] ?>"><?php echo $row["keterangan"] ?></textarea>
                      <label>Gambar Utama</label>
                      <div><img src="../assets/img/<?php echo $row["image1"] ?>" style="width: 120px;float: leaft;margin-bottom: 5px;"></div>
                      <div><i style="float: left; font-size: 11px; color: red;">Disarankan ukuran gambar 1024x768 pixel</i></div>
                      <input class="form-control" type="file" style="cursor: pointer;" name="edit_gambar">
                      <textarea class="form-control" type="text" name="edit_gambarp1" value="<?php echo $row["image1"] ?>"><?php echo $row["image1"] ?></textarea>
                      <label>judul isi</label>
                      <textarea class="form-control" type="text" name="edit_judul_isi" value="<?php echo $row["judul_isi"] ?>"><?php echo $row["judul_isi"] ?></textarea>
                      <label>isi</label>
                      <textarea class="form-control" type="text" name="edit_isi" value="<?php echo $row["isi"] ?>"><?php echo $row["isi"] ?></textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer float-right">
                  <button type="submit" class="btn btn-primary"><i class="bi bi-send-check"></i> Perbarui</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <?php
              }
            ?>
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

<?php
include("APfooter.php");
?>