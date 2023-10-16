<?php
session_start();
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

  <title>Register | Spy Sabbir | Portfolio Template</title>

  <!-- vendor css -->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">
  <link href="lib/select2/css/select2.min.css" rel="stylesheet">


  <!-- Starlight CSS -->
  <link rel="stylesheet" href="css/starlight.css">
</head>

<body>

  <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v">

    <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
      <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Spy Sabbir <span class="tx-info tx-normal">Register</span></div>
      <div class="tx-center mg-b-50">Register with your personal information</div>
      
      <form method="POST" action="register_post.php">
        <div class="form-group">
          
          <div class="form-group">
            <input type="text" class="form-control <?= (isset($_SESSION['name_error'])) ? 'is-invalid' : '' ?>" placeholder="Enter your name" name="full_name" value="<?= (isset($_SESSION['old_name'])) ? $_SESSION['old_name'] : '' ?>">
            <?php if (isset($_SESSION['name_error'])) : ?>
              <small class="text-danger"><?= $_SESSION['name_error'] ?></small>
            <?php endif; ?>
          </div><!-- form-group -->

          <div class="form-group">
            <input type="email" class="form-control <?= (isset($_SESSION['email_address_error'])) ? 'is-invalid' : '' ?>" placeholder="Enter your email" name="email_address" value="<?= (isset($_SESSION['old_email'])) ? $_SESSION['old_email'] : '' ?>">
            <?php if (isset($_SESSION['email_address_error'])) : ?>
              <small class="text-danger"><?= $_SESSION['email_address_error'] ?></small>
            <?php endif; ?>
            <?php if (isset($_SESSION['same_email_check_error'])) : ?>
              <small class="text-danger"><?= $_SESSION['same_email_check_error'] ?></small>
            <?php endif; ?>
          </div><!-- form-group -->

          <div class="form-group">
            <label class="d-flex justify-content-around">
              <label for="">Gender:</label>
              <label>
                <input name="gender" type="radio" value="male" <?= (isset($_SESSION['old_gender']) && $_SESSION['old_gender'] == 'male') ? 'checked' : '' ?>>
                <span>Male</span>
              </label>
              <label>
                <input name="gender" type="radio" value="female" <?= (isset($_SESSION['old_gender']) && $_SESSION['old_gender'] == 'female') ? 'checked' : '' ?>>
                <span>Female</span>
              </label>
              <label>
                <input name="gender" type="radio" value="others" <?= (isset($_SESSION['old_gender']) && $_SESSION['old_gender'] == 'others') ? 'checked' : '' ?>>
                <span>Others</span>
              </label>
            </label>
            <?php if (isset($_SESSION['gender_error'])) : ?>
              <small class="text-danger"><?= $_SESSION['gender_error'] ?></small>
            <?php endif; ?>
          </div><!-- form-group -->

          <div class="form-group">
            <input type="password" class="form-control <?= (isset($_SESSION['password_error'])) ? 'is-invalid' : '' ?>" placeholder="Enter your password" name="password">
            <?php if (isset($_SESSION['password_error'])) : ?>
              <small class="text-danger"><?= $_SESSION['password_error'] ?></small>
            <?php endif; ?>
          </div><!-- form-group -->

          <div class="form-group">
            <input type="password" class="form-control <?= (isset($_SESSION['confirm_password_error'])) ? 'is-invalid' : '' ?>" placeholder="Enter your confirm password" name="confirm_password">
            <?php if (isset($_SESSION['confirm_password_error'])) : ?>
              <small class="text-danger"><?= $_SESSION['confirm_password_error'] ?></small>
            <?php endif; ?>
            <?php if (isset($_SESSION['password_match_error'])) : ?>
              <small class="text-danger"><?= $_SESSION['password_match_error'] ?></small>
            <?php endif; ?>
          </div><!-- form-group -->

          <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms
            of use of our website.</div>
          <button type="submit" class="btn btn-info btn-block">Register</button>
      </form>

      <div class="mg-t-40 tx-center">Already have an account? <a href="login.php" class="tx-info">Log In Now</a></div>
    </div><!-- login-wrapper -->
  </div><!-- d-flex -->

  <script src="lib/jquery/jquery.js"></script>
  <script src="lib/popper.js/popper.js"></script>
  <script src="lib/bootstrap/bootstrap.js"></script>
  <script src="lib/select2/js/select2.min.js"></script>
  <script>
    $(function() {
      'use strict';

      $('.select2').select2({
        minimumResultsForSearch: Infinity
      });
    });
  </script>

</body>

</html>


<?php
session_unset();
?>