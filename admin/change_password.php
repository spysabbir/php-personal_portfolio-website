<?php
$profile = true;
require_once "inc/header.php";
require_once "dbc.php";

?>

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
    <span class="breadcrumb-item active">Change Password</span>
</nav>

<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>Change <?= spy_sabbir_single_select('users', $_SESSION['user_id'])['full_name'] ?> Password</h5>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Update <?= spy_sabbir_single_select('users', $_SESSION['user_id'])['full_name'] ?> Password</h6>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <form method="POST" action="change_password_post.php" id="edit_form">
                    <div class="form-layout">
                        <div class="row mt-3">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="hidden" name="user_id" class="form-control" value="<?= spy_sabbir_single_select('users', $_SESSION['user_id'])['id'] ?>">
                                    <label class="form-control-label">Current Password: <span class="tx-danger">*</span></label>
                                    <input class="form-control <?= (isset($_SESSION['user_current_password_error'])) ? 'is-invalid' : '' ?>" type="password" placeholder="Enter Current Password" name="user_current_password" value="">
                                    <?php if (isset($_SESSION['user_current_password_error'])) : ?>
                                    <small class="text-danger"><?= $_SESSION['user_current_password_error'] ?></small>
                                    <?php endif;
                                    unset($_SESSION['user_current_password_error'])
                                    ?>
                                </div>
                            </div>
                            <!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">New Password: <span class="tx-danger">*</span></label>
                                    <input class="form-control <?= (isset($_SESSION['user_new_password_error'])) ? 'is-invalid' : '' ?>" type="password" placeholder="Enter New Password" name="user_new_password" value="">
                                    <?php if (isset($_SESSION['user_new_password_error'])) : ?>
                                    <small class="text-danger"><?= $_SESSION['user_new_password_error'] ?></small>
                                    <?php endif;
                                    unset($_SESSION['user_new_password_error'])
                                    ?>
                                </div>
                            </div>
                            <!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Confirm Password: <span class="tx-danger">*</span></label>
                                    <input class="form-control <?= (isset($_SESSION['user_confirm_password_error'])) ? 'is-invalid' : '' ?>" type="password" placeholder="Enter Confirm Password" name="user_confirm_password" value="">
                                    <?php if (isset($_SESSION['user_confirm_password_error'])) : ?>
                                    <small class="text-danger"><?= $_SESSION['user_confirm_password_error'] ?></small>
                                    <?php endif;
                                    unset($_SESSION['user_confirm_password_error'])
                                    ?>
                                </div>
                            </div>
                            <!-- col-4 -->
                        </div><!-- row -->
                        <div class="form-layout-footer text-center mt-3">
                            <a class="btn btn-info mg-r-5 text-white" id="edit_btn">Update Password</a>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div>
        </div>
    </div><!-- card -->
</div><!-- sl-pagebody -->

<?php
require_once "inc/footer.php";
require_once "inc/status.php";
?>