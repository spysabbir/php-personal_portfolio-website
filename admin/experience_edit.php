<?php
$experience = true;
require_once "inc/header.php";
require_once "dbc.php";

?>

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
    <a class="breadcrumb-item" href="experience.php">Experience</a>
    <span class="breadcrumb-item active">Edit Experience</span>
</nav>

<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>Edit Experience Layouts</h5>
        <p>Forms are used to collect user information with different element types of input, select, checkboxes,
            radios and more.</p>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Edit Experience Layout</h6>
        <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

        <form method="POST" action="experience_edit_post.php" id="edit_form">
            <div class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="hidden" name="id" class="form-control" value="<?= spy_sabbir_single_select('experiences', $_GET['id'])['id'] ?>">
                            <label class="form-control-label">Company Name: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="company_name" value="<?= spy_sabbir_single_select('experiences', $_GET['id'])['company_name'] ?>">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Duration: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="duration" value="<?= spy_sabbir_single_select('experiences', $_GET['id'])['duration'] ?>">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Designation : <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="designation" value="<?= spy_sabbir_single_select('experiences', $_GET['id'])['designation'] ?>">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-12">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                            <textarea class="form-control" name="description" rows="5"><?= spy_sabbir_single_select('experiences', $_GET['id'])['description'] ?></textarea>
                        </div>
                    </div><!-- col-12 -->
                </div><!-- row -->

                <div class="form-layout-footer">
                    <a class="btn btn-info mg-r-5 text-white" id="edit_btn">Update Experience</a>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
        </form>
    </div><!-- card -->

</div><!-- sl-pagebody -->

<?php
require_once "inc/footer.php";
require_once "inc/status.php";
?>