<?php
$testimonials = true;
require_once "inc/header.php";
require_once "dbc.php";
?>

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
    <span class="breadcrumb-item active">Testimonials</span>
</nav>

<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>Testimonials Add Layouts</h5>
        <p>Forms are used to collect user information with different element types of input, select, checkboxes,
            radios and more.</p>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Testimonials Add Layout</h6>
        <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

        <form method="POST" action="testimonials_post.php">
            <div class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Customer Name: <span class="tx-danger">*</span></label>
                            <input class="form-control <?= (isset($_SESSION['customer_name_error'])) ? 'is-invalid' : '' ?>" type="text" name="customer_name" placeholder="Enter Customer Name" value="<?= (isset($_SESSION['old_customer_name'])) ? $_SESSION['old_customer_name'] : '' ?>">
                            <?php if (isset($_SESSION['customer_name_error'])) : ?>
                                <small class="text-danger"><?= $_SESSION['customer_name_error'] ?></small>
                            <?php endif;
                            unset($_SESSION['customer_name_error'])
                            ?>
                        </div>
                    </div><!-- col-6 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Customer Details: <span class="tx-danger">*</span></label>
                            <input class="form-control <?= (isset($_SESSION['customer_details_error'])) ? 'is-invalid' : '' ?>" type="text" name="customer_details" placeholder="Enter Customer Details" value="<?= (isset($_SESSION['old_customer_details'])) ? $_SESSION['old_customer_details'] : '' ?>">
                            <?php if (isset($_SESSION['customer_details_error'])) : ?>
                                <small class="text-danger"><?= $_SESSION['customer_details_error'] ?></small>
                            <?php endif;
                            unset($_SESSION['customer_details_error'])
                            ?>
                        </div>
                    </div><!-- col-6 -->
                    <div class="col-lg-12">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Testimonials Details: <span class="tx-danger">*</span></label>
                            <textarea class="form-control <?= (isset($_SESSION['testimonials_details_error'])) ? 'is-invalid' : '' ?>" name="testimonials_details" rows="5" placeholder="Enter Testimonials Details"><?= (isset($_SESSION['old_testimonials_details'])) ? $_SESSION['old_testimonials_details'] : '' ?></textarea>
                            <?php if (isset($_SESSION['testimonials_details_error'])) : ?>
                                <small class="text-danger"><?= $_SESSION['testimonials_details_error'] ?></small>
                            <?php endif;
                            unset($_SESSION['testimonials_details_error'])
                            ?>
                        </div>
                    </div><!-- col-12 -->
                </div><!-- row -->

                <div class="form-layout-footer">
                    <button class="btn btn-info mg-r-5">Add Testimonials</button>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
        </form>
    </div><!-- card -->

    <div class="sl-page-title mt-5">
        <h5>Testimonials Details</h5>
        <p>Forms are used to collect user information with different element types of input, select, checkboxes,
            radios and more.</p>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Testimonials Details</h6>
        <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

        <table class="table table-striped table-bordered">
            <thead class="bg-info">
                <tr>
                    <th class="text-center">Customer Name</th>
                    <th class="text-center">Customer Details</th>
                    <th class="text-center">Testimonials Details</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php foreach (spy_sabbir_all('testimonials') as $single_testimonials) : ?>
                    <tr>
                        <td><?= $single_testimonials['customer_name'] ?></td>
                        <td><?= $single_testimonials['customer_details'] ?></td>
                        <td><?= $single_testimonials['testimonials_details'] ?></td>
                        <td>
                            <div class="action text-center">
                                <a href="testimonials_edit.php?id=<?= $single_testimonials['id'] ?>" class=" btn btn-sm btn-info">Edit</a>
                                <button value="testimonials_delete.php?id=<?= $single_testimonials['id'] ?>" class="btn btn-sm btn-danger delete_btn mt-2">Delete</button>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div><!-- card -->

</div><!-- sl-pagebody -->




<?php
require_once "inc/footer.php";
require_once "inc/status.php";
?>