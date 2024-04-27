<?php
$dashboard = true;
require_once "inc/header.php";
require_once "dbc.php";

$select_query = "SELECT * FROM contacts_messages ORDER BY id DESC LIMIT 5";
$latestMessages = mysqli_query(connect_to_db(), $select_query);

// Message Count
$message_select_query = "SELECT * FROM contacts_messages ORDER BY id DESC";
$message_result = mysqli_query(connect_to_db(), $message_select_query);

$unread_messages_count_query = "SELECT COUNT(*) AS total_unread_message FROM contacts_messages WHERE status = 'unread'";
$total_unread_messages = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $unread_messages_count_query))['total_unread_message'];
$read_messages_count_query = "SELECT COUNT(*) AS total_read_message FROM contacts_messages WHERE status = 'read'";
$total_read_messages = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $read_messages_count_query))['total_read_message'];

// News Count
$news_count_query = "SELECT COUNT(*) AS total_news FROM news";
$total_news = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $news_count_query))['total_news'];

// Project Count
$project_count_query = "SELECT COUNT(*) AS total_project FROM projects";
$total_project = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $project_count_query))['total_project'];


// Client Count
$client_count_query = "SELECT COUNT(*) AS total_client FROM clients";
$total_client = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $client_count_query))['total_client'];

// Subscribers Count
$subscribers_count_query = "SELECT COUNT(*) AS total_subscribers FROM subscribers";
$total_subscribers = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $subscribers_count_query))['total_subscribers'];

// Service Count
$service_count_query = "SELECT COUNT(*) AS total_service FROM services";
$total_service = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $service_count_query))['total_service'];

// Skill Count
$skill_count_query = "SELECT COUNT(*) AS total_skill FROM skills";
$total_skill = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $skill_count_query))['total_skill'];

// Experience Count
$experience_count_query = "SELECT COUNT(*) AS total_experience FROM experiences";
$total_experience = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $experience_count_query))['total_experience'];

// Testimonial Count
$testimonial_count_query = "SELECT COUNT(*) AS total_testimonial FROM testimonials";
$total_testimonial = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $testimonial_count_query))['total_testimonial'];

?>

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
    <span class="breadcrumb-item active">###</span>
</nav>

<div class="sl-pagebody">

    <div class="row row-sm">
        <div class="col-xl-6">
            <div class="row">
                <div class="col-xl-6 mb-3">
                    <div class="card pd-20 bg-primary">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Service</h6>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold"><?= $total_service ?></h3>
                        </div><!-- card-body -->
                        <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                            <div>
                                <span class="tx-11 tx-white-6">Total Skill</span>
                                <h6 class="tx-white mg-b-0"><?= $total_skill ?></h6>
                            </div>
                            <div>
                                <span class="tx-11 tx-white-6">Total Experience</span>
                                <h6 class="tx-white mg-b-0"><?= $total_experience ?></h6>
                            </div>
                        </div><!-- -->
                    </div><!-- card -->
                </div><!-- col-3 -->
                <div class="col-xl-6 mb-3">
                    <div class="card pd-20 bg-info">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Project</h6>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold"><?= $total_project ?></h3>
                        </div><!-- card-body -->
                        <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                            <div>
                                <span class="tx-11 tx-white-6">Total Client</span>
                                <h6 class="tx-white mg-b-0"><?= $total_client ?></h6>
                            </div>
                            <div>
                                <span class="tx-11 tx-white-6">Total Testimonials</span>
                                <h6 class="tx-white mg-b-0"><?= $total_testimonial ?></h6>
                            </div>
                        </div><!-- -->
                    </div><!-- card -->
                </div><!-- col-3 -->
                <div class="col-xl-6 mb-3">
                    <div class="card pd-20 bg-purple">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total News</h6>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold"><?= $total_news ?></h3>
                        </div><!-- card-body -->
                        <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                            <!-- <div>
                                <span class="tx-11 tx-white-6">Total</span>
                                <h6 class="tx-white mg-b-0">0</h6>
                            </div> -->
                            <div>
                                <span class="tx-11 tx-white-6">Total Subscriber</span>
                                <h6 class="tx-white mg-b-0"><?= $total_subscribers ?></h6>
                            </div>
                        </div><!-- -->
                    </div><!-- card -->
                </div><!-- col-3 -->
                <div class="col-xl-6 mb-3">
                    <div class="card pd-20 bg-sl-primary">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Message</h6>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold"><?= mysqli_num_rows($message_result) ?></h3>
                        </div><!-- card-body -->
                        <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                            <div>
                                <span class="tx-11 tx-white-6">Unread Message</span>
                                <h6 class="tx-white mg-b-0">
                                    <?= $total_unread_messages ?>
                                </h6>
                            </div>
                            <div>
                                <span class="tx-11 tx-white-6">Read Message</span>
                                <h6 class="tx-white mg-b-0"><?= $total_read_messages ?></h6>
                            </div>
                        </div><!-- -->
                    </div><!-- card -->
                </div><!-- col-3 -->
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card widget-messages">
                <div class="card-header">
                <span>
                    All Messages: <?= mysqli_num_rows($message_result) ?>, 
                    Unread: <?= $total_unread_messages ?>, 
                    Read: <?= $total_read_messages ?></span>
                </div><!-- card-header -->
                <div class="list-group list-group-flush">
                    <?php
                    foreach ($latestMessages as $single_contacts_messages) :
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