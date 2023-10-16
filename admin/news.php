<?php
$news = true;
require_once "inc/header.php";
require_once "dbc.php";

?>

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
    <span class="breadcrumb-item active"> News</span>
</nav>

<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5> News Add Layouts</h5>
        <p>Forms are used to collect user information with different element types of input, select, checkboxes,
            radios and more.</p>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Latest News Add Layout</h6>
        <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

        <form method="POST" action="news_post.php" enctype="multipart/form-data">
            <div class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">News Headline: <span class="tx-danger">*</span></label>
                            <input class="form-control <?= (isset($_SESSION['news_headline_error'])) ? 'is-invalid' : '' ?>" type="text" name="news_headline" placeholder="Enter News Headline" value="<?= (isset($_SESSION['old_news_headline'])) ? $_SESSION['old_news_headline'] : '' ?>">
                            <?php if (isset($_SESSION['news_headline_error'])) : ?>
                                <small class="text-danger"><?= $_SESSION['news_headline_error'] ?></small>
                            <?php endif;
                            unset($_SESSION['news_headline_error'])
                            ?>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">News Cover Photo: <span class="tx-danger">*</span></label>
                            <input class="form-control <?= (isset($_SESSION['news_cover_photo_error'])) ? 'is-invalid' : '' ?>" type="file" name="news_cover_photo" value="<?= (isset($_SESSION['old_news_cover_photo'])) ? $_SESSION['old_news_cover_photo'] : '' ?>">
                            <small>Photo Size 640*520 px</small>
                        </div>
                        <?php if (isset($_SESSION['news_cover_photo_error'])) : ?>
                            <small class="text-danger"><?= $_SESSION['news_cover_photo_error'] ?></small>
                        <?php endif;
                        unset($_SESSION['news_cover_photo_error'])
                        ?>
                    </div><!-- col-4 -->
                    <div class="col-lg-12">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">News Details: <span class="tx-danger">*</span></label>
                            <textarea class="form-control <?= (isset($_SESSION['news_details_error'])) ? 'is-invalid' : '' ?>" name="news_details" rows="8" placeholder="Enter News Details"><?= (isset($_SESSION['old_news_details'])) ? $_SESSION['old_news_details'] : '' ?></textarea>
                            <?php if (isset($_SESSION['news_details_error'])) : ?>
                                <small class="text-danger"><?= $_SESSION['news_details_error'] ?></small>
                            <?php endif;
                            unset($_SESSION['news_details_error'])
                            ?>
                        </div>
                    </div><!-- col-12 -->
                </div><!-- row -->

                <div class="form-layout-footer">
                    <button class="btn btn-info mg-r-5">Add Latest News</button>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
        </form>
    </div><!-- card -->

    <div class="sl-page-title mt-5">
        <h5> News Details</h5>
        <p>Forms are used to collect user information with different element types of input, select, checkboxes,
            radios and more.</p>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Latest News Details</h6>
        <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
        <div class="row">
            <table id="contact_message_table" class="table table-hover table-bordered">
                <thead class="bg-info">
                    <tr>
                        <th class="text-center">Serial </th>
                        <!-- <th class="text-center">News Img</th> -->
                        <th class="text-center">News Item</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $srial_no = 1;
                    foreach (spy_sabbir_all('news') as $single_news) :
                    ?>
                        <tr class="table-secondary">
                            <td>
                                <h5 class="mt-5"><b> News No: <?= $srial_no++ ?></b></h5>
                            </td>
                            <!-- <td><img height="180px" width="200px" src="../img/news/<?= $single_news['news_cover_photo'] ?>" alt=""></td> -->
                            <td>
                                <div class="item">
                                    <h4><?= $single_news['news_headline'] ?></h4>
                                    <small class="text-info">News Update Time: <?= date("d-M-Y h:i:sa", strtotime($single_news['news_uploaded_date_time'])); ?></small>
                                    <p class="mt-2"><?= $single_news['news_details'] ?></p>
                                </div>
                            </td>
                            <td>
                                <div class="action text-center">
                                    <a href="news_edit.php?id=<?= $single_news['id'] ?>" class=" btn btn-sm btn-info mt-5">Edit</a>
                                    <button value="news_delete.php?id=<?= $single_news['id'] ?>" class="btn btn-sm btn-danger delete_btn mt-2">Delete</button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div><!-- card -->
</div><!-- sl-pagebody -->



<?php
require_once "inc/footer.php";
require_once "inc/status.php";
?>