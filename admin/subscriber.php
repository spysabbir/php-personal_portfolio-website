<?php
$subscriber = true;
require_once "inc/header.php";
require_once "dbc.php";

$select_query = "SELECT * FROM subscribers ORDER BY id DESC";
$databage_result = mysqli_query(connect_to_db(), $select_query);
?>

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
    <span class="breadcrumb-item active">Subscriber</span>
</nav>

<div class="sl-pagebody">

    <div class="sl-page-title mt-5">
        <h5>Subscriber List</h5>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Subscriber List</h6>
        <div class="card text-start|center|end">
            <div class="card-header">
                <h4 class="card-title">All Subscriber (Total:<?= mysqli_num_rows($databage_result) ?>)</h4>
            </div>
            <div class="card-body text-center">
                <table id="contact_message_table" class="table table-striped table-bordered">
                    <thead class="bg-info">
                        <tr>
                            <th class="text-center">SL No</th>
                            <th class="text-center">Subscriber Email Address</th>
                            <th class="text-center">Subscribe Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $srial_no = 1;
                        foreach (spy_sabbir_all('subscribers') as $single_subscriber) :
                        ?>
                            <tr>
                                <td><?= $srial_no++ ?></td>
                                <td><?= strtolower($single_subscriber["subscriber_email"]) ?></td>
                                <td><?= date("d-M-Y h:i:sa", strtotime($single_subscriber['subscribe_date'])); ?></td>
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
?>