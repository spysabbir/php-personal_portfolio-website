<?php
$contact = true;
require_once "inc/header.php";
require_once "dbc.php";

$select_query = "SELECT * FROM contacts_messages ORDER BY id DESC";
$databage_result = mysqli_query(connect_to_db(), $select_query);

$count_query1 = "SELECT COUNT(*) AS total_unread_message FROM contacts_messages WHERE status = 'unread'";
$count_query2 = "SELECT COUNT(*) AS total_read_message FROM contacts_messages WHERE status = 'read'";

?>

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
    <span class="breadcrumb-item active">Contact</span>
</nav>

<div class="sl-pagebody">

    <div class="sl-page-title mt-5">
        <h5>Contact Message List</h5>
        <p>Forms are used to collect user information with different element types of input, select, checkboxes,
            radios and more.</p>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Contact Message List</h6>
        <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
        <div class="card text-start|center|end">
            <div class="card-header">
                <h4 class="card-title">All Messages (Total:<?= mysqli_num_rows($databage_result) ?>, Unread: <?= mysqli_fetch_assoc(mysqli_query(connect_to_db(), $count_query1))['total_unread_message'] ?> Read: <?= mysqli_fetch_assoc(mysqli_query(connect_to_db(), $count_query2))['total_read_message'] ?>)</h4>
            </div>
            <div class="card-body">
                <table id="contact_message_table" class="table table-striped table-bordered">
                    <thead class="bg-info">
                        <tr>
                            <th class="text-center">SL No</th>
                            <th class="text-center">Full Name</th>
                            <th class="text-center">Email Address</th>
                            <th class="text-center">Message Send Date</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $srial_no = 1;
                        foreach (spy_sabbir_all('contacts_messages') as $single_contacts_messages) :
                        ?>
                            <tr class=" <?= ($single_contacts_messages['status'] == 'unread') ? "bg-dark" : "bg-light" ?> ">
                                <td><?= $srial_no++ ?></td>
                                <td><?= ucwords(strtolower($single_contacts_messages["client_full_name"])) ?></td>
                                <td><?= strtolower($single_contacts_messages["client_email_address"]) ?></td>
                                <td><?= date("d-M-Y h:i:sa", strtotime($single_contacts_messages['message_send_time'])); ?></td>
                                <td><?= ucfirst($single_contacts_messages["status"]) ?></td>
                                <td>
                                    <a href="contact_message_details.php?id=<?= $single_contacts_messages['id'] ?>" class=" btn btn-sm btn-success">View Details</a>
                                    <button value="contact_delete.php?id=<?= $single_contacts_messages['id'] ?>" class="btn btn-sm btn-danger delete_btn">Delete</button>
                                    <!-- <a href="contact_delete.php?id=<?= $single_contacts_messages['id'] ?>" class=" btn btn-sm btn-danger">Delete</a> -->
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div><!-- card -->
</div><!-- sl-pagebody -->

<?php
require_once "inc/footer.php";
require_once "inc/status.php";
?>