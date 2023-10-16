<?php
$client = true;
require_once "inc/header.php";
require_once "dbc.php";

?>

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
    <span class="breadcrumb-item active">Client</span>
</nav>

<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>Client Add Layouts</h5>
        <p>Forms are used to collect user information with different element types of input, select, checkboxes,
            radios and more.</p>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Client Add Layout</h6>
        <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

        <form method="POST" action="client_post.php" enctype="multipart/form-data">
            <div class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Client Name: <span class="tx-danger">*</span></label>
                            <input class="form-control <?= (isset($_SESSION['client_name_error'])) ? 'is-invalid' : '' ?>" type="text" name="client_name" placeholder="Enter Client Name" value="<?= (isset($_SESSION['old_client_name'])) ? $_SESSION['old_client_name'] : '' ?>">
                            <?php if (isset($_SESSION['client_name_error'])) : ?>
                                <small class="text-danger"><?= $_SESSION['client_name_error'] ?></small>
                            <?php endif;
                            unset($_SESSION['client_name_error'])
                            ?>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Client Photo: <span class="tx-danger">*</span></label>
                            <input class="form-control <?= (isset($_SESSION['client_photo_error'])) ? 'is-invalid' : '' ?>" type="file" name="client_photo" value="<?= (isset($_SESSION['old_client_photo'])) ? $_SESSION['old_client_photo'] : '' ?>">
                            <small>Photo Size 285×90 px</small><br>
                        </div>
                        <?php if (isset($_SESSION['client_photo_error'])) : ?>
                            <small class="text-danger"><?= $_SESSION['client_photo_error'] ?></small>
                        <?php endif;
                        unset($_SESSION['client_photo_error'])
                        ?>
                    </div><!-- col-4 -->
                </div><!-- row -->

                <div class="form-layout-footer">
                    <button class="btn btn-info mg-r-5">Add Client</button>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
        </form>
    </div><!-- card -->

    <div class="sl-page-title mt-5">
        <h5>Client Details</h5>
        <p>Forms are used to collect user information with different element types of input, select, checkboxes,
            radios and more.</p>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Client Details</h6>
        <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

        <table class="table table-striped table-bordered">
            <thead class="bg-info">
                <tr>
                    <th class="text-center">Client Name</th>
                    <th class="text-center">Client Photo</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php foreach (spy_sabbir_all('clients') as $single_client) : ?>
                    <tr>
                        <td><?= $single_client['client_name'] ?></td>
                        <td><img style=" width: 150px; height: 75px; " alt="" src=" ../img/partners/<?= $single_client['client_photo'] ?>">
                        </td>
                        <td>
                            <a href="client_edit.php?id=<?= $single_client['id'] ?>" class=" btn btn-sm btn-info">Edit</a>
                            <button value="client_delete.php?id=<?= $single_client['id'] ?>" class="btn btn-sm btn-danger delete_btn">Delete</button>
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