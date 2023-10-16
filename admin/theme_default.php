<?php
$theme_default = true;
require_once "inc/header.php";
require_once "dbc.php";

?>


<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
    <span class="breadcrumb-item active">Theme Default</span>
</nav>

<div class="sl-pagebody">

    <div class="sl-page-title">
        <h5>Default Content Update Layouts</h5>
        <p>Forms are used to collect user information with different element types of input, select, checkboxes,
            radios and more.</p>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Default Content Update Layout</h6>
        <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

        <form method="POST" action="theme_default_update.php" enctype="multipart/form-data" id="edit_form">
            <div class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Owner Name: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="owner_name" placeholder="Enter Owner Name" value="<?= spy_sabbir_update('theme_default', 'owner_name'); ?>">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Owner Email Address: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="email" name="owner_email_address" placeholder="Enter Owner Email Address" value="<?= spy_sabbir_update('theme_default', 'owner_email_address'); ?>">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Owner Phone Number: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="owner_phone_number" placeholder="Enter Owner Phone Number" value="<?= spy_sabbir_update('theme_default', 'owner_phone_number'); ?>">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Owner About Details: <span class="tx-danger">*</span></label>
                                    <textarea class="form-control" name="owner_about_details" rows="5" placeholder="Enter Owner About Details"><?= spy_sabbir_update('theme_default', 'owner_about_details'); ?></textarea>
                                </div>
                            </div><!-- col-12 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Years Of Experience: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="years_of_experience" placeholder="Enter Years Of Experience" value="<?= spy_sabbir_update('theme_default', 'years_of_experience'); ?>">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Experience Details: <span class="tx-danger">*</span></label>
                                    <textarea class="form-control" name="experience_details" rows="5" placeholder="Enter Your Experience Details"><?= spy_sabbir_update('theme_default', 'experience_details'); ?></textarea>
                                </div>
                            </div><!-- col-4 -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row mg-b-25">
                            <h6 class="mb-3">Social media link: </h6>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Facekook Link: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="facebook_link" placeholder="Enter Facekook Link" value="<?= spy_sabbir_update('theme_default', 'facebook_link'); ?>">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Twitter Link: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="twitter_link" placeholder="Enter Twitter Link" value="<?= spy_sabbir_update('theme_default', 'twitter_link'); ?>">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Instagram Link: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="instagram_link" placeholder="Enter Instagram Link" value="<?= spy_sabbir_update('theme_default', 'instagram_link'); ?>">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">linkedin Link: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="linkedin_link" placeholder="Enter linkedin Link" value="<?= spy_sabbir_update('theme_default', 'linkedin_link'); ?>">
                                </div>
                            </div><!-- col-4 -->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Banner Old Photo: <span class="tx-danger">*</span></label>
                            <input type="hidden" name="banner_old_photo" class="form-control" value="<?= spy_sabbir_update('theme_default', 'banner_photo'); ?>">
                            <img class="w-100 img-fluid" src="../img/bg/<?= spy_sabbir_update('theme_default', 'banner_photo'); ?>" alt="">
                        </div>
                    </div> -->
                    <div class="col-lg-5">
                        <div class="form-group">
                            <input type="hidden" name="banner_old_photo" class="form-control" value="<?= spy_sabbir_update('theme_default', 'banner_photo'); ?>">
                            <label class="form-control-label">Banner New Photo: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="file" name="banner_new_photo" onchange="readURL(this);">
                            <small>Photo Size 1920*1080 px</small><br>
                            <img class="hidden w-100 img-fluid img-thumbnail" id="banner_new_photo" src="#" alt="Banner New Photo" />
                            <script>
                                function readURL(input) {
                                    if (input.files && input.files[0]) {
                                        var reader = new FileReader();
                                        reader.onload = function(e) {
                                            $('#banner_new_photo').attr('src', e.target.result);
                                        };
                                        $('#banner_new_photo').removeClass('hidden');
                                        reader.readAsDataURL(input.files[0]);
                                    }
                                }
                            </script>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Upload New CV: <span class="tx-danger">*</span></label>
                            <input type="hidden" name="old_upload_cv" class="form-control" value="<?= spy_sabbir_update('theme_default', 'upload_cv'); ?>">
                            <input class="form-control" type="file" name="new_upload_cv">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label">Primary Background Color: <span class="tx-danger">*</span></label>
                            <input class=" mt-2 p-0" type="color" name="primary_background_color" placeholder="Enter Years Of Experience" value="<?= spy_sabbir_update('theme_default', 'primary_background_color'); ?>">
                        </div>
                    </div><!-- col-4 -->
                </div>
            </div><!-- row -->

            <div class="form-layout-footer">
                <a class="btn btn-info mg-r-5 text-white" id="edit_btn">Update</a>
            </div>
        </form>
    </div>

</div>
<!-- sl-pagebody -->

<?php
require_once "inc/footer.php";
require_once "inc/status.php";
?>