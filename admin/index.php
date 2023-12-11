<?php
include '../koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (!empty($username) && !empty($password)) {
        $hashed_password = md5($password); // Sebaiknya gunakan metode hash yang lebih aman
        
        $stmt = $koneksi->prepare("SELECT * FROM apuser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $hashed_password);
        $stmt->execute();
        $result = $stmt->get_result();
        $num_row = $result->num_rows;
        
        if ($num_row > 0) {
            // Jika login berhasil
            echo "
            <script>
            alert('Login Berhasil');
            window.location='APindex.php';
            </script>
            ";
        } else {
            // Jika login gagal
            echo "
            <script>
            alert('Maaf, Login Gagal. Silahkan coba lagi.');
            </script>
            ";
        }
    } else {
        // Jika form tidak diisi dengan lengkap
        echo "
        <script>
        alert('Maaf, form tidak boleh kosong');
        </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
  <link href="../assets/dist/img/cleon_icon.png" rel="apple-touch-icon">
  <link href="../assets/dist/img/cleon_icon.png" rel="icon">
  <title>JDN</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
 
  <link rel="stylesheet" href="../assets/dist/css/adminlte.css">


</head>
<body class="hold-transition login-page" style="background-image: url('../assets/dist/img/3.png'); background-size: cover;">
<body class="hold-transition login-page">
<div class="container">
<div class="row justify-content-end">
<div class="col-md-16">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
    <div class="login-logo">
  <!-- Mengganti logo gambar dengan teks "JDN" -->
     <h1>JDN</h1>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Login terlebih dahulu admin </p>

      <form action="#" method="post">
        <div class="input-group mb-3">
        <input type="hidden" name="token" value="<?php echo $_SESSION['csrf_token']; ?>">
          <input type="text" name="username" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <!--div class="row">
        <div class="col-8">
        <a href="register.php" class="text-center">Daftar untuk anggota baru</a>
        </div>
        </div--> 
          <!-- /.col -->
          <!--div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
              <label for="agreeTerms">
               Izinkan saya masuk <a href="#"></a>
              </label>
            </div>
          </div-->
          <div class="from-group mb-3">
            <button type="submit" name="login" class="btn btn-primary btn-block">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
</body>
</html>
</body>