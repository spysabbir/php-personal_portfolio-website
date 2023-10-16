<?php
session_start();
require_once "dbc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <!-- Meta -->
  <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="author" content="ThemePixels">

  <title>Login | <?= spy_sabbir_update('theme_default', 'owner_name'); ?> | Portfolio Template</title>

  <!-- vendor css -->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">


  <!-- Starlight CSS -->
  <link rel="stylesheet" href="css/starlight.css">
</head>

<body>

  <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
      <div class="signin-logo tx-center tx-24 tx-bold tx-inverse"><?= spy_sabbir_update('theme_default', 'owner_name'); ?> <span class="tx-info tx-normal">Log In</span></div>
      <div class="tx-center mg-b-60">Login with your register information</div>

      <?php if (isset($_SESSION['registion_success'])) : ?>
        <div class="alert alert-success">
          <?= $_SESSION['registion_success']; ?>
        </div>
      <?php endif; ?>

      <?php if (isset($_SESSION['login_error'])) : ?>
        <div class="alert alert-danger">
          <?= $_SESSION['login_error']; ?>
        </div>
      <?php endif; ?>

      <form method="POST" action="login_post.php">
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Enter your email" value="<?= (isset($_SESSION['registion_email_address'])) ? $_SESSION['registion_email_address'] : '' ?>" name="email_address">
          <?php if (isset($_SESSION['email_address_error'])) : ?>
            <small class="text-danger"><?= $_SESSION['email_address_error'] ?></small>
          <?php endif; ?>
        </div><!-- form-group -->

        <div class="form-group">
          <input type="password" class="form-control" placeholder="Enter your password" name="password">
          <?php if (isset($_SESSION['password_error'])) : ?>
            <small class="text-danger"><?= $_SESSION['password_error'] ?></small>
          <?php endif; ?>
          <!-- <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a> -->
        </div><!-- form-group -->

        <button type="submit" class="btn btn-info btn-block">Log In</button>
      </form>
      
      <div class="demo my-2">
        <h5 class="text-center">Demo User Login Details</h5>
        <div class="table-responsive">
          <table class="table table-primary">
            <thead>
              <tr>
                <th>Email</th>
                <th>Password</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>admin@email.com</td>
                <td>12345678</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="mg-t-60 tx-center">If you don't have an account don't try login</div>

    </div><!-- login-wrapper -->

  </div><!-- d-flex -->

  <script src="lib/jquery/jquery.js"></script>
  <script src="lib/popper.js/popper.js"></script>
  <script src="lib/bootstrap/bootstrap.js"></script>

</body>

</html>


<?php
session_unset();
?>