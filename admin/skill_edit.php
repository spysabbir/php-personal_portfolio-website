<?php
$skill = true;
require_once "inc/header.php";
require_once "dbc.php";

?>

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
    <a class="breadcrumb-item" href="skill.php">Skill</a>
    <span class="breadcrumb-item active">Edit Skill</span>
</nav>

<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>Edit Skill Layouts</h5>
        <p>Forms are used to collect user information with different element types of input, select, checkboxes,
            radios and more.</p>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Edit Skill Layout</h6>
        <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
        <form method="POST" action="skill_edit_post.php" id="edit_form">
            <div class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="hidden" name="id" class="form-control" value="<?= spy_sabbir_single_select('skills', $_GET['id'])['id'] ?>">
                            <label class="form-control-label">Skill Name: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="skill_name" value="<?= spy_sabbir_single_select('skills', $_GET['id'])['skill_name'] ?>">
                        </div>
                    </div><!-- col-6 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label d-flex justify-content-between m-0">
                                <label>Skll Percentage: <span class="tx-danger">*</span></label>
                                <label class="text-info" style="font-size: 22px;"><span id="rangeValue"><?= spy_sabbir_single_select('skills', $_GET['id'])['percentage'] ?></span>%</label>
                            </label>
                            <Input class="form-control" type="range" name="percentage" value="<?= spy_sabbir_single_select('skills', $_GET['id'])['percentage'] ?>" min="0" max="100" onChange="rangeSlide(this.value)" onmousemove="rangeSlide(this.value)"></Input>
                        </div>
                    </div><!-- col-6 -->
                </div><!-- row -->

                <div class="form-layout-footer">
                    <a class="btn btn-info mg-r-5 text-white" id="edit_btn">Update Skill</a>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
        </form>
    </div><!-- card -->

</div><!-- sl-pagebody -->



<?php
require_once "inc/footer.php";
require_once "inc/status.php";
?>

<script type="text/javascript">
    function rangeSlide(value) {
        document.getElementById('rangeValue').innerHTML = value;
    }
</script>