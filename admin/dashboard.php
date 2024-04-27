<?php
$dashboard = true;
require_once "inc/header.php";
require_once "dbc.php";

$message_query = "SELECT * FROM contacts_messages ORDER BY id DESC limit 5";
$databage_result = mysqli_query(connect_to_db(), $message_query);

$count_query1 = mysqli_query(connect_to_db(), "SELECT COUNT(*) AS total_rows FROM contacts_messages");
?>

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
    <span class="breadcrumb-item active">###</span>
</nav>

<div class="sl-pagebody">

    <div class="row row-sm">
        <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
                <div class="d-flex justify-content-between align-items-center mg-b-10">
                    <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Month's Order</h6>
                    <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                </div><!-- card-header -->
                <div class="d-flex align-items-center justify-content-between">
                    <span class="sparkline2">9,6,5,1,3</span>
                    <h3 class="mg-b-0 tx-white tx-lato tx-bold">1</h3>
                </div><!-- card-body -->
                <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                    <div>
                        <span class="tx-11 tx-white-6">This Year's Order</span>
                        <h6 class="tx-white mg-b-0"><?php $count_query1 ?></h6>
                    </div>
                    <div>
                        <span class="tx-11 tx-white-6">Total Order</span>
                        <h6 class="tx-white mg-b-0">5</h6>
                    </div>
                </div><!-- -->
            </div><!-- card -->
        </div><!-- col-3 -->
        <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card pd-20 bg-info">
                <div class="d-flex justify-content-between align-items-center mg-b-10">
                    <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Month's Client</h6>
                    <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                </div><!-- card-header -->
                <div class="d-flex align-items-center justify-content-between">
                    <span class="sparkline2">9,6,5,1,3</span>
                    <h3 class="mg-b-0 tx-white tx-lato tx-bold">1</h3>
                </div><!-- card-body -->
                <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                    <div>
                        <span class="tx-11 tx-white-6">This Year's Client</span>
                        <h6 class="tx-white mg-b-0">5</h6>
                    </div>
                    <div>
                        <span class="tx-11 tx-white-6">Today Client</span>
                        <h6 class="tx-white mg-b-0">5</h6>
                    </div>
                </div><!-- -->
            </div><!-- card -->
        </div><!-- col-3 -->
        <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-purple">
                <div class="d-flex justify-content-between align-items-center mg-b-10">
                    <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Month's Earning</h6>
                    <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                </div><!-- card-header -->
                <div class="d-flex align-items-center justify-content-between">
                    <span class="sparkline2">9,6,5,1,3</span>
                    <h3 class="mg-b-0 tx-white tx-lato tx-bold">$100</h3>
                </div><!-- card-body -->
                <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                    <div>
                        <span class="tx-11 tx-white-6">This Year's Earning</span>
                        <h6 class="tx-white mg-b-0">$552</h6>
                    </div>
                    <div>
                        <span class="tx-11 tx-white-6">Total Earning</span>
                        <h6 class="tx-white mg-b-0">$552</h6>
                    </div>
                </div><!-- -->
            </div><!-- card -->
        </div><!-- col-3 -->
        <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-sl-primary">
                <div class="d-flex justify-content-between align-items-center mg-b-10">
                    <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Year's Sales</h6>
                    <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                </div><!-- card-header -->
                <div class="d-flex align-items-center justify-content-between">
                    <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                    <h3 class="mg-b-0 tx-white tx-lato tx-bold">$552</h3>
                </div><!-- card-body -->
                <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                    <div>
                        <span class="tx-11 tx-white-6">Gross Sales</span>
                        <h6 class="tx-white mg-b-0">$92.00</h6>
                    </div>
                    <div>
                        <span class="tx-11 tx-white-6">Tax Return</span>
                        <h6 class="tx-white mg-b-0">$0</h6>
                    </div>
                </div><!-- -->
            </div><!-- card -->
        </div><!-- col-3 -->
    </div><!-- row -->

    <div class="row row-sm mg-t-20">
        <div class="col-xl-4 mg-t-20 mg-xl-t-0">
            <div class="card widget-messages mg-t-20">
                <div class="card-header">
                    <span>Messages</span>
                </div><!-- card-header -->
                <div class="list-group list-group-flush">
                    <?php
                    foreach (spy_sabbir_all('contacts_messages') as $single_contacts_messages) :
                    ?>
                    <a href="contact_message_details.php?id=<?= $single_contacts_messages['id'] ?>" class="list-group-item list-group-item-action media <?= ($single_contacts_messages['status'] == 'unread') ? "bg-dark" : "bg-light" ?> ">
                        <div class="media-body">
                            <div class="msg-top" >
                                <span class="<?= ($single_contacts_messages['status'] == 'unread') ? "text-light" : "text-dark" ?>"><?= ucwords(strtolower($single_contacts_messages["client_full_name"])) ?></span>
                                <span class="<?= ($single_contacts_messages['status'] == 'unread') ? "text-light" : "text-dark" ?>"><?= date("d-M-Y h:i:sa", strtotime($single_contacts_messages['message_send_time'])); ?></span>
                            </div>
                            <p class="msg-summary"><?= substr($single_contacts_messages['client_message'], 0, 100) ?> ...</p>
                        </div><!-- media-body -->
                    </a><!-- list-group-item -->
                    <?php endforeach; ?>
                </div><!-- list-group -->
                <div class="card-footer">
                    <a href="contact.php" class="tx-12"><i class="fa fa-angle-down mg-r-3"></i> All messages</a>
                </div><!-- card-footer -->
            </div><!-- card -->
        </div><!-- col-3 -->
    </div><!-- row -->

</div><!-- sl-pagebody -->
<?php
require_once "inc/footer.php";
?>