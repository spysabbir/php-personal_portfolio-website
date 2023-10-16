<?php
$client = true;
require_once "inc/header.php";
require_once "dbc.php";

?>

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
    <a class="breadcrumb-item" href="client.php">Client</a>
    <span class="breadcrumb-item active">Edit Client</span>
</nav>

<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>Edit Client Layouts</h5>
        <p>Forms are used to collect user information with different element types of input, select, checkboxes,
            radios and more.</p>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Edit Client Layout</h6>
        <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
        <form method="POST" action="client_edit_post.php" enctype="multipart/form-data" id="edit_form">
            <div class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Client Name: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="client_name" value="<?= spy_sabbir_single_select('clients', $_GET['id'])['client_name'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col-6 -->
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="hidden" name="client_id" class="form-control" value="<?= $_GET['id'] ?>">
                                    <label class="form-control-label">Client Old Cover Photo: <span class="tx-danger">*</span></label>
                                    <input type="hidden" name="client_old_photo_name" class="form-control" value="<?= spy_sabbir_single_select('clients', $_GET['id'])['client_photo'] ?>">
                                    <img class="w-100 img-fluid img-thumbnail" src="../img/partners/<?= spy_sabbir_single_select('clients', $_GET['id'])['client_photo'] ?>" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Client New Cover Photo: <span class="tx-danger">*</span></label>
                                    <input class="form-control mb-2" type="file" name="client_new_cover_photo" onchange="readURL(this);">
                                    <small>Photo Size 285×90 px</small><br>
                                    <img class="hidden w-100 img-fluid img-thumbnail" id="client_new_cover_photo" src="#" alt="Client New Cover Photo" />
                                    <script>
                                        function readURL(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();
                                                reader.onload = function(e) {
                                                    $('#client_new_cover_photo').attr('src', e.target.result);
                                                };
                                                $('#client_new_cover_photo').removeClass('hidden');
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
                    <a class="btn btn-info mg-r-5 text-white" id="edit_btn">Update Client</a>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
        </form>
    </div><!-- card -->
</div><!-- sl-pagebody -->



<?php
require_once "inc/footer.php";
require_once "inc/status.php";
?>