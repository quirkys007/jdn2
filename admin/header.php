<?php
include("APheader.php");
include('../koneksi.php');
?>
<?php
$no = 0;
$query=mysqli_query($koneksi, "SELECT * FROM header");
while ($row=mysqli_fetch_assoc($query)) {
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">header setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">header Setting</li>
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
                <h3 class="card-title">Update Navbar</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="../backend/header/edit_header.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                      <label>Navbar pertama</label>
                      <input type="hidden" name="id_navbar" value="<?php echo $row["id"] ?>">
                      <input class="form-control" type="text" name="edit_home" value="<?php echo $row["home_header"] ?>">
                      <label>Navbar kedua</label>
                      <input class="form-control" type="text" name="edit_product" value="<?php echo $row["about_header"] ?>">
                      <label>Navbar ketiga</label>
                      <input class="form-control" type="text" name="edit_my_cleon" value="<?php echo $row["contact_header"] ?>">
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