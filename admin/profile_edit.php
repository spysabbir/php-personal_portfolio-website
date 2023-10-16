<?php
$profile = true;
require_once "inc/header.php";
require_once "dbc.php";

?>

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
    <a class="breadcrumb-item" href="profile.php">Profile</a>
    <span class="breadcrumb-item active">Edit Profile</span>
</nav>

<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>Update <?= spy_sabbir_single_select('users', $_SESSION['user_id'])['full_name'] ?> Profile</h5>
        <p>Forms are used to collect user information with different element types of input, select, checkboxes,
            radios and more.</p>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Update <?= spy_sabbir_single_select('users', $_SESSION['user_id'])['full_name'] ?> Profile</h6>
        <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form method="POST" action="profile_edit_post.php" enctype="multipart/form-data" id="edit_form">
                    <div class="form-layout">
                        <div class="row mg-b-25 justify-content-center">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="hidden" name="user_id" class="form-control" value="<?= $_GET['id'] ?>">
                                    <input type="hidden" name="profile_old_photo" class="form-control" value="<?= spy_sabbir_single_select('users', $_SESSION['user_id'])['profile_photo'] ?>">
                                    <label class="form-control-label">Profile Photo: <span class="tx-danger">*</span></label>
                                    <input class="form-control mb-2" type="file" name="profile_new_photo" onchange="readURL(this);">
                                    <small>Photo Size 150*150 px</small><br>
                                    <img class="hidden img-thumbnail " width="150px" height="150px" id="profile_new_photo" src="#" alt="Profile Photo" />
                                    <script>
                                        function readURL(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();
                                                reader.onload = function(e) {
                                                    $('#profile_new_photo').attr('src', e.target.result);
                                                };
                                                $('#profile_new_photo').removeClass('hidden');
                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Full Name: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="user_name" value="<?= spy_sabbir_single_select('users', $_SESSION['user_id'])['full_name'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Designation: <span class="tx-danger">*</span></label>
                                    <select name="user_designation" class="form-control custom-select">
                                        <option value="admin" <?= spy_sabbir_single_select('users', $_SESSION['user_id'])['designation'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                                        <option value="developer" <?= spy_sabbir_single_select('users', $_SESSION['user_id'])['designation'] == 'developer' ? 'selected' : '' ?>>Developer</option>
                                        <option value="user" <?= spy_sabbir_single_select('users', $_SESSION['user_id'])['designation'] == 'user' ? 'selected' : '' ?>>User</option>
                                    </select>
                                    <!-- <input class="form-control" type="text" name="user_designation" value="<?= spy_sabbir_single_select('users', $_SESSION['user_id'])['designation'] ?>"> -->
                                </div>
                            </div>
                            <!-- col-6 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Phone Number: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="user_phone_number" value="<?= spy_sabbir_single_select('users', $_SESSION['user_id'])['phone_number'] ?>">
                                </div>
                            </div>
                            <!-- col-6 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Date Of Birth: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="date" name="user_date_of_birth" value="<?= spy_sabbir_single_select('users', $_SESSION['user_id'])['date_of_birth'] ?>">
                                </div>
                            </div>
                            <!-- col-6 -->

                        </div><!-- row -->

                        <div class="form-layout-footer text-center mt-3">
                            <a class="btn btn-info mg-r-5 text-white" id="edit_btn">Update Profile</a>
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