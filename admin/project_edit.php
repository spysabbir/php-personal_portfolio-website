<?php
$project = true;
require_once "inc/header.php";
require_once "dbc.php";

?>

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
    <a class="breadcrumb-item" href="project.php">Project</a>
    <span class="breadcrumb-item active">Edit Project</span>
</nav>

<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>Edit Project Layouts</h5>
        <p>Forms are used to collect user information with different element types of input, select, checkboxes,
            radios and more.</p>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Edit Project Layout</h6>
        <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

        <form method="POST" action="project_edit_post.php" enctype="multipart/form-data" id="edit_form">
            <div class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Project Name: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="project_name" value="<?= spy_sabbir_single_select('projects', $_GET['id'])['project_name'] ?>">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Project Type: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="project_type" value="<?= spy_sabbir_single_select('projects', $_GET['id'])['project_type'] ?>">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Clients: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="clients_name" value="<?= spy_sabbir_single_select('projects', $_GET['id'])['clients_name'] ?>">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Completion Date: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="date" name="complettion_date" value="<?= spy_sabbir_single_select('projects', $_GET['id'])['complettion_date'] ?>">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Budget : <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="budget" value="<?= spy_sabbir_single_select('projects', $_GET['id'])['budget'] ?>">
                                </div>
                            </div><!-- col-4 -->
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                <input type="hidden" name="project_id" class="form-control" value="<?= $_GET['id'] ?>">
                                    <label class="form-control-label">Project Old Cover Photo: <span class="tx-danger">*</span></label>
                                    <input type="hidden" name="project_old_photo_name" class="form-control" value="<?= spy_sabbir_single_select('projects', $_GET['id'])['project_cover_photo'] ?>">
                                    <img class="w-100 img-fluid img-thumbnail" src="../img/portfolio/<?= spy_sabbir_single_select('projects', $_GET['id'])['project_cover_photo'] ?>" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Project New Cover Photo: <span class="tx-danger">*</span></label>
                                    <input class="form-control mb-2" type="file" name="project_new_cover_photo" onchange="readURL(this);">
                                    <small>Photo Size 1140*641 px</small><br>
                                    <img class="hidden w-100 img-fluid img-thumbnail" id="project_new_cover_photo" src="#" alt="Project New Cover Photo" />
                                    <script>
                                        function readURL(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();
                                                reader.onload = function(e) {
                                                    $('#project_new_cover_photo').attr('src', e.target.result);
                                                };
                                                $('#project_new_cover_photo').removeClass('hidden');
                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row -->
                <div class="form-layout-footer">
                    <a class="btn btn-info mg-r-5 text-white" id="edit_btn">Update Project</a>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
        </form>
    </div><!-- card -->
</div><!-- sl-pagebody -->



<?php
require_once "inc/footer.php";
require_once "inc/status.php";
?>