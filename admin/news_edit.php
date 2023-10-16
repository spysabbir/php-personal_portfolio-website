<?php
$news = true;
require_once "inc/header.php";
require_once "dbc.php";

?>

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
    <a class="breadcrumb-item" href="news.php">News</a>
    <span class="breadcrumb-item active">Edit News</span>
</nav>

<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>Edit News Layouts</h5>
        <p>Forms are used to collect user information with different element types of input, select, checkboxes,
            radios and more.</p>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Edit News Layout</h6>
        <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
        <form method="POST" action="news_edit_post.php" enctype="multipart/form-data" id="edit_form">
            <div class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">News Headline: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="news_headline" value="<?= spy_sabbir_single_select('news', $_GET['id'])['news_headline'] ?>">
                                </div>
                            </div>
                            <!-- col-4 -->
                            <div class="col-lg-12">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">News Details: <span class="tx-danger">*</span></label>
                                    <textarea class="form-control" name="news_details" rows="12" placeholder="Enter News Details"> <?= spy_sabbir_single_select('news', $_GET['id'])['news_details'] ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col-6 -->
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">News Old Cover Photo: <span class="tx-danger">*</span></label>
                                    <input type="hidden" name="news_old_photo_name" class="form-control" value="<?= spy_sabbir_single_select('news', $_GET['id'])['news_cover_photo'] ?>">
                                    <input type="hidden" name="news_id" class="form-control" value="<?= $_GET['id'] ?>">
                                    <img class="w-100 img-fluid img-thumbnail" src="../img/news/<?= spy_sabbir_single_select('news', $_GET['id'])['news_cover_photo'] ?>" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">News New Cover Photo: <span class="tx-danger">*</span></label>
                                    <input class="form-control mb-2" type="file" name="news_new_cover_photo" onchange="readURL(this);">
                                    <small>Photo Size 640*520 px</small><br>
                                    <img class="hidden w-100 img-fluid img-thumbnail" id="news_new_cover_photo" src="#" alt="News New Cover Photo" />
                                    <script>
                                        function readURL(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();
                                                reader.onload = function(e) {
                                                    $('#news_new_cover_photo').attr('src', e.target.result);
                                                };
                                                $('#news_new_cover_photo').removeClass('hidden');
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
                    <a class="btn btn-info mg-r-5 text-white" id="edit_btn">Update News</a>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
        </form>
    </div><!-- card -->
</div><!-- sl-pagebody -->



<?php
require_once "inc/footer.php";
require_once "inc/status.php";
?>