<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aplikasi Pengelolaan keuangan Babeh jualan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
       <h4 class="login-box-msg">Aplikasi Pengelolaan Keuangan Babeh jualan</h4>
       <p class="login-box-msg">Silahkan Login</p>
<br><center><p>Repost by <a href='https://stokcoding.com/' title='StokCoding.com' target='_blank'>fakhri.com</a></p></center>

       <form action="logincek.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <?php
        $min_number = 1;
        $max_number = 15;

    // generating random numbers
        $angka1 = mt_rand($min_number, $max_number);
        $angka2 = mt_rand($min_number, $max_number);
        ?>

        <input type="hidden" name="angka1" value="<?=$angka1?>">
        <input type="hidden" name="angka2" value="<?=$angka2?>"> 

        <div class="input-group mb-3">
          <label class="form-control"><?=$angka1." + ".$angka2 ?> =  ? </label>
          <input type="number" class="form-control" name="hasil" placeholder="masukan angka">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-calculator"></span>
            </div>
          </div>
        </div>

        <?php if(isset($_SESSION['salah'])){ ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            kalian angka Salah, Silakan jawab lagi.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php } ?>

        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>

</body>
</html>
