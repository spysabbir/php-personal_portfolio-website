<?php
$testimonials = true;
require_once "inc/header.php";
require_once "dbc.php";

?>

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
    <a class="breadcrumb-item" href="testimonials.php">Testimonials</a>
    <span class="breadcrumb-item active">Edit Testimonials</span>
</nav>

<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>Edit Testimonials Layouts</h5>
        <p>Forms are used to collect user information with different element types of input, select, checkboxes,
            radios and more.</p>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Edit Testimonials Layout</h6>
        <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

        <form method="POST" action="testimonials_edit_post.php" id="edit_form">
            <div class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="hidden" name="id" class="form-control" value="<?= spy_sabbir_single_select('testimonials', $_GET['id'])['id'] ?>">
                            <label class="form-control-label">Customer Name: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="customer_name" value="<?= spy_sabbir_single_select('testimonials', $_GET['id'])['customer_name'] ?>">
                        </div>
                    </div><!-- col-6 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Customer Details: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="customer_details" value="<?= spy_sabbir_single_select('testimonials', $_GET['id'])['customer_details'] ?>">
                        </div>
                    </div><!-- col-6 -->
                    <div class="col-lg-12">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Testimonials Details: <span class="tx-danger">*</span></label>
                            <textarea class="form-control" name="testimonials_details" rows="5" placeholder="Enter Testimonials Details"><?= spy_sabbir_single_select('testimonials', $_GET['id'])['testimonials_details'] ?></textarea>
                        </div>
                    </div><!-- col-12 -->
                </div><!-- row -->

                <div class="form-layout-footer">
                    <a class="btn btn-info mg-r-5 text-white" id="edit_btn">Update Testimonials</a>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
        </form>
    </div><!-- card -->

</div><!-- sl-pagebody -->

<?php
require_once "inc/footer.php";
require_once "inc/status.php";
?>