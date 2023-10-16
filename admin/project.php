<?php
$project = true;
require_once "inc/header.php";
require_once "dbc.php";

?>

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
    <span class="breadcrumb-item active">Projects</span>
</nav>

<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>Projects Add Layouts</h5>
        <p>Forms are used to collect user information with different element types of input, select, checkboxes,
            radios and more.</p>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Projects Add Layout</h6>
        <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

        <form method="POST" action="project_post.php" enctype="multipart/form-data">
            <div class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Project Name: <span class="tx-danger">*</span></label>
                            <input class="form-control <?= (isset($_SESSION['project_name_error'])) ? 'is-invalid' : '' ?>" type="text" name="project_name" placeholder="Enter Project Name" value="<?= (isset($_SESSION['old_project_name'])) ? $_SESSION['old_project_name'] : '' ?>">
                            <?php if (isset($_SESSION['project_name_error'])) : ?>
                                <small class="text-danger"><?= $_SESSION['project_name_error'] ?></small>
                            <?php endif;
                            unset($_SESSION['project_name_error'])
                            ?>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Project Type: <span class="tx-danger">*</span></label>
                            <input class="form-control <?= (isset($_SESSION['project_type_error'])) ? 'is-invalid' : '' ?>" type="text" name="project_type" placeholder="Enter Project Type" value="<?= (isset($_SESSION['old_project_type'])) ? $_SESSION['old_project_type'] : '' ?>">
                            <?php if (isset($_SESSION['project_type_error'])) : ?>
                                <small class="text-danger"><?= $_SESSION['project_type_error'] ?></small>
                            <?php endif;
                            unset($_SESSION['project_type_error'])
                            ?>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Clients: <span class="tx-danger">*</span></label>
                            <input class="form-control <?= (isset($_SESSION['clients_name_error'])) ? 'is-invalid' : '' ?>" type="text" name="clients_name" placeholder="Enter Clients Name" value="<?= (isset($_SESSION['old_clients_name'])) ? $_SESSION['old_clients_name'] : '' ?>">
                            <?php if (isset($_SESSION['clients_name_error'])) : ?>
                                <small class="text-danger"><?= $_SESSION['clients_name_error'] ?></small>
                            <?php endif;
                            unset($_SESSION['clients_name_error'])
                            ?>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Complettion Date: <span class="tx-danger">*</span></label>
                            <input class="form-control <?= (isset($_SESSION['complettion_date_error'])) ? 'is-invalid' : '' ?>" type="date" name="complettion_date" placeholder="Enter Complettion Date" value="<?= (isset($_SESSION['old_complettion_date'])) ? $_SESSION['old_complettion_date'] : '' ?>">
                            <?php if (isset($_SESSION['complettion_date_error'])) : ?>
                                <small class="text-danger"><?= $_SESSION['complettion_date_error'] ?></small>
                            <?php endif;
                            unset($_SESSION['complettion_date_error'])
                            ?>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Budget: <span class="tx-danger">*</span></label>
                            <input class="form-control <?= (isset($_SESSION['budget_error'])) ? 'is-invalid' : '' ?>" type="text" name="budget" placeholder="Enter Budget" value="<?= (isset($_SESSION['old_budget'])) ? $_SESSION['old_budget'] : '' ?>">
                            <?php if (isset($_SESSION['budget_error'])) : ?>
                                <small class="text-danger"><?= $_SESSION['budget_error'] ?></small>
                            <?php endif;
                            unset($_SESSION['budget_error'])
                            ?>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Project Cover Photo: <span class="tx-danger">*</span></label>
                            <input class="form-control <?= (isset($_SESSION['project_cover_photo_error'])) ? 'is-invalid' : '' ?>" type="file" name="project_cover_photo" value="<?= (isset($_SESSION['old_project_cover_photo'])) ? $_SESSION['old_project_cover_photo'] : '' ?>">
                            <small>Photo Size 1140*641 px</small><br>
                        </div>
                        <?php if (isset($_SESSION['project_cover_photo_error'])) : ?>
                            <small class="text-danger"><?= $_SESSION['project_cover_photo_error'] ?></small>
                        <?php endif;
                        unset($_SESSION['project_cover_photo_error'])
                        ?>
                    </div><!-- col-12 -->
                </div><!-- row -->

                <div class="form-layout-footer">
                    <button class="btn btn-info mg-r-5">Add Project</button>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
        </form>
    </div><!-- card -->

    <div class="sl-page-title mt-5">
        <h5>Projects Details</h5>
        <p>Forms are used to collect user information with different element types of input, select, checkboxes,
            radios and more.</p>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Projects Details</h6>
        <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

        <table id="contact_message_table" class="table table-striped table-bordered table-hover">
            <thead class="bg-info">
                <tr>
                    <th class="text-center">Project Name:</th>
                    <th class="text-center">Project Type:</th>
                    <th class="text-center">CLIENTS:</th>
                    <th class="text-center">COMPLETION Date:</th>
                    <th class="text-center">BUDGET:</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php foreach (spy_sabbir_all('projects') as $single_project) : ?>
                    <tr>
                        <td><?= $single_project['project_name'] ?></td>
                        <td><?= $single_project['project_type'] ?></td>
                        <td><?= $single_project['clients_name'] ?></td>
                        <td><?= $single_project['complettion_date'] ?></td>
                        <td><?= $single_project['budget'] ?></td>
                        <td>
                            <a href="project_edit.php?id=<?= $single_project['id'] ?>" class=" btn btn-sm btn-info">Edit</a>
                            <button value="project_delete.php?id=<?= $single_project['id'] ?>" class="btn btn-sm btn-danger delete_btn">Delete</button>
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