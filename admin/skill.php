<?php
$skill = true;
require_once "inc/header.php";
require_once "dbc.php";

?>

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
    <span class="breadcrumb-item active">Skill</span>
</nav>

<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>Skill Add Layouts</h5>
        <p>Forms are used to collect user information with different element types of input, select, checkboxes,
            radios and more.</p>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Skill Add Layout</h6>
        <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

        <form method="POST" action="skill_post.php">
            <div class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Skill Name: <span class="tx-danger">*</span></label>
                            <input class="form-control <?= (isset($_SESSION['skill_name_error'])) ? 'is-invalid' : '' ?>" type="text" name="skill_name" placeholder="Enter Skill Name" value="<?= (isset($_SESSION['old_skill_name'])) ? $_SESSION['old_skill_name'] : '' ?>">

                            <?php if (isset($_SESSION['skill_name_error'])) : ?>
                                <small class="text-danger"><?= $_SESSION['skill_name_error'] ?></small>
                            <?php endif;
                            unset($_SESSION['skill_name_error'])
                            ?>
                        </div>
                    </div><!-- col-6 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label d-flex justify-content-between m-0">
                                <label>Skll Percentage: <span class="tx-danger">*</span></label>
                                <label class="text-info" style="font-size: 22px;"><span id="rangeValue"><?= (isset($_SESSION['old_skill_percentage'])) ? $_SESSION['old_skill_percentage'] : '0' ?></span>%</label>
                            </label>
                            <Input class="form-control <?= (isset($_SESSION['skill_percentage_error'])) ? 'is-invalid' : '' ?>" type="range" name="percentage" value="<?= (isset($_SESSION['old_skill_percentage'])) ? $_SESSION['old_skill_percentage'] : '0' ?>" min="0" max="100" onChange="rangeSlide(this.value)" onmousemove="rangeSlide(this.value)"></Input>

                            <?php if (isset($_SESSION['skill_percentage_error'])) : ?>
                                <small class="text-danger"><?= $_SESSION['skill_percentage_error'] ?></small>
                            <?php endif;
                            unset($_SESSION['skill_percentage_error'])
                            ?>
                        </div>
                    </div><!-- col-6 -->
                </div><!-- row -->

                <div class="form-layout-footer">
                    <button class="btn btn-info mg-r-5">Add Skill</button>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
        </form>
    </div><!-- card -->

    <div class="sl-page-title mt-5">
        <h5>Skill Details</h5>
        <p>Forms are used to collect user information with different element types of input, select, checkboxes,
            radios and more.</p>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Skill Details</h6>
        <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

        <table class="table table-striped table-bordered">
            <thead class="bg-info">
                <tr>
                    <th class="text-center">Skill Name</th>
                    <th class="text-center">Percentage (%)</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php foreach (spy_sabbir_all('skills') as $single_skill) : ?>
                    <tr>
                        <td><?= $single_skill['skill_name'] ?></td>
                        <td><?= $single_skill['percentage'] ?> %</td>
                        <td>
                            <a href="skill_edit.php?id=<?= $single_skill['id'] ?>" class=" btn btn-sm btn-info">Edit</a>
                            <button value="skill_delete.php?id=<?= $single_skill['id'] ?>" class="btn btn-sm btn-danger delete_btn">Delete</button>
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

<script type="text/javascript">
    function rangeSlide(value) {
        document.getElementById('rangeValue').innerHTML = value;
    }
</script>