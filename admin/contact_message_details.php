<?php
$contact = true;
require_once "inc/header.php";
require_once "dbc.php";

$id = $_GET['id'];
$update_query = "UPDATE contacts_messages SET status='read' WHERE id=$id";
mysqli_query(connect_to_db(), $update_query);

$select_query = "SELECT * FROM contacts_messages WHERE id= $id";
$single_contacts_messages = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $select_query));

?>

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
    <a class="breadcrumb-item" href="contact.php">Contact</a>
    <span class="breadcrumb-item active">Contact Message</span>
</nav>

<div class="sl-pagebody">

    <div class="sl-page-title mt-5">
        <h5>Message Details</h5>
        <p>Forms are used to collect user information with different element types of input, select, checkboxes,
            radios and more.</p>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <div class="card text-start|center|end">
            <img class="card-img-top" src="holder.js/100px180/" alt="">
            <div class="card-header bg-info text-white">
                <h6 class="card-title">Sender Details:</h6>
                <p class="card-text m-0">Send By: <?= $single_contacts_messages['client_full_name'] ?></p>
                <p class="card-text m-0">Sender Email: <?= $single_contacts_messages['client_email_address'] ?></p>
                <p class="card-text m-0">Message Send Date: <?= date("d-M-Y h:i:sa", strtotime($single_contacts_messages['message_send_time'])); ?></p>
            </div>
            <div class="card-body">
                <h6 class="card-title">Message Body</h6>
                <p class="card-text"><?= $single_contacts_messages['client_message'] ?></p>
            </div>
        </div>

    </div><!-- card -->
</div><!-- sl-pagebody -->


<?php
require_once "inc/footer.php";
?>
