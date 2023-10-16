<?php
$experience = true;
require_once "inc/header.php";
require_once "dbc.php";

?>

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
    <span class="breadcrumb-item active">Experience</span>
</nav>

<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>Experience Add Layouts</h5>
        <p>Forms are used to collect user information with different element types of input, select, checkboxes,
            radios and more.</p>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Experience Add Layout</h6>
        <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
        <form method="POST" action="experience_post.php">
            <div class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Company Name: <span class="tx-danger">*</span></label>
                            <input class="form-control <?= (isset($_SESSION['company_name_error'])) ? 'is-invalid' : '' ?>" type="text" name="company_name" placeholder="Enter Company Name" value="<?= (isset($_SESSION['old_company_name'])) ? $_SESSION['old_company_name'] : '' ?>">
                            <?php if (isset($_SESSION['company_name_error'])) : ?>
                                <small class="text-danger"><?= $_SESSION['company_name_error'] ?></small>
                            <?php endif;
                            unset($_SESSION['company_name_error'])
                            ?>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Duration: <span class="tx-danger">*</span></label>
                            <input class="form-control <?= (isset($_SESSION['duration_error'])) ? 'is-invalid' : '' ?>" type="text" name="duration" placeholder="Enter Duration" value="<?= (isset($_SESSION['old_duration'])) ? $_SESSION['old_duration'] : '' ?>">
                            <?php if (isset($_SESSION['duration_error'])) : ?>
                                <small class="text-danger"><?= $_SESSION['duration_error'] ?></small>
                            <?php endif;
                            unset($_SESSION['duration_error'])
                            ?>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Designation : <span class="tx-danger">*</span></label>
                            <input class="form-control <?= (isset($_SESSION['designation_error'])) ? 'is-invalid' : '' ?>" type="text" name="designation" placeholder="Enter Designation" value="<?= (isset($_SESSION['old_designation'])) ? $_SESSION['old_designation'] : '' ?>">
                            <?php if (isset($_SESSION['designation_error'])) : ?>
                                <small class="text-danger"><?= $_SESSION['designation_error'] ?></small>
                            <?php endif;
                            unset($_SESSION['designation_error'])
                            ?>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-12">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                            <textarea class="form-control <?= (isset($_SESSION['description_error'])) ? 'is-invalid' : '' ?>" name="description" rows="5" placeholder="Enter description"><?= (isset($_SESSION['old_description'])) ? $_SESSION['old_description'] : '' ?></textarea>
                            <?php if (isset($_SESSION['description_error'])) : ?>
                                <small class="text-danger"><?= $_SESSION['description_error'] ?></small>
                            <?php endif;
                            unset($_SESSION['description_error'])
                            ?>
                        </div>
                    </div><!-- col-12 -->
                </div><!-- row -->

                <div class="form-layout-footer">
                    <button class="btn btn-info mg-r-5">Add Experience</button>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
        </form>
    </div><!-- card -->

    <div class="sl-page-title mt-5">
        <h5>Experience Details</h5>
        <p>Forms are used to collect user information with different element types of input, select, checkboxes,
            radios and more.</p>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Experience Details</h6>
        <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
        <table class="table table-striped table-bordered">
            <thead class="bg-info">
                <tr>
                    <th class="text-center">Company Name</th>
                    <th class="text-center">Duration</th>
                    <th class="text-center">Designation</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php foreach (spy_sabbir_all('experiences') as $single_experience) : ?>
                    <tr>
                        <td><?= $single_experience['company_name'] ?></td>
                        <td><?= $single_experience['duration'] ?></td>
                        <td><?= $single_experience['designation'] ?></td>
                        <td><?= $single_experience['description'] ?></td>
                        <td>
                            <a href="experience_edit.php?id=<?= $single_experience['id'] ?>" class=" btn btn-sm btn-info">Edit</a>
                            <button value="experience_delete.php?id=<?= $single_experience['id'] ?>" class="btn btn-sm btn-danger delete_btn">Delete</button>
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