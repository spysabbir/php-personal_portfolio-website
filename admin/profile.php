<?php
require_once "inc/header.php";
require_once "dbc.php";
?>

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
    <span class="breadcrumb-item active">Profile</span>
</nav>

<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5><span><?= spy_sabbir_single_select('users', $_SESSION['user_id'])['full_name'] ?></span> Profile</h5>
        <p>Forms are used to collect user information with different element types of input, select, checkboxes,
            radios and more.</p>
    </div><!-- sl-page-title -->
    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title"><?= spy_sabbir_single_select('users', $_SESSION['user_id'])['full_name'] ?></span> Profile</h6>
        <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="profile-content text-center">
                    <img src="img/users/<?= spy_sabbir_single_select('users', $_SESSION['user_id'])['profile_photo'] ?>" class="rounded-circle img-thumbnail" width="150" height="150" alt="">
                    <h4 class="mt-2 mb-5">Profile Photo</h4>

                    <table class="table table-striped table-bordered">
                        <thead class="bg-info">
                            <tr>
                                <th colspan="2" class="text-center"><?= spy_sabbir_single_select('users', $_SESSION['user_id'])['full_name'] ?> Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Full Name:</td>
                                <td><?= spy_sabbir_single_select('users', $_SESSION['user_id'])['full_name'] ?></td>
                            </tr>
                            <tr>
                                <td>Designation:</td>
                                <td><?= ucfirst(spy_sabbir_single_select('users', $_SESSION['user_id'])['designation']) ?></td>
                            </tr>
                            <tr>
                                <td>Email Address:</td>
                                <td><?= spy_sabbir_single_select('users', $_SESSION['user_id'])['email_address'] ?></td>
                            </tr>
                            <tr>
                                <td>Phone Number:</td>
                                <td><?= spy_sabbir_single_select('users', $_SESSION['user_id'])['phone_number'] ?></td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                                <td><?= ucfirst(spy_sabbir_single_select('users', $_SESSION['user_id'])['gender']) ?></td>
                            </tr>
                            <tr>
                                <td>Date of Birth:</td>
                                <td><?= date("d-M-Y", strtotime(spy_sabbir_single_select('users', $_SESSION['user_id'])['date_of_birth'])) ?></td>
                            </tr>
                            <tr>
                                <td>Account Created Date & Time:</td>
                                <td><?= date("d-M-Y h:i:sa", strtotime(spy_sabbir_single_select('users', $_SESSION['user_id'])['created_at'])) ?></td>
                            </tr>
                            <tr>
                                <td colspan="2"><a href="profile_edit.php?id=<?= spy_sabbir_single_select('users', $_SESSION['user_id'])['id'] ?>" class=" btn btn-info">Edit Profile</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div><!-- card -->

</div><!-- sl-pagebody -->
<?php
require_once "inc/footer.php";
require_once "inc/status.php";
?>