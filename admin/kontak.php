<?php
include("APheader.php");
include('../koneksi.php');
?>
<?php
$no = 0;
$query=mysqli_query($koneksi, "SELECT * FROM informasi_kontak");
while ($row=mysqli_fetch_assoc($query)) {
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kontak setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kontak Setting</li>
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
                <h3 class="card-title">Update Kontak</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="../backend/kontak/edit_kontak.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                      <label>nama</label>
                      <input type="hidden" name="id_kontak" value="<?php echo $row["id"] ?>">
                      <input class="form-control" type="text" name="edit_nama" value="<?php echo $row["nama"] ?>">
                      <label>alamat</label>
                      <input class="form-control" type="text" name="edit_alamat" value="<?php echo $row["alamat"] ?>">
                      <label>email</label>
                      <input class="form-control" type="text" name="edit_email" value="<?php echo $row["email"] ?>">
                      <label>telepon</label>
                      <input class="form-control" type="text" name="edit_telepon" value="<?php echo $row["telepon"] ?>">
                      <label>fb</label>
                      <input class="form-control" type="text" name="edit_fb" value="<?php echo $row["fb"] ?>"
                      <label>twt</label>
                      <input class="form-control" type="text" name="edit_twt" value="<?php echo $row["twt"] ?>">
                      <label>ig</label>
                      <input class="form-control" type="text" name="edit_ig" value="<?php echo $row["ig"] ?>">
                      <label>mapsz</label>
                      <textarea class="form-control" type="text" name="edit_lokasi" value="<?php echo $row["link_lokasi"] ?>"><?php echo $row["link_lokasi"] ?></textarea>
                      
                      
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